 <?php include 'db.php'; ?>
 <!DOCTYPE html>
 <html>
 <body>
 <!--footer area start-->
    <div class="footera-area section-padding wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer">
                        <div class="logo-area footer">
                            <a href="index.php"><img src="assets/img/m_SC_Logo_Png.png" alt=""></a>
                        </div>
                        <div class="space-20"></div>
                        <p>Dr. Fujii suggests in harnessing the power of wave motion to cure people in daily dental and medical treatments and is conducting this introductory lecture.</p>
                        <div class="space-10"></div>
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a href="https://pondyworld.com" target="_blank">Pondyworld</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="single-footer">
                        <ul>
                            <li><a href="index.php#about">About</a></li>
                            <!-- <li><a href="#"></a></li> -->
                            <li><a href="index.php#chairperson">Chairperson</a></li>
                            <li><a href="index.php#importantdate">Important Date</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="single-footer">
                        <ul>
                            <li><a href="reg.php">Registration</a></li>
                            <!-- <li><a href="#">Team</a></li> -->
                            <!-- <li><a href="#">APP</a></li> -->
                            <!-- <li><a href="#">FAQ</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer">
                        <p>Subscribe to our Newsletter</p>
                        <div class="space-20"></div>
                        <div class="footer-form">
                            <form id="newsletter" action="newsletter_insert.php" method="post">
                                <input type="email" name="email" placeholder="Email Address">
                                <button type="submit" name="submit" class="logibtn gradient-btn">GO</button>
                                <label id="email-error" class="error" for="email"></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer area end-->
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6230293c1ffac05b1d7e9e06/1fu6225ic';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    
 

    <script>
  $(document).ready(function() {
    
                $("#login_form").validate({
         rules: {
            title:"required",
              firstname: {required: true,minlength: 3},
              lastname:{ required: true,minlength:3},
              email:{ required: true,email:true},
              country: "required",
              category: "required",
              phone:"required",
              session: "required",
              company:"required",
              address:"required"
         },

         messages: {
            title:"Please select your title",
              firstname:{required: "Please enter your first name",minlength: "Atleast 3 character"},
              lastname: {required:"Please enter your lastname",minlength:"Atleast 3 character"},
              email: "Please enter your email",
              country: "Please enter your country",
              category: "Please enter your category",
              phone:"Please enter your contact number",
              session: "Please enter your session",
              company: "Please enter your company",
              address:"Please enter your address"
            },

         submitHandler: function (form) {
            form.submit();
             // var datas = $("#login_form").serialize();
             // // alert(datas);
             // $.ajax({
             //  url: "reg_form.php",
             //    method: "POST",
             //    data: datas,
             //    beforeSend: function() { 
             //      $("#submit").prop('disabled', true); // disable button
             //      $("#submit").val("Loading..."); 
             //    },
             //     success: function (data) {
             //      // console.log(data)
             //      $("#submit").prop('disabled', false);
             //         var res = jQuery.parseJSON(data);
             //          // alert(res.status);
             //          if (res.status=='success') {
             //            notif({ msg: res.message, type: res.type, position: "center" });
             //            setTimeout(function(){location.replace('index.php');}, 1500);
                        
             //          }
             //          else{
             //            notif({ msg: res.message, type: res.type, position: "center" });
             //            setTimeout(function(){ location.reload(); }, 1000);
             //          }
                 }
             });


     $("#newsletter").validate({
         rules: {
              email:{ required: true,email:true}
         },

         messages: {
              email: "Please enter your email"
            },

         submitHandler: function (form) {
            form.submit();
             // var datas = $("#login_form").serialize();
             // // alert(datas);
             // $.ajax({
             //  url: "reg_form.php",
             //    method: "POST",
             //    data: datas,
             //    beforeSend: function() { 
             //      $("#submit").prop('disabled', true); // disable button
             //      $("#submit").val("Loading..."); 
             //    },
             //     success: function (data) {
             //      // console.log(data)
             //      $("#submit").prop('disabled', false);
             //         var res = jQuery.parseJSON(data);
             //          // alert(res.status);
             //          if (res.status=='success') {
             //            notif({ msg: res.message, type: res.type, position: "center" });
             //            setTimeout(function(){location.replace('index.php');}, 1500);
                        
             //          }
             //          else{
             //            notif({ msg: res.message, type: res.type, position: "center" });
             //            setTimeout(function(){ location.reload(); }, 1000);
             //          }
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
    <script src="assets/js/bootstrap.min.js"></script>
    <!--skroller js-->
    <!--<script src="assets/js/skrollr.min.js"></script>-->
    <!--mobile menu js-->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!--particle s-->
    <script src="assets/js/particles.min.js"></script>
    <!-- main js-->
    <script src="assets/js/main.js"></script>
    <script src="vendor/jquery/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<!-- <script src="assets/select2/select2.min.js" type="text/javascript"></script> -->

<!--<script src="js/custom.js" type="text/javascript"></script>-->
<!-- <script src="js/rocket-loader.min.js"></script> -->
<!-- <script src="js/beacon.min.js" ></script> -->
<!-- <script src="js/jquery.min.js" ></script> -->
<script src="js/jqueryvalidation.js" ></script>
<script src="js/additional_validation_methods.js" ></script>
<script src="js/notifIt.js"></script>
<script src="js/jquery.fancybox.js"></script>
 </body>
</html>