<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tour</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #uploadExcel::-webkit-file-upload-button {
            visibility: hidden;
        }
    </style>
</head>
<?php include "../Components/Header/Header.php" ?>
<body>
    <h1 class="text-3xl text-sky-500 text-center font-bold mt-8  uppercase" >Post tour with excel file</h1>
    <div class="flex justify-center h-96 items-center ">
        <div class="w-1/2 h-56 border border-dashed border-black rounded  relative" id="box-excel">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
                <img src="../Image/upload.svg" alt="upload" class="w-8 align-middle">
                <label for="uploadExcel" class="text-lg text-center tracking-widest">Click or drop file excel here
                </label>
                <span class="text-sm" style="line-height: 13px; letter-spacing: 1px;">(.xlsx, .xls, .csv)</span>
            </div>
            <input type="file" id="uploadExcel" accept=".xlsx, .xls, .csv" class="opacity-0 w-full h-full absolute absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer" />
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
    <script>
        document.getElementById('uploadExcel').addEventListener('change', function() {
            var file = this.files[0];
            if (file) {
                const box = document.getElementById('box-excel');
                box.innerHTML = '';
                box.innerHTML = `<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col jusitfy-center items-center"><label class="my-3 text-lg">${file.name}</label><button class="h-9 w-24 bg-sky-500 border-none rounded text-white " id = "btnUploadExcel">Upload</button></div>`;
            }
            document.getElementById('btnUploadExcel').addEventListener('click', function() {
                const ExcelToJSON = function() {
                    this.parseExcel = function(file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const data = e.target.result;
                            const workbook = XLSX.read(data, {
                                type: 'binary'
                            });
                            let result = [];
                            workbook.SheetNames.forEach(function(sheetName) {
                                const XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
                                result.push(XL_row_object);
                            })
                            console.log(result[0]);
                        };
                        reader.onerror = function(ex) {
                            console.log(ex);
                        };
                        reader.readAsBinaryString(file);
                    };
                };
                var excel = new ExcelToJSON();
                excel.parseExcel(file);
            });
        });
    </script>
</body>
<?php include "../Components/Footer/Footer.php" ?>
</html>