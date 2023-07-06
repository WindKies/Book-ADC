<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Tuổi 20 yêu dấu</title>
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
            <h1>Review: Tuổi 20 yêu dấu</h1>
            <p>Một ngày gió lạnh đầu đông, tôi đọc lại  Tuổi hai mươi yêu dấu như tìm về những kỷ niệm của cái thời sinh viên. Tôi biết câu chuyện qua một người anh học trên một khóa, và thấy ông anh có vẻ rất tâm đắc. Thật tiếc là truyện chưa được xuất bản thành sách ở Việt Nam, vì cho dù có thể đọc miễn phí ở đây, nhưng tôi vẫn thích cái cảm giác cầm trên tay quyển sách hơn. Trong phần chú giải của mình, tác giả cũng đã có những lời chân thành về tựa truyện như sau:.</p>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/2019/10/30/16/tuoi-20-yeu-dau_600x800.jpg" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
       Tuổi hai mươi yêu dấu”  là một tựa đề có phần … cải lương. Tác giả đã có ý định đặt tên cho nó là “Khuê” (lấy tên nhân vật chính), hoặc “Tuột xích”, hoặc “Bút ký phiêu lưu của một sinh viên đại học”, hoặc “Bài ca tuổi trẻ”… Suy nghĩ kỹ, tác giả lấy tên “Tuổi hai mươi yêu dấu”  là muốn nhằm vào đối tượng độc giả thanh niên, những độc giả mà tác giả vẫn kính trọng và luôn yêu mến.
            </p>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/2019/10/30/16/tuoi-20-yeu-dau_600x800.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “tuổi 20 yêu dấu”
            </h2>
            <p>
        Trong Tuổi hai mươi yêu dấu, tác giả đã không ngần ngại viết rất thẳng thắn những quan điểm về xã hội, về lối sống đương thời. Không chỉ vẽ một bức tranh về giới trẻ ở Hà Nội bằng ngôn từ, ông còn đưa vào nhiều hình ảnh các nhân vật với cá tính hết sức khác nhau. Cuộc sống của Khuê được giới thiệu từ lúc cậu ta còn là một học sinh trung học của một trường dân lập theo kiểu “gia đình quản lý” hết sức đặc trưng cho đến khi cậu vào trường đại học với những bài học chính trị dài dằng dặc. Khuê “đứt gánh giữa đường” với sự nghiệp đèn sách dở dang, sa đà vào ăn chơi, nghiện ngập ma túy với Thanh nhạn để rồi sau này phải đi cai nghiện trên một hòn đảo ở Cát Bà.
            </p>
              <p>
         Giới thanh niên, những nhân vật trung tâm của truyện hiện lên với nhiều phong cách. Có người tốt bụng, trong trắng như Huyền – cô sinh viên trường Y, có người tập trung vào học hành như Dung cận, có người tập tọng ăn chơi đến nỗi gặp nạn như Hải Anh, cũng có những người thuộc vào dạng anh chị giang hồ như Thanh nhạn, Thức Kinh Kông. Tuy nhiên, cũng không thể không kể đến những con người vẫn còn lòng nhân hậu  khi họ có thể là một cô gái giang hồ như Hương. Tác giả không bỏ qua những điều tốt xen kẽ với những thói hư tật xấu của thanh niên trong xã hội, kể cả khi dưới con mắt của nhân vật chính thì “thời đại của tôi thật là một thời khốn nạn!” đi chăng nữa. Những cái chết của các thanh niên cũng mang ý nghĩa khác nhau. Cùng là chết, nhưng Thanh nhạn, Quyền Lỳ chết vì sốc ma túy trong khi Huyền mờ, cô gái ngoan đạo chết vì người ta tiêm nhầm thuốc sau khi cô dẫm phải mảnh thủy tinh lúc đi tình nguyện. Những cám dỗ cùng với sự vô tâm của người đời luôn luôn là bước ngoặt không thể lường trước đối với nhiều thanh niên trẻ tuổi.  Ngoài ra, chân dung của những người đạo mạo trong xã hội  cũng được khắc họa hết sức cụ thể, mà rõ nhất có lẽ là ở chương 16 – Bệnh viện tình thương với hình tượng các bác sĩ trong thời hiện đại.
            </p>
         
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/2019/10/30/16/tuoi-20-yeu-dau_600x800.jpg" width="600" height="400">
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