<!DOCTYPE html>
<html>
<head>
	<title>تفاصيل الكتاب</title>
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="css/book_details.css"/>
    <link rel="stylesheet" type="text/css" href="css/author.css"/>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>

	<header>
        <nav>
            <a class="actual" href="index.php">الرئيسية</a>
            <a href="promotions.html">التخفيضات</a>
            <a href="contact_us.php">اتصلوا بنا</a>


            <div class="float">
                <div id="currency"> $ </div>
                <div id="language">
                    <div>العربية</div>
                    <div>Français</div>
                </div>
            </div>
        </nav>

        <div class="banner">
            <div class="logo"></div>
            <form action="search.php">
                <input type="text" name="search_for" placeholder ="ابحث عن كتاب..."/>
            </form>
            <div class="cart"></div>
        </div>
    </header>

    <?php

        $authorID = $_GET['auth_id'];
        
        include('admin/database_connect.php');

        $res = mysqli_query($conn,'select * from auteurs where id_auteur = '.$authorID);
        $res_2 = mysqli_query($conn, 'select id_livre, couvert from livres NATURAL join composer where id_auteur ='.$authorID);
        
        $auth_infos = mysqli_fetch_assoc($res);

        ?>

    <div class="book_details">
    <h2><?php echo $auth_infos['nom']; ?></h2>
        <div class="details">
            <img class="auth_img" src=<?php echo "img/authors/".$auth_infos['id_auteur'].".jpg"; ?> alt="">
            <div class="infos_txt">
                <?php echo $auth_infos['description']; ?>
            </div>
        </div>

        <h2>مؤلفات الكاتب</h2>
        <div class="compose">

            <?php
                
                while($covers=mysqli_fetch_assoc($res_2))
                {
            ?>
            <a href="book_details.php?book_id=<?php echo $covers['id_livre']; ?>"><img src=<?php echo $covers['couvert']; ?> alt=""/></a>
            
            <?php
                }
            ?>

        </div>
    </div>

    <footer>
        <h2>معلومات عن متجرنا</h2>
        <p>حي تيغزة - تكوت - باتنة</p>
        <p dir="ltr">66 66 66 666 213+</p>
        <p>admin@ayabook.com</p>
    </footer>

</body>
</html>