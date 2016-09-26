<?php

include "inc/inc.db.php";
include "inc/lib_func.php";
$email = $_POST['email'];
$password = $_POST['password'];

// mengenkripsi password dengan md5()
$newPasswordEnkrip = md5(secure_input($password));

// mencari alamat email si user
$query = "SELECT * FROM user WHERE email = '$email'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$alamatEmail = $data['email'];
$username = $data['username'];

// title atau subject email
$title  = "Reset Password Akun PSB SMA Kartika Siliwangi 1";

// isi pesan email disertai password
$pesan  = "Username anda : ".$username.". \n\nPassword anda yang baru adalah ".$password. "\n\nJangan lupa untuk menyimpan password baru akun PSB anda. ";

// header email berisi alamat pengirim
$header = "From: admin@smaks1.sch.id";

// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);

// cek status pengiriman email
if ($kirimEmail) {

    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE user SET password = '$newPasswordEnkrip' WHERE email = '$email'";
    $hasil = mysql_query($query);

    if ($hasil) echo "Password baru telah direset dan sudah dikirim ke email Anda";
    }
else echo "Pengiriman password baru ke email gagal";

?>
