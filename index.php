<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

	<aside>
		<div class="adminInfos">
			<img src="img/admin_avatar.svg"/>
			<div class="userTxt">
				<div>KHELLAFI Aya</div>
				<div style="font-size: 13px; color: #ddd;">Website Manager</div>
			</div>
		</div>
		<div class="menu">
			<div class="menuItem activeTab">الكتب</div>
			<div class="menuItem">طلبات</div>
			<div class="menuItem">التسليم</div>
			<div class="menuItem">تنبيهات</div>
		</div>
	</aside>

	<article>
		<header>
			<input type="text" name="search" placeholder="اُكتب ما تريد البحث عنه هنا ..." />
			<div class="header_menu">
				<button></button>
				<div class="drop_down">
					<div>تغيير المستخدم</div>
					<div>تسجيل الخروج</div>
				</div>
			</div>
					
		</header>

		<main>
			<section class="active">

				<form action="insert_book.php" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td>رقم الكتاب</td>
							<td><input type="text" name="id" required></td>
						</tr>
						<tr>
							<td>العنوان</td>
							<td><input type="text" name='title' required></td>
						</tr>
						<tr>
							<td>مسار الغلاف</td>
							<td><input type="file" name ="book_cover" id="book_cover" required></td>
						</tr>
						<tr>
							<td>الوصف</td>
							<td><input type="text" name="description" required></td>
						</tr>
						<tr>
							<td>ملخص</td>
							<td><textarea name="resume" required></textarea></td>
						</tr>
						<tr>
							<td>السعر</td>
							<td><input type="text" name="price" required></td>
						</tr>
						<tr>
							<td>الكمية</td>
							<td><input type="text" name="Qty" required></td>
						</tr>
						<tr>
							<td colspan="2" style="background-color: transparent;">
								<button type="submit">تاكيد</button>
							</td>
						</tr>
					</table>
				</form>
				<!--div class="head">
					<span>الكتب المتوفرة</span>
					<div class="tools">
						<button class="add"></button>
						<button class="delete"></button>
						<button class="save"></button>
					</div>
				</div>

				<div class="booksList">
					<div class="book">
						<table>
							<thead>
								<th></th>
								<th>تعريف المتاب</th>
								<th>العنوان</th>
								<th>المؤلف</th>
								<th>تاريخ الإصدار</th>
								<th>الغلاف</th>
								<th>السعر</th>
								<th>الكمية</th>
							</thead>

							<tbody>
								<tr>
									<td><input type="checkbox" /></td>
									<td>1</td>
									<td>كليلة ودمنة</td>
									<td>ابن المقفع</td>
									<td>900.م</td>
									<td style="text-align: center; direction: ltr;">
										img/books/<input style="direction: ltr;	" type="text" value="1.jpg"/>
									</td>
									<td>1900 .دج</td>
									<td>20</td>
								</tr>

								<tr>
									<td><input type="checkbox" /></td>
									<td>1</td>
									<td>كليلة ودمنة</td>
									<td>ابن المقفع</td>
									<td>900.م</td>
									<td style="text-align: center; direction: ltr;">
										img/books/<input style="direction: ltr;	" type="text" value="1.jpg"/>
									</td>
									<td>1900 .دج</td>
									<td>20</td>
								</tr>
								<tr>
									<td><input type="checkbox" /></td>
									<td>1</td>
									<td>كليلة ودمنة</td>
									<td>ابن المقفع</td>
									<td>900.م</td>
									<td style="text-align: center; direction: ltr;">
										img/books/<input style="direction: ltr;	" type="text" value="1.jpg"/>
									</td>
									<td>1900 .دج</td>
									<td>20</td>
								</tr>	
							</tbody>
						</table>
					</div>
				</div-->
			</section>

