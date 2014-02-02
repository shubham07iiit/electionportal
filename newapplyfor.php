<?php
include_once "newheader.php";
$sflag=@$_GET['sflag'];
?>
<title>Apply</title>
<form action="newsignup.php" method="post">
<table border="0" width="100%" >
  <tr>
    <td valign="top" align="center"><span class="style1">Name</span></td>
    <tr><td>&nbsp;</td></tr>
  </tr>
    <td align="center"><h2><input type="text" name="name"/></h2></td>
  </tr>
  <tr><td>&nbsp;</td></tr>
  
  <tr>
    <td valign="top" align="center"><span class="style1">Tell us why you Motivated for this Job</span></td>
    <tr><td>&nbsp;</td></tr>
  </tr>
    <td align="center"><h2><textarea name="motto" cols="1" rows="10"></textarea></h2></td>
  </tr>
  <tr><td>&nbsp;</td></tr>
<tr>
<td align="center"><input type="submit" name="Submit" value="Submit" /></td>
</tr>
<?php
if($sflag==1)
{
?>
  <tr><td>&nbsp;</td></tr>
<tr>
<td align="center">You already applied for this position...</td>
</tr>
<?php
}
?>
<?php
if($sflag==2)
{
?>
  <tr><td>&nbsp;</td></tr>
<tr>
<td align="center">You have applied successfully...</td>
</tr>
<?php
}
?>
</table>
</form>
</body></html>