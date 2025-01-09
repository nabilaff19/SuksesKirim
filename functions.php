<?php
$conn = mysqli_connect("localhost", "root", "", "sukseskirim");
if(!$conn) echo "Koneksi Gagal!";

function daftar($data) {
    global $conn;
    $name = $data['name'];
    $email = $data['email'];
    $password = hash('sha256', $data["password"]);
    return mysqli_query($conn, "INSERT INTO pengguna VALUES (null, '$name', '$email', '$password', 'user')");
}

function getDataUserById($id) {
    global $conn;
    $res = mysqli_query($conn, "SELECT name, email, role FROM pengguna WHERE id = $id");
    return mysqli_fetch_assoc($res);
}

function updateUserDataById($id, $data) {
    global $conn;
    $name = $data['name'];
    $email = $data['email'];
    $password = hash('sha256', $data['password']);
    return mysqli_query($conn, "UPDATE pengguna SET name = '$name', email = '$email', password = '$password' WHERE id = $id");
}

function resetPassword($data) {
    global $conn;
    $email = $data['email'];
    $password = hash('sha256', $data['password']);
    $res = mysqli_query($conn, "SELECT id FROM pengguna WHERE email = '$email'");
    $row = mysqli_fetch_assoc($res);
    if($row) {
        $id = $row['id'];
        return mysqli_query($conn, "UPDATE pengguna SET password = '$password' WHERE id = $id");
    }
    return false;
}

function login($data) {
    global $conn;
    $email = $data['email'];
    $password = hash('sha256', $data['password']);

    $res = mysqli_query($conn, "SELECT id, password FROM pengguna WHERE email = '$email'");
    $row = mysqli_fetch_assoc($res);

    return ($res && $row['password'] == $password) ? $row['id'] : false;
}