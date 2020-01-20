@include('associate.dashboard.includes.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('associate.dashboard.includes.topmenu')
    <!-- Header -->
    <!-- Header -->
    @include('associate.dashboard.includes.topBar')
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
                <h3 class="mb-0">Create Service to Host</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/associat/host/service" method="POST">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ csrf_field() }}
                  <!-- Input groups with icon -->
                <input name="byAssociate" class="form-control" placeholder="{{ Auth::user()->email }}" value="{{ Auth::user()->email }}" type="text" hidden>
                  <div class="row">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                          <h3 class="mb-0">Requirement</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                          <textarea id="froala-editor" name="requirements">Requirements</textarea>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Deliverables</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <textarea id="froala-editor" name="deliverables">Deliverables</textarea>
                    </div>
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Select Service</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <select class="form-control" name="servicename" data-toggle="select">
                          @foreach ($services as $servicesData)
                          <option value="{{$servicesData->servicename}}">{{ucfirst($servicesData->servicename)}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="timeline" class="form-control" placeholder="Time Line to Complete Work" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="price" class="form-control" placeholder="Price" type="text">
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
      @include('associate.dashboard.includes.footer')
