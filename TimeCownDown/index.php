<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm ngược thời gian</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
</head>
<body>
    <div class="container">
        <div class="container-header">
            <h1>TIME COWNDOWN</h1>
            <h2 id="nofi"></h2>
            <h3 id="time-target"></h3>
        </div>
        <div class="container-timedisplay">
            <div class="timebox day">
                <label for="" class="timedisplay-num" id="day_lb">00</label>
                <label for="" class="timedisplay-title day-title">Ngày</label>
            </div>
            <div class="timebox hours">
                <label for="" class="timedisplay-num" id="hours_lb">00</label>
                <label for="" class="timedisplay-title hours-title">Giờ</label>
            </div>
            <div class="timebox min">
                <label for="" class="timedisplay-num" id="min_lb">00</label>
                <label for="" class="timedisplay-title min-title">Phút</label>
            </div>
            <div class="timebox sec">
                <label for="" class="timedisplay-num" id="sec_lb">00</label>
                <label for="" class="timedisplay-title sec-title">Giây</label>
            </div>
            </div>
        </div>
        <div class="slogan">
        <div class="timecurrent"></div>
    </div>
</body>
</html>