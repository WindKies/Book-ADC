<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Gatsby Vĩ Đại – Mặt trái của giấc mơ Mỹ</title>
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
            <h1>Review: Gatsby Vĩ Đại – Mặt trái của giấc mơ Mỹ </h1>
            <p>Đại gia Gatsby là tác phẩm kinh điển được viết bởi nhà văn người Mỹ F. Scott Fitzgerald vào những năm 1918 – 1929 – giai đoạn nước Mỹ bước vào phát triển hưng thịnh. Tác giả đã đặt cho thời đại này một cái tên đầy hoa mỹ: thời đại Jazz (Jazz Age), bởi chính những bản nhạc Jazz đã phần nào mô tả hiện thực – quyến rũ nhưng đầy lộn xộn, bắt tai nhưng lại đầy kén chọn và hơn cả, nó xuất hiện ở đa số các buổi tiệc của giới thượng lưu. Nhưng sau cùng, tinh thần mà tác giả muốn truyền tải không phải là những hào nhoáng trước mắt kia mà là nỗi ám ảnh hay giấc mơ về tiền tài, tình yêu, danh vọng và tất cả những mặt trái của nó. Sau cùng, thứ còn lại chỉ là sự lãng quên.</p>
            <div class="picture">
                <img src="https://reviewsach.net/wp-content/uploads/2019/10/The-Great-Gatsby.jpg" width="600" height="400">
            </div>
            <p>
               Câu chuyện xoay quanh Jay Gatsby – một đại gia ở vùng West Egg với thanh thế đầy bí ẩn. Người kể chuyện – Nick Carraway, mới chuyển đến thuê nhà tại West Egg, cạnh một dinh thự hoành tráng do Jay Gatsby làm chủ. Gatsby thường xuyên tổ chức các bữa tiệc cho quan khách nhưng bản thân mình lại không tham gia cùng họ. 
            </p>
            <p>Một lần nọ, Nick được mời đến ăn tối ở East Egg cùng gia đình người chị họ Daisy và chồng, Tom Buchanan, cũng là người quen biết của Nick thời đại học. Họ giới thiệu Nick với cô Jordan Baker, một golf thủ trẻ thành công, và hai người bắt đầu mối quan hệ hẹn hò. Jordan cũng tiết lộ cho Nick biết Tom có cô nhân tình tên Myrtle Wilson, dù cô này đã có gia đình. Cũng trong mùa hè ấy, Gatsby thổ lộ với Jordan rằng anh đã yêu Daisy từ lúc anh còn đi lính. Anh cũng nhờ Nick tổ chức một buổi tiệc trà 2 người để có thể gặp Daisy. Và tình yêu giữa Daisy và Gatsby đâm chồi từ đó. Nick cũng dần thân hơn với Gatsby và biết được anh này tên thật là James Gatz – xuất thân trong một gia đình nông dân nghèo. Sau đó, anh đổi tên thành Jay Gatsby. Do may mắn anh gặp được Dan Cody – người biến anh thành triệu phú như bây giờ.</p>
            <p>Vào một ngày hè định mệnh, Nick cùng Gatsby đến East Egg dự tiệc tại cơ ngơi nhà Buchanan. Lúc này Tom đã có hoài nghi về tình cảm giữa Gatsby và vợ mình. Vì trời quá nóng bức, Daisy đề nghị cả nhóm lái xe vào thành phố nghỉ mát. Trên đường đi mọi người ghé đổ xăng tại trạm xăng vợ chồng Wilson và được biết Wilson đang lên kế hoạch chuyển nhà đi xa. Tình thế này đẩy Tom vào hoàn cảnh hụt hẫng vì sắp mất cả vợ lẫn nhân tình. Rồi cả nhóm đến khách sạn – nhà hàng Plaza ăn và uống rượu thỏa thuê. Tom phát hiện ra mối quan hệ thân thiết quá mức giữa đôi Daisy – Gatsby, anh ta lồng lộn lên và hằn học cho Daisy biết Gatsby giàu lên nhờ buôn lậu và bao phi vụ mờ ám khác, còn Tom thuộc dòng dõi Buchanan là tầng lớp thượng lưu với tài sản dồi dào từ bao đời nay. Anh ta ra lệnh mọi người lái xe về nhà. Trên đường về, Nick, Tom và Jordan (đi chung xe) phát hiện có vụ tai nạn ngay trạm xăng nhà Myrtle Wilson, cả ba người đến xem xét thì phát hiện ra Myrtle đã chết vì xe tông – chính là xe của Gatsby. Về đến East Egg, qua vài câu hỏi, Nick biết được người cầm tay lái tông vào Myrtle chính là Daisy chứ không phải Gatsby nhưng Gatsby vẫn khăng khăng nhận hết lỗi về phía mình. </p>

            <p>Sau vụ tai nạn, George Wilson, chồng Myrtle, đã gặp Tom, sau khi biết được người ngồi trong chiếc xe gây tai nạn là Gatsby thì anh ta tức tốc đến dinh thự nhà Gatsby, giết Gatsby và tự sát. Sau thảm họa đó, đám tang của Gatsby chỉ có mình Nick lo liệu. Trong buổi chôn cất chỉ có vỏn vẹn Nick, cha Gatsby, mấy gia nhân và cha nhà thờ.</p>
            
            <div class="picture">
                <img src="https://reviewsach.net/wp-content/uploads/2019/10/Review-sach-Gatsby-vi-dai.jpg" width="600" height="400">
            </div>
            <h2>Jay Gatsby – một mẫu hình lý tưởng của thời đại</h2>
            <p>“Tiểu thuyết là thể loại duy nhất nảy sinh và được nuôi dưỡng bởi thời đại mới của lịch sử thế giới và vì thế thân thuộc sâu sắc với thời đại ấy”. Nhà nghiên cứu văn học người Nga Bakhtin đã viết như vậy. Đại gia Gatsby cũng không là ngoại lệ. Hình ảnh Gatsby đã được Fitzgerald xây dựng đầy tài tình và mang đậm dấu ấn thời đại. Anh được xây dựng như một quý ông kiểu mẫu khi bỏ qua tất cả những buổi tiệc tùng do chính mình tổ chức, hạn chế dùng cả rượu hay thuốc lá. Gatsby cũng là một doanh nhân thành công trên thương trường với bằng chứng là khối tài sản anh đang sở hữu. </p>

            <p>Đặc biệt hơn cả, tình yêu và sự thủy chung của anh chỉ mãi dành cho Daisy, bất kể lúc đó anh chỉ là người lính bần hàn hay là một đại gia sẵn sàng vung tiền cho những buổi tiệc thâu đêm suốt sáng. Nhưng kỹ thuật xây dựng nhân vật tài hoa của tác giả đâu chỉ nằm ở đó. Một nhân vật chỉ toàn những nét đẹp đại diện cho một cộng đồng hay thời đại vốn chỉ tồn tại trong sử thi với những người anh hùng như Odysseus hay Achilles mà thôi. Còn Gatsby phàm cũng là người thường nên anh chẳng thể tránh khỏi những sai lầm – những sai lầm gây ra cái chết tức tưởi cho chính anh.</p>

            <h2>Mặt trái của thời đại và cái gọi là “Giấc mơ Mỹ”</h2>
            <p>“Tình yêu là mù quáng”. Có lẽ đây là điều thường tình. Gatsby hết lòng chung thủy và yêu Daisy. Đó quả là điều cao đẹp hiếm thấy. Tuy nhiên, anh đã vượt qua cái khuôn phép đạo đức từ ngàn xưa để đến với Daisy dù biết cô đã có gia đình. Và cả Daisy cũng bất chấp để đến với Gatsby. Vì điều gì? Có lẽ vì cảm giác cô đơn và tan vỡ khi biết Tom ngoại tình với người đàn bà khác. Nhưng tại sao cô không bỏ Tom để đến với anh? Chắc có lẽ vì những xa hoa lộng lẫy, những tiện nghi mà cô được tận hưởng khi ở bên Tom. Nhưng ta cũng chẳng thể trách được Daisy khi cô là như vậy bởi con người vốn dễ dàng bị cuốn theo cái xu thế của thời đại. </p>
            <p>Ở thời đại mà cuốn sách ra đời (1925), khi mà nền kinh tế nước Mỹ bước vào thời kì hoàng kim của tầng lớp trên. Từ năm 1922-1929, lợi tức cổ phiếu tăng 108 phần trăm, lãi của các công ty tăng 76 phần trăm và lương bổng cũng tăng 33 phần trăm. Tiến bộ công nghệ và năng suất tăng đã giảm giá thành sản phẩm, làm nền kinh tế phát triển nhanh.</p>
            <p>Sau cùng, điều cay đắng và tức tưởi nhất chính là cái chết của Gatsby. Anh chết trong tình yêu mù quáng đầy ảo tưởng của chính mình. Anh chết gián tiếp vì sự băng hoại đạo đức của Daisy, Tom và cả Wilson. Phát súng chí mạng ấy không chỉ kết liễu cuộc đời Gatsby mà còn làm cho chính độc giả như vỡ ra điều gì đó quen mà lạ, lạ mà quen. Điều buồn nhất là ngay cả trong đám tang của Gatsby, chẳng có một ai đến viếng anh trừ một vài gia nhân, Nick và cha của anh. Đám tang ấy bao trùm sự lạnh lẽo của cả không gian rộng lớn lẫn lòng người. Người ta chỉ nhớ đến anh như một người giàu có, hào sảng và đầy xa lạ với những bữa tiệc “dập dìu tài tử giai nhân” kéo dài bất tận. Còn khi anh lìa xa trần thế, những lời nói, những câu chuyện về anh hay cả chính anh nữa, cũng theo cơn gió mùa thu năm ấy mà trôi vào hư vô. </p>

            <div class="picture">
                <img src="https://reviewsach.net/wp-content/uploads/2019/10/Gatsby-vi-dai.jpg" width="600" height="400">
            </div>
            <h2>Giá trị vượt thời gian của Đại gia Gatsby</h2>
            <p>Tiểu thuyết luôn có tính tiên đoán, dự báo và buộc con người phải chất vấn lại chính mình. Đại gia Gatsby cũng là một câu hỏi lớn về giá trị đạo đức, tinh thần và những vấn đề đương đại. Liệu chúng ta có bị cuốn theo vòng xoáy của thời đại hay không và khi đối mặt với vòng xoáy ấy thì bản thân có giữ được những giá trị cốt lõi không? Liệu tình yêu có còn đẹp như thể nó đã từng? Tất cả những câu hỏi đấy những câu hỏi đó sẽ mãi đeo đuổi chúng ta như chứng nhân cho một tác phẩm vĩ đại như Đại gia Gatsby. 

           </p>
           <p> Sau cùng, xin trích lời của dịch giả Trịnh Lữ: “Gatsby chỉ là đại gia. Người tạo ra Gatsby mới thực sự vĩ đại”.</p>

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