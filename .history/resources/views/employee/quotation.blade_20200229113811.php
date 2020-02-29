@include('employee.includes.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('employee.includes.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('employee.includes.customtopBar')
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
                <h3 class="mb-0">Send Quotations to Customers</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
              <form action="/employee/generatepayment" method="POST" enctype="multipart/form-data">
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
                          <option>
                              @foreach($ticket as $t)
                          <select>{{$t->cust_id}}</select>
                          @endforeach
                          </option>
                        </div>
                      </div>
                    </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Build the Quotation</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <textarea id="froala-editor" name="note">Remember This will be sent to Mail!</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Send Mail to Customer</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('employee.includes.footer')
