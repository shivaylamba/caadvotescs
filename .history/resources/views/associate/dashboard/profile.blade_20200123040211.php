
 @include('.admin.layouts.header')
 <!-- Main content -->
 <div class="main-content" id="panel">
   <!-- Topnav -->
  @include('admin.layouts.topmenu')
     <!-- Header -->
     <!-- Header -->
     <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
       <!-- Mask -->
       <span class="mask bg-gradient-default opacity-8"></span>
       <!-- Header container -->
       <div class="container-fluid d-flex align-items-center">
         <div class="row">
           <div class="col-lg-7 col-md-10">
           <h1 class="display-2 text-white">Profile of {{ $associates->name }}</h1>
             <p class="text-white mt-0 mb-5">This is user profile page for user {{ $associates->name }}. You can see the progress made by the user. user work and manage user account</p>
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
                     <img src="../../assets/img/theme/team-4.jpg" class="rounded-circle">
                   </a>
                 </div>
               </div>
             </div>
             <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
               <div class="d-flex justify-content-between">
                 <a href="profile.html#" class="btn btn-sm btn-info mr-4">Connect</a>
                 <a href="profile.html#" class="btn btn-sm btn-default float-right">Message</a>
               </div>
             </div>
             <div class="card-body pt-0">
               <div class="row">
                 <div class="col">
                   <div class="card-profile-stats d-flex justify-content-center">
                     <div>
                       <span class="heading">22</span>
                       <span class="description">Friends</span>
                     </div>
                     <div>
                       <span class="heading">10</span>
                       <span class="description">Photos</span>
                     </div>
                     <div>
                       <span class="heading">89</span>
                       <span class="description">Comments</span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="text-center">
                 <h5 class="h3">
                    {{ $users->name }} <span class="font-weight-light">, 27</span>
                 </h5>
                 <div class="h5 font-weight-300">
                   <i class="ni location_pin mr-2"></i>Bucharest, Romania
                 </div>
                 <div class="h5 mt-4">
                   <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                 </div>
                 <div>
                   <i class="ni education_hat mr-2"></i>University of Computer Science
                 </div>
               </div>
             </div>
           </div>
           <!-- Progress track -->
           
         </div>
         <div class="col-xl-8 order-xl-1">
           <div class="row">
             <div class="col-lg-6">
               <div class="card bg-gradient-info border-0">
                 <!-- Card body -->
                 <div class="card-body">
                   <div class="row">
                     <div class="col">
                       <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total traffic</h5>
                       <span class="h2 font-weight-bold mb-0 text-white">350,897</span>
                     </div>
                     <div class="col-auto">
                       <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                         <i class="ni ni-active-40"></i>
                       </div>
                     </div>
                   </div>
                   <p class="mt-3 mb-0 text-sm">
                     <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                     <span class="text-nowrap text-light">Since last month</span>
                   </p>
                 </div>
               </div>
             </div>
             <div class="col-lg-6">
               <div class="card bg-gradient-danger border-0">
                 <!-- Card body -->
                 <div class="card-body">
                   <div class="row">
                     <div class="col">
                       <h5 class="card-title text-uppercase text-muted mb-0 text-white">Performance</h5>
                       <span class="h2 font-weight-bold mb-0 text-white">49,65%</span>
                     </div>
                     <div class="col-auto">
                       <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                         <i class="ni ni-spaceship"></i>
                       </div>
                     </div>
                   </div>
                   <p class="mt-3 mb-0 text-sm">
                     <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                     <span class="text-nowrap text-light">Since last month</span>
                   </p>
                 </div>
               </div>
             </div>
           </div>
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
             <form action="/user-profile-update/{{ $users->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('PUT') }}
                 <h6 class="heading-small text-muted mb-4">User information</h6>
                 <div class="pl-lg-4">
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-username">Full Name</label>
                         <input type="text" id="input-username" class="form-control" placeholder="Username" value="{{ $users->name }}" disabled>
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-email">Email address</label>
                         <input type="email" id="input-email" class="form-control" placeholder="{{ $users->email }}" disabled>
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-first-name">Phone No</label>
                         <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="{{ $users->phone }}" disabled>
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-last-name">User Role</label>
                         <select class="form-control" placeholder="Last name" name="usertype">
                             <option value="{{ $users->usertype }}">{{ ucfirst($users->usertype) }} (Current Role)</option>
                             <option value="admin">Admin</option>
                             <option value="associate">Associate</option>
                             <option value="regular user">Regular User</option>
                         </select>
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
                         <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-lg-4">
                       <div class="form-group">
                         <label class="form-control-label" for="input-city">City</label>
                         <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                       </div>
                     </div>
                     <div class="col-lg-4">
                       <div class="form-group">
                         <label class="form-control-label" for="input-country">Country</label>
                         <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                       </div>
                     </div>
                     <div class="col-lg-4">
                       <div class="form-group">
                         <label class="form-control-label" for="input-country">Postal code</label>
                         <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
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
                     <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful premium dashboard for Bootstrap 4.</textarea>
                   </div>
                 </div>
                 <button type="submit" class="btn btn-success">Edit profile</button>
               </form>
             </div>
           </div>
         </div>
       </div>

       @include('admin.layouts.footer')