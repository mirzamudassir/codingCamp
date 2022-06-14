<?php
//add node at the start of the list
//create the node struct
class Node{
    public $data;
    public $next;
}

//create the linked list
class LinkedList{
    public $head;

    //define the constructor
    public function __construct(){
        $this->head= null;
    }

    //define the print method to traverse through the list
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
            echo "List is empty";
        }
    }

    //add the node to the front of list
    public function push_front($param){
        $node= new Node();
        $node->data= $param;
        //push it to the front
        $node->next= $this->head;
        //now link it with the list
        $this->head= $node;
    }

    //add the node at the end of list
    public function push_back($param){
        $node= new Node();
        $node->data= $param;
        $node->next= null;
        //if list is empty
        if($this->head == null){
            $this->head= $node;
        }else{
            $temp= new Node();
            $temp= $this->head;
            while($temp->next != null){
                $temp= $temp->next;
            }
            $temp->next= $node;
        }
    }
}

//initialize the instance of list
$myList= new LinkedList();

//test the push_front method
$myList->push_front(10);
$myList->push_front(20);
$myList->push_front(30);

//test the push_back method
$myList->push_back("last item");

//print the lsit
$myList->printList();
