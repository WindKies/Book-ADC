<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Rừng Taiga</title>
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
            <h1>Review: Rừng Taiga </h1>
            <p>Nếu bạn là người yêu thích thể loại lãng mạn, đời thường, hay chỉ đơn giản là yêu thích ẩm thực và những miền đất mới mẻ, thì Rừng Taiga là một cuốn sách mà bạn không nên bỏ qua.</p>
            <div class="picture">
                <img src="https://salt.tikicdn.com/ts/tmp/0e/62/7b/02c7c45a05d4aa8972e14c8b2a872af9.jpg" width="600" height="400">
            </div>
            <p>
               Là một câu chuyện tình, nhưng dĩ nhiên Rừng Taiga không phải là một câu chuyện tình thanh xuân của các cô cậu học trò còn ngây thơ, trong sáng và đầy nhiệt huyết. Rừng Taiga không có những rung động đầu đời của tuổi mới lớn, không có những cảm xúc mãnh liệt của tuổi thanh xuân… Ở Rừng Taiga lại là một câu chuyện có phần thực tế hơn, trưởng thành hơn và… từ thời “Ông bà anh” hơn. Đó là một chuyện tình theo kiểu “cưới trước yêu sau”, “lửa gần rơm lâu ngày cũng bén”. Một tình cảm chậm rãi, nhẹ nhàng, không quá cao trào, không quá mãnh liệt, nhưng chứa đầy hơi ấm và sự thấu hiểu lẫn nhau của hai con người xa lạ đến với nhau vì hoàn cảnh của cuộc đời.
            </p>
            <p>
              Họ ở bên nhau không phải vì tình yêu, nhưng cũng không phải vì toan tính, họ ở bên nhau như tạo hóa đã phân định từ trước: có đất thì cây mới mọc, có nước thì cá mới sống, và chỉ khi có một gia đình êm ấm, thì con người ta mới thoát khỏi hai chữ “sinh tồn” trong khu rừng lạnh giá, đầy hiểm nguy mà sống một cuộc sống thật đúng nghĩa.
            </p>
            <div class="picture">
                <img src="https://salt.tikicdn.com/ts/tmp/9e/78/38/fdc05bcaf25a8bbbf30fbb893bb82cad.jpg" width="600" height="400">
            </div>

            <p>
            Câu chuyện tình cảm của Rừng Taiga là cả một tiến trình dài mang đến cho ta đầy đủ các cung bậc cảm xúc trong tình yêu. Họ bất hạnh, gặp gỡ nhau như một định mệnh, rồi họ bỡ ngỡ, bối rối, không thể thấu hiểu nhau, nhưng họ mong muốn được hiểu thêm về người kia, họ chia sẻ với nhau, học hỏi lẫn nhau, tự mình thay đổi, trưởng thành, nương tựa vào nhau, rồi nhận ra vị trí của người kia trong trái tim mình.
            </p>
            <div class="picture">
                <img src="https://bit.ly/3p47V0R" width="600" height="400">
            </div>
            <p>
            Ở đó, bạn được hiểu thêm về cuộc sống săn bắn của những người thợ săn xứ Amur, đó là cách họ săn gấu, bắt chồn, bẫy cáo, lột da… hay đơn giản chỉ là cách họ giao tiếp, trao đổi và chào đón lẫn nhau, những cảnh sinh hoạt thường ngày, hội chợ… Lẫn trong cuộc sống cơ cực đó, ta có thể thấy cuộc sống khó khăn nhưng vẫn đầy ấm áp của đôi vợ chồng trẻ, họ cùng nhau nấu ăn, làm việc nhà, trò chuyện… những khung cảnh thực sự sưởi ấm con tim giữa mùa đông lạnh giá ở Siberia.
            </p>
            <p>
            Trên bàn ăn của họ là những món ăn mang đậm nét Đông Âu của người Nga, những chiếc bánh mỳ lạ mắt, thơm ngon, vàng ruộm với súp và các tảng thịt hươu thơm phức. Lẫn vào đó còn là nét ẩm thực đầy Á Đông của những bộ lạc du mục người Mãn Châu, Nữ Chân. Những con cá của sông Amur, thịt gấu của rừng Taiga, hay là những cốc rượu vodka ấm nóng giữa trời đông buốt giá. Tất cả đều đem lại cho chúng ta một cảm giác mới mẻ về một miền đất, một nền văn hóa, và những con người, những món ăn kỳ lạ nhưng đầy hấp dẫn và quyền rũ.
            </p>
            
           
            <div class="picture">
                <img src="https://genk.mediacdn.vn/2019/8/22/img0742-1566446280326754747732.jpg" width="600" height="300">
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