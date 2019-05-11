<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Tải Lên Nhiều File - SV Phạm Lê Minh Phú</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    </head>
    <body>
        <?php include_once 'menu.php'; ?>
        <h1><strong><center>Tải Lên Nhiều File</center></strong></h1>
        <div class="container">
            <form action="<?php echo uploadmultifile; ?>" method="post" target="_blank">
                <p>Nhập ID Folder, bỏ trống nếu là Folder gốc:</p>
                <input type="text" name="id">
                <br><br>
                <p>Chọn 1 hoặc nhiều tệp và upload:</p>
                <div id="data"></div>
                <input name="files" id="uploadfiles" type="file" multiple required>
                <script>
                    $('#uploadfiles').on("change", function () {
                        var files = this.files;
                        var i;
                        for (i = 0; i < files.length; i++) {
                            var file = files[i];
                            var fr = new FileReader();
                            fr.fileName = file.name;
                            fr.i = i;
                            fr.onload = function (e) {
                                html = '<input type="hidden" name="data" value="' + e.target.result.replace(/^.*,/, '') + '" >';
                                html += '<input type="hidden" name="mimetype" value="' + e.target.result.match(/^.*(?=;)/)[0] + '" >';
                                html += '<input type="hidden" name="filename" value="' + e.target.fileName + '" >';
                                $("#data").append(html);
                            };
                            fr.readAsDataURL(file);
                        }
                        $("#data").append('<input type="hidden" name="leng" value="' + files.length + '" >');
                    });
                </script>
                <br>
                <input type="submit">
            </form>
        </div>
        <div class="container">
            <br>
            <a href="huongdan/uploadmutifile.html" target="_blank">Xem hướng dẫn</a>
        </div>
    </body>
</html>
