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

  //Handle the form 
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST[name];
    $phone = $_POST[phone];
    $email = $_POST[email];
    $message = $_POST[message];
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
    
    //echo "<script> alert('$name');</script>";
  }
   
?>