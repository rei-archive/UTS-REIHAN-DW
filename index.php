<?php

// fungsi page
$page = isset($_GET['page']) ? $_GET['page'] : 'landing';

function loadPage($page)
{
  if ($page === 'landing') {
    include 'file/landing.php';
  } else if ($page === 'login') {
    include 'file/login.php';
  } else if ($page === 'register') {
    include 'file/register.php';
  } else if ($page === 'produk') {
    include 'file/product.php';
  } else if ($page === 'logout') {
    include 'config/logout.php';
  } else {
    include 'file/error/404.php';
  }
}
// end fungsi page

// alert
if (isset($_GET['login'])) {
  if ($_GET['login'] == 'success') {
    echo "<script>alert('Login berhasil!');</script>";
  } elseif ($_GET['login'] == 'failed') {
    echo "<script>alert('Password salah!');</script>";
  } elseif ($_GET['login'] == 'notfound') {
    echo "<script>alert('Pengguna tidak ditemukan.');</script>";
  } elseif ($_GET['login'] == 'signinsuccess') {
    echo "<script>alert('Registrasi berhasil');</script>";
  }
}

if (isset($_GET['landing'])) {
  if ($_GET['landing'] == 'successlogout') {
    echo "<script>alert('Logout berhasil berhasil!');</script>";
  }
}
// alert

// memanggil page
include 'include/template/css.php';
include 'include/template/header.php';
loadPage($page);
include 'include/template/footer.php';
include 'include/template/js.php';
// end memanggil page
?>