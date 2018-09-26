<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/25
 * Time: 23:40
 */
    namespace IMooc;

    class Object{

            protected $array=array();

            //设置一个类的成员变量时调用
            function __set($key,$value){

                //打印方法名称
                var_dump(__METHOD__);
                $this->array[$key]=$value;
            }

            //获得一个类的成员变量时调用
            function __get($key){

                var_dump(__METHOD__);
                 return $this->array[$key];

            }

            //在对象中调用一个不可访问方法时调用
            function __call($name, $arguments)
            {
                // TODO: Implement __call() method.
                var_dump(__METHOD__);
                return "magic function\n";
            }

            //用静态方式中调用一个不可访问方法时调用
            static function __callStatic($name, $arguments)
            {
                // TODO: Implement __callStatic() method.
                var_dump(__METHOD__);
                return "static magic function\n";
            }

            //类被当成字符串时的回应方法
            function __toString()
            {
                // TODO: Implement __toString() method.
                return __CLASS__;
            }

            //调用函数的方式调用一个对象时的回应方法
            function __invoke($parm)
            {
                // TODO: Implement __invoke() method.
                var_dump($parm);
                return "invoke";
            }


    }


    /*下面不能有可执行代码
        echo “”；
    */
