
function showMessage(s)
{
    console.log(s);
    document.querySelector(".main .main__message").style.display = "block";
    document.querySelector(".main .main__message p").style.color = 'red';
    document.querySelector(".main .main__message p").innerHTML = `<p>Tôi là số <b>${s}</b>, cảm ơn đã chọn tôi</p>`;
}