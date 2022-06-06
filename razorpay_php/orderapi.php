<?php 

require('config.php');
require('razorpay-php/Razorpay.php');

error_reporting(0);
use Razorpay\Api\Api;

$amount = $_POST['amount'];

$status=false;
$msg="Invalid Parameters";
$information="Invalid Parameters";

if (!empty($_POST['amount'])) {

$api = new Api($keyId, $keySecret);

$orderData = [
    'receipt'         => 3456,
    'amount'          => $amount * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$status=true;
$msg="Order ID here";
$information=$razorpayOrderId;

}

$post_data = array(
	'status' => $status,
	'msg' => $msg,
	'information' => $information
);

echo json_encode($post_data);

 ?>