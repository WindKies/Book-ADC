<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sách theo chủ đề | Góc Sách</title>
	<link rel="stylesheet" type="text/css" href="css/home_sachmoi_favourite.css">
	<link rel="stylesheet" type="text/javascript" href="js/home_sachmoi_favourite.js">
</head>
<body>
	<?php
		//kết hợp file connect vào tại đây
		require("sql/connect.php");
		//câu lệnh truy vấn
		
		$sql1 = "select * from danhmuc"; 
		$result = mysqli_query($conn, $sql1);
	

	?>

	<div class="Container">
		<div class="head">
			<ul class="logo">
				<a href="home.php" id="goc_sach">
					<span id="char1">Góc</span>
					<span id="char2">Sách.VN</span>
				</a>

				<select onchange="changeBackground(this)" id="stt">
		          <option value="">Giao diện</option>
		          <option value="#0f0f0f">Mặc định</option>
		          <option value="#18191A">Tối</option>
		          <option value="#f0f2f5">Sáng</option>
		          <option value="#704214">Nâu đen</option>
		        </select>
		        <script type="text/javascript">
		          function changeBackground(e) 
		          {
		            document.bgColor = e.value;
		          }
		        </script> 

                <li><a href="sachmoi.php"><span id="char3">Sách Mới</span></a></li>                
				
				<li><a href="admin/list.php" class ="ad"><span id="char4">Manage</span></a></li>
				
				<script type="text/javascript">
					var list = document.getElementsByClassName('ad');
					for(var i = 0; i < list.length; i++)
					{
						list[i].onclick = function()
						{
							alert("Đây là trang chỉ dành cho Admin, bạn có chắc chắn tiếp tục truy cập?");
						}
					}
				</script>


				<div id="search">
					<tr>
						<td><input type="text" name="txtFullname" placeholder="   Tìm kiếm..."></td>
					</tr>				
				</div>
			</ul>
		</div>

		<div class="submenu">
			<ul class="menusub">
				<li><a href="#"><span>Hotline:</span>
				<span>0914396891</span></a></li>
			</ul>			
		</div>

		<div class="menu">
			<div class="mune_left">
          		<span>📚</span>
          	 	<span id="subchar1">Danh mục</span>
	          	<ul>
		            <li><a href="">Văn học</a>
						<ul class="menu-con">
							<li><a href="danhmuc.php">Tiểu thuyết</a></li>
							<li><a href="danhmuc.php">Truyện ngắn</a></li>
							<li><a href="danhmuc.php">Light novel</a></li>
							<li><a href="danhmuc.php">Ngôn tình</a></li>
							<li><a href="danhmuc.php">Tiên hiệp</a></li>							
						</ul>
					</li>
		            <li><a href="">Kinh tế</a>
						<ul class="menu-con">
							<li><a href="danhmuc.php">Marketing</a></li>
							<li><a href="danhmuc.php">Khởi nghiệp</a></li>
							<li><a href="danhmuc.php">Tài chính</a></li>
							<li><a href="danhmuc.php">Chứng khoán</a></li>
							<li><a href="danhmuc.php">Kiến thức kinh tế</a></li>							
						</ul>
					</li>
		            <li><a href="">Sách thiếu nhi</a>
						<ul class="menu-con">
							<li><a href="danhmuc.php">Truyện thiếu nhi</a></li>
							<li><a href="danhmuc.php">Từ điển</a></li>
							<li><a href="danhmuc.php">Kiến thức cho trẻ</a></li>
							<li><a href="danhmuc.php">Tạp chí thiếu nhi</a></li>
							<li><a href="danhmuc.php">Bài học cuộc sống</a></li>
						</ul>
					</li>
		            <li><a href="">Tâm lý - Kĩ năng sống</a>
						<ul class="menu-con">
							<li><a href="danhmuc.php">Nghệ thuật sống</a></li>
							<li><a href="danhmuc.php">Kỹ năng làm việc</a></li>
							<li><a href="danhmuc.php">Hướng nghiệp</a></li>
							<li><a href="danhmuc.php">Kỹ năng sống</a></li>							
						</ul>
					</li>
		            <li><a href="">Sách giáo dục</a>
						<ul class="menu-con">
							<li><a href="danhmuc.php">Tuổi mới lớn</a></li>
							<li><a href="danhmuc.php">Tâm lý</a></li>
							<li><a href="danhmuc.php">Rèn luyện bản thân</a></li>
							<li><a href="danhmuc.php">Nhân vật vĩ dại</a></li>
							<li><a href="danhmuc.php">Hạt giống tâm hồn</a></li>
						</ul>
					</li>
		            <li><a href="">Chăm sóc gia đình</a>
						<ul class="menu-con">
							<li><a href="danhmuc.php">Chăm sóc sức khỏe</a></li>
							<li><a href="danhmuc.php">Nuôi dạy con</a></li>
							<li><a href="danhmuc.php">Tâm lý - Giới tính</a></li>
							<li><a href="danhmuc.php">Phụ nữ - Làm đẹp</a></li>
						</ul>
					</li>
		            <li><a href="">Ngoại văn</a>
						<ul class="menu-con">
							<li><a href="danhmuc.php">Tiếng Anh</a></li>
							<li><a href="danhmuc.php">Tiếng Nhật</a></li>
							<li><a href="danhmuc.php">Tiếng Trung</a></li>
							<li><a href="danhmuc.php">Tiếng Hàn </a></li>
							<li><a href="danhmuc.php">Tiếng Pháp</a></li>
							<li><a href="danhmuc.php">Tiếng Đức</a></li>
						</ul>
					</li>
		            <li><a href="">Giáo dục trẻ</a>
						<ul class="menu-con">
							<li><a href="danhmuc.php">Cẩm nang cha mẹ</a></li>
							<li><a href="danhmuc.php">Phát triển trí tuệ</a></li>
							<li><a href="danhmuc.php">Giáo dục cho trẻ</a></li>
							<li><a href="danhmuc.php">Dinh dưỡng cho trẻ</a></li>
							<li><a href="danhmuc.php">Dành cho mẹ bầu</a></li>
							<li><a href="danhmuc.php">Giáo dục tuổi teen</a></li>
						</ul>
					</li>
	            </ul>
          	</div>

          	<div class="viewright">

		      	<div class="slideshow-container">

			       <div class="mySlides fade">
				        <div class="numbertext">1 / 3</div>
				         
				        <a href="books/luoc_su_doi_toi.php"> <img src="photo/big-photo/1.jpg" style="width:100%"></a>
				        <div class="text">Lược sử đời tôi</div>
			        </div>
			        
			        <div class="mySlides fade">
			          	<div class="numbertext">2 / 3</div>
			          	<a href="books/dam-bi-ghet.php"><img src="photo/big-photo/2.jpg" style="width:100%"></a>
			          	<div class="text">Dám bị ghét</div>
			        </div>
			        
			        <div class="mySlides fade">
			          	<div class="numbertext">3 / 3</div>
			          	<a href="books/soi-gia-pho-wall.php"><img src="photo/big-photo/3.jpg" style="width:100%"></a> 
			          	<div class="text">Sói Già Phố Wall</div>
			        </div>
			        
			        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			        <a class="next" onclick="plusSlides(1)">&#10095;</a>
		        
		        </div>
		        <br>
		        
		        <div style="text-align:center; margin-top: -28px">
			        <span class="dot" onclick="currentSlide(1)"></span> 
			        <span class="dot" onclick="currentSlide(2)"></span> 
			        <span class="dot" onclick="currentSlide(3)"></span> 
		        </div>
		        
		        <script>
		        var slideIndex = 1;
		        showSlides(slideIndex);
		        
		        function plusSlides(n) {
		          	showSlides(slideIndex += n);
		        }
		        
		        function currentSlide(n) {
		          	showSlides(slideIndex = n);
		        }
		        
		        function showSlides(n) {
			        var i;
			        var slides = document.getElementsByClassName("mySlides");
			        var dots = document.getElementsByClassName("dot");
			        if (n > slides.length) {slideIndex = 1}    
			        if (n < 1) {slideIndex = slides.length}
			        for (i = 0; i < slides.length; i++) {
			              slides[i].style.display = "none";  
			        }
			        for (i = 0; i < dots.length; i++) {
			              dots[i].className = dots[i].className.replace(" active", "");
			        }
			        slides[slideIndex-1].style.display = "block";  
			        dots[slideIndex-1].className += " active";
		        }
		        </script>
	        
	        </div>
	    </div>

	    <HR>
	    <HR>


	    <div class="danhsachbooks">
		    <div class="body1">
		    	<ul class="tieude1">
		    		<span id="b1">Sách </span>
	               	<span id="b2">| Theo Chủ Đề </span>	 
		    	</ul>
		    </div>


		    <div class="listbookmain">
