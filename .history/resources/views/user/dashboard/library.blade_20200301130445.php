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
               <h3 class="mb-0">Digital Library</h3>
               <p class="text-sm mb-0">
                All the Documents Uploded by Customer
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
                    <th>Document</th>
                    <th>Uploaded On</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Document</th>
                        <th>Uploaded On</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($library as $l)
                    <tr>
                        <td> {{ $l->id }} </td> 
                        <td><img src="../DigitalLibrary/{{ $l->images }}"  width="50%"/></td>
                        <td>{{ $l->created_at }}</td>
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('user.dashboard.includes.footer')