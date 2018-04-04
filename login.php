
<head>
    <style>
        #form{
            margin: 200px; 
            border: 2px solid black;
            padding: 20px;

        }
        </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div id="form">
<form action="gologin.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwordi">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
session_start();
$username;
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password_confirmation'];
$class=$_POST['section'];
$_SESSION['class'] = $class;
echo $class;
echo $_SESSION['class'];
$link=mysqli_connect("localhost","root","");
if(mysqli_connect_error())
echo "there is a problem";

for($i=0;$email[$i]!='@';$i++)
{
  $username[$i]=$email[$i];
}
$usermain=implode("",$username);
$_SESSION['username'] = $usermain ;
$q1="create database $usermain";
mysqli_query($link,$q1);
$linknew=mysqli_connect("localhost","root","","$usermain");
$q2="create table info(id int NOT NULL AUTO_INCREMENT PRIMARY KEY,fname varchar(200),lname varchar(200),email varchar(200),password int)";
//$q3="insert into $class(sectionlist) values('$class')";
mysqli_query($linknew,$q2);

$q3="create table $class  (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,rollno int,name varchar(200),date DATE,attendancestatus varchar(2))";
$q4="insert into info(fname,lname,email,password) values('$fname','$lname','$email',$password)";
mysqli_query($linknew,$q4);
mysqli_query($linknew,$q3);
?>
</body>