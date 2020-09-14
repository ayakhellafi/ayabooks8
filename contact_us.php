<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact_us.css">
    <link rel="stylesheet" href="css/index.css"/>
</head>
<body>

    <header>
        <nav>
            <a href="index.php">الرئيسية</a>
            <a href="promotions.html">التخفيضات</a>
            <a class="actual" href="contact_us.php">اتصلوا بنا</a>


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

    <div class="main"> 
        <div class="infos">
            <?php
            
                include('admin/database_connect.php');
                
                $res=mysqli_query($conn,'select * from bibliotheque');
                $row= mysqli_fetch_assoc($res);
            
            ?>
            <h3>معلوماتنا</h3>
            <div class="details">
                <div><?php echo $row['adress'];?></div>
                <div><?php echo $row['email'];?></div>
                <div><?php echo $row['phone'];   mysqli_close($conn);?></div>
            </div>
        </div>
        <form class="form">
            <div>    
            <input type="text" placeholder="الاسم الكامل">
            </div>
            <div>
            <input type="text" placeholder="عنوان البريد الالكتروني">
            </div>
            <div>
            <input type="text" placeholder="الموضوع">
            </div>
            <div>
            <textarea placeholder="...نص الرسالة"></textarea>
            </div>
            <button type="submit">ارسال</button>
            
            

        </form>
    </div>

    <footer>
        <h2>معلومات عن متجرنا</h2>
        <p>حي تيغزة - تكوت - باتنة</p>
        <p dir="ltr">66 66 66 666 213+</p>
        <p>admin@ayabook.com</p>
    </footer>
    
</body>
</html>