<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <script type="text/javascript">
        let newWindow;

        function openNewWindow() {
            newWindow = window.open("", "newWin", "width=300,height=200");
            newWindow.document.write("<h2>Đây là cửa sổ mới!</h2>");
        }

        function closeNewWindow() {
            if (newWindow && !newWindow.closed) {
                newWindow.close();
            } else {
                alert("Cửa sổ mới chưa được mở hoặc đã đóng rồi!");
            }
        }

        function closeMainWindow() {
            window.close();
        }
    </script>
</head>
<body>

    <button onclick="openNewWindow()">Open New Window</button><br><br>
    <button onclick="closeNewWindow()">Close New Window</button><br><br>
    <button onclick="closeMainWindow()">Close Main Window</button>
</body>
</html>
