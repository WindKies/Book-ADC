<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Tôi Tự Học</title>
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
            <h1>Review: Tôi Tự Học </h1>
            <p>“Tôi tự học” là cuốn sách chỉ dẫn bạn cách tạo ra giá trị cho bản thân thông qua phương pháp tự học. Trong cuộc sống hay trong quá trình học tập, rất nhiều người nỗ lực cố gắng học mỗi ngày với mục đích không gì ngoài việc đạt được thành công. Cha mẹ cũng vậy, đều mong rằng con cái học hành để đạt được thành tựu trong cuộc sống. Với “Tôi tự học”, tác giả chỉ ra cho độc giả mục đích đích thực của việc học không dựa trên giá trị của việc kiếm ra tiền mà để tự biết mình, mở rộng kiến thức của bản thân và học cách đối nhân xử thế.</p>
            <div class="picture">
                <img src="https://revisach.com/wp-content/uploads/2020/08/review-cuon-sach-toi-tu-hoc-revisach.com_.jpg" width="600" height="400">
            </div>

            <h2>Tác giả cuốn sách “Tôi tự học” </h2>
            <p>
               Cụ Nguyễn Duy Cần, bút hiệu là Thu Giang, sinh năm 1907 tại Mỹ Tho, Tiền Giang. Nguyễn Duy Cần là một học giả, giáo sư và nhà biên khảo nổi tiếng bậc nhất của Việt Nam vào những năm 50-60 của thế kỷ XX. Cụ Nguyễn Duy Cần viết rất nhiều cuốn sách lúc sinh thời với nhiều thể loại bao gồm học làm người, nghệ thuật sống, chuyên khảo, và Dịch Đạo.
            </p>
            <p>
              Bên cạnh những tác phẩm nổi tiếng như Cái dũng của thánh nhân, Thuật xử thế của người xưa, Cái cười của thánh nhân, Thuật yêu đương, Óc sáng suốt, Tôi tự học, còn có nhiều tác phẩm đã thất lạc, chưa công bố hoặc chưa hoàn thành của cụ Nguyễn Duy Cần. Ngoài viết lách, cụ còn tham gia giảng dạy và còn am tường về châm cứu và chữa bệnh Đông y. Cụ luôn là một tấm gương sáng cho nhiều thế hệ học trò về một đời tự học, tính tình phóng khoáng rộng lượng của một người viết sách vì đạo.
            </p>
            <h2>Tác phẩm “Tôi tự học”</h2>
            <div class="picture">
                <img src="https://revisach.com/wp-content/uploads/2020/08/review-cuon-toi-tu-hoc-revisach.com_.jpg" width="600" height="400">
            </div>

            <p>
            Cuốn sách “Tôi tự học” được xuất bản lần đầu tiên vào năm 1961, chứa đựng nội dung về những khái niệm và mục đích của học vấn, đồng thời chỉ ra các phương pháp tự học đúng đắn và làm việc hiệu quả từ kinh nghiệm của các bậc hiền nhân thời xưa. Mặc dù là một tác phẩm được xuất bản khá lâu, “Tôi tự học” vẫn mang đến một trải nghiệm thú vị cho độc giả, đem lại nhiều bài học giá trị và thiết thực cho cuộc sống hiện đại ngày nay.
            </p>
            <p>Tuy tác phẩm của Thu Giang Nguyễn Duy Cần không thuộc vào loại dễ đọc nhưng lại phù hợp với mọi độc giả. “Tôi tự học” có thể dành cho bất kỳ ai, vì việc học là không có giới hạn và việc thu thập kiến thức là cần thiết cho tất cả mọi người. Đặc biệt, với những bạn học sinh, sinh viên, cuốn sách là tài liệu giúp tham khảo và sắp xếp lại việc học của mình, với phụ huynh, cuốn sách có thể giúp họ định hướng việc học cho con em mình.</p>

           <h2>Cảm nhận về cuốn sách “Tôi tự học” </h2>
           <p>“Tôi tự học” giống như một cuốn sách hướng dẫn nhập môn cho những người bước vào con đường tự học, cũng giúp ta tìm hiểu và vỡ lẽ ra được nhiều vấn đề tương quan với phương pháp tự học hiện tại của bản thân và có những thay đổi phù hợp. Cuốn sách không chỉ đọc một lần là hiểu hết những giá trị mà cụ Nguyễn Duy Cần muốn truyền tải, mà phải đọc đến lần ba, lần bốn hoặc thậm chí nhiều hơn nữa để có thể chắt lọc được những tinh hoa trong cuốn sách.</p>

           <p>Tuy lối hành văn có dùng những câu chữ của người xưa và một số phương pháp khá khắt khe, nhưng tôi tin rằng, khi bỏ qua những ý kiến chủ quan, chúng ta có thể lựa chọn cho mình một phương pháp phù hợp trong cuốn sách để áp dụng.</p>
            
            <h2>Lời kết</h2>
           <p>“Tôi tự học” xứng đáng là tác phẩm đầu giường và nên đọc cho mọi độc giả. Hiếm có tác phẩm nào của tác giả Việt Nam mà đi sâu vào việc phân tích chủ đề “tự học” một cách sâu sắc và mang lại nhiều bài học bổ ích đến vậy. Một cuốn sách không quá dày, nhưng lại giúp ta thay đổi tư tưởng về việc tự học và thôi thúc ta không ngừng nâng cao khả năng của bản thân dù đang ở lứa tuổi nào đi chăng nữa.</p>
           
            
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