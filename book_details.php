<!DOCTYPE html>
<html>
<head>
	<title>تفاصيل الكتاب</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/book_details.css"/>
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

        $bookID = $_GET['book_id'];
        include('admin/database_connect.php');

        $res = mysqli_query($conn,'select * from livres where id_livre = '.$bookID);
        $res_2 = mysqli_query($conn, 'SELECT * FROM composer NATURAL JOIN auteurs where id_livre = '.$bookID);
        
        $auth_infos = mysqli_fetch_assoc($res_2);
        $row=mysqli_fetch_assoc($res);
        ?>

    <div class="book_details">
    	<h2>كتاب <?php echo $row['titre'];?></h2>
        <div class="details">
            <img class="book_img" src="<?php echo $row['couvert'];?>" alt="">
            <div class="infos_txt">
                <table>
                    <tr><td>العنوان</td><td><?php echo $row['titre'];?></td></tr>
                    <tr><td>المؤلف</td><td><a href="author.php?auth_id=<?php echo $auth_infos['id_auteur']?>"><?php echo $auth_infos['nom'];?></a></td></tr>
                    <tr><td>الكمية المتوفرة</td><td><?php echo $row['quantite'];?></td></tr>
                    <tr><td>الوصف</td><td><?php echo $row['description'];?></td></tr>
                    <tr><td>السعر</td><td><?php echo $row['prix']." دج";?></td></tr>
                </table>
            </div>
        </div>

        <h2>ملخص الكتاب</h2>
        <p class="resume">
            <?php echo $row['resume'];?>
        </p>
    </div>

    <footer>
        <h2>معلومات عن متجرنا</h2>
        <p>حي تيغزة - تكوت - باتنة</p>
        <p dir="ltr">66 66 66 666 213+</p>
        <p>admin@ayabook.com</p>
    </footer>

</body>
</html>