<!doctype html>
<html lang="en">
  <head>
    <title>Scientific Colossal Meeting</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--header icon CSS -->
    <link rel="icon" href="assets/img/sc.png">
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
     <link rel="stylesheet" href="assets/css/notifit.css">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  </head>
  <style type="text/css">
      .form-control {
        background: transparent;
        margin-bottom: 10px;
      }
      .abstract {
      background: rgba(0, 0, 0, 0.5);
      padding: 20px;
  }
  .abstract input[type=email], .abstract input[type=text], .abstract input[type=number] {
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
                                <li><a class="scroll" href="index.php#about">About</a>
                                </li>
                                <li><a class="scroll" href="index.php#session">Session</a></li>
                                <li><a class="scroll" href="index.php#importantdate">Important Dates</a></li>
                                <li><a class="scroll" href="index.php#moreinfo">More Info</a></li>
                                <li><a class="scroll" href="#">Helpdisk</a></li>
                                <!-- <li><a class="scroll" href="#apps">APP</a></li>
                                <li><a class="scroll" href="#faq">FAQ</a></li> -->
                                <!-- <li><a class="scroll" href="#contact">Registration</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-4 col-lg-2 text-right rr">
                    <a href="register.php" class="logibtn gradient-btn">Registration</a>
                </div>
                
            </div>
        </div>
    </div>
    <!--header area end-->

    <!--welcome area start-->
    <div class="welcome-area wow fadeInUp" id="home">
        <div id="particles-js"></div>
        <div class="container">
            <div class="space-90"></div>
            <center><h1>Abstract Form</h1></center>
            <div class="row">
                <div class="col-12 col-md-6 align-self-center">
                                <div class="space-90"></div>
                    <form id="abstract_form" class="abstract">
                        <div class="row">
                        <div class=" col-6 form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname">
                        </div>
                        <div class="col-6 form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname">
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="company">Company / University</label>
                            <input type="text" class="form-control" name="acompany" id="company">
                        </div>
                        <div class="form-group">
                            <label for="country"> Select Country</label>
                            <select class="form-control" name="acountry" id="country">
                                <option value="india">india</option>
                                <option value="america">america</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category"> Category</label>
                            <input type="text" class="form-control" name="acategory" id="category">
                        </div>
                        <div class="form-group">
                            <label for="session"> Scientific Session</label>
                            <input type="text" class="form-control" name="asession" id="session">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email</label>
                            <input type="text" class="form-control" name="aemail" id="email">
                        </div>
                        <div class="form-group">
                            <label for="abstract"> Abstract Category</label>
                            <input type="text" class="form-control" name="aabstract" id="abstract">
                        </div>
                        <div class="form-group">
                            <label for="mobile"> Mobile Number</label>
                            <input type="text" class="form-control" name="amobile" id="mobile">
                        </div>
                        <div class="form-group">
                            <label for="file"> File </label>
                            <input type="file" class="form-control" name="afile" id="file">
                        </div>
                        <center><button type="submit" name="submit" class="logibtn gradient-btn">
                            <span>Submit</span>
                        </button></center>

                    </form>
            <div class="space-90"></div>

                </div>
                <div class="col-12 col-md-6">
                    <div class="welcome-img">
                        <img src="assets/img/welcome-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--welcome area end-->

    <!--footer area start-->
    <div class="footera-area section-padding wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer">
                        <div class="logo-area footer">
                            <a href="#"><img src="assets/img/m_SC_Logo_Png.png" alt=""></a>
                        </div>
                        <div class="space-20"></div>
                        <p>Swimming hundreds of feet beneath the ocean’s surface in many parts of the world are prolific architects called giant larvaceans. </p>
                        <div class="space-10"></div>
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.pondyworld.com/" class="pondy"  target="_blank">Pondyworld</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="single-footer">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Session</a></li>
                            <li><a href="#">Important dates</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="single-footer">
                        <ul>
                            <li><a href="#">Registration</a></li>
                            <li><a href="#">Abstract</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer">
                        <p>Subscribe to our Newsletter</p>
                        <div class="space-20"></div>
                        <div class="footer-form">
                            <form action="#">
                                <input type="email" placeholder="Email Address">
                                <a href="" class="gradient-btn subscribe">GO</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer area end-->
    <script>
    $(document).ready(function() {
    
        $("#abstract_form").validate({
            rules: {
                fname: {required: true,minlength: 3},
                lname:{ required: true,minlength:3},
                acompany: "required",
                acountry: "required",
                acategory: "required",
                asession: "required",
                aemail: { required: true,email:true},
                aabstract:"required",
                amobile:"required",
                afile:"required"
            },

            messages: {
                fname:{required: "Please enter your first name",minlength: "Atleast 3 character"},
                lname: {required:"Please enter your lastname",minlength:"Atleast 3 character"},
                acompany: "Please enter your company",
                country: "Please enter your country",
                category: "Please enter your category",
                session: "Please enter your session",
                email: "Please enter your email",
                abstract: "Please enter your abstract",
                amobile:"Please enter your contact number",
                afile: "Please enter your file"
            },

            submitHandler: function (form) {
            // form.submit();
                var datas = $("#abstract_form").serialize();
             // alert(datas);
                $.ajax({
                    url: "abstract_sub.php",
                    method: "POST",
                    data: datas,
                    beforeSend: function() { 
                        $("#submit").prop('disabled', true); // disable button
                        $("#submit").val("Loading..."); 
                    },
                    success: function (data) {
                  // console.log(data)
                    $("#submit").prop('disabled', false);
                        var res = jQuery.parseJSON(data);
                      // alert(res.status);
                        if (res.status=='success') {
                            notif({ msg: res.message, type: res.type, position: "center" });
                            setTimeout(function(){location.replace('index.php');}, 1500);
                        }
                        else {
                            notif({ msg: res.message, type: res.type, position: "center" });
                            setTimeout(function(){ location.reload(); }, 1000);
                        }
                    }
                });
            }
        });
    });
 
</script>
    

    <!-- jquery 2.2.4 js-->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper js-->
    <script src="assets/js/popper.js"></script>
    <!-- carousel js-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>
    <!-- bootstrap js-->
    <script src="assets/js/bootstrap.min.js"></script>\
    <!--skroller js-->
    <script src="assets/js/skrollr.min.js"></script>
    <!--mobile menu js-->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!--particle s-->
    <script src="assets/js/particles.min.js"></script>
    <!-- main js-->
    <script src="assets/js/main.js"></script>
    <script src="vendor/jquery/jquery-3.3.1.slim.min.js" type="text/javascript"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<!-- <script src="assets/select2/select2.min.js" type="text/javascript"></script> -->

<script src="js/custom.js" type="text/javascript"></script>
<!-- <script src="js/rocket-loader.min.js"></script> -->
<!-- <script src="js/beacon.min.js" ></script> -->
<script src="js/jquery.min.js" ></script>
<script src="js/jqueryvalidation.js" ></script>
<script src="js/additional_validation_methods.js" ></script>
<script src="js/notifIt.js"></script>
<script src="js/jquery.fancybox.js"></script>
  </body>
</html>