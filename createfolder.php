<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Tạo Folder - SV Phạm Lê Minh Phú</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    </head>
    <body>
        <?php include_once 'menu.php'; ?>
        <h1><strong><center>Tạo Folder</center></strong></h1>
        <div class="container">
            <form action="<?php echo createfolder; ?>" method="get" target="_blank">
                <p>Nhập ID thư mục cha, bỏ trống nếu là thư mục gốc:</p>
                <input type="text" name="idParent">
                <p>Tên thư mục:</p>
                <input type="text" name="name" required>
                <br>
                <input type="submit">
            </form>
        </div>
        <div class="container">
            <br>
            <a href="huongdan/createfolder.html" target="_blank">Xem hướng dẫn</a>
        </div>
    </body>
</html>