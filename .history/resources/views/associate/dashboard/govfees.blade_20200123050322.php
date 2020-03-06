@include('associate.dashboard.includes.header')
   <!-- Main content -->
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
               <h3 class="mb-0">Faq List</h3>
               <p class="text-sm mb-0">
                All the Faq's Created by Admin
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
                        <th>Gov Fees</th>
                        <th>Service</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Gov Fees</th>
                        <th>Service</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($govfees as $gov)
                    <tr>
                        <td> {{ $gov->id }} </td> 
                        <td>{{ $gov->govfees }} INR</td>
                        <td>{!! $gov->serviceslug !!}</td>
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('associate.dashboard.includes.footer')