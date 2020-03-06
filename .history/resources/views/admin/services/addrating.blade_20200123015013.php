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
                <h3 class="mb-0">Give Rating to Associate</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
              <form action="/update-category/{{$category[0]->id}}" method="POST">
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
                        <input name="name" class="form-control" placeholder="Category Name" value="{{$associate[0]->name}}" type="text">
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
                          <select class="form-control" placeholder="Select Associate" name="name">
                              @foreach($associate as $a)
                            <option value="{{$a->name}}">{{ucfirst($a->name)}}(Current Status)</option>
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Update Category</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layouts.footer')
