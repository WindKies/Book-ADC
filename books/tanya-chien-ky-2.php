<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review:Tanya Chiến Ký 2</title>
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
            <h1>Review:Tanya Chiến Ký </h1>
            <p>Trên tiền tuyến giữa cuộc chiến, một cô gái nhỏ bé với làn da trắng như gốm sứ, đôi mắt xanh kiên định và mái tóc vàng nhuốm màu khói chiến tranh. Cô đang chỉ huy đội quân của mình bằng chất giọng lanh lảnh bay qua bầu trời đầy súng đạn khốc liệt này của đế quốc. Vậy cô gái này thực ra là ai? Đó là thiếu úy magoi xuất thân từ đế quốc. Trước đó là một người nhân viên ưu tú top đầu Nhật Bản đã bị chuyển sinh sang thế giới này sau khi cấp dưới bị sa thải thì đẩy anh xuống đường tàu điện ngầm lúc nó đang tới. Cộng thêm việc chọc giận thực thể bí ẩn tự xưng thần. Tuy vậy cô vẫ giữ được bản chất và tài năng của mình với tương lai sáng lạng trong việc làm chủ quân đội.!</p>
            <div class="picture">
                <img src="https://genk.mediacdn.vn/2019/8/28/1-1566963527595657024572.jpg" width="600" height="400">
            </div>
            <h2>
                1. Trích đoạn sách:
            </h2>
            <p>
Câu hỏi đầu tiên của Không đoàn trưởng Degurechaff là về tình hình không chiến của mặt trận.

Khi nhận được câu trả lời của người truyền tin từ Bộ Chỉ huy rằng không có thông tin nào về không lực địch, Không đoàn trưởng Degurechaff nghiêng đầu như thể vừa nhận được một báo cáo không thể tin nổi. Cô phải hỏi lại lần thứ hai, rằng đường truyền có đang bị vấn đề gì không?

Đáp lại câu hỏi, sĩ quan liên lạc khẳng định đường truyền vô tuyến lẫn hữu tuyến đều bình thường. Và thậm chí, kênh liên lạc FAC từ trung tâm kiểm soát Dacia vẫn đang được kết nối.

Ngay sau khoảnh khắc báo cáo trên, các sĩ quan phụ trách của Bộ Tư lệnh cảm thấy một luồng hơi lạnh chạy dọc theo sống lưng mình. …

Thiếu tá Degurechaff đang mỉm cười, thậm chí là đang cười với một vẻ mặt vui sướng tột độ. Trong giây phút ấy, không từ nào có thể diễn tả hết được sự kinh ngạc của toàn trụ sở.

Lúc đấy, không ai hiểu ra được ẩn ý đằng sau nụ cười ấy. Tuy nhiên, nếu bây giờ được nhìn thấy nụ cười mỉm đó có lẽ tôi cũng sẽ nở một nụ cười đáp lại y như vậy. Đó là nụ cười của một con thú săn mồi vô cùng dữ tợn, như niềm hân hoan của một con sói đói vừa nhìn thấy con mồi của mình.

Đúng vậy. Biểu cảm của Tanya thể hiện rằng thật khó tin khi một may mắn bất ngờ lại ập đến như vậy. Tuy nhiên, dựa trên lý trí mà nói thì đó là một sự thật đã được nói đến và xác nhận. Hiểu được điều này, một niềm hân hoan tràn ngập trong cô. Ôi! Phải chăng đó chính là tột cùng của cảm xúc? Đứng trước một cơ hội quá tốt như vậy, miệng cô vô thức nhếch lên một nụ cười không thể che giấu.

Một chiến trường hoàn toàn không có không lực địch?

Đúng, là chiến-trường-hoàn-toàn-không-có-khônglực-địch đó!!!

Ý nghĩa của việc này vừa ngọt ngào lại vừa kinh hãi. Nghĩ kỹ lại, bao nhiêu binh sĩ ở Norden và Rhine đã trông chờ phe họ sẽ giành được ưu thế trên không?

Nhưng tại Dacia, trong mắt của Tanya, uy thế hoàn hảo của không quân được đảm bảo bằng một lý do lẽ ra không được tồn tại trong chiến tranh thời hiện đại, “Không có không lực địch”.

Bầu trời không có không lực của quân địch ư? Thật lòng mà nói, quân đội Đại Công quốc Dacia có lẽ… xem như vô vọng rồi.

Tanya không định đánh giá thấp đối thủ nhưng xem ra lần này, cô đã đánh giá họ quá cao! Mặc dù trên chiến trường cũng thường xảy ra những tình huống ngoài dự tính, nhưng nếu là những tình huống ngoài dự tính đáng mừng như thế này thì rất đáng hoan nghênh.

Vận mệnh có thể thay đổi đến mức như thế này sao? Đúng, vận mệnh đang nghiêng về phía chúng ta

Ngày 24 tháng 9, chỉ là ngày sinh của Tanya trên giấy tờ nhưng có thể xem đây như là món quà sinh nhật đầu tiên. Khi nhận ra một ngày tuyệt vời đến vậy lại ập đến, Tanya muốn nhảy cẫng lên giữa đám đông như một đứa trẻ để thể hiện sự vui sướng của mình. Trong vô thức, thứ cảm xúc trào dâng trong lòng khiến má Tanya đỏ lựng. Cô thì thầm: “Ôi, thần linh ơi! Xin cảm tạ Ngài vì cơ hội ngàn năm có một này.”

Nói thẳng ra, khi ở tình trạng tâm lý bình thường, cô ấy có lẽ còn chẳng nhếch nổi khóe miệng của mình. Vì nó là biểu hiện cần có của một vị chỉ huy.

