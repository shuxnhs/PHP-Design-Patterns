<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/10
 * Time: 15:19
 */
namespace ObserverPattern;
//定义文件目录
define('BASEDIR', __DIR__);
include BASEDIR.'/ObserverPattern/Loader.php';
spl_autoload_register('\\ObserverPattern\\Loader::autoload');

class Goddess extends EventGenerator {
    function birthday(){
        echo "女神生日到了\n";
        $this->notify();
    }
}

class Beitai1 implements Observer {

    function update($event_info = null)
    {
        echo "备胎1准备了MAC口红\n";
    }
}
class Beitai2 implements Observer {

    function update($event_info = null)
    {
        echo "备胎2准备了YSL口红\n";
    }
}
$xiaomin=new Beitai1();
$Goddess=new Goddess();
$Goddess->addObserver($xiaomin);
$Goddess->addObserver(new Beitai2);
$Goddess->birthday();
$Goddess->delObserver($xiaomin);
$Goddess->birthday();
