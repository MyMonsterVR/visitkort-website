<?php
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = 'RECEIVER-EMAIL';
$subject = 'Kontaktet i gennem kontakt formen';
$message = $_POST['sname'].': ';
$headers = 'From: no-reply@youremail.com';

$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "Invalid input";
} else {
    $message .= $_POST['txtmessage'];
    mail($to_email, $subject, $message, $headers);
    header("Location: index?sent");
}
?>
