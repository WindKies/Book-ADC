<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Hannibal</title>
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
            <h1>Review: Hannibal </h1>
            <p>Chắc hẳn nhiều người không còn xa lạ với bác sỹ Hannibal Lecter và Sự im lặng của bầy cừu. Một tác phẩm có thể coi là kinh điển của thế giới của Thomas Harris. Tôi biết đến bác sỹ Hannibal lần đầu tiên qua bộ phim Sự im lặng của bầy cừu. Còn nhớ lúc đó xem mà cảm giác vừa hồi hộp, vừa ghê, vừa sợ toát mồ hôi nhưng cứ dán mắt xem phim từ đầu đến cuối.
Sau đó tìm hiểu thì mới biết phim được chuyển thể từ tiểu thuyết Sự im lặng của bầy cừu của Thomas Harris, nam diễn viên chính của bộ phim đó, Anthony Hopkins đã được giải Oscar còn riêng tác giả đã có một series truyện về bác sỹ Hannibal Lecter chứ không chỉ mỗi cuốn Sự im lặng của bầy cừu.</p>
            <div class="picture">
                <img src="https://revelogue.com/wp-content/uploads/2021/06/tac-gia-thomas-harris-hinh-anh-8-1.jpg" width="600" height="400">
            </div>
            <h2>
                1. Trích đoạn
            </h2>
            <p>
            Với Mason Verger, nạn nhân đã bị Hannibal biến thành kẻ người không ra người, Hannibal là mối hận thù nhức nhối da thịt.
Với đặc vụ Clarice Starling của FBI, người từng thẩm vấn Hannibal trong trại tâm thần, giọng kim ken két của hắn vẫn vang vọng trong giấc mơ cô.
Với cảnh sát Rinaldo Pazzi đang thất thế, Lecter hứa hẹn mang tới một khoản tiền béo bở để đổi vận.
Và những cuộc săn lùng Hannibal Lecter bắt đầu, kéo theo đó là những chuỗi ngày run rẩy hòng chấm dứt bảy năm tự do của hắn. Nhưng trong ba kẻ đi săn, chỉ một kẻ có bản lĩnh sống trụ lại để hưởng thành quả của mình.
            </p>
            <h2>
                2. Giới thiệu tác phẩm
            </h2>
            <p>
            Được xem là một trong những sự kiện văn chương được chờ đợi nhất, Hannibal mang người đọc vào cung điện ký ức của một kẻ ăn thịt người, tạo dựng nên một bức chân dung ớn lạnh của tội ác đang âm thầm sinh sôi – một thành công của thể loại kinh dị tâm lý.
Với Mason Verger, nạn nhân đã bị Hannibal biến thành kẻ người không ra người, Hannibal là mối hận thù nhức nhối da thịt.
Với đặc vụ Clarice Starling của FBI, người từng thẩm vấn Hannibal trong trại tâm thần, giọng kim ken két của hắn vẫn vang vọng trong giấc mơ cô.
Với cảnh sát Rinaldo Pazzi đang thất thế, Lecter hứa hẹn mang tới một khoản tiền béo bở để đổi vận.
            </p>
            <div class="picture">
                <img src="https://hoachio.com/wp-content/uploads/2019/04/Hannibal.jpg" width="600" height="400">
            </div>
            <h2>
                3. Nhận xét
            </h2>
            <p>
            Thực ra thể loại tội phạm biến thái, tâm thần, tâm lý bất ổn… hay đại loại vậy thì không hiếm trên phim ảnh và là nhân vật chính của rất nhiều tiểu thuyết. Nhưng đúng là tôi chưa từng đọc thấy hành vi phạm tội nào mà kinh dị và biến thái như trong các tác phẩm của Thomas Harris. Và cũng chưa từng có một tên tội phạm nào thiên tài một cách biến thái như bác sĩ Hannibal Lecter. Tác giả khiến cho người đọc vừa khâm phục ngưỡng mộ vừa căm ghét và sợ hãi nhân vật này, lúc thì muốn ông ta chết đi cho yên ổn, lúc thì muốn ông ta  sống và thoát ra ngoài để tiếp tục được xem những cuộc đấu trí với các nhân vật chính diện khác.
Việc điều tra phá án trong các tác phẩm của Thomas Harris chủ yếu là đấu trí và suy luận tâm lý, không ưu ái nhiều cho phần suy luận chứng cứ. Tác giả xoáy sâu vào phân tích tâm lý tất cả các nhân vật, đặc biệt là sự đấu tranh nội tâm, tuy vậy vẫn có những pha hành động gay cấn hồi hộp, và đặc biệt là pha nào cũng đi liền với những hình ảnh kinh dị. Sự kinh dị và hồi hộp còn tăng lên nhiều khi tác giả miêu tả vô cùng sinh động và hình tượng.
Tôi đọc cuốn Rồng đỏ đầu tiên vì được tặng và cũng vì đã xem phim Sự im lặng của bầy cừu rồi. Đọc xong rồi bị ám ảnh đến mức chẳng dám đọc tiếp các cuốn khác ngay. Cứ tưởng tượng nếu đọc liền chắc bị tâm thần luôn quá 😛 (đùa thôi)
Phải công nhận rằng Thomas Harris đúng là thiên tài trong việc miêu tả tâm lý và nội tâm nhân vật nhưng các tác phẩm của Thomas Harris chắc chắn tôi sẽ chỉ đọc được 1 lần duy nhất thôi, không có can đảm để đọc lại lần nữa, và chỉ 3 tác phẩm này là đủ rồi, chắc sẽ không mua thêm một tiểu thuyết nào tương tự nữa của ông trong tương lai.
            </p>
            <div class="picture">
                <img src="https://4.bp.blogspot.com/-U4bufq8Jr_s/WLbXL49qxGI/AAAAAAAAAWQ/B0BeXNYtl4c7ZJMulwlz-vgG4s3D6R69QCLcB/s1600/IMG_5967.5.jpg" width="600" height="400">
            </div>
            <p>
            Tuy vậy thì các tác phẩm của Thomas Harris không chỉ thu hút bởi sự “kinh dị” hay “biến thái” đơn thuẩn. Nếu chỉ có thế thì có lẽ Thomas Harris và sách của ông ấy đã không nổi tiếng và “best seller” đến vậy. Khi đọc các tác phẩm của ông, tôi cũng nhận ra rằng con người ai cũng có những “góc khuất”, những ký ức không muốn nhớ lại nhưng lại không thể quên được, ký ức càng đau buồn và gây tổn thương cho bạn càng nhiều thì lại càng sâu đậm và khó quên. Nếu để cứ để những ký ức hay góc khuất đó chi phối phần lớn suy nghĩ và tâm lý của bạn, bạn sẽ rất dễ trở thành “tội phạm biến thái”. Nhưng nếu bạn vượt qua được và chỉ coi nó như một động lực để hướng đến những điều tốt đẹp hơn, bạn có thể trở thành thiên tài thực sự.
Nếu bạn có hứng thú, theo tôi bạn chỉ nên mua 1 cuốn trước, có thể là Rồng đỏ hoặc Hannibal. Còn Sự im lặng của bầy cừu thì có lẽ nên xem phim trước rồi mới nên quyết định có mua sách hay không bởi vì theo cảm nhận của tôi phim còn hay và đáng xem hơn cả sách.
            </p>
           
            <div class="picture">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ae71f5e8-40ca-4e29-97c4-e2e097b1c234/dalmk46-1d4c7d4d-8da1-484a-be52-00bb09ac7ea7.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2FlNzFmNWU4LTQwY2EtNGUyOS05N2M0LWUyZTA5N2IxYzIzNFwvZGFsbWs0Ni0xZDRjN2Q0ZC04ZGExLTQ4NGEtYmU1Mi0wMGJiMDlhYzdlYTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.aTMc6sw_i0cEVIjLBgzFomO4c6PgA_dUx3pUVqxPOo4" width="600" height="400">
            </div>
            <p>Đọc xong cuốn thứ ba này phải nói rằng vô cùng thỏa mãn. Thỏa mãn bởi đã có thể hiểu rõ hơn nhân vật phản diện được yêu thích nhất bác sĩ Hannibal Lecter. Mình đã yêu thích vị Bác sĩ này đến mức đã thót tim khi đọc đến chương Mason bắt được Hannibal. Cũng giống như Clarice Starling, mình không muốn vị bác sĩ này chết dưới mấy hàm răng khủng của bầy lợn. Dù không ngạc nhiên với quyết định của đặc vụ Clarice Starling, nhưng lại vô cùng bất ngờ và thích thú với cái kết hơi bị khó hiểu.
Nói chung là bạn cũng sẽ như bao nhiêu độc giả khác: Yêu thích kẻ ăn thịt người Hannibal Lecter!</p>
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