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
                <h3 class="mb-0">Create Service Page</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/save-services" method="POST">
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
                          <input name="servicename" class="form-control" placeholder="Service Name" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <select class="form-control" name="status" data-toggle="select" type="text">
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
                          <option value="{{$subcategory->subcategoryname}}">{{ucfirst($subcategory->subcategoryname)}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <!-- Dropzone -->
                  <div class="card">
                    <!-- Card header -->
                              <div class="card-header">
                                  <h3 class="mb-0">Dropzone</h3>
                              </div>
                              <!-- Card body -->
                              <div class="card-body">
                                  <!-- Single -->
                                  <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                      <div class="fallback">
                                          <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="projectCoverUploads">
                                              <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                          </div>
                                      </div>
                                      <div class="dz-preview dz-preview-single">
                                          <div class="dz-preview-cover">
                                              <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Multiple -->
                                  <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://">
                                      <div class="fallback">
                                          <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple>
                                              <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                          </div>
                                      </div>
                                      <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                          <li class="list-group-item px-0">
                                              <div class="row align-items-center">
                                                  <div class="col-auto">
                                                      <div class="avatar">
                                                          <img class="avatar-img rounded" src="..." alt="..." data-dz-thumbnail>
                                                      </div>
                                                  </div>
                                                  <div class="col ml--3">
                                                      <h4 class="mb-1" data-dz-name>...</h4>
                                                      <p class="small text-muted mb-0" data-dz-size>...</p>
                                                  </div>
                                                  <div class="col-auto">
                                                      <div class="dropdown">
                                                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="fe fe-more-vertical"></i>
                                                              </a>
                                                          <div class="dropdown-menu dropdown-menu-right">
                                                              <a href="#" class="dropdown-item" data-dz-remove>Remove</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Footer -->
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
