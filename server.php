<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = fopen('emails.csv', 'a');
        fputcsv($file, [$email]);
        fclose($file);
        echo \"Email successfully saved!\";
    } else {
        echo \"Invalid email address.\";
    }
}
?>
