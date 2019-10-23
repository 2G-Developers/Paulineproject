<?php
echo '<script>console.log("Email sending")</script>';
$name                  =   $_POST['name'];          
$dob                   =   $_POST['dob'];          
$age                   =   $_POST['age'];           
$gender                =   $_POST['gender'];        
$address1              =   $_POST['address1'];      
$address2              =   $_POST['address2'];      
$qualification         =   $_POST['qualification'];
$yos                   =   $_POST['yos'];           
$mobile                =   $_POST['mobile'];        
$email                 =   $_POST['email'];         
$nop                   =   $_POST['nop'];           
$occupation            =   $_POST['occupation'];    
$parentaddress         =   $_POST['parentaddress']; 
$parentcontact         =   $_POST['parentcontact'];
$courses               =   $_POST['courses'];  
$subject = "New Registration $name";
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
  <title>New Registration</title>
</head>
<body >
  <p>Details </p>
  <table border='1'>
  <tr><td>name              </td><td>$name               </td></tr>     
 <tr><td>dob                </td><td>$dob                </td></tr>     
 <tr><td>age                </td><td>$age                </td></tr>     
 <tr><td>gender             </td><td>$gender             </td></tr>     
 <tr><td>address1           </td><td>$address1           </td></tr>     
 <tr><td>address2           </td><td>$address2           </td></tr>     
 <tr><td>qualification      </td><td>$qualification      </td></tr>     
 <tr><td>yos                </td><td>$yos                </td></tr>     
 <tr><td>mobile             </td><td>$mobile             </td></tr>     
 <tr><td>email              </td><td>$email              </td></tr>     
 <tr><td>nop                </td><td>$nop                </td></tr>     
 <tr><td>occupation         </td><td>$occupation         </td></tr>     
 <tr><td>parentaddress      </td><td>$parentaddress      </td></tr>     
 <tr><td>parentcontact      </td><td>$parentcontact      </td></tr>     
 <tr><td>courses            </td><td>$courses            </td></tr>    
  </table>
</body>
</html>
";
  
  $to = "innovisioninstitute@gmail.com";
mail($to,$subject,$message,$headers);
?>