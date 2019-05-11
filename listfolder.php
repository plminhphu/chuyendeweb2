<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Danh sách Folder - SV Phạm Lê Minh Phú</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    </head>
    <body>
        <?php include_once 'menu.php'; ?>
        <h1><strong><center>Danh sách Folder</center></strong></h1>
        <div class="container">
            <p>Xem tất cả thư mục gốc:</p>
            <a href="<?php echo listfolder; ?>" target="_blank">List Folders Root</a>
        </div>
        <div class="container">
            <br><br>
            <p>Xem các thư mục bằng ID cụ thể:</p>
            <form action="<?php echo listfolder; ?>" method="get" target="_blank">
                <p>ID Folder:</p>
                <input type="text" name="id" required>
                <br>
                <input type="submit">
            </form>
        </div>
        <div class="container">
            <br>
            <a href="huongdan/listfolder.html" target="_blank">Xem hướng dẫn</a>
        </div>
    </body>
</html>
