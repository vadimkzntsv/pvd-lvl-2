<?php
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);



mail('yourmail@gamil.com', 'Contact Form','$message', 'From: $name , $phone , $email');