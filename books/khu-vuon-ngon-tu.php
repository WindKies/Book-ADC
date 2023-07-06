<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Khu vườn ngôn từ </title>
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
            <h1>Review: Khu vườn ngôn từ </h1>
            <p>Khu vườn nơi tôi gặp em, nơi thoáng vài câu chữ, nơi đong đầy tâm tư, nơi rả rích chút mưa, nơi trọn vẹn một câu chuyện xa xưa hơn cả tình yêu.
               Từ điển Nhật Bản cổ xưa từng hiểu nghĩa Tình Yêu chính là cô đơn, bi thương, là nỗi niềm chỉ duy một người lặng thầm vấn vương trong tâm. Đó cũng là cảm hứng 
               để tác giả Shinkai Makoto viết nên Khu vườn ngôn từ, lột tả ý nghĩa ban sơ nguyên thủy của tình yêu, có hơi ấm của nhớ nhung, nhưng cũng có giá rét của khoảng
                cách. Và tất nhiên thổi hồn vào đó, là những cơn mưa xuyên suốt câu chuyện buồn man mác như dư vị trà chiều, thanh thản mà lưu luyến.</p>
            <div class="picture">
                <img src="https://songgiatri.com/wp-content/uploads/2019/08/review-khu-vuon-ngon-tu-songgiatri-1-960x570.jpg" width="600" height="400">
            </div>
            <h2>
            "Khu Vườn Ngôn Từ": Ẩn Sau Tiếng Mưa Rơi Là Lời Anh Dành Cho Em
            </h2>
            <p>
            Khu vườn ngôn từ cũng có thể xem như anh em của cuốn tiểu thuyết 5cm/s từng làm bão trên khắp cộng đồng mạng trong và nước. Nhưng với tác phẩm này, ta cảm nhận rõ ràng cái nhẹ nhàng, tươi mát nhưng vẫn đậm chất Shinkai Makoto. Ngay từ trang bìa, bạn đọc đã cảm giác được sắc xanh của thiên nhiên tràn ngập, thấm ướt và dịu nhẹ như hơi thở của một cơn mưa mùa hè. Tình yêu của hai nhân vật chính đến với nhau cũng có chút hoàn cảnh như các cuốn trước của Shinkai, là định mệnh dẫn lối. 
            Khu vườn ngôn từ không đơn thuần là câu chuyện tình yêu chênh lệch tuổi tác, mà còn nhiều hơn thế nữa với giá trị cuộc sống, nét đẹp vạn vật, hoài niệm bản thân, khát vọng tương lai.
            </p>
            <h2>
                Giới thiệu tác phẩm
            </h2>
            <p>
            Cậu học sinh cặm cụi bên ước mơ nhỏ và cô giáo viên thoáng thấp nét u buồn thường uống bia chung với chocolate. Nghe có vẻ hơi điên mà hóa ra lại điên thật chứ chả đùa. Yukino tuy là giáo viên nhưng cô chưa bao giờ đề cập hay nhắc nhở Akizuki đi học, vì chính cô, cũng đang lạc lõng không điểm dừng. Con người nếu như không có mục tiêu rõ ràng, thì dù ngồi ở giảng đường hay văn phòng cũng vậy thôi,
             trong đầu sẽ toàn những dòng suy nghĩ hững hờ. Vậy thì tốt hơn hãy để bản thân mình có khoảng riêng của nó, biết đâu bạn sẽ tìm được lại động lực lần nữa.
            </p>
            <p>
            Trải qua những ngày tháng buồn chán ở trường, Takao chỉ mong mưa lại tiếp tục. Đúng như nguyện vọng, sáng hôm sau mưa tầm tã. Vui vẻ vượt qua dòng người đi tàu điện ngầm tấp nập, cậu lại đến công viên Shinjuku, đến dưới bên hàng hiên đó. 
            Như mọi khi, Yukino vẫn ngồi đó với lon bia cùng đồ nhắm.
        </p>
        <p>
        Yukino: này, hôm nay em được nghỉ học à?

Takao: thế công ty của chị hôm nay đóng cửa à?

Takao hơi ngạc nhiên khi Yukino nói vậy, nhưng cậu cũng hiểu ra nhiều điều. Mưa lúc đó bắt đầu tạnh dần, cũng là lúc Takao đóng khoá cặp và đến trường.

“Có lẽ ta sẽ gặp lại nhau”.

