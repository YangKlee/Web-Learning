<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./scripts.js"></script>
</head>
<body>
    <div class="main" >
        <p class="main__desc">
            Chọn một cái để xem thông báo nè~!
        </p>
        <div class="span span--container">
            <span class="span__choice span__choice-1">
                <p>1:</p>
                <input type="radio" name="radioChoice" id="selection_1" onclick= 'showMessage("1")'>
            </span>
            <span class="span__choice span__choice-2">
                <p>2:</p>
                <input type="radio" name="radioChoice" id="selection_2" onclick= 'showMessage(2)'>
            </span>
            <span class="span__choice span__choice-3">
                <p>3:</p>
                <input type="radio" name="radioChoice" id="selection_3" onclick= 'showMessage(3)'>
            </span>
        </div>
        <div class="main__message">
            <p>Đây là nơi chứa thông báo</p>
        </div>
    </div>
</body>
</html>