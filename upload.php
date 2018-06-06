<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HEADER</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css">

<style type="text/css">
  
</style>
<style type="text/css">
 
</style>


</head> 
<body style="background-color: #dedede color: white" >
<nav class="navbar navbar-default navbar-expand-xl navbar-light navbar1" style="background-image: url(img/header.jpg); background-repeat: no-repeat; background-size: cover; font-size: 25px" >
  <div class="navbar-header d-flex col">
    
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
      <span class="navbar-toggler-icon"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start" style="padding-top: 25px; color: white">
   
     <center>E-WASTE Items You Can Buy</center>
      
  </div>
</nav>

<div class="container" >    
        <div id="loginbox" style="padding-top: 18%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">               <div class="element-main" >     
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div style="font-size: 30px" class="panel-title"><center>Upload</center></div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="upload.php">
                                    
                            <div style="margin-bottom: 25px; padding-left: 30px;" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input style="width: 400px; height: 50px; border: 1px solid black; " id="login-username username" type="text" class="form-control" name="name" value="" placeholder="username or email" required="">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px; padding-left: 30px;" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input style="width: 400px; height: 50px; border: 1px solid black; " id="item" type="text" class="form-control" name="item" placeholder="Item name" required="" >
                                    </div>


                                     <div style="margin-bottom: 25px; padding-left: 30px;" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input style="width: 400px; height: 50px; border: 1px solid black; " id="conditions" type="text" class="form-control" name="conditions" placeholder="condition of item (how old)" required="" >
                                    </div>
                                    
                                     <div style="margin-bottom: 25px; padding-left: 30px;" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input style="width: 400px; height: 50px; border: 1px solid black; " id="address" type="text" class="form-control" name="address" placeholder="address" required="" >
                                    </div>
                                    

                                     <div style="margin-bottom: 25px; padding-left: 30px;" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input style="width: 400px; height: 50px; border: 1px solid black; " id="phone" type="email" class="form-control" name="phone" placeholder="email id" required="" >
                                    </div>

                                    <div style="margin-bottom: 25px; padding-left: 30px;" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input style="width: 400px; height: 50px; border: 1px solid black; " id="price" type="text" class="form-control" name="phone" placeholder="price" required="" >
                                    </div>
                                    
<center>
                                    upload: <input type="file" name="doc" id="file" size="80">
       <!--  name:<input type="text" name="image"> -->
        <!--  <button class="btn btn-primary" type="submit" style=" font-size: 20px; text-align: center; padding-right: 30px;" id="submit" name="button">send</button> -->
                                </center>
                            

                                <div style="margin-top:10px; text-align: center;" class="form-group">
                                    <!-- Button -->

                                    <div class="col-lg-12 controls">
                                    
                                     <BUTTON class="btn btn-primary" type="submit" style=" font-size: 20px; text-align: center; padding-right: 30px;" id="submit" name="submit"> Upload</BUTTON>
                                      
                                    </div>
                                </div>


                               
                            </form>     



                        </div>                     
                    </div>  
        </div>
       
               
               </div>
                
        </div> 
    </div>



    <?php

require('config.php');




function NewUser($con){
  $dat = "./uploads";
  move_uploaded_file($dat);
  $name = $_POST['name'];
  $item = $_POST['item'];
  $conditions = $_POST['conditions'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  
 
  $query = "INSERT INTO products (name,item,conditions,pic,address,phone) VALUES ('$name','$item','$conditions','$dat','$address','$phone')";
  $data = mysqli_query($con , $query) or die (mysqli_error($con));
  if ($data==true) {
    echo "<script type='text/javascript'>alert('your item has been uploaded')</script>";
      //echo "your registration is complete.";
    }
    // if($email===$row['email'])
    // {
    //    echo "<script type='text/javascript'>alert('invalid emailid already exists')</script>";
    // }
  
}


if (isset($_POST['submit']))
{
  
 

  //echo "post";
  NewUser($con);
  
} 
                                                   
// if(isset($_POST['button']))
// {
//   $fname = $_FILES["file"]["name"];
//   $dat = "./uploads".$fname;
//   move_uploaded_file($_FILES["file"]["tmp_name"], $dat);
//   $query = "INSERT into products( name, path) values('$fname','$dat')";
//   $queryl= mysqli_query($con,$query);
//   // if (queryl==true) {
//   //   echo "insert data";
//   //   # code...
//   // }
// }


  # code...




















  //$fname = $_FILES["doc"]["name"];
  
  // if (queryl==true) {
  //   echo "insert data";
  //   # code...
  // }

?>





</body>
</html>                                                        