const priceArray = [
  "tour_price < 1000000",
  "tour_price >= 1000000 and tour_price < 3000000",
  "tour_price >= 3000000 and tour_price < 5000000",
  "tour_price >= 5000000 and tour_price < 10000000",
  "tour_price >= 10000000",
];

const timeArray = [
  "tour_times = '8 ngày 7 đêm'",
  "tour_times = '7 ngày 6 đêm'",
  "tour_times = '6 ngày 5 đêm'",
  "tour_times = '5 ngày 4 đêm'",
  "tour_times = '3 ngày 2 đêm'",
  "tour_times = '2 ngày 1 đêm'",
  "tour_times = 'Trong ngày'",
];

const regionArray = [
  "tour_region = 'Miền Bắc'",
  "tour_region = 'Miền Trung'",
  "tour_region = 'Miền Nam'",
];

const placeArray = [
  "tour_place = 'Ninh Bình'",
  "tour_place = 'Đà Nẵng'",
  "tour_place = 'Quy Nhơn'",
  "tour_place = 'Nha Trang'",
  "tour_place = 'Vũng Tàu'",
];

const typeArray = [
  "tour_type = 'Du lịch mạo hiểm'",
  "tour_type = 'Du lịch biển'",
  "tour_type = 'Du lịch thông thường'",
];

const price = document.getElementsByName("price");
const time = document.getElementsByName("time");
const region = document.getElementsByName("region");
const place = document.getElementsByName("place");
const type = document.getElementsByName("type");
const tours = document.getElementById("filter");
let sql = "SELECT * FROM tours where tour_id is not null ";
const formatsMoney = (x) => {
    return new Intl.NumberFormat('it-IT', {style: 'currency', currency: 'VND'}).format(x);
};
//tạo proxy để lắng nghe sự thay đổi của biến sql
var sqlProxy = new Proxy(
  { value: sql },
  {
    set: function (target, key, value) {
      target[key] = value;
        // console.log("sql: " + value);
      //gửi truy vấn đến server và lấy dữ liệu hiển thị ra màn hình
      const xhr = new XMLHttpRequest();
      xhr.open("POST", `../controllers/filter.php`, true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onload = function () {
        if (this.status === 200) {
          const data = JSON.parse(this.responseText);
            if (data.length > 0) {
                tours.innerHTML = "";
              data.forEach(function (item) {
                const priceSale = item.price - (item.price * item.sale) / 100;
                const div = document.createElement("div");
                div.innerHTML = `<div class="xl:w-96 sm:w-10/12 md:w-1/3 h-96 border-2 drop-shadow my-5 mx-2"> <div class="relative group"> ${
                  item.sale > 0
                    ? `<div class="absolute top-0 left-3 bg-red-600 h-14 w-12 text-white pl-2 pt-2 clip-path"> ${item.sale.toString().padStart(2, 0)}% </div>`
                    : ""
                } <div class="group"> <img class="h-64 w-full" src=${
                  item.image
                } alt="place"> <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition duration-500 ease-in-out "> </div> <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"> <button class="hidden group-hover:block w-24 h-8 rounded-3xl bg-sky-500 p-1 text-sm text-white font-semibold animation-btn"> <a href="/tour/${
                  item.title
                }?q=${
                  item.id
                }">Chi tiết</a> </button> </div> </div> <div class="absolute bottom-3 right-3 flex"> <div class="bg-white p-1 mr-2"> <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/tag_icon_1.png?1671122588148" alt="transport"> </div> <div class="bg-white p-1 mr-2"> <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/tag_icon_3.png?1671122588148" alt="transport"> </div> </div> </div> <a href="#" title="${
                  item.title
                }" class="xl:text-base font-semibold p-2 truncate block cursor-pointer hover:text-sky-500"> ${
                  item.title
                } </a> <div class="flex border-t-2 p-1 mx-3 drop-shadow-none mt-4"> <p class="xl:text-2xl text-sky-500 font-semibold mr-3 mt-2"> ${formatsMoney(priceSale)} </p> ${
                  item.sale != 0
                    ? `<p class="text-sm leading-8 text-gray-400 line-through mt-3"> ${formatsMoney(item.price)}</p>`
                    : ""
                } </div>`;
                tours.appendChild(div);
              });
            } else {
                tours.innerHTML = "";
              const h1 = document.createElement("h1");
              h1.classList.add(
                "text-center",
                "text-3xl",
                "text-red-500",
                "my-10",
                "uppercase",
                "font-bold",
                "w-full"
              );
              h1.innerText = "Không có tour nào phù hợp!";
              tours.appendChild(h1);
            }
        } else {
          console.log("error");
        }
      };
      xhr.send(`sql=${value}`);
      return true;
    },
  }
);

price.forEach((element) => {
    element.addEventListener("click", () => {
        const index = element.value;
        if (element.checked) {
          sqlProxy.value += ` AND ${priceArray[index]}`;
        } else {
          sqlProxy.value = sqlProxy.value.replace(` AND ${priceArray[index]}`, "");
        }
      });
  });
  

time.forEach((element) => {
  element.addEventListener("click", () => {
    const index = element.value;
    if (element.checked) {
      sqlProxy.value += ` AND ${timeArray[index]}`;
    } else {
      sqlProxy.value = sqlProxy.value.replace(` AND ${timeArray[index]}`, "");
    }
  });
});

region.forEach((element) => {
  element.addEventListener("click", () => {
    const index = element.value;
    if (element.checked) {
      sqlProxy.value += ` AND ${regionArray[index]}`;
    } else {
      sqlProxy.value = sqlProxy.value.replace(` AND ${regionArray[index]}`, "");
    }
  });
});

place.forEach((element) => {
  element.addEventListener("click", () => {
    const index = element.value;
    if (element.checked) {
      sqlProxy.value += ` AND ${placeArray[index]}`;
    } else {
      sqlProxy.value = sqlProxy.value.replace(` AND ${placeArray[index]}`, "");
    }
  });
});

type.forEach((element) => {
  element.addEventListener("click", () => {
    const index = element.value;
    if (element.checked) {
      sqlProxy.value += ` AND ${typeArray[index]}`;
    } else {
      sqlProxy.value = sqlProxy.value.replace(` AND ${typeArray[index]}`, "");
    }
  });
});
