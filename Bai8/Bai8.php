<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h3>Kiểm tra tính hợp lệ của thông tin nhập vào</h3>
    <form id="form-inp" >
        Name
        <input type="text" name="name-tb">
        Age
        <input type="text" name="age-tb">
        <input type="submit" value="Input">
    </form>
    <div id="nofi"></div>
    <script>
        document.getElementById("form-inp").addEventListener("submit", function (e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            let name = formData.get('name-tb');
            let age = formData.get('age-tb');
            console.log(name, age);
            let HTMLOut = "";
            let isHopLe = true;
            if (name == "")
            {
                HTMLOut += "<p class='error'>Tên không đc để trống </p>";
                isHopLe = false;
            }
            if (age == "")
            {
                HTMLOut += "<p class='error'>tuổi không đc để trống </p>";
                isHopLe = false;
            }
            if(age != null)
            {
                const ageInt = parseInt(age, 10);
                if(isNaN(ageInt))
                {
                    HTMLOut += "<p class='error'>tuổi phải là số </p>";
                    isHopLe = false;
                }
            }
            if(isHopLe === true)
                HTMLOut += "<p class='success'>Thông tin hợp lệ </p>";
            document.getElementById("nofi").innerHTML = HTMLOut;
        });
    </script>
</body>
</html>