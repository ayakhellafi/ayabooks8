<?php

    $conn =mysqli_connect("localhost","root","","vente_de_livres");
    mysqli_set_charset($conn, "utf8");

    if(mysqli_connect_errno())
        echo "Connection Error";

?>