<?php
session_start();
include_once 'koneksi.php';
include_once 'models/User.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = [$username, $password];

$model = new User();
$tombol = $_REQUEST['proses'];

switch ($tombol) {
    case 'login':
        $userData = $model->login($data[0], $data[1]);
        if ($userData) {
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['username'] = $userData['username'];
            $_SESSION['role'] = $userData['role'];

            if ($userData['role'] == 'admin') {
                header('Location: index.php');
            } elseif ($userData['role'] == 'paramedik') {
                header('Location: index.php?url=paramedik');
            } else {
                header('Location: index.php?url=pasien');
            }
            exit;
        } else {
            $error = "Invalid username or password";
        }
        break;
    default:
        header('Location: index.php?url=login');
        break;
}

if (isset($error)) {
    echo $error;
}