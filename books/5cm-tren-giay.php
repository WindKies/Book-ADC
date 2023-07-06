<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: 5cm trên giây</title>
    <link rel="stylesheet" type="text/css" href="css/books.css">
</head>
<body>
    <div class="Container">
    <div class="head">
      <ul class="logo">
        <a href="http://localhost:8080/BB/">
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
            <h1>Review: 5cm trên giây </h1>
            <p>Văn học Nhật Bản luôn mang đến những cảm xúc mới lạ. “5 centimet trên giây” cũng vậy, cuốn sách với những câu từ nhẹ nhàng như cánh hoa anh đào rơi, dành cho những trái tim đã và đang trải qua từng cung bậc của tình yêu.
</p>
            <div class="picture">
                <img src="https://vnwriter.net/wp-content/uploads/2019/07/sach-cua-Shinkai-Makoto-780x405.jpg" width="600" height="400">
            </div>
            <h2>
            5 Centimet Trên Giây: Không chỉ là vận tốc của cánh hoa rơi
            </h2>
            <p>
                Cảnh Thiên là tác giả của cuốn sách “Đừng lựa chọn an nhàn khi còn trẻ”, thông tin của tác cũng không được tiết lộ nhiều, các độc giả chỉ biết đây là một tác giả người Trung Quốc, từng nhiều năm làm vị trí biên tập và truyền thông, cung Sư Tử, thích văn chương, mỹ thực và những niềm hạnh phúc nhỏ bé trong cuộc sống. Sách tiêu biểu của tác giả Cảnh Thiên: Phụ nữ cần độc lập về tài chính, Đừng an nhàn khi còn trẻ,…
            </p>
            <h2>
                 Giới thiệu tác giả
            </h2>
            <p>
            Shinkai Makoto – “cha đẻ” của hàng loạt tiểu thuyết lãng mạn Nhật Bản. Ông được biết đến là một tiểu thuyết gia, nhà làm phim, đạo diễn, nhà thiết kế đồ họa, họa sĩ.
Ông sinh ngày 9/2 năm 1973 tại thị trấn Komi, quận Minamisaku, Nagano, Nhật Bản. Makoto có cảm hứng nghệ thuật ngay từ những năm cấp 2. Năm 2001, ông chính thức lên vai trò đạo diễn với bộ phim Tiếng Gọi Từ Các Vì Sao. Bộ phim đã đưa tên tuổi của Shinkai Makoto lên một tầm mới trong đại chúng Nhật Bản, khởi đầu cho hàng loạt các bộ Anime thành công vang dội như: 5cm/s, Khu Vườn Ngôn Từ, Your Name, Đứa Con Của Thời Tiết,… Trong đó, “Your Name” chính là bộ phim Anime có doanh thu toàn cầu cao nhất mọi thời đại.
Bên cạnh làm phim, Shinkai Makoto cũng viết những tác phẩm của mình thành những bộ tiểu thuyết lãng mạn. Và không ngoài dự đoán đó cũng là những siêu phẩm “Best Seller” toàn Châu Á.
Ông có hàng loạt các giải thưởng nổi tiếng, trong đó phải kể đến Đạo diễn xuất sắc nhất, Đạo diễn của năm, Đạo diễn hoạt hình xuất sắc nhất.
            </p>
            <div class="picture">
                <img src="https://bloganchoi.com/wp-content/uploads/2020/02/review-5-centimet-tren-giay-0.jpg" width="600" height="400">
            </div>
            <h2>
                 Nội dung chính của cuốn sách 5 Centimet Trên Giây
            </h2>
            <p>
            5 Centimet Trên Giây là câu chuyện về Tono Takaki và Shinohara Akari. Họ biết nhau từ thuở còn học tiểu học, thân thiết như hình với bóng. Giống những đứa trẻ con vô lo vô nghĩ, họ kể cho nhau nghe mọi chuyện từ chân trời dưới bể. Dường như không có chuyện gì có thể giấu kín, ngoại trừ cảm xúc tình cảm đang dần nảy nở trong cả hai. 
            </p>
            <p>
            Lên trung học, Akari chuyển đi, đến một nơi rất xa cậu bạn thân. Ít gặp mặt, ít thư từ, mối liên hệ dần chìm vào quên lãng. Cho đến ngày Takaki quyết định thực hiện chuyến đi gian nan một mình để đến gặp cô.
            </p>
            <div class="picture">
                <img src="https://www.dungplus.com/wp-content/uploads/2019/09/5-centimet-tren-giay.jpg" width="600" height="400">
            </div>
            <p>
            Takaki thay đổi chuyến tàu liên tục vì bão tuyết, quãng đường dài khiến cậu đến sân ga cuối cùng vào lúc nửa đêm. Cũng trong đêm vắng vẻ, không còn một hành khách, cô bé Akari vẫn ngồi đợi bạn mình với hộp cơm đã dần nguội lạnh.
            </p>
            <p>
            Câu chuyện tiếp đó là quá trình các nhân vật lớn lên với dần những thay đổi trưởng thành. Nhưng cảm xúc về tình đầu vẫn còn mãi, chưa bao giờ nguôi ngoai trong sâu thẳm trái tim mỗi người. Giờ đây, khi Takaki biết đáp án mà năm xưa cô bé Akari hỏi: “Cậu có biết 5cm/s là gì không?”, thì điều đó chẳng còn ý nghĩa gì nữa.
            </p>
            <p>
            Nếu đã từng yêu, trái tim bạn hẳn sẽ rung động vì những giây phút nhẹ nhàng trong truyện. Lời khuyên là nếu đọc truyện xong thì hãy xem phim, vì bộ phim sẽ khiến cảm xúc bạn được trọn vẹn hơn với những thước phim sâu lắng và cả một khung trời anh hoa đào lãng đãng nơi “Xứ sở Mặt Trời mọc”.
            </p>
            <div class="picture">
                <img src="https://lh3.googleusercontent.com/proxy/gHtBnGDSKxVAilw5ScDXFSlQzINglnFJYx5RSlfr5u946vMNcMEiz5mfeBznkxji4nwNyJZP3llCju86Ag" width="600" height="300">
            </div>
            <h2>Cảm nhận từ độc giả về tiểu thuyết 5 Centimet Trên Giây</h2>
            <p>Gấp cuốn sách lại, hẳn bạn đọc sẽ có những suy nghĩ khác nhau: tiếc nuối có, mãn nguyện có, và rồi nhận ra rằng chính mình đã từng có thời lạc lối và đắm chìm đến thế. Cuốn sách như dội chiếu tâm can của những ai đã và đang ngóng chờ tình yêu rồi 5 Centimet Trên Giây khiến cho họ ngộ ra một điều: trong tình yêu phải có chữ duyên, vì nếu lỡ lạc nhau một giây thôi thì đó là cả một đời mong mỏi, ngóng trông và nuối tiếc.
</p>
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