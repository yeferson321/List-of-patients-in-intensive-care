/*
 +-------------------------------------------------------------------+
 |                      J S - C L O C K   (v1.0)                     |
 |                                                                   |
 | Copyright Gerd Tentler                www.gerd-tentler.de/tools   |
 | Created: Dec. 6, 2002                 Last modified: Feb. 5, 2005 |
 +-------------------------------------------------------------------+
 | This program may be used and hosted free of charge by anyone for  |
 | personal purpose as long as this copyright notice remains intact. |
 |                                                                   |
 | Obtain permission before selling the code for this program or     |
 | hosting this software on a commercial website or redistributing   |
 | this software over the Internet or in any other medium. In all    |
 | cases copyright must remain intact.                               |
 +-------------------------------------------------------------------+
*/
//--------------------------------------------------------------------------------------------------------
// Definition
//--------------------------------------------------------------------------------------------------------

var imgPath     = "images";       // path to images (digits)
var borderColor = "#D00000";      // border color
var borderWidth = 2;              // border width (pixels); set to 0 for no border

//--------------------------------------------------------------------------------------------------------
// Build clock
//--------------------------------------------------------------------------------------------------------

document.write('<table border=0 cellspacing=0 cellpadding=' + borderWidth + '><tr><td bgcolor=' + borderColor + '>');
document.write('<table border=0 cellspacing=0 cellpadding=1 width=135 bgcolor=black><tr align=center>');
document.write('<td nowrap>');
document.write('<img src="' + imgPath + '/wd8.gif" name="wd" width=39 height=15>');
document.write('<img src="' + imgPath + '/dk8.gif" name="d1" width=10 height=15>');
document.write('<img src="' + imgPath + '/dk8.gif" name="d2" width=10 height=15>');
document.write('<img src="' + imgPath + '/dkc.gif" width=5 height=15>');
document.write('<img src="' + imgPath + '/dk8.gif" name="m1" width=10 height=15>');
document.write('<img src="' + imgPath + '/dk8.gif" name="m2" width=10 height=15>');
document.write('<img src="' + imgPath + '/dkc.gif" width=5 height=15>');
document.write('<img src="' + imgPath + '/dk8.gif" name="y1" width=10 height=15>');
document.write('<img src="' + imgPath + '/dk8.gif" name="y2" width=10 height=15>');
document.write('<img src="' + imgPath + '/dk8.gif" name="y3" width=10 height=15>');
document.write('<img src="' + imgPath + '/dk8.gif" name="y4" width=10 height=15>');
document.write('</td></tr><tr align=center><td nowrap>');
document.write('<img src="' + imgPath + '/dg8.gif" name="hr1" width=16 height=24>');
document.write('<img src="' + imgPath + '/dg8.gif" name="hr2" width=16 height=24>');
document.write('<img src="' + imgPath + '/dgc.gif" width=8 height=24>');
document.write('<img src="' + imgPath + '/dg8.gif" name="mn1" width=16 height=24>');
document.write('<img src="' + imgPath + '/dg8.gif" name="mn2" width=16 height=24>');
document.write('<img src="' + imgPath + '/nix.gif" width=4 height=24>');
document.write('<img src="' + imgPath + '/dk8.gif" name="se1" width=10 height=15>');
document.write('<img src="' + imgPath + '/dk8.gif" name="se2" width=10 height=15>');
document.write('</td></tr></table></td></tr></table>');

//--------------------------------------------------------------------------------------------------------
// Functions
//--------------------------------------------------------------------------------------------------------

var dg0 = new Image();  dg0.src = imgPath + '/dg0.gif';
var dg1 = new Image();  dg1.src = imgPath + '/dg1.gif';
var dg2 = new Image();  dg2.src = imgPath + '/dg2.gif';
var dg3 = new Image();  dg3.src = imgPath + '/dg3.gif';
var dg4 = new Image();  dg4.src = imgPath + '/dg4.gif';
var dg5 = new Image();  dg5.src = imgPath + '/dg5.gif';
var dg6 = new Image();  dg6.src = imgPath + '/dg6.gif';
var dg7 = new Image();  dg7.src = imgPath + '/dg7.gif';
var dg8 = new Image();  dg8.src = imgPath + '/dg8.gif';
var dg9 = new Image();  dg9.src = imgPath + '/dg9.gif';
var dk0 = new Image();  dk0.src = imgPath + '/dk0.gif';
var dk1 = new Image();  dk1.src = imgPath + '/dk1.gif';
var dk2 = new Image();  dk2.src = imgPath + '/dk2.gif';
var dk3 = new Image();  dk3.src = imgPath + '/dk3.gif';
var dk4 = new Image();  dk4.src = imgPath + '/dk4.gif';
var dk5 = new Image();  dk5.src = imgPath + '/dk5.gif';
var dk6 = new Image();  dk6.src = imgPath + '/dk6.gif';
var dk7 = new Image();  dk7.src = imgPath + '/dk7.gif';
var dk8 = new Image();  dk8.src = imgPath + '/dk8.gif';
var dk9 = new Image();  dk9.src = imgPath + '/dk9.gif';

function viewTime() {
  var d = new Date();
  var weekday = d.getDay();
  var day = d.getDate() + 100;
  var month = d.getMonth() + 101;
  var year = d.getYear();
  if(year < 1900) year += 1900;
  var date = '' + day + month + year;

  document.wd.src = imgPath + '/wd' + weekday + '.gif';
  document.d1.src = imgPath + '/dk' + date.substr(1, 1) + '.gif';
  document.d2.src = imgPath + '/dk' + date.substr(2, 1) + '.gif';
  document.m1.src = imgPath + '/dk' + date.substr(4, 1) + '.gif';
  document.m2.src = imgPath + '/dk' + date.substr(5, 1) + '.gif';
  document.y1.src = imgPath + '/dk' + date.substr(6, 1) + '.gif';
  document.y2.src = imgPath + '/dk' + date.substr(7, 1) + '.gif';
  document.y3.src = imgPath + '/dk' + date.substr(8, 1) + '.gif';
  document.y4.src = imgPath + '/dk' + date.substr(9, 1) + '.gif';

  var hr = d.getHours() + 100;
  var mn = d.getMinutes() + 100;
  var se = d.getSeconds() + 100;
  var time = '' + hr + mn + se;

  document.hr1.src = imgPath + '/dg' + time.substr(1, 1) + '.gif';
  document.hr2.src = imgPath + '/dg' + time.substr(2, 1) + '.gif';
  document.mn1.src = imgPath + '/dg' + time.substr(4, 1) + '.gif';
  document.mn2.src = imgPath + '/dg' + time.substr(5, 1) + '.gif';
  document.se1.src = imgPath + '/dk' + time.substr(7, 1) + '.gif';
  document.se2.src = imgPath + '/dk' + time.substr(8, 1) + '.gif';
}

var interval = setInterval('viewTime()', 1000);
