@include('.admin.layouts.header')
   <!-- Main content -->
   <div class="main-content" id="panel">
     <!-- Topnav -->
    @include('admin.layouts.topmenu')
    <!-- Header -->
    <!-- Header -->
    @include('admin.layouts.topBar')
     <!-- Page content -->
     <div class="container-fluid mt--6">
       <!-- Table -->
       <div class="row">
         <div class="col">
           <div class="card">
             <!-- Card header -->
             <div class="card-header">
               <h3 class="mb-0">Registered Users</h3>
               <p class="text-sm mb-0">
                 All the Registered Users to the website will be seen here!
               </p>
             </div>
             <div class="table-responsive py-4">
               <table class="table table-flush" id="datatable-basic">
                 <thead class="thead-light">
                   <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Phone No</th>
                     <th>Email</th>
                     <th>User Type</th>
                     <th>Registered On</th>
                     <th>Edit</th>
                     <th>Delete</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Registered On</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($users as $row)
                    <tr>
                        <td>{{ $row->id }}</td> 
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->usertype }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>
                            <button type="button" class="btn btn-slack btn-icon-only rounded-circle">
                                <span class="btn-inner--icon"><i class="ni ni-settings-gear-65"></i></span>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-youtube btn-icon-only rounded-circle">
                                <span class="btn-inner--icon"><i class="ni ni-fat-delete"></i></span>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('admin.layouts.footer')