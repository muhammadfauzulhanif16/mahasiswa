<?php
    $conn = mysqli_connect("localhost", "root", "", "mahasiswa");
    date_default_timezone_set("Asia/Jakarta");

    function tambahMahasiswa($data) {
        global $conn;

        $id = time();
        $nama = htmlspecialchars($data["nama"]);
        $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $umur = htmlspecialchars($data["umur"]);
        $created_at = date("Y-m-d G:i:s");

        mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('$id', '$nama', '$jenis_kelamin', '$jurusan', '$umur', '$created_at')");

        return mysqli_affected_rows($conn);
    }

    function getData($query) {
        global $conn;

        $result = mysqli_query($conn, $query);
        $datas = [];

        while ($data = mysqli_fetch_assoc($result)) {
            $datas[] = $data;
        }

        return $datas;
    }