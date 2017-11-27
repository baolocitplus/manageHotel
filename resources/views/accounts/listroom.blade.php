@extends('master')
@section('content')

    <!--Breadcrumb Section-->
    {{--<section id="breadcrumb-section" data-bg-img="{{asset('assets/img/breadcrumb.jpg')}}">--}}
        {{--<div class="inner-container container">--}}
            {{--<div class="ravis-title">--}}
                {{--<div class="inner-box">--}}
                    {{--<div class="title">Rooms - List View</div>--}}
                    {{--<div class="sub-title">Some description about your hotel</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="breadcrumb">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li><a href="../index.html">Home</a></li>--}}
                    {{--<li class="current"><a href="#">Rooms - List View</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--End of Breadcrumb Section-->

    <!--Room Section-->
    <section id="rooms-section" class="row-view">
        <div class="inner-container container">
            <div class="ravis-title-t-2">
                <div class="title"><span>Danh sách phòng</span></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <select class="form-group" name="category" style="width: 100%">
                            <option>Loai 1</option>
                            <option>Loai 1</option>
                            <option>Loai 1</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="room-container clearfix">
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="{{asset('assets/img/gallery/1.jpg')}}">
                        <a href="{{route('roomdetails')}}" class="more-info-url"></a>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">Single Room</div>
                                <div class="price">
                                    <div class="title">Starting from :</div>
                                    <div class="value">$320</div>
                                </div>
                            </div>
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-6">
                                        <div class="title">Breakfast :</div>
                                        <div class="value">Included</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Room Size :</div>
                                        <div class="value">60 sqm</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Max People :</div>
                                        <div class="value">3</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">View :</div>
                                        <div class="value">Sea</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Facilities :</div>
                                        <div class="value">Free Wifi, Free Mini Bar, Room Security</div>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('roomdetails')}}" class="more-info">Xóa</a>
                            <a href="{{route('roomdetails')}}" class="more-info">sửa</a>
                        </div>
                        <div class="col-md-6 desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum eius eos fugiat illo
                            illum
                            provident, quas qui quisquam quod sint velit voluptate voluptatum. Ad aperiam aspernatur
                            atque aut consequatur distinctio earum ex fuga fugit hic impedit iure libero minima
                            molestiae nihil obcaecati officia perferendis perspiciatis possimus, quam qui quibusdam
                            quidem reiciendis rem repellendus, sint tempora veniam vero voluptas voluptatum.
                        </div>
                    </div>
                </div>
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="{{asset('assets/img/gallery/2.jpg')}}">
                        <a href="{{route('roomdetails')}}" class="more-info-url"></a>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">Double Room</div>
                                <div class="price">
                                    <div class="title">Starting from :</div>
                                    <div class="value">$350</div>
                                </div>
                            </div>
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-6">
                                        <div class="title">Breakfast :</div>
                                        <div class="value">Included</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Room Size :</div>
                                        <div class="value">80 sqm</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Max People :</div>
                                        <div class="value">6</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">View :</div>
                                        <div class="value">Garden</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Facilities :</div>
                                        <div class="value">Free Wifi, Free Mini Bar, Room Security</div>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('roomdetails')}}" class="more-info">Xóa</a>
                            <a href="{{route('roomdetails')}}" class="more-info">sửa</a>
                        </div>
                        <div class="col-md-6 desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum eius eos fugiat illo
                            illum
                            provident, quas qui quisquam quod sint velit voluptate voluptatum. Ad aperiam aspernatur
                            atque aut consequatur distinctio earum ex fuga fugit hic impedit iure libero minima
                            molestiae nihil obcaecati officia perferendis perspiciatis possimus, quam qui quibusdam
                            quidem reiciendis rem repellendus, sint tempora veniam vero voluptas voluptatum.
                        </div>
                    </div>
                </div>
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="{{asset('assets/img/gallery/3.jpg')}}">
                        <a href="{{route('roomdetails')}}" class="more-info-url"></a>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">One-bedroom Suite</div>
                                <div class="price">
                                    <div class="title">Starting from :</div>
                                    <div class="value">$450</div>
                                </div>
                            </div>
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-6">
                                        <div class="title">Breakfast :</div>
                                        <div class="value">Included</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Room Size :</div>
                                        <div class="value">60 sqm</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Max People :</div>
                                        <div class="value">3</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">View :</div>
                                        <div class="value">Sea</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Facilities :</div>
                                        <div class="value">Free Wifi, Free Mini Bar, Room Security</div>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('roomdetails')}}" class="more-info">More Info</a>
                        </div>
                        <div class="col-md-6 desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum eius eos fugiat illo
                            illum
                            provident, quas qui quisquam quod sint velit voluptate voluptatum. Ad aperiam aspernatur
                            atque aut consequatur distinctio earum ex fuga fugit hic impedit iure libero minima
                            molestiae nihil obcaecati officia perferendis perspiciatis possimus, quam qui quibusdam
                            quidem reiciendis rem repellendus, sint tempora veniam vero voluptas voluptatum.
                        </div>
                    </div>
                </div>
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="{{asset('assets/img/gallery/4.jpg')}}">
                        <a href="{{route('roomdetails')}}" class="more-info-url"></a>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">Two-bedroom Suite</div>
                                <div class="price">
                                    <div class="title">Starting from :</div>
                                    <div class="value">$480</div>
                                </div>
                            </div>
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-6">
                                        <div class="title">Breakfast :</div>
                                        <div class="value">Included</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Room Size :</div>
                                        <div class="value">60 sqm</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Max People :</div>
                                        <div class="value">3</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">View :</div>
                                        <div class="value">Sea</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Facilities :</div>
                                        <div class="value">Free Wifi, Free Mini Bar, Room Security</div>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('roomdetails')}}" class="more-info">More Info</a>
                        </div>
                        <div class="col-md-6 desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum eius eos fugiat illo
                            illum
                            provident, quas qui quisquam quod sint velit voluptate voluptatum. Ad aperiam aspernatur
                            atque aut consequatur distinctio earum ex fuga fugit hic impedit iure libero minima
                            molestiae nihil obcaecati officia perferendis perspiciatis possimus, quam qui quibusdam
                            quidem reiciendis rem repellendus, sint tempora veniam vero voluptas voluptatum.
                        </div>
                    </div>
                </div>
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="{{asset('assets/img/gallery/5.jpg')}}">
                        <a href="{{route('roomdetails')}}" class="more-info-url"></a>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">Royal Suite</div>
                                <div class="price">
                                    <div class="title">Starting from :</div>
                                    <div class="value">$550</div>
                                </div>
                            </div>
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-6">
                                        <div class="title">Breakfast :</div>
                                        <div class="value">Included</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Room Size :</div>
                                        <div class="value">60 sqm</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Max People :</div>
                                        <div class="value">3</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">View :</div>
                                        <div class="value">Sea</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Facilities :</div>
                                        <div class="value">Free Wifi, Free Mini Bar, Room Security</div>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('roomdetails')}}" class="more-info">More Info</a>
                        </div>
                        <div class="col-md-6 desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum eius eos fugiat illo
                            illum
                            provident, quas qui quisquam quod sint velit voluptate voluptatum. Ad aperiam aspernatur
                            atque aut consequatur distinctio earum ex fuga fugit hic impedit iure libero minima
                            molestiae nihil obcaecati officia perferendis perspiciatis possimus, quam qui quibusdam
                            quidem reiciendis rem repellendus, sint tempora veniam vero voluptas voluptatum.
                        </div>
                    </div>
                </div>
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="{{asset('assets/img/gallery/6.jpg')}}">
                        <a href="{{route('roomdetails')}}" class="more-info-url"></a>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">King Suit</div>
                                <div class="price">
                                    <div class="title">Starting from :</div>
                                    <div class="value">$660</div>
                                </div>
                            </div>
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-6">
                                        <div class="title">Breakfast :</div>
                                        <div class="value">Included</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Room Size :</div>
                                        <div class="value">60 sqm</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">Max People :</div>
                                        <div class="value">3</div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="title">View :</div>
                                        <div class="value">Sea</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Facilities :</div>
                                        <div class="value">Free Wifi, Free Mini Bar, Room Security</div>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('roomdetails')}}" class="more-info">More Info</a>
                        </div>
                        <div class="col-md-6 desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum eius eos fugiat illo
                            illum
                            provident, quas qui quisquam quod sint velit voluptate voluptatum. Ad aperiam aspernatur
                            atque aut consequatur distinctio earum ex fuga fugit hic impedit iure libero minima
                            molestiae nihil obcaecati officia perferendis perspiciatis possimus, quam qui quibusdam
                            quidem reiciendis rem repellendus, sint tempora veniam vero voluptas voluptatum.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="pagination-box">
                <ul class="list-inline">
                    <li class="active"><a href="#"><span>1</span></a></li>
                    <li><a href="#"><span>2</span></a></li>
                    <li><a href="#"><span>3</span></a></li>
                </ul>
            </div>
            <!-- End of Pagination -->

        </div>
    </section>
    <!--End of Room Section-->

<style>
    #main-header, #breadcrumb-section{
        display: none;
    }

</style>
@endsection()