<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Tỷ phú bán giày</title>
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
            <h1>Review: Tỷ phú bán giày </h1>
            <p>Tỷ Phú Bán Giày không phải là một cuốn sách dạy cách làm giàu tuần tự theo các bước 1 – 2 – 3,… cũng không hẳn là một cuốn sách chỉ dẫn bí quyết kinh doanh hay nghệ thuật quản lý. Là hành trình tìm ra chân lý của Hạnh phúc, Đam mê và Lợi nhuận, Tỷ Phú Bán Giày kể câu chuyện về thành công và thất bại của tác giả từ những thương vụ kinh doanh được khởi nghiệp từ khi 9 tuổi. Những trang trại giun đất, làm cúc áo thủ công, bán pizza ở Harvard,… đã trở thành nền móng cho một LinkExchange và sau này là Zappos lừng danh.</p>
            <div class="picture">
                <img src="https://sachnoi.net/wp-content/uploads/2021/10/26-678x381.png" width="600" height="400">
            </div>
            <p>
               Với Tỷ Phú Bán Giày, người đọc sẽ nhận được cảm hứng, nhiệt tình và cả một chút điên rồ cho những ý tưởng kinh doanh mà nghe qua tưởng như rất liều mạng. Nhưng với Zappos, Tony Hsieh đã tạo dựng được một thương hiệu về “văn hóa công ty” – chìa khóa thành công để theo đuổi một môi trường làm việc năng động và những dịch vụ xuất sắc.
            </p>
            <p>Là cuốn sách bán chạy nhất trên trang Amazon.com: xếp thứ 1 trong các sách về Dịch vụ khách hàng; xếp thứ 5 trong các sách về Marketing và Bán hàng; và xếp thứ 7 trong các sách về Quản lý.</p>
            <p>Cuốn sách là một câu chuyện về một doanh nghiệp thành công, trong đó, Tony Hseih chia sẻ những bài học kinh doanh khác nhau mà ông đã học được trong cuộc đời, từ một quầy bán nước chanh và cửa hàng bán pizza cho tới LinkExchange, Zappos.</p>
            <p>Hsieh – CEO của Zappos đã trưởng thành từ một cậu sinh viên làm kinh doanh của trường Harvard non nớt thành nhà sáng lập của một thương hiệu cực kỳ lớn mạnh sau những năm tháng làm việc như một kẻ lập dị về lĩnh vực dot com và đã có những lúc tưởng như khánh kiệt và phải bán hết các tài sản mà anh có để có vốn hoạt động. Sau khi bán công ty mạng LinkExchange cho Yahoo! vào năm 1999 với 265 triệu đô la, Heish đã tham gia sáng lập Zappos và giúp công ty này đạt được tăng trưởng ngoạn mục, với doanh thu hơn 1 tỉ đô la.</p>
            <p>Tỉ phú bán giày – Câu chuyện về công ty Zappos.com được Amazon mua lại với giá 1.2 tỉ đô (Delivering Happiness) là một câu chuyện về một doanh nghiệp thành công, trong đó, Tony Hseih chia sẻ những bài học kinh doanh khác nhau mà ông đã học được trong cuộc đời, từ một quầy bán nước chanh và cửa hàng bán pizza cho tới LinkExchange, Zappos…Ông cũng đã lý giải việc tập trung vào văn hoá doanh nghiệp có thể dẫn tới những thành công không thể ngờ như thế nào: khiến dịch vụ khách hàng trở thành nhiệm vụ của toàn công ty, không phải chỉ một bộ phận; tập trung vào văn hoá doanh nghiệp như ưu tiên số 1; áp dụng nghiên cứu từ khoa học về hạnh phúc vào việc điều hành doanh nghiệp; giúp nhân viên trưởng thành trong cuộc sống và sự nghiệp.</p>

            <h2>Kết luận</h2>
            <p>“Cuốn sách này thật đáng kinh ngạc. Cách mà Tony giúp doanh thu của Zappos tăng trưởng đến 1 tỉ đô la trong 10 năm mới chỉ là sự khởi đầu. Từ việc gây vốn tới việc tìm kiếm được hạnh phúc, từ các thư từ thực tế tới các checklists đều mang đúng nghĩa của nó. Đặc biệt cá nhân và đặc thiết thực.”</p>
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