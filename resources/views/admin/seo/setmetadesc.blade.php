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
                <form action="/admin/save/metadesc" method="POST">
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
                  
                  <div class="card"><grammarly-extension class="_1KJtL" style="position: absolute; top: 0px; left: 0px; pointer-events: none;"><div data-grammarly-part="highlights" class="u_fNK" style="position: absolute; top: 0px; left: 0px;"><div style="box-sizing: content-box; top: 262px; left: 25px; width: 449.5px; height: 83px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;"><div style="position: absolute; top: 0px; left: 0px;"><div style="height: 983px; width: 1890px;"><div></div><div></div></div></div></div></div><div data-grammarly-part="button" class="u_fNK" style="position: absolute; top: 0px; left: 0px;"><div style="box-sizing: content-box; top: 262px; left: 25px; width: 449.5px; height: 83px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;"><div style="position: absolute; transform: translate(-100%, -100%); top: 73px; left: 437.5px; width: auto; height: auto; pointer-events: all;"><div style="flex-direction: row; display: flex; pointer-events: auto;"><div style="position: relative;"></div><div><div class="_5WizN _1QzSN"><div class="_3YmQx"><div title="Protected by Grammarly" class="_3QdKe">&nbsp;</div></div></div></div></div></div></div></div></grammarly-extension>
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Set Meta Description</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea2">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" resize="none" spellcheck="false" name="metadesc"></textarea>
                        </div>
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
