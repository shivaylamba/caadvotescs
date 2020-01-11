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
                      <h3 class="mb-0">Select Category</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <select class="form-control" name="category" data-toggle="select">
                          <option>Alerts</option>
                          <option>Badges</option>
                          <option>Buttons</option>
                          <option>Cards</option>
                          <option>Forms</option>
                          <option>Modals</option>
                        </select>
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
                          <option>Alerts</option>
                          <option>Badges</option>
                          <option>Buttons</option>
                          <option>Cards</option>
                          <option>Forms</option>
                          <option>Modals</option>
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
                        <div data-toggle="quill" data-quill-placeholder="Quill WYSIWYG"><input name="content" type="hidden">
                        </div>
                    </div>
                  </div>
                  <button type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        var form = document.querySelector('form');
        form.onsubmit = function() {
          // Populate hidden form on submit
          var about = document.querySelector('input[name=content]');
          about.value = JSON.stringify(quill.getContents());
          return false;
        };
      </script>
      @include('admin.layouts.footer')
