<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Luật Tâm thức</title>
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
            <h1>Review: Luật Tâm thức </h1>
            <p>Luật tâm thức – cuốn sách giải đáp mọi thắc mắc về ma trận vũ trụ.

              Trước khi cầm cuốn sách này trên tay, mình không hề kỳ vọng gì nhiều mà chỉ nghĩ đây có thể lại là một cuốn sách “kể lại những trải nghiệm tâm linh” do tác giả được nghe từ người khác hoặc tự mình chiêm nghiệm.
 
               Tuy nhiên, khi nhận được sách và bắt đầu đọc sơ lược, mình nhận ra rằng “Luật tâm thức” của tác giả Ngô Sa Thạch thực sự là một công trình nghiên cứu đồ sộ với lượng kiến thức lớn về vũ trụ, tham khảo qua nhiều nguồn, viện dẫn nhiều trường phái lý thuyết, kết hợp các câu chuyện thần thoại, tôn giáo, kinh dịch,… và những hình ảnh khoa học khác nhau.
            .</p>
            <div class="picture">
                <img src="https://salt.tikicdn.com/ts/product/66/ce/36/2a1e1802f19a374d0c6e7a573f744339.jpg" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
          Cuốn sách này nhắc đến nhiều khái niệm như “năng lượng”, “ý thức”, “tần số rung động”, … dưới góc nhìn tương đối khác với triết học hay khoa học thường thức lâu nay chúng ta vẫn biết, từ đó khái quát thành những “luật vũ trụ”, lý giải cơ thể và hoạt động tâm trí, đưa ra bài học cuộc đời – bánh đà nghiệp quả và thậm chí là quá trinh tiến hóa của tâm thức.

            </p>
            <div class="picture">
                <img src="https://salt.tikicdn.com/ts/product/66/ce/36/2a1e1802f19a374d0c6e7a573f744339.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Luật Tâm thức”
            </h2>
            <p>
           Luật tâm thức cũng hướng đến lý giải những hiện tượng bất thường diễn ra trong thời gian gần đây như những hiện tượng khí hậu thất thường, dịch bệnh, thiên tai… thông qua sự thay đổi của tần số rung, bởi vậy những bài học cuộc đời, nghiệp quả của mỗi người cũng đến nhanh hơn…

            </p>
            <p>
            Với khoa học chỉ giải thích được những gì có thể nhìn thấy, còn những cái k thể giải thích được thì hãy đọc Luật tâm thức để có kiến thức và nhìn nhận mới mẻ hơn…
           – Năng lượng và tần số rung động, giải thích các hiện tượng tâm linh
            – Sách nói về con người, tổ hợp thân – tâm – trí, nghiệp quả và sự tiến hoá của tâm thức, mỗi con người có số mệnh sẵn k? Chúng ta đi về đâu khi chết?
            – Thay đổi cuộc sống bằng thay đổi tâm thức, hiểu đúng về các quy luật vũ trụ để thu hút năng lượng cải thiện cuộc sống
           – Dịch bệnh thiên tai có phải lời cảnh báo của tự nhiên đến con người
            </p>
       
            <div class="picture">
                <img src="https://salt.tikicdn.com/ts/product/66/ce/36/2a1e1802f19a374d0c6e7a573f744339.jpg" width="600" height="400">
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