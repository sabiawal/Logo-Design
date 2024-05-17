function display_c(start)
{
window.start = parseFloat(start);
var end = 0 // change this to stop the counter at a higher value
var refresh=1000; // Refresh rate in milli seconds
if(window.start >= end )
{
mytime=setTimeout('display_ct()',refresh)
}
else {alert("The reward expired!");}
}
function zeroPad(num,count)
{
var numZeropad = num + '';
while(numZeropad.length < count) {
numZeropad = "0" + numZeropad;
}
return numZeropad;
}
function display_ct() {
// Calculate the number of days left
var days=zeroPad(Math.floor(window.start / 86400),2);
// After deducting the days calculate the number of hours left
var hours = zeroPad(Math.floor((window.start - (days * 86400 ))/3600),2);
// After days and hours , how many minutes are left
var minutes = zeroPad(Math.floor((window.start - (days * 86400 ) - (hours *3600 ))/60),2);
// Finally how many seconds left after removing days, hours and minutes.
var secs = zeroPad(Math.floor((window.start - (days * 86400 ) - (hours *3600 ) - (minutes*60))),2);

var x =  days + " Days " + hours + " Hours " + minutes + " Minutes and " + secs + " Seconds ";


document.getElementById('timer_invite').innerHTML = x;
window.start= window.start- 1;

tt=display_c(window.start);
}