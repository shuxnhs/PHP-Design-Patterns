<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/12
 * Time: 15:06
 */
namespace ObserverPattern;

interface Observer{

    function update($event_info=null);

}