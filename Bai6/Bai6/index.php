<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="./src/main.css">
    <script src="./src/scripts.js"></script>
</head>
<body>
    <div class="container">
        <h1>Máy tính</h1>
        <div class="calculator">
            <input type="text" class="calculator__display" id="calc_srceen" readonly="true">
            <div class="calculator__button">
                <div class="calulator__button button--numbers">
                    <button onclick="getNum(1)">1</button>
                    <button onclick="getNum(2)">2</button>
                    <button onclick="getNum(3)">3</button>
                    <button onclick="getNum(4)">4</button>
                    <button onclick="getNum(5)">5</button>
                    <button onclick="getNum(6)">6</button>
                    <button onclick="getNum(7)">7</button>
                    <button onclick="getNum(8)">8</button>
                    <button onclick="getNum(9)">9</button>
                    <button onclick="clearData()" id="delBtn">DEL</button>
                    <button onclick="getNum(0)" id = "num_0">0</button>
                    
                    <button onclick="calc()" id="equalBtn">=</button>
                </div>
                <div class="calulator__button button--operator">
                    <button onclick="getOperator('+')">+</button>
                    <button onclick="getOperator('-')">-</button>
                    <button onclick="getOperator('*')">*</button>
                    <button onclick="getOperator('/')">/</button>
                    <button onclick="getOperator('^')">^</button>
                    <button onclick="getOperator('√')">√</button>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>