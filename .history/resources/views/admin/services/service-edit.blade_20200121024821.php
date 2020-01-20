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
                <h3 class="mb-0">Edit Service Page</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
              <form action="/update-services/{{$service[0]->id}}" method="POST" enctype="multipart/form-data">
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
                          <option value="{{$service[0]->subcategory}}">{{ucfirst($service[0]->subcategory)}} (Current Category of Service)</option>
                          @foreach ($servicesubcategory as $servicesubcategory)
                          <option value="{{$servicesubcategory->subcategoryname}}">{{ucfirst($servicesubcategory->subcategoryname)}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Upload Image</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Single -->
                        <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="/">
                            <div class="fallback">
                                <div class="custom-file">
                                    <input type="file" name="input_img" class="custom-file-input" id="projectCoverUploads">
                                    <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                </div>
                            </div>
                            <div class="dz-preview dz-preview-single">
                                <div class="dz-preview-cover">
                                    <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Add Service Page Content</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                    <textarea id="froala-editor" name="content" value="{{$service[0]->content}}">{{$service[0]->content}}</textarea>
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
