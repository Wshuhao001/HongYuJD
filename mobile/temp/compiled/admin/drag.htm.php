<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- $Id: drag.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<html>
<head>
<title></title>

<style type="text/css">
body {
  margin: 0;
  padding: 0;
  background:url("images/left_line.gif") repeat-y;
  cursor: E-resize;
}
</style>
<script type="text/javascript" language="JavaScript">
<!--
var pic = new Image();
pic.src="images/arrow_right.gif";
function toggleMenu()
{
  frmBody = parent.document.getElementById('frame-body');
  imgArrow = document.getElementById('img');

  if (frmBody.cols == "0, 12, *")
  {
    frmBody.cols="195, 12 , *";
    imgArrow.src = "images/arrow_left.gif";
  }
  else
  {
    frmBody.cols="0, 12, *";
    imgArrow.src = "images/arrow_right.gif";
  }
}
//-->
</script>

</head>
<body onselect="return false;">
<table height="100%" cellspacing="0" cellpadding="0" id="tbl">
  <tr><td><a href="javascript:toggleMenu();"><img src="images/arrow_left.gif" width="12" height="58" id="img" border="0" /></a></td></tr>
</table>
</body>
</html>