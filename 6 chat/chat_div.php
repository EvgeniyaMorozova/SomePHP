  <?php
session_start();
                 $message = $_POST['message-to-send'];
          if( isset($message)) {        
            // echo    
                 $query = 'insert into messages (`message`) values ("'.$message.'")';
                 $insert_message_query = mysqli_query( $link, $query);
          }
                 ?>   
                 
  
  <div class="chat">
          <div class="chat-header clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" />
           <?php
           $user=$_SESSION['username'];
           echo $user;
           echo '</br>';
           ?>
         
            <i class="fa fa-star"></i>
          </div> <!-- end chat-header -->
          
          <div class="chat-history">
            <ul>
           
             
                
                
                <?php
                
               //echo 
               $query = 'select * from messages';
               echo '</br>';

               $received_messages = mysqli_query( $link,$query );

                $messages_array = mysqli_fetch_all($received_messages, MYSQLI_ASSOC);
                $messages_array= array_reverse($messages_array);
                echo 'already '.count($messages_array).' messages';
                    
foreach($messages_array as $r_message)
{
    $message_list.=   '<li class="clearfix">
                <div class="message-data align-right">
                  <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
                  <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
                  
                </div>';
    
    $message_list.= '<div class="message other-message float-right">';

    //print_r($r_message);
    
	$message_list.= $r_message['message'].' </li>';

}
  	    $message_list.= '</ul>';
        echo 	$message_list;
                ?>
 

              
              </li>
            
              
            </ul>
            
          </div> <!-- end chat-history -->
         <div class="chat-message clearfix"><form method="post">
            <textarea name="message-to-send" id="message-to-send" placeholder="Type your message" rows="3">  

                    </textarea>
                              
               
                 
            <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
            <i class="fa fa-file-image-o"></i>
            <input type="submit">
            <!--<button>Send</button>-->
    
          </form></div>
          
        </div> <!-- end chat -->