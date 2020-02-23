@include('employee.includes.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('employee.includes.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('employee.includes.customtopBar')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Generate Payment for Customer {{$leads[0]->name}}</h3>
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
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                        <input name="servicename" class="form-control" placeholder="Full Name" value="{{$leads[0]->name}}" type="text" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="servicename" class="form-control" placeholder="Category" value="{{$leads[0]->category}}" type="text" disabled>
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
                    <div class="col-md-6">
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
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="servicename" class="form-control" placeholder="Service" value="{{$leads[0]->service}}" type="text" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="servicename" class="form-control" placeholder="Enter Amount" value="{{$leads[0]->service}}" type="text" disabled>
                          </div>
                        </div>
                      </div>
                    
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Any Note</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <textarea id="froala-editor" name="feedback">Remember This will be sent to Mail!</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('employee.includes.footer')
