@include('associate.dashboard.includes.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('associate.dashboard.includes.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('associate.dashboard.includes.customtopBar')
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
                <h3 class="mb-0">Add Skills</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/associate/save-skills" method="POST" enctype="multipart/form-data">
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
                          <input name="skills" class="form-control" placeholder="Enter Your Skills" type="text">
                          <input type="hidden" name="email" class="form-control" value="{{ Auth::user()->email }}">
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
