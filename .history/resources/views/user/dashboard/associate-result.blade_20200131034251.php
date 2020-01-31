@include('user.dashboard.includes.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('user.dashboard.includes.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('user.dashboard.includes.customtopBar')
    <!-- Page content -->
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4">
            <div class="card card-profile">
                <img src="../../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="https://img.pngio.com/png-avatar-108-images-in-collection-page-3-png-avatar-300_300.png" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                        <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <!--div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">22</span>
                                    <span class="description">Friends</span>
                                </div>
                                <div>
                                    <span class="heading">10</span>
                                    <span class="description">Photos</span>
                                </div>
                                <div>
                                    <span class="heading">89</span>
                                    <span class="description">Comments</span>
                                </div>
                            </div>
                        </div-->
                    </div>
                    <div class="text-center">
                        <h5 class="h3">
                            {{$associate1[0]->name}}<span class="font-weight-light"></span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{$associate1[0]->associate_state}}, {{$associate1[0]->associate_city}}
                        </div>
                    </div>
                    <h5>Total Services Participated In: <span style="color:green">{{$s1}}</span></h5>
                    <h5>Rating:<span style="color:green"></span></h5>
                    <h5>Category: <span style="color:green">{{$associate1[0]->associate_category}}</span></h5>
                    <h5>Profession: <span style="color:green">{{$associate1[0]->associate_profession}}</span></h5>
                    <h5>Associate About: <span style="color:green">{{$associate1[0]->associate_about}}</span></h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-profile">
                <img src="../../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="https://img.pngio.com/parent-directory-avatar-2png-avatar-png-256_256.png" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                        <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <!--div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">22</span>
                                    <span class="description">Friends</span>
                                </div>
                                <div>
                                    <span class="heading">10</span>
                                    <span class="description">Photos</span>
                                </div>
                                <div>
                                    <span class="heading">89</span>
                                    <span class="description">Comments</span>
                                </div>
                            </div>
                        </div-->
                    </div>
                    <div class="text-center">
                        <h5 class="h3">
                            {{$associate2[0]->name}}<span class="font-weight-light"></span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{$associate2[0]->associate_state}}, {{$associate2[0]->associate_city}}
                        </div>
                    </div>
                    <h5>Total Services Participated In: <span style="color:green">{{$s2}}</span></h5>
                    <h5>Rating: @for($i = 0; $i<$a->associate_rating; $i++)
                        <i class="fa fa-sm fa-star"></i>
                        @endfor
                        {{$a->associate_rating}}/5
                    </h5>
                    <h5>Category: <span style="color:green">{{$associate2[0]->associate_category}}</span></h5>
                    <h5>Profession: <span style="color:green">{{$associate2[0]->associate_profession}}</span></h5>
                    <h5>Associate About: <span style="color:green">{{$associate2[0]->associate_about}}</span></h5>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
        </div>
</div>
      @include('user.dashboard.includes.footer')
