<?php
if($_POST){
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $name = $name['company'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];

//send email
    mail("ameykatkar08@gmail.com", "Enquiry from " .$name, "You have recieved a new enquiry from: \r\n Name: " .$name ."\r\nEmail: " .$email ."\r\nPhone: " .$phone ."\r\nTopic: " .$topic ."\r\nMessage: " .$message);
   // mail("sawant1810@gmail.com", "Enquiry from " .$name, "You have recieved a new enquiry from: \r\n Name: " .$name ."\r\nCompany: " .$company ."\r\nMessage: " .$message);
}
?>