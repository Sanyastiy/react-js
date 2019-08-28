<?php 
$url = 'https://us-central1-mercdev-academy.cloudfunctions.net/login';
 
$post = array(
    'email' => 'user@example.com',
    'password' => 'mercdev'
);
print_r('$post: <br/>');
print_r($post);
$ch = curl_init($url);                   

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
); 

$result = curl_exec($ch);   
$info = curl_getinfo($ch);
print_r('<br/>result is <br/>');
print_r($result);
print_r('<br/>info is <br/>');
print_r($info);
curl_close($ch);
?>