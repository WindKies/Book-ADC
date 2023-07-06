<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Lolita</title>
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
            <h1>Review: Lolita </h1>
            <p>M“Lolita” là một tác phẩm kinh điển, là một quyển sách từng gây tranh cãi đến mức khiến giới văn học dấy lên những luồn ý kiến tranh cãi gay gắn. Có thể nói rằng đây là một cuốn sách phức tạp và đầy cuốn hút và tất nhiên chỉ đối với những con người có thể bỏ qua những lề thói đạo đức hàng ngày để thưởng thức nó.</p>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-tieu-thuyet-lolita-2.jpg" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
        Tiểu thuyết “Lolita” được viết bằng tiếng Anh và được xuất bản vào năm 1955 ở Paris. Sau đó được chính tác giả dịch ra tiếng Nga và được xuất bản vò năm 1967 ở New York. Tiểu thuyết nổi tiếng cả ở phong cách mới lạ lẫn nội dung. Đã và đang còn rất nhiều ý kiến kiến trái chiều về nội dung, nhiều vấn đề được bàn vãi, nhất là về vấn đề đạo đức do nhân vật chính của tiểu thuyết tên Humbert Humbert, một người khá lớn tuổi luôn mang trong mình sự ám ảnh về tình dục với một cô bé 12 tuổi tên Dolores Haze.
            </p>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-tieu-thuyet-lolita-2.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Lolita”
            </h2>
            <p>
         Sách được viết dưới góc nhìn của nhân vật Humbert Humbert – là một học giả, nhà thẩm mĩ và còn là một nhà văn lãng mạn, trạc 35 tuổi và đẹp trai. Tuy sinh sống cùng vợ nhưng Humbert không hề có hứng thú tình dục với vợ mà luôn thầm tơ tưởng đến những cô gái 12,13 tuổi để mong tìm lại thiên đường đã mất khi người yêu thời nhỏ của mình là Annabel đã chết vì bệnh hiểm nghèo. Sau đó, vợ Humbert bỏ theo một người đàn ông khác và ông được mời sang Mĩ giảng dạy văn học trong một trường đại học ở New England.
            </p>
              <p>
         Tại đây ông đã bất đắc dĩ cưới bà chủ trọ Charlotte Haze để được gần gũi với con gái của bà ta tên là Dolores Haze (mà ông ta gọi là Lolita), cô bé chỉ mới 12 tuổi. Hàng ngày ông đều ghi vào nhật ký những cảm xúc dạt dào với đứa con riêng của vợ đang ở tuổi dậy thì. Đến một ngày, vợ ông phát hiện ra bí mật khủng khiếp này và đã bị xe cán chết trong trạng thái hoang mang tột độ khi trên đường ra bưu điện gửi thư cho con gái ở trại hè.
            </p>
         
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-tieu-thuyet-lolita-2.jpg" width="600" height="400">
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