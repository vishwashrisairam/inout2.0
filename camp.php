<?php
$conn = new mysqli("localhost", "root", "", "inout");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

$p='bhavnagar';


$sql="select * from patient where city='$p'";
$result=mysqli_query($conn,$sql);
//print_r($result);
$ar=array();
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result))
  {
  //  echo $row["place"];
    $ar[]=$row["cno"];
  }
}
print_r($ar);

$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => '8866447843',
    'To'    => $ar,
    'Body'  => 'A camp on event xyz is comming in your town. Be ready and do not miss it....'
);

$exotel_sid = "svnit1"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
$exotel_token = "3a2453257f14b821d5bd309484a78e2a888fa1f3"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings

$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";

$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);

curl_close($ch);

print "Response = ".print_r($http_result);

?>
