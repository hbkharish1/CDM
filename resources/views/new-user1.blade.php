@extends('layouts.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
  </li>
</ul>


          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
              <li class="breadcrumb-item active">New User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      @if(session()->has('success'))
                   <div class="alert alert-info">
                        {{ session()->get('success') }}
                    </div>
                @endif
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             

              <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
       
  <form method="post" action="{{ route('create') }}">
                @csrf

          <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name"  class="form-control" id="name" placeholder="Enter Name">
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                  </div>
            <div class="form-group">
                  <label for="gender">Gender</label><br/>
                  <div class="form-check">
                  <input type="radio" class="form-check-input" value="Male"  id="male" name="gender">
                  <label for="male">Male</label>
                </div>
                  <div class="form-check">
                  <input type="radio" class="form-check-input" value="Female"  id="female" name="gender">
                  <label for="female">Female</label>
                </div>
                  @if ($errors->has('gender'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('gender') }}</strong>
                    </span>
                    @endif
            </div>

                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob"  class="form-control" id="dob" placeholder="Date of Birth">
                    @if ($errors->has('dob'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('dob') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age"  class="form-control" id="age" placeholder="Enter Age">
                    @if ($errors->has('age'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('age') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="mobile1">Mobile_1</label>
                    <input type="text" name="mobile1"  class="form-control" id="mobile1" placeholder="Enter Mobile">
                    @if ($errors->has('mobile1'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('mobile1') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="mobile2">Mobile_2</label>
                    <input type="text" name="mobile2"  class="form-control" id="mobile2" placeholder="Enter Mobile">
                    @if ($errors->has('mobile2'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('mobile2') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" name="whatsapp"  class="form-control" id="whatsapp" placeholder="Enter Whatsapp No">
                    @if ($errors->has('whatsapp'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('whatsapp') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email"  class="form-control" id="email" placeholder="Enter email">
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea  name="address"  class="form-control" id="address" placeholder="Enter Address" rows="4"></textarea>
                    <!-- <textarea name="address" id="address" rows="4"></textarea> -->
                    @if ($errors->has('address'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('address') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city"  class="form-control" id="city" placeholder="Enter City">
                    @if ($errors->has('city'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('city') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="pincode">Pincode</label>
                    <input type="text" name="pincode"  class="form-control" id="pincode" placeholder="Enter Pincode">
                    @if ($errors->has('pincode'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('pincode') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="state">State</label>
                    <select class="selectpicker form-control" id="state"   name="state" required>
                      <option value="Berlin">Berlin</option>
                      <option value="andhrapradesh">Andhra Pradesh</option>
                      <option value="andaman">Andaman Nicobar Islands</option>
                      <option value="arunachal">Arunachal Pradesh</option>
                      <option value="assam">Assam</option>
                      <option value="bihar">Bihar</option>
                      <option value="chandigarh">Chandigarh</option>
                      <option value="chhattisgarh">Chhattisgarh</option>
                      <option value="dadar&nagar">Dadar & Nagar Haveli</option>
                      <option value="daman&diu">Daman & Diu</option>
                      <option value="delhi">Delhi</option>
                      <option value="lakshadeep">Lakshadweep</option>
                      <option value="puducherry">Puducherry</option>
                      <option value="goa">Goa</option>
                      <option value="gujarat">Gujarat</option>
                      <option value="haryana">Haryana</option>
                      <option value="himachal">Himachal Pradesh</option>
                      <option value="jammu">Jammu Kashmir</option>
                      <option value="jharkhand">Jharkhand</option>
                      <option value="karnataka">Karnataka</option>
                      <option value="kerala">Kerala</option>
                      <option value="madhya">Madhya Pradesh</option>
                      <option value="maharashtra">Maharashtra</option>
                      <option value="manipur">Manipur</option>
                      <option value="megahalaya">Meghalaya</option>
                      <option value="mizoram">Mizoram</option>
                      <option value="nagaland">Nagaland</option>
                      <option value="odisha">Odisha</option>
                      <option value="punjab">Punjab</option>
                      <option value="rajasthan">Rajasthan</option>
                      <option value="sikkim">Sikkim</option>
                      <option value="tamilnadu">Tamil Nadu</option>
                      <option value="telangana">Telangana</option>
                      <option value="tripura">Tripura</option>
                      <option value="uttarpradesh">Uttar Pradesh</option>
                      <option value="uttarakhand">Uttarakhand</option>
                      <option value="westbengal">West Bengal</option>
                    </select>
                    @if ($errors->has('state'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('state') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="country">Country</label>
                    <select class="selectpicker form-control" id="country"   name="country" required>
                      <option value="india">India</option>
                      <option value="srilanka">Srilanka</option>
                      <option value="malaysia">Malaysia</option>
                      <option value="singapore">Singapore</option>
                      <option value="dubai">Dubai</option>
                      <option value="others">Others</option>
                    </select>
                    @if ($errors->has('country'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('country') }}</strong>
                    </span>
                    @endif
                  </div>

  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

  <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" name="company"  class="form-control" id="company" placeholder="Enter Company">
                    @if ($errors->has('company'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('company') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" name="designation"  class="form-control" id="designation" placeholder="Enter Designation">
                    @if ($errors->has('designation'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('designation') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="company_location">Company_Location</label>
                    <input type="text" name="company_location"  class="form-control" id="company_location" placeholder="Enter Company_Location">
                    @if ($errors->has('company_location'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('company_location') }}</strong>
                    </span>
                    @endif
                  </div>

  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

  <div class="form-group">
                    <label for="sessions_attended">Sessions_Attended</label>
                    <select class="selectpicker form-control" id="sessions_attended"   name="sessions_attended" required>
                      <option value="india">Wondland of Insurance</option>
                      <option value="others">Arjun Sonagara CLIA Leading Lights Mumbai</option>
                      <option value="others">CLIA Super Sixer</option>
                      <option value="others">Alica Responsible</option>
                      <option value="others">Building a Business Enterprise</option>
                      <option value="others">CLIA Mumbai Arjun Sonagara Crown Yourself</option>
                      <option value="others">A Banyan Tree TOT CLub Mumbai</option>
                      <option value="others">Alica Transformer</option>
                      <option value="others">Advance Roots for Greatness 2018</option>
                      <option value="others">Leading Lights for Agents Kolkata 2018</option>
                      <option value="others">Mission MDRT</option>
                      <option value="others">LISC 2012</option>
                      <option value="others">Genius 2017</option>
                      <option value="others">Kolkata LISC Genius 2017</option>
                      <option value="others">Kolkata Mission COT</option>
                      <option value="others">Roots for Greatness 20052017</option>
                      <option value="others">Kolkata Mission Cot Tot</option>
                      <option value="others">Kolkata LISC Genius 2017</option>
                      <option value="others">Leading Lights for Agents Kolkata 2018</option>
                      <option value="others">Advance Roots for Greatness 2018</option>
                      <option value="others">Sixer</option>
                      <option value="others">Super Sixer</option>
                      <option value="others">LISC Kolkata Master Mentor for Dos on 07022020</option>
                      <option value="others">Leading from the frond 2nd Batch</option>
                    </select>
                    @if ($errors->has('sessions_attended'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('sessions_attended') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="languages">Languages</label>
                    <select class="selectpicker form-control" id="languages"   name="languages" required>
                      <option value="india">English</option>
                      <option value="tamil">Tamil</option>
                      <option value="hindi">Hindi</option>
                      <option value="telugu">Telugu</option>
                      <option value="kannada">Kannada</option>
                      <option value="malayalam">Malayalam</option>
                      <option value="marathi">Marathi</option>
                      <option value="bengali">Bengali</option>
                      <option value="others">Others</option>
                    </select>
                    @if ($errors->has('languages'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('languages') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="palmleaf_sub">Palmleaf_Sub</label>
                    <input type="text" name="palmleaf_sub"  class="form-control" id="palmleaf_sub" placeholder="Enter Palmleaf_Sub">
                    @if ($errors->has('palmleaf_sub'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('palmleaf_sub') }}</strong>
                    </span>
                    @endif
                  </div>

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

  <div class="form-group">
                    <label for="facebook">Facebook ID</label>
                    <input type="text" name="facebook"  class="form-control" id="facebook" placeholder="Enter Facebook">
                    @if ($errors->has('facebook'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('facebook') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="instagram">Instagram ID</label>
                    <input type="text" name="instagram"  class="form-control" id="instagram" placeholder="Enter Instagram">
                    @if ($errors->has('instagram'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('instagram') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="linkedin">LinkedIn ID</label>
                    <input type="text" name="linkedin"  class="form-control" id="linkedin" placeholder="Enter LinkedIn">
                    @if ($errors->has('linkedin'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('linkedin') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="comments">Comments</label>
                    <textarea  name="comments"  class="form-control" id="comments" placeholder="Comments" rows="4"></textarea>
                    @if ($errors->has('comments'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('comments') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group">
                  <label for="Status">Status</label><br/>
                  <div class="form-check">
                  <input type="radio" class="form-check-input" value="Active"  id="active" name="status">
                  <label for="active">Active</label>
                  </div>
                  <div class="form-check">
                  <input type="radio" class="form-check-input" value="InActive"  id="inactive" name="status">
                  <label for="inactive">InActive</label>
                  </div>
                  @if ($errors->has('Status'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('Status') }}</strong>
                    </span>
                    @endif
            </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

  </div>
</div>



                  
                 
                  
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection