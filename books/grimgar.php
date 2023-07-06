<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Grimgar: Ảo ảnh và tro tàn </title>
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
            <h1>Review: Grimgar: Ảo ảnh và tro tàn </h1>
            <p>Cảm nhận đầu tiên khi bắt đầu với Hai to Gensou no Grimgar đó chính là một thế giới huyền ảo cùng với những nhân vật không sở hữu những sức mạnh bá đạo hay những trí thức thượng thừa.
               Chỉ đơn giản là những con người bị rơi vào một tình thế khó khăn với việc phải cố gắng để tồn tại. Là anime với diễn biến không nhanh, nhưng điều đó lại khiến cho việc thể hiện chân thực
                những khó khăn mà các nhân vật phải đối mặt. Đột nhiên bị kẹt ở một thế giới kì lạ, cùng với việc phải chiến đấu để sinh tồn quả không phải là việc dễ dàng. Những nhân vật đều không được
                 thiên phú với những sức mạnh kinh khửng, tuy nhiên họ dần dần quen với hoàn cảnh và lĩnh hội được nhiều những kĩ năng cần thiết trong quá trình chiến đấu. Ranh giới giữa sự sống và cái
                  chết luôn thường trực đối với nhóm nhân vật, hoặc đơn giản chỉ là việc kiếm đủ tiền để mua thức ăn và tồn tại.</p>
            <div class="picture">
                <img src="https://i.ytimg.com/vi/yHb4qEfO8os/maxresdefault.jpg" width="600" height="350">
            </div>
           <p>Tác phẩm này đã làm rất tốt công việc khiến cho người đọc cảm thấy chậm rãi. Thế nhưng có vẻ như nó lại hơi quá chậm rãi và khiến cho tiến độ tình tiết không đủ nhanh, điều này theo bản thân tôi nghĩ Hai to Gensou no Grimgar đã lựa chọn chính xác. Khiến cho người xem thấm được những sự khó khăn nghiêm trọng trong những hoàn cảnh cụ thể. Hai to Gensou no Grimgar cho chúng ta thấy khó như thế nào đối với một người bình thường trong việc tồn tại, không những thế họ còn mất hết kí ức trước khi đến thế giới này. Không kí ức về gia đình, bạn bè, không một điều gì, chỉ có một điều họ còn nhớ là tên của bản thân. Họ không biết níu kéo vào đâu, 
             cuối cùng là trở thành những tên lính, chiến đấu với quái vật xung quanh vùng đất để kiếm sống. Đó chính là hoàn cảnh và là cách duy nhất để tồn tại đối với họ.
        </p>
            <p>
            Một điều rất thú vị với Grimgar đó có lẽ là việc đấu tranh giữa sự sống và cái chết được diễn ra mãnh liệt đúng như hoàn cảnh của nó. Phần lớn các nhân vật đều chưa từng lấy mạng của ai, nhưng rồi tất cả đều phải đối mặt với thực tế phũ phàng mà họ đang gặp phải. Giết chóc bằng kiếm, dao, tên, (thậm chí bằng cả phép thuật). Chiến đấu với những sinh vật có trí khôn và tri giác. Đó không đơn giản chỉ là giết con gà con vịt mà là những sinh vật không sợ chết và sẵn sàng giết bạn nếu có cơ hội. Thực tiễn thường không phải lúc nào cũng cần thiết, nhưng bản thân tôi nghĩ rằng khá thú vị khi được chứng kiến diễn biến tâm 
            lí nhân vật trở nên rối loạn cực độ bởi những điều mà họ đang làm và việc họ dần dần trở nên quen với thực tại đang diễn ra.
            </p>
  
            <p>
            Đánh giá chung về plot của anime này là cốt truyện xuyên suốt. Một nhóm người xuát hiện trong một thế giới kì lạ, giúp đỡ lẫn nhau, học những kĩ năng của những class riêng biệt và dùng nó để kiếm sống. Nghe có vẻ khá là thực tế trong trường hợp của họ, một đám người đột nhiên xuất hiện trong một thế giới kì lạ. Họ bất chấp, kể cả những công việc bẩn thỉu để tồn tại trong thế giới đó. Để có được thức ăn, nước uống và nơi ở, nhóm nhân vật không còn cách nào khác ngoài việc phải chiến đấu.
            </p>
            <div class="picture">
                <img src="https://i0.wp.com/100wordanime.blog/wp-content/uploads/2018/01/grimgar4b.jpg?resize=648%2C365&ssl=1" width="600" height="400">
            </div>
            <p>
            Tất nhiên mọi thứ không phải đều tồi tệ, tuy nhiên lại có cảm giác gì đó khá rập khuôn. Giống như là trong một trò chơi, họ cần phải trả tiền cho việc trở thành thành viên và phải trả chi phí luyện tập để học những kĩ năng khác nhau. Những nhân vật từ những người xa lạ, phải học cách hợp tác với nhau trong những tình thế buộc phải đấu tranh cho sự sống của bản thân. Tôi cảm thấy thích thú khi thấy được những thành quả của họ mang lại. Từng bước một, lĩnh hội thêm được nhiều những khả năng mới và dần dần lớn lên với sự trưởng thành của nhóm; tuy trong quá trình đó họ gặp không ít khó khăn thách thức 
            nhưng đến cuối cùng người xem cảm thấy thực sự hài lòng khi nhìn lại con đường khó khăn mà họ đã phải trải qua.
            </p>
            <div class="picture">
                <img src="https://makirima.files.wordpress.com/2016/04/grimgar-10.jpg" width="600" height="400">
            </div>
            <h2>
            Nhân vật
        </h2>
            <p>
            Có một điều trong dàn nhân vật là một vài nhân vật được chú ý nhiều hơn các nhân vật khác. Haruhiro (Haru) là nhân vật chính, cậu gia nhập lớp đạo chích khiến cậu cơ động hơn các thành viên trong đội và đóng vai trò làm sát thủ. Không thường xuyên lao lên đầu cuộc đấu, chỉ di chuyển xung quanh và đâm những nhát chí mạng. Cậu là người do dự, không thể hiện bản thân một cách tốt nhất,là một người chưa hoàn thiện với những điểm tốt và xấu. Nhưng cậu cũng rất quan tâm đến những đồng đội của mình. Là một người ít nói, thường đi loanh quanh một mình khi có thời gian rảnh, cậu dần dần trưởng thành hơn rất nhiều sau mọi việc.
            </p>
           
            <div class="picture">
                <img src="https://i.pinimg.com/736x/1e/c8/ac/1ec8acbf36bacd641720a6173dadb58b--otaku-anime-anime-guys.jpg" width="600" height="400">
            </div>
            <p>Nhân vật tôi thích nhất đoàn chắc chắn là Yume. Là nhân vật lạc quan và năng động nhất nhóm. Là thợ săn nhưng bắn cung khá tệ. Cũng là một điều có thể cho qua bởi có lẽ cô chưa dùng vũ khí lần nào trong đời. Và tập nhắm và bắn một mũi tên cũng không hề dễ dàng gì. Cô là một người tràn đầy sinh lực và không ngần ngại tiến bước trên con đường đến giấc mơ và luôn giữ cho mọi thứ tươi sáng. Cô cũng rất quan tâm đến cô bạn Shihoru. Mặc dù cô rất năng động và hồn nhiên… đôi khi cô cũng lung túng khi thể hiện những gì mình muốn nói. Cô không phải lúc nào cũng vui vẻ và cũng có lúc cô yếu đuối. Với tôi, 
              Yume và Haru là tâm điểm của nhóm này. Cần có hai người bọn họ để làm cho cốt truyện được tiếp diễn.</p>
            <p>Ranta là nhân vật và bạn có thể nói rằng cậu có quá nhiều sự chú ý. Nhân vật mồm to này là người có thể che dấu nỗi bất an và lo lắng của mình bằng cách làm cho bản thân đáng ghét hết mức có thể. Kị sĩ hắc ám này thức đẩy mọi người lên. Cậu có một nhân cách rõ ràng và khá quan trọng trong những tập cuối.
                 Không hẳn là một anh chàng đáng yêu nhưng cậu là một nhân vật rất thú vị..</p>
            <p>RManato là một nhân vật được chú ý đến từ sớm. Là một thủ lĩnh tốt và là người sẵn sàng nhận trách nhiệm thủ lĩnh cho một nhóm cá biệt. Lên kế hoạch, lập ngân sách khi họ khốn khó và luôn động viên mọi người khi có thể. Một người thích cho động vật ăn và thân thiết với những người như Haru. 
              Một trụ cột mà mọi người có thể dựa vào.</p>
              <div class="picture">
                <img src="https://yattatachi.com/wp-content/uploads/2019/07/Grimgar-Light-Novel-Vol-1-review-COVER-1.jpg" width="600" height="300">
            </div>
              <p>Cuối cùng thì tôi cũng không thể đưa ra quá nhiều những lời nhận xét tiêu cực về bộ này. Những tập cuối có vẻ như không những gì mà tôi kì vọng. Tuy nhiên xét tổng thể thì Hai to Gensou no Grimgar có sự chắc chắn trong việc thiết lập các kĩ năng của nhân vật và thể hiện rõ ràng quá trình vượt qua những thử thách khó khăn của các nhân vật. Không có kiểu nhân vật anh hùng gánh team mà thay vào đó là một nhóm với những suy nghĩ tính toán để thoát khỏi những hoàn cảnh hiểm nghèo. Nếu như bạn cảm nhận như thế thì đây thực sự là một bộ anime khá tốt.</p>
              <p>Có thể nói rằng A-1 đã làm rất tốt đối với Hai to Gensou no Grimgar. Cốt truyện không nhanh, nhẹ nhàng. Tuy nhiên khá tiếc rằng lại không có ss2. Là một tác phẩm phù hợp với những người thích thú với thể loại fantasy.</p>

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