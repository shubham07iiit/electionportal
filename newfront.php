<?php
include_once "newfrontheader.php";
$flag=@$_GET['flag'];
?>
<title>Student Login</title>
<table width="100%" height="100%" border="0">
<tr>
  <td height="117" >&nbsp;</td>
  <td valign="top" align="center"><img src="Icon.jpg" width="130" height="113" align="middle" alt="Icon"></td>
  <td height="117" >&nbsp;</td>
</tr>
<tr>
  <td height="45" >&nbsp;</td>
  <td valign="middle" align="center"><b>
  <h2>ONLINE ELECTION PORTAL</h2></b></td>
  <td height="45" >&nbsp;</td>
</tr>
<tr>
  <td height="21" >&nbsp;</td>
  <td valign="top">&nbsp;</td>
  <td height="21" >&nbsp;</td>
</tr>
<tr>
<td width="32%" height="246" >&nbsp;</td>
<td width="33%" valign="top">
<center>
<b>Student Login Here</b>
</center>
<table border="0" cellspacing="5" cellpadding="5" align="center">
<tr>
<td valign="top">
<table border="0" cellspacing="5" cellpadding="5">
<form action="newlogin.php" method="post">
<tr>
  <td width="90">LDAP User Id</td>
<td width="221"><input type="Text" name="Mail" size="15" /></td>
</tr>
<tr>
  <td>Password</td>
<td><input type="password" name="Pass" size="15" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="login" value="Sign In" /></td>
</tr>
<?php
if($flag==1)
{
?>
<tr>
<td colspan="2" align="center">You are not Registered or Invalid Details, Please Register Yourself or Try Again...</td>
</tr>
<?php
}
?>
</form>
</table>
</td>
</tr> 
</table> 
</td>
<td width="35%" height="246" >&nbsp;</td> 
</tr>
</table>
</body>
</html> 