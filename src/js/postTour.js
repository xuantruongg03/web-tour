document.getElementById("uploadExcel").addEventListener("change", function () {
  var file = this.files[0];
  if (file) {
    const box = document.getElementById("box-excel");
    box.innerHTML = "";
    box.innerHTML = `<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col jusitfy-center items-center"><label class="my-3 text-lg">${file.name}</label><button class="h-9 w-24 bg-sky-500 border-none rounded text-white " id = "btnUploadExcel">Upload</button></div>`;
  }
  document
    .getElementById("btnUploadExcel")
    .addEventListener("click", function () {
      const ExcelToJSON = function () {
        this.parseExcel = function (file) {
          const reader = new FileReader();
          reader.onload = function (e) {
            const data = e.target.result;
            const workbook = XLSX.read(data, {
              type: "binary",
            });
            let result = [];
            workbook.SheetNames.forEach(function (sheetName) {
              const XL_row_object = XLSX.utils.sheet_to_row_object_array(
                workbook.Sheets[sheetName]
              );
              result.push(XL_row_object);
            });
            let img = [];
            let sqlTours =
              "INSERT INTO tours (tour_id, tour_title, tour_reviews, tour_price, tour_discount_rate, tour_quantity, tour_place, tour_type, tour_region, tour_times) VALUE ";
            result[0].forEach((item) => {
              sqlTours += `(${item.ID}, '${item.Title}', '${item.Reviews}', ${item.Price}, ${item.Discount}, ${item.Quantity}, '${item.Place}', '${item.Type}', '${item.Region}', '${item.Time}'),`;
              let ob = {};
              ob[item.ID] = item.Img.split(", ");
              img.push(ob);
            });
            sqlTours = sqlTours.slice(0, -1);
            // console.log(sqlTours);
            let sqlImage = "INSERT INTO tour_images (tour_id, tour_image) VALUE ";
            img.forEach((item) => {
              let key = Object.keys(item)[0];
              item[key].forEach((url) => {
                sqlImage += `(${key}, '${url}'),`;
              });
            });
            sqlImage = sqlImage.slice(0, -1);
            // console.log(sqlImage);
            const formDT = new FormData();
            formDT.append('sqlTours', sqlTours);
            formDT.append('sqlImage', sqlImage);
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '../controllers/post.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status == 200 && this.responseText === 200) {
                    alert('Upload thành công');
                }
            };
            xhr.send(`sqlTours=${encodeURIComponent(sqlTours)}&sqlImage=${encodeURIComponent(sqlImage)}`);
          };
          reader.onerror = function (ex) {
            console.log(ex);
          };
          reader.readAsBinaryString(file);
        };
      };
      var excel = new ExcelToJSON();
      excel.parseExcel(file);
    });
});
