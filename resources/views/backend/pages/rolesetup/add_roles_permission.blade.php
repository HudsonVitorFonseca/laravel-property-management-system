@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

       
        <div class="row profile-body">
          <!-- left wrapper start -->
          
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
             <div class="card">
              <div class="card-body">

			<h6 class="card-title">Add Roles in Permission   </h6>

	 <form id="myForm" method="POST" action="{{ route('store.roles') }}" class="forms-sample">
				@csrf
 

				<div class="form-group mb-3">
 <label for="exampleInputEmail1" class="form-label">Roles Name   </label>
	 <select name="role_id" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Select Group</option>
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
           
				</div>


    <div class="form-check mb-2">
                  <input type="checkbox" class="form-check-input" id="checkDefault">
                  <label class="form-check-label" for="checkDefault">
                   Permission All 
                  </label>
                </div>
 
 <hr>

 @foreach($permission_groups as $group)
      <div class="row">
        <div class="col-3">


          <div class="form-check mb-2">
                  <input type="checkbox" class="form-check-input" id="checkDefault">
                  <label class="form-check-label" for="checkDefault">
                   {{ $group->group_name }}
                  </label>
                </div>

          
        </div>


         <div class="col-9">


          <div class="form-check mb-2">
                  <input type="checkbox" class="form-check-input" id="checkDefault">
                  <label class="form-check-label" for="checkDefault">
                   Permission All 
                  </label>
                </div>
          
        </div>
        
      </div> <!-- // End Row  -->
      @endforeach 




			 
				 
	 <button type="submit" class="btn btn-primary me-2">Save Changes </button>
			 
			</form>

              </div>
            </div>




            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
         
          <!-- right wrapper end -->
        </div>

			</div>
 
 

@endsection