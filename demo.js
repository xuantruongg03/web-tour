
//đọc file html lưu vào biến trs
    var fs = require('fs');
    var str = fs.readFileSync('text.html', 'utf8');

//xóa bỏ khoản trắng và xuất ra file với js
    var fs = require('fs');
    var str = str.replace(/\s+/g, ' ');
    fs.writeFile('test.txt', str, function (err) {
        if (err) throw err;
        console.log('Saved!');
    }
    );
