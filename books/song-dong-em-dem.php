<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Sông Đông Êm Đềm</title>
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
            <h1>Review: Sông Đông êm đềm</h1>
            <p>Sông Đông êm đềm là tác phẩm giúp Sholokhov được tặng Giải Nobel văn học năm 1965 đồng thời cũng khiến tên tuổi của ông bị bôi nhọ, phỉ báng trong đau đớn đến tận lúc hơi thở đã hóa vào hư không vĩnh hằng. Nhưng giống như ai đó đã nói: văn chương là bầu sữa mẹ nuôi lớn thế giới. Có những tác phẩm sinh ra để hàng trăm thế kỉ sau giúp nhân loại nhận ra chân thân của chính mình trong một thế giới tự do hơn, không còn biên giới lãnh thổ, không còn thước đo thời gian căn lề từng tý, không còn những định kiến, trù dập bởi khuôn vàng thước ngọc của định giới nó phôi thai nữa. Nó được là nó, dẫu trắng, dẫu đen thậm chí biến dị thành xám bởi một sự phối kết quái dị nằm ngoài dự tính của đức chúa trời. Sông Đông êm đềm chính là một cuốn sách như thế.</p>
            <div class="picture">
                <img src="https://reviewsach.net/wp-content/uploads/2018/12/So%CC%82ng-%C4%90o%CC%82ng-E%CC%82m-%C4%90e%CC%82%CC%80m.jpg" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
       Cuốn sách miêu tả một giai đoạn lịch sử 10 năm từ 1912-1922 tập trung ở hai bờ sông Đông và một làng quê người Kozak ở ven sông đồng thời cũng khắc trọn vẹn 10 năm cuộc đời của nhân vật Gregori Melekhov.
            </p>
            <div class="picture">
                <img src="https://reviewsach.net/wp-content/uploads/2018/12/So%CC%82ng-%C4%90o%CC%82ng-E%CC%82m-%C4%90e%CC%82%CC%80m.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Sông Đông êm đềm”
            </h2>
            <p>
        Anh đem lòng yêu Aksinia, vợ người hàng xóm nhưng để ngăn cản mối quan hệ này phát triển khó thể cứu vãn, gia đình Melekhov đã dạn hỏi và cưới Natalia cho Gregori. Gregori và Aksinia cùng nhau bỏ đi biệt xứ làm thuê để lại Natalia tủi nhục, khuất nhục vì bị chồng mới cưới ruồng bỏ mà quyên sinh nhưng may mắn không chết ở phía bên kia bờ sông Đông. Sau đó, Gregori bị bắt buộc đi lính tham chiến vào Thế chiến I. Khi về phép, chàng phát hiện Aksinia vì quá cơ cực, nghèo đói, đứa con đầu lòng chết vì bệnh tật mà nàng đã dan díu với con trai chủ nhà. Gregori quay về với Natalia và sau hết nghỉ phép quay về quân ngũ, Natalia sinh đôi một trai, một gái. Sông Đông giống như một nhân chứng sống cho cuộc đời Gregori bất hạnh, vò võ vì cô đơn, hối hận, chán ghét tính chất vô nhân đạo của chiến tranh.
            </p>
              <p>
         Sau những mất mát về lòng tin, sự trong trắng của người phụ nữ trong thời kì chiến tranh, Gregori vẫn quay lại với Askinia khiến Natalia một lần nữa tuyệt vọng. Nàng tìm đến bà lang để bỏ đi giọt máu của hai người, nhưng do mất máu quá nhiều, nàng ra đi. Trải qua nhiều biến cố về chính trị, Gregori Melekhov bỏ trốn theo quân thổ phỉ đến khi hết đường trốn chạy, chàng ước mong mang Aksinia bỏ chạy thật xa vì mong muốn, khát cầu một cuộc sống bình yên nhưng Aksinia trúng đạn chết trong vòng tay Gregori trên đường trốn chạy. Tất cả Gregori còn lại trên mặt đất này chỉ là đứa con trai duy nhất.
            </p>
         
            <div class="picture">
                <img src="https://reviewsach.net/wp-content/uploads/2018/12/So%CC%82ng-%C4%90o%CC%82ng-E%CC%82m-%C4%90e%CC%82%CC%80m.jpg" width="600" height="400">
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