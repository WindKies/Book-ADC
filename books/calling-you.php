<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Calling you</title>
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
            <h1>Review: Calling you </h1>
            <p>Calling You là một tuyển tập truyện ngắn của Otsuichi, thuộc thể loại tình cảm, siêu nhiên, gồm ba truyện là Calling You, Kiz/Kids và Flower song. Ba câu truyện mang ba nội dung hoàn toàn khác nhau và không có bất cứ một mối liên hệ nào, 
              nhưng có chung một bầu không khí bao trùm lên cả tập truyện.</p>
            <div class="picture">
                <img src="https://1.bp.blogspot.com/-jWbVCG9E_XM/Xt2nQa5s66I/AAAAAAAALfY/kSDdo3SuvOA5V6ORNlRKsdyGuumBmfoBACLcBGAsYHQ/s1600/21032726_251382655383397_5623417825654228946_n.jpg" width="450" height="500">
            </div>
           <p>Nếu ai đã đọc tuyển tập truyện ngắn Zoo và nhớ được là Otsuichi cũng là tác giả của nó thì hẳn sẽ vô cùng ấn tượng với phong cách viết văn và cách xây dựng tình huống vô cùng độc đáo của Zoo. Với Zoo, ngay cái bìa đã cho ta dự đoán về bầu không khí trong cả tuyển tập, một cái bìa đỏ lòm nhoe nhoét máu. Thật tiếc là trước kia mình đã không review Zoo một cách tử tế, nên nhân dịp review Calling You, mình sẽ nhắc qua một chút về Zoo trước,
              để thấy được sự thú vị trong mỗi tuyển tập truyện ngắn của Otsuichi. Còn nếu ai ngại đọc mà muốn đến ngay phần của Calling You thì có thể bỏ qua đoạn dưới đây.
        </p>
        <h2>
        Sơ lược về cốt truyện
        </h2>
            <p>
            Zoo là một truyển tập truyện kinh dị, với những câu truyện đầy kì quặc, quái đản và vô cùng điên rồ. Đọc Zoo, mình phải ồ lên bất ngờ trước từng tình tiết, chúng dị hợm và lôi cuốn bằng sức ma mị một cách kinh khủng đến không tài nào dứt được. Đọc Zoo, mình phải trầm trồ thán phục sự sáng tạo và độc đáo trong những ý tưởng của Otsuichi, chúng kì lạ, chúng không giống ai và nếu nói một cách hài hước thí cứ như thể là chúng được sinh ra khi tác giả múa bút trong tình trạng phê thuốc vậy. Zoo là tập hợp của những câu truyện mà, ai cũng điên, ai cũng mang trong mình một tâm lý bất ổn, tình tiết của chúng cũng điên, cái gì của nó cũng điên, người vô tội điên, kẻ giết người điên, tất cả đều điên và có lẽ là chẳng có ai bình thường cả. Tình tiết trong mỗi câu truyện cụ thể sẽ có sự khác nhau, có truyện thì mâu thuẫn, đầy xích mích, có truyện thì gay cấn, hồi hộp, có truyện thì chỉ trôi tuột qua một cách lơ đãng và cũng có cả truyện rất nhẹ nhàng và trầm hẳn xuống. Song cả tuyển tập Zoo mang trong mình một bầu không khí nồng nặc sự khùng điên, sở hữu chung một cái phông nền với những gam màu tương đồng, sẫm tối, và vẩy lẫn trong đó những giọt tươi màu nhoét nhoe. Đó là Zoo của Otsuichi, một tuyển tập truyện ngắn rất đặc trưng, với những câu truyện chẳng hề liên quan đến nhau nhưng cũng không hề khiến cho sự kết hợp giữa chúng trở nên khập khiễng. Đọc Zoo, ta biết đến ngay một Otsuichi có văn phong ma mị, 
            có những ý tưởng vô cùng độc đáo, điên rồ và không giống ai, và có một sức lôi cuốn khó có thể cưỡng lại.
            </p>
           <p>
           Sang tới Calling You, chắc hẳn đã không ít người cảm thấy ngạc nhiên, là bởi lần này cuốn sách của Otsuichi đã trở nên quá khác biệt. Trái hẳn với tông màu tăm tối, đỏ lòm đầy ngột ngạt, bí bức và chết chóc ở cái bìa của Zoo, Calling You lại mang đến một sự ấm áp nhẹ nhàng với ảnh bìa là hai cô cậu học sinh dưới ánh nắng hắt lên từng tán hoa anh đào. Nếu Zoo là màu đỏ đen, thì Calling You là màu hồng trắng, nếu Zoo ngay từ đầu đã gây cho ta suy nghĩ rằng, à, chắc là ai đó sắp bị giết rồi, thì trái lại, Calling You có lẽ sẽ khiến độc giả mường tượng trong đầu rằng, ô, có lẽ hai cô cậu này là một cặp chăng. Ừ thì tất nhiên là không phải ai cũng sẽ có những suy nghĩ như vậy, mình chỉ đang muốn ví dụ về sự khác biệt trong bầu không khí của Zoo với Calling
            You ngay từ cái bìa sách, để rồi cho đến khi đọc hẳn vào truyện rồi thì sẽ thấy sự khác biệt đó còn lớn hơn rất nhiều.
            </p>
            <div class="picture">
                <img src="https://iterativeglue.files.wordpress.com/2018/03/21077335_779431642227997_7078726395938611507_n.jpg" width="500" height="550">
            </div>
            <h2>
             Cảm nhận khi đọc
        </h2>
            <p>
            Điểm chung giữa Zoo và Calling You là gì? Đó là phong cách viết của Otsuichi. Đọc cuốn sách này, từ lời văn đến cách xây dựng tình huống, tất cả đều khiến mình phải bật ra một suy nghĩ rằng, đây đúng là Otsuichi rồi! Quả thực là như vậy, mặc dù cốt truyện và không khí truyện khác hẳn nhau, nhưng cách dẫn dắt câu truyện và 
            khai thác nhân vật thì không thể nào lẫn vào đâu được. Đây là một Otsuichi khác, nhưng vẫn chính là Otsuichi của Zoo.
            </p>
            <p>
            Vậy còn sự khác biệt là gì? Đó chính là bầu không khí. Zoo thuộc thể loại kinh dị, toàn bộ tuyển tập đều là những câu truyện khùng điên quái đản, còn Calling You thuộc thể loại tình cảm, với ba câu truyện nhẹ nhàng, êm đềm, và cũng vô cùng da diết. Nếu ai đã đọc sơ qua giới thiệu về Calling You, thì sẽ thấy nó được giới thiệu là một bộ truyện hứa hẹn sẽ lấy đi nước mắt của người đọc, và mình thấy là điều này thật đúng. Không, mình đã không khóc khi đọc Calling You, nhưng suốt quá trình đọc và cho đến khi đọc xong mình luôn luôn có cảm giác trong lòng 
            có một cái gì đó đã vơi mất đi, và mình nghĩ là “lấy đi nước mắt” đối với từng người cũng sẽ là khác nhau, chứ không nhất thiết phải là “khóc” bằng cách chảy lệ.
        </p>

            <div class="picture">
                <img src="https://elrefugiodelosincomprendidos.files.wordpress.com/2012/11/caling-you.jpg" width="600" height="400">
            </div>
            <p>
            Tuy nhiên, theo mình thì để có được những cảm nhận đúng nhất về Calling You, bạn không nên đọc bất cứ review nào trước cả, và càng không nên kì vọng rằng đây sẽ là một bộ truyện buồn đến phát khóc. Ngay trước khi Calling You về, mình đã bị một người qua đường đập vào mặt một câu ý là, Calling You nhạt toẹt ấy, chả cảm động gì đâu, mọi chuyện cứ trôi qua một cách nhạt toẹt ấy, chẳng có cao trào gay cấn gì cả. Mỗi người một ý, cũng có người không thấy đây là một cuốn sách có thể chạm đến trái tim (và ví tiền) của họ, còn đối với mình, nó chạm tới cả hai (haha). Thật ra ý kiến đó cũng có một phần không sai, bởi Calling You không phải là một tuyển tập toàn những câu truyện tiêu cực đến não nề, dồn dập và bóp nghẹn người đọc, đổ ầm ập xuống những tai ương, khổ đau và bất công để chèn ép tuyến lệ của độc giả phải ứa nước mắt, không phải thế. Calling You như một bản nhạc du dương, nhè nhẹ trôi trong không khí, khẽ rung rinh nó một cách vô cùng tinh tế để rồi lọt thẳng vào tim từ lúc nào không hay. Đối với mình, mình luôn cố gắng cảm nhận lấy tất cả những gì mà tác giả truyền tải, không chỉ là đọc xong rồi để đó mà còn là suy ngẫm, không nhiều thì ít, những lý tưởng mà tác giả đã ngấm ngầm đặt vào trong đó. Calling You mang trong mình những tình tiết vô cùng nhẹ nhàng, nó không thống khổ chỉ từ bề nổi của những tình tiết mà còn là chiều sâu bên trong nó, để cho thấy rằng có những nỗi đau không phải cứ dồn dập đè nén đến mức khiến người ta gào khóc thảm thiết mới là đau,
            mà bên cạnh đó, có cả những nỗi đau khiến con người ta ứ nghẹn lại, cả cổ họng và tuyến lệ, không chảy nước mắt, không khóc la, mà chỉ nín lặng để lệ chảy ngược vào bên trong mà thôi.
            </p>
           
            <div class="picture">
                <img src="https://cf.shopee.vn/file/65c4f0b82b3a31a5765fbb7c5e5dfa75" width="600" height="500">
            </div>
            <p>Nhiêu đó chắc là đủ để diễn đạt hết những điều mình muốn nói khi ở trên đã đưa ra nhận xét rằng Calling You đã đủ để chạm tới trái tim mình. Đọc Calling You, mình không cảm thấy buồn, mình không cảm thấy não nề, đau nhói hay ủ rũ tâm trạng, lặng đi thơ thẩn vì bị tác động mạnh hay quá đỗi xúc động, không, mình không cảm thấy thế. Nhưng khi đọc Calling You, mình có cảm nhận được phần nào tâm trạng và những nỗi đau mà các nhân vật ôm trong mình, mình hiểu được phần nào những cơn mưa phùn mà họ phải đầu trần đứng dưới, và mình biết được phần nào những đợt gió thoảng se lạnh tạt qua da thịt trần trụi không áo ấm của họ. Đối với mình, không phải cứ là những câu chuyện buồn bã thê thảm chọc thẳng vào tim, nhấn chìm con tim xuống bão bùng tàn khốc mới là tác động đến trái tim, mà những câu chuyện buồn nhẹ nhàng, buồn mang mác, buồn trong một thứ sắc màu tái nhợt bủa vây quanh tim, chăng vào trong tim một đợt gió nhè nhè se se, thổi vào tim những giọt mưa nhỏ bé mà lạnh buốt, cũng đã là tác động đến trái tim rồi. Calling You là một tuyển tập của bầu không khí đó, là một bản nhạc du dương sâu lắng, với những giai điệu nhẹ nhàng, với những nốt nhạc không cách nhau nhiều dòng kẻ,
               là một bài hát có thể khiến con tim chợt lặng đi trong một khoảng thời gian ngắn, nhưng cũng mang lại cảm giác vô cùng êm đềm.</p>
            <p>Điều cuối cùng mình muốn nói là một vấn đề liên quan đến hình thức của cuốn sách. Lần này mình đã preorder trên Fahasa, và chiếm được một xuất quà tặng bọc sách, và nó thực khiến mình cảm thấy vô cùng hối hận vì đã không biết đến bọc sách sớm hơn. Bọc sách đủ dày, đủ cứng cáp để bảo vệ hai lớp bìa của cuốn sách nhưng cũng đủ mỏng, đủ thanh thoát để không khiến cuốn sách bị gò bó. Phải nói là có thêm bọc sách mà mình yên tâm cực kì, cách vừa được bảo quản sạch sẽ, vừa đẹp lên biết bội phần. Có lẽ đây chỉ là vấn đề tâm lý với một người vừa nâng niu sách vừa trân trọng Calling You như mình, nhưng có thêm cái bọc sách này mà mình cảm giác lại càng muốn được bao bọc cuốn sách này, nâng niu lại càng muốn nâng niu, trân trọng lại càng muốn trân trọng, bởi câu truyện này đã trở nên vô cùng đẹp đẽ cả bên ngoài lẫn bên trong, và nó thật khiến mình không khỏi cầm lòng được.</p>
              <div class="picture">
                <img src="https://vnwriter.net/wp-content/uploads/2019/02/sach-calling-you.gif" width="500" height=550">
            </div>
              <h2>Lời kết</h2>
              <p>Bài review dài dòng đến đây là hết. Sau Calling You, mình đã chính thức trở thành một độc giả hâm mộ của Otsuichi, và nhất định sách của Otsuichi mình sẽ mua về không chần chừ. Sau Zoo, và sau Calling You, nếu bạn nào có để ý tình hình xuất bản sách hiện nay thì sẽ biết, tiếp theo sẽ là GOTH. Mình rất hóng tới ngày có thể rước GOTH về nhà, và khi nào đọc xong nhất định mình sẽ review tiếp.</p>
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