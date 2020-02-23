@include('admin.layouts.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('admin.layouts.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('admin.layouts.customtopBar')
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
                <h3 class="mb-0">Register New Employee</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/employee/register" method="POST" enctype="multipart/form-data">
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
                          <input name="emp_name" class="form-control" placeholder="Employee Full Name" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="emp_email" class="form-control" placeholder="Employee Email" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="emp_phone" class="form-control" placeholder="Employee Phone No" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="password" class="form-control" placeholder="Employee Password" type="text">
                          </div>
                        </div>
                      </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <select class="form-control" name="emp_type" data-toggle="select" type="text">
                            <option value="#">Select Employee Type</option>
                            <option value="sales">Sales</option>
                            <option value="operation">Operation</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <select class="form-control" name="emp_category" data-toggle="select" type="text">
                            <option >Select Category</option>
                            <option value="gst">Legal</option>
                            <option value="income tax">Marketing</option>
                            <option value="startup">Marketing</option>
                            <option value="legal">Consultancy</option>
                          </select>
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
      </div>
      @include('admin.layouts.footer')
