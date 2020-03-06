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
                <h3 class="mb-0">Enter the Meta Descripton for Caadvocatescs</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/admin/save/metadescription" method="POST">
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
                  <div class="card">
                    <!-- Card header -->
                    <!-- Card body -->
                    <div class="card-body">
                      <textarea id="froala-editor" name="metadesc">Add your Website Meta description</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Submit Meta Desc</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layouts.footer')
