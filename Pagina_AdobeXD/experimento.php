<?php  
 //start the session variable
 require("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
 session_start();

 //Function that evaluates form submit
 function checkFormSubmit()
 {
   //echo 'verification'.$_SESSION["verificationcode"].' isset '.isset($_SESSION["verificationcode"]);
     //Check if there is a generated verification code and a mobile phone
    if  ((int)$_SESSION["verificationcode"]==0 &&  $_POST["mobile_phone"] !="")
    {
      //Generate verification 5 digits verification code
        $_SESSION["verificationcode"] = rand(10000,99999);
        sendSMSVerificationCode($_POST["mobile_phone"],$_SESSION["verificationcode"]);
        //echo 'verification code: '.$_SESSION["verificationcode"].' phone: '.$_POST["mobile_phone"];
    }else{
      if((int)$_POST["verification_code"]>0)
      {
        //If there is a verification code generated we check if its the valid code
        if($_SESSION["verificationcode"]==$_POST["verification_code"])
        {
          //Display a success message
          displayToastMessage('Valid verification code. Welcome!','info');
          //TODO: You can put here the code for sending the user to the final page
          $_SESSION["verificationcode"]="";
        }else{
          //Display error message
          displayToastMessage('Invalid verification code! check your phone SMS','error');
        }
      }

    }
 }

function displayToastMessage($message,$type){  
  if($type=="error"){
    echo "<script>M.toast({html: '".$message."',classes:'red darken-4'});</script>";
  }else{
    echo "<script>M.toast({html: '".$message."',classes:'green darken-3'});</script>";
  }

}

function sendSMSVerificationCode($phoneNumber,$VerificationCode)  
{
        // create a new cURL resource
  $ch = curl_init();
  $api_key = '[[TOKY_API_KEY]]';
  $headers = array();
  $headers[] = "X-Toky-Key: {$api_key}";
   $data = array("from" => "[[TOKY_SMS_PHONE_NUMBER]]", "email" => "[[AGENT_EMAIL]]",
                   "to" => $phoneNumber,
                   "text" => "Hi, this is your verification code for Toky: ".$VerificationCode);

   $json_data = json_encode($data);

    // set URL and other appropriate options
    curl_setopt($ch, CURLOPT_URL, "https://api.toky.co/v1/sms/send");
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch,CURLOPT_POSTFIELDS, $json_data);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
    curl_setopt ($ch, CURLOPT_CAINFO, dirname(__FILE__)."/cacert.pem");

    $curl_response = curl_exec($ch); // Send request
   curl_close($ch); // close cURL resource

   $decoded = json_decode($curl_response,true);
   //Display error message if the message can't be sent
   if (!$decoded["success"]){
     $_SESSION["verificationcode"]="";
     displayToastMessage('Error sending SMS: '.$decoded["error_message"],'error');
   }else{
     displayToastMessage('Verification code sent. Check the SMS in your phone.','info');
   }

}

?>
<!DOCTYPE html>  
 <html>
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <title></title>
         <meta name="description" content=" " />
         <meta name="author" content=" " />
         <meta name="HandheldFriendly" content="true" />
         <meta name="MobileOptimized" content="320" />
         <!-- Use maximum-scale and user-scalable at your own risk. It disables pinch/zoom. Think about usability/accessibility before including.-->
         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
         <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
         <link rel="stylesheet" type="text/css" href=" ">
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     </head>
  <script>
    M.AutoInit();
  </script>
     <body>
    <?
      checkFormSubmit();
    ?>
    <div class="container">
      <? if($_SESSION["verificationcode"]==0) { ?>
      <form action="experimento.php" method="POST">
      <div class="row">
       <div class="input-field col s12">
         <input id="mobile_phone" type="text" name="mobile_phone">
         <label for="mobile_phone">Mobile Phone</label>
       </div>
     </div>
     <div class="row">
       <button class="btn waves-effect waves-light" type="submit" name="action">Send verification code
    <i class="material-icons right"></i>
  </button>
    </div>
  </form>
<? } ?>  
<? if($_SESSION["verificationcode"]>0) { ?>  
  <form action="experimento.php" method="POST">
    <div class="row">
     <div class="input-field col s12">
       <input id="verification_code" type="number" name="verification_code">
       <label for="verification_code">Verification code</label>
     </div>
   </div>
   <div class="row">
     <button class="btn waves-effect waves-light" type="submit" name="action">Validate
   <i class="material-icons right"></i>
  </div>
  </form>
  <? } ?>
    </div>
     <script type="text/javascript" src=" "></script>
     </body>
 </html>