<?php
include_once "newheader.php";
include_once "newblogic.php";
$flag=@$_GET['flag'];
@session_start();
$value1='123';
if(isset($_SESSION['Mail']))
{
$str = "SELECT * FROM contestant where post_id='".$value1."' order by t_votes";
$obj = new logic();
$res = $obj->getresult($str);
?>
<title>Voting page</title> 
<form action="" method="post">
<table border="0" width="100%"">
  <tr>
    <td valign="top" colspan="4" align="center"><span class="style1">Contestant List </span></td>
  </tr>
<?php
while($row=mysql_fetch_row($res))
{
?>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td width="39%">&nbsp;</td>
    <td width="17%">Name</td>
    <td width="16%"><?php echo $row[1]; ?></td>
    <td width="28%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Motto</td>
    <td><?php echo $row[2]; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="newupvotes.php?flag=<?php echo $row[3];?>">Up Vote</a> &nbsp;<?php echo $row[4];?></td>
    <td><a href="newdownvotes.php?flag=<?php echo $row[3];?>">Down Vote</a> &nbsp;<?php echo $row[5];?></td>
    <td>&nbsp;</td>
  </tr>
  <?php
  }
if($flag==1)
{
?>
<tr><td>&nbsp;</td></tr>
<tr>
<td colspan="4" align="center">You have already used your vote...</td>
</tr>
<?php
}
?>
 </table>
</form>
</body></html>
<?php  
$obj->closeconnection();
}
else
{
     header("location:newfront.php");   
}
?>
