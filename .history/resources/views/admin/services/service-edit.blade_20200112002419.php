@include('admin.layouts.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('admin.layouts.topmenu')
    <!-- Header -->
    <!-- Header -->
    @include('admin.layouts.topBar')
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
                <h3 class="mb-0">Edit Service Page</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
              <form action="/update-services/{{$service[0]->id}}" method="POST">
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
                          <input name="servicename" class="form-control" value="{{$service[0]->servicename}}" placeholder="Service Name" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <select class="form-control" name="status" data-toggle="select" type="text">
                            <option value="{{$service[0]->status}}">{{ucfirst($service[0]->status)}}(Current Status)</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
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
                        <select class="form-control" name="subcategory" data-toggle="select">
                          @foreach ($subcategory as $subcategory)
                          <option value="{{$service->subcategory}}">{{ucfirst($service->subcategory)}} (Current Category of Service)</option>
                          <option value="{{$subcategory->subcategoryname}}">{{ucfirst($subcategory->subcategoryname)}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Add Service Page Content</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <textarea id="froala-editor" name="content">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
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
