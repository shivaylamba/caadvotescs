@include('user.dashboard.includes.header')
   <!-- Main content -->
   <div class="main-content" id="panel">
     <!-- Topnav -->
    @include('user.dashboard.includes.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('user.dashboard.includes.customtopBar')
     <!-- Page content -->
     <div class="container-fluid mt--6">
       <!-- Table -->
       <div class="row">
         <div class="col">
           <div class="card">
             <!-- Card header -->
             <div class="card-header">
               <h3 class="mb-0">Work Enquiry List</h3>
               <p class="text-sm mb-0">
                All the Enquired by Customer
               </p>
               <br>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
             </div>
             <div class="table-responsive py-4">
               <table class="table table-flush" id="datatable-basic">
                 <thead class="thead-light">
                   <tr>
                    <th>ID</th>
                    <th>Ticket No</th>
                    <th>Service Name</th>
                    <th>check Work Progress</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Ticket No</th>
                        <th>Service Name</th>
                        <th>Check Work Progress</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($leads as $l)
                    <tr>
                        <td> {{ $l->id }} </td> 
                        <td>{{ $l->cust_id }}</td>
                        <td>{{ $l->service }}</td>
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('user.dashboard.includes.footer')