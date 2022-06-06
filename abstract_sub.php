<?php 
include 'db.php';
if (isset($_POST['submit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$acompany=$_POST['acompany'];
	$acountry=$_POST['acountry'];
	$acategory=$_POST['acategory'];
    $asession=$_POST['asession'];
    $aemail=$_POST['aemail'];
    $aabstract=$_POST['aabstract'];
	$amobile=$_POST['amobile'];
    $afile=$_FILES['afile']['name'];
      $tmp_afile=$_FILES['afile']['tmp_name'];
      move_uploaded_file($tmp_afile,"admin/file/".$afile);
	// $afile=$_POST['afile'];



	$query1 = mysqli_query($con,"INSERT into reg_form (fname,lname,acompany,acountry,acategory,asession,aemail,aabstract,amobile,afile) values ('$fname','$lname','$acompany','$acountry','$acategory','$asession','$aemail','$aabstract''$amobile''$afile')");
	$response = array('status'=>'success','message'=>'Login Successful','type'=>'success' );
	echo json_encode($response);
}
else{
	$response = array('status'=>'fail','message'=>'Fill the required fields','type'=>'error' );
    echo json_encode($response);
}


 ?>