<?php
include("data_class.php");

$deleteid=$_GET['deleteid'];

$obj=new data();
$obj->setconnection();
$obj->delete($deleteid);
