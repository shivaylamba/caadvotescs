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
               <h3 class="mb-0">Pending Approvals of Services hosted by Associates</h3>
               <p class="text-sm mb-0">
                All the Approval Requests by Associates will be seen here
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
                    <th>Service Name</th>
                    <th>By Associate</th>
                    <th>Timeline</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Added On</th>
                    <th>Delete</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                    <th>Service Name</th>
                    <th>By Associate</th>
                    <th>Timeline</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Added On</th>
                    <th>Delete</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($associates as $associateData)
                    <tr>
                        <td> {{ $associateData->id }} </td> 
                        <td>{{ $associateData->name }}</td>
                        <td>{{ $associateData->phone }}</td>
                        <td>{{ $associateData->email }}</td>
                        <td>{{ $associateData->associate_category }}</td>
                        <td>{{ $associateData->associate_profession }}</td>
                        <td>{{ $associateData->associate_city }}</td>
                        <td><span style="color:green;">{{ ucfirst($associateData->accounttype) }}</span></td>
                        <td>{{ $associateData->created_at }}</td>
                        <td>
                          <form action="/admin/associates/delete/{{ $associateData->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                              <button  type="submit" class="btn btn-youtube btn-icon-only rounded-circle">
                              <span class="btn-inner--icon"><i class="ni ni-fat-delete"></i></span>
                              </button>
                          </a>
                          </form>
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