<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Google Drive API - SV Phạm Lê Minh Phú</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    </head>
    <body>
        <?php include_once 'menu.php'; ?>
        <div class="container">
            <h3>Giới thiệu:</h3>
            <p>Chương trình được thực hiện nhầm mục đích nghiên cứu trong môn học Chuyên Đề Web 2.</p>
            <p>Tính ứng dụng: Giúp người dùng xử lý các tao tác với Google Drive nhanh chống, dễ dàng.</p>
            <p>Ứng dụng được chia thành các model nhỏ, mỗi model có thể tích hợp vào website.</p>
            <p>Được phát triển bằng Google App Script (G-A-S) của Google. <a href="https://developers.google.com/apps-script/" target="_blank">Trang Chủ</a></p>
        </div>
        <div class="container">
            <h3>Hướng dẫn sử dụng:</h3>
            <p>Để sử dụng được G-A-S bạn cần phải có tài khoản GG và tạo một Script để thực thi:</p>
            <p>Bước 1: Truy cập vào <a href="https://www.google.com/script/" target="_blank">google.com/script</a>, nhấn Start Scripting:</p>
            <img src="images/huongdansudung_01.PNG" width="70%" class="img-reponsive">
            <p>Bước 2: Đăng nhập tài khoản Google của bạn:</p>
            <img src="images/huongdansudung_02.PNG" width="70%" class="img-reponsive">
            <p>Bước 3: Nhấn tạo Script mới</p>
            <img src="images/huongdansudung_03.PNG" width="70%" class="img-reponsive">
            <p>Sau đó nhấn Save hoặc Ctrl+S và đặt tên cho Project</p>
            <img src="images/huongdansudung_04.PNG" width="70%" class="img-reponsive">
            <p>Giờ hãy thử với một đoạn code mẫu sau:</p>
            <blockquote>
                <p>function doGet() {<br />
                    &nbsp; var output = HtmlService.createHtmlOutput();<br />
                    &nbsp; output.setContent(&#39;&lt;h1&gt;Hello Word!&lt;/h1&gt;&#39;);<br />
                    &nbsp; return output;<br />
                    }</p>
            </blockquote>
            <p>Bước 4: Xuất bản ứng dụng</p>
            <img src="images/huongdansudung_05.PNG" width="70%" class="img-reponsive">
            <p>Bước 5: Chọn quyền thực thi và tư cách thực thi sau đó nhấn 'triển khai'</p>
            <img src="images/huongdansudung_06.PNG" width="70%" class="img-reponsive">
            <p>Bước 6: Copy URL của ứng dụng hoặc nhấn 'Thử nghiệm ứng dụng web đối với mã mới nhất của bạn'</p>
            <img src="images/huongdansudung_07.PNG" width="70%" class="img-reponsive">
            <p>Bước 7: Nếu hiện thị như hình thì ứng dụng đã được dựng thành công.</p>
            <img src="images/huongdansudung_08.PNG" width="70%" class="img-reponsive">
            <p>Lưu ý: File Script của bạn được dùng để chạy chương trình, không được xóa.</p>
            <p>       File Script này được lưu tại Google Drive của tài khoản đăng ký.</p>
        </div>
        <div class="container">
            <h3>Tác giả:</h3>
            <p>Sản phẩm Google Drive API</p>
            <p>GVHD: Phan Thanh Nhuần</p>
            <p>Sinh viên: Phạm Lê Minh Phú</p>
        </div>
        <hr>
    </body>
</html>
