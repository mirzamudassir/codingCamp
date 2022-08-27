<?php
//create the node struct
class Node{
    public $data;
    public $next;
    public $prev;
}

//create the list
class LinkedList{
    public $head;

    //define the constructor
    public function __construct(){
        $this->head= null;
    }

    //create the print function to print the list
    public function printList(){
        $temp= new Node();
        $temp= $this->head;

        if($temp != null){
            echo "Data: ";
            while($temp != null){
                echo $temp->data . " ";
                $temp= $temp->next;
            }
        }else{
            echo "The list is empty";
        }
    }
}

//create the list instance
$myList= new LinkedList();

//create the first node
$first= new Node();
//populate the node with Data
$first->data= "mudassir";
$first->next= null;
$first->prev= null;
//link it with the list head
$myList->head= $first;

//create the second Node
$second= new Node();
//populate the node with data
$second->data= "+92979797999";
$second->next= null;
//link it with the first node
$second->prev= $first;
$first->next= $second;

//create the third node
$third= new Node();
//populate the node with data
$third->data= "some@email.com";
$third->next= null;
//link it with the second node
$third->prev= $second;
$second->next= $third;

//print the list
$myList->printList();