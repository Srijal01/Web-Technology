<?php
class Student{
    public $roll;
    public $name;
    public $college;
    public function setData($roll, $name, $college){
        $this->roll=$roll;
        $this->name=$name;
        $this->college=$college;
    }
    public function getData(){
        return "Student of roll number{$this->roll} having name {$this->name} is missing from {$this->college}";
    }
}
$st1= new Student();
$st1->setData(12, "Srijal", "Vedas College");
echo $st1->getData();
?>