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
} elseif ($aksi == "create_barang") {
    $query = "INSERT INTO barang (nama_barang, harga) VALUES ( '" . $_POST['nama_barang'] . "',  '" . $_POST['harga'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/menu_barang_admin.php");
    }
} elseif ($aksi == "hapus_barang") {
    $query = "delete FROM barang where id =" . $_GET['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/menu_barang_admin.php");
    }
} elseif ($aksi == "update_barang") {
    $query = "update barang set nama_barang = '" . $_POST['nama_barang'] . "', harga = '" . $_POST['harga'] . "' where id =" . $_POST['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/menu_barang_admin.php");
    }
}
