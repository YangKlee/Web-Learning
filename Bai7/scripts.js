var dateCurrent = new Date();

function printLich() {
    let currMonth = dateCurrent.getMonth();
    let DateTmp = new Date();
    DateTmp.setMonth(currMonth);
    DateTmp.setDate(1);
    console.log(DateTmp);
    let CurrDay = DateTmp.getDay() -1;
    DateTmp.setDate(DateTmp.getDate() - CurrDay);
    console.log(DateTmp);
    let htmlOut = "";
    for (i = 1; i <= 35; i++) {
      if(i == 1)
      {
        htmlOut += "<tr>";
      }
      if(DateTmp.getDate() == new Date().getDate() && DateTmp.getMonth() == new Date().getMonth())
        {
          htmlOut +=  "<td class='date-today'>"+ DateTmp.getDate() + "</td>";
        }
      else if (DateTmp.getMonth() == currMonth)
        htmlOut +=  "<td class='date-normal'>"+ DateTmp.getDate() + "</td>";
      else
        htmlOut +=  "<td class='date-outMonth'>"+ DateTmp.getDate() + "</td>";
      DateTmp.setDate(DateTmp.getDate() +1);
      if (i % 7 == 0) {
        htmlOut += "</tr>";
        htmlOut += "<tr>";
      }
    }
    document.getElementById("content-lich").innerHTML = htmlOut;
}
function showInfo()
{
  document.getElementById("month-info").innerHTML = `Tháng ${dateCurrent.getMonth() + 1} năm ${dateCurrent.getFullYear()}`;
}

function changeNextMonth(){
  dateCurrent.setMonth(dateCurrent.getMonth() +1);
  showInfo();
  printLich();
}
function changePrevMonth(){
  dateCurrent.setMonth(dateCurrent.getMonth() -1);
  showInfo();
  printLich();
}
window.onload = function () {

    showInfo();
    printLich();
};
