@include('associate.dashboard.includes.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('associate.dashboard.includes.customtopmenu')
    <!-- Header -->
    <!-- Header -->
    @include('associate.dashboard.includes.customtopBar')
     <!-- Page content -->
     <div class="container-fluid mt--6">
       <!-- Table -->
       <div class="row">
         <div class="col">
           <div class="card">
             <!-- Card header -->
             <div class="card-header">
               <h3 class="mb-0">Invitation Sent by Admins</h3>
               <p class="text-sm mb-0">
                These are the Respective Invitations sent by the Admins to Work on the invited Services 
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
                    <th>Invited On</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Service Name</th>
                        <th>Invited On</th>
                    </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($invitation as $i)
                    <tr>
                        <td> {{ $i->id }} </td> 
                        <td>{{ $i->servicename }}</td>
                        <td>{{ $i->created_at }}</td>
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

       @include('associate.dashboard.includes.footer')