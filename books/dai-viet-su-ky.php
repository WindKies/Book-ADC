<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Đại việt sử ký Toàn thư</title>
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
            <h1>Review: Đại việt sử ký Toàn thư</h1>
            <p>Đại Việt Sử Ký Toàn Thư” là một bộ sử toàn diện nhất đến thời điểm này của chúng ta. Tác phẩm này là nên đọc với bất kỳ ai. Có am hiểu lịch sử chúng ta mới có thể biết quý trọng và thêm yêu đất nước ta. Cuốn sách khái quát toàn bộ lịch sử Việt Nam từ thời Hồng Bàng tới thời cận đại. Tuy nhiên cuốn sách này mới đọc sẽ hơi khó chịu vì cách hành văn của các sử gia thời xưa khá lạ so với văn phong hiện tại của chúng ta dẫn đến một chút khó hiểu. Sách khá nặng và dày, chắc hẳn muốn đọc hiểu hết và nghiên cứu chuyên sâu về nó phải mất khá nhiều thời gian.
            .</p>
            <div class="picture">
                <img src="https://sachxua.vn/wp-content/uploads/2020/02/dai-viet-su-ky-toan-thu.png" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
          Những ai muốn tìm hiểu về xã hội nước ta từ thời Hậu Lê trở về trước thì không thể bỏ qua cuốn sách quý báu này. Không phân biệt lứa tuổi, không phân biệt giới tính, không phân biệt ngành nghề,… đều có thể tiếp cận nội dung của cuốn sách này. Bởi vì, nó ra đời là đáp ứng nhu cầu tìm hiểu của mọi người. Chẳng hạn như đối với học sinh, cuốn sách mang lại những kiến thức cơ bản. Đối với sinh viên chuyên nghành, nhà nghiên cứu thì cuốn sách vừa lại kiến thức cơ bản, vừa mang lại giá trị sử liệu. Đối với những nhà văn, thì cuốn sách mang lại hình thức trình bày, bộc lộ cảm xúc đối với nhân vật lịch sử theo lối văn chương.

            </p>
            <div class="picture">
                <img src="https://sachxua.vn/wp-content/uploads/2020/02/dai-viet-su-ky-toan-thu.png" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Đại việt sử ký toàn thư”
            </h2>
            <p>
          Cuốn sách Đại Việt sử ký toàn thư là tác phẩm kinh điển, công trình biên soạn mang tính chất sử học ra đời và hoàn thiện suốt thời Hậu Lê với tổng thời gian hơn 300 năm. Tác giả của công trình là Ngô Sĩ Liên và các sử gia tiếp nối sau đó. Những sử gia này đã kế thừa những giá trị, nội dung từ Đại Việt Sử Ký của Lê Văn Hưu (Quốc sử đàu tiên ở thời Trần) và bộ Sử Ký tục biên của Phan Phu Tiên (cuốn sử đầu thời Lê). Từ việc kế thừa, chỉnh lí các sự kiện từ thời Triệu Vũ Đế đến khi nhà Minh rút về nước, thì trong vòng 300 năm, bộ Đại Việt Sử Ký Toàn Thư đã được các sử gia triều Hậu Lê viết tiếp kỉ Hồng Bàng và từ đầu thời Lê đến tận năm 1765. Cuốn sách Đại Việt sử ký toàn thư được viết theo lối biên niên. Như ở phần đầu sách đã nói lên lối viết của tác giả, “cũng bắt chước lối biên niên của Mã sử (tức Sử Ký của Tư Mã Thiên), nhưng thực chắp vá chẳng ra sao, cũng học phép tị sự của Lân kinh (tức Xuân Thu của Khổng Tử), đâu dám cẩn nghiêm mà sánh kịp”.
            </p>
            <p>
            Về mặt chính trị, bộ sử đã cung cấp cho chúng ta hiểu thêm về bộ máy tổ chức, những biểu dâng,… của các triều đại, cho cuối thời Hậu Lê. Như thời Lý vào năm 1028, “Đặt 10 vệ điền tiền cấm quân: 1. Quảng Thánh – 2. Quảng Vũ – 3. Ngự long 0 4. Bổng nhật – 5. Trừng hải. Mười vệ đều chia làm tả hữu trực đi quanh để bảo vệ bên trong cấm thành, cộng là 10 vệ”. Đó là việc tổ chức quân đội dưới thời Lý, các đời khác cũng tương ứng như vậy, cũng thay đổi và cũng được sử sách ghi lại rõ ràng. Bên cạnh đó, có nội dung bàn về các chức quan triều đình như “Cho Lương Nhậm Văn làm thái sư, Ngô Thượng Đinh làm thái phó, Đào Xử Trung làm thái bảo, Lý Đạo Kỷ làm tả khu mật,…”. Vậy là có chức Thái sư, Thái phó, Thái Bảo, Tả khu mật. Cũng có nội dung như “Mùa hạ, tháng 5, ngày 12, vua cùng các đại thần bàn định việc nước, về quan viên các lộ, trấn và quan trấn thủ các nơi quan yếu, cùng là luật lệ kiện tụng, chức tước chế lệ. Tháng 6, chỉ huy cho các đại thần khảo xét các quan trong ngoài; nhất đẳng là những người có văn võ tài cán nhanh nhẹn; nhị đẳng là những người biết chữ, tài cán nhanh nhẹn; tam đẳng là những người giỏi viết tinh, viết thảo, viết toán, ngoài ra không vào đẳng nào, kê reeng một hạng”.
            </p>
       
            <div class="picture">
                <img src="https://sachxua.vn/wp-content/uploads/2020/02/dai-viet-su-ky-toan-thu.png" width="600" height="400">
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