<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        Chương trình đào tạo 
        <select name="CTDT" class="menu ctdt">
            <option value="CNTT">Công nghệ thông tin</option>
            <option value="KTPM">Kỹ thuật phần mềm</option>
            <option value="TTNT">Trí tuệ nhân tạo</option>
        </select>
        Năm học:
        <select name="StudyYear" class="menu study-year">
            <option value="all">Tất cả</option>
            <option value="22-23">2022-2023</option>
            <option value="23-24">2023-2024</option>
            <option value="24-25">2024-2025</option>
        </select>
        Học kỳ:
        <select name="StudyUnit" class="menu study-unit">
            <option value="all">Tất cả</option>
            <option value="HK1">Học kỳ 1</option>
            <option value="HK2">Học kỳ 2</option>
            <option value="HK3">Học kỳ 3</option>
        </select>
    </div>
    <div>
        <b><u><i>Ghi chú:</i></u></b>
        <br>
        <span>
            Những môn có dấu <b style="color: red;">(*)</b> sẽ không tính điểm trung bình mà chỉ là môn điều kiện.
        </span>
    </div>
    <div>
        <table>
            <tr align="center" >
                <td class="table-header"><b>STT</b></td>
                <td class="table-header"><b>Mã học phần</b></td>
                <td class="table-header" ><b>Tên học phần</b></td>
                <td class="table-header"><b>Tín chỉ</b></td>
                <td class="table-header"><b>Điểm 10</b></td>
                <td class="table-header"><b>Điểm 4</b></td>
                <td class="table-header"><b>Điểm chữ</b></td>
                <td class="table-header"><b>Kết quả</b></td>
                <td class="table-header"><b>Chi tiết</b></td>
            </tr>
            <tr>
                <td colspan="10" class="title-yearstudy">Năm học: 2024 - 2025 - Học kỳ: HK01</td>
            </tr>
            <tr class="detail-point">
                <td>1</td>
                <td>1050001</td>
                <td class="name-subject">Lập trình cơ bản</td>
                <td>3.0</td>
                <td>10.0</td>
                <td>4.00</td>
                <td>A+</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>2</td>
                <td>1050002</td>
                <td class="name-subject">Hệ quản trị cơ sở dữ liệu</td>
                <td>3.0</td>
                <td>9.5</td>
                <td>4.00</td>
                <td>A+</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>3</td>
                <td>1050003</td>
                <td class="name-subject">Giáo dục thể chất 1 <span style="color: red;">*</span></td>
                <td>3.0</td>
                <td>10.0</td>
                <td>4.00</td>
                <td>A+</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>4</td>
                <td>1050004</td>
                <td class="name-subject">Tiếng Anh 1</td>
                <td>3.0</td>
                <td>8.0</td>
                <td>3.00</td>
                <td>B+</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>5</td>
                <td>1050005</td>
                <td class="name-subject">Xác suất thống kê</td>
                <td>3.0</td>
                <td>6.0</td>
                <td>2.50</td>
                <td>B</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>6</td>
                <td>1050006</td>
                <td class="name-subject">Toán Logic</td>
                <td>2.0</td>
                <td>4.0</td>
                <td>1.00</td>
                <td>D</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>7</td>
                <td>1050007</td>
                <td class="name-subject">Đại số tuyến tính</td>
                <td>3.0</td>
                <td>9.0</td>
                <td>3.50</td>
                <td>A</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr >
                <td class="summary-point" colspan="3">
                    - Tổng số tín chỉ 17.0 <br>
                    - Số tín chỉ đạt: 17.0 Số tín chỉ không đạt: 0 <br>
                    - Điểm trung bình học kỳ (Hệ 10): 7.75 <br>
                    - Điểm trung binh học kỳ (Hệ 4): 3.13 <br>
                    - Điểm rèn luyện: 95 - Xếp loại (RL): Xuất sắc
                </td>
                <td  class="summary-point" colspan="7">
                - Số tín chỉ tích lũy: 16 <br>
                - Điểm trung bình tích lũy (Hệ 10): 7.75 <br>
                - Điểm trung bình tích lũy (Hệ 4): 3.13 <br>
                </td>
            </tr>
            <tr>
                <td colspan="10" class="title-yearstudy">Năm học: 2024 - 2025 - Học kỳ: HK01</td>
            </tr>
            <tr class="detail-point">
                <td>5</td>
                <td>1050005</td>
                <td class="name-subject">Xác suất thống kê</td>
                <td>3.0</td>
                <td>9.0</td>
                <td>3.50</td>
                <td>A</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>10</td>
                <td>1050010</td>
                <td class="name-subject">Giáo dục thể chất 3 (Cầu lông 3)  <span style="color: red;">*</span></td>
                <td>1.0</td>
                <td>10.0</td>
                <td>4.00</td>
                <td>A+</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>11</td>
                <td>1050011</td>
                <td class="name-subject">Lập trình hướng đối tượng</td>
                <td>3.0</td>
                <td>9.0</td>
                <td>3.50</td>
                <td>A</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>11</td>
                <td>1050012</td>
                <td class="name-subject">Mạng máy tính</td>
                <td>3.0</td>
                <td>9.5</td>
                <td>4.00</td>
                <td>A+</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>12</td>
                <td>10500012</td>
                <td class="name-subject">Toán rời rạc</td>
                <td>3.0</td>
                <td>9.7</td>
                <td>4.00</td>
                <td>A+</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>13</td>
                <td>1050013</td>
                <td class="name-subject">Kỹ thuật lập trình</td>
                <td>3.0</td>
                <td>3.9</td>
                <td>0.00</td>
                <td>F</td>
                <td><img src="img/fail.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>14</td>
                <td>1050014</td>
                <td class="name-subject">Giới thiệu ngành CNTT</td>
                <td>1.0</td>
                <td>10.0</td>
                <td>4.00</td>
                <td>A+</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr class="detail-point">
                <td>15</td>
                <td>1130301</td>
                <td class="name-subject">Chủ nghĩa xã hội khoa học</td>
                <td>2.0</td>
                <td>9.5</td>
                <td>4.00</td>
                <td>A+</td>
                <td><img src="img/pass.png" alt="Qua môn"></td>
                <td><img src="img/detail.png" alt="Xem chi tiết điểm"></td>
            </tr>
            <tr >
                <td class="summary-point" colspan="3">
                    - Tổng số tín chỉ 17.0 <br>
                    - Số tín chỉ đạt: 17.0 Số tín chỉ không đạt: 0 <br>
                    - Điểm trung bình học kỳ (Hệ 10): 7.75 <br>
                    - Điểm trung binh học kỳ (Hệ 4): 3.13 <br>
                    - Điểm rèn luyện: 95 - Xếp loại (RL): Xuất sắc
                </td>
                <td  class="summary-point" colspan="7">
                - Số tín chỉ tích lũy: 16 <br>
                - Điểm trung bình tích lũy (Hệ 10): 7.75 <br>
                - Điểm trung bình tích lũy (Hệ 4): 3.13 <br>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>