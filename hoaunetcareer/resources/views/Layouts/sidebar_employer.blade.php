<div class="ctr">
    
    <div class="bgr"><strong><img src="/images/search.png" alt="icon" style="vertical-align:middle;"> Tìm nhanh ứng viên</strong></div>
    <ul class="vipr">
        <li class="sr">
            <div class="l">Ngành nghề</div>
            <div class="r"><select name="ctlr$drpNN" id="ctlr_drpNN" class="textbox" style="width:140px;">
	<option value="--Chọn nghành nghề--">--Chọn nghành nghề--</option>
	@if(count($careers) >0)
                      @foreach($careers as $career)
                        <option value="{{$career->id}}">{{$career->career_name}}</option> 
                      @endforeach
                   @endif

</select></div>
            <div class="cl"></div>
            <div class="l">Học vấn</div>
            <div class="r"><select name="ctlr$drpBC" id="ctlr_drpBC" class="textbox" style="width:140px;">
	<option value="--Trình độ học vấn--">--Trình độ học vấn--</option>
	@if(count($provinces) >0)
              @foreach($provinces as $province)
                <option value="{{$province->id}}">{{$province->province_name}}</option> 
              @endforeach
            @endif

</select></div>
            <div class="cl"></div>  
            <div class="l">Địa điểm</div>
            <div class="r"><select name="ctlr$drpCity" id="ctlr_drpCity" class="textbox" style="width:140px;">
	<option value="--Chọn địa điểm--">--Chọn địa điểm--</option>
	@if(count($provinces) >0)
              @foreach($provinces as $province)
                <option value="{{$province->id}}">{{$province->province_name}}</option> 
              @endforeach
            @endif

</select></div>
            <div class="cl"></div>  
            <div class="l">Mức lương</div>
            <div class="r"><select name="ctlr$drpML" id="ctlr_drpML" class="textbox" style="width:140px;">
	<option value="--Chọn mức lương--">--Chọn mức lương--</option>
	@if(count($salaries) >0)
                      @foreach($salaries as $salarie)
                        <option value="{{$salarie->id}}">{{$salarie->name}}</option> 
                      @endforeach
                    @endif

</select></div>
            <div class="cl"></div>   
            <div class="l">Kinh nghiệm</div>
            <div class="r"><select name="ctlr$drpKN" id="ctlr_drpKN" class="textbox" style="width:140px;">
	<option value="--Chọn số năm kinh nghiệm--">--Chọn số năm kinh nghiệm--</option>
	@if(count($experiences) >0)
              @foreach($experiences as $experience)
                <option value="{{$experience->id}}">{{$experience->experience_name}}</option> 
              @endforeach
            @endif

</select></div>
            <div class="cl"></div>
            <div class="l">Ngoại ngữ</div>
            <div class="r"><select name="ctlr$drpNgoaiN" id="ctlr_drpNgoaiN" class="textbox" style="width:140px;">
	<option value="--Chọn ngoại ngữ--">--Chọn ngoại ngữ--</option>
	@if(count($languages) >0)
              @foreach($languages as $language)
                <option value="{{$experience->id}}">{{$language->name}}</option> 
              @endforeach
            @endif


