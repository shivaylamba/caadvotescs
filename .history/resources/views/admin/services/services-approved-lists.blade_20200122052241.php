@include('.admin.layouts.header')
   <!-- Main content -->
   <div class="main-content" id="panel">
     <!-- Topnav -->
     @include('admin.layouts.customtopmenu')
     <!-- Header -->
     <!-- Header -->
  
     @include('admin.layouts.customtopBar')
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
                    <th>Associate Email</th>
                    <th>Timeline</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Approved On</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Service Name</th>
                        <th>By Associate</th>
                        <th>Associate Email</th>
                        <th>Timeline</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Approved On</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($approvals as $list)
                    <tr>
                        <td> {{ $list->id }} </td> 
                        <td>{{ $list->servicename }}</td>
                        @foreach ($associate as $associates)
                        @if ($associates->email == $list->byAssociate)
                        <td>{{ $associates->name }}</td>
                        @endif
                        @endforeach
                        <td>{{$list->byAssociate}}</td>
                        <td>{{ $list->timeline }}</td>
                        <td>{{ $list->price }}</td>
                        <td><span style="color:red;">{{ ucfirst($list->status) }}</span></td>
                        <td>{{ $list->updated_at }}</td>
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('admin.layouts.footer')