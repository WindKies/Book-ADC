<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Người Hỏa Tiễn</title>
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
            <h1>Review: Người Hỏa Tiễn </h1>
            <p>Trong lịch sử du hành vũ trụ, Apollo 11 là chuyến bay lần đầu đưa con người bước xuống, để lại dấu chân trên Mặt Trăng (ngày 21/7/1969). Hào quang thuộc về Apollo 11 nhưng Apollo 8 mới là sứ mệnh đột phá. Apollo 8 đã minh chứng cho khả năng bay lên Mặt Trăng của con người. Đó là sứ mệnh đưa những người đàn ông quay quanh mặt trăng và đưa họ trở lại trái đất an toàn.</p>
            <div class="picture">
                <img src="http://300b5338.vws.vegacdn.vn/image/img.news/0/0/0/7499.jpg?v=1&w=628&h=365&nocache=1" width="600" height="400">
            </div>
            <p>Trước một cuốn sách về chuyến du hành đầu tiên đưa con người tới Mặt Trăng, bạn chắc hẳn sẽ lo lắng rằng mình hiểu quá ít về chúng hay cảm thấy nhàm chán, bối rối bởi những thuật ngữ chuyên môn. Nhưng hãy yên tâm vì “Người Hỏa Tiễn” không chỉ có tên lửa, không gian và mặt trăng, nó hướng đến những câu chuyện hấp dẫn, bình dị và tử tế của những con người phi thường trước một sứ mệnh lớn lao. Hãy tưởng tượng rằng hôm nay là ngày 21 tháng 12 năm 1968 và việc phóng tên lửa sẽ diễn ra. Trong sứ mệnh Apollo 8, bạn có mặt trong chuyến bay vào không gian cùng với các phi hành gia - Frank Borman, James Lovell và William Anders.</p>
            <h2>Chuyến du hành táo bạo và mạo hiểm đưa con người tới Mặt Trăng</h2>
            <p>Cuốn sách tập trung chủ yếu vào Apollo 8, cả chuyến bay trước đó và sau đó của Apollo đều được đề cập nhưng ít sâu hơn, tuy nhiên chúng đã tác động đến cả lý trí và trái tim của những người phi hành gia.</p>
            <p>Trong lịch sử du hành vũ trụ, Apollo 11 là chuyến bay lần đầu đưa con người bước xuống, để lại dấu chân trên Mặt Trăng (ngày 21/7/1969). Hào quang thuộc về Apollo 11 nhưng Apollo 8 mới là sứ mệnh đột phá. Apollo 8 đã minh chứng cho khả năng bay lên Mặt Trăng của con người. Đó là sứ mệnh đưa những người đàn ông quay quanh mặt trăng và đưa họ trở lại trái đất an toàn. </p>
            <p>Tác giả Robert Kurson vẽ nên một bức tranh tổng thể về những sự kiện lịch sử Hoa Kỳ trong một năm đầy biến động: Cuộc chạy đua vào vũ trụ với Liên Xô, giấc mơ hạ cánh lên mặt trăng của John Kennedy, chiến tranh Việt Nam, các cuộc biểu tình đòi quyền dân sự, bạo loạn chủng tộc, biểu tình ở Chicago, bất ổn trong nước, vụ ám sát John Kennedy,...</p>
            <div class="picture">
                <img src="http://300b5338.vws.vegacdn.vn/image/img.media/4%20ETS/sach-nguoi-hoa-tien%202.jpg" width="600" height="400">
            </div>
            <p>Trong bối cảnh ấy, Apollo 8 là nước đi liều lĩnh và mạo hiểm. Mọi khâu từ huấn luyện, phân tích, tính toán, vận động chính trị được tức tốc tiến hành trong khoảng thời gian ngắn. Phi hành đoàn gồm ba phi hành gia: Frank Borman, Jim Lovell và Bill Anders.</p>
            <p>Tàu được đưa lên quỹ đạo bằng tên lửa đẩy Saturn V - tên lửa lớn nhất và mạnh nhất từng được chế tạo trong lịch sử. Với Apollo 8, đây là chuyến bay đầu tiên nhưng với Saturn V, đây đã là chuyến bay thứ 3 với các sứ mạng có sự tham gia của con người. </p>
            <p>Ngày phóng tàu được ấn định là 21 tháng 12 năm 1968 và hành trình sẽ kéo dài trong 6 ngày, đúng vào dịp Giáng sinh. 

            Ngày 21/12/1968, ba phi hành gia ngồi trong tàu vũ trụ, ở trên đỉnh một trong những cỗ máy mạnh nhất từng được chế tạo, chờ được phóng lên không trung.</p>

            <p>Từ đây, tác giả đã đưa người đọc vào một hành trình mạo hiểm, phiêu lưu, một cuộc chạy đua thực sự đến thời khắc cuối cùng với những trải nghiệm sống động, những khoảnh khắc sinh tử, những tình huống “khó đỡ” đã xảy ra: Khi Bormen uống một viên thuốc ngủ nhưng lại bị nôn mửa và tiêu chảy, hệ thống xử lý chất thải của tàu không thể đáp ứng kịp thời và kết quả là tất cả những gì trong ruột của Borman trôi lơ lửng trong cabin; Khi họ không thể phân biệt được ngôi sao nào trong hàng ngàn tinh thể hỗn tạp - cách tốt nhất để tái định hướng con tàu, những cú va chạm, biến động và chao đảo bất thình lình, những lần chuyển quỹ đạo, hồi quyển dưới góc hẹp khiến người đọc thót tim,...</p>
            
            <div class="picture">
                <img src="http://300b5338.vws.vegacdn.vn/image/img.media/4%20ETS/sach-nguoi-hoa-tien%204.jpg" width="600" height="400">
            </div>

            <p>Ngòi bút kịch tính của Kurson đã mang lại một trải nghiệm tuyệt vời. Chúng ta cảm giác như chính mình đã ở trong chuyến bay cùng các phi hành gia, chứng kiến những gì họ đã thấy, trải nghiệm những gì họ đã trải qua. Bạn không cần đi xem phim, chỉ cần ngồi xuống ghế và đọc sách là đã có những giây phút vô cùng hồi hộp, nghẹt thở hay vỡ òa cùng với tác giả. </p>
            <h2>Kết luận</h2>
            <p>Tác phẩm “Người Hỏa Tiễn” dõi theo hành trình của những người đàn ông mạnh mẽ, dũng cảm với lý tưởng cốt lõi sâu sắc trong những cuộc thám hiểm, tìm kiếm vĩ đại. Có thể thấy ngòi bút vô cùng kịch tính, ly kỳ, giàu cảm xúc và tài năng tường thuật của Robert Kurson là điều quan trọng làm nên thành công vang dội cho hai cuốn sách bán chạy nhất của New York Times</p>
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