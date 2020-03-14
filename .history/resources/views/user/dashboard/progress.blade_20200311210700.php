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
        <div class="col-lg-6">
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
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                        <input name="servicename" class="form-control" placeholder="Full Name" value="{{$leads[0]->name}}" type="text" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="servicename" class="form-control" placeholder="Category" value="{{$leads[0]->category}}" type="text" disabled>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <select class="form-control" name="status" data-toggle="select" type="text">
                            <option value="{{$leads[0]->status}}">Current Status (- {{$leads[0]->status}})</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Successfull">Successfull</option>
                            <option value="Terminated">Terminated</option>
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
                          <input name="servicename" class="form-control" placeholder="Email" value="{{$leads[0]->email}}" type="text" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="servicename" class="form-control" placeholder="Phone No" value="{{$leads[0]->phone}}" type="text" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="servicename" class="form-control" placeholder="City" value="{{$leads[0]->city}}" type="text" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="servicename" class="form-control" placeholder="Service" value="{{$leads[0]->service}}" type="text" disabled>
                          </div>
                        </div>
                      </div>
                    
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
            <!-- Members list group card -->
            <div class="card">
                <form action="/user/save-upload/{{{$leads[0]->id}}}" method="POST" enctype="multipart/form-data">
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
                  </li><hr>
                </ul>
              </div>
            </form>
            </div>
          </div>
      </div>
      @include('user.dashboard.includes.footer')
