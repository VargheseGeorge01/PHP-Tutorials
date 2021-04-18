<?php
class student
{
 /*member function*/
 var $rollno;
 var $name;
 /*member functions*/
 function setRoll($par)
 {
  $this->rollno=$par;
 }
 function getRoll()
 {
  echo $this->rollno."<br>";
 }
 function setName($par)
 {
  $this->name=$par;
 }
 function getName()
 {
  echo $this->name."<br>";
 }
}
$student1=new student;
$student2=new student;

$student1->setRoll(1);
$student2->setRoll(2);
$student1->setName("Jack");
$student2->setName("Daniel");

$student1->getRoll();
$student1->getName();
$student2->getRoll();
$student2->getName();
?>