<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: Từ Tốt Đến Vĩ Đại</title>
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
            <h1>Review: Từ Tốt Đến Vĩ Đại</h1>
            <p>Bạn có bao giờ cảm thấy chán nản với công việc mà mình đang làm, bạn đối mặt với những áp lực không tên và dần dần bạn cảm thấy công việc không còn phù hợp với bạn.</p>
            <div class="picture">
                <img src="https://revisach.com/wp-content/uploads/2020/11/review-sach-tu-tot-den-vi-dai-01-696x479.png" width="600" height="400">
            </div>
            <p>
              Jim Collins là tác giả của cuốn sách Từ tốt đến vĩ đại. Ông là một nhà tư vấn kinh doanh người Mỹ, từng dạy tại các công ty vĩ đại trường tồn.

              Trước đây ông từng cho ra đời cuốn sách Xây dựng để trường tồn với tiếng vang lớn suốt thập niên 90 của thế kỷ trước.

              Tuy nhiên trải qua thời gian ông nhận ra rằng cuốn sách này chỉ giúp công ty thành công tồn tại được lâu dài không giải quyết được sự phát triển vĩ đại của một công ty.
            </p>
            <p>
             Trải qua quãng thời gian 5 năm nghiên cứu và tìm ra công thức thực sự để xây dựng công ty trường tồn với những câu hỏi “ “Làm thế nào những công ty tốt, công ty bình thường, hay ngay cả công ty đang trong tình trạng tồi tệ cũng có thể đạt đến mức vĩ đại trường tồn?”

            Cuốn sách Từ tốt đến vĩ đại đã ra đời giúp công ty xây dựng từ ý tưởng chiến lược, hoàn thiện và từng bước nhảy vọt đến vĩ đại. 
            </p>
            <h2>TẬP THỂ VỮNG MẠNH</h2>
            <div class="picture">
                <img src="https://revisach.com/wp-content/uploads/2020/11/review-sach-tu-tot-den-vi-dai-03-696x479.png" width="600" height="400">
            </div>

            <p>
            Từ tốt đến vĩ đại cho rằng một công ty sẽ chết nếu chỉ dựa vào người lãnh đạo. So với một công ty có sự tổng hòa của một tập thể gắn kết với công ty chỉ dựa vào tài năng của một người thì sự vĩ đại sẽ chỉ tồn tại ở công ty có tập thể vững mạnh.

            Công ty chỉ có một thiên tài thì khi người đó có vấn đề xảy ra công ty sẽ hoàn toàn mất phương hướng và trở nên thụ động trước một ai đó.

            Muốn công ty trở nên vĩ đại hãy xây nên một tập thể vĩ đại.
            </p>
            <h2>BÀI HỌC CON NHÍM</h2>
            <div class="picture">
                <img src="https://revisach.com/wp-content/uploads/2020/11/review-sach-tu-tot-den-vi-dai-02-696x479.png" width="600" height="400">
            </div>

            <p>
            Cuốn sách Từ tốt đến vĩ đại kể về câu chuyện giữa con nhím và con cáo. Con cáo tinh ranh và xảo quyệt, trong khi con nhím thì chậm chạp và nhỏ bé. Nếu dùng sức mạnh để đối đầu chắc chắn nhím sẽ thất bại. Tuy nhiên nó dùng chiến thuật phòng ngự mỗi khi bị tấn công xù bộ lông nhọn hoắt lên thì con cáo sẽ không thể làm gì được.

            Bài học về câu chuyện đó là bạn muốn trở nên vĩ đại hãy biết mình thực sự có khả năng gì, đâu là điểm mạnh điểm yếu để tận dụng một cách tối đa. Để xác định điều mình cần làm là hãy tự đặt ra 3 câu hỏi: bạn giỏi nhất trong lĩnh vực nào, đâu là thứ đem lại cho bạn lợi nhuận và đam mê thực sự của bạn là gì?

            Khi bạn được sống với những điều mình thích, mình đam mê và thực sự giỏi nhưng dòng tiền đó không đủ sinh ra lợi nhuận bạn cũng không thể trọn vẹn hạnh phúc với nỗi lo về tiền bạc, nếu bạn đam mê những gì mình làm nhưng không thể giỏi nhất bạn có thể rất hạnh phúc mỗi ngày nhưng bạn không thể giàu có nếu như không có tài năng.

            Nếu chỉ tiếp tục làm những gì mình tốt bạn sẽ không bao giờ trở nên vĩ đại. Từ tốt đến vĩ đại khuyên bạn đọc: Hãy tìm một công việc bạn thực sự đam mê, bạn có tài năng thực sự để phát triển và doanh nghiệp cũng trả lương tương xứng với công sức thành quả bạn tạo ra đó điểm giao nhau chính là công việc mà bạn nên tập trung để thực hiện trong đời mình.
            </p>
            
            
           
            <div class="picture">
                <img src="https://namhai.net/wp-content/uploads/2021/03/namhai.net-review-sach-tu-tot-toi-vi-dai-jim-collins.jpg" width="600" height="356">
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