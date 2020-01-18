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
               <h3 class="mb-0">Category List</h3>
               <p class="text-sm mb-0">
                All the Categories Created by Admin
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
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Profession</th>
                    <th>City</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Category</th>
                        <th>Profession</th>
                        <th>City</th>
                        <th>Account Type</th>
                        <th>Created At</th>
                        <th>Edit</th>
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
                        <td>{{ $associateData->category }}</td>
                        <td>{{ $associateData->profession }}</td>
                        <td>{{ $associateData->city }}</td>
                        <td>{{ $associateData->status }}</td>
                        <td>{{ $associateData->created_at }}</td>
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
       

      @include('admin.layouts.footer')