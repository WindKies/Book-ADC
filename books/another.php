<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Another</title>
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
            <h1>Review: Another </h1>
            <p>Another là loạt Light Novel kinh di được viết bởi cây bút tài năng Yukito Ayatsuji – một trong những nhà văn chuyên viết tiểu thuyết trinh thám kinh dị hàng đầu của Nhật Bản. Khi ra mắt, Another đã tạo ra một tiếng vang lớn và để lại không ít ấn tượng trong lòng người đọc.</p>
            <div class="picture">
                <img src="https://cf.shopee.com.my/file/0e03486d19de3f4f0e3715f0febed3b8" width="550" height="500">
            </div>
           <p>Tính cho đến thời điểm hiện tại, cuốn tiểu thuyết kinh dị đình đám này đã được chuyển thể thành các loại hình truyền thông khác như Manga, Anime hay thậm chí là có cả một phiên bản Live Action.
        </p>
        <h2>
        Sơ lược về cốt truyện
        </h2>
            <p>
            Trước khi bước vào chương đầu tiên, phần mở đầu của Another là một câu chuyện từ 26 năm về trước, tại lớp 9-3 của trường trung học Yomiyama Kita, có một học sinh tên là Misaki rất giỏi trong cả việc học hành lẫn thể thao, mà lại là một người vô cùng tốt bụng nên được tất cả thầy cô lẫn bạn bè yêu quý.
Tuy nhiên, một bi kịch đã xảy ra khiến cho Misaki và cả gia đình bị chết. Vì quá đỗi tiếc thương, không một ai chấp nhận sự thật đau lòng này nên cả lớp 9-3 đều tự nhủ rằng Misaki vẫn còn sống.
            </p>
           <p>
         Nhưng rồi một điều kì lạ đã đến vào ngày tốt nghiệp của cả lớp, Misaki – một người đã chết không còn tồn tại trên đời bỗng xuất hiện trong bức ảnh kỉ niệm của lớp với khuôn mặt nhợt nhạt, cùng nụ cười vô cùng quái dị. Kể từ đó, hàng tấn bi kịch cứ thế xảy ra với lớp 9-3 qua từng thế hệ sau này.
Another xoay quanh Sakakibara Kouichi – một nam sinh chuyển trường đến lớp 9-3 của trường trung học Yomiyama sau 26 năm, từ những sự kiện diễn ra ở phần mở đầu.
Trong một lần tình cờ, cậu đã vô tình gặp được một cô gái bí ẩn đeo băng bịt mắt có tên là Misaki Mei.
Tuy nhiên, bằng một cách bất ngờ nào đó thì Kouichi nhận ra chỉ có mình cậu cảm thấy sự hiện diện của Mei ở lớp học, trong khi tất cả các học sinh, giáo viên chủ nhiệm lớp 9-3 đều cho rằng cô không hề tồn tại.
Đây cũng chính là lúc mà tất cả những gì diễn ra trong Another được bắt đầu.
            </p>
            <div class="picture">
                <img src="https://i.imgur.com/6li13ou.jpg" width="600" height="450">
            </div>
            <h2>
             Cảm nhận khi đọc
        </h2>
            <p>
            Thực tế mà nói thì mình cũng không phải là một fan của dòng Light Novel trinh thám, kinh dị nhưng khi nghe qua phần cốt truyện trong Another thì mình đã vô cùng tò mò và quyết định mua về đọc.
Khác biệt với một số những tiểu thuyết khác của Yukito Ayatsuji, Another hoàn toàn phù hợp với mọi bạn đọc trên thế giới, khi nó không yêu cầu bạn cần phải am hiểu quá nhiều về văn hóa người Nhật để có thể được “thông não” tất cả những gì xảy ra trong câu chuyện.
            </p>
            <p>
            Đầu tiên mình sẽ nói về tuyến nhân vật chính trong Another, đó là Sakakibara Kouichi và Misaki Mei. Đây là hai nhân vật có tính cách hoàn toàn đối lập nhau, Kouichi lại là một người thân thiện, dễ gần, còn Mei lại là một cô gái vô cùng lạnh lùng, ít nói.
