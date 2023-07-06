<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Nhật ký Anne Frank </title>
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
            <h1>Review: Nhật ký Anne Frank </h1>
            <p>“Xuyên suốt dòng chảy lịch sử, đã có nhiều người nói đến nhân phẩm vào những thời điểm con người gánh chịu nhiều nỗi thống khổ và mất mát nhất, nhưng không có tiếng nói nào có sức thuyết phục bằng tiếng nói của Anne Frank. Trái tim nhân văn, ngập tràn niềm hy vọng của cô gái nhỏ tựa như ‘sự thanh tẩy’ đến những kẻ đang bị đám mây của quyền lực và độc ác che phủ…”</p>
            <div class="picture">
                <img src="https://chiasemoi.com/wp-content/uploads/2020/04/sach-dung-lua-chon-an-nhan-khi-con-tre.jpg" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
              Nhật ký Anne Frank- Như tên gọi, đây là cuốn nhật ký của cô bé Anne Frank- người được muôn đời ví như một thiên thần Do Thái. Phải sống chui lủi nơi nhà Phụ bí mật cùng gia đình, lẩn trốn khỏi nanh vuốt của Hitler, cô bé Anne đã trút hết những tâm tư, những mẩu chuyện mỗi ngày ở nơi cô sống, nâng niu chắt chiu cuốn nhật ký như một người bạn tâm giao. “Nhật Ký Anne Frank” không chỉ là những trang giấy của một cô nhóc 14 tuổi đơn thuần, mà nó vun đầy những giá trị lịch sử đích thực, nhân cách con người và niềm tin lấp lóe như ngọn nến trong đêm.
            </p>
            <div class="picture">
                <img src="https://chiasehay.net/wp-content/uploads/2020/03/dung-lua-chon-an-nhan-khi-con-tre.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Nhật ký Anne Frank”
            </h2>
            <p>
               “Tớ không nghĩ lời khuyên của mẹ có thể đúng được, bởi lẽ nếu ta là một trong những người phải gánh chịu đau khổ thì ta sẽ phải làm sao? Ta sẽ hoàn toàn bất lực. Trái lại, cái đẹp vẫn còn, ngay cả ở trong hoàn cảnh bất hạnh. Nếu ta cứ cố tìm kiếm nó, ta sẽ càng khám phá ra thêm nhiều điều hạnh phúc và lấy lại sự cân bằng. Một người hạnh phúc sẽ làm cho những người khác hạnh phúc lây; một người can đảm và có đức tin sẽ không bao giờ chết trong đau khổ…”
            </p>
            <p>
               Dù trong nghịch cảnh, thế nhưng hy vọng và tiếng cười không bao giờ tắt. Những người chu cấp cho gia đình Frank như là sứ giả của nụ cười vậy. Họ không quản mệt nhọc, không quản gian lao và chẳng hề e dè lấy Thần Chết rình rập từng phút, họ vẫn cố gắng cứu sống đồng loại mình. Những giây phút ngắn ngủi được trò chuyện với nhau, những ánh mắt sáng rỡ khi giạ khoai tây dần được lấp đầy và những giờ học yên tĩnh, tất cả vẫn tiếp diễn trong khu nhà Phụ, vẫn kiên cường bền bỉ mỗi ngày, chống lại nỗi sợ hãi cô hồn đang bao phủ nơi đất Đức.

               “Đó là một điều mà chúng tớ không bao giờ được quên; trong lúc những người khác thể hiện sự anh dũng của mình trên chiến trường hoặc trong cuộc chiến chống lại quân Đức thì mỗi ngày, những người  giúp đỡ chúng tớ lại chứng tỏ lòng dũng cảm ấy bằng tinh thần lạc quan và tình cảm yêu thương”.

                Ẩn sâu trong đó, qua những lời kể thoáng qua của Anne, đâu đó có những người dân lương thiện đã bằng lòng che chở cho những gia đình Do Thái đang trốn chạy, họ hiên ngang bảo vệ lấy đồng loại của mình khỏi lính Đức- những con quỷ trong bộ lốt người!
            </p>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-sach-dung-lua-chon-an-nhan-khi-con-tre-2.jpg" width="600" height="400">
            </div>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-dung-lua-chon-an-nhan-khi-con-tre-2.jpg" width="600" height="300">
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
                <span>Bắt đầu từ 1 góc nhỏ trong một quán café nhỏ với những phiên chợ nhỏ xíu nhưng luôn nhận được sự ủng hộ nhiệt tình của mọi người. Nay, Góc Sách 		đã phát triển hơn, độc lập hơn và phong phú đa dạng hơn về các đầu sách để đáp lại tình cảm đáng mến của mọi người. Ngoài sách cũ và một số quyển đã 		hết trên thị trường, Góc Sách còn có thêm nhiều đầu sách mới từ rất nhiều nhà phát hành khác để phục vụ thất tốt cho bạn đọc.

		Mong rằng các bạn sẽ tiếp tụ đồng hành với Góc Sách - The Book Corner trong những chặng đường kế tiếp vì giữa chúng ta luôn có một người bạn chung là 		"Sách".</span>
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