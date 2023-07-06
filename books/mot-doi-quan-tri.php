<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Một Đời Quản Trị</title>
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
            <h1>Review: Một Đời Quản Trị</h1>
            <p>Đã tròn 1 năm 6 tháng mình nhờ mua và gửi qua Pháp quyển “Một đời quản trị” của Thầy Phan Văn Trường. Đây là quyển sách mình tâm đắc nhất trong những sách viết về quản trị từ khi ra kinh doanh.</p>
            <div class="picture">
                <img src="https://sachkhuyendoc.com/wp-content/uploads/2019/04/review-sach-mot-doi-quan-tri-phan-van-truong.jpg" width="600" height="400">
            </div>
            <p>
               Đọc “Một đời quản trị”, bạn sẽ thấy đây là một tác phẩm tâm huyết mà tác giả “rút ruột” viết ra từ những trải nghiệm cả một đời làm quản trị cấp cao đầy vinh hiển nhưng cũng thẫm đẫm vất vả gian truân. Cuốn sách như một người bạn tri kỷ không phải chỉ để đọc một lần. Mỗi khi gặp bế tắc trong kinh doanh, gặp khó khăn trong một tình huống quản trị nào đó, lật mở vài trang, mình lại tìm được sự đồng cảm, động viên của “anh Phan” với giọng nói chân tình, ấm áp, sẻ chia.
            </p>
            <p>
             Trong khuôn khổ một bài viết, thật khó có thể lột tả hết những tinh tuý của quyển sách. Mỗi người sẽ có những cảm nhận riêng tuỳ theo nhân sinh quan, hoàn cảnh quản trị của mình. Dưới đây là những điểm mà mình tâm đắc:
            <h2>1. Nghệ thuật quản trị: Bẩm sinh hay do rèn luyện.</h2>
            <div class="picture">
                <img src="https://images.careerbuilder.vn/content/news/01BinhMKT/news/11182.PNG" width="600" height="400">
            </div>

            <p>
            Tác giả coi quản trị là một nghệ thuật. Mà đã là nghệ thuật mỗi nghệ thuật đều có những kỹ thuật đặc trưng có thể học được, ví như ai cũng có thể học chơi piano, học hội hoạ vv. Tuy nhiên để trở thành nghệ sỹ, nhất là nghệ sỹ thăng hoa thì yếu tố bẩm sinh và lòng đam mê cũng rất quan trọng. Có lẽ chỉ đam mê mới khiến người nghệ sỹ dâng hiến cả đời mình cho môn nghệ thuật mình yêu mến. Nghệ thuật quản trị cũng vậy. Khi đó người ta không làm nghề mà sống với nghề.
            </p>

            <h2>2. Phân biệt giữa Quản lý và Quản trị.</h2>
            <div class="picture">
                <img src="https://sudospaces.com/leanhhr-com/2021/07/hrb-min-800-x-600.jpg" width="600" height="400">
            </div>

            <p>
            Chúng ta thường nhầm lẫn giữa Quản lý với Quản trị. Nhất là khi doanh nghiệp còn nhỏ, chúng ta thường phải đảm nhiệm cả hai vai trò: Quản lý & Quản trị.
            “Quản lý thì có thể áp dụng những mô hình doanh nghiệp đã được thử nghiệm trên thế giới, phân bổ công việc hiệu quả nhưng quản trị thì đòi hỏi phải đi sâu vào lòng người, nắm bắt năng lực thật sự của những cộng sự sát cánh với mình, gắn kết giữa người với người. ” – GS Phan Văn Trường.
            </p>
            
            <h2>3. Lấy thước đo để Quản lý, lấy Lương tri để quản trị.</h2>
            <div class="picture">
                <img src="https://sohanews.sohacdn.com/thumb_w/660/160588918557773824/2020/12/10/photo1607577771601-16075777718351716154830.jpg" width="600" height="400">
            </div>

            <p>
            Quản lý là quản lý công việc.
            Quản trị là quản trị con người.
            Quản trị doanh nghiệp chính là quản trị con người.
            Quản trị tốt nằm ở ba chữ: Động lực, Động lực và Động lực.

            Đến đây, mình thấy tiếng Việt rất hay khi dùng chữ “Nhân Sự” nghĩa là những sự việc liên quan đến con người. Ý nghĩa này hay và coi con người là một chủ thể toàn diện, hay hơn chữ “Humain Ressource” trong tiếng Anh hay tiếng Pháp, nghĩa là coi con người như công cụ là một nguồn lực của doanh nghiệp bên cạnh những nguồn lực khác: tài chính, tri thức, nhà xưởng vv.
            Có lẽ vì thế, bằng những trải nghiệm thực tế của mình, tác giả đã trích dẫn ở bìa sách như sau:

            “Đố ai đếm đủ vì sao.
            Đố ai quản trị có bao nhiều tình”

            Người ta có thể đo đếm thành công của một người bằng tước phẩm, số tiền người đó thu về nhưng làm sao có thể đo đếm cái tình, cái tâm người đó đặt vào việc anh ta làm?
            </p>

            <h2>4. Gia nhập và chia tay.</h2>
            <p>
           Hầu hết các doanh nghiệp Tây cũng như Ta, mỗi khi đón người mới thì hồ hởi kèn trống, khi ra đi thì lại lặng lẽ, âm thầm có khi lén lút như phải tội.
            </p>
            <p>“Có thể nói chắc chắn rằng sự cộng tác của nhân viên trong những năm làm việc với công ty thành công hay thất bại, tốt hay xấu, hiệu quả hay vô nghĩa, chân thành hay giả dối đều tuỳ thuộc vào cách cư xử từ công ty khi họ được công ty tuyển vào hoặc mời ra…”</p>
            <p>“Hãy làm cho nhân viên cảm nhận rằng họ là thành viên của gia đình doanh nghiệp, không hơn không kém, mỗi người một việc, mỗi người một vị trí, mỗi cá nhân một trách nhiệm, nhưng người nào cũng là thành viên quý của đại gia đình!…Có ngày vào thì có ngày chia tay, theo quy luật tự nhiên của hệ thống. Nhưng đã là thành viên trong gia đình thì là thành viên vĩnh viễn. Đến ngày ra đi, công ty sẽ chuẩn bị hành trang cho bạn từ trước, không những bạn sẽ bỏ một việc có thể đã chán ngán, mà bạn sẽ nắm được cơ hội mới để tiến theo sở trường mới.”</p>
            <p>Nếu ví Nghệ thuật quản trị như nghệ thuật hội hoạ mà ở đó Thầy Phan Văn Trường đã là một nghệ sỹ tài danh thì quyển “Một đời quản trị” đã truyền cảm hứng cho nhiều người cầm bút lên học vẽ. Trong đó có mình.</p>
           
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