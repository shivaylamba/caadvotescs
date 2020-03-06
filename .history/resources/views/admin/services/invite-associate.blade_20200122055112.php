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
        <div class="col-lg-12">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Invite Associate for specific Services</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/send-invitation" method="POST">
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
                          <select class="form-control" placeholder="ParentCategory" name="associate_email">
                            <option>Select Associate to Invite</option>
                            @foreach ($associate as $row)
                            <option value="{{$row->email}}">Name: {{ucfirst($row->name)}} | Email: {{ucfirst($row->email)}}</option>
                            @endforeach
                        </select>
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
                          <select class="form-control" placeholder="Status" name="servicename">
                            <option>Select Service for the Associate</option>
                            @foreach ($service as $row)
                            <option value="{{$row->servicename}}">{{ucfirst($row->servicename)}}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Invite</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layouts.footer')
