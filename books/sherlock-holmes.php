<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Sherlock Holmes</title>
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
            <h1>Review: Sherlock Holmes </h1>
            <p>Sherlock Holmes của Arthur Conan Doyle có thể coi là huyền thoại của các tác phẩm thể loại trinh thám trên thế giới. Tôi nhớ mình bắt đầu đọc Sherlock Holmes từ cuối năm học cấp 2. Thực ra hồi đó đọc chưa hiểu hết nên chưa thích lắm, chỉ thấy ông ấy rất “vi diệu”.
               Sau này lên cấp 3 đọc lại lúc đó mới thực sự là say sưa theo từng vụ án, theo từng bước chân của thám tử Sherlock Holmes.</p>
            <div class="picture">
                <img src="https://vnwriter.net/wp-content/uploads/2019/08/sach-khoa-hoc-suy-luan.jpg" width="650" height="500">
            </div>
           <p>Cuốn sách là tập hợp những câu chuyện trinh thám phá án của thám tử Sherlock Holmes. Mỗi câu chuyện là một vụ án khau nhưng cũng có thể có liên kết với vụ án trước. Trong đó có một vụ án được coi là “để đời” của thám tử Sherlock Holmes,
              đó là cuộc đối đầu giữa ông và Giáo sư James Moriarty – kẻ thù và cũng là đối thủ lớn nhất của Holmes.
        </p>
        <h2>
        Phân tích nội dung
        </h2>
            <p>
            Điểm đặc biệt nổi bật, và cũng là đặc trưng tạo nên một Sherlock Holmes huyền thoại đó chính là những suy luận “thần thánh” bắt nguồn từ những chi tiết cực kỳ đơn giản mà ai cũng nhìn thấy. Suy luận đó ngoài sự thông minh còn phải có kinh nghiệm sống dồi dào và kiến thức uyên bác. 
            Và đặc biệt là biết cách vận dụng những kinh nghiệm và kiến thức đó vào từng chi tiết trong vụ án và trong cuộc sống
            </p>
           <p>
           Ông ấy có thể quan sát một người rất kín đáo và cũng rất nhanh biết được người đó làm nghề gì, từ đâu đến, gia đình như thế nào, vừa xảy ra chuyện gì, tâm trạng, tính cách như thế nào và thậm chí là quá khứ của người đó ra sao. Những suy luận này đều phục vụ cho mục đích điều tra phá án, chứ không phải là chỉ suy luận cho vui hay để khoe khoang.
            </p>
            <div class="picture">
                <img src="https://img.websosanh.vn/v10/users/review/images/bp7wuhwrm6lsr/sach-sherlock-holmes.jpg?compress=85" width="750" height="450">
            </div>
            <h2>
             Cảm nhận khi đọc
        </h2>
            <p>
            Bác sỹ Watson, một người bạn thân và cũng là một trợ lý của Sherlock Holmes đã rất nhiều lấn “mắt chữ O, mồm chữ A” với khả năng suy luận của Sherlock Holmes. Và tôi tin rằng rất nhiều độc giả trên thế giới, trong đó có tôi cũng giống Bác sĩ Watson. Sau này, bác sỹ Watson cũng học hỏi được một chút khả năng suy luận của Sherlock Holmes.
            </p>
            <p>
            Những vụ án, câu chuyện của Sherlock Holmes đã được dựng thành nhiều tập phim nhưng có vẻ không hay và hấp dẫn bằng đọc truyện.
        </p>

            <div class="picture">
                <img src="https://cdn.pixabay.com/photo/2019/09/01/06/19/questions-4444446_960_720.jpg" width="600" height="400">
            </div>
            <p>
            Ngoài việc khâm phục khả năng suy luận tài tình của Sherlock Holmes, thì cuốn sách còn đặc biệt hấp dẫn ở chỗ: Các vụ án được tác giả miêu tả rất chi tiết và chặt chẽ, hầu như tác giả đã đưa ra cho người đọc tất cả các dữ kiện để có thể suy đoán ra hung thủ, theo từng bước đi của Sherlock Holmes. Nhưng cuối cùng thì người đọc cũng không thể đoán được và cũng chỉ có thám tử Sherlock Holmes mới là người tìm ra thủ phạm.
            </p>
           
            <div class="picture">
                <img src="https://mb.dkn.tv/wp-content/uploads/2020/08/thumb-700x366.jpg" width="680" height="450">
            </div>
            <p>Những suy luận của Sherlock Holmes sau khi đọc xong thì tôi thường tự hỏi: Sao đơn giản thế mà mình không nghĩ ra?.</p>
            <p>Những vụ án trong Sherlock Holmes rất ly kỳ, hấp dẫn và hồi hộp nhưng không hề có yếu tố kinh dị. Nếu tác giả chỉ khai thác nội dung là những vụ án khác nhau thì cuốn sách đã đủ hấp dẫn rồi. Nhưng sự vĩ đại của tác giả Arthur Conan Doyle là ông đã tạo ra một vụ án lớn, nổi tiếng và tốn nhiều giấy in nhất của Thám tử Sherlock Holmes chính là cuộc đối đầu với Giáo sư James Moriarty cũng đồng thời là một tên tội phạm khét tiếng, đây có 
              thể coi là đối thủ lớn nhất của Sherlock Holmes, chính vì vậy mà cuộc đấu trí giữa họ luôn khiến cho độc giả mong đợi nhất và tạo cảm giác rất gay cấn nhiều bất ngờ hơn các vụ án khác.
</p>
              <div class="picture">
                <img src="https://http2.mlstatic.com/D_NQ_NP_990282-MLB31078056017_062019-O.jpg" width="500" height=550">
            </div>
              <h2>Lời kết</h2>
              <p>Tác phẩm Thám tử Sherlock Holmes xuất bản lần đầu năm 1887, so với hiện tại thì các kỹ thuật và thiết bị hỗ trợ điều tra phá án còn thua kém rất xa. Vậy nhưng tôi đọc tác phẩm vẫn không hề cảm thấy nội dung bị lỗi thời hay lạc hậu. Và tôi tin rằng Thám tử Sherlock Holmes sẽ mãi là thần tượng của rất nhiều độc giả trên thế giới, kể cả những người không làm việc liên quan đến thám tử, điều tra, phá án…
Sẽ thật thiếu sót nếu Review tác phẩm mà lại chỉ nhắc đến nhân vật chính. Phải dành một lời cảm ơn và ngưỡng mộ nhất đến tác giả Arthur Conan Doyle. Ông cũng là một huyền thoại của các nhà văn viết truyện trinh thám.</p>
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