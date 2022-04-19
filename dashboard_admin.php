<?php
    session_start();
    $msg="";

    if(!empty($_REQUEST['msg'])){
        $msg=$_REQUEST['msg'];
    }
    if($msg=="done"){
        echo "<div class='alert alert-success' role='alert'>Sucssefully Done</div>";
    }
    elseif($msg=="fail"){
        echo "<div class='alert alert-danger' role='alert'>Fail</div>";
    }
    if(isset($_POST['submit'])){

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet"  href="style.css?v=<?php echo time(); ?>">
    </head>
         
       
    <body>
        <?php
        include("data_class.php");
        ?>
       


        <div class="container">
            <div class="innerdiv">

                <div class="row"><img class="imglogo" src="images/logo22.png"/>
                </div>
                
                <div class="leftinnerdiv">
                <a href="logout.php"><Button class="greenbtn" > LOGOUT</Button></a>
                <Button class="greenbtn" type="submit" form="form1" value="Submit">Submit</Button>

                </div>
                       
                <div class="rightinnerdiv">       
                <div id="addperson" class="innerright portion">
                    <form id="form1" action="add_server.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">

                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="addname" required>

                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="addemail" required>

                            <label for="exampleFormControlInput1">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="addpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            

                            <label for="exampleFormControlSelect1">Job Role</label>
                            <select name="type"class="form-control" id="exampleFormControlSelect1">
                                <option value="Software Developer">Software Developer</option>
                                <option value="Senior Software Developer">Senior Software Developer</option>
                                <option value="Technical Lead">Technical Lead</option>
                                <option value="HR Coordinator">HR Coordinator</option> 
                                <option value="Technical Project Manager">Technical Project Manager</option>
                            </select>

                            <label for="exampleFormControlSelect1">Work Experience</label>
                            <select name="Expi"class="form-control" id="exampleFormControlSelect1">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option> 
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">Above</option>
                            </select>

                            <label for="exampleFormControlSelect1">Department</label>
                            <select name="Dep"class="form-control" id="exampleFormControlSelect1">
                                <option value="IT">IT</option>
                                <option value="Sales and Maketing">Sales and Maketing</option>
                                <option value="Opertions">Opertions</option>
                                <option value="Logistics">Logistics</option> 
                                <option value="Human Resorce">Human Resorce</option>
                            </select>

                            <label for="exampleFormControlSelect1">Education</label>
                            <select name="Edu" class="form-control" id="exampleFormControlSelect1">
                                <option value="10+2">10+2</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Graduation">Graduation</option>
                                <option value="Post Gradustion">Post Graduation</option>
                                <option value="Doctorate">Doctorate</option> 
                            </select>

                            <label for="exampleFormControlInput1">Salary (LPA)</label>
                            <input type="number" min="2" class="form-control" id="exampleFormControlInput1" placeholder="INR"name="addsalary" required>
                        </div>
                        
                    </form>
        </div>
        </div>
                 
                <?php
                    $u=new data;
                    $u->setconnection();
                    $u->userdata();
                    $recordset=$u->userdata();
            
                    $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  border: 1px solid #ddd;
                    padding: 8px;'> ID</th><th>Name</th><th>Email</th><th>Password</th><th>Job Role</th><th>Eperience</th><th>Department</th><th>Education</th><th>Salary</th><th>Delete</th></tr>";
                    foreach($recordset as $row){
                        $table.="<tr>";
                        $table.="<td>$row[0]</td>";
                        $table.="<td>$row[1]</td>";
                        $table.="<td>$row[2]</td>";
                        $table.="<td>$row[3]</td>";
                        $table.="<td>$row[4]</td>";
                        $table.="<td>$row[5]</td>";
                        $table.="<td>$row[6]</td>";
                        $table.="<td>$row[7]</td>";
                        $table.="<td>$row[8]</td>";
                        $table.="<td><a href='delete.php?deleteid=$row[0]'><i class='fa fa-trash'></i</a></td>";
                        $table.="</tr>";
                       
                    }
                    $table.="</table>";

                    echo $table;
                ?>
                
    </body>
</html>