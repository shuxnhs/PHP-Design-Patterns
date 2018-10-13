<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/14
 * Time: 1:20
 */
namespace PrototypePattern;
class ConcretePrototype implements Prototype{

    private $_name;
    public function __construct($name)
    {
        $this->_name=$name;
    }

    public function setName($name)
    {
        $this->_name=$name;

    }

    public function getName()
    {
        return $this->_name;
    }


    public function shallowCopy()
    {
        return clone $this;
    }


    /**
     * 深拷贝对象
     * @return mixed $clone_obj
     * serialize序列化--把对象写到流里的过程
     * unserialize反序列化--吧对象从流里读出来
     *
     */
    public function deepCopy()
    {
        $serialize_obj=serialize($this);
        $clone_obj=unserialize($serialize_obj);
        return $clone_obj;
    }

}

