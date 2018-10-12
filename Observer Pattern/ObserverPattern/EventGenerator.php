<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/12
 * Time: 15:06
 */
namespace ObserverPattern;
abstract class EventGenerator{
    private $observers =array();

    //添加观察者
    function addObserver(Observer $observer){
        $this->observers[]=$observer;

    }


    function notify(){
        foreach ($this->observers as $observer){
            $observer->update();
        }

    }

    //删除观察者
    function delObserver(Observer $observer){
        //查找对应值在数组中的键
        $key=array_search($observer,$this->observers);

        //根据键删除值并重新索引
        array_splice($this->observers,$key,1);
        echo "备胎从名单中排除\n";

    }
}