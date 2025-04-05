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
    <title>Document</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            gap: 10px;
        }
        .BCC-container{
            display: flex;
            justify-content: space-around;

        }
        body{

            background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20200530/pngtree-cute-hand-drawn-style-mathematics-education-pink-plaid-background-image_337364.jpg);
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
            position: absolute;
            width: 100%;
            margin-top: 80px;
            backdrop-filter: blur(10px);
            background-color: rgba(0, 0, 0, 0.2);
           

        }
        table{
            background-color: antiquewhite;
            padding: 10px;
            border-radius: 5px;
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.4);
        }

        h1{
            background:linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
            color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style=" text-align: center;">BẢNG CỬU CHƯƠNG</h1>
        <div class="BCC-container">
            
                <?php
                    echo loadBCC(2);
                    echo loadBCC(3);
                    echo loadBCC(4);
                    echo loadBCC(5);
                    echo loadBCC(6);
                    echo loadBCC(7);
                    echo loadBCC(8);
                    echo loadBCC(9);
                ?>

        </div>
    </div>
</body>
</html>