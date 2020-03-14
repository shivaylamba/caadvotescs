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
              <h3 class="mb-0">Lead Progress Details for Service: <a style="color:green;">{{$leads[0]->service}}</a> Ticket No: {{$leads[0]->cust_id}}</h3>
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
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Add Feedback for Lead</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <textarea id="froala-editor" name="feedback">To be Updated Soon!</textarea>
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
              <!-- Card header -->
              <div class="card-header">
                <!-- Title -->
                <h5 class="h3 mb-0">Please upload Your Documents</h5>
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
                          <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
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
                        <button type="button" class="btn btn-sm btn-primary">Add</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <a href="dashboard.html#" class="avatar rounded-circle">
                          <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
                        </a>
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          <a href="dashboard.html#!">Alex Smith</a>
                        </h4>
                        <span class="text-warning">●</span>
                        <small>In a meeting</small>
                      </div>
                      <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-primary">Add</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <a href="dashboard.html#" class="avatar rounded-circle">
                          <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
                        </a>
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          <a href="dashboard.html#!">Samantha Ivy</a>
                        </h4>
                        <span class="text-danger">●</span>
                        <small>Offline</small>
                      </div>
                      <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-primary">Add</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <a href="dashboard.html#" class="avatar rounded-circle">
                          <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                        </a>
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          <a href="dashboard.html#!">John Michael</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>Online</small>
                      </div>
                      <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-primary">Add</button>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
      @include('user.dashboard.includes.footer')
