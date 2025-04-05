<?php
    function isPrime($x)
    {
        if($x < 2)
            return false;
        else
        {
            for ($i = 2; $i <= sqrt($x); $i++)
            {
                if($x % $i== 0)
                {
                    return false;
                }
            }
        }
        return true;
    }
    function getPrimeNumber($n)
    {
        $result = "";
        for($i = 2; $i <= $n; $i++)
        {
            //echo $i;
            if(isPrime($i) == true)
            {
                $result .= $i . " ";
            }
        }
        return $result;
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
            font-size: 30px;
        }
        #text-aera-console{
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="GET">
            <span>Nhập n: 
                <input type="text" name="n_number" id="number_tb" class="btn" value="20">
            </span>
            <input type="submit" value="Sinh số nguyên tố" >
        </form>
        <textarea name="console" id="text-aera-console"><?php   
            if(isset($_GET['n_number']))
            {
                $number = filter_input(INPUT_GET, 'n_number', FILTER_VALIDATE_INT);
                if($number === false)
                {
                    echo "Dữ liệu không hợp lệ";
                }
                else
                {
                    echo "Số nguyên tố <=" .$number . " là \n";
                    echo getPrimeNumber($number);
                }
            }
        ?></textarea>
    </div>
</body>
</html>