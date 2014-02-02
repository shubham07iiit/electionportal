<?php
include_once "newfrontheader.php";
include_once "newblogic.php";
@session_start();
$M=$_GET['flag'];
$value=$_SESSION['Mail'];
$str = "SELECT * FROM login_details where ldap_id='".$value."'";
$obj = new logic();
$res = $obj->getresult($str);
while($row=mysql_fetch_row($res))
{
if($row[3]==0)
{
$str1 = <<<update1
UPDATE login_details set flag=1 where ldap_id='$value';
update1;
$obj1= new logic();
$res1 = $obj->getresult($str1);
$str2 = <<<update
UPDATE contestant set neg_vote=neg_vote+1,t_votes=t_votes-1 where motto_id='$M';
update;
$obj2 = new logic();
$res2 = $obj->getresult($str2);
if(mysql_affected_rows()>0)
{
    header("location:newvoting.php");
}
}
else
{
	$flag=1;
    header("location:newvoting.php?flag=$flag");
}
}
?>