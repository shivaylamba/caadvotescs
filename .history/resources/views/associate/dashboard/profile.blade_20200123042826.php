
 @include('associate.dashboard.includes.header')
 <!-- Main content -->
 <div class="main-content" id="panel">
   <!-- Topnav -->
  @include('associate.dashboard.includes.topmenu')
     <!-- Header -->
     <!-- Header -->
     <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
       <!-- Mask -->
       <span class="mask bg-gradient-default opacity-8"></span>
       <!-- Header container -->
       <div class="container-fluid d-flex align-items-center">
         <div class="row">
           <div class="col-lg-7 col-md-10">
           <h1 class="display-2 text-white">Profile of {{ $associates[0]->name }}</h1>
             <p class="text-white mt-0 mb-5">This is user profile page for user {{ $associates[0]->name }}. You can see the progress made by the user. user work and manage user account</p>
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
             </div>
             <div class="card-body pt-0">
               <div class="row">
                 <div class="col">
                   <br><br>
                 </div>
               </div>
               <div class="text-center">
                 <h5 class="h3">
                    {{ $associates[0]->name }} <span class="font-weight-light">, 27</span>
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
             <form action="/user-profile-update/{{ $associates[0]->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('PUT') }}
                 <h6 class="heading-small text-muted mb-4">User information</h6>
                 <div class="pl-lg-4">
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-username">Full Name</label>
                         <input type="text" id="input-username" class="form-control" placeholder="Username" value="{{ $associates[0]->name }}" disabled>
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-email">Email address</label>
                         <input type="email" id="input-email" class="form-control" placeholder="{{ $associates[0]->email }}" disabled>
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-first-name">Phone No</label>
                         <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="{{ $associates[0]->phone }}">
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-last-name">User Role</label>
                         <input type="text" id="input-first-name" class="form-control" placeholder="Associate" disabled>
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
                         <input id="input-address" class="form-control" placeholder="Home Address"  name="associate_address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-lg-4">
                       <div class="form-group">
                         <label class="form-control-label" for="input-city">City</label>
                         <input type="text" id="input-city" class="form-control" name="associate_city" placeholder="{{ $associates[0]->associate_city }}" value="{{ $associates[0]->associate_city }}">
                       </div>
                     </div>
                     <div class="col-lg-4">
                       <div class="form-group">
                         <label class="form-control-label" for="input-country">State</label>
                         <input type="text" id="input-country" class="form-control" name="associate_state" placeholder="{{ $associates[0]->associate_state }}" value="{{ $associates[0]->associate_state }}">
                       </div>
                     </div>
                     <div class="col-lg-4">
                       <div class="form-group">
                         <label class="form-control-label" for="input-country">Postal code</label>
                         <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code" name="associate_postalcode">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Experience</label>
                        <select class="form-control" placeholder="Last name" name="associate_experience">
                            <option value="1">1 Year</option>
                            <option value="2">2 Year</option>
                            <option value="3">3 Year</option>
                            <option value="4">4 Year</option>
                            <option value="5">5 Year</option>
                            <option value="6">6 Year</option>
                            <option value="7">7 Year</option>
                            <option value="8">8 Year</option>
                            <option value="9">9 Year</option>
                            <option value="10">10 Year</option>
                        </select>
                     </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">State</label>
                        <input type="text" id="input-country" class="form-control" name="associate_state" placeholder="{{ $associates[0]->associate_state }}" value="{{ $associates[0]->associate_state }}">
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

       @include('associate.dashboard.includes.footer')