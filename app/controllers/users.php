<?php
include "../database/database.php";

if (isset($_POST['username-signup'])) {
   $username = $_POST['username-signup'];
   $email = $_POST['email-signup'];
   $pass = password_hash($_POST['pass2-signup'], PASSWORD_DEFAULT);
   $admin = 0;

   $post = [
        'admin' => $admin,
        'username' => $username,
        'email' => $email,
        'password' => $pass
   ];

   $id = insert('users', $post);
   $last_row = selectOne('users', ['id' => $id]);
   
   tt($last_row);
}