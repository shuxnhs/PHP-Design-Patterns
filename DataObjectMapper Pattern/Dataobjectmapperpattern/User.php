<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/10
 * Time: 15:25
 */
namespace Dataobjectmapperpattern;
class User{
    public $id;
    public $name;
    public $password;

    protected $db;

    function __construct($id)
    {
        $this->db=new MySQLi();
        $this->db->connect("127.0.0.1","root","88663334188","test");
        $res=$this->db->query("select * from user limit 1");
        $data=$res->fetch_assoc();
        $this->id=$data['id'];
        $this->name=$data['name'];
        $this->password=$data['password'];

    }

    function __destruct()
    {
        $this->db->query("update user set name='{$this->name}',
                password='{$this->password}' where id='{$this->id}' limit 1");
    }

}