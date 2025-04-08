var timeCurrent = new Date();
var timeTarget = new Date("2025-04-11 15:0:0");
var title = "Đếm ngược kiểm tra lịch sử Đảng"
var timeRemain ={
    day:0,
    hours:0,
    min:0,
    sec:0,
    createTime: function(day, hours, min, sec)
    {
        this.day = day;
        this.hours = hours;
        this.min = min;
        this.sec = sec;
    },
    tick :function(IDInterval)
    {
        this.sec -= 1;
        if(this.sec < 0)
        {
            this.min -= 1;
            this.sec = 59;
        }
        if(this.min < 0)
        {
            this.hours -= 1;
            this.min = 59;
        }
        if(this.hours < 0)
        {
            this.day -= 1;
            this.hours = 23;
        }
        if(this.day < 0)
        {
            clearInterval(IDInterval);
            alert("Đã đến thời gian")
            return
        }
    }
}
function loadInfo()
{
    document.getElementById('nofi').innerHTML = title;
    document.getElementById("time-target").innerHTML = "Thời gian mục tiêu: "+ timeTarget.toLocaleString();
    
}
function showInfo(timeRemain)
{   
    if(timeRemain.day < 10)
        document.getElementById("day_lb").innerHTML = '0'+ timeRemain.day;
    else
        document.getElementById("day_lb").innerHTML = timeRemain.day;
    if(timeRemain.hours < 10)
        document.getElementById("hours_lb").innerHTML = '0'+ timeRemain.hours;
    else
        document.getElementById("hours_lb").innerHTML = timeRemain.hours;
    if(timeRemain.min < 10)
        document.getElementById("min_lb").innerHTML = '0'+ timeRemain.min;
    else
        document.getElementById("min_lb").innerHTML = timeRemain.min;
    if(timeRemain.sec < 10)
        document.getElementById("sec_lb").innerHTML = '0'+ timeRemain.sec;
    else
        document.getElementById("sec_lb").innerHTML = timeRemain.sec;
}
function calcTime()
{
    let diffMs = timeTarget.getTime() - timeCurrent.getTime();
    const diffDays = Math.floor(diffMs / (1000 * 60 * 60 * 24));
    diffMs -= diffDays * (1000 * 60 * 60 * 24);

    const diffHours = Math.floor(diffMs / (1000 * 60 * 60));
    diffMs -= diffHours * (1000 * 60 * 60);
    
    const diffMinutes = Math.floor(diffMs / (1000 * 60));
    diffMs -= diffMinutes * (1000 * 60);
    
    const diffSeconds = Math.floor(diffMs / 1000);

    timeRemain.createTime(diffDays, diffHours, diffMinutes, diffSeconds);
}
window.onload = function(){
    loadInfo();
    calcTime();
    var IDInterval = setInterval(
        function ()
        {
            document.getElementById('bgAudio').play();
            document.getElementById("timecurrent").innerHTML = "Thời gian hiện tại:" + timeCurrent.toDateString() +" "+ timeCurrent.toTimeString();
            timeRemain.tick(IDInterval);
            showInfo(timeRemain)
        }
        , 1000);
    
}