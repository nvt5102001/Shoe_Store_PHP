<?php
    $mysqli = new mysqli("localhost:3307","root","","shoes_shop");

    // Check connection
    if ($mysqli->connect_errno) {
      echo "Kết nối mysqli lỗi: " . $mysqli->connect_error;
      exit();
    }
?>