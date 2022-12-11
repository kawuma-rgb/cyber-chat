      
<?php 
// Email configuration 
$toEmail = 'evpiinn@gmail.com'; 
 
$fromName = 'Sender Name'; 
$formEmail = 'sender@example.com';
$postData = $statusMsg = $valErr = ''; 
$status = 'error'; 
 
// If the form is submitted 
if(isset($_POST['submit'])){ 
 
    // Get the submitted form data 
    $postData = $_POST; 
    $name = trim($_POST['name']); 
    $email = trim($_POST['email']); 
    $subject = trim($_POST['subject']); 
    $message = trim($_POST['message']); 
  // Validate form fields 
    if(empty($name)){ 
         $valErr .= 'Please enter your name.<br/>'; 
    } 
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Please enter a valid email.<br/>'; 
    } 
    if(empty($subject)){ 
        $valErr .= 'Please enter subject.<br/>'; 
    } 
    if(empty($message)){ 
        $valErr .= 'Please enter your message.<br/>'; 
    } 
     
    if(empty($valErr)){ 
  $subject = 'New contact request submitted'; 
        $htmlContent = " 
            <h2>Contact Request Details</h2> 
            <p><b>Name: </b>".$name."</p> 
            <p><b>Email: </b>".$email."</p> 
            <p><b>Subject: </b>".$subject."</p> 
            <p><b>Message: </b>".$message."</p> 
        "; 
         
        // Always set content-type when sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        // Header for sender info 
        $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
         
        // Send email 
        @mail($toEmail, $subject, $htmlContent, $headers); 
         
        $status = 'success'; 
        $statusMsg = 'Thank you! Your contact request has submitted successfully, we will get back to you soon.'; 
        $postData = ''; 
    }else{ 
        $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
    } 
}




if(isset($_POST['submit2'])){ 
 
    // Get the submitted form data 
    $postData = $_POST; 
    $names = trim($_POST['names']); 
    $email2 = trim($_POST['email2']); 
    $location = trim($_POST['$location']); 

  // Validate form fields 
    if(empty($name)){ 
         $valErr .= 'Please enter your name.<br/>'; 
    } 
    if(empty($location)){ 
         $valErr .= 'Please enter your name.<br/>'; 
    } 
    if(empty($email2) || filter_var($email2, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Please enter a valid email.<br/>'; 
    } 

    if(empty($valErr)){ 
  $subject = 'New contact request submitted'; 
        $htmlContent = " 
            <h2>Location Request </h2> 
            <p><b>Name: </b>".$name."</p> 
            <p><b>Email: </b>".$email."</p> 
            <p><b>Subject: </b>".$location."</p> 
            
        "; 
         
        // Always set content-type when sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        // Header for sender info 
        $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
         
        // Send email 
        @mail($toEmail, $htmlContent, $headers); 
         
        $status = 'success'; 
        $statusMsg = 'Thank you! Your contact request has submitted successfully, we will get back to you soon.'; 
        $postData = ''; 
    }else{ 
        $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
    } 
}