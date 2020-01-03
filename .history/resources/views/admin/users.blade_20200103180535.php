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
               <h3 class="mb-0">Datatable</h3>
               <p class="text-sm mb-0">
                 This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
               </p>
             </div>
             <div class="table-responsive py-4">
               <table class="table table-flush" id="datatable-basic">
                 <thead class="thead-light">
                   <tr>
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
                   <tr>
                     <td>Tiger Nixon</td>
                     <td>System Architect</td>
                     <td>Edinburgh</td>
                     <td>61</td>
                     <td>2011/04/25</td>
                     <td>
                         <a href="#" class="btn btn-success">Edit</a>
                     </td>
                     <td>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('admin.layouts.footer')