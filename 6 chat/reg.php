<html>
<head>
<meta charset="utf8"/>
</head>


<?php
session_start();
//echo 
$ip = $_SERVER['REMOTE_ADDR'];
$host="";
$pass="";
$username="";
$dbname="";
$link  = mysqli_connect($host, $username, $pass, $dbname);


?>
<h1> Регистрация </h1>
<form method="post" enctype="multipart/form-data">
<input name="username" type="text" placeholder="username"/>
<input name="email" type="text" placeholder="email"/>
<input name="password" type="password" placeholder="password"/>
<input type="file" name="filename">
<input type="submit"/>
</form>
<hr>
<hr>
<hr>
<hr>


<?php
$user = $_POST['username'];
$email    = $_POST['email'];
$password = md5($_POST['password']);

$tmp_path= $_FILES['filename']['tmp_name']; // временное имя файла (путь)
$name=$_FILES['filename']['name'];
$filetype=$_FILES['filename']['type'];
print_r($_FILES);
echo '<br/>';
$filetype_= explode('/',$filetype)[0];
//$extension= explode('/',$filetype)[1];

if($user) {
//echo 
$query = 'insert into users values ("'.$user.'","'.$email.'","'.$password.'","","","")';
//echo $query = 'insert into users values ("'.$username.'","'.$email.'",md5('.$password.'),"")';
echo '<hr>';
$insert_user_query = mysqli_query( $link, $query);

echo mysqli_error($link);
echo '<hr>';




if ( $insert_user_query==true  )  

{  echo 'ok<br/>'; echo "New record has id: " . mysqli_insert_id($link); 
   mkdir(mysqli_insert_id($link));

    $_SESSION['u_id']=mysqli_insert_id($link);

            if($filetype_=="image") 
            {
            move_uploaded_file( $tmp_path,  $_SESSION['u_id']."/".$name   );

            }
            else { echo '<br/>wrong type';}

}

}

else { echo 'enter user name'; }




?>




</html>