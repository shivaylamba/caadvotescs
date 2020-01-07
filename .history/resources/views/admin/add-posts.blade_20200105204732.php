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
        <div class="col-lg-12">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Input groups</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form>
                  <!-- Input groups with icon -->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input class="form-control" placeholder="Your name" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <input class="form-control" placeholder="Email address" type="email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Location" type="text">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Password" type="password">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-eye"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Input groups with icon -->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                          </div>
                          <input class="form-control" placeholder="Payment method" type="text">
                          <div class="input-group-append">
                            <span class="input-group-text"><small class="font-weight-bold">USD</small></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                          </div>
                          <input class="form-control" placeholder="Phone number" type="text">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Dropdowns -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Dropdowns</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form>
                  <select class="form-control" data-toggle="select">
                    <option>Alerts</option>
                    <option>Badges</option>
                    <option>Buttons</option>
                    <option>Cards</option>
                    <option>Forms</option>
                    <option>Modals</option>
                  </select>
                </form>
              </div>
            </div>
            <!-- Datepicker -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Datepicker</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Datepicker</label>
                        <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
                      </div>
                    </div>
                  </div>
                  <div class="row input-daterange datepicker align-items-center">
                    <div class="col">
                      <div class="form-group">
                        <label class="form-control-label">Start date</label>
                        <input class="form-control" placeholder="Start date" type="text" value="06/18/2018">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label class="form-control-label">End date</label>
                        <input class="form-control" placeholder="End date" type="text" value="06/22/2018">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Text editor -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Text editor</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form>
                  <div data-toggle="quill" data-quill-placeholder="Quill WYSIWYG"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layouts.footer')
