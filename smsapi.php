<?php

// $username = "activemedia";      / old sms vendor settings
// $password = "Active!@#123";     / old sms vendor settings
// $ClientID = "activemedia";      / old sms vendor settings
// $language = "English";         / old sms vendor settings
$phone_number = '03114675916';
$msg_body = 'test faiz';
$mask = "Food Fest";
$to = $phone_number;
$Authkey = "KNLeJm94X4Q5iYESYwEhtuQaV1575025462445";
$message = urlencode($msg_body);
// Prepare data for POST request
$data = 'Authkey=' . $Authkey . '&Mask=' . $mask . '&To=' . $to . '&Message=' . $message;
//echo $data_string = json_encode($data);
// Send the POST request with cURL
$url = 'http://117.102.19.23:8005/api/v1/quicksms.php';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/x-www-form-urlencoded',
));

$result = curl_exec($ch); //get return String

if ($errno = curl_errno($ch)) {
	$error_message = curl_strerror($errno);
	echo "cURL error ({$errno}):\n {$error_message}";
}

print_r($result);

curl_close($ch);
?>
