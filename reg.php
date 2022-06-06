<style type="text/css">
th,td{
color: black;}
.fees td{
padding: 10px;
}
#fees1 {
    display: none;
}
.selc {
    display: none;
}
@media (min-width: 300px) and (max-width: 500px) {
    #fees1 td, p {
    color: #cbe5ff !important;
    font-size: 14px;
    padding: 5px;
    width: 100%;
    }
    #fees1 {
        margin-bottom: 10px;
        display: block;
    }
    .selc {
        display: block;
    }
    .pricing {
        display: none;
    }
    .selcur {
        display: none;
    }
    .pricing-sum{
        display: block;}
}
.welcome-area {
    position: relative;
    z-index: 999999;
    padding-top: 50px;
}
    .form-control {
        background: transparent;
      }
      .form-style {
      background: rgba(0, 0, 0, 0.5);
      padding: 20px;
  }
  .form-style input[type=email], .form-style input[type=text], .form-style input[type=number] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    border-radius: 0px;
}
</style>
<?php include 'db.php';?>
<!doctype html>
<html lang="en">
  <head>
    <title>Quantum Medicine 2022</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content=": Dental conferences, Oral health Conferences, Dental events, Dental workshops, Dental meetings 2018,Dentistry,Cosmetic dentist, Dental events Asia, Dental Research">
    <meta name="description" content="Meet Top Medical Researches from Japan, Philippines, Asia pacific, Europe, USA, Middle East, at dental meeting 2022, Dental conferences 2022, CME Conferences 2022, Dental Conferences Japan">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--header icon CSS -->
   <link rel="icon" href="assets/img/SC_Logo_Png.png">
    <!-- animations CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- font-awsome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- mobile menu CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!--css animation-->
    <link rel="stylesheet" href="assets/css/animation.css">
    <!--css animation-->
    <link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/notifIt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--header area start-->
   <div class="header-area wow fadeInDown header-absolate" id="nav" data-0="position:fixed;" data-top-top="position:fixed;top:0;" data-edge-strategy="set">
        <div class="container">
            <div class="row">
                <div class="col-4 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-4 col-lg-2">
                    <div class="logo-area">
                        <a href="index.php"><img src="assets/img/m_SC_Logo_Png.png" alt=""></a>
                    </div>
                </div>
                <div class="col-4 col-lg-8 d-none d-lg-block">
                    <div class="main-menu text-center">
                        <nav>
                            <ul id="slick-nav">
                                <li><a class="scroll" href="index.php#home">home</a>
                                   <!--  <ul>
                                        <li><a href="index.html">Version 1</a></li>
                                        <li><a href="index2.html">Version 2</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="single-blog.html">single blog</a></li>
                                    </ul> -->
                                </li>
                                <li><a class="scroll" href="index.php#chairperson">Chairperson</a>
                                </li>
                                <!-- <li><a class="scroll" href="index.php#session">Session</a></li> -->
                                <li><a class="scroll" href="index.php#importantdate">Important Dates</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-4 col-lg-2 text-right rr">
                
                </div>
                
            </div>
        </div>
    </div>
    <!--header area end-->

    <!--welcome area start-->
    <div class="welcome-area wow fadeInUp" id="home">
        <div id="particles-js"></div>
        <div class="container">
            <!-- <div class="space-90"></div> -->
            <center><h1>Register Form</h1></center>
            <br>
             <h6>At least one author is required to be registered for the webinar to appear in the proceedings. Participating members may register as per the following charges:</h6>
            <div class="row">
                <div class="col-12 col-md-6 align-self-center">
                    <div class="space-90"></div>
                     <form class="form-style reg_form" id="login_form" action="reg.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Title</label>
                                    <select class="form-group" name="title" id="title">
                                        <option value="Dr.">Dr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                         <div class="form-group">
                          <label for="image">First Name</label>
                          <input type="text" class="form-control" name="firstname" id="firstname">
                         </div>
                       </div>
                       <div class="col-md-6">
                         <div class="form-group">
                          <label for="logo">Last Name</label>
                          <input type="text" class="form-control"  name="lastname" id="lastname" >
                         </div>
                       </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                           <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control"  name="email" id="email" >
                          </div>
                        </div>
                       <!--  <div class="col-md-6">
                          <div class="form-group">
                        <label for="address">Country</label>
                        <select name="country" class="form-control" id="country" onchange="myFunction(event)">
                            <option disabled selected>Select Country</option>
                            <option value="100">US</option>
                            <option value="500">Japan</option>
                        </select>
                    </div>
                        </div> -->
                        </div>
                        <div class="row">
                         <!--  <div class="col-md-6">
                            <div class="form-group">
                            <label for="address">Category</label>
                            <input type="text" class="form-control"  name="category" id="category" >
                            </div>
                          </div> -->
                           <div class="col-md-12">
                           <div class="form-group">
                            <label for="address">Mobile number</label>
                            <input type="number" class="form-control"  name="phone" id="phone" >
                           </div>
                           </div>
                        </div>
                         <div class="row">
                          <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Scientific session</label>
                            <input type="text" class="form-control"  name="session" id="session" >
                           </div>
                       </div> -->
                       <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">Person</label>
                            <input type="number" class="form-control"  name="person" id="person" min="1" max="5" >
                        </div>
                        </div>
                    </div>
                    <table class="fees" id="fees1">
                    <p class="selc">Select currency</p>     
                    <tr><td>Categories</td><td>Registration Fees</td></tr>
                    <tr><td>US Currency</td><td><input type="radio" name="usd" value="85.23" onchange="myFunction(event)">&nbsp;USD 85.23</td></tr>
                    <tr><td>Japanese Currency</td><td><input type="radio" name="usd" value="85.23" onchange="myFunction(event)">&nbsp;¥10,000</td></tr>
                   </table>
                    <!-- <div class="form-group">
                            <label for="address">Company/University</label>
                            <input type="text" class="form-control"  name="company" id="company" >
                        </div> -->
                       <!--  <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control"  name="address" id="address" >
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="address">Amount</label>
                            <input type="text" class="form-control"  name="amount" id="payment" >
                        </div> -->
                        
                         <div class="form-group">
                         <label for="address">Single Person Amount</label>
                        <input id="myText" type="text" name="amount" class="form-control" readonly>
                        </div>
                         <div class="form-group">
                          <button class="btn btn-success btn-dark mb-2" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                    <center><h6>After payment for confirmation and Queries Kindly contact us at</h6><br/>
