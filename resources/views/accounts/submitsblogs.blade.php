@extends('admin')
@section('content')
   <div class="row" style="padding-bottom:100px"> 
        <div class="col-xs-12 col-md-12 col-lg-9 mar">
            <div class="row">
                <div class="col-xs-12">
                    <h5 class="subtitle-margin">Đăng tin</h5>
                    <h1>Sự kiện<span class="special-color">.</span></h1>
                    <div class="title-separator-primary"></div>
                </div>
            </div>	
            <form name="agent-from" action="#" enctype="multipart/form-data">
            <div class="row margin-top-60">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="labelled-input set-blog">
                        <label for="title" style="border: 1px solid #ebebeb; background: #f8f8f8; color: #5d5d5d;">Tiêu đề ký sự</label>
                        <input id="title" style="border: 1px solid #ebebeb;" name="title" type="text" class="input-full main-input" placeholder="" value=""/>
                    </div>
                </div>
            </div>		
            <div class="row margin-top-15">						
                <div class="col-xs-12 col-sm-12 col-md-12">	
                    <div class="agent-photos">
                        <img class="max-with" src="/public/assets/img/slider/2.jpg" style="width:100%" id="agent-profile-photo" class="img-responsive" alt="" />
                        <div class="change-photo pull-right" style="background: #ffffff;">
                            <i class="fa fa-pencil fa-lg" style="color: #007FFF;"></i>
                            <input type="file" name="agent-photo" id="agent-photo" />
                        </div>
                        <input type="text" disabled="disabled" id="agent-file-name" class="main-input" />
                    </div>
                </div>						
            </div>
            <div class="row margin-top-15">
                <div class="col-xs-12">
                    <div class="labelled-textarea">
                        <label for="description">Nội dung ký sự</label>
                        <textarea id="description" name="description" class="input-full main-input"></textarea>
                    </div>
                </div>
            </div>
            <!-- <div class="row margin-top-15">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title-file-upload agent-certificate">
                        <h5 class="title-upload visible-xs">Hình ảnh</h5>
                        <input id="file-upload-ads-img" name="files[]" type="file" >	
                    </div>
                </div>
            </div> -->
            <div class="row margin-top-15">
                <div class="col-xs-12">
                    <div class="center-button-cont center-button-cont-border">
                        <button type="submit" class="button-primary button-shadow">
                            <span>Lưu</span>
                            <div class="button-triangle"></div>
                            <div class="button-triangle2"></div>
                            <div class="button-icon"><i class="fa fa-lg fa-floppy-o"></i></div>
                        </button>
                    </div>
                </div>
            </div>
            </form>
            <div class="row margin-top-60"></div>
        </div>	
    </div>

<!-- <style>
.btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
    display: none ;
    content: " ";
}
</style> -->
@endsection()