<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Dạy con làm giàu</title>
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
            <h1>Review: Dạy con làm giàu</h1>
            <p>Dạy con làm giàu” là bộ sách tâm đắc nhất của tác giả Robert Kiyosaki - là một nhà đầu tư, doanh nhân đồng thời là một nhà giáo dục về kinh doanh và tài chính. Với sự thành công của bộ sách nổi tiếng này, Robert Kiyosaki đã vinh dự được xếp vào top 25 tác giả nổi tiếng  trên thế giới do Amazon.com bình chọn.
            .</p>
            <div class="picture">
                <img src="https://cf.shopee.vn/file/565f9c6b5b3c901d56dd877738ca51d2" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
          Nội dung của bộ sách là những chia sẻ, những kinh nghiệm thực tế dễ hiểu về những câu chuyện trong cuộc sống, qua đó giúp chũng ta hiểu đúng hơn về tư duy làm giàu, làm chủ, lãnh đạo, kinh doanh và sự thông minh về tài chính.


            </p>
            <div class="picture">
                <img src="https://cf.shopee.vn/file/565f9c6b5b3c901d56dd877738ca51d2" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Dạy con làm giàu”
            </h2>
            <p>
         "Dạy con làm giàu"  được kể với lời kể của một cậu bé 9 tuổi, cậu có đến 2 người cha, một người cha ruột được cậu gọi là cha nghèo và một người cha nuôi được cậu gọi là cha giàu. Bằng suy nghĩ của mình, cậu đã diễn tả được sự khác nhau về quan điểm sống, về đẳng cấp sống dẫn đến sự khác biệt trong số phận của hai người cha. Người cha nghèo dù rất tài giỏi, học vẫn cao nhưng ông vẫn là người làm thuê và nhận tiền lương và trợ cấp từ chính phủ hàng tháng vì ông không biết cách tự do về tài chính. Nhưng với người cha giàu thì hoàn toàn ngược lại, tuy ông không có kiến thức sâu rộng nhưng ông luôn dạy Kiyosako cách để đồng tiền làm việc cho họ chứ không nên tiêu hết tiền kiếm được cho cuộc sống hàng ngày như người cha ngèo. 
            </p>
            <p>
           Với ngôn ngữ diễn đạt giản dị, dễ hiểu cùng cách diễn đạt  vấn đề và giải quyết vấn đề trực tiếp rõ ràng, có phần hỏi đáp đan xen và tính thực hành cao "Dạy con làm giàu" giúp người đọc cảm thấy những vấn đề tài chính này thật thú vị chứ không hề khô khan và nặng về lý thuyết sách vở. Những bài học mà “Dạy con làm giàu” mang đến cho bạn đọc một hành trang quý giá giúp bạn có thể áp dụng ngay để có thêm kiến thức tạo khởi đầu thuận lợi trên con đường kinh doanh của mình. Đặc biết  với những ai đang và sắp đứng ra kinh doanh thì cuốn sách này sẽ là một người bạn đồng hành tuyệt vời.
            </p>
       
            <div class="picture">
                <img src="https://cf.shopee.vn/file/565f9c6b5b3c901d56dd877738ca51d2" width="600" height="400">
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
                <span>“Bắt đầu từ 1 góc nhỏ trong một quán café nhỏ với những phiên chợ nhỏ xíu nhưng luôn nhận được sự ủng hộ nhiệt tình của mọi người. Nay, Góc Sách đã phát triển hơn, độc lập hơn và phong phú đa dạng hơn về các đầu sách để đáp lại tình cảm đáng mến của mọi người. Ngoài sách cũ và một số quyển đã hết trên thị trường, Góc Sách còn có thêm nhiều đầu sách mới từ rất nhiều nhà phát hành khác để phục vụ thất tốt cho bạn đọc.
                Mong rằng các bạn sẽ tiếp tụ đồng hành với Góc Sách - The Book Corner trong những chặng đường kế tiếp vì giữa chúng ta luôn có một người bạn chung là "Sách"..</span>
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