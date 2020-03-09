<?php
$conn = new mysqli('localhost', 'id11924761_keluhan', 'abc123', 'id11924761_datapkl');

if(!$conn){
    echo json_encode(['status' => 0, 'msg' => 'Koneksi Error Gan!!']);
    exit();
}

if($_GET['nama'] ){
    $nama= $_GET['nama'];
    $deskripsi = $_GET['deskripsi'];
    $cek_ = mysqli_query($conn, "SELECT * FROM data WHERE nama='$nama'");
    $cek = mysqli_num_rows($cek_);
    if(!$cek){
        $insert = mysqli_query($conn, "INSERT INTO datapkl (nama, deskripsi) VALUES ('$nama', '$deskripsi')");
        if($insert){
            echo json_encode(['status' => 1, 'msg' => 'Data Berhasil di Masukkan.']);
            exit();
        }else{
            echo json_encode(['status' => 0, 'msg' => 'Data Tidak masuk.']);
            exit();
        }
    }else{
        echo json_encode(['status' => 0, 'msg' => 'Data Sudah Ada.']);
        exit();
    }
}

echo json_encode(['status' => 0, 'msg' => 'Error.']);
    exit();