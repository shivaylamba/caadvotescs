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
               <h3 class="mb-0">Give Rating</h3>
               <p class="text-sm mb-0">
                See all the Associate Rating
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
                    <th>Associate</th>
                    <th>Rating</th>
                    <th>Give Rating</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Associate</th>
                        <th>Rating</th>
                        <th>Give Rating</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($associate as $a)
                    <tr>
                        <td> {{ $a->id }} </td> 
                        <td>{{ $a->name }}</td>
                        @for(i=0;i<=4;i++)
                        <td>lol{{ $a->associate_rating }}</td>
                        @endfor
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('admin.layouts.footer')