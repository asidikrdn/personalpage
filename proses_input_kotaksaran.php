<?php
    include("config.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['simpan'])){
    
        // ambil data dari formulir
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $kategori = $_POST['kategori'];
        $pesan = $_POST['pesan'];

         // buat query
        $sql = "INSERT INTO kotaksaran (nama, email, telp, kategori, pesan) VALUES ('$nama', '$email', '$telp', '$kategori', '$pesan')";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: index.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index.php?status=gagal');
        }
        

    } else {
        die("Akses dilarang...");
    }
?>