<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/26
 * Time: 1:16
 */
//Spl提供的数据结构--队列
$queue=new SplQueue();
$queue->enqueue("data 1 \n");
$queue->enqueue("data 2 \n");
echo $queue->dequeue();
echo $queue->dequeue();

//Spl提供的数据结构--栈
$stack =new SplStack();
$stack->push("data 1 \n");
$stack->push("data 2 \n");
echo $stack->pop();
echo $stack->pop();

//Spl提供的数据结构--最小堆
$minheap=new SplMinHeap();
$minheap->insert("data 1 \n");
$minheap->insert("data 2 \n");
echo $minheap->extract();
echo $minheap->extract();

//Spl提供的数据结构--数组
$array=new SplFixedArray(4);
$array[0]=1;
$array[1]=12;
$array[2]=123;
//array[3]=NULL
var_dump($array);

