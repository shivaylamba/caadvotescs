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
               <h3 class="mb-0">Faq List</h3>
               <p class="text-sm mb-0">
                All the Feedbacks Recieved
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
                    <th>Feedback</th>
                    <th>By</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>ID</th>
                        <th>Feedback</th>
                        <th>By</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($faq as $faqData)
                    <tr>
                        <td> {{ $faqData->id }} </td> 
                        <td>{{ $faqData->servicename }}</td>
                        <td>{!! $faqData->question !!}</td>
                        <td>{!! $faqData->answer !!}</td>
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('admin.layouts.footer')