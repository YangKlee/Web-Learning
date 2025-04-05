<?php
    $hoTen = "Nguyễn Yến Nhi";
    $ngaySinh = "17/02/2005";
    $lop = "CNTT 46B";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <style>
        
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        body{

            background: url("https://en.qnu.edu.vn/Resources/Images/SubDomain/en/depart.jpg");            
            background-size: cover;
            background-repeat: no-repeat;
        }
        body::before{
            content: '';    
            position: fixed;
            top: 0px;
            bottom: 0px;
            height: 100%;
            width: 100%;
            backdrop-filter: blur(5px);
            background-color: rgba(255, 255, 255, 0.61);
        }
        .info-container{
            position: absolute;

            padding: 30px 30px;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 5px;    
            background-color: white;
            width: auto;

        }
        .info-table{
            /* margin: 0px auto; */
            border-collapse: collapse;
            width: 100%;
            row-gap: 0px;
            column-gap: 0px;
            
        }
        .info-table tr td{
            border: 1px solid black;
            
        }
        .info-table td{
            padding: 10px 5px;
        }
        .info-table{
            margin-top: 10px;

        }
        .header-table{
            color: blue;
            font-size: 2rem;
        }
        .logo{
            width: 100px;
            position: absolute;
            transform: translate(-50%, -100%);
            left: 50%;
        }
    </style>
</head>
<body>
    
    <div class="info-container">
        <img class="logo" src="https://qnu.edu.vn/Resources/Images/0logoDHQNnew.jpg" alt="">
        <h1 class="header-table">THÔNG TIN SINH VIÊN</h1>
        <table  class="info-table">
            <tr>
                <td class="title-table">Họ tên:</td>
                <td><?php echo $hoTen ?></td>
            </tr>
            <tr>
                <td class="title-table">Ngày sinh:</td>
                <td><?php echo $ngaySinh ?></td>
            </tr>
            <tr>
                <td class="title-table" >Lớp:</td>
                <td><?php echo $lop ?></td>
            </tr>
        </table>
    </div>
</body>
</html>