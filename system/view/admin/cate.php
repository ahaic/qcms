﻿<html>
<head>
<link rel=stylesheet href="styles/advanced/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
$this->load_js('jquery');
$this->load_css('admin_style');
?>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-image:url(<?=IMG_PATH?>bg3.gif);  background-repeat:repeat-x;  padding-left:   2px; padding-right:  2px; padding-bottom: 2px; margin-top:5px;  border:#dfdfdf solid 1px;">
  <tr>
    <td align="center"><p class="pagetitle"><?=$this->p_lang['class']?></p></td>
  </tr>
</table>
<br />
<?
echo $table;
?>
<br /><br />
<?
$this->load_php('admin/footer');
?>

</body>
</html>