<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['Email'];
$message=$_REQUEST['message'];

if (empty($name)  || empty($email)   || empty($message)) 
{
  echo "please fill all the fields";
}
else {
 mail("mdmamun72507@gmail.com","Email form",$message,"from:$name<$email>");
 
 echo("<script type='text/javascript'>alert('your message sent successful');
 window.history.log(-1);
 </script>")
 
}
?>