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
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet"  href="style.css?v=<?php echo time(); ?>">
    </head>
         
       
    <body>

        <?php
        include("data_class.php");

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
        ?>



        <div class="container">
            <div class="innerdiv">

                <div class="row"><img class="imglogo" src="images/logo22.png"/>
                </div>
                
                <div class="leftinnerdiv">
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
                <Button class="greenbtn" type="submit" form="form1" value="Submit">Submit</Button>

                </div>
                       
                <div class="rightinnerdiv">       
                <div id="addperson" class="innerright portion">
                    <form id="form1" action="add_server.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">

                            <label for="exampleFormControlInput1">Name</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" name="addname">

                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="addemail">

                            <label for="exampleFormControlInput1">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="addpass">

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
                                <option value="6">6</option>
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

                            <label for="exampleFormControlInput1">Salary</label>
                            <input type="Salary" class="form-control" id="exampleFormControlInput1" placeholder="INR"name="addsalary">
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
                    padding: 8px;'> Name</th><th>Email</th><th>Job Role</th><th>Eperience</th><th>Department</th><th>Education</th><th>Salary</th></tr>";
                    foreach($recordset as $row){
                        $table.="<tr>";
                    "<td>$row[0]</td>";
                        $table.="<td>$row[1]</td>";
                        $table.="<td>$row[2]</td>";
                        $table.="<td>$row[4]</td>";
                        $table.="<td>$row[5]</td>";
                        $table.="<td>$row[6]</td>";
                        $table.="<td>$row[7]</td>";
                        $table.="<td>$row[8]</td>";
                        $table.="</tr>";
                       
                    }
                    $table.="</table>";

                    echo $table;
                ?>
                

    </body>
</html>