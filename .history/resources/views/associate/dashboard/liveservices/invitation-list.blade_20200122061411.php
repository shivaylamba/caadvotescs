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
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($category as $categoryData)
                    <tr>
                        <td> {{ $categoryData->id }} </td> 
                        <td>{{ $categoryData->categoryname }}</td>
                        <td>{{ $categoryData->status }}</td>
                        <td>{{ $categoryData->created_at }}</td>
                        <td>
                        <a href="/category-edit/{{ $categoryData->id }}" type="button" class="btn btn-slack btn-icon-only rounded-circle">
                                <span class="btn-inner--icon"><i class="ni ni-settings-gear-65"></i></span>
                        </a>
                        </td>
                        <td>
                          <form action="/delete-category/{{ $categoryData->id }}" method="post">
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
       

       @include('associate.dashboard.includes.footer')