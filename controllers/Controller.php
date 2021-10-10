<?php
include '../function/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "create_user") {
    $query = "INSERT INTO user (username, password, level) VALUES ( '" . $_POST['username'] . "',  '" . $_POST['password'] . "',  '" . $_POST['level'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/menu_user_owner.php");
    }
} elseif ($aksi == "hapus_user") {
    $query = "delete FROM user where id =" . $_GET['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/menu_user_owner.php");
    }
} elseif ($aksi == "update_user") {
    $query = "update user set username = '" . $_POST['username'] . "', password = '" . $_POST['password'] . "', level = '" . $_POST['level'] . "' where id =" . $_POST['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/menu_user_owner.php");
    }
} elseif ($aksi == "create_transaksi") {
    $query = "INSERT INTO transaksi ( barang_nama , barang_harga ) VALUES ( '" . $_POST['barang_nama'] . "',  '" . $_POST['barang_harga'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/transaksi.php");
    }
}elseif ($aksi == "hapus_transaksi") {
    $query = "delete FROM transaksi where id =" . $_GET['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/menu_transaksi_admin.php");
    }
} elseif ($aksi == "update_transaksi") {
    $query = "update transaksi set barang_nama = '" . $_POST['barang_nama'] . "', barang_harga = '" . $_POST['barang_harga'] . "' where id =" . $_POST['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/menu_transaksi_admin.php");
    }
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