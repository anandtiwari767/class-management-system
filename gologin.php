
</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
  <?php
  session_start();
  
  $email=$_POST["email"];
  $password=$_POST["passwordi"];
  $username=$_SESSION['username'];
  $classman=$_SESSION['class'];
$c=0;
$link=mysqli_connect("localhost","root","","$username");
if(mysqli_connect_error())
echo "problem"; 
$query="select * from info";
echo $query;
$result=mysqli_query($link,$query);
//$number=mysqli_num_rows($result);

//for($i=0;$i<1;$i++){
$final=mysqli_fetch_array($result);

if($final[3]==$email&&$final[4]==$password)
{echo "yes you are our user"." ".$email;
   $_SESSION['email']=$email;
  
}
else{
  echo "register with us free of cost";
}
//}
//if($c!=2)
//echo "register yourself with us for free ";
//else{
  //  header('Location: first.php');
//}
?>  
</body>
</html>