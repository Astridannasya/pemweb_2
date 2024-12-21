<?php
require_once 'koneksi.php';

class User {
    private $koneksi;

    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataUsers() {
        $sql = "SELECT * FROM users";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$username, $password]);
        $rs = $ps->fetch();
        return $rs;
    }
}