<?php
		//lấy từng hàng trong CSDL
	while($row = mysqli_fetch_assoc($result))
	{
?>		    	
		    	<div class="list">
	               	<div class="listbook">                 
	                    <div class="bookpic">
	                      	<a href="books/<?php echo $row["link_page"]; ?>"> 
	                      		<img src="photo/<?php echo $row["photo"]; ?>" width="200" height="250" >
	                      	</a>
	                    </div>
	                    <div class="bookchar">
	                      	<h3><?php echo $row["title"]; ?></h3>
	                  	</div>
	                  	
	               </div>
		    	</div>
<?php
	}
	mysqli_close($conn);
?>		    	
		    </div>
		</div>
				



		
		<div class="page_n">
			<div id="p1_2_3">
				<td><a href="danhmuc.php">1</a></td>
		    	<td><a href="danhmuc.php">2</a></td> 
		    	<td><a href="danhmuc.php">3</a></td> 
			</div>
		</div>
		

	    
	    <div class="clear"></div>
	    <div class="footer">
            <div class="bot1">
                <h3>Nhập email để nhận thông tin</h3>
                <td>
                <input type="text" name="txtFullName" placeholder="Email..."" id="ten" required>
                </td>       
            </div>
            <div class="clear"></div>
            <div class="bot_left">
                <h2>Góc Sách</h2>
                <span>Bắt đầu từ 1 góc nhỏ trong một quán café nhỏ với những phiên chợ nhỏ xíu nhưng luôn nhận được sự ủng hộ nhiệt tình của mọi người. Nay, Góc Sách đã phát triển hơn, độc lập hơn và phong phú đa dạng hơn về các đầu sách để đáp lại tình cảm đáng mến của mọi người. Ngoài sách cũ và một số quyển đã hết trên thị trường, Góc Sách còn có thêm nhiều đầu sách mới từ rất nhiều nhà phát hành khác để phục vụ thất tốt cho bạn đọc.

				Mong rằng các bạn sẽ tiếp tụ đồng hành với Góc Sách - The Book Corner trong những chặng đường kế tiếp vì giữa chúng ta luôn có một người bạn chung là "Sách".</span>
            </div>
            <div class="bot_right">
                <ul Dịch vụ >
	                <li>Điều khoản sử dụng</li>
	                <li>Chính sách bảo mật</li>
	                <li>Giới thiệu</li>
                </ul>
                <ul>
                    <li>Đăng nhập</li>
                    <li>Chi tiết tài khoản</li>
                    <li>Lịch sử</li>
                </ul>
                <span> Liên hệ : 0123456789</span>
            </div>
        </div> 


	</div>
</body>
</html>