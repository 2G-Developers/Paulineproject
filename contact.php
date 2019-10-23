<?php

$name                  =   $_POST['name'];          
$email                   =   $_POST['email'];          
$mobile                   =   $_POST['mobile'];           
$message                =   $_POST['message'];        

$subject = "New Enquiry $name";
$txt = "Hello world!";
  $headers .= "Reply-To: INFO <innovisionidi@gmail.com>\r\n";
  $headers .= "From: INFO <Info@innovisionidi.com>\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$message = "
<html>
<head>
  <title>New enquiry</title>
</head>
<body >
  <p>Details </p>
  <table border='1'>
  <tr><td>name              </td><td>$name               </td></tr>     
 <tr><td>email                </td><td>$email                </td></tr>     
 <tr><td>mobile                </td><td>$mobile                </td></tr>     
 <tr><td>message             </td><td>$message             </td></tr>     
   
  </table>
</body>
</html>
";
  
  $to = "innovisioninstitute@gmail.com";
mail($to,$subject,$message,$headers);
?>