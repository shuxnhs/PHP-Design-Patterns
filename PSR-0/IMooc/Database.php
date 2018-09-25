<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/26
 * Time: 1:25
 */
namespace IMooc;

class Database{


    function where($where)
    {
        //实现链式操作需要return
        return $this;
    }

    function order($order)
    {

        return $this;
    }

    function limit($limit)
    {

        return $this;
    }

}