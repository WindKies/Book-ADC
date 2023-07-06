<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Phía sau nghi can</title>
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
            <h1>Review: Phía sau nghi can </h1>
            <p>Phía sau nghi can X là tiểu thuyết trinh thám rất nổi tiếng của Higashino Keigo, với những những ai là fan ruột của nhà văn Nhật, sách xứng đáng là một trong những tác phẩm hay nhất của ông.</p>
            <div class="picture">
                <img src="https://reviewsach.net/wp-content/uploads/2018/03/ph%C3%ADa-sau-nghi-can-x-3.jpg" width="650" height="500">
            </div>
        <h2>
        Cốt truyện đơn giản như nhiều sách trinh thám khác….
        </h2>
            <p>
            Việc Togashi đột ngột xuất hiện sau 5 năm li dị đã thay đổi cuộc đời Yasuki hoàn toàn, gã đeo bám chị không dứt, buổi tối định mệnh đó sau một hồi giằng co chị vô tình giết Togashi. Ishigami, một thiên tài toán học ẩn dật bất ngờ xuất hiện, đề nghị giúp chị phi tang cái xác. Kế tiếp là chuỗi điều tra của hai điều tra viên Kusanagi, Kisuya và nhà vật lý Yugawa. Bạn đọc từ đây bị dẫn vào mê cung rối rắm của Keigo, những câu văn dài, những trường đoạn không cần thiết khiến người ta sốt ruột tự hỏi tác phẩm này có xứng đáng là một trong những sản phẩm hay nhất của bậc thầy trinh thám không !
            </p>
           <p>
           Xin thưa hoàn toàn xứng đáng, cái kết bất ngờ đủ sức bật lại nội dung nhàm chán ban đầu, những tình tiết tưởng chừng thừa thải lại vô cùng hợp lý khi 
           ghép nối với câu chuyện cuối cùng. Từng đường đi nước bước đều trong tính toán kẻ chủ mưu…
            </p>
            <div class="picture">
                <img src="https://reviewsach.net/wp-content/uploads/2018/03/ph%C3%ADa-sau-nghi-can-x-2.jpg" width="650" height="550">
            </div>
            <h2>
            Chân dung kẻ chủ mưu 
        </h2>
            <p>
            Hung thủ sát hại Togashi là Yasuki, kẻ tiếp tay phi tang chứng cứ cho Yasuki là Ishigami. Tác giả đã khẳng định ngay từ đầu như thế, Ishigami là chủ mưu mọi việc, tạo hiện trường giả, dặn dò lời khai cho hai mẹ con, nghĩ ra kịch bản đối phó với cảnh sát. Hiếm có tác phẩm trinh thám nào mà sát nhân lộ mặt ngay từ đầu như thế, việc hé lộ hung thủ quá sớm là “môt canh bạc” nguy hiểm nếu tác giả có mạch văn không vững, không đủ sức duy trì tác phẩm đên cuối.
             Motip giống hệt  “Mưu sát” của nhà văn Trung Quốc Tử Kim Trần khi ông cũng để lộ chân tướng hung thủ ngay từ đầu như thế.
            </p>
            <p>
            Ishigami cũng như Từ Sách  (nhân vật chính trong Mưu sát), đều là những tài năng toán học, thông minh, sống cuộc đời ẩn dật, đều lên kế hoạch thì vô cùng hoàn hảo, kín kẽ, cảnh sát chỉ có thể bị “dắt mũi” mà thôi.
        </p>

            <div class="picture">
                <img src="https://s3-ap-southeast-1.amazonaws.com/images.spiderum.com/sp-images/dbdea2500f6011eb9f362346c58f40ed.jpg" width="600" height="400">
            </div>
            <p>
            Tuy nhiên, theo mình thì để có được những cảm nhận đúng nhất về Calling You, bạn không nên đọc bất cứ review nào trước cả, và càng không nên kì vọng rằng đây sẽ là một bộ truyện buồn đến phát khóc. Ngay trước khi Calling You về, mình đã bị một người qua đường đập vào mặt một câu ý là, Calling You nhạt toẹt ấy, chả cảm động gì đâu, mọi chuyện cứ trôi qua một cách nhạt toẹt ấy, chẳng có cao trào gay cấn gì cả. Mỗi người một ý, cũng có người không thấy đây là một cuốn sách có thể chạm đến trái tim (và ví tiền) của họ, còn đối với mình, nó chạm tới cả hai (haha). Thật ra ý kiến đó cũng có một phần không sai, bởi Calling You không phải là một tuyển tập toàn những câu truyện tiêu cực đến não nề, dồn dập và bóp nghẹn người đọc, đổ ầm ập xuống những tai ương, khổ đau và bất công để chèn ép tuyến lệ của độc giả phải ứa nước mắt, không phải thế. Calling You như một bản nhạc du dương, nhè nhẹ trôi trong không khí, khẽ rung rinh nó một cách vô cùng tinh tế để rồi lọt thẳng vào tim từ lúc nào không hay. Đối với mình, mình luôn cố gắng cảm nhận lấy tất cả những gì mà tác giả truyền tải, không chỉ là đọc xong rồi để đó mà còn là suy ngẫm, không nhiều thì ít, những lý tưởng mà tác giả đã ngấm ngầm đặt vào trong đó. Calling You mang trong mình những tình tiết vô cùng nhẹ nhàng, nó không thống khổ chỉ từ bề nổi của những tình tiết mà còn là chiều sâu bên trong nó, để cho thấy rằng có những nỗi đau không phải cứ dồn dập đè nén đến mức khiến người ta gào khóc thảm thiết mới là đau,
            mà bên cạnh đó, có cả những nỗi đau khiến con người ta ứ nghẹn lại, cả cổ họng và tuyến lệ, không chảy nước mắt, không khóc la, mà chỉ nín lặng để lệ chảy ngược vào bên trong mà thôi.
            </p>
           
            <div class="picture">
                <img src="https://ecobook.vn/wp-content/uploads/2020/07/DSC_0516_result.jpg" width="690" height="500">
            </div>
            <p>Ishigami cũng như Từ Sách  (nhân vật chính trong Mưu sát), đều là những tài năng toán học, thông minh, sống cuộc đời ẩn dật, đều lên kế hoạch thì vô cùng hoàn hảo, kín kẽ, cảnh sát chỉ có thể bị “dắt mũi” mà thôi.</p>
            <p>Người như Ishigami thật sự nguy hiểm, thông minh, lạnh lùng, suy nghĩ vô cùng thấu đáo, đánh giá sự việc dựa trên logic, có khả năng đánh lạc hướng điều tra tốt,
               cực kì nguy hiểm khi gây án, bởi chỉ cần hợp logic thôi thì sẽ không từ thủ đoạn nào.</p>
              <div class="picture">
                <img src="https://tapchireview.com/wp-content/uploads/2020/10/phia-sau-nghi-can-x-2.jpg" width="650" height=550">
            </div>
              <h2>Lời kết</h2>
              <p>Thẳng thắn, nửa đầu cuốn sách khá nhàm chán, việc điều tra của cảnh sát không thu nhiều kết quả, liên tục các giả thiết được đặt ra, cảnh sát bám theo tình nghi (vốn là vợ cũ của nạn nhân), không những vậy còn “rỗi hơi” để ý luôn một gã đàn ông có cảm tình với cô, một bà mama nơi trước kia cô làm việc, toàn những người không liên quan đến vụ án, độc giả mệt mỏi vì diễn biến chậm chạp, ngớ ngẩn của cảnh sát. Nhưng rốt cục đó lại là chiêu đánh lạc hướng vô cùng tinh vi, tác giả miêu tả những thứ tưởng chừng có liên quan và bỏ qua một vài manh mối trọng yếu, hướng điều tra của cảnh sát đúng với kịch bản đã vạch sẵn của Ishigami, cảnh sát càng tìm càng sai, không hề có kẽ hở trong kế hoạch, đến khi biết sự thật, họ cũng không có bằng chứng phủ nhận kết quả điều tra trước đây.</p>
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