<?php
include '../function/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "hapus") {
    $query = "delete FROM pengunjung where id =" . $_GET['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/pengunjung.php");
    }
} elseif ($aksi == "register_users") {
    $query = "INSERT INTO user (username, password, level) VALUES ( '" . $_POST['username'] . "',  '" . $_POST['password'] . "',  '" . $_POST['level'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/index.html");
    }
} elseif ($aksi == "create_users") {
    $query = "INSERT INTO user (username, password, level) VALUES ( '" . $_POST['username'] . "',  '" . $_POST['password'] . "',  '" . $_POST['level'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/users.php");
    }
} elseif ($aksi == "hapus_user") {
    $query = "delete FROM user where id =" . $_GET['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/users.php");
    }
} elseif ($aksi == "update_user") {
    $query = "update user set username = '" . $_POST['username'] . "', password = '" . $_POST['password'] . "', level = '" . $_POST['level'] . "' where id =" . $_POST['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/users.php");
    }
} elseif ($aksi == "create_transaksi") {
    $query = "INSERT INTO transaksi (tgl_transaksi, barang_nama , barang_harga ) VALUES ( '" . $_POST[' '] . "',  '" . $_POST['barang_nama'] . "',  '" . $_POST['barang_harga'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/transaksi.php");
    }
    // header("location:../views/login.php?pesan=gagal");




    // if ($result) {
    //     header("location:../views/register.php");
    // }
} elseif ($aksi == "create_ticket") {
    $query = "INSERT INTO ticket (jumlah, harga , hari) VALUES ( '" . $_POST['jumlah'] . "',  '" . $_POST['harga'] . "',  '" . $_POST['hari'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/ticket.php");
    }
} elseif ($aksi == "hapus_ticket") {
    $query = "delete FROM ticket where id =" . $_GET['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/ticket.php");
    }
} elseif ($aksi == "update_ticket") {
    $query = "update ticket set jumlah = '" . $_POST['jumlah'] . "', harga = '" . $_POST['harga'] . "', hari = '" . $_POST['hari'] . "' where id =" . $_POST['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/ticket.php");
    }
}