“….Vào những ngày mưa”.
        </p>
        <p>
        Hôm đó, tình cờ, là ngày bắt đầu mùa mưa vùng Kanto. Từ đó, ngày nào Takao cũng gặp Yukino. Họ nói chuyện, rồi dần dà hiểu nhau hơn. Có những thứ không nhất thiết phải nói mới biết, 
        đôi khi chỉ cần cái chạm mắt lướt nhẹ qua nhau, người ta cũng biết được tim mình bỗng thịch một nhịp. Tình yêu cũng vậy, giữa hai người là một chồi non đang hé.
        </p>
        <p>
        Những ngày mưa triền miên…. Nơi hàng hiên ngập tràn màu xanh của một khu vườn Nhật Bản… Có một cảm xúc êm dịu đến không thốt nên lời cứ thế manh nha, tựu hình và lửng lơ tồn tại. Trong lúc dòng đời cuồn cuộn chảy trôi, tất cả hối hả tiến về phía trước, thì cậu và cô lại dừng chân, chìm xuống trong tĩnh lặng riêng mình,
         và ở cái vũng tĩnh lặng đó, họ tìm thấy nhau. Dần dần và mạo hiểm, quên đi cả các chênh lệch về tuổi tác và vị trí, họ thả hồn mình trôi về nhau hòa điệu.
        </p>
            <div class="picture">
                <img src="https://cf.shopee.vn/file/2f8bc6700f786367d8fa75a0811ae3ca/" width="600" height="550">
            </div>
            
            <h2>
                3. Nhận xét
            </h2>
            <p>
            Rồi những ngày mưa, họ lại gặp nhau nhiều hơn. Tựa như một cuộc ước định bất thành văn, không hứa hẹn nhưng ai cũng giữ chữ tín. Nhưng thời gian đâu dừng lại chỉ vì hai người. Tháng 6 đi qua, tháng 7 đến, rồi tới tháng 8, thoáng qua tháng 9, mưa ngừng rơi, nắng dần rạng và những cuộc vụng trộm cũng nguôi dần. Cậu bé tập trung hơn vào việc học, ước mơ trở thành một bác thợ đóng giày, để lại quá khứ bên hiên trời mưa, nơi cậu tỉ mỉ đo giày cho cô giáo viên trẻ.
             Mọi thứ dần lui về dĩ vãng, để lại chút tiếc nuối cho người đọc. Một cốt truyện dễ gặp ở các cuốn ngôn tình thanh xuân khác.
            </p>
            <p>
            Nhưng may thay, không phải ngược tâm không lối thoát như 5cm/s, tác giả có “tâm” hơn, khi gần kết truyện, đã để họ thổ lộ cho nhau nghe, giọng nói tức giận của Takao, giọt nước mắt chịu đựng của Yukino đã phá bỏ mọi rào cản còn sót lại giữa hai người, mọi cảm xúc dồn hết vào phân đoạn này. Ở ngoài đời, người ta không nói nhiều, không nói sến, mà người ta sẽ điên vào những lúc kịch tính nhất,
             đó là điều mà tác phẩm đã truyền tải thành công. Đi đến cuối cùng, vài dòng chữ ngắn thôi, tuy kết mở nhưng vẫn là hy vọng trọn vẹn cho hai nhân vật chính
        </p>
            <div class="picture">
                <img src="https://songgiatri.com/wp-content/uploads/2019/08/5a5dd0cb28758-cucutacoffee.jpg" width="600" height="550">
            </div>
            <p>
            Thời gian thấm thoát trôi qua, Takao trở lại nơi chốn xưa, trên tay cậu là đôi giày được làm kỳ công, trau chuốt bằng chính hai bàn tay bản thân – đôi giày có thể khiến Yukari mong muốn được bước đi!.
            </p>
           
            <div class="picture">
                <img src="https://lamhysite.files.wordpress.com/2016/11/17915-series-header.jpg" width="600" height="300">
            </div>
            <p>Nếu chỉ nói Khu vườn ngôn từ là một câu chuyện đơn thuần về tình yêu, thì cái nhìn của bạn có hơi đơn giản. Hành trình từ tình yêu bất chấp địa vị, khoảng cách không gian, thời gian, đến lúc ta nương tựa vào nhau mà lớn lên, trưởng thành, chững chạc. Câu chuyện thủ thỉ lời nhắn nhủ, là bài học đến chúng ta trong bản thân mỗi nhân vật. Ở Yukino, là sự lạc lõng, cô đơn mà cô luôn phải đối mặt từ khi còn nhỏ, nhưng rồi, cô phải tự mình học cách bước để trưởng thành. Ở Akizuki, là sự quyết tâm theo đuổi ước mơ đến cùng. 
              Bởi tuổi trẻ chính là cái mà mỗi chúng ta đều có, và bởi còn trẻ, chúng ta mới dám thực hiện ước mơ bất chấp khó khăn đến nhường nào.</p>
            <p>Mọi người sinh ra, ai rồi cũng phải lấn cấn trong những mối quan hệ, có thể ta chỉ là cái bóng mờ nhạt trong cuộc đời ai kia, nhưng sẽ là nhân vật chính của cuộc đời mình. Người ta hay nói, sinh ra trong gia đình nghèo khổ không phải lỗi của bản thân, nhưng chết trong nghèo khổ là lỗi của bản thân. Câu chuyện không đề cập đến giàu nghèo, nhưng có triết lý tương tự, con người không tự chọn cho mình cách sống thì chẳng trách than được ai, phải tự bản thân giành lấy, không ai cho không kẻ lười nhát, có thể lười biếng, có thể dựa dẫm nhưng không thể bỏ cuộc.Vì có những khát vọng, hay những va chạm trong cuộc sống, dù là ai, như thế nào đôi lúc họ sẽ vẫn cảm thấy bị lạc lõng, họ cần chỗ dựa, sự dìu dắt, giúp đỡ từ bất cứ ai. 
Bộ phim mang nhiều thông điệp - một trong số đó nhắm đến giới trẻ, nếu bạn thích điều gì, thì cứ làm, hãy theo đuổi giấc mơ của riêng mình và đừng phí phạm đi tuổi trẻ. Ngoài ra bộ phim sử dụng rất nhiều hình ảnh ẩn dụ, tượng trưng nên khiến giá trị xem lại cực kì cao. Tôi nhớ sâu sắc lời Yukino:
“Cô sẽ tập bước đi bằng chính đôi chân của mình, tại nơi đó! Cho dù là đôi chân trần.”
Câu nói ngày xưa ấy cũng chính là động lực cho Takao suốt những năm tháng sau này. Quả nhiên, Yukari là một giáo viên tốt và đương nhiên Akizuki cũng là một học trò giỏi.</p>
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