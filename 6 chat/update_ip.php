<?php


$check_ip = 'select * from ip where ip_address="'.$ip.'"';
$has_ip_array = mysqli_query($link, $check_ip);
$has_ip = mysqli_fetch_all($has_ip_array);


if( count($has_ip)>0)  {    
                   //echo 
                   $update_query='UPDATE ip SET last_time="'.time().'" where ip_address="'.$ip.'"';
        }
 
else { 
            //echo 
            $update_query = 'insert into ip values ("'.$ip.'","'.time().'","")';
        }


echo mysqli_query($link,$update_query);