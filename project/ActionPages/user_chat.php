 <?php
    $email=$_GET['email'];
    $fri_detalis=fri_detalis($email);
    $fri_on_off=on_off($email);
    $mail=$_SESSION['email'];
    $user=fri_detalis($mail);
    //echo $user['name'];
 ?>
 <div class="col-md-8 col-xl-9 chat">
                    <div class="card">
                        <div class="card-header msg_head">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="../upload/user_pic/<?=$fri_detalis['user_pic']?>" class="rounded-circle user_img">
                                    <?php
                                        if($fri_on_off=="online")
                                        {
                                    ?>
                                    <span class="online_icon"></span>
                                    <?php
                                      }
                                      else
                                      {
                                    ?>
                                    <span class="online_icon offline"></span>
                                    <?php
                                        }

                                    ?>
                                </div>
                                <div class="user_info">
                                    <span><?=$fri_detalis['name']?></span>
                                     <?php
                                        if($fri_on_off=="online")
                                        {
                                    ?>
                                        <br>online
                                    <?php
                                      }
                                    ?>
                                    <?php
                                        if($fri_on_off!='online')
                                        {
                                    ?>
                                    <p><?=$fri_on_off?></p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="video_cam">
                                    <span><i class="fas fa-video"></i></span>
                                    <span><i class="fas fa-phone"></i></span>
                                </div>
                            </div>
                            <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                            <div class="action_menu">
                                <ul>
                                    <li><i class="fas fa-user-circle"></i> View profile</li>
                                    <li><i class="fas fa-users"></i> Add to close friends</li>
                                    <li><i class="fas fa-plus"></i> Add to group</li>
                                    <li><i class="fas fa-ban"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body">
                            <?php
                           // session_start();
                            //echo $user['name'];
                            $user_email=$_SESSION['email'];
                            include('../connect.php');
                            $sql="select * from chat_data where from_user in ('$user_email','$email') and  to_fri in('$email','$user_email')";
                            $s=mysqli_query($con,$sql);
                            $sql2="select sysdate()";
                            $s2=mysqli_query($con,$sql2);
                            $c_tme=mysqli_fetch_array($s2);
                            while($d=mysqli_fetch_array($s))
                            {
                                if($d['from_user']==$email)
                                {
                        ?>
                            <!--massage-->

                         <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="../upload/user_pic/<?=$fri_detalis['user_pic']?>" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                 <?=$d['msg']?><br>
                                    <span class="msg_time"><?=$c_tme[0]?></span>
                                </div>
                            </div>
                            <?php
                                }
                                else
                                {
                            ?>
                             <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send"> 
                                    <?=$d['msg']?>
                                    <span class="msg_time_send"><b><?=$c_tme[0]?></b></span>
                                </div>
                                <div class="img_cont_msg">
                            <img src="../upload/user_pic/<?=$user['user_pic']?>" class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>
   
                                                     <!--<div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                             <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg"> 
                           <img src="data:image/jpeg;base64"class="rounded-circle user_img_msg">
                                </div>-
                            </div>-->
                            <!--<div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                        <img src="data:image/jpeg;base64," class="rounded-circle user_img_msg">
                                </div>
                            </div>-->
                            <div class="d-flex justify-content-start mb-4">
                                <!--<div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                </div>
                               <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>-->
                            </div>
                        </div>
                            <div class="input-group"style=" position: static;padding-top:3px;width: 100%x;">
                                <div class="input-group-append" >
                                    <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                </div>
                                <textarea name="msg" class="form-control type_msg" id="msg" placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                    <span class="input-group-text send_btn" id="send" name="send" onclick="send_msg('<?=$email?>')"><i class="fas fa-location-arrow"></i></span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    
            
    <!--,mkj-->