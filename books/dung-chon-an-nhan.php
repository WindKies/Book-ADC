<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Đừng lựa chọn an nhàn khi còn trẻ </title>
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
            <h1>Review: Đừng lựa chọn an nhàn khi còn trẻ </h1>
            <p>Ai trong số chúng ta đều mong muốn có một cuộc sống an nhàn, hạnh phúc khi về già. Để có được những thành công đó chắc chắn khi còn trẻ bạn sẽ phải nỗ lực rất nhiều. Đừng lựa chọn an nhàn trong những năm tháng cần sự phấn đấu. Nhân khi còn ở độ tuổi thanh xuân, với sự nhiệt huyết hãy bước về phía trước. Cuốn sách “Đừng lựa chọn an nhàn khi còn trẻ” sẽ cho bạn thấy được nếu tuổi trẻ của bạn trôi qua một cách an nhàn thì sau này cuộc sống của bạn sẽ ra sao. 
                Bên cạnh đó còn tiếp thêm động lực cho bạn đừng sợ thất bại, làm chưa được thì hãy làm lại, có ý chí quyết tâm, tư suy mạnh lạc.</p>
            <div class="picture">
                <img src="https://chiasemoi.com/wp-content/uploads/2020/04/sach-dung-lua-chon-an-nhan-khi-con-tre.jpg" width="600" height="400">
            </div>
            <h2>
                1. Giới thiệu tác giả
            </h2>
            <p>
                Cảnh Thiên là tác giả của cuốn sách “Đừng lựa chọn an nhàn khi còn trẻ”, thông tin của tác cũng không được tiết lộ nhiều, các độc giả chỉ biết đây là một tác giả người Trung Quốc, từng nhiều năm làm vị trí biên tập và truyền thông, cung Sư Tử, thích văn chương, mỹ thực và những niềm hạnh phúc nhỏ bé trong cuộc sống. Sách tiêu biểu của tác giả Cảnh Thiên: Phụ nữ cần độc lập về tài chính, Đừng an nhàn khi còn trẻ,…
            </p>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
                Cuốn sách “Đừng lựa chọn an nhàn khi còn trẻ” được phát hành bản Tiếng Việt do dịch giả Đặng Luân phiên dịch vào tháng 9 năm 2019, chịu trách nhiệm bởi Nhà xuất bản Thế Giới. Trong quyển sách này, tác giả Cảnh Thiên thẳng thắn chia sẻ những quan niệm, trải nghiệm mà bản thân có. Với những câu chuyện bổ ích, chân thật và có tầm ảnh hưởng tích cực đến người đọc, với văn phong nhẹ nhàng tinh tế mà sâu sắc chắc hẳn bán sẽ thấy đâu đó trong cuốn sách này đang tiềm ẩn điều gì đó về bạn.
            </p>
            <div class="picture">
                <img src="https://chiasehay.net/wp-content/uploads/2020/03/dung-lua-chon-an-nhan-khi-con-tre.jpg" width="600" height="400">
            </div>
            <h2>
                3. Review sách “Đừng lựa chọn an nhàn khi còn trẻ”
            </h2>
            <p>
                Xuyên suốt cuốn sách là các chủ đề liên quan đến sự thành công xoay quanh cuộc sống hàng ngày, trong mỗi chủ đề tác giả đều kể đan xen các câu chuyện giúp cho các bạn đọc dễ dàng hiểu hơn về chủ đề. Nội dung mỗi chủ đề đều được cập nhật không quá dài, tạo ra những điểm nghỉ, làm cho việc đọc thoải mái và cuốn hút hơn. Tất cả các chủ đề đều giúp độc giả nhận ra bản thân mình cần làm và hiểu những gì để đạt được đến những mục tiêu hoài bão của mình trong tương lai và trở thành một phiên bản hoàn hảo của chính mình.
            </p>
            <p>
                Bạn luôn thấy ngưỡng mộ những người thành công trong cuộc sống và thậm chí bạn còn mơ ước có được thành công như họ. Nhưng bạn không biết rằng đằng sau sự thành công vạn người ao ước đó chính là những đau đớn, thất bại mà họ đã từng phải chịu như thế nào? Cho nên nếu chỉ biết ngưỡng mộ người khác mà không cố gắng bạn chỉ có thể dậm chân tại chỗ mãi không thể biết thành công là gì. Thời gian trôi đi rất nhanh chúng ta không thể nào níu kéo nó trở lại, cho nên hãy sử dụng nó thật hợp lí, làm những việc có ích tô thêm màu cho cuộc sống của chính bạn. Nếu sử dụng quỹ thời gian quý hiếm của tuổi trẻ để an nhàn thảnh thơi thì sau này về già bạn nhất định sẽ phải trả một cái giá rất đắt.
            </p>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-sach-dung-lua-chon-an-nhan-khi-con-tre-2.jpg" width="600" height="400">
            </div>
            <p>
                Mở đầu cuốn sách là những dòng cảnh tỉnh một bộ phận nhỏ giới trẻ hiện đại “Trên hành trình đi đến trưởng thành đều phải trải qua những ngày tháng trầm luân, vất vả”. Với lời văn hơi hướng triết lý cuộc sống, dường như tác giả muốn gửi gắm những kinh nghiệm sống mà tác giả đã tích góp được đến các bạn đọc. Vốn dĩ cuộc sống luôn biến hóa khôn lường, vì thế ở mỗi bản thân chúng ta luôn phải biết cách tự thích nghi, tận dùng từng giây từng phút để quyết định và thay đổi cuộc đời mình phong phú hơn và thêm phần ý nghĩa. Đối diện với gian nan khốn khổ không thể tranh khỏi, nghĩ thấy chính là thiên đường, nghĩ quẩn chính là địa ngục, nó liên quan đến tâm thế của mỗi người.
            </p>
            <p>
                Tác giả nhấn mạnh vào sự nỗ lực trong mỗi người, mọi nỗ lực đều có ý nghĩa, và sống cuộc sống không có hối hận, không có giá như. Trong cuộc sống, còn rất nhiều điều mà ta cần phải học hỏi, chúng ta cần làm nhiều việc để rút ra nhiều kinh nghiệm và tiếp thu được nhiều kiến thức trong cuộc sống. Nếu như bạn cảm thấy bản thân không biết nên làm gì thì nên đến với “Đừng lựa chọn an nhàn khi còn trẻ” để biết rõ hơn việc gì nên làm và việc gì không nên làm. Hơn thế nữa là bạn có thể biết được ước mơ của mình là gì và sẽ phấn đấu để thực hiện ước mơ đó bằng mọi cố gắng, nỗ lực.
            </p>
            <p>
                Thế gian này không có bán thuốc hối hận, quá khứ một khi đã đi qua thì không quay trở lại. Con người chúng ta không thể thay đổi được gì cả, chúng ta chỉ có năng lực thay đổi một thứ duy nhất, đó chính là kết quả của vấn đề. Dù sinh ra trong nghèo khó, ta vẫn có thể thay đổi được kết quả ấy để trở thành một người thành đạt trong tương lai. Một chiếc chìa khóa nếu được sử dụng thường xuyên thì sẽ sáng bóng, còn nếu ta vứt nó trong một góc không dùng đến, chìa khóa sẽ bị rỉ sét và không sử dụng được. Cũng giống như con người, làm việc, nỗi lực cho tương lai sẽ khiến ta ngày càng tốt hơn, còn lười biếng, thích hưởng thụ sự an nhàn sẽ làm bản thân trì trệ, tụt hậu đi rất nhiều.
            </p>
            <p>
                Tuổi trẻ, thời gian và năng lượng là những gì chúng ta cần và trân quý để làm hành trang chinh phục thành công. Và điều hiển nhiên nếu ta phí phạm chúng thì chắc chắn chúng ta sẽ hối tiếc mãi về sau. Vậy nên đừng bao giờ lãng phí khoảng thời gian tuyệt vời ấy. Quyển sách như một thời thanh xuân thu nhỏ, là những kinh nghiệm, bài học được đúc kết của tác giả về những gì đã trải qua, những vấp ngã đầu đời và những bước chân khập khễnh đến thành công sau những lần vấp ngã
            </p>
            <p>
                “Đừng lựa chọn an nhàn khi còn trẻ” muốn nói chúng ta phải biết nhìn xa trông rộng. Muốn được thành công trong tương lai thì phải nỗ lực, chịu khó. Không phải ai cũng thành công dễ dàng cả. Ngoài ra sách còn thuyết phục người đọc bằng cách đưa ra các dẫn chứng về sự gian lao của những người thành công đi trước. Xin đừng suy nghĩ rằng cuộc đời vẫn còn dài lâu, vẫn còn đủ thời gian để thực hiện nhiều việc. Hãy trở thành phiên bản hoàn hảo nhát của bản thân.
            </p>
            <h2>
                4. Một số trích dẫn hay trong cuốn sách
            </h2>
            <ul>
                <li>Muốn trưởng thành bạn cần biết đi qua những gian khó của cuộc đời. Muốn thành công bạn cần biết vượt lên chính mình để có được những gì xứng đáng.</li>
                <li>Sinh mệnh ai cũng chỉ có một, mỗi ngày ai cũng chỉ có 24 giờ. Để ngày hôm nay trôi đi hoài phí, chẳng khác nào xé bỏ trang quan trọng nhất của cuộc đời.</li>
                <li>Đường đi gập ghềnh là đúng rồi, chứng tỏ bạn đang leo lên dốc. Lên hết con dốc là đỉnh núi nơi những nỗ lực của bạn tự thành.</li>
                <li>Ước mơ hôm qua sẽ là hi vọng của ngày hôm nay và sẽ trở thành hiện thực của ngày mai. Nếu bạn có ước mơ thì nhất định phải bảo vệ nó.</li>
                <li>Khi đánh mất ước mơ của mình trong những tháng ngày đơn điệu, lặp đi lặp lại, bạn cần phải biết rằng mơ ước vẫn ở đâu đó, nhưng bạn có bắt tay vào thực hiện nó không?</li>
            </ul>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/review-dung-lua-chon-an-nhan-khi-con-tre-2.jpg" width="600" height="300">
            </div>
            <p>Bạn nên đọc “Đừng lựa chọn an nhàn khi bạn còn trẻ” một lần trong đời. Bằng những từ ngữ, ngôn từ lôi cuốn người đọc, cách diễn đạt trau chuốt và rất dễ hình dung, cuốn sách sẽ mang lại cho độc giả những bộ mặt khác của giới trẻ hiện nay. Đây sẽ là cuốn sách chúng ta có tương lai tốt hơn sách với những câu chuyện có thực.</p>
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