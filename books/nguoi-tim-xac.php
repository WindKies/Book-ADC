<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Người Tìm Xác</title>
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
            <h1>Review: Người Tìm Xác </h1>
            <p>Sau khi đọc xong tiểu thuyết Người Tìm Xác này, bạn sẽ nhận thấy tác giả Lạc Lâm Lang là một “mọt sách” chính hiệu, có lẽ đã “gặm” hết những tiểu thuyết trinh thám của Lôi Mễ, Chu Hạo Huy, Ngộ Cẩn hay truyện kinh dị Quỷ Cổ Nữ, truyện đam mỹ và cả tiểu thuyết Kim Dung rồi. Bởi trong truyện của Lạc Lâm Lang giống như một “nồi lẩu thập cẩm” của rất nhiều phong cách từ trinh thám, ngôn tình, huyền huyễn hay kinh dị… Thậm chí còn có những cái tên nghe quen quen, na ná những tiểu thuyết khác như Đinh Nhất, Diệp Tri Thu, Hàn Cẩn…
            .</p>
            <div class="picture">
                <img src="https://i.bloganchoi.com/bloganchoi.com/wp-content/uploads/2020/06/review-nguoi-tim-xac-2-700x1024.jpg?fit=700%2C20000&quality=95&ssl=1" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
          Người Tìm Xác là một tiểu thuyết trinh thám linh dị, huyền huyễn của tác giả Lạc Lâm Lang khá nổi tiếng. Câu chuyện kể về nhân vật chính Trương Tiến Bảo là người Đông Bắc, xuất thân là thanh niên vừa tốt nghiệp đại học và đang thất nghiệp ở nhà ăn bám bố mẹ. Một buổi chiều tối, người hàng xóm hoảng hốt chạy sang nhà nhờ bố của Trương Tiến Bảo đi tìm giúp đứa con trai bị lạc – vì bố Trương Tiến Bảo có thể coi là “thầy pháp” tài giỏi trong làng. Nhưng ông ấy lười liền đạp mông Trương Tiến Bảo bắt cậu đi. Ai ngờ rằng chính từ lần bước chân ra khỏi cửa ấy, gặp phải cái tên đen sì sì Đinh Nhất kia, cuộc đời Trương Tiến Bảo hoàn toàn thay đổi.

            </p>
            <div class="picture">
                <img src="https://i.bloganchoi.com/bloganchoi.com/wp-content/uploads/2020/06/review-nguoi-tim-xac-2-700x1024.jpg?fit=700%2C20000&quality=95&ssl=1" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Người tìm xác”
            </h2>
            <p>
           Tiểu thuyết trinh thám Người Tìm Xác là một tiểu thuyết Trung Quốc khá nổi tiếng được Waka độc quyền dịch, edit và đăng tải trên website. Cuốn tiểu thuyết này có thể “dọa sợ” bất cứ mọt sách nào với sự “đồ sộ” của nó, bởi ngay phần mục lục chương cũng kéo mãi không thấy hết. Hơn 1900 chương truyện, được trang Waka chia thành 77 tập, dù là người đọc nhanh nhất cũng phải mất 1 tháng mới đọc xong được hết. Chính bởi vậy, hãy xác định về cả thể chất lẫn tinh thần khi bạn muốn đọc cuốn tiểu thuyết này.

            </p>
            <p>
            Sau khi đọc xong tiểu thuyết Người Tìm Xác này, bạn sẽ nhận thấy tác giả Lạc Lâm Lang là một “mọt sách” chính hiệu, có lẽ đã “gặm” hết những tiểu thuyết trinh thám của Lôi Mễ, Chu Hạo Huy, Ngộ Cẩn hay truyện kinh dị Quỷ Cổ Nữ, truyện đam mỹ và cả tiểu thuyết Kim Dung rồi. Bởi trong truyện của Lạc Lâm Lang giống như một “nồi lẩu thập cẩm” của rất nhiều phong cách từ trinh thám, ngôn tình, huyền huyễn hay kinh dị… Thậm chí còn có những cái tên nghe quen quen, na ná những tiểu thuyết khác như Đinh Nhất, Diệp Tri Thu, Hàn Cẩn…
            </p>
       
            <div class="picture">
                <img src="https://i.bloganchoi.com/bloganchoi.com/wp-content/uploads/2020/06/review-nguoi-tim-xac-2-700x1024.jpg?fit=700%2C20000&quality=95&ssl=1" width="600" height="400">
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