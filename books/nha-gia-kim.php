<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Nhà giả kim </title>
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
            <h1>Review: Nhà giả kim </h1>
            <p>Cuốn sách Nhà giả kim được biết đến là một trong những cuốn sách bán chạy nhất hiện nay với hơn 65 triệu bản cuốn sách được xuất bản ra. Vậy đâu là yếu tố khiến cuốn sách này trở nên thu hút người đọc đến vậy?
Hãy cùng với chúng tôi review cuốn sách Nhà giả kim của tác giả Paulo Coelho qua bài viết dưới đây nhé.
Cuốn sách này được tác giả Paulo Coelho viết nên và được nhiều người đánh giá rằng sẽ rất phù hợp dành cho những ai đang cần một sự định hướng đúng đắn cho cuộc đời mình. </p>
            <div class="picture">
                <img src="https://sachhay24h.com/uploads/images/2019/11/9/51/nha-gia-kim-1_600x400.jpg" width="600" height="400">
            </div>
            <h2>
                Người khen, kẻ chê
            </h2>
            <p>
            Nội dung cuốn sách kể về cậu bé chăn cừu có tên Santiago ở Tây Ban Nha, cậu muốn được khám phá mọi nơi nên đã mạnh dạn tự đi theo một cuộc hành trình của riêng mình. Điểm thú vị là trong suốt chặng đường của mình, cậu luôn mang theo bên mình một cuốn sách. Vào một tối đầy sao, khi cậu đang nằm ngủ tại một nhà thờ cũ đã đổ nát, cậu bỗng mơ thấy một giấc mơ kỳ lạ, được một người lạ như một nhà giả kim hướng dẫn và bày cách để từ Tây Ban Nha sang Kim tự tháp Ai Cập tìm kho báu. Dù chỉ là một giấc mơ mà cậu còn không biết đó là thật hay mơ và nghe có vẻ hơi hoang đường, nhưng cậu bé này vẫn quyết định đi tìm kiếm kho báu một cách thật sự.
            </p>
            <div class="picture">
                <img src="https://www.reader.com.vn/uploads/images/2019/11/9/51/nha-gia-kim_600x449.jpg" width="600" height="400">
            </div>

            <p>
            Cuộc hành trình đi tìm kho báu của cậu bé đã phải trải qua và gặp rất nhiều khó khăn và hiểm nguy luôn rình rập, lúc thì bị lừa, lúc thì hết tiền… nhưng cậu bé vẫn quyết tâm cao độ để tiếp tục cuộc hành trình, như trong cuốn sách Nhà giả kim đã nói: “khi người nào muốn điều gì thì cả vũ trụ sẽ chung sức lại để người ấy đạt được điều mơ ước”.
            </p>
            <div class="picture">
                <img src="https://chiasemoi.com/wp-content/uploads/2019/04/sach-nha-gia-kim.jpg" width="600" height="400">
            </div>
            <p>
            Trong hành trình rất nhiều gian nan của mình, Santiago đã đi đến được một ốc đảo, tại đây, cậu đã được gặp và có cảm tình với cô nàng Fatima. Sức mạnh tình yêu lúc này đã đủ lớn để khiến cậu chẳng bận tâm đến việc đi tìm kho báu kia nữa. Nhưng rõ ràng, những lúc như thế này cậu phải thật lý trí và công tâm, và may mắn thay, cô nàng Fatima đã rất tâm lý và mong muốn cùng cậu tiếp tục thực hiện hành trình đi tìm kiếm kho báu này.
            </p>
            <p>
            Đối với cuốn sách Nhà giả kim này, những bài học, thông điệp sẽ được tác giả đưa ra một cách thẳng thắn và ngắn gọn, giúp cho người đọc không cần phải suy nghĩ và tốn quá nhiều thời gian để ngẫm nghĩ về thông điệp của cuốn sách này. Rõ ràng với cách truyền tải nội dung đơn giản và tiếp cận người đọc trực tiếp như thế này, sẽ dễ dàng giúp người đọc tiếp cận với cuốn sách nhanh hơn, đó cũng có thể là lý do giúp cuốn sách này được yêu thích và bán chạy đến như thế.
            </p>
            <div class="picture">
                <img src="https://topreview.vn/wp-content/uploads/2019/12/Nha-gia-kim-2.jpg" width="600" height="400">
            </div>
            <p>
            Nếu như cuộc sống chính là một vùng sa mạc với bao nguy hiểm đang rình rập, và chúng ta chính là những người đang trong một cuộc phiêu lưu đi qua những miền sa mạc và những khu rừng sâu thẳm, thì trong cuốn sách Nhà giả kim này, nó chỉ gói gọn lại còn là một bãi cát nhỏ mà nhân vật trong câu chuyện có thể dễ dàng bước vài bước chân qua bãi cát đó để đến với một khu ốc đảo khác. 
            </p>
            <p>
            Còn đối với mỗi người đọc chúng ta, sau khi đọc xong cuốn sách này, thay vì chỉ biết gật gù với những bài học thông điệp của cuốn sách mang lại, mà bạn nên bước ra thế giới ngoài kia để nếm trải những hương vị của cuộc sống, như thế mới giúp chúng ta trưởng thành, cứng cáp và dễ dàng đạt được thành công hơn. 
            </p>
            <p>
            Trong cuốn sách Nhà giả kim này, có một đoạn văn mà tôi rất tâm đắc:
            </p>
            <p>
            “Nghĩa là khi ăn tôi không làm gì khác hơn là ăn. Khi chạy tôi không làm gì khác ngoài chạy. Rồi nếu có phải đánh nhau thì cái ngày tôi chết cũng đẹp như mọi ngày khác. Tôi không sống trong quá khứ hay tương lai. Tôi chỉ có hiện tại và quan tâm tới hiện tại. Nếu ta lúc nào cũng ở trong hiện tại được thì ta là người hạnh phúc. Như thế ta thấy rằng sa mạc này vẫn đang sống, rằng bầu trời vẫn đầy sao và người ta đánh nhau vì đó là đặc trưng của con người. Như thế cuộc đời sẽ thành một ngày hội lớn, một buổi lễ lớn vì đời bao giờ cũng chỉ là khoảnh khắc ta hiện đang sống.”
            </p>
            <p>
            Cuốn sách Nhà giả kim được tác giả viết với lời văn giản dị, gần gũi và được đưa vào một vài yếu tố thần thoại cổ tích giúp thu hút và hấp dẫn độc giả vào nội dung câu chuyện hơn. Một điểm cộng của cuốn sách là thông điệp và bài học rất rõ ràng và ý nghĩa.
            </p>
            <p>
            Qua nhân vật cậu bé Santiago trong tác phẩm này cho chúng ta thấy rằng, nếu không dám theo đuổi và thực hiện mơ ước của mình, thì bạn sẽ cảm thấy nuối tiếc vì đã không dám đương đầu với những khó khăn ở ngoài kia. Như cậu bé Santiago trong câu chuyện này, nhờ có cuộc hành trình đi tìm kho báu này mà cậu đã có được một mối tình dễ thương với cô nàng Fatima, cũng như cậu đã được tận mắt chứng kiến sự kỳ vĩ và lớn lao của Kim tự tháp... đó chính là những quả ngọt mà cậu đã có được sau chuyến hành trình đầy khó khăn và gian nan của mình. 
            </p>
            <p>
            Chính nhờ vào chuyến hành trình mà cậu đã và đang theo đuổi này đã giúp cho Santiago  nhận ra rằng những niềm vui hạnh phúc không ở đâu xa xôi, nó nằm ngay chỗ chúng ta đang đứng và những nơi mà mình đã từng đi qua, đó chính là vận mệnh của mỗi con người...
            </p>
            <p>“Vận mệnh chính là điều mà anh luôn muốn đạt được. Bất kể anh là ai, anh làm gì, khi anh thật tâm mong muốn điều gì, thì điều mong muốn ấy sẽ được hình thành trong cõi tâm linh vũ trụ. Đó sẽ là nhiệm vụ của anh trên Trái Đất”.
“Cuộc đời rất hào phóng với người nào chịu theo đuổi vận mệnh của mình“.
             </P>
           
            <div class="picture">
                <img src="https://4.bp.blogspot.com/--A9vniHBsic/UuZz-6a5sFI/AAAAAAAAAFY/YaB0j5WKPho/s1600/FA-bia-full-sach-Nha-gia-kim-02.png" width="600" height="300">
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