<!-- BOOKS SECTION ---------------------------------------------->

			<section>
				
				<!--div class="head">
					<span>الطلبات المقدمة</span>
					<div class="tools">
						<button class="check_demand"></button>
						<button class="delete" onclick="getAllCheckboxes()"></button>
					</div>
				</div>

				<div class="booksList">
					<div class="book">
						<table>
							<thead>
								<th></th>
								<th>تعريف المتاب</th>
								<th>العنوان</th>
								<th>المؤلف</th>
								<th>تاريخ الإصدار</th>
								<th>الغلاف</th>
								<th>السعر</th>
								<th>الكمية</th>
							</thead>

							<tbody>
								<tr>
									<td><input type="checkbox" /></td>
									<td>51</td>
									<td>كليلة ودمنة</td>
									<td>ابن المقفع</td>
									<td>900.م</td>
									<td></td>
									<td>1900 .دج</td>
									<td>20</td>
								</tr>

								<tr>
									<td><input type="checkbox" /></td>
									<td>100</td>
									<td>كليلة ودمنة</td>
									<td>ابن المقفع</td>
									<td>900.م</td>
									<td></td>
									<td>1900 .دج</td>
									<td>20</td>
								</tr>
								<tr>
									<td><input type="checkbox" /></td>
									<td>11</td>
									<td>كليلة ودمنة</td>
									<td>ابن المقفع</td>
									<td>900.م</td>
									<td></td>
									<td>1900 .دج</td>
									<td>20</td>
								</tr>	
							</tbody>
						</table>
					</div>
				</div-->

				قسم الطلبات قيد التطوير
			</section>
			<section>قسم التسليم قيد التطوير</section>
			<section>قسم التنبيهات قيد التطوير قيد التطوير</section>
		</main>
	</article>
	<!--div class="cover">

		<div class="imgContainer">
			<img src=""/>
			<label for="imgFile">غيّر  الصورة</label>
			<input type="file" id="imgFile" hidden="true" onchange="set_img_src(this)" />
		</div>

		<button class="close" onclick="close_cover()">
			&times;
		</button>
	</div-->
<script type="text/javascript">

	
	/*function set_img_src(a){

		if (a.files && a.files[0]) {
    	var reader = new FileReader();
    
   		 reader.onload = function(e) {
   		 	var img = document.querySelector('.cover .imgContainer img')
   		 	
     		 img.src = e.target.result;
   		 }
    
   		 reader.readAsDataURL(a.files[0]); // convert to base64 string
 		 }

		/*var fileName, fakePath = a.value.split('\\');
		fileName = fakePath[fakePath.length - 1]
		var img = document.querySelector('.cover .imgContainer img')
		img.src = 'img/'+fileName
		//alert(fileName)
	}*/

	/*function show_cover(a){
		//alert(a.getAttribute('img-src'))
		var cover = document.querySelector('.cover')
		var img = document.querySelector('.cover .imgContainer img')
		img.src = a.getAttribute('img-src')
		//cover.appendChild(img)
		cover.style.display = "flex"

	}

	function close_cover(){
		var cover = document.querySelector('.cover')
		cover.style.display = 'none'
	}*/

	function getAllCheckboxes(){

		var checkboxes = document.querySelectorAll('.active table tr td input[type=checkbox]');
		for(let i=0; i<checkboxes.length; i++){
			if(checkboxes[i].checked){
				var tdID = document.querySelector(`.active table tr:nth-child(${i+1}) td:nth-child(2)`);
				alert(tdID.innerText)
			}
				
		}
	}
	

	var tabs = document.querySelectorAll('.menuItem');
	var activeTab = document.querySelector('.activeTab');

	var sections = document.querySelectorAll('body > article main > section');
	var activeSection = document.querySelector('.active');

	for(let i=0; i<tabs.length; i++){

		tabs[i].addEventListener('click', function(){
			
			activeTab = document.querySelector('.activeTab');
			activeTab.classList.remove('activeTab');
			this.classList.add('activeTab');

			activeSection = document.querySelector('.active');
			activeSection.classList.remove('active')
			sections[i].classList.add('active')
		})
	}
</script>
</body>
</html>