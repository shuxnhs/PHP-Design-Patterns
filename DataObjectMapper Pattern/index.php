<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/10
 * Time: 15:19
 */
namespace Dataobjectmapperpattern;
//定义文件目录
define('BASEDIR', __DIR__);
include BASEDIR.'/Dataobjectmapperpattern/Loader.php';
spl_autoload_register('\\Dataobjectmapperpattern\\Loader::autoload');

class page{

    function index(){
        $user=factory::getuser(1);
        //var_dump($user->id,$user->name,$user->password);
        //exit;
        $user->name='wxz';
        $this->test();


    }

    function test(){
        $user=factory::getuser(1);
        $user->password='12345';


    }

}

$page= new page();
$page->index();
$page->test();

