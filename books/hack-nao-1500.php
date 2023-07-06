<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Hack Não 1500</title>
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
            <h1>Review: Hack Não 1500</h1>
            <p>Hẳn có nhiều bạn muốn học tiếng Anh nhưng lại không biết học từ đâu. Có những bạn rất cần tiếng Anh trong môi trường học tập học làm việc. Hôm nay mình sẽ review cho bạn một cuốn sách có thể giúp đỡ bạn trong việc học tiếng Anh.</p>
            <div class="picture">
                <img src="https://i0.wp.com/motreview.com.vn/wp-content/uploads/2021/08/sach-1.png?resize=700%2C437&ssl=1" width="600" height="400">
            </div>
            <p>
               Sách gồm 530 trang và được in màu trên giấy A4 được phủ bóng toàn bộ. Có tổng cộng 1200 từ và 350 cụm từ từ dễ đến khó. Với 50 Unit được chia thành nhiều chủ đề quen thuộc trong đời sống như: 
               School Life, Personal Information, Jobs & Work Life             
            </p>
          
            <h2>Nạp siêu tốc qua âm thanh tương tự và Audio</h2>
            <div class="picture">
                <img src="https://i2.wp.com/motreview.com.vn/wp-content/uploads/2021/08/tang-toc-1.png?resize=700%2C391&ssl=1" width="600" height="400">
            </div>

            <p>
            Ở phần này, bạn sẽ học từ vựng qua hình ảnh cùng với giải nghĩa bằng Âm thanh tương tự. Mục tiêu của bạn là nắm bắt được mặt chữ và nghĩa của chúng.

            Với phần hình ảnh bắt mắt là Âm thanh tương tự sẽ giúp bạn dễ dàng nhớ theo chiều Anh – Việt rất nhanh.

            Và để bạn có thể dễ dàng nhớ được từ vựng hơn, cứ sau 6 chữ, ở cuối trang là một bài tập ôn ngắn để bạn nhớ mặt chữ và cách dùng từ trong câu.
            </p>

            <h2>Vượt chướng ngại vật.</h2>
            <div class="picture">
                <img src="https://i2.wp.com/motreview.com.vn/wp-content/uploads/2021/08/nghe-1.png?resize=700%2C385&ssl=1" width="600" height="400">
            </div>

            <p>
            Ở đây sẽ có 2 phần là luyện tập cụm từ và luyện nghe.

            Bài luyện tập cụm từ, bạn sẽ đoán cụm từ thông qua ngữ cảnh và gợi ý sẵn có.

            Ở bài luyện nghe, bạn hãy bật file Audio tương ứng trong app Hack não pro để nghe và điền vào chỗ trống. Bạn có thể nghe lại nhiều lần. Một lần để nắm bắt mạch truyện, vài lần sau để điền các từ bạn nghe vào chỗ trống và kiểm tra lại.
            </p>

            <h2>Ôn tập cùng với app Hack não pro.</h2>
            <div class="picture">
                <img src="https://i1.wp.com/motreview.com.vn/wp-content/uploads/2021/08/app1.png?resize=700%2C393&ssl=1" width="600" height="400">
            </div>

            <p>
            Bạn sẽ kiểm tra lại những từ vừa học từ 3 chiều: Anh – Việt, Việt – Anh và chiều âm thanh. Luyện tập thêm cách sử dụng từ trong câu từ dễ đến khó.
            </p>

            <h2>Cảm thấy như thế nào sau khi học?</h2>

            <p>
            Ở trường, thì bọn mình thường quan tâm đến ngữ pháp và một số từ vựng liên quan đến bài học, ít khi tự giác học những từ mới. Nhưng cuốn Hack Não 1500 có rất nhiều từ vựng theo mọi chủ đề nên mình có thể tự do nghiên cứu thêm ngoài giờ học, từ đó tăng vốn từ vựng lên.
            </p>
            <p>Nhưng không có nghĩa sách này chỉ phù hợp với học sinh. Những ai đang trong môi trường làm việc cần việc Nghe Nói tiếng Anh thì sách này cũng thật sự giúp ích thông qua các phần mình nói ở trên.</p>

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