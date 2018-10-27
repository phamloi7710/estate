@section('title')
@stop
@extends('frontend.general.master')
@section('content')
<div class="altcontent1 cmszone">
    <div class="breadcrumb_bg">
        <div class="container">
            <ol class="breadcrumb">
                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://www.datxanh.vn" class="itemcrumb" itemprop="url"><span itemprop="title">Trang chủ</span></a></li>
                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://www.datxanh.vn/lien-he" class="itemcrumb active" itemprop="url"><span itemprop="title">Liên hệ</span></a></li>
            </ol>
        </div>
    </div>
</div>
<main class="main">
    <div class="container">
        <div class="row">
            <div class="middle-fullwidth">
                <div class="col-xs-12">
                    <div class="contact-wrap">
                        <div class="row">
                            <div class="col-xs-12 contact-text">
                                <div class="ModuleContent">
                                    <h1 style="line-height: 100px;">Liên Hệ</h1>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5 col-lg-4">
                                <div class="contact-info">
                                    <div class="ModuleContent">
                                        <div class="item-addr">
                                            <h3>Trụ Sở Chính Tập Đoàn Đất Xanh</h3>
                                            <address>
                                                <div class="addr">
                                                    <em class="fa fa-map-marker"></em>
                                                    <span>xxxx Xô Viết Nghệ Tĩnh, phường 21, Bình Thạnh, Hồ Chí Minh, Việt Nam</span>
                                                </div>
                                                <div class="addr">
                                                    <em class="fa fa-phone"></em>
                                                    <span>0123.456.789</span>
                                                </div>
                                                <div class="addr">
                                                    <em class="fa fa-fax"></em>
                                                    <span>0123.456.789</span>
                                                </div>
                                                <div class="addr">
                                                    <em class="fa fa-envelope-o"></em>
                                                    <span><a href="mailto:demo@demo.com">demo@demo.com</a></span>
                                                </div>
                                                <div class="addr"><em class="fa fa-globe"></em>
                                                    <a href="http://demo.com/" target="_blank">
                                                    www.demo.com</a>
                                                </div>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-7 col-lg-8">
                                <div class="contact-maps">
                                    <div class="ModuleContent">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.5676726972767!2d106.71082905786336!3d10.80094439807622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a534f8082b%3A0x50117263d4b9dc05!2zMzE4IFjDtCBWaeG6v3QgTmdo4buHIFTEqW5oLCBQaMaw4budbmcgMjEsIELDrG5oIFRo4bqhbmgsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1540620920815" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                                </div>
                                <div class="contact-form Module Module-93">
                                    <div class="ModuleContent">
                                        <div class="wrap-contact">
                                            <div id="ctl00_mainContent_ctl03_pnlSend" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_mainContent_ctl03_btnSend')">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group ct-name">
                                                            <label for="ctl00_mainContent_ctl03_txtName" class="label">Họ tên<span>*</span></label>
                                                            <input name="ctl00$mainContent$ctl03$txtName" type="text" maxlength="100" id="ctl00_mainContent_ctl03_txtName" class="form-control" placeholder="Họ tên">
                                                            <span id="ctl00_mainContent_ctl03_reqName" title="Vui lòng nhập họ tên." class="fa fa-exclamation-triangle" style="display:none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group ct-address">
                                                            <label for="ctl00_mainContent_ctl03_txtAddress" class="label">Địa chỉ</label>
                                                            <input name="ctl00$mainContent$ctl03$txtAddress" type="text" maxlength="255" id="ctl00_mainContent_ctl03_txtAddress" class="form-control" placeholder="Địa chỉ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group ct-email">
                                                            <label for="ctl00_mainContent_ctl03_txtEmail" class="label">Email<span>*</span></label>
                                                            <input name="ctl00$mainContent$ctl03$txtEmail" type="text" maxlength="255" id="ctl00_mainContent_ctl03_txtEmail" class="form-control" placeholder="Email">
                                                            <span id="ctl00_mainContent_ctl03_reqEmail" title="Vui lòng nhập email." class="fa fa-exclamation-triangle" style="display:none;"></span>
                                                            <span id="ctl00_mainContent_ctl03_regexEmail" title="Email không hợp lệ." class="fa fa-exclamation-triangle" style="display:none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group ct-phone">
                                                            <label for="ctl00_mainContent_ctl03_txtPhone" class="label">Điện thoại</label>
                                                            <input name="ctl00$mainContent$ctl03$txtPhone" type="text" maxlength="255" id="ctl00_mainContent_ctl03_txtPhone" class="form-control" placeholder="Điện thoại">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group ct-subject">
                                                            <label for="ctl00_mainContent_ctl03_txtSubject" class="label">Tiêu đề</label>
                                                            <input name="ctl00$mainContent$ctl03$txtSubject" type="text" maxlength="255" id="ctl00_mainContent_ctl03_txtSubject" class="form-control" placeholder="Tiêu đề">
                                                        </div>
                                                        <div class="form-group ct-message">
                                                            <label for="ctl00_mainContent_ctl03_txtMessage" class="label">Nội dung<span>*</span></label>
                                                            <textarea name="ctl00$mainContent$ctl03$txtMessage" rows="2" cols="20" id="ctl00_mainContent_ctl03_txtMessage" class="form-control" placeholder="Nội dung"></textarea>
                                                            <span id="ctl00_mainContent_ctl03_reqMessage" title="Vui lòng nhập nội dung liên hệ." class="fa fa-exclamation-triangle" style="display:none;"></span>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="form-group ct-button">
                                                            <div class="frm-btnwrap">
                                                                <div class="frm-btn">
                                                                    <input type="submit" name="ctl00$mainContent$ctl03$btnSend" value="Gửi" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$mainContent$ctl03$btnSend&quot;, &quot;&quot;, true, &quot;Contact93&quot;, &quot;&quot;, false, false))" id="ctl00_mainContent_ctl03_btnSend" class="ct-button btn btn-default">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop