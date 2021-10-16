<?php
if($_POST["message"]) {
    $name = $_POST["nombre"];
    $visitorEmail = $_POST["email"];
    $message = $_POST["mensaje"];
    $OUR_MAIL = 'adrianmcenturion@gmail.com';
    
$errors = "";
//NORMAL OPERATION - NO ERRORS        
    if(empty($errors)){
        $EMAIL_SUBJECT = "New Form Contact From " . $name . " @ Your Portfolio Website!";
        $emailBody = "User name: " . $name . "rn".
                     "User email: " . $visitorEmail . "rn".
                     "User message: " . $message . "rn";
 
        $TARGET_EMAIL = "visisorFilledEmail@adress.com";
//HEADERS
        $headers = "From: " . $OUR_MAIL . "rn";
        $headers .= "Reply-To: " . $visitorEmail . "rn";

        
}}
$success = mail($TARGET_EMAIL, $EMAIL_SUBJECT, $emailBody, $headers);
//SUCCESS OR FAIL FOR CORRECT TEXT
if ($success){
        ?>
      <script language="javascript" type="text/javascript">
      //REDIRECT TO THE MAIN PAGE or alternatively to 'thank you page'
 alert('Thank you for the message. I will be in contact with you shortly.');
       window.location.href = './index.html';
      </script>
      <?php
} else{
      //mail failed for some reason
      ?>
      <script language="javascript" type="text/javascript">
        alert('Message failed. Please, contact me by an alternative way.');
        window.location.href = './index.html';
      </script>
      <?php
}


?>