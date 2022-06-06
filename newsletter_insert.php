<?php
// print_r(_POST);
// exit();
include("db.php");
require 'phpmailer/class.phpmailer.php';

function sendemail($user_mailid="",$user_message="")
{
  $mail = new PHPMailer;
  $mail->IsSMTP();        //Sets Mailer to send message using SMTP
  $mail->Host = 'mail.pondyworld.com';  //Sets the SMTP hosts
  $mail->Port = 25;        //Sets the default SMTP server port
  $mail->SMTPAuth = true;    //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = 'admin@pondyworld.com';     //Sets SMTP username
  $mail->Password = 'kamar@111594';     //Sets SMTP password
            //   $mail->SMTPSecure = '';       //Sets connection prefix. Options are "", "ssl" or "tls"
  $mail->setFrom('quantum@colossalmeetings.com');
  //   $mail->AddAddress('pradep@pondyworld.com');
  $mail->AddAddress($user_mailid);
  $mail->WordWrap = 50;//Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);
  $mail->Subject = 'Thanks for reaching Scientific Colossalmeetings!';    //Sets the Subject of the message
  $mail->Body = $user_message;    //An HTML or plain text message body
  $mail->Send();
}

if(isset($_POST["email"]) )
{
      $email=$_POST['email'];
        
    $rep_msg='<html>
    <head>
    <body>
    <h3>Scientific Colossalmeetings Newsletter Form :</h3><br>
    <p>Hi, <br><br> </p> 
    <p>It is a great pleasure to thank you for reaching us.</p>
    <p>We will check your enquiry and update you with all possible solutions.</p>
    <p>For any other queries, contact us at quantum@colossalmeetings.com. You can also make a call on 8056889971.</p><br>
    <p>Thanks & Regards,</p>
    <p>Scientific Colossalmeetings</p><br>
    </body></head></html>';

    sendemail($email,$rep_msg);
      $body = '<html><head><body><h3>Newsletter Form Details</h3><br> 
                <br>               
                <b> Email ID : <br><br> </b>' .$email.' <br><br>
                </body></head></html>';  

  $sql="INSERT INTO newsleeter_form(email) VALUES ('$email')";
  // print_r($sql);
  // exit();
  
      mysqli_query($con,$sql);
        $mail = new PHPMailer;
        $mail->IsSMTP();        //Sets Mailer to send message using SMTP
        $mail->Host = 'mail.pondyworld.com';  //Sets the SMTP hosts
        $mail->Port = 25;        //Sets the default SMTP server port
        $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
        $mail->Username = 'admin@pondyworld.com';     //Sets SMTP username
        $mail->Password = 'kamar@111594';     //Sets SMTP password
            //   $mail->SMTPSecure = '';       //Sets connection prefix. Options are "", "ssl" or "tls"
        $mail->From = $email;     //Sets the From email address for the message
        $mail->FromName = 'Scientific Colossalmeetings';    //Sets the From name of the message
        $mail->AddAddress('quantum@colossalmeetings.com');//Adds a "To" address
        // $mail->AddAddress('gunaselvi@pondyworld.com');//Adds a "To" address
          // $mail->AddCC('$email');//Adds a "To" address               
        $mail->WordWrap = 50; //Sets word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true);       //Sets message type to HTML   
        $mail->Subject = "Scientific Colossalmeetings Newsletter Form";    //Sets the Subject of the message
        $mail->Body = $body;    //An HTML or plain text message body
        if($mail->Send())        //Send an Email. Return true on success or false on error
        {
          header("Location: index.php"); 
           // $response = array('status'=>'fail','message'=>'Error in Submitting','type'=>'error' );
           //      echo json_encode($response);
        }
        else
        {
          header("Location: index.php");
           // $response = array('status'=>'fail','message'=>'Error in Submitting','type'=>'error' );
           //      echo json_encode($response);
        }
}else{
   header("Location: index.php");
   // $response = array('status'=>'fail','message'=>'Error in Submitting','type'=>'error' );
                // echo json_encode($response);
}

?>
