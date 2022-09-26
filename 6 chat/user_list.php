<?php

$query="select * from ip";
$users_query_result = mysqli_query($link, $query);
$users = mysqli_fetch_all($users_query_result, MYSQLI_ASSOC);



$user_list='<ul class="list">';

 
 
 foreach($users as $user)
        {
            
            $query ='select username from users where user_id=(select user_id from ip where ip_address="'.$user["ip_address"].'")';
            $res = mysqli_query($link, $query);
            $u_name= mysqli_fetch_all($res);
        //    print_r($u_name);
        $time_since_enter = round((time()-$user['last_time'])/60); 
          $user_list.=  '<li class="clearfix">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg" alt="avatar" />
              <div class="about">  
             <!--   <div class="name">'.$user["ip_address"].' '.$u_name[0][0].'</div>-->
                <div class="name">'.$u_name[0][0].'</div>
                <div class="status">
                <i class="fa fa-circle online"></i> '.$time_since_enter.' min ago
                </div>
              </div>
            </li>';
        }
        $user_list.='</ul>';
 echo $user_list;      
              ?>
          