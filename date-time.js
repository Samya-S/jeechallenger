var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var amOrPm = (today.getHours() < 12) ? "AM" : "PM";
var hour = (today.getHours() <= 12) ? today.getHours() : today.getHours() - 12;
hour = ("0" + hour).slice(-2);
var minutes = today.getMinutes();
minutes = ("0" + minutes).slice(-2);
var seconds = today.getSeconds();
seconds = ("0" + seconds).slice(-2);
var now = String(days[today.getDay()] + ' ' + months[today.getMonth()] + ' ' + dd + ', ' + today.getFullYear() + '  ' + hour + ':' + minutes + ':' + seconds + ' ' + amOrPm);
document.getElementById("date&time").innerHTML = now;

setInterval(() => {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var amOrPm = (today.getHours() < 12) ? "AM" : "PM";
    var hour = (today.getHours() <= 12) ? today.getHours() : today.getHours() - 12;
    hour = ("0" + hour).slice(-2);
    var minutes = today.getMinutes();
    minutes = ("0" + minutes).slice(-2);
    var seconds = today.getSeconds();
    seconds = ("0" + seconds).slice(-2);
    var now = String(days[today.getDay()] + ' ' + months[today.getMonth()] + ' ' + dd + ', ' + today.getFullYear() + '  ' + hour + ':' + minutes + ':' + seconds + ' ' + amOrPm);
    document.getElementById("date&time").innerHTML = now;
}, 1000)