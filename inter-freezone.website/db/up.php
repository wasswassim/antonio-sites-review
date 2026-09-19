<?PHP
include("../include/interfree_dbinc.php");
include("../include/dbfix-php.php");


$db=mysql_connect($dbhost,$dbuser,$dbpasswd) or die ("Errore durante la connessione al database");

$sql="SELECT * FROM `ragionesociale` WHERE`Cod_clie`='". $_GET['codicino'] . "'";

echo $sql;
//echo "<br>";
// echo $_GET["Cod_clie"];
// echo "<br>";

mysql_select_db($dbname);
$result=mysql_query($sql);

//$result=mysql_db_query($__sartorm_dbname,$sql,$db);
$testata=mysql_fetch_array($result);
// echo $testata["Cli_C7"];
?>

<html>
<style type="text/css">
<!--
.Stile1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 20px;
	color: #FFFF99;
}
.Stile2 {color: #FFFF00}
.testata {
	background-image: url(./img/testata.jpg);
	background-repeat: no-repeat;
	background-position: center top;
}
-->
</style>
<head>
<title>Up</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body {
scrollbar-face-color: #B71E24; 
scrollbar-shadow-color: white;
scrollbar-highlight-color: white; 
scrollbar-3dlight-color: #C0C0C0; 
scrollbar-darkshadow-color: #C0C0C0; 
scrollbar-track-color: #eeeeee; 
scrollbar-arrow-color: rgb(255,255,255);
background-color:#031977;
}

A:link, A:visited { text-decoration: underline }
A:hover { text-decoration: underline; color: #FF9933 }

</style>
<script language="JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body bgcolor="#72060b" text="#000000" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF" onLoad="MM_preloadImages('../IMAGES/HOME/import2.gif','../img/bonus2.jpg','../img/showroom.jpg')">
<table>
<tr>
<td align="center">
<div align="center" id="Layer1" style="position:absolute; left:4px; top:0px; width:1003px; height:209px; z-index:1">
<table width="1003" height="196" cellspacing="2" bgcolor="#031977" class="testata">
  <tr>
    <td height="78">&nbsp;</td>
  </tr>
  <tr>
    <td height="30"><div align="center"><span class="Stile1"><span class="Stile2"><?php echo $testata["Cli_C7"];?></span></span> </div></td>
  </tr>
  <tr>
    <td height="27">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#031977">&nbsp;</td>
  </tr>
</table>
</div>
<div align="center" id="show" style="position:absolute; left:179px; top:55px; width:68px; height:68px; z-index:8">
  <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="../webmarketing/PDF/LETTERA-BONUS.pdf" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('bon','','../SITOEXPORTER/img/bonus2.jpg',1)"><img src="./SITOEXPORTER/img/bonus.gif" name="bon" width="69" height="69" border="0"></a></font></div>
</div>
<div align="center" id="bonus" style="position:absolute; left:765px; top:57px; width:68px; height:68px; z-index:8">
  <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="http://www.interfreezone.org" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('sho','','./SITOEXPORTER/img/showroom2.jpg',1)"><img src="./SITOEXPORTER/img/showroom.gif" name="sho" width="69" height="69" border="0"></a></font></div>
</div>
<div align="center"id="textscroll" style="position:absolute; left:0px; top:38px; width:117px; height:103px; z-index:5">
  <script language="JavaScript1.2">

//configure the below three variables to change the style of the scroller
var scrollerwidth=800
var scrollerheight=15
var scrollerbgcolor=''

//configure the below variable to change the contents of the scroller
var messages=new Array()
messages[0]="<font face='Verdana, Arial, Helvetica, sans-serif' size='1' color='#000066''><center>Edited By: Inter-Market-Associates-Network - Europe - America - Magreb- Midle East - Far East-Australia</font></center>"
messages[1]="<font face='Verdana, Arial, Helvetica, sans-serif' size='1' color='#000066''><center>Market Managed By: Inter-Markets-Management-Consortiums-Associates-Network-Switzerland</font></center>"
messages[2]="<font face='Verdana, Arial, Helvetica, sans-serif' size='1' color='#000066''>Central Milan Offices and Show-rooms: Inter-Market-Associates with Italian Export Consortium Via Alassio, 10 Milan I-20156 Italy</font>"

///////Do not edit pass this line///////////////////////

if (messages.length>1)
i=2

else
i=0

function move1(whichlayer){
tlayer=eval(whichlayer)
if (tlayer.top>0&&tlayer.top<=5){
tlayer.top=0
setTimeout("move1(tlayer)",3000)
setTimeout("move2(document.main.document.second)",3000)
return
}
if (tlayer.top>=tlayer.document.height*-1){
tlayer.top-=5
setTimeout("move1(tlayer)",100)
}
else{
tlayer.top=scrollerheight
tlayer.document.write(messages[i])
tlayer.document.close()
if (i==messages.length-1)
i=0
else
i++
}
}

function move2(whichlayer){
tlayer2=eval(whichlayer)
if (tlayer2.top>0&&tlayer2.top<=5){
tlayer2.top=0
setTimeout("move2(tlayer2)",3000)
setTimeout("move1(document.main.document.first)",3000)
return
}
if (tlayer2.top>=tlayer2.document.height*-1){
tlayer2.top-=5
setTimeout("move2(tlayer2)",100)
}
else{
tlayer2.top=scrollerheight
tlayer2.document.write(messages[i])
tlayer2.document.close()
if (i==messages.length-1)
i=0
else
i++
}
}

function move3(whichdiv){
tdiv=eval(whichdiv)
if (tdiv.style.pixelTop>0&&tdiv.style.pixelTop<=5){
tdiv.style.pixelTop=0
setTimeout("move3(tdiv)",3000)
setTimeout("move4(second2)",3000)
return
}
if (tdiv.style.pixelTop>=tdiv.offsetHeight*-1){
tdiv.style.pixelTop-=5
setTimeout("move3(tdiv)",100)
}
else{
tdiv.style.pixelTop=scrollerheight
tdiv.innerHTML=messages[i]
if (i==messages.length-1)
i=0
else
i++
}
}

function move4(whichdiv){
tdiv2=eval(whichdiv)
if (tdiv2.style.pixelTop>0&&tdiv2.style.pixelTop<=5){
tdiv2.style.pixelTop=0
setTimeout("move4(tdiv2)",3000)
setTimeout("move3(first2)",3000)
return
}
if (tdiv2.style.pixelTop>=tdiv2.offsetHeight*-1){
tdiv2.style.pixelTop-=5
setTimeout("move4(second2)",100)
}
else{
tdiv2.style.pixelTop=scrollerheight
tdiv2.innerHTML=messages[i]
if (i==messages.length-1)
i=0
else
i++
}
}

function startscroll(){
if (document.all){
move3(first2)
second2.style.top=scrollerheight
}
else if (document.layers){
move1(document.main.document.first)
document.main.document.second.top=scrollerheight+5
document.main.document.second.visibility='show'
}
}

window.onload=startscroll

</script>




<ilayer id="main" width=&{scrollerwidth}; height=&{scrollerheight}; bgColor=&{scrollerbgcolor};>
<layer id="first" left=0 top=1 width=&{scrollerwidth};>
<script language="JavaScript1.2">
if (document.layers)
document.write(messages[0])
</script>
</layer>
  <layer id="second" left=0 top=0 width=&{scrollerwidth};> 
  <script language="JavaScript1.2">
if (document.layers)
document.write(messages[1])
</script>
</layer>
</ilayer>

<script language="JavaScript1.2">
if (document.all){
document.writeln('<span id="main2" style="position:relative;width:'+scrollerwidth+';height:'+scrollerheight+';overflow:hiden;background-color:'+scrollerbgcolor+'">')
document.writeln('<div align="center"style="position:absolute;width:'+scrollerwidth+';height:'+scrollerheight+';clip:rect(0 '+scrollerwidth+' '+scrollerheight+' 0);left:140;top:0">')
document.writeln('<div align="center"id="first2" style="position:absolute;width:'+scrollerwidth+';left:0;top:1;">')
document.write(messages[0])
document.writeln('</div>')
document.writeln('<div align="center"id="second2" style="position:absolute;width:'+scrollerwidth+';left:0;top:0">')
document.write(messages[1])
document.writeln('</div>')
document.writeln('</div>')
document.writeln('</span>')
}
</script>
</div>
</td></tr>
</table>
</body>
</html>

