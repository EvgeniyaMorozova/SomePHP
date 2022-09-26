<html>
<head>
<meta charset="utf8"/>
</head>
<?php
session_start();
?>

<?php
//echo 
$ip = $_SERVER['REMOTE_ADDR'];
$host="";
$pass="";
$username="";
$dbname="";
$link  = mysqli_connect($host, $username, $pass, $dbname);


?>

<h1> Авторизация </h1>
<form method="post">
<input name="username" type="text" placeholder="username"/>
<input name="password" type="password" placeholder="password"/>
<input type="submit"/>
</form>


<?php
$username = $_POST['username'];
$password = md5($_POST['password']);

//echo 
$query = 'select * from users where (username="'.$username.'" and pass="'.$password.'")';
echo '</br>';

$db_users = mysqli_query( $link,$query );

$users_array = mysqli_fetch_all($db_users, MYSQLI_ASSOC);


       if (count($users_array)>0) { echo 'правильно';
                            $_SESSION['username']=$username;
                            
//echo 
$update_query= 'update ip set user_id='.$_SESSION['u_id'].'  where ip_address="'.$ip.'"';
echo mysqli_query($link, $update_query);
                            
                          sleep(3);
                          header('Location: chat.php');    
                        }    //redirect  
	   else { echo ' неправильный пароль!'; }





?>




</html>