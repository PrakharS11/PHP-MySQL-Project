<?php 
include("db.php");

class data extends db {

    

    function addnewuser($name,$email,$password,$type,$Expi,$Dep,$Edu,$salary){
        $this->name=$name;
        $this->email=$email;
        $this->password=$pasword;
        $this->type=$type;
        $this->Expi=$Expi;
        $this->Dep=$Dep;
        $this->Edu=$Edu;
        $this->salary=$salary;


         $q="INSERT INTO emp(id, name, email, pwd,type,Experience,Department,Education,salary)VALUES('','$name','$email','$password','$type','$Expi','$Dep','$Edu','$salary')";

        if($this->connection->exec($q)) {
            header("Location:dashboard_admin.php?msg=New Add done");
        }
        else {
            header("Location:dashboard_admin.php?msg=Register Fail");
        }
    }

    function userLogin($t1, $t2) {
        $q="SELECT * FROM emp where email='$t1' and pwd='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();
        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                header("location: dashboard_user.php?userlogid=$logid");
            }
        }
        else {
            header("location: index.php?msg=Invalid Credentials");
        }
    }

    function adminLogin($t1, $t2) {
        $q="SELECT * FROM admin where email='$t1' and pwd='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();
        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                // $_SESSION["adminid"] = $logid;
                header("location: dashboard_admin.php?adminlogid=$logid");
            }
        }
        else {
            header("location: index.php?msg=Invalid Credentials");
        }
    }

    function userdata() {
        $q="SELECT * FROM emp ";
        $data=$this->connection->query($q);
        return $data;
    }

    function userdetail($id){
        $q="SELECT * FROM emp where id ='$id'";
        $data=$this->connection->query($q);
        return $data;
    }  
    function delete($id){
        $q="DELETE from emp where id='$id'";
        if($this->connection->exec($q)){
           header("Location:dashboard_admin.php?msg=done");
        }
        else{
           header("Location:dashboard_admin.php?msg=fail");
        }
    }
}