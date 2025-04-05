<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/main.css">
    <title>Bai2</title>
</head>
<body>
    <form action="#" method="POSH">
        <H1 style="font-size: 1.5rem ">Đăng ký khách hàng</H1>
        <table class="table-form">
            <tr>
                <td colspan="3" align="left" class="table-title"">Thông tin đăng nhập</td>
            </tr>
            <tr>
                <td>Tên đăng nhập: </td>
                <td><input type="text" class="input_tb"></td>
            </tr>
            <tr>
                <td>Mật khẩu: </td>
                <td><input type="password" class="input_tb"></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu: </td>
                <td><input type="password" class="input_tb"></td>
                <td><p  class="batbuoc" style="color: red;">(*)</p></td>
            </tr>
        </table>
        <table class="table-form">
            <tr>
                <td colspan="3" align="left" class="table-title" ">Thông tin chi tiết cá nhân</td>
            </tr>
            <tr>
                <td>Họ tên khách hàng: </td>
                <td><input type="text" class="input_tb"></td>
            </tr>
            <tr>
                <td>Ngày sinh: </td>
                <td><input type="date" class="input_tb"></td>
            </tr>
            <tr>
                <td>Giới tính: </td>
                <td><input type="radio"> 
                Nam <input type="radio">Nữ
                 <td><p class="batbuoc" style="color: red;">(*)</p></td>
            </tr>
            <tr>
                <td>Địa chỉ email:</td>
                <td><input type="text" class="input_tb"></td>
                <td><p  class="batbuoc" style="color: red;">(*)</p></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><input type="text" class="input_tb"></td>
            </tr>
        </table>
        <input class="btn" type="submit" value="Đăng ký">
    </form>
</body>
</html>