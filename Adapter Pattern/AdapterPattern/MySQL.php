<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/30
 * Time: 0:41
 */
namespace AdapterPattern;
class MySQL implements Database{

    protected $conn;

    function connect($host, $user, $passwd, $db)
    {
        $conn =mysql_connect($host,$user,$passwd);
        mysql_select_db($db,$conn);
        $this->conn=$conn;

    }

    function query($sql)
    {
        $result= mysql_query($sql,$this->conn);
        return $result;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}