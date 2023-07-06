<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Hack Não Ngữ Pháp</title>
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
            <h1>Review: Hack Não Ngữ Pháp </h1>
            <p>Ngữ pháp tiếng Anh luôn là một thử thách “khó nhai” với mình. Ôi sao mà nhiều cấu trúc, mỗi cái lại một kiểu, rồi nản mà chả học nữa, dần thành ra… mất gốc luôn. Nhưng khi lên tới cấp 3, mình nhận ra không thể nào bỏ bê tiếng Anh được nữa. Lúc này, cái khó nhất bây giờ là không biết bắt đầu từ đâu.</p>
            <div class="picture">
                <img src="https://cdnhn.r.worldssl.net/wp-content/uploads/2021/06/review-hack-nao-ngu-phap-1.jpg" width="600" height="400">
            </div>
            <p>
               Hack Não Ngữ Pháp được “cho ra lò” bởi công ty Step Up, do anh Nguyễn Văn Hiệp sáng lập từ năm 2013. Hiện Step Up là công ty hàng đầu Việt Nam về mảng biên tập và phát hành sách tiếng Anh với nội dung sáng tạo, hướng theo các phương pháp học thông minh, vui vẻ và dễ dàng.
            </p>
            <p>
              Với ước mơ giúp những người “không có năng khiếu ngoại ngữ” cũng có thể giỏi tiếng Anh, đội ngũ Step Up, sau cuốn sách Hack Não 1500, đã cho ra đời cuốn Hack Não Ngữ Pháp. 
            </p>
            <h2>Nội dung bộ sản phẩm Hack Não Ngữ Pháp</h2>
          
            <p>
            Sách Hack Não Ngữ Pháp cung cấp lý thuyết cho bạn theo lộ trình từ dễ tới khó, từ cơ bản tới phức tạp. Toàn bộ kiến thức đó được chia làm ba chương
            </p>
            <p>– Chương 1: Ngữ pháp cấu tạo giúp nhận diện và nói đúng cấu trúc của 1 câu đơn;</p>
            <p>– Chương 2: Ngữ pháp về thì để bạn nói đúng thì của một câu đơn giản;</p>
            <p>– Chương 3: Ngữ pháp cấu trúc hướng dẫn nói và phát triển ý thành câu phức tạp</p>
            <p>Với Hack Não Ngữ Pháp, các cấu trúc lằng nhằng và phức tạp không còn khô khan nữa. Tất cả đều được sơ đồ hóa để người học dễ hiểu và tìm ngay ra quy luật kiến thức. Nhờ đó, học viên còn có thể liên hệ các điểm kiến thức của các bài học với nhau.</p>
            <div class="picture">
                <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/07/1-1-768x518.jpg" width="600" height="400">
            </div>
            <p>Mỗi Unit luôn luôn kèm theo các phần ghi chú kiến thức mở rộng. Cuối mỗi bài là phần tổng kết kiến thức và bài tập ngắn để chúng ta có thể khóa nền tảng ngữ pháp vào trí nhớ dài hạn.</p>
            <h2>Kèm theo App Hack Não Pro</h2>
            
            <p>
            App chủ yếu hỗ trợ cho phần luyện tập, đề cao tính ứng dụng trong thi cử và giao tiếp.
            </p>
            <div class="picture">
                <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/07/hnnp-pdf3-768x483.jpg" width="600" height="400">
            </div>
            <h2>Kết luận</h2>
            <p>Tiếng Anh không hề khó và ngữ pháp tiếng Anh không hề khô khan như nhiều người vẫn nói. Nếu bạn tìm đúng tài liệu và phương pháp học. Nếu khoảng cách tiếng Anh là 1000 bước, bạn chỉ cần bước 1 bước, 999 bước còn lại Hack Não sẽ giúp bạn. Hy vọng qua bài review sách Hack Não Ngữ Pháp trên đã giúp bạn biết rõ hơn về nội dung cũng như đánh giá của người học về bộ sản phẩm ngữ pháp và đưa ra quyết định hợp lý trong việc lựa chọn tài liệu học tiếng Anh.</p>

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