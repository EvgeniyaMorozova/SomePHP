<html>
<head>
<meta charset="utf8"/>
</head>


<?php
echo $_SERVER['REMOTE_ADDR'];
$host="";
$pass="";
$username="";
$dbname="";
$link  = mysqli_connect($host, $username, $pass, $dbname);


?>
<h1> Регистрация </h1>
<form method="post">
<input name="username" type="text" placeholder="username"/>
<input name="email" type="text" placeholder="email"/>
<input name="password" type="password" placeholder="password"/>
<input type="submit"/>
</form>
<hr>
<hr>
<hr>
<hr>
<h1> Авторизация </h1>
<form method="post">
<input name="username" type="text" placeholder="username"/>
<input name="password" type="password" placeholder="password"/>
<input type="submit"/>
</form>


<?php
$username = $_POST['username'];
$email    = $_POST['email'];
$password = md5($_POST['password']);

if(isset($email))
{

echo $query = 'insert into users values ("'.$username.'","'.$email.'","'.$password.'","")';
//echo $query = 'insert into users values ("'.$username.'","'.$email.'",md5('.$password.'),"")';
echo '<hr>';
$insert_user_query = mysqli_query( $link, $query);

echo mysqli_error($link);
echo '<hr>';

if ( $insert_user_query==true  )  

{  echo 'ok';    }
}


else {
echo $query = 'select * from users where (username="'.$username.'" and pass="'.$password.'")';
echo '</br>';

$db_users = mysqli_query( $link,$query );

$users_array = mysqli_fetch_all($db_users, MYSQLI_ASSOC);


       if (count($users_array)>0) { echo 'правильно'; }
	   else { echo ' неправильный пароль!'; }


}


?>




</html>