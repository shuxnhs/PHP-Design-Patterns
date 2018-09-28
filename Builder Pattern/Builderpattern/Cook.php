<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/28
 * Time: 15:35
 */
namespace Builderpattern;
class Cook{
    public function build($builder)
    {
        $builder->addoil();
        $builder->addfood();
        $builder->addsalt();

        return $builder->getFood();

    }
}