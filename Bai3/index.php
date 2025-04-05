<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bài 3</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <header >
       <div id = "div-title">
        <h1 style="color:white;" id="title-header">Hệ thống nộp bài thi trực tuyến</h1>
        
       </div>
       <div id = "div-info">
            <p id = "thi-sinh-name">Thí sinh: Lê Thị Minh Trang</p>
            <a id = "exit"href="#">Thoát</a>
        </div>
    </header>
    <div id = "div-content">
        <form action="#" id="form-content"> 
            <h1 style="font-size: 70px;">Học Kỳ II Năm 2015-2016-Tin học Đại Cương</h1>
            <p style="font-size: 30px;">- Thời gian bắt đầu: 15:41:18 <br>
                => Lưu ý thời gian làm bài để được upload bài thi lên hệ thống! <br>
                - Thời gian làm bài: 65 phút. <br>
                => Lưu ý thời gian còn lại, nếu hết thời gian thì sinh viên không thể upload bài lên hệ thống <br>
                - Thời gian còn lại: 1 giờ 3 phút 35 giáy. <br>
                => Sinh viên nên tạo thư mục có tên là tên của mình để lưu bài làm và chọn bài làm từ thư mục này để nộp bài lên hệ
                thống</p>   
        <div id = "div-submit">
            <table align="right">
                <tr>
                    <td>        Nộp bài: 
            <input type="file" name="fileupload" id="file-upload">
            <input type="submit" name="nop" id="submit-btn"></td>
                </tr>
            </table>
        </div>

        </form>
    </div>
</body>
</html>