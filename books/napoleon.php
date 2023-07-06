<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Napoleon</title>
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
            <h1>Review: Napoleon</h1>
            <p>Cuốn sách Napoléon Bonaparte của tác giả Adam Zamoyski đi sâu vào diễn giải cách điều hành, quản lý đất nước, sử dụng nhân tài, đưa ra các phát kiến lớn lao nhằm nâng tầm nước Pháp, lãnh đạo quân đội… qua đó giúp độc giả hiểu hơn về cách mà tại sao Napoleon lại vĩ đại đến thế.</p>
            <div class="picture">
                <img src="https://menback.com/wp-content/uploads/2021/07/sach-Napoleon-Bonaparte.jpg" width="600" height="400">
            </div>
            <p>
               Chưa có con số thống kê cụ thể nào về việc đã có bao nhiêu cuốn sách viết về cá nhân Napoleon, về những người quan trọng trong cuộc đời ông, về thời đại của ông, về những cuộc chiến tranh có liên quan đến ông. Nhưng theo nhà nghiên cứu Napoleon người Mỹ David Markham, con số vào khoảng 300 nghìn.
            </p>
            <p>
             Vâng, 300 nghìn, bằng đủ các thứ tiếng và góc nhìn khác nhau! Và mình, một người cũng rất thích đọc đủ thứ liên quan đến Napoleon và thời đại của ông mới chỉ đọc được chừng 40-50 cuốn trong số đó, chủ yếu bằng 3 thứ tiếng Ý, Anh và tiếng Pháp. Và được dịch ra tiếng Việt, mới chỉ có 3 cuốn tiểu sử trong số đó, cuốn của sử gia Nga Yevgeny Tarle (1874-1955), Andrew Roberts (người Anh, sinh 1963) và Adam Zamoyski (người Anh gốc Ba Lan, sinh 1949). Quả là quá ít so với nguồn sách cực kỳ phong phú nói trên.
            </p>
            

            <p>
            Sử gia nổi tiếng này nhìn Napoleon với tư cách của một con người, lý giải tại sao Napoleon lại đi trên con đường từ một viên tướng Cộng hoà thành một Hoàng đế chuyên chế, từ một người có tư tưởng giải phóng con người của Cách mạng Pháp thành một người đô hộ các dân tộc, từ một người dùng chiến tranh để phòng ngự thành người biến chiến tranh thành công cụ xâm lược. Zamoyski không đánh giá, không phán xét Napoleon theo các chuẩn của thế kỷ 21 mà đặt Napoleon vào thời đại cuối thế kỷ 18, đầu 19 để lý giải hình tượng ấy, qua đó cho thấy tầm vóc vĩ đại của ông so với tầm thế kỷ.
            </p>
            <div class="picture">
                <img src="https://menback.com/wp-content/uploads/2021/07/Napoleon-Bonaparte.jpg" width="600" height="400">
            </div>
            <p>
            Chiến tranh thể hiện ra trong cuốn sách in rất đẹp này không nhiều (cuốn Andrew Roberts thì rất chi tiết), vì Zamoyski chủ yếu nói đến cách điều hành, quản lý đất nước, sử dụng nhân tài, đưa ra các phát kiến lớn lao nhằm nâng tầm nước Pháp, lãnh đạo quân đội… qua đó giúp độc giả hiểu hơn về cách mà tại sao Napoleon lại vĩ đại đến thế. Cuốn này mình đã đọc bản gốc tiếng Anh từ mấy năm trước, đã rất thích, nay còn thích hơn khi được dịch ra tiếng Việt. Sách viết như kể chuyện, đúng hơn là một bộ phim, chân thực và sống động.
            </p>
            
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