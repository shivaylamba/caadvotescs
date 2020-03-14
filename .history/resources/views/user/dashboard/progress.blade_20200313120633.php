@include('user.dashboard.includes.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('user.dashboard.includes.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('user.dashboard.includes.customtopBar')
    <!-- Page content -->
    <style>
      
.casing{
    border: 1px;
    width: 300px;
    height: 550px;
    margin: auto;
    padding: 20px;
    border-radius: 20px;
}
.window {
    border: 1px solid #000;
    border-radius: 10px;
    background: #fff;
    width: 100%;
    height: calc(100% - 50px);
    margin: auto;
    padding: 10px;
    box-sizing: border-box;
    position: relative;
    overflow: hidden;
}

.header{
    background: #ededed;
    padding: 10px;
    margin: -10px -10px 8px -10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}



.chat{
    background: #72b8ff;
    border-radius: 20px;
    display: inline-block;
    padding: 10px;
    color: #fff;
    font-weight: lighter;
    font-size: small;
    box-shadow: 1px 1px 2px rgba(0,0,0,.3);
    margin: 5px;
    position: relative;
}
.chat.u1{
    float: left;
    clear: both;
    border-top-left-radius: 0px;
}
.chat.u1:before{
    content: "";
    width: 0px;
    height: 0px;
    display: block;
    border-left: 5px solid transparent;
    border-right: 5px solid #72b8ff;
    border-top: 5px solid #72b8ff;
    border-bottom: 5px solid transparent;
    position: absolute;
    top: 0px;
    left: -10px;
}
.chat.u2{
    float: right;
    clear: both;
    border-top-right-radius: 0px;
    background: #00D025;
}
.chat.u2:before{
    content: "";
    width: 0px;
    height: 0px;
    display: block;
    border-left: 5px solid #00D025;
    border-right: 5px solid transparent;
    border-top: 5px solid #00D025;
    border-bottom: 5px solid transparent;
    position: absolute;
    top: 0px;
    right: -10px;
}

.new-chat{
    position: absolute;
    bottom: 0px;
    width: 100%;
    background: #ededed;
    height: 40px;
    left: 0px;
    border-top: 1px solid #ddd;
}
.new-chat input{
    outline: none;
    padding: 10px;
    box-sizing: border-box;
    font-size: 18px;
    width: 250px;
    height: 40px;
    border: none;
    display: inline-block;
    color: #999;
    font-weight: 100;
    background: #ddd;
}
.new-chat button{
    width: 40px;
    height: 30px;
    padding: 0;
    display: inline-block;
    border: none;
    color: #00D025;
    background: none;
    position: relative;
    top: -3px;
    outline: none;
    cursor: pointer;
}
.new-chat button:active{
    color: #555;
}
    </style>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
              <h3 class="mb-0">Lead Progress Details for <br/>Service: <a style="color:green;">{{$leads[0]->service}}</a> <br/>Ticket No: {{$leads[0]->cust_id}}</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
              <form action="/employee/lead/update/{{$leads[0]->id}}" method="POST" enctype="multipart/form-data">
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
                    <div class="col-md-12">
                      <li>CUST ID: <span style="color:blue;">{{$leads[0]->cust_id}}</span></li>
                     <li>SERVICE CATEGORY: <span style="color:blue;">{{$leads[0]->category}}</span></li>
                     <li>SERVICE NAME: <span style="color:blue;">{{$leads[0]->service}}</span></li>
                     <li>SERVICE STATUS: <span style="color:blue;">{{$leads[0]->status}}</span></li>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <!-- Members list group card -->
            <div class="card">
                <form action="/user/save-upload" method="POST" enctype="multipart/form-data">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                    {{ csrf_field() }}
              <!-- Card header -->
              <div class="card-header">
                <!-- Title -->
                <h5 class="h3 mb-0">Please upload the Required Documents <input type="hidden" name="service_name" class="form-control" value="{{$leads[0]->service}}"></h5>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <!-- List group -->
                <ul class="list-group list-group-flush list my--3">
                  @if (count($library) > 0)
                  @if($library[0]->document_name == 'Adhar Card')
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <a href="dashboard.html#" class="avatar rounded-circle">
                          <img alt="Image placeholder" src="https://www.jagranimages.com/images/newimg/29112019/29_11_2019-aadhar_19800047.jpg">
                        </a>
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          <a href="dashboard.html#!">Adhar Card Uploaded</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>gov doc</small>
                      </div>
                    </li>
                  @else
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <a href="dashboard.html#" class="avatar rounded-circle">
                          <img alt="Image placeholder" src="https://www.jagranimages.com/images/newimg/29112019/29_11_2019-aadhar_19800047.jpg">
                        </a>
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          <a href="dashboard.html#!">Adhar Card</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>gov doc</small>
                      </div>
                      <div class="col-auto">
                        <input  class="btn btn-sm btn-primary" type="hidden" name="CUST_ID" class="form-control" value="{{$leads[0]->cust_id}}">
                        <input  class="btn btn-sm btn-primary" type="hidden" name="id" class="form-control" value="{{$leads[0]->id}}">
                        <input  class="btn btn-sm btn-primary" type="text" name="document_name" class="form-control" value="Adhar Card" style="display:none;">
                        <input  class="btn btn-sm btn-primary" type="file" name="input_img" class="form-control">
                        <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </li>
                  @endif
                  @endif
                  
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <a href="dashboard.html#" class="avatar rounded-circle">
                          <img alt="Image placeholder" src="https://www.jagranimages.com/images/newimg/29112019/29_11_2019-aadhar_19800047.jpg">
                        </a>
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          <a href="dashboard.html#!">Adhar Card</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>gov doc</small>
                      </div>
                      <div class="col-auto">
                        <input  class="btn btn-sm btn-primary" type="hidden" name="CUST_ID" class="form-control" value="{{$leads[0]->cust_id}}">
                        <input  class="btn btn-sm btn-primary" type="hidden" name="id" class="form-control" value="{{$leads[0]->id}}">
                        <input  class="btn btn-sm btn-primary" type="text" name="document_name" class="form-control" value="Adhar Card" style="display:none;">
                        <input  class="btn btn-sm btn-primary" type="file" name="input_img" class="form-control">
                        <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </li>
                  <hr>
                </ul>
              </div>
            </form>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="casing">
            <div class="window">
                <div class="header">Jerry</div>
                <div class="chats">
        
                    <span class="u1 chat">Hey sam, whats up?</span>
                    <span class="u2 chat">nothing here how 'bout u?</span>
                    <span class="u1 chat">I'm just heading up to your neck of the woods for some work related stuff.</span>
                    <span class="u1 chat">driveing through mcdonalds right now</span>
                    <span class="u2 chat">cool! where exactly will you be?</span>
                    <span class="u1 chat">up in the ridgway, mt. horab area</span>
                </div>
        
                <div class="new-chat">
                    <input type="text" id="message" />
                    <button id="send">Send</button>
                </div>
            </div>
            <div class="home-btn">
                <div class="hb-square"></div>
            </div>
        </div>
        </div>
      </div>
      @include('user.dashboard.includes.footer')
