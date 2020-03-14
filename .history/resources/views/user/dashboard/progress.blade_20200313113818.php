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
        <div class="col-lg-4">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
              <h3 class="mb-0">Lead Progress Details for <br/>Service: <a style="color:green;">{{$leads[0]->service}}</a> <br/>Ticket No: {{$leads[0]->cust_id}}</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
              <form action="/employee/lead/update/{{$leads[0]->id}}" method="POST" enctype="multipart/form-data">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                    {{ csrf_field() }}
                  <!-- Input groups with icon -->
                  
                  <div class="row">
                    <div class="col-md-12">
                      <li>CUST ID: <span style="color:blue;">{{$leads[0]->cust_id}}</span></li>
                     <li>SERVICE CATEGORY: <span style="color:blue;">{{$leads[0]->category}}</span></li>
                     <li>SERVICE NAME: <span style="color:blue;">{{$leads[0]->service}}</span></li>
                     <li>SERVICE STATUS: <span style="color:blue;">{{$leads[0]->status}}</span></li>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <!-- Members list group card -->
            <div class="card">
                <form action="/user/save-upload" method="POST" enctype="multipart/form-data">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                    {{ csrf_field() }}
              <!-- Card header -->
              <div class="card-header">
                <!-- Title -->
                <h5 class="h3 mb-0">Please upload the Required Documents <input type="hidden" name="service_name" class="form-control" value="{{$leads[0]->service}}"></h5>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <!-- List group -->
                <ul class="list-group list-group-flush list my--3">
                  @if (count($library) > 0)
                  @if($library[0]->document_name == 'Adhar Card')
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <a href="dashboard.html#" class="avatar rounded-circle">
                          <img alt="Image placeholder" src="https://www.jagranimages.com/images/newimg/29112019/29_11_2019-aadhar_19800047.jpg">
                        </a>
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          <a href="dashboard.html#!">Adhar Card Already Present in Digital Library</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>gov doc</small>
                      </div>
                    </li>
                  @else
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <a href="dashboard.html#" class="avatar rounded-circle">
                          <img alt="Image placeholder" src="https://www.jagranimages.com/images/newimg/29112019/29_11_2019-aadhar_19800047.jpg">
                        </a>
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          <a href="dashboard.html#!">Adhar Card</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>gov doc</small>
                      </div>
                      <div class="col-auto">
                        <input  class="btn btn-sm btn-primary" type="hidden" name="CUST_ID" class="form-control" value="{{$leads[0]->cust_id}}">
                        <input  class="btn btn-sm btn-primary" type="hidden" name="id" class="form-control" value="{{$leads[0]->id}}">
                        <input  class="btn btn-sm btn-primary" type="text" name="document_name" class="form-control" value="Adhar Card" style="display:none;">
                        <input  class="btn btn-sm btn-primary" type="file" name="input_img" class="form-control">
                        <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </li>
                  @endif
                  @endif
                  
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <a href="dashboard.html#" class="avatar rounded-circle">
                          <img alt="Image placeholder" src="https://www.jagranimages.com/images/newimg/29112019/29_11_2019-aadhar_19800047.jpg">
                        </a>
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          <a href="dashboard.html#!">Adhar Card</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>gov doc</small>
                      </div>
                      <div class="col-auto">
                        <input  class="btn btn-sm btn-primary" type="hidden" name="CUST_ID" class="form-control" value="{{$leads[0]->cust_id}}">
                        <input  class="btn btn-sm btn-primary" type="hidden" name="id" class="form-control" value="{{$leads[0]->id}}">
                        <input  class="btn btn-sm btn-primary" type="text" name="document_name" class="form-control" value="Adhar Card" style="display:none;">
                        <input  class="btn btn-sm btn-primary" type="file" name="input_img" class="form-control">
                        <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </li>
                  <hr>
                </ul>
              </div>
            </form>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">Contact our Team for Assistant</h5>
            </div>
            <!-- Card body -->
            <div class="card-body p-0">
              <!-- List group -->
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start py-4 px-4">
                  <div class="d-flex w-100 justify-content-between">
                    <div>
                      <div class="d-flex w-100 align-items-center">
                        <img src="../../assets/img/theme/team-1.jpg" alt="Image placeholder" class="avatar avatar-xs mr-2">
                        <h5 class="mb-1">Tim</h5>
                      </div>
                    </div>
                    <small>2 hrs ago</small>
                  </div>
                  <h4 class="mt-3 mb-1"> New order for Argon Dashboard</h4>
                  <p class="text-sm mb-0">Doasdnec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start py-4 px-4">
                  <div class="d-flex w-100 justify-content-between">
                    <div>
                      <div class="d-flex w-100 align-items-center">
                        <img src="../../assets/img/theme/team-2.jpg" alt="Image placeholder" class="avatar avatar-xs mr-2">
                        <h5 class="mb-1">Mike</h5>
                      </div>
                    </div>
                    <small>1 day ago</small>
                  </div>
                  <h4 class="mt-3 mb-1"><span class="text-info">●</span> Your theme has been updated</h4>
                  <p class="text-sm mb-0">Doasdnec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
              </div>
              <div class="media align-items-center">
                <img alt="Image placeholder" class="avatar avatar-lg rounded-circle mr-4" src="../../assets/img/theme/team-3.jpg">
                <div class="media-body">
                  <form>
                    <textarea class="form-control" placeholder="Write your comment" rows="1"></textarea>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('user.dashboard.includes.footer')
