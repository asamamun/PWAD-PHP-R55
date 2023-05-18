<?php
//tajrinjahan003@gmail.com
if(isset($_POST['submit'])){
//recipient
// $to = $_POST['to'];

//sender
$from = $_POST['from'];
$fromName = $_POST['name'];

//email subject
$subject = $_POST['subject'];

//attachment file path
if(is_uploaded_file($_FILES['fileatt']['tmp_name'])){
//$file = "avro_phonetic.zip";

move_uploaded_file($_FILES['fileatt']['tmp_name'],$_FILES['fileatt']['name']);
$file = $_FILES['fileatt']['name'];
//echo $file;
}

//email body content
$htmlContent = '<h1>PHP Email with Attachment by '.$from.'</h1>
    <p>This email has sent from PHP script with attachment for testing and edicational purpose only.</p>';

//header for sender info
$headers = "From: $fromName"." <".$from.">";

//boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//multipart boundary 
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparing attachment
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($file)."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//send email
$mail = @mail('genuitytraininglab02@gmail.com', $subject, $message, $headers, $returnpath); 

//email sending status
$m = $mail?"<h1>Mail sent.</h1>":"<h1>Mail sending failed.</h1>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
        <!-- Wrapper container -->
<div class="container py-4">

<!-- Bootstrap 5 starter form -->
<form id="contactForm" method="post" enctype="multipart/form-data">

  <!-- Name input -->
  <div class="mb-3">
    <label class="form-label" for="to">To</label>
    <input class="form-control" id="name" name="name" type="text" placeholder="Name" data-sb-validations="required" />
    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
  </div>

  <!-- Email address input -->
  <div class="mb-3">
    <label class="form-label" for="emailAddress">Email Address</label>
    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" name="from" />
    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
  </div>

    <!-- Subject input -->
    <div class="mb-3">
    <label class="form-label" for="Subject">Subject</label>
    <input class="form-control" id="Subject" type="text" placeholder="Subject" data-sb-validations="required, email" name="subject" />
    <div class="invalid-feedback" data-sb-feedback="Subject:required">Email Address is required.</div>
    <div class="invalid-feedback" data-sb-feedback="Subject:email">Email Address Email is not valid.</div>
  </div>
  <!-- Message input -->
  <div class="mb-3">
    <label class="form-label" for="message">Message</label>
    <textarea class="form-control" name="message" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
  </div>

    <!-- Message input -->
    <div class="mb-3">
    <label class="form-label" for="file">File</label>
    <input type="file" id="file" name="fileatt" class="form-control"/>
    <div class="invalid-feedback" data-sb-feedback="file:required">File is required.</div>
  </div>

  <!-- Form submissions success message -->
  <div class="d-none" id="submitSuccessMessage">
    <div class="text-center mb-3">Form submission successful!</div>
  </div>

  <!-- Form submissions error message -->
  <div class="d-none" id="submitErrorMessage">
    <div class="text-center text-danger mb-3">Error sending message!</div>
  </div>

  <!-- Form submit button -->
  <div class="d-grid">
    
    <button class="btn btn-primary btn-lg" type="submit" name="submit">SEND</button>
  </div>

</form>

</div>




</body>
</html>