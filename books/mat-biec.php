<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: mắt biếc</title>
    <link rel="stylesheet" type="text/css" href="css/books.css">
</head>
<body>
    <div class="Container">
    <div class="head">
      <ul class="logo">
        <a href="http://localhost:8080/php/home.php">
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
                
        <li><a href="http://localhost:8080/php/sachmoi.php"><span id="char3">Sách Mới</span></a></li>
        <li><a href="http://localhost:8080/php/favourite.php"><span id="char4">My Favourite</span></a></li>
        <li><a href="http://localhost:8080/php/admin/list.php" class ="ad"><span id="char4">Manage</span></a></li>
        
        <script type="text/javascript">   /*nhấn ok thì sẽ chuyển tiếp đến trang đăng nhập */
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
                 <span id="subchar1">Review sách</span>
                 <hr>
        <div class="review">
            <div class="bookpic">
                <p><img src="https://www.reader.com.vn/uploads/images/2019/11/13/60/sach-hay-online_600x279.JPG" width="110" height="80" align="left"></p>      
            </div> 
            <div class="text">
              <ul>
                  <li><a href="https://sachhay24h.com/nhung-trang-web-review-sach-hay-hang-dau-hien-nay-a62.html">Top trang review sách</a></li>
              </ul>
            </div> 
        </div>
        <div class="review">
                <div class="bookpic">
                <p><img src="https://cdn.chanhtuoi.com/uploads/2019/11/w400/top-5-cuon-sach-hay-nhat-1.jpg.webp" width="110" height="80" align="left"></p>      
            </div> 
            <div class="text">
              <ul>
                  <li><a href="https://www.reader.com.vn/top-10-cuon-sach-hay-giup-thay-doi-cuoc-doi-ban-a19.html">Top 10 cuốn sách hay thay đổi bạn</a></li>
              </ul>
            </div>        
         </div>
         <div class="review">
             <div class="bookpic">
                <p><img src="https://i0.wp.com/playlist.vn/wp-content/uploads/2021/06/mockup-2.jpg?fit=843%2C474" width="110" height="80" align="left"></p>      
            </div> 
            <div class="text">
              <ul>
                  <li><a href="https://www.reader.com.vn/top-10-cuon-tieu-thuyet-trinh-tham-noi-tieng-the-gioi-a25.html">Top 10 tiểu thuyết trinh thám nổi tiếng</a></li>
              </ul>
            </div>               
         </div>
         <div class="review">
          
             <div class="bookpic">
                <p><img src="https://www.reader.com.vn/uploads/images/2019/10/25/7/That-tich-khong-mua_600x351.jpg" width="110" height="80" align="left"></p>      
            </div> 
            <div class="text">
              <ul>
                  <li><a href="https://sachxua.vn/sach-ngon-tinh/">Top 10 ngôn tình bạn nên đọc</a></li>
              </ul>
            </div>                       
         </div>
         <div class="review">
             <div class="bookpic">
                <p><img src="https://bizweb.dktcdn.net/100/408/255/articles/hoang-tu-be-antoine-de-saint-exupery.jpg?v=1604970894750" width="110" height="80" align="left"></p>      
            </div> 
            <div class="text">
              <ul>
                  <li><a href="https://www.reader.com.vn/top-10-cuon-sach-danh-cho-thieu-nhi-hay-nhat-moi-thoi-dai-a65.html">Top 10 sách thiếu nhi hay nhất</a></li>
              </ul>
            </div>                      
         </div>
         <div class="review">
             <div class="bookpic">
                <p><img src="https://downloadsach.com/wp-content/uploads/2019/09/sach-hay-ve-ca-dao-tuc-ngu-viet-nam-660x330.png" width="110" height="80" align="left"></p>      
            </div> 
            <div class="text">
              <ul>
                  <li><a href="https://meta.vn/hotro/cac-cau-ca-dao-tuc-ngu-thanh-ngu-viet-nam-11368">Top ca dao tục ngữ nổi tiếng</a></li>
              </ul>
            </div>                           
         </div>
        </div>
        <div class="menu-right">
            <h1>Review: mắt biếc </h1>
            <p>“Mắt biếc” – một tâm hồn lãng mạn, một tình yêu nồng nàn nhưng lại có kết cục buồn. Cuốn sách “Mắt biếc” của Nguyễn Nhật Ánh thực sự đã chạm vào tâm hồn của những kẻ đang yêu, đã và đang dành cả thanh xuân, tuổi trẻ của mình để yêu đơn phương một người nào đó. Không còn xa lạ với những câu chuyện tình yêu đơn phương của Nguyễn Nhật Ánh nhưng đến với “Mắt biếc” việc xây dựng hình tượng và nội dung có phần khác. Vẫn với những ngôn từ giản đơn, gần gũi, cuốn sách sẽ gieo lại trong lòng độc giả một nỗi niềm nuối tiếc, chơi vơi, vừa yêu vừa giận.</p>
            <div class="picture">
                <img src="https://salt.tikicdn.com/ts/product/97/e7/23/c1149ddf3738c9bbc408e7a49c07e1d1.jpg" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
             Câu chuyện được mở đầu với những hình ảnh nhẹ nhàng, màu sắc tươi sáng nhất, âm thanh yên bình nhất. Cứ ngỡ rằng câu chuyện sẽ tiếp tục nhẹ nhàng như thế, bởi lẽ Ngạn đã dần dần nảy sinh tình cảm với Hà Lan, một đôi thanh mai trúc mã tưởng chừng rồi sẽ có kết quả tốt đẹp. Và giông bão nổi lên ở cái thời điểm Hà Lan rời chốn làng quê để lên thành phố học hành và bị cám dỗ bởi thành thị xa hoa.
            </p>
            <div class="picture">
                <img src="https://salt.tikicdn.com/ts/product/97/e7/23/c1149ddf3738c9bbc408e7a49c07e1d1.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Mắt biếc”
            </h2>
            <p>
              “Mắt biếc” được Nguyễn Nhật Ánh sáng tác vào năm 1990. Và rồi sau 30 năm ra mắt độc giả, vào một ngày tháng 2 Ngạn và Hà Lan lại cùng nhau rời khỏi những trang sách và bước vào thế giới một dự án điện ảnh cùng tên vô cùng được mong đợi. Các bạn khi cầm cuốn sách trên tay sẽ bị ấn tượng ngay bởi tiêu đề cùng cách thiết kế bìa sách nhẹ nhàng.
            </p>
            <p>
              Tiêu đề chỉ vỏn vẹn hai chữ “Mắt biếc” nhưng đã mở ra rất nhiều cung bậc cảm xúc cho độc giả bởi ai cũng biết mắt biếc là một đôi mắt đẹp nhưng lại mang nét buồn. Phần nào cũng gợi nên một cốt truyện có nội dung phảng phất những nỗi buồn. Cách thiết kế bìa sách mang tới một cảm giác dễ chịu với phông xanh chủ đạo và hình ảnh một người con trai ngồi đánh đàn bên cô gái dưỡi tán cây được phác họa một cách đơn giản.
            </p>
            <p>
            Cuốn sách kể về cuộc đời của chàng trai thuộc trường phái cổ điển tên Ngạn được sinh ra và lớn lên trong ngôi làng Đo Đo ở vùng quê Quảng Nam. Tuổi thơ của cậu gắn liền với cô bạn hàng xóm Hà Lan, một cô gái mang hơi hướng hiện đại và nổi bật với đôi mắt biếc. Tuổi thơ của cả hai là chuỗi những kỉ niệm đẹp ở làng, bên đồi sim, cùng nhau cởi truồng tắm mưa, những ngày tiểu học giành nhau đánh trống trường,…và là những câu nói hồn nhiên đáng yêu cực kì của hai đứa trẻ
            </p>
            <div class="picture">
                <img src="https://salt.tikicdn.com/ts/product/97/e7/23/c1149ddf3738c9bbc408e7a49c07e1d1.jpg" width="600" height="400">
            </div>
          
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
    
</body>
</html>