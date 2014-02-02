<?php
require_once("config.php");
class logic
{
    function getconnection()
    {
        $link=mysql_connect(SERVER,USER,PASSWORD) ;
        if($link)
        {
            return $link;
        }
        else
        {
            return false;
            
        }
    }    
    function getdatabase()
    {
        self::getconnection();
        $db=mysql_select_db(DATABASE);
        if($db)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function getresult($str)
    {
        self::getconnection();
        self::getdatabase();
        $result=mysql_query($str);
        if($result)
        {
            return $result;
        }
        else
        {
            return false;
            
        }
    }
    function closeconnection()
    {
        mysql_close(self::getconnection());
    }
}
?>
