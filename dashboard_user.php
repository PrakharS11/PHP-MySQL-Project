<?php
    session_start();

    $userloginid=$_SESSION["userid"] = $_GET['userlogid'];
    // echo $_SESSION["userid"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>User Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?> ">
    </head>
    
    <body>

        <?php
            include("data_class.php");
        ?>
        <div class="container">
            <div class="innerdiv">
                <div class="row"><img class="imglogo" src="images/logo22.png"/></div>
                <div class="leftinnerdiv">
                    
                    <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
                    <Button class="greenbtn" onclick="openpart('myaccount')"> Update</Button>
                </div>


                <div class="rightinnerdiv">   
                <div id="myaccount" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo ""; }?>">
                

                <?php
                    $u=new data;
                    $u->setconnection();
                    $u->userdetail($userloginid);
                    $recordset=$u->userdetail($userloginid);                 
                    
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
                



            </div>
        </div>



        <script>
            function openpart(portion) {
            var i;
            var x = document.getElementsByClassName("portion");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            document.getElementById(portion).style.display = "block";  
            }
        </script>
    </body>
</html>