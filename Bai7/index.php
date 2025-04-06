<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./scripts.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="lich-container">
        <div class="header-info">
            <span id="month-info"></span>
            <div class="header-button">
                <button onclick="changeNextMonth()" class="header-button up">↑</button>
                <button onclick="changePrevMonth()" class="header-button down">↓</button>
            </div>
        </div>
        <div class="lich-box">
            <table id="lich-title">
                <tr>
                    <td>Mo</td>
                    <td>Tu</td>
                    <td>We</td>
                    <td>Th</td>
                    <td>Fr</td>
                    <td>Sa</td>
                    <td>Su</td>
                </tr>
            </table>
            <table id="content-lich">

            </table>
        </div>
    </div>
</body>
</html>