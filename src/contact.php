<?php
require_once("class/Contact.php");

$output['pass'] = "";
$output['fail'] = "";

if (isset($_POST['name']) and isset($_POST['lastname']) and isset($_POST['email']) and isset($_POST['subject']) and isset($_POST['message'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    if ($name != "" and $lastname != "" and $email != "" and $subject != "" and $message != "") {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $data = array(
                'contact_name' => $name,
                'contact_lastname' => $lastname,
                'contact_email' => $email,
                'contact_subject' => $subject,
                'contact_message' => $message,
            );

            try {
                $contact = new Contact();
                $contact->create($data);
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            $output['pass'] = "Message sent successfuly. We will get back to you shortly.";
        } else $output['fail'] = "Invalid email format, please correct it.";
    } else $output['fail'] = "Please fill in all the required fields.";
} else $output['fail'] = "Please fill in all the required fields.";


echo JSON_encode($output, 256);

?>