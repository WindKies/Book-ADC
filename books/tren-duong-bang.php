<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Trên đường băng</title>
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
            <h1>Review: Trên đường băng</h1>
            <p>Trên đường băng là cuốn sách thứ 2 của Tony Buổi sáng sau cuốn đầu tiên là Cafe cùng Tony, và nội dung không có gì mới, vẫn là tập hợp lại những bài viết đã từng được đăng trước đây trên fanpage của tác giả này. Điều thú vị là mặc dù những bài viết trong sách mặc dù đều được viết lại từ trong fanpage, nhưng Trên đường băng này vẫn là một trong những cuốn sách bán chạy nhất trên Tiki trong suốt 1 năm qua.
            .</p>
            <div class="picture">
                <img src="https://salt.tikicdn.com/cache/w1200/media/catalog/producttmp/b4/4b/a1/653f4d8ddf4f85f0ad7910d7456afead.jpg" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
          Cuốn sách giống như 1 chuyến bay, có 3 phần là Chuẩn bị hành trang, ngồi phòng chờ sân bay & lên đường thì phần 1 được xem là phần chuẩn bị cũng được đề cập dài nhất & đặc sắc nhất. Bạn trẻ nuôi chí lớn sẽ ngất ngây với những bài viết đặc sắc như Chuyện thằng Quân, chuyện thằng Kiên, chuyện củ trấu, chị lái đò…
            </p>
            <div class="picture">
                <img src="https://salt.tikicdn.com/cache/w1200/media/catalog/producttmp/b4/4b/a1/653f4d8ddf4f85f0ad7910d7456afead.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Trên đường băng”
            </h2>
            <p>
          Có lẽ bất cứ ai nhìn thấy tên những bài viết trên thì sẽ giật mình và chắc chắn là nếu không đọc thì không thể hiểu được nội dung bài viết đang hướng tới cái gì. Chẳng hạn như chuyện thằng Quân, tác giả dẫn dụ người đọc đi một đoạn đường rất dài khi kể về một người trưởng phòng trẻ tuổi để rồi dẫn tới cái kết bất ngờ: Thế rốt cuộc the mission of life của bạn là gì? Người đọc chắc hẳn sẽ không khỏi suy ngẫm khi bước tới những dòng cuối cùng của bài viết.
            </p>
            <p>
           Còn với những ai thích nghe lời khuyên về bài học kinh doanh trên mạng, tác giả kể một câu chuyện cười về anh chàng Tony đăng đàn internet hỏi “có nên mở nhà máy củi trấu để xuất qua mấy nước ôn đới làm nhiên liệu sinh học không”. Có một anh chàng tên Thành, ở dưới Tiền Giang, tư vấn nhiệt tình lắm. Tony nghe theo thôi là nghe, vì ảnh nói ảnh xuất khẩu mấy lô rồi, cung không đủ cầu. Anh Thành cho địa chỉ cơ sở sản xuất của anh ở dưới quê, nói xuống tham quan, khuyên Tony cứ làm đi, ảnh giúp cho bao tiêu sản phẩm. Mấy tháng trời lo dự án, chuẩn bị xong xuôi hết, máy móc thiết bị nhân lực gì đầy đủ cả. Tony quyết định xuống tận Tiền Giang đón anh Thành đi khai trương nhà máy.
            </p>
       
            <div class="picture">
                <img src="https://salt.tikicdn.com/cache/w1200/media/catalog/producttmp/b4/4b/a1/653f4d8ddf4f85f0ad7910d7456afead.jpg" width="600" height="400">
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