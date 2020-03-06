<div class="card card-profile">
    <img src="../../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
    <div class="row justify-content-center">
        <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
                <a href="#">
                    <img src="../../assets/img/theme/team-4.jpg" class="rounded-circle">
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
            <div class="col">
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
            </div>
        </div>
        <div class="text-center">
            <h5 class="h3">
                Jessica Jones<span class="font-weight-light">, 27</span>
            </h5>
            <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>Bucharest, Romania
            </div>
        </div>
    </div>
</div>

@include('user.dashboard.includes.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('user.dashboard.includes.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('user.dashboard.includes.customtopBar')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Compare Professionals on our platform with each other</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/user/compare-associate" method="POST">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ csrf_field() }}
                  <!-- Input groups with icon -->
                  
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <select class="form-control" placeholder="Professional 1" name="associate_1">
                            <option value="#">Select Professional 1</option>
                            @foreach($associates as $a1)
                            <option value="{{$a1->email}}">{{$a1->name}}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <select class="form-control" placeholder="Professional 2" name="associate_2">
                            <option value="#">Select Professional 2</option>
                            @foreach($associates as $a2)
                            <option value="{{$a2->email}}">{{$a2->name}}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Compare</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('user.dashboard.includes.footer')
