<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/13
 * Time: 16:58
 */
namespace PrototypePattern;

//定义文件目录
define('BASEDIR', __DIR__);
include BASEDIR.'/PrototypePattern/Loader.php';
spl_autoload_register('\\PrototypePattern\\Loader::autoload');

class Demo
{
    public $string;
}
class UsePrototype
{
    public function shallow()
    {
        $demo = new Demo();

        //浅拷贝,只拷贝当前对象实例(基本类型的数据)不拷贝引用的对象
        $demo->string = "1";

        $object_shallow_first = new ConcretePrototype($demo);
        //object_shallow_second拷贝object_shallow_first的值
        $object_shallow_second = $object_shallow_first->shallowCopy();
        //第一次输出
        var_dump($object_shallow_first->getName());
        echo '<br/>';
        var_dump($object_shallow_second->getName());
        echo '<br/>';

        //浅拷贝没有开辟新的空间，指向的是相同的地址，第二次输出相同
        $demo->string = "2";
        var_dump($object_shallow_first->getName());
        echo '<br/>';
        var_dump($object_shallow_second->getName());
        echo '<br/>';

    }

    public function deep()
    {
        $demo = new Demo();

        $demo->string = "1";
        $object_deep_first = new ConcretePrototype($demo);
        //object_shallow_second拷贝object_shallow_first的对象
        $object_deep_second = $object_deep_first->deepCopy();

        var_dump($object_deep_first->getName());
        echo '<br/>';
        var_dump($object_deep_second->getName());
        echo '<br/>';

        //由于深拷贝开辟了新的地址存放对象，两者的地址不一样输出的值也不一样
        $demo->string = "2";
        var_dump($object_deep_first->getName());
        echo '<br/>';
        var_dump($object_deep_second->getName());
        echo '<br/>';

    }

}

$object = new UsePrototype();
$object->shallow();
echo '<hr>';
$object->deep();