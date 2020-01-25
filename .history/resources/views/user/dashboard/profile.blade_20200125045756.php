
 @include('user.dashboard.includes.header')
 <!-- Main content -->
 <div class="main-content" id="panel">
   <!-- Topnav -->
  @include('user.dashboard.includes.topmenu')
     <!-- Header -->
     <!-- Header -->
     <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(https://www.timsonlaw.com/wp-content/uploads/sites/7004/2018/03/banner-min.jpg); background-size: cover; background-position: center top;">
       <!-- Mask -->
       <span class="mask bg-gradient-default opacity-8"></span>
       <!-- Header container -->
       <div class="container-fluid d-flex align-items-center">
         <div class="row">
           <div class="col-lg-7 col-md-10">
           <h1 class="display-2 text-white">Profile of {{ $user[0]->name }}</h1>
             <p class="text-white mt-0 mb-5">This is user profile page for user {{ $user[0]->name }}. You can see the progress made by the user. user work and manage user account</p>
           </div>
         </div>
       </div>
     </div>
     <!-- Page content -->
     <div class="container-fluid mt--6">
       <div class="row">
         <div class="col-xl-4 order-xl-2">
           <div class="card card-profile">
             <img src="../../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
             <div class="row justify-content-center">
               <div class="col-lg-3 order-lg-2">
                 <div class="card-profile-image">
                   <a href="profile.html#">
                     <img src="https://cdn4.iconfinder.com/data/icons/avatars-21/512/avatar-circle-human-male-3-512.png" class="rounded-circle">
                   </a>
                 </div>
               </div>
             </div>
             <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
             </div>
             <div class="card-body pt-0">
               <div class="row">
                 <div class="col">
                   <br><br>
                 </div>
               </div>
               <div class="text-center">
                 <h5 class="h3">
                    {{ $user[0]->name }} <span class="font-weight-light"></span>
                 </h5>
                 <div class="h5 font-weight-300">
                   <i class="ni location_pin mr-2"></i>{{$user[0]->user_city}},{{$user[0]->user_state}}
                 </div>
               </div>
             </div>
           </div>
           <!-- Progress track -->
           
         </div>
         <div class="col-xl-8 order-xl-1">
           
           <div class="card">
             <div class="card-header">
               <div class="row align-items-center">
                 <div class="col-8">
                   <h3 class="mb-0">Edit profile </h3>
                 </div>
                 <div class="col-4 text-right">
                   <a href="profile.html#!" class="btn btn-sm btn-primary">Settings</a>
                 </div>
               </div>
             </div>
             <div class="card-body">
             <form action="/associate/update-profile/{{ $user[0]->id }}" method="POST">
                   {{ csrf_field() }}
                   @if (session('status'))
                   <div class="alert alert-success" role="alert">
                       {{ session('status') }}
                   </div>
                   @endif
                 <h6 class="heading-small text-muted mb-4">User information</h6>
                 <div class="pl-lg-4">
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-username">Full Name</label>
                         <input type="text" id="input-username" class="form-control" placeholder="Username" value="{{ $user[0]->name }}" disabled>
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-email">Email address</label>
                         <input type="email" id="input-email" class="form-control" placeholder="{{ $user[0]->email }}" disabled>
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-first-name">Phone No</label>
                         <input type="text" id="input-first-name" class="form-control" placeholder="First name" name="phone" value="{{ $user[0]->phone }}">
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-last-name">User Role</label>
                         <input type="text" id="input-first-name" class="form-control" placeholder="Regular User" disabled>
                       </div>
                     </div>
                   </div>
                 </div>
                 <hr class="my-4" />
                 <!-- Address -->
                 <h6 class="heading-small text-muted mb-4">Contact information</h6>
                 <div class="pl-lg-4">
                   <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                         <label class="form-control-label" for="input-address">Address</label>
                         <input id="input-address" class="form-control" placeholder="{{ $user[0]->user_address }}"  name="user_address" value="{{ $user[0]->user_address }}" type="text">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-lg-4">
                       <div class="form-group">
                         <label class="form-control-label" for="input-city">City</label>
                         <input type="text" id="input-city" class="form-control" name="user_city" placeholder="{{ $user[0]->user_city }}" value="{{ $user[0]->user_city }}">
                       </div>
                     </div>
                     <div class="col-lg-4">
                       <div class="form-group">
                         <label class="form-control-label" for="input-country">State</label>
                         <input type="text" id="input-country" class="form-control" name="user_state" placeholder="{{ $user[0]->user_state }}" value="{{ $user[0]->user_state }}">
                       </div>
                     </div>
                     <div class="col-lg-4">
                       <div class="form-group">
                         <label class="form-control-label" for="input-country">Postal code</label>
                         <input type="number" id="input-postal-code" class="form-control" placeholder="{{$user[0]->user_postalcode}}" value="{{$user[0]->user_postalcode}}" name="user_postalcode">
                       </div>
                     </div>
                   </div>
                 </div>
                 <hr class="my-4" />
                 <!-- Description -->
                 <h6 class="heading-small text-muted mb-4">About me</h6>
                 <div class="pl-lg-4">
                   <div class="form-group">
                     <label class="form-control-label">About Me</label>
                     <textarea rows="4" class="form-control" name="user_about" placeholder="A few words about you ...">{{$user[0]->user_about}}</textarea>
                   </div>
                 </div>
                 <button type="submit" class="btn btn-success">Edit profile</button>
               </form>
             </div>
           </div>
         </div>
       </div>

       @include('user.dashboard.includes.footer')