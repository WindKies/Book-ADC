<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Eighty Six</title>
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
            <h1>Review: Eighty Six </h1>
            <p> “Màu đỏ thẫm của những bông hoa máu này trải rộng tới mức bao trọn cả tầm nhìn, được chiếu sáng bởi ánh hoàng hôn thiêu rụi tất cả, đẹp đến mức điên loạn.”</p>
            <div class="picture">
                <img src="https://product.hstatic.net/200000287623/product/86-tap-2-khong-qua__1__5b3649aa685b4ae796c7c5a35382e7e7_master.jpg" width="600" height="500">
            </div>
            <h2>
            Eighty-Six: Số thương vong trên chiến trường là “Không”
            </h2>
            <p>
            Eighty-Six là series LN tạo được tiếng vang khá lớn tại Nhật và Quốc Tế, nhưng chắc cũng không được nhắc nhiều như mấy bộ LN isekai hiện nay như Mushoku hay Re:0. Có người bảo với mình rằng Eighty-Six đã chơi một ván cờ rất lớn khi dám đi vào con đường đang dần xói mòn này vì nó viết về chiến tranh – mecha – chính trị. Combo thể loại này chục năm trước còn nổi, 
            chứ bây giờ thì gần như ai cũng né viết hay làm anime về nó cả vì rất khó khai thác thứ gì mới mẻ hơn, cũng như thời bình này thì không hẳn cần những bộ phim anti-war như chúng nữa.
            </p>
            <p>
            Tháng tư này là anime chiếu rồi All hail Sawano nên mình nghĩ có lẽ nên viết một bài review cho cuốn Light Novel nhưng chẳng hề nhẹ này. Đây cũng là một series đủ giải trí, dễ đọc và có tí romance cho những ai muốn đọc một tác phẩm chỉn chu khắc họa “dystopia”.
            </p>
            <div class="picture">
                <img src="https://www.dualshockers.com/static/uploads/2021/10/86-Eighty-Six-Season-2-Episode-2-Release-Date-Time-Preview.jpg" width="600" height="360">
            </div>
            <p>
            Trong cái thời đại mà tên truyện càng ngày càng dài, càng dài càng sốc như là “hôm nay sư tôn của ta đổ lệ còn ta chỉ biết ngồi trồng hoa” hay “cô vợ nhỏ phản diện xuyên không muốn làm nữ tu thay vì cưới hoàng tử” tên tự chế thôi các bạn đừng search thật-, thì hai chữ Eighty-Six, hoặc là vỏn vẹn hai con số 86 thôi,
             lại tạo ra ấn tượng mạnh cho mình. Ai cũng hiểu cụm từ này nghĩa là gì, nhưng lại không hiểu rốt cuộc nó mang ý nghĩa gì cho tới khi lật ra những trang đầu tiên.
            </p>
            <div class="picture">
                <img src="https://i0.wp.com/englishlightnovels.com/wp-content/uploads/2019/02/86-eighty-six-banner.jpg?fit=750%2C380&ssl=1" width="600" height="360">
            </div>
            <p>
            Quận 86 – một quận không được xem là “tồn tại” trong Cộng Hòa San Magnolia bao gồm 85 quận kia. Tại nơi đây có những con người da vàng da đen với những mái tóc màu mắt khác nhau không hề được xem như những con người thật sự. Chiến tranh nổ ra căng thẳng giữa hai bên Cộng Hòa và Đế Quốc, những người lính tại quận 86 đổ máu bảo vệ những người dân Alba
             trong bức tường thành Grand Mur. Chiến thắng liên tục được đăng tải trên truyền thông tỏ rõ sức mạnh của Cộng Hòa.
            </p>  
            <div class="picture">
                <img src="https://otakugo.net/wp-content/uploads/2021/07/6be08546b285f75d_677f7d1e0b49a3d5_16856116248044644769722.jpg" width="550" height="450">
            </div>
            <p>Eighty-Six đặc tả một khung cảnh khói lửa tràn đầy chết chóc, nơi đây không có nhân nhượng, bởi kẻ mà những người lính 86 bị vứt bỏ kia phải chiến đấu còn không phải là con người. Những cỗ máy không người lái của Legion là ác quỷ không trái tim, không cảm xúc, chúng xé xác những người bị buộc phải chia ly khỏi gia đình, bị buộc phải ra chiến trường từ khi còn rất nhỏ. Người chết như rạ, tới lúc chết thì thứ họ nói chỉ còn vài chữ “Tôi không muốn chết”. Các cuộc chiến xảy ra liên tục tới mức gần như không có khoảng nghỉ, những lúc nghỉ ngơi hiếm hoi là khi họ có thể vây quần với nhau chê đồ ăn,
               chê những kẻ chỉ huy, bàn chút chuyện tình cảm, song lại không ai dám nói về tương lai.</p>
               <p>Eighty-Six, câu chuyện về một thế giới tương lai tàn khốc nhưng không có bất kì quái vật, zombie hay dịch bệnh nào ở đây cả. Ở thế giới của 86 chỉ có con người và lòng dạ của họ, cùng những cỗ máy được con người tạo ra để đem lại nỗi đau, cũng là để bảo vệ quê hương, đồng bào, niềm tin. Các nước liên minh với nhau chống lại một kẻ thù chung, nhưng rốt cuộc mục tiêu của Đế Quốc là gì? Câu chuyện vẫn còn rất dài, 
              Shin lẫn Lena, cùng nhiều những nhân vật khác sẽ phải vượt qua mâu thuẫn của bản thân và hướng về mục tiêu ngăn chặn chiến tranh.
        </p>
        <p>Tranh vẽ của novel rất đẹp, lâu rồi mình mới thấy design hợp gu như vậy, ngay cả mecha cũng được vẽ rất kỹ do designer nổi tiếng của các bộ như Aldnoah.zero, Code Geass thiết kế. Tuy đôi khi mình không hài lòng khi góc nhìn thay đổi liên tục,
           nhưng thiết nghĩ trong một bộ về chiến tranh mà lại không kể nhiều góc nhìn thì khó mà mô tả được sự phức tạp của nó về mặt suy nghĩ và chính trị.</p>
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