<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Tải Lên File - SV Phạm Lê Minh Phú</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    </head>
    <body>
        <?php include_once 'menu.php'; ?>
        <h1><strong><center>Tải Lên File</center></strong></h1>
        <div class="container">
            <form action="<?php echo uploadfile; ?>" method="post" target="_blank">
                <p>Nhập ID Folder, bỏ trống nếu là Folder gốc:</p>
                <input type="text" name="id">
                <br><br>
                <p>Chọn 1 tệp và upload:</p>
                <div id="data"></div>
                <input name="file" id="uploadfile" type="file" required>
                <script>
                    $('#uploadfile').on("change", function () {
                        var file = this.files[0];
                        var fr = new FileReader();
                        fr.fileName = file.name;
                        fr.onload = function (e) {
                            e.target.result
                            html = '<input type="hidden" name="data" value="' + e.target.result.replace(/^.*,/, '') + '" >';
                            html += '<input type="hidden" name="mimetype" value="' + e.target.result.match(/^.*(?=;)/)[0] + '" >';
                            html += '<input type="hidden" name="filename" value="' + e.target.fileName + '" >';
                            $("#data").empty().append(html);
                        }
                        fr.readAsDataURL(file);
                    });
                </script>
                <br>
                <input type="submit">
            </form>
        </div>
        <div class="container">
            <br>
            <a href="huongdan/uploadfile.html" target="_blank">Xem hướng dẫn</a>
        </div>
    </body>
</html>
