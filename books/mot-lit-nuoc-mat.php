<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Một lít nước mắt</title>
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
            <h1>Review: Một lít nước mắt </h1>
            <p>Một lít nước mắt của tác giả người Nhật Kito Aya, cuốn sách đầy cảm xúc này đã làm rung động hàng triệu trái tim, vực dậy hàng triệu con người đang có ý nghĩa chán nản với cuộc sống..</p>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-sach-mot-lit-nuoc-mat-1.jpg" width="600" height="400">
            </div>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
        Ở tuổi 15 Kito Aya đã phải đối diện với “Án tử của cuộc đời” đó là cô mắc phải căn bệnh thoái hóa dây thần kinh tiểu não (Spinocerebellar Atrophy). Từng ngày dần trôi qua căn bệnh một ngày trở nặng, sự sống ngày một vơi đi. Aya dần mất đi khả năng kiểm soát chính cơ thể mình, từ việc ngồi xe lăn cho đến lúc nằm liệt giường.
            </p>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-sach-mot-lit-nuoc-mat-1.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “một lít nước mắt”
            </h2>
            <p>
         Thanh xuân của Aya là một bức tranh tối màu, căn bệnh hiểm nghèo đã khiến cô mất đi các khả năng vận động cơ bản, tệ hơn là theo thời gian nó khiến Aya phải nằm liệt một chỗ. Đáng ra ở cái tuổi 15 cô phải được vui chơi thỏa thích, thực hiện những mộng mơ của tuổi trẻ nhưng cô lại phải đối diện với bệnh tật. May mắn rằng trong cuộc chiến ấy Aya không hề cô đơn, cô được mọi người ở phía sau ủng hộ đặc biệt là mẹ cô.
            </p>
              <p>
         “Mẹ ơi tại sao căn bệnh lại chọn con?”. Câu hỏi lấy đi bao nhiêu nước mắt của độc giả. Thật tệ, tại sao ông trời có thể chọn Aya một cô bé 15 tuổi với tâm hồn mộng mơ, cô còn bao nhiêu ước mơ đang dang dở chưa thể thực hiện. Có thể chúng ta đã quá quen thuộc với hình ảnh một cô thiếu nữ với mối tình đầu ngây thơ cùng với đó là những trải nghiệm khó quên của năm tháng rực rỡ mang tên “Thanh xuân” đáng tiếc đó không phải là thanh xuân của Aya mà thay vào đó những gì cô phải chịu đựng đó là từng ngày từng giờ đấu tranh với căn bệnh của mình. Nhưng không vì những bất công đó mà Aya nản lòng, đối diện với “Án tử của cuộc đời”Aya đã chiến đấu như một chiến binh thật sự. Có hạnh phúc, có giằng xé, có đau khổ, khi sự sống đang trôi dần đi, Aya vẫn chọn cách đối diện với tất cả. “Hãy sống, mình muốn hít thở thật sâu dưới bầu trời xanh” dù cho có chìm trong khó khăn cô vẫn dũng cảm chiến đấu, niềm khao khát được sống trong lòng cô vẫn chưa bao giờ dập tắt. Mặc cho hiện thực khắc nghiệt, Aya vẫn kiên trì viết nhật ký từng ngày cô luôn tin tưởng vào bản thân và không từ bỏ.
            </p>
         
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-sach-mot-lit-nuoc-mat-1.jpg" width="600" height="400">
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