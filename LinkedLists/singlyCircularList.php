<?php
//create the node struct
class Node{
    public $data;
    public $next;
}

//create the list
class LinkedLists{
    public $head;

    //define the constructor
    public function __construct(){
        $this->head= null;
    }

    //create the print function to traverse through the list
    public function printList(){
        $temp= new Node();
        $temp= $this->head;

        if($temp != null){
            echo "Data: ";
            while(true){
                echo $temp->data . " ";
                $temp= $temp->next;
                if($temp == $this->head){
                    break;
                }
            }
        }else{
            echo "The list is empty";
        }
    }
}

//create the instance of list
$myList= new LinkedLists();

//create the first node
$first= new Node();
//populate the node with data
$first->data= "mudassir";
$first->next= null;
//link it with the list
$myList->head= $first;

//create the second node
$second= new Node();
//populate the node with data
$second->data= "+92634566656";
$second->next= null;
//link it with the first node
$first->next= $second;

//create the third Node
$third= new Node();
//populate the node with data
$third->data= "some@email.com";
//link it with the first node to make it circular
$third->next= $myList->head;
//link it with the second node
$second->next= $third;

//print the list
$myList->printList();