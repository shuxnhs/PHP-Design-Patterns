<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/10
 * Time: 15:50
 */
namespace Dataobjectmapperpattern;
class factory{
    static function getuser($id){
        $user= new User($id);
        return $user;
    }
}