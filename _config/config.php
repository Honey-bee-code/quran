<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'quran');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

function base_url($url = null) {
    $base_url = "http://localhost/quran";
    // $base_url = "http://192.168.43.54/quran";
    if($url != null) {
        return $base_url."/".$url;
    } else {
        return $base_url;
    }
}
?>