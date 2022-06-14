<?php
//create the queue struct
class Queue{
    public $front;
    public $rear;

    public $queue= array();

    //define the constructor
    public function __construct(){
        $this->front= -1;
        $this->rear= -1;
    }

    //create the method to check if the queue is empty or not
    public function isEmpty(){
        if($this->rear == $this->front){
            echo "Queue is empty \n";
        }else{
            echo "Queue is not empty \n";
        }
    }

    //create the method to check the size of queue
    public function size(){
        return ($this->rear - $this->front);
    }

    //create the method to add a new element to queue
    public function EnQueue($param){
        $this->queue[++$this->rear]= $param;
        echo $param . " is add to the queue \n";
    }

    //create the method to remove a element from front of the queue
    public function DeQueue(){
        if($this->rear == $this->front){
            echo "Queue is empty \n";
        }else{
            $temp= $this->queue[++$this->front];
            echo $temp . " is deleted from the front of the queue \n";
        }
    }

    //create a method to get the front element of queue
    public function frontElement(){
        if($this->rear == $this->front){
            echo "Queue is empty \n";
        }else{
            return $this->queue[$this->front+1];
        }
    }

    //create a method to get the last element from the queue
    public function rearELement(){
        if($this->rear == $this->front){
            echo "Queue is empty \n";
        }else{
            return $this->queue[$this->rear];
        }
    }
}

//initialize the queue instance
$myQueue= new Queue();

$myQueue->EnQueue(10);
$myQueue->EnQueue(20);
$myQueue->EnQueue(30);

$myQueue->DeQueue();

$myQueue->isEmpty();

echo $myQueue->frontElement();
echo $myQueue->rearElement();

echo $myQueue->size();
