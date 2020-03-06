@include('employee.includes.header')
   <!-- Main content -->
   <div class="main-content" id="panel">
   <!-- Topnav -->
   @include('employee.includes.customtopmenu')
   <!-- Header -->
   <!-- Header -->

   @include('employee.includes.customtopBar')
     <!-- Page content -->
     <div class="container-fluid mt--6">
       <!-- Table -->
       <div class="row">
         <div class="col">
           <div class="card">
             <!-- Card header -->
             <div class="card-header">
               <h3 class="mb-0">Global Leads</h3>
               <p class="text-sm mb-0">
                All the Leads Recieved from different sources
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Category</th>
                    <th>Service</th>
                    <th>Status</th>
                    <th>Check Leads</th>
                </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Category</th>
                        <th>Service</th>
                        <th>Status</th>
                        <th>Check Lead</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($leads as $l)
                    <tr style="background-color:#15ca15; color:#000000;">
                            <td> {{ $l->id }} </td> 
                            <td>{{ $l->name }}</td>
                            <td>{{ $l->email }}</td>
                            <td>{{ $l->phone }}</td>
                            <td>{{ $l->state }}</td>
                            <td>{{ $l->city }}</td>
                            <td>{{ $l->category }}</td>
                            <td>{{ $l->service }}</td>
                            <td>Success</td>
                            <td>
                                <a href="/category-edit/{{ $l->id }}" type="button" class="btn btn-slack btn-icon-only rounded-circle">
                                        <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                                </a>
                            </td>
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('employee.includes.footer')