<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Bố già</title>
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
            <h1>Review: Bố già  </h1>
            <p>Nếu bạn là người yêu thích những thể loại văn học về xã hội đen, về mafia thì không thể bỏ qua một tuyệt tác nổi tiếng của nhà văn Mario Puzo đó là tác phẩm Bố Già (The Godfather). Đây  là tác phẩm  thuộc hàng kinh điển, đã được chuyển thể thành bộ phim cùng tên và đạt được nhiều giải thưởng danh giá như Oscar, Grammy ,..  Hãy cùng chúng tôi tìm hiểu ngay sau đây xem “Bố già” co gì đặc sắc nhé.</p>
            <div class="picture">
                <img src="https://dkstatics-public.digikala.com/digikala-products/3312157.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
              Bố già là một trong những tác phẩm của Mario Puzo - một nhà văn, nhà biên kịch người Mỹ. Ông được biết đến với rất nhiều tác phẩm về Mafia như: Luật im lặng, Đất máu Sicily, Cha con Giáo hoàng, Ông trùm , Đấu trường u ám, Những kẻ điên rồ phải chết,……
            </p>
            <div class="picture">
                <img src="https://dkstatics-public.digikala.com/digikala-products/3312157.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Bố già ”
            </h2>
            <p>
              Nội dung của tác phẩm "Bố già" – The Godfather là câu chuyện kể về một gia đình Mafia gốc Ý, hoạt động trên đất Mỹ , được cai quản bởi một ông trùm Mafia to lớn, có thực lực mạnh nhất trong đội ngũ Mafia ở New York có tên là Vito Corleone. Vito Corleone  được sinh ra và lớn lên trong một gia đình có truyền thống là Mafia, tuy nhiên anh luôn cảm thấy bản thân mình không phù hợp với truyền thống xã hội đen của gia đình nữa vì đã mang trên mình sâu sắc tinh thần mỹ. Thay vì cuộc sống gian ác, bạo lực của xã hội đen thì Vito Corleone lại chọn một cách sống khác, vì vậy ông được mọi người kính trọng và mang ơn rất nhiều. Với những hành động bất hợp pháp của gia đình, anh luôn tìm mọi cach để trốn tránh và bỏ qua. Tuy nhiên về sau, khi sự việc mình chính bị hãm hại, anh mới tỉnh ngộ trước những pháp luật, công lý mà anh vẫn thường coi trọng.
            </p>
            <p>
              Thường là khi nhắc đến Mafia, xã hội đen thì nhiều người nghĩ ngay đến những người độc ác, xấu xa cùng sự đến chém giết, giết người, phi pháp. Nhưng không, đối với “Bố già” thì lại khác, cách tiếp cận của tác giả ở tiểu thuyết Bố Già lại theo một hướng tích cực hơn rât nhiều. Vì "Bố Già" hiểu được rằng, thực ra nhà nước lúc bấy giờ ban hành các luật lệ với mục đích là bảo vệ chính kẻ tạo ra nhà nước và tạo ra luật lệ đó chư không phải để bảo vệ những kẻ yếu, dân thường. Bố Già đã không chấp nhận đươc sự thật đó và không muốn sống trong một đất nước mà nhà nước đưa ra luật lệ là không bảo vệ nhân dân. Với bản lĩnh của một người đàn ông,  “Bố già “ đã tự tạo ra một thế giới khác để bản thân được làm những việc mình cho là đúng.
            </p>
            <p>
             Với ngòi bút nghệ thuật đặc sắc, bố cục câu chuyện hoàn hảo, câu từ đậm chất phóng khoáng cùng giọng văn rất đời thường, dí dỏm hài hước,  Mario Puzo đã mang đến cho người đọc một một tuyệt tác kỳ vĩ và hào hùng , một bức tranh đầy sinh động đến ngỡ ngàng, từ ngạc nhiên này đến ngạc nhiên khác. Tất cả những nhân vật trong câu chuyện, những chi tiết, câu thoại, diễn biến, câu chuyện đời, chuyện nghề của riêng từng nhân vật, đều được tác giả a khắc họa một cách hấp dẫn và đầy lôi cuốn. Điểm nổi bật là “Bố già” đã khắc họa được hình tượng và nhân cách của một chân dung vĩ đại đầy sắc nét và tinh tế đó chính là Bố già Vito Corleone –người đàn ông trụ cột trong gia đình, luôn sống hết mình vì tình cảm bạn bè, luôn sẵn sàng đối phó với những thế lực hiểm ác luôn tìm cách hạ gục ông.
            </p>
            <div class="picture">
                <img src="https://dkstatics-public.digikala.com/digikala-products/3312157.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80" width="600" height="400">
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