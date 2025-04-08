<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 10: Đếm ngược thời gian</title>
    <style>
        .countdown-container {
            background-color: green;
            color: white;
            width: fit-content;
            padding: 10px;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .countdown-title {
            font-weight: bold;
            font-size: 14px;
        }

        .countdown-timer {
            color: red;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="countdown-container">
        <div class="countdown-title">Thời gian còn lại:</div>
        <div class="countdown-timer" id="timer">30 phút 00 giây.</div>
    </div>

    <script>

        let countdownMinutes = 30;
        let totalSeconds = countdownMinutes * 60;

        const timerElement = document.getElementById("timer");

        function updateTimer() {
            let minutes = Math.floor(totalSeconds / 60);
            let seconds = totalSeconds % 60;

            // Hiển thị định dạng "mm phút ss giây"
            timerElement.textContent = `${minutes} phút ${seconds < 10 ? "0" : ""}${seconds} giây.`;

            if (totalSeconds > 0) {
                totalSeconds--;
            } else {
                clearInterval(timerInterval);
                timerElement.textContent = "Hết giờ!";
            }
        }

        updateTimer(); 
        const timerInterval = setInterval(updateTimer, 1000);
    </script>
</body>
</html>
