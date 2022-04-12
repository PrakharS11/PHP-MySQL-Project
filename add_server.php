<?php

    include("data_class.php");

    $addname=$_POST['addname'];
    $addemail= $_POST['addemail'];
    $addpass= $_POST['addpass'];
    $type= $_POST['type'];
    $Expi= $_POST['Expi'];
    $Dep= $_POST['Dep'];
    $Edu= $_POST['Edu'];
    $addsalary= $_POST['addsalary'];


    $obj=new data();
    $obj->setconnection();
    $obj->addnewuser($addname,$addemail,$addpass,$type,$Expi,$Dep,$Edu,$addsalary);
?>
