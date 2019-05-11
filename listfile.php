<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Danh sách File - SV Phạm Lê Minh Phú</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    </head>
    <body>
        <?php include_once 'menu.php'; ?>
        <h1><strong><center>Danh sách File</center></strong></h1>
        <div class="container">
            <p>Xem tất cả File ở thư mục gốc:</p>
            <a href="<?php echo listfile; ?>" target="_blank">List Files Root</a>
        </div>
        <div class="container">
            <br><br>
            <p>Xem tất cả File ở thư mục cụ thể:</p>
            <form action="<?php echo listfile; ?>" method="get" target="_blank">
                <p>ID Folder:</p>
                <input type="text" name="id" required>
                <br>
                <input type="submit">
            </form>
        </div>
        <div class="container">
            <br>
            <a href="huongdan/listfile.html" target="_blank">Xem hướng dẫn</a>
        </div>
    </body>
</html>
