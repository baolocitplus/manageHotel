
@extends('admin')
@section('content')
							
<div class="row list-offer-row show">
    <div class="col-xs-12 col-md-2 col-sm-2 col-lg-2"></div>
    <div class="col-xs-12 col-md-9 col-sm-9 col-lg-9">
        <div class="list-offer list-offer-dh">
            <div class="list-offer-left">
                <div class="list-offer-front">
                    <div class="list-offer-photo-h">
                        <img src="{{asset('assets/img/slider/4.jpg')}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="list-offer-right">
                <div class="list-offer-text">
                    <i class="fa fa-pencil list-offer-localization"></i>
                    <div class="list-offer-h4"><a href="app/views/home/blog-details.php"><h4 class="list-offer-title">Tin ký sự nhà đất...</h4></a></div>
                    <div class="clearfix"></div>
                    <a href="app/views/home/blog-details.php">Theo JLL, chỉ có 7.800 trong số 25.000 đơn vị nhà ở đã được bàn giao ở Dubai trong năm 2015. Như vậy là thấp hơn so với dự đoán của các nhà phân tích và các nhà phát triển bất động sản trong thời gian qua.</a>
                    <div class="clearfix"></div>
                </div>
                <div class="profile-list-footer">
                    <a data-target="#delete-blog" data-toggle="modal" class="profile-list-delete" title="xóa bài">
                        <i class="fa fa-trash fa-lg"></i>
                    </a>	
                    <a href="#" class="profile-list-edit" title="chỉnh sửa">
                        <i class="fa fa-pencil fa-lg"></i>
                    </a>	
                    <div class="profile-list-info hidden-xs hidden-sm hidden-md">
                        <span><i class="fa fa-eye" aria-hidden="true"></i>Lượt xem: <strong>135</strong></span>
                    </div>
                    <div class="profile-list-info">
                        <span><i class="fa fa-calendar" aria-hidden="true"></i>Ngày đăng: <strong>01/01/17</strong></span>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
 </div>
@endsection()