</select></div>
            <div class="cl"></div>              
            <div class="l" style="text-align:right;">
				<button type="submit" class="btn btn-primary button">Tìm kiếm</button>
            </div>                              
				
            <div class="r"><button type="reset" class="btn btn-primary button">Hủy tìm kiếm</button></div>  
            <div class="cl"></div>
        </li>
    </ul>  
    <div class="avr"></div>
    

    <div class="bgr mtop"><strong>Video tuyển dụng</strong></div>
    <div class="vipr">
        
    </div>    
    
   
    
    <div class="bgr mtop"><strong>Tìm ứng viên theo tính chất</strong></div>
    <ul class="vipr">
        <li class="search">
            <a href="#">Việc làm lương từ 30 triệu trở lên</a>
            <a href="#">Việc làm lương từ 20 - 30 triệu</a>
            <a href="#">Việc làm lương từ 15 -20 triệu</a>
            <a href="#">Việc làm lương từ 10 - 15 triệu</a>
            <a href="#">Việc làm cấp quản lý</a>
            <a href="#">Việc làm bán thời gian</a>
            <a href="#">Việc làm cho sinh viên thực tập, mới tốt nghiệp</a>
        </li>
    </ul> 
    
    <div class="bgr mtop"><strong>Cẩm nang tuyển dụng</strong></div>
    <div class="vipr">
        <script type="text/javascript" src="/js/jssor.core.js"></script>
        <script type="text/javascript" src="/js/jssor.utils.js"></script>
        <script type="text/javascript" src="/js/jssor.slider.js"></script>
        <script type="text/javascript">
            jssor_slider1_starter = function (containerId) {

                var _SlideshowTransitions = [
                //Fade
                { $Duration: 1200, $Opacity: 2 }
                ];

                var options = {
                    $AutoPlay:false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                    $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                    $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                    $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                    $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                    $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                    //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                    $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                    $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                    $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                    $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                    $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                    $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                        $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                        $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                        $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                        $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                    },

                    $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                        $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                        $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                        $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                        $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                        $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    },

                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                };
                var jssor_slider1 = new $JssorSlider$(containerId, options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                    if (parentWidth)
                        jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 600));
                    else
                        $JssorUtils$.$Delay(ScaleSlider, 30);
                }

                ScaleSlider();
                $JssorUtils$.$AddEvent(window, "load", ScaleSlider);


                if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                    $JssorUtils$.$OnWindowResize(window, ScaleSlider);
                }
            };
        </script>    
        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 253px; height: 357.176px;">
            
            
            
            <div style="position: absolute; top: 0px; left: 0px; width: 255px; height: 360px; transform-origin: 0px 0px 0px; transform: scale(0.992157);"><div class="" style="position: relative; top: 0px; left: 0px; width: 255px; height: 360px; overflow: visible;"><div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 255px; height: 360px; overflow: hidden; z-index: 0;"><div debug-id="slide_container" style="position: absolute; z-index: 0; left: 0px; top: 0px; display: none;"></div></div><div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 255px; height: 360px; overflow: hidden; z-index: 0;" debug-id="slide-board"><div style="width: 255px; height: 360px; top: 0px; left: 0px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0;"></div>
                <div debug-id="slide-0" style="width: 255px; height: 360px; top: 0px; left: 0px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/cam-nang-tuyen-dung-viec-lam-voi-nguoi-nhat-nid259.html" style="transform: perspective(2000px);"><img src="/images/news/259.jpg" alt="Cẩm nang tuyển dụng việc làm với người Nhật" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/cam-nang-tuyen-dung-viec-lam-voi-nguoi-nhat-nid259.html" style="transform: perspective(2000px);">Cẩm nang tuyển dụng việc làm với người Nhật</a></strong><p style="transform: perspective(2000px);">Khi một người Nhật được một công ty Nhật tuyển dụng, họ có thể sẽ không nhận được một bản miêu tả công việc chính xác; nhân viên mới có thể thậm chí không biết lương và phúc lợi của họ sẽ thế nào, một tình thế mà không mấy người phương Tây cảm thấy thoải mái. Người phương Tây muốn lời hứa phải được nói rõ ràng. Người Nhật đặt lòng tin nhiều hơn vào những vấn đề khác - uy tín của công ty hay người đã tiến cử ứng viên.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ngan-hang-tmcp-quoc-te-viet-nam-vib-tuyen-dung-giao-dich-vien-tai-hai-phong-30-11-2015-nid257.html" style="transform: perspective(2000px);"><img src="/images/news/257.jpg" alt="Ngân hàng TMCP Quốc Tế Việt Nam (VIB) tuyển dụng Giao dịch viên tại Hải Phòng 30.11.2015" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ngan-hang-tmcp-quoc-te-viet-nam-vib-tuyen-dung-giao-dich-vien-tai-hai-phong-30-11-2015-nid257.html" style="transform: perspective(2000px);">Ngân hàng TMCP Quốc Tế Việt Nam (VIB) tuyển dụng Giao dịch viên tại Hải Phòng 30.11.2015</a></strong><p style="transform: perspective(2000px);">- Tốt nghiệp đại học chuyên ngành ngân hàng, tài chính kế toán hoặc các trường Kinh tế; - Hình thức ưa nhìn, tự tin, nhiệt huyết và chu đáo cẩn thận trong cung cấp dịch vụ giao dịch với khách hàng; - Nữ, 1.60m trở lên; - Không dị tật, không nói ngọng, nói lắp;</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/6-cau-hoi-bat-bai-tinh-cach-ung-vien-nid208.html" style="transform: perspective(2000px);"><img src="/images/news/208.jpg" alt="6 câu hỏi &quot;bắt bài&quot; tính cách ứng viên" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/6-cau-hoi-bat-bai-tinh-cach-ung-vien-nid208.html" style="transform: perspective(2000px);">6 câu hỏi "bắt bài" tính cách ứng viên</a></strong><p style="transform: perspective(2000px);">Điều nhà tuyển dụng muốn biết là động lực khiến bạn làm việc chăm chỉ, đặc biệt nếu bạn là người tự tin vào khả năng của mình. Họ sẽ không phán xét tham vọng của một người bởi điều đó thuộc về quan điểm cá nhân. Tuy nhiên, bạn cũng cần một chút khéo léo để dẫn dắt câu chuyện, tránh trường hợp khiến mọi người nghĩ bạn là người khắt khe hoặc tự tin thái quá.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/cach-nang-cao-hieu-qua-tuyen-dung-nid207.html" style="transform: perspective(2000px);"><img src="/images/news/207.jpg" alt="Cách nâng cao hiệu quả tuyển dụng" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/cach-nang-cao-hieu-qua-tuyen-dung-nid207.html" style="transform: perspective(2000px);">Cách nâng cao hiệu quả tuyển dụng</a></strong><p style="transform: perspective(2000px);">Tìm được một người tài giỏi, phù hợp với yêu cầu của công ty không hề dễ dàng. Phải phối hợp việc phân tích thông tin ứng viên và sự chuẩn bị chu đáo cho các vòng phỏng vấn để quyết định cuối cùng được rõ ràng và chính xác. Đó là những nguyên tắc cơ bản để giành phần thắng trong cuộc chiến thu hút nhân tài trong thời đại ngày nay.</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-1" style="width: 255px; height: 360px; top: 0px; left: 255px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html" style="transform: perspective(2000px);"><img src="/images/news/195.jpg" alt="Lý giải các mô hình quản lý nhân lực" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html" style="transform: perspective(2000px);">Lý giải các mô hình quản lý nhân lực</a></strong><p style="transform: perspective(2000px);">Tất cả những người làm công tác quản lý đều có mối quan tâm đặc biệt cũng như có xu hướng đưa ra những phán đoán về tính cách của nhân viên. Thông qua những phán đoán này mà người quản lý đưa ra sách lược quản lý riêng cho từng mẫu người. Vậy phương pháp nghiên cứu để đưa ra những phán đoán như thế nào?</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/tao-dieu-kien-cho-su-sang-tao-cua-nhan-vien-nid186.html" style="transform: perspective(2000px);"><img src="/images/news/186.jpg" alt="Tạo điều kiện cho sự sáng tạo của nhân viên" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/tao-dieu-kien-cho-su-sang-tao-cua-nhan-vien-nid186.html" style="transform: perspective(2000px);">Tạo điều kiện cho sự sáng tạo của nhân viên</a></strong><p style="transform: perspective(2000px);">Hầu hết các công ty đều đưa ra câu khẩu hiệu "Đổi mới hay là chết" như là phương châm lao động và sáng tạo cho nhân viên và tổ chức. Thế nhưng thực tế, không ít các nhà quản lý chọn vế thứ 2 cho công ty mình. Tại sao vậy?</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/10-bi-mat-cua-su-thanh-cong-ban-biet-chua-nid185.html" style="transform: perspective(2000px);"><img src="/images/news/185.jpg" alt="10 bí mật của sự thành công , bạn biết chưa?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/10-bi-mat-cua-su-thanh-cong-ban-biet-chua-nid185.html" style="transform: perspective(2000px);">10 bí mật của sự thành công , bạn biết chưa?</a></strong><p style="transform: perspective(2000px);">Đã có rất nhiều những nghiên cứu, bài viết và giảng dạy về sự thành công. Một điều hoàn toàn chắc chắn: thành công của người này khác với thành công của người khác bởi vì mỗi người có một quan niệm khác nhau về thành công.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/meo-nho-cho-ceo-nid184.html" style="transform: perspective(2000px);"><img src="/images/news/184.jpg" alt="Mẹo nhỏ cho CEO" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/meo-nho-cho-ceo-nid184.html" style="transform: perspective(2000px);">Mẹo nhỏ cho CEO</a></strong><p style="transform: perspective(2000px);">Nếu bạn đang phân vân điều gì làm nên một nhà lãnh đạo vĩ đại, chứ không chỉ dừng lại là nhà lãnh đạo xuất sắc, thì đây là một số mẹo có thể giúp bạn. Cuộc hành trình này của bạn sẽ phụ thuộc vào việc bạn sẵn sàng như thế nào.</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-2" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ly-do-nhan-vien-cua-ban-xin-nghi-viec-nid183.html" style="transform: perspective(2000px);"><img src="/images/news/183.jpg" alt="Lý do nhân viên của bạn xin nghỉ việc?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ly-do-nhan-vien-cua-ban-xin-nghi-viec-nid183.html" style="transform: perspective(2000px);">Lý do nhân viên của bạn xin nghỉ việc?</a></strong><p style="transform: perspective(2000px);">Là một nhà quản lý, bạn có bao giờ tự hỏi, tại sao cứ thời gian cuối năm, bạn lại nhận được nhiều lá đơn xin nghỉ việc của nhân viên? Và đầu năm mới, bạn lại đau đầu đi tìm nhân viên mới?</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/dieu-gi-lam-nen-tam-hon-cua-mot-lanh-dao-nid182.html" style="transform: perspective(2000px);"><img src="/images/news/182.jpg" alt="Điều gì làm nên tâm hồn của một lãnh đạo?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/dieu-gi-lam-nen-tam-hon-cua-mot-lanh-dao-nid182.html" style="transform: perspective(2000px);">Điều gì làm nên tâm hồn của một lãnh đạo?</a></strong><p style="transform: perspective(2000px);">Đó là sự khác biệt, niềm đam mê, lạc quan, khả năng thích ứng, khả năng lãnh đạo, tham vọng.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/10-bi-quyet-thanh-cong-sep-nen-noi-nhung-se-khong-bao-gio-noi-nid181.html" style="transform: perspective(2000px);"><img src="/images/news/181.jpg" alt="10 bí quyết thành công sếp nên nói nhưng sẽ không bao giờ nói ?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/10-bi-quyet-thanh-cong-sep-nen-noi-nhung-se-khong-bao-gio-noi-nid181.html" style="transform: perspective(2000px);">10 bí quyết thành công sếp nên nói nhưng sẽ không bao giờ nói ?</a></strong><p style="transform: perspective(2000px);">Cathie Black, chủ bút tạp chí Hearst, đã chia sẻ cùng bạn đọc trẻ của bà những bí quyết thành công trong công việc. Mối quan hệ sếp-nhân viên luôn là mối bận tâm nhất của những người "sống" trong môi trường công việc.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/lam-the-nao-de-tro-thanh-nha-quan-ly-cua-nam-nid180.html" style="transform: perspective(2000px);"><img src="/images/news/180.jpg" alt="Làm thế nào để trở thành &quot;nhà quản lý của năm&quot;" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/lam-the-nao-de-tro-thanh-nha-quan-ly-cua-nam-nid180.html" style="transform: perspective(2000px);">Làm thế nào để trở thành "nhà quản lý của năm"</a></strong><p style="transform: perspective(2000px);">Bạn cần nghiêm túc với nhân viên, nhưng bạn lại không muốn bị xem là thiếu thân thiện. Bạn muốn chứng tỏ là có quyền lực, nhưng bạn cũng muốn để nhân viên có thể tự do đưa ra ý tưởng. Vậy hãy làm theo những gợi ý sau, bạn sẽ có cơ hội trở thành "nhà quản lý của năm".</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-3" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/kinh-nghiem-cua-nha-quan-ly-ngan-sach-bac-nhat-nid179.html" style="transform: perspective(2000px);"><img src="/images/news/179.jpg" alt="Kinh nghiệm của nhà quản lý ngân sách bậc nhất" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/kinh-nghiem-cua-nha-quan-ly-ngan-sach-bac-nhat-nid179.html" style="transform: perspective(2000px);">Kinh nghiệm của nhà quản lý ngân sách bậc nhất</a></strong><p style="transform: perspective(2000px);">Peter Lynch được mệnh danh là nhà quản lý tiền số một trên thế giới. Ông đã phát triển Quỹ Magellan Fund từ 20 triệu đô la năm 1977 lên đến mức 14 tỉ đô la năm 1990.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/doanh-nghiep-vn-quan-ly-va-su-dung-nhan-tai-thieu-dinh-huong-ro-rang-va-on-dinh-nid178.html" style="transform: perspective(2000px);"><img src="/images/news/178.jpg" alt="Doanh nghiệp VN quản lý và sử dụng nhân tài: Thiếu định hướng rõ ràng và ổn định" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/doanh-nghiep-vn-quan-ly-va-su-dung-nhan-tai-thieu-dinh-huong-ro-rang-va-on-dinh-nid178.html" style="transform: perspective(2000px);">Doanh nghiệp VN quản lý và sử dụng nhân tài: Thiếu định hướng rõ ràng và ổn định</a></strong><p style="transform: perspective(2000px);">Thiếu hụt nguồn nhân lực chất lượng cao đang là vấn đề nan giải đối với các DN VN cũng như nhiều nước trên thế giới. Làm thế nào để tuyển dụng và giữ chân người giỏi là nội dung cuộc hội thảo "Chiến tranh nhân tài" (17-18.4) do Phòng Thương mại và Công nghiệp VN (VCCI) phối hợp với Tập đoàn SMR của Malaysia, Cty Đào tạo và Tư vấn quốc tế AITC tổ chức.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/tao-dong-luc-cho-hoat-dong-lam-viec-nhom-nid177.html" style="transform: perspective(2000px);"><img src="/images/news/177.jpg" alt="Tạo động lực cho hoạt động làm việc nhóm" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/tao-dong-luc-cho-hoat-dong-lam-viec-nhom-nid177.html" style="transform: perspective(2000px);">Tạo động lực cho hoạt động làm việc nhóm</a></strong><p style="transform: perspective(2000px);">Đa số những nhà quản lý đều nhầm lẫn rằng tiền là động lực chủ yếu tác động đến nhân viên của họ. Mặt khác, theo những khảo sát bởi nhiều công ty khác nhau, tiền được xếp vào hàng thứ năm hoặc bị hạ thấp bởi đa số ý kiến của nhân viên. Vì vậy nếu tiền không phải là thứ tốt nhất để thúc đẩy nhóm làm việc tốt, vậy là thứ gì?</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/bai-hoc-nao-tu-su-bien-mat-cua-cac-ty-phu-my-nid176.html" style="transform: perspective(2000px);"><img src="/images/news/176.jpg" alt="Bài học nào từ sự biến mất của các tỷ phú Mỹ" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/bai-hoc-nao-tu-su-bien-mat-cua-cac-ty-phu-my-nid176.html" style="transform: perspective(2000px);">Bài học nào từ sự biến mất của các tỷ phú Mỹ</a></strong><p style="transform: perspective(2000px);">Trong thập kỷ trước, danh sách những tỷ phú mà Tạp chí Forbes liệt kê hàng năm đã bị “Mỹ hóa” như chiếc bánh táo vậy. Bill Gates và Warrent Buffett đã giành nhau vị trí đứng đầu, tiếp sau đó là người sáng lập Tập đoàn Dell (mã chứng khoán niêm yết trên Nasdaq: DELL) Michael Dell, người sáng lập Oracle (ORCL - sàn Nasdaq) Larry Ellison, Chủ tịch Tập đoàn Las Vegas Sands (LVS - sàn NYSE) Sheldon Adelson.</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-4" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/2-loi-ceo-tre-phai-tranh-nid174.html" style="transform: perspective(2000px);"><img src="/images/news/174.jpg" alt="2 lỗi CEO Trẻ phải tránh !" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/2-loi-ceo-tre-phai-tranh-nid174.html" style="transform: perspective(2000px);">2 lỗi CEO Trẻ phải tránh !</a></strong><p style="transform: perspective(2000px);">Việc thay đổi vai trò luôn chứa những cái bẫy khiến cho nhiều sếp mới lúng túng, thậm chí là mắc lỗi, nhất là với những sếp lần đầu được bổ nhiệm. Sự thay đổi này đòi hỏi ở bạn một sự điều chỉnh về mặt tư duy cho phù hợp với vai trò hiện tại. Điều này có thể nhận ra dễ dàng hơn khi phân tích cụ thể tính chất công việc của bạn trước và sau khi thăng chức.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/1-phut-huong-dan-quan-ly-tang-truong-dai-han-nid173.html" style="transform: perspective(2000px);"><img src="/images/news/173.jpg" alt="1 phút hướng dẫn quản lý tăng trưởng dài hạn" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/1-phut-huong-dan-quan-ly-tang-truong-dai-han-nid173.html" style="transform: perspective(2000px);">1 phút hướng dẫn quản lý tăng trưởng dài hạn</a></strong><p style="transform: perspective(2000px);">Ghi nhớ tất cả các kế hoạch và nghiên cứu khởi động công việc kinh doanh nho nhỏ của bạn ư? Hy vọng rằng cố gắng đó đã mang lại những kết quả ít nhất cũng đáp ứng sự trông đợi của bạn bấy lâu. Bây giờ bạn cần tích luỹ quá trình đầu tư nghiên cứu và phân tích đó để tiếp tục những bước thành công ngắn hạn trong tương lai.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/13-nguyen-tac-danh-cho-nha-lanh-dao-nid172.html" style="transform: perspective(2000px);"><img src="/images/news/172.jpg" alt="13 nguyên tắc dành cho nhà lãnh đạo" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/13-nguyen-tac-danh-cho-nha-lanh-dao-nid172.html" style="transform: perspective(2000px);">13 nguyên tắc dành cho nhà lãnh đạo</a></strong><p style="transform: perspective(2000px);">Dưới đây là 13 "nguyên tắc vàng" cho các nhà lãnh đạo hiện đại qua 13 câu nói đáng nhớ của những nhà lãnh đạo, diễn giả tài ba:</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ban-biet-gi-ve-ban-mo-ta-cong-viec-thuc-su-cua-mot-nguoi-lanh-dao-nid171.html" style="transform: perspective(2000px);"><img src="/images/news/171.jpg" alt="Bạn biết gì về Bản mô tả công việc thực sự của một người lãnh đạo?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ban-biet-gi-ve-ban-mo-ta-cong-viec-thuc-su-cua-mot-nguoi-lanh-dao-nid171.html" style="transform: perspective(2000px);">Bạn biết gì về Bản mô tả công việc thực sự của một người lãnh đạo?</a></strong><p style="transform: perspective(2000px);">Jack Welch: trụ cột vàng trong giới quản lý hiện nay, ông có 17 năm thành công xuất sắc tại công ty General Electric - một công ty nhận được sự hoan nghênh nhất ở Mỹ - và đã rút lui vào năm 2001. Welch đưa ra một bộ khung gồm 4 yếu tố để tạo nên một nhà lãnh đạo vĩ đại: năng lượng tích cực, khả năng tiếp sinh lực cho mọi người, khả năng rèn luyện bản thân để tập trung sự dũng cảm khi đưa ra các quyết định khó khăn, và khả năng thực thi.</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-5" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/lam-sao-de-duoc-nhan-vien-tin-cay-nid170.html" style="transform: perspective(2000px);"><img src="/images/news/170.jpg" alt="Làm sao để được nhân viên tin cậy ?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/lam-sao-de-duoc-nhan-vien-tin-cay-nid170.html" style="transform: perspective(2000px);">Làm sao để được nhân viên tin cậy ?</a></strong><p style="transform: perspective(2000px);">Ai cũng muốn được tin cậy. Làm sếp lại càng muốn được nhân viên tin, bởi có tin tưởng, thì họ mới làm tốt công việc của mình và gắn bó lâu dài với tổ chức. Nhưng làm thế nào để được họ tin?</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/canh-tranh-nhan-su-bang-moi-truong-lam-viec-nid169.html" style="transform: perspective(2000px);"><img src="/images/news/169.jpg" alt="Cạnh tranh nhân sự bằng môi trường làm việc" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/canh-tranh-nhan-su-bang-moi-truong-lam-viec-nid169.html" style="transform: perspective(2000px);">Cạnh tranh nhân sự bằng môi trường làm việc</a></strong><p style="transform: perspective(2000px);">Sự phát triển bền vững của doanh nghiệp (DN) dựa trên nền tảng con người. Theo ông Cao Tiến Vị, Tổng Giám đốc Công ty Cổ phần Giấy Sài Gòn, trong tình hình cạnh tranh nhân lực như hiện nay, nếu không tạo dựng được môi trường làm việc thân thiện, DN sẽ khó giữ được chân người tài.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ceo-tre-thuong-gap-4-loi-sau-nid168.html" style="transform: perspective(2000px);"><img src="/images/news/168.jpg" alt="CEO trẻ thường gặp 4 lỗi sau" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ceo-tre-thuong-gap-4-loi-sau-nid168.html" style="transform: perspective(2000px);">CEO trẻ thường gặp 4 lỗi sau</a></strong><p style="transform: perspective(2000px);">Năng động, có năng lực, nhiều nhiệt huyết; tuy nhiên nhiều vị sếp trẻ do chưa quen với vị trí quản lý, thường mắc phải 1 số nhược điểm sau.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/nhung-bai-hoc-de-doi-tu-ceo-mat-viec-nid167.html" style="transform: perspective(2000px);"><img src="/images/news/167.jpg" alt="Những bài học để đời từ CEO mất việc" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/nhung-bai-hoc-de-doi-tu-ceo-mat-viec-nid167.html" style="transform: perspective(2000px);">Những bài học để đời từ CEO mất việc</a></strong><p style="transform: perspective(2000px);">Trong mấy tháng qua, cuộc khủng hoảng trên thị trường cho vay tín chấp “dưới chuẩn” và sự đóng băng của thị trường địa ốc Mỹ đã khiến nền kinh tế nước này phải hứng chịu hàng loạt tác động tiêu cực.</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div>
            </div><span u="arrowleft" class="jssora12l" style="width: 20px; height:24px; bottom:-16px; left: 105px; border:1px #e1e1e1 solid;"></span><span u="arrowright" class="jssora12r" style="width:20px; height:24px; bottom:-16px; right: 105px; border:1px #e1e1e1 solid; "></span></div></div>

        </div>
    </div>
    <div class="cl" style="height:25px;"></div>
    
   
    
    
    
    <div class="cl" style="height:15px;"></div>
</div>