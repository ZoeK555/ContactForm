<?php


$errors = '';
$myemail = 'D00285411@student.dkit.ie';// <-----Put your DkIT email address here.
if (empty($_POST['name']) ||
        empty($_POST['email']) ||
        empty($_POST['service']) ||
        empty($_POST['contactNumber']) ||
        empty($_POST['message'])) {
    $errors .= "\n Error: all fields are required";
}


// Important: Create email headers to avoid spam folder
$headers = 'From: ' . $myemail . "\r\n" .
        'Reply-To: ' . $myemail . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$emailAddress = $_POST['email'];
$service = $_POST['service'];
$contactNumber = $_POST['contactNumber'];
$message = $_POST['message'];

if (!preg_match(
        "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
        $emailAddress
)) {
    $errors .= "\n Error: Invalid email address";
}

if (empty($errors)) {
    $to = $myemail;
    $email_subject = "Contact form submission: {$name}";

    $email_body = <<<BODY
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f9f9f9; color: #222; padding: 24px;">
  <table style="max-width: 600px; margin: auto;">
    <tr>
      <td>
        <div style="
          background: rgba(255,255,255,0.25);
          border-radius: 16px;
          box-shadow: 0 8px 32px 0 rgba(31,38,135,0.37);
          border: 1px solid rgba(255,255,255,0.18);
          padding: 32px;
          /* backdrop-filter is ignored by most email clients, but included for completeness */
          backdrop-filter: blur(8px);
          -webkit-backdrop-filter: blur(8px);
        ">
          <h2 style="color: #2a7ae2; margin-top: 0;">You've received a new message</h2>
          <p style="margin-bottom: 16px;">Here are the details:</p>
          <ul style="list-style: none; padding: 0;">
            <li><strong>Name:</strong> {$name}</li>
            <li><strong>Email:</strong> {$emailAddress}</li>
            <li><strong>Contact Number:</strong> {$contactNumber}</li>
            <li><strong>Service:</strong> {$service}</li>
          </ul>
          <hr style="margin: 24px 0; border: none; border-top: 1px solid #eaeaea;">
          <p style="white-space: pre-line;"><strong>Message:</strong><br>{$message}</p>
        </div>
      </td>
    </tr>
  </table>
</body>
</html>
BODY;


    echo $email_body;
    die();
    $success = mail($to, $email_subject, $email_body, $headers);
    //redirect to the 'thank you' page
    header('Location: 3ContactUs.html?success=' . $success);
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br(htmlspecialchars($errors, ENT_QUOTES, 'UTF-8'));
?>
</body>
</html>