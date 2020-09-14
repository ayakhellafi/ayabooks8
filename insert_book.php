<?php

    #print_r($_POST);

    /*$titre = $_POST['title'];

    echo $titre;-

    print_r($_POST);*/

    $target = "../img/books/";
    $target_file = $target.basename($_FILES['book_cover']['name']);

    move_uploaded_file($_FILES['book_cover']['tmp_name'], $target_file);

    include('database_connect.php');

    $query = "INSERT INTO livres VALUES(".$_POST['id'].", '".$_POST['title']."', ".$_POST['price'].", '".$_POST['resume']."', 'img/books/".$_FILES['book_cover']['name']."', ".$_POST['Qty'].", '".$_POST['description']."', 1)";

    echo $query;

    if(mysqli_query($conn, $query))
        echo "INSERTION SUCCEED";
    else
        echo "FAILED";

?>