<h6>Cell: +91-8056889971</h6>
<!-- <h6>Email: <a href="mailto:gunaselvi.pondyworld@gmail.com">quantum@colossalmeetings.com</a></h6> -->
<h6>Email: <a class="mail" href="mailto://quantum@colossalmeetings.com">quantum@colossalmeetings.com</a></h6>
</center>
                       <!--  <div class="list-group list-group-sm mb-5">
                          <div class="list-group-item"> -->
                            <!-- Radio -->
                            <!-- <div class="custom-control custom-radio"> -->
                              <!-- Input -->
                              <!-- <input class="custom-control-input" id="checkoutPaymentrazorpay" name="payment" type="radio" data-toggle="collapse" data-action="hide" data-target="#checkoutPaymentCardCollapse" value="razorpay" required> -->
                              <!-- Label -->
                        <!--       <label class="custom-control-label font-size-sm text-body text-nowrap" for="checkoutPaymentrazorpay"><img src="assets/img/payment_icon.png" alt="Payment-logo"></label>
                            </div>
                          </div>
                          <label id="payment-error" class="error" for="payment"></label>
                        </div> -->
                        <!-- <div class="form-group">
                          <button class="btn btn-success btn-dark mb-2" type="submit" name="submit">Pay</button>
                        </div> -->

    <!-- <center><input type="submit" name="submit" value="submit" id="submit" class="btn btn-info"></center> -->
  <!-- </form> -->
<!-- <div class="space-90"></div> -->
</div>
<div class="col-12 col-md-6">
<!-- <div class="welcome-img">
    <img src="assets/img/welcome-img.png" alt="">
</div> -->
    <!-- <div class="space-90"></div> -->
    
<section class="pricing py-5">
    <center><h4 class="selcur">Select Currency</h4></center>
    <div class="container">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <!-- <h6 class="card-price text-center">$9<span class="period">/month</span></h6> -->
           <form>
           <table class="fees">
            <p style="color:black">Registration Fees</p>     
            <tr><td>Categories</td><td>Registration Fees</td></tr>
            <tr><td>US Currency</td><td><input type="radio" name="usd" value="85.23" onchange="myFunction(event)">&nbsp;USD 85.23</td></tr>
            <tr><td>Japanese Currency</td><td><input type="radio" name="usd" value="85.23" onchange="myFunction(event)">&nbsp;¥10,000</td></tr>
           </table>
           </form>
            <div class="d-grid">
              <!-- <a href="#" class="btn btn-primary text-uppercase">Button</a> -->
            </div>
          </div>
        </div>

    </div>
