<?php
    
    function loadBCC($number)
    {
        $htmlOutput = "<table>  ";
        for ($i = 1; $i <= 10; $i++)
        {
            $kq = $number * $i;
            $htmlOutput .= "<tr> <td>{$number} x {$i} = {$kq}</td> </tr> ";
        }
        return $htmlOutput . " </table>";
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng cửu chương</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            
        }
        .BCC-container{
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;

        }
        body{

            background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20200530/pngtree-cute-hand-drawn-style-mathematics-education-pink-plaid-background-image_337364.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        body::before{
            content: '';    
            position: fixed;
            top: 0px;
            bottom: 0px;
            width: 100%;
            background-color: black;
            opacity: 50%;

        }
        .container{
            display: inline-block;
            position: absolute;
            width: 60%;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            backdrop-filter: blur(10px);
            background-color: rgba(63, 63, 63, 0.2);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            border: 2px solid gray;
            border-radius: 20px;
            box-shadow
            

        }
        table{
            position: relative;
            background-color: antiquewhite;
            padding: 10px;
            font-size: 20px;


            border-radius: 5px;
            backdrop-filter: blur(10px);
            background-color: white;
        }
        .BCC-container{
            margin: 20px 0px;
            position: relative;
            top: 0px;
            bottom: 0px;
        }
        h1{
            color: white;
            font-size: 40px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1 style=" text-align: center;">BẢNG CỬU CHƯƠNG</h1>
        <div class="BCC-container">
            
                <?php
                    for($i = 2; $i < 10; $i++)
                    {
                        echo loadBCC($i);
                    }

                ?>

        </div>
    </div>
</body>
</html>