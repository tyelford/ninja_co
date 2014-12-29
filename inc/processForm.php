<?php
  
  //Process Form Here
  
  /*
   * Form Variables
   * Name field: name
   * Phone field: phone
   * Email field: email
   * Message field: message
   * Plans field: plans
   */

  /*
   * Sanatize Input Strings
   * addslashes();
   */   
   
  //Handle the form 
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = addslashes($_POST[name]);
    $phone = addslashes($_POST[phone]);
    $email = addslashes($_POST[email]);
    $message = addslashes($_POST[message]);
    $plans = $_POST[plans];
    
    $name = strtoupper($name);
    if($name == "JAKE IS AWESOME"){
      //Easter Egg!!
      echo "<script>var jakeJoke = document.createElement('div'); jakeJoke.id = 'jakeJoke'; document.body.appendChild(jakeJoke);</script>";
      //sleep(2);
      echo "<script>var jakeJoke = document.createElement('div'); jakeJoke.id = 'jakeJoke2'; document.body.appendChild(jakeJoke);</script>";
      //sleep(2);
      echo "<script>var jakeJoke = document.createElement('div'); jakeJoke.id = 'jakeJoke3'; document.body.appendChild(jakeJoke);</script>";
    }
    if($name == "NICK IS COOL"){
      //Easter Egg!!
      echo "<script>window.alert('Choose Your Fantasy');</script>";
      echo "<script>var jakeJoke = document.createElement('div'); jakeJoke.id = 'nickJoke'; document.body.appendChild(jakeJoke);</script>";
      //sleep(2);
      echo "<script>var jakeJoke = document.createElement('div'); jakeJoke.id = 'nickJoke2'; document.body.appendChild(jakeJoke);</script>";
      //sleep(2);
      echo "<script>var jakeJoke = document.createElement('div'); jakeJoke.id = 'nickJoke3'; document.body.appendChild(jakeJoke);</script>";
    }
    
    //Create Message to Send
    $emailMessage = 'You got a message from the website!' . "\r\n" .
               "\r\n" .
               'From: ' . $name . ' (' . $email . ')' . "\r\n" .
               'Phone them Back: ' . $phone . "\r\n" .
               'Message: ' . $message .  "\r\n";
               
    //Message sent to client
    $confirmMessage = 'Thank you for your enquiry, we will get back to you as soon as possible';
    
    //Headers for the email
    $emailHeadersToClient = 'From: info@ninjaconstruction.ca' . "\r\n" .
                  'Reply-To: info@ninjaconstruction.ca' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
                  
    $emailHeadersToNinja = 'From: info@ninjaconstruction.ca' . "\r\n" .
                  'Reply-To: ' . $email . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
   
  
    //Send email to info@ninjaconstruction.ca  
    mail('info@ninjaconstruction.ca', 'Message from the Website', $emailMessage, $emailHeadersToNinja);
    
    //Send email to confirm to client
    mail($email, 'Thank you for your enquiry', $confirmMessage, $emailHeadersToClient);
  }
   
?>