Quyền làm chủ trên không tuyệt đối đã được xác lập. Người có thể hiểu rõ ý nghĩa của điều đó, trong khoảnh khắc ấy, chỉ có Tanya. Chính vì vậy, không chút giấu giếm, cô bước đi hân hoan như đang nhảy nhót để bộc lộ cảm xúc của mình.
            </p>
            <div class="picture">
                <img src="https://i.pinimg.com/originals/9a/6f/1d/9a6f1d85922b6f1546381da92cd93050.jpg" width="600" height="400">
            </div>
            <h2>
                2. Tại sao nên đọc ?
            </h2>
            <p>
            Bạn sẽ không thể bỏ lở đi siêu phẩm này đâu. Nó thuộc top đầu bán chạy của Nhật Bản đấy và với nội dung phong phú, góc nhìn đa dạng và tuyệt vời của một Carlo Zen dù chỉ là tác phẩm đầu tay minh họa bởi Shinotsuki Shinobu lấy đề tài chiến tranh, giả tưởng thời cận hiện đại trên một thế giới khác, tồn tại đồng thời pháo binh, những cỗ tăng thiết giáp và máy bay chiến đấu cùng với những ma pháp sư sử dụng ngọc diễn toán can thiệp vào thế giới vật lý bay lượn trên bầu trời. Nó đã được chuyển thể thành anime và có hẳn hoi một bộ movie nhé. Bạn nên biết rằng có anime rồi còn có thêm cả movie nữa thì đừng hỏi đến độ nổi tiếng nhé.
            </p>
            <div class="picture">
                <img src="https://animecafehost.files.wordpress.com/2019/07/tanya-header.jpg" width="600" height="400">
            </div>
            <h2>
                3. Đánh giá của độc giả:
            </h2>
            <p>
            468 lượt bình chọn trên fahasa cùng với hoàn toàn là 5 sao trên lượt đánh giá đã đủ kinh dị cho bạn chưa ha? Thật sự rất rất là ổn với quyển này đấy. Rồi một ngày nào đó nó sẽ ra tập 2 sớm nên bạn còn không nhanh tay cuỗm ngay tập 1 sớm đi. Có thể bạn chưa biết rằng mới ra được vài ngày thì nó đã có hiện tượng cháy hàng đấy.
            </p>
            <div class="picture">
                <img src="https://otakugo.net/wp-content/uploads/2019/09/ra-mat-light-novel-tanya-chien-ky-khuc-chien-ca-ve-cuoc-song.jpg" width="600" height="400">
            </div>
         
            <div class="picture">
                <img src="https://otako.ir/wp-content/uploads/2021/02/EZbt2p1XQAAIQiq.jpg" width="600" height="300">
            </div>
            <p>Đối với các độc giả hâm mộ dòng sách light novel, hẳn cốt truyện anh hùng cứu thế giới không còn quá mới lạ. Tuy nhiên, bằng trí tưởng tượng phong phú của mình, tác giả Carlo Zen đã khéo léo thổi vào 'Tanya Chiến kỷ' một luồng gió mới. Song song với câu chuyện về hành trình chứng minh bản thân của cô bé Tanya Degurechaff còn là quá trình lĩnh ngộ những bài học đầy tính nhân văn về tình người – điều mà Tanya của kiếp trước vô tình đã đánh mất. Ít ai biết rằng ngoài thân phận Tanya Degurechaff, cô bé Tanya còn mang trong mình những ý ức của một gã đàn ông trưởng thành!
Trước khi được sinh ra ở dị giới với hình dạng bé gái, Tanya từng là một trưởng phòng nhân sự mẫn cán tại đất nước Nhật Bản xa xôi. Trong kiếp sống này, người đàn ông đó mẫn cán, chăm chỉ nhưng không có lòng trắc ẩn và sống một cuộc sống nhạt nhòa, tuân theo sự sắp xếp từ cấp trên, từ xã hội. Sự cứng nhắc của anh ta đã gây ra bi kịch cho không ít nhân viên trong công ty – những người đã bị anh ta thẳng tay sa thải để cắt giảm nhân sự, bất chấp những lời cầu xin, quỳ lạy từ họ. Và như một sự trùng hợp, hoặc có thể là cái giá cho sự tàn nhẫn của mình, mà những ký ức cuối cùng người đàn ông này còn nhớ trong đầu về kiếp sống bình thường của mình là cú đẩy mạnh từ phía sau khi đang đứng chờ tàu điện…
Kiếp sống trong thế giới tranh đấu khắc nghiệt, tàn khốc thực chất là một sự trừng phạt cho thói vô tâm, thiếu lòng trắc ẩn lẫn đức tin của một cá nhân, hay mở rộng ra hơn là sự răn đe, cảnh tỉnh cho con người hiện đại. Đó là những gì mà vị trưởng phòng đã nghe được từ thế lực thần bí khi lạc giữa khoảnh khắc cả thời gian và không gian ngưng đọng.
Đan xen khéo léo giữa chi tiết kỳ ào, những trận chiến tàn khốc, tác phẩm light novel đầu tay của tác giả Carlo Zen còn đưa ra nhiều thông điệp đầy ý nghĩa về cuộc sống, tình yêu thương, thấu hiểu giữa con người với con người. Đó cũng là lý do vì sao nhiều độc giả đã dành cho 'Tanya Chiến ký' những lời khen ngợi, ca ngợi tác phẩm như một khúc chiến ca đầy nhân văn về cuộc sống.
Mặc dù có rất nhiều người nói cuốn này chỉ hợp cho các bạn nam đọc, song mình cho rằng không phải cũng như thế, và nếu tư vấn vậy thì hơi phiến diện. Do đó, dù bạn là nam hay nữ, điều bạn nên quan tâm chỉ là bạn có thích chủ đề này hay không thôi, vì cuốn này rất đáng đọc.</p>
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