@include('user.dashboard.layouts.header')
   <!-- Main content -->
   <div class="main-content" id="panel">
     <!-- Topnav -->
    @include('user.dashboard.layouts.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('user.dashboard.layouts.customtopBar')
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
                All the Services Created by Admin
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
                    <th>Services</th>
                    <th>Category Under</th>
                    <th>View</th>
                   </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                    <th>Services</th>
                    <th>Category Under</th>
                    <th>View</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($services as $row)
                    <tr>
                        <td> {{ $row->id }} </td> 
                        <td>{{ $row->servicename }}</td>
                        <td>{{ $row->subcategory }}</td>
                        <td>
                        <a href="/service-edit/{{ $row->id }}" type="button" class="btn btn-slack btn-icon-only rounded-circle">
                                <span class="btn-inner--icon"><i class="ni ni-settings-gear-65"></i></span>
                        </a>
                        </td>
                        <td>
                          <form action="/delete-service/{{ $row->id }}" method="post">
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
       

      @include('user.dashboard.layouts.footer')