<?php
include 'person.php';
include 'user.php';
include 'admin.php';

$user = new User;
$user->type = new Admin;
echo $user->type->greet();