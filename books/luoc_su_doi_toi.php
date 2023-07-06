<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Lược sử đời tôi</title>
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
            <h1>Review: Lược sử đời tôi </h1>
            <p>Stephen Hawking đã khiến độc giả trên khắp thế giới phải sửng sốt bởi loạt sách rất được yêu thích về chủ đề khám phá những bí ẩn của vũ trụ. Giờ đây, có lẽ là lần đầu tiên nhà vũ trụ học thông thái nhất trong thời đại của chúng ta đang nhìn lại cuộc đời mình cũng như quá trình tiến bộ về tư duy khoa học của bản thân.</p>
           <div class="picture">
                <img src="https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/n/x/nxbtrestoryfull_20532015_045330.jpg" width="600" height="400">
            </div>
            <h2>
                1. Giới thiệu tác giả
            </h2>
            <p>
               Stephen William Hawking CH CBE FRS FRSA là một nhà vật lý lý thuyết, nhà vũ trụ học và tác giả người Anh, từng là giám đốc nghiên cứu tại Trung tâm Vũ trụ học lý thuyết ở Đại học Cambridge vào thời điểm ông qua đời. Ông cũng là Giáo sư Toán học Lucasian tại Đại học Cambridge từ năm 1979 đến năm 2009.
            </p>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
               Tác phẩm Lược Sử Đời Tôi thuật lại chặng đường gần như không tưởng của Stephen Hawking, từ thời niên thiếu ở London sau chiến tranh cho đến giai đoạn ông trở nên nổi tiếng trên khắp thế giới và được ca ngợi. Với một lượng lớn hình ảnh chưa được công bố cùng lời chú thích ngắn gọn, hóm hỉnh và chân thật, Lược Sử Đời Tôi đã đưa độc giả đến với một Stephen Hawking được nói đến rất ít trong những cuốn sách trước đây: một cậu học sinh luôn tọc mạch được các bạn cùng lớp đặt cho biệt danh Einstein; một tay cá cược khi đã từng đánh cược với một đồng nghiệp về sự tồn tại của một lỗ đen đặc biệt, và một người cha, người chồng trẻ đang đấu tranh để có được một vị trí trong giới vật lý và vũ trụ học.
            </p>
            <div class="picture">
                <img src="https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/n/x/nxbtrestoryfull_20532015_045330.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Lược sử đời tôi”
            </h2>
            <p>
                quyển sách này khá mỏng, được chính tác giả viết với phong cách rất bình thản. cuộc đời của Stephen Hawking thật sự là vĩ đại.
                một quyển sách tạo động lực mặc dù cách viết thì chỉ muốn kể về lược sử của tác giả. nhẹ nhàng, ngắn gọn cho những độc giả biết thêm về ông..
            </p>
            <p>
                từ gia đình, hôn nhân, sự nghiệp và quan trọng là nói về chủ đề mà suốt cuộc đời tác giả theo đuổi: vũ trụ. để cho những người ngoại đạo ko biết gì về thiên văn học hay vũ trụ hiểu mang máng thôi.
                một thế giới diệu kì.
                khi thấy mình thật là bé nhỏ, chỉ là hạt bụi bé xíu lơ lửng trong vũ trụ và thiên hà này.
                một con người vô cùng đáng khâm phục, chứng minh được rằng ko gì là ko thể. ông đã sống thật trọn vẹn khi gần như từ bỏ mọi kì vọng từ năm 21 tuổi vì bị bệnh teo cơ. ông đã sống một cuộc đời hạnh phúc với tình yêu thương và niềm đam mê vật lý và với mong mỏi mọi người có thể biết nhiều hơn về vũ trụ. vũ trụ đến từ đâu?...
            </p>
            <div class="picture">
                <img src="https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/n/x/nxbtrestoryfull_20532015_045330.jpg" width="600" height="400">
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