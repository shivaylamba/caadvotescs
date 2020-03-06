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
                <h3 class="mb-0">Lead Details & Progress</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/save-services" method="POST" enctype="multipart/form-data">
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
                          <input name="servicename" class="form-control" placeholder="Full Name" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="servicename" class="form-control" placeholder="Category" type="text">
                          </div>
                        </div>
                      </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <select class="form-control" name="popular" data-toggle="select" type="text">
                            <option >Select Status</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Successfull">Successfull</option>
                            <option value="Terminated">Terminated</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Select Sub Category</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <input class="form-control" name="subcategory" data-toggle="select">
                    </input>
                    </div>
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Add Feedback for Lead</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <textarea id="froala-editor" name="content">To be Updated Soon!</textarea>
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
