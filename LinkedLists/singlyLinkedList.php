<?php

//create a node
class Node{
    public $data;
    public $next;
}

//create the list
class LinkedList{
    public $head;

    //define the constructor
    public function __construct(){
        $this->head= null;
    }

    //create the print function to print the linked list
    public function printList(){
        $temp= new Node();
        $temp= $this->head;

        if($temp != null){
            while($temp != null){
                echo "Data: ";
                echo $temp->data . " ";
                $temp= $temp->next;
            }
        }else{
            echo "The list is empty";
        }
    }
}

//create the instance of list
$myList= new LinkedList();

//create the first node
$first= new Node();
//populate the node with data
$first->data= "mudassir";
$first->next= null;
//link it with head of list
$myList->head= $first;

//create the second node
$second= new Node();
//populate the node with data
$second->data= "some@email.com";
$second->next= null;
//link it with the first node
$first->next= $second;

//create the third node
$third= new Node();
//populate the node with data
$third->data= "+9231232323";
$third->next= null;
//link it with second node
$second->next= $third;

//print the list
$myList->printList();
?>