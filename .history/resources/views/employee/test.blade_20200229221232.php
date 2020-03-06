<form action="{{ route('notes.store') }}" method="POST" name="add_note">
    {{ csrf_field() }}
   
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Mobile Number</strong>
                <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile Number">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Email Id</strong>
                <input type="text" name="email" class="form-control" placeholder="Enter Email id">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Event Fees</strong>
                <input type="text" name="amount" class="form-control" placeholder="" value="100" readonly="">
            </div>
        </div>
        <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    
</form>