<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2: Đăng ký khách hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#">
        <h1>Đăng ký khách hàng</h1>
        
        <div class="div-main">
            <label class="title-form" for=""><b>Thông tin đăng nhập</b></label>
            <div class="div-main div-content">
                <label class="title-content"  for="">Tên đăng nhập: </label>
                <input class="textbox" type="text">
            </div>
            <div class="div-main div-content">
                <label class="title-content" for="">Mật khẩu: </label>
                <input class="textbox" type="password">
            </div>
            <div class="div-main div-content">
                <label class="title-content" for="">Nhập lại mật khẩu: </label>
                <input class="textbox" type="password">
                <label style="color: red;" for="">(*)</label>
            </div>
        
        </div>

        <div class="div-main">
            <label class="title-form"  for=""><b>Thông tin chi tiết cá nhân</b></label>
            <div class="div-main div-content">
                <label class="title-content" for="">Họ tên khách hàng: </label>
                <input class="textbox" type="text">
            </div>
            <div class="div-main div-content" >
                <label class="title-content" for="">Ngày sinh: </label>
                <input class="textbox" type="password">
                <label style="color: red;" for="">(*)</label>
            </div>
            <div class="div-main div-content">
                <label class="title-content"  for="">Giới tính: </label>
                <span>
                    <input class="radio-inp" type="radio">
                </span>
                Nam
                <span>
                    <input class="radio-inp" type="radio">
                </span>
                Nữ  
            </div>
            <div class="div-main div-content">
                <label class="title-content" for="">Địa chỉ email: </label>
                <input class="textbox" type="text">
                <label style="color: red;" for="">(*)</label>
            </div>
            <div class="div-main div-content">
                <label class="title-content" for="">Thu nhập: </label>
                <input class="textbox" type="text">
            </div>
            <div class="div-submit">
                <input type="submit" name="" class="btn" value="Đăng ký">
            </div>
        </div>

    </form>
</body>
</html>