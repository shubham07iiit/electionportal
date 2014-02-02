<?php
include_once "newblogic.php";
@session_start();
$value1=$_SESSION['Mail'];
$value2=$_POST['name'];
$value3=$_POST['motto'];
$value4=$value1.'123';
$value5=0;
$value6=0;
$value7='123';
$value8=0;
$str = <<<insert
INSERT INTO contestant(cont_id,name,motto,motto_id,pos_votes,neg_vote,post_id,t_votes) VALUES(
'$value1','$value2','$value3','$value4',$value5,$value6,$value7,$value8)
insert;
$obj = new logic();
$res = $obj->getresult($str);
/*echo $str;*/
if(mysql_affected_rows()>0)
{
   $sflag=2;
   header("location:newapplyfor.php?sflag=$sflag");
}
else
{
    $sflag=1;
    header("location:newapplyfor.php?sflag=$sflag");
}
?>