<?php
include_once "newfrontheader.php";
include_once "newblogic.php";
$flag=0;
session_start();
$_SESSION['Mail']=$_POST['Mail'];
$str = "SELECT * FROM login_details where ldap_id='".$_POST['Mail']."' AND password='".$_POST['Pass']."'";
$obj = new logic();
$res = $obj->getresult($str);
if(mysql_affected_rows()>0 && $_SESSION['Mail']!='')
{
    header("location:newhome.php");
?>
<?php    
}
else
{
	$flag=1;
    header("location:newfront.php?flag=$flag");
}
?>