Vì sự bí ẩn ấy, Mei thu hút gần như toàn bộ sự chú ý và tò mò của độc giả so với nhân vật trung tâm là Kouichi.
Ở phần đầu Another, mọi tình tiết trong câu chuyện sẽ khiến bạn liên tục bị “hack não” bởi những sự việc cứ liên tục úp mở ngay trước mặt như câu nói khó hiểu “một nửa tội nghiệp đang đợi tôi ở đó” của Misaki Mei, hay những luật lệ có phần khá kì lạ của trường Bắc Yomi
        </p>

            <div class="picture">
                <img src="https://preview.redd.it/p6bv4rxsjeb71.jpg?auto=webp&s=71e41a87cbb642868254461569fa05b06ecc5319" width="600" height="400">
            </div>
            <p>
            Các bí ẩn ấy cứ thế diễn ra một cách vô cùng chậm rãi nhưng nó lại không khiến người đọc dễ bỏ cuộc giữa chừng mà càng kích thích sự tò mò để hoàn thành nó
Ở nửa sau, mạch truyện của Another ngày càng kịch tính, căng thẳng  với đỉnh điểm là khi bắt đầu có một nhân vật phải chết và rồi sau đó thì những cái chết của các thành viên lớp 9-3 và người thân của họ xảy ra liên tục một cách bất ngờ. Những cái chết ấy có thể là tai nạn hay thậm chí là tự sát một cách man rợ.
            </p>
           
            <div class="picture">
                <img src="https://animecorner.me/wp-content/uploads/2021/09/another-light-novel-sequel.jpg" width="600" height="380">
            </div>
            <p>Càng về cuối, bạn sẽ cảm thấy hứng thú về câu chuyện trong  Another bởi toàn bộ những thắc mắc ở phần đầu đều được giải mã.
Khi ấy, bạn sẽ hiểu rõ hơn về thân phận của Misaki Mei, việc tại sao cô lại phải đeo một bên bịt mắt, cô thực sự tồn tại như một con người bằng da thịt, hay chỉ là một hồn ma của người đã chết.
Và rồi câu hỏi quan trong nhất sẽ được giải đáp: Kẻ đã chết là ai? Tại sao những học sinh lớp 9-3 và người thân của họ cứ liên tục chết từng người một? Làm thế nào để chấm dứt được nó?.</p>
            <p>Trong xuyên suốt tác phẩm của mình, tác giả Yukito còn khéo léo đan xen một số tình tiết hài hước mang đậm tính vui đùa của tuổi học trò để làm nổi bật tính cách nhân vật và làm giảm bớt đi không khí căng thẳng, nặng nề của dòng tiểu thuyết kinh dị.</p>
            <p>Với nội dung sâu sắc cùng với lối kể chuyện hấp dẫn, Another xứng đáng là một tác phẩm kinh dị xuất sắc để bạn dành thời gian ra để trải nghiệm nó.
Đối với những ai xem phiên bản Anime ra mắt năm 2012 của Another thì mình khuyên đừng nên bỏ qua nó bởi những tình tiết trong câu chuyện vẫn có phần khác so với phim.</p>
              <div class="picture">
                <img src="https://s199.imacdn.com/ta/2016/04/anothernovelfull1163168-14612223890565.jpg" width="600" height=550">
            </div>
              <h2>Lời kết</h2>
              <p>Đó là những cảm nhận cá nhân của mình về cuốn tiểu thuyết Another. Mình mong rằng bài viết này sẽ giúp cho các bạn tìm ra những cuốn tiểu thuyết hấp dẫn để đọc hay giúp ích cho những ai đang suy nghĩ về việc có nên mua thử nó về đọc hay không.

Như thường lệ, nếu thấy bài viết này hay thì đừng quên like, chia sẻ cho bạn bè, người thân và nhớ ủng hộ blogchiasekienthuc.com để đón đọc những thông tin vô cùng hữu ích nhé.</p>
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