</section>
    </div>
    
    </div>
    </div>
    </div>
    <!--welcome area end-->
   
  </body>
</html>
<?php 

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
   // $mail->setFrom('admin@pondyworld.com');
  $mail->setFrom('quantum@colossalmeetings.com');
  $mail->AddAddress($user_mailid);
  $mail->WordWrap = 50;//Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);
  $mail->Subject = 'Welcome to Scientific Colossalmeetings';    //Sets the Subject of the message
  $mail->Body = $user_message;    //An HTML or plain text message body
  $mail->Send();
}


if (isset($_POST['submit'])) {
    $title=$_POST['title'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    // $country=$_POST['country'];
    // echo $_POST['country'];
    // $category=$_POST['category'];
    $phone=$_POST['phone'];
    // $session=$_POST['session'];
    // $company=$_POST['company'];
    $person=$_POST['person'];
    $amount=$_POST['amount']*$_POST['person'];
    $rep_msg='<html>
    <head>
    <body>
    <h3>Colossal meetings Registration Form :</h3><br>
    <p>Dear '.$firstname.',  <br><br> </p> 
    <p>You are sucessfully complete your registration for The Role Of Quantum Mechanics In Dentistry webinar</p>
    <br><br>
    <p>Thanks & Regards,</p>
    <p>Scientific Colossal</p>
<p><a class="mail" href="mailto://quantum@colossalmeetings.com">quantum@colossalmeetings.com</a></p>
<p>Cell: +91-8056889971</p><br><br>
    <p>Website:<a href="https://www.colossalmeetings.com/">&nbsp;&nbsp;https://www.colossalmeetings.com/</a></p>
    </body></head></html>';

    $query1 = mysqli_query($con,"INSERT into reg_form (title,firstname,lastname,email,phone,amount,person) values ('$title','$firstname','$lastname','$email','$phone','$amount','$person')");
    sendemail($email,$rep_msg);
     
    if($query1){
        echo '
        <style>
        .reg_form{
            display:none;}
            .pricing{
                display:none;}
        </style>
         <section class="pricing-sum py-5">
  <div class="container">
    <div class="row">
    <!-- Plus Tier -->
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-uppercase text-center" style="color:black;">Summary</h5>
            <h6 class="card-price text-center"><span class="period"></span></h6>
            <hr>
            <ul class="fa-ul">
              <li>Firstname-&nbsp;'.$firstname.'</li>
              <li>Lastname-&nbsp;'.$lastname.'</li>
              <li>Email ID-&nbsp;'.$email.'</li>
              <li>Phone-&nbsp;'.$phone.'</li>
              <li>Person-&nbsp;'.$person.'</li>
              <li>Amount-$&nbsp;'.$amount.'</li>
            </ul>
            <div class="d-grid">
               
              <!-- <a href="#" class="btn btn-primary text-uppercase">Button</a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
      <center><h5>Kindly click Paypal button to proceed payment</h5></center>
      <script src="https://www.paypal.com/sdk/js?client-id=AXhaju_nNr67yxk51wh9td44VLOzkXTgmOJEXkgF-fNb52Xr_OCCu8ZPYh7Wr4Z-bxY6YmlFWoEhsWLr&currency=USD&disable-funding=credit,card"></script>
        <div class="welcome-area wow fadeInUp" id="home">
        <div class="container">
 <div class="container payment">
    <center><div style="margin-top:-20px" id="paypal-button-container"></div></center>
</div>
</div>
</div>
      </div>
      
</div>
</div>
</section>
        ';
    }
     
       }

include"footer.php";
// echo $amount;
?>
<script>
      paypal.Buttons({

        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value:'<?php echo $amount;?>'
                // value: '0.01' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                // value: document.getElementById('payment').value
              }
            }]
          });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                // alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

            // When ready to go live, remove the alert and show a success message within this page. For example:
            var element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');

    </script>
    <script>
function myFunction(e) {
    document.getElementById("myText").value = e.target.value
}
</script>