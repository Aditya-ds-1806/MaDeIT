<?php

$host = 'localhost';
$username = 'root';
$password = '';
$email = $_POST['email'];
$db = 'madeit';

$success = '<div class="alert alert-success alert-dismissible fade show fixed-bottom text-center rounded-0" role="alert">
<p class="mb-0">Thank you for signing up! You must confirm your email address before we can start communicating. Please check you inbox and follow the instructions.</p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';

$failure = '<div class="alert alert-warning alert-dismissible fade show fixed-bottom text-center rounded-0" role="alert">
<p class="mb-0">Something went wrong! Please try again after sometime.</p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';

$conn = mysqli_connect($host, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = 'INSERT INTO subscribers (Email_ID) VALUES (?)';
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) !== 1) {
    echo $failure;
    die('fail');
} else {
    echo $success;
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
