date = new Date();
currMonth = date.getMonth();
currYear = date.getYear();
dateTmp = new Date();
    dateTmp.setDate(1);
    dateTmp.setMonth(currMonth);
    dateTmp.setYear(currYear - 100 + 2000);
window.onload = function()
{
   showInfo();
   loadCann();
}
function showInfo()
{
    document.getElementById('month-info').innerText = `${currMonth + 1}/${currYear - 100 + 2000}`;
    console.log(dateTmp.getDate())
}
function congDate(x)
{
    dateTmp.setDate(dateTmp.getDate() + x);

}
function truDate(x)
{
    dateTmp.setTime(dateTmp.getTime() - (24 * 60 * 60 * 1000)*x)

}
function loadCann()
{


    let startDay = dateTmp.getDay();
    let HTMLOut = "";
    HTMLOut += '<tr>'
    truDate(startDay);

    while (dateTmp.getMonth() <= currMonth)
    {
        if(dateTmp.getDay() === 0)
        {
               HTMLOut += '<tr>'
        }
        HTMLOut += `<td>${dateTmp.getDate()}</td>`;
        if(dateTmp.getDay() === 6)
             HTMLOut += '</tr>'
        
        congDate(1);
    }
    document.getElementById('lich-table').innerHTML += HTMLOut;
}