{{-- \resources\views\users\create.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Add User')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1><i class='fa fa-user-plus'></i> Add Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pages">Employees</a></li>
              <li class="breadcrumb-item active">create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class='col-lg-12 col-lg-offset-1'>

<div class="content">
  <!--content inner-->
  <div class="content__inner">
      <div class="container overflow-hidden">
      <!--multisteps-form-->
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-12 ml-auto mr-auto mb-12">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Personal</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Education</button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info">Family</button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Contacts     </button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Address      </button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Experience      </button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Unit/Dept      </button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Post      </button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Banks      </button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">E&D Cases      </button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Branches      </button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-12 m-auto">
            <form class="multisteps-form__form" id="user-data" action="{{ URL::to('admin/employees/store') }}" method="post">
              <!--single form panel-->
              @CSRF
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Your User Info</h3>
                <div class="multisteps-form__content">
        
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" name="EmpCode" type="text" placeholder="Enter Employee Code"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" name="personalFileNumber" type="text" placeholder="Personal File Number"/>
                    </div>
                  </div>


                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" name="currentBasicPay" type="text" placeholder="Current Basic Pay"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" name="EmpName" type="text" placeholder="Name"/>
                    </div>
                  </div>


                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <p><b>Duty Type:</b></p>
                            <input  type="radio" name="DutyType" value="General Duty">  General Duty
                            <input  type="radio" name="DutyType" value="Shift Duty">  Shift Duty
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" name="birthplace" type="text" placeholder="Place of Birth"/>
                    </div>
                  </div>


                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <p><b>Date of Birth:</b></p>
                      <input class="multisteps-form__input form-control" name="DateofBirth" type="datetime-local" placeholder="birth"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <p><b>Date of First Joining:</b></p>
                      <input class="multisteps-form__input form-control" name="firstjoiningdate" type="datetime-local" placeholder="Joining"/>
                    </div>
                  </div>


                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <p><b>Gender</b></p>
                            <input  type="radio" name="Religion" value="male"> Male
                            <input  type="radio" name="Religion" value="female"> Female
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <p><b>Religion</b></p>
                      <input  type="radio" name="Gender" value="Muslim">  Muslim
                      <input  type="radio" name="Gender" value="Non-Muslim">  Non-Muslim
                    </div>
                  </div>

                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                    <p><b>Martial Status</b></p>
                      <input  type="radio" name="MartialStatus" value="Single">  Single
                      <input  type="radio" name="MartialStatus" value="Married">  Married
                      <input  type="radio" name="MartialStatus" value="Divorced">  Divorced 
                      <input  type="radio" name="MartialStatus" value="Widowed">  Widowed/ Orphan
                    </div>
                  </div>

                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <p><b>Sect</b></p>
                      <select class="multisteps-form__input form-control" name="Sect">
                            <option value="Ahletashi">Ahletashi</option>
                            <option value="Ahlesunnah">Ahlesunnah</option>
                            <option value="Ahlewahab">Ahlewahab</option>
                            <option value="Deoband">Deoband</option>
                            <option value="Ismaili">Ismaili</option>
                            <option value="Ahmadi">Ahmadi</option>
                      </select>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <p><b>Service Status</b></p>
                    <select class="multisteps-form__input form-control" name="Sect">
                          <option value="is Retired">is Retired</option>
                          <option value="On Service">On Service</option>
                          <option value="Deputation">Deputation</option>
                          <option value="Resigned">Resigned</option>
                          <option value="Dismissed">Dismissed</option>
                          <option value="Died">Died</option>
                    </select>
                    </div>
                  </div>


                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      
                      <p><b>CNIC</b></p>
                    <input class="multisteps-form__input form-control" type="text"  data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" >

                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <p><b>Qouta:</b></p>
                    <select class="multisteps-form__input form-control" id="qouta">
                          <option  value="On Merit">On Merit</option>
                          <option  value="Disabled">Disabled</option>
                          <option  value="Provincial">Provincial</option>
                          <option  value="Women">Women</option>
                          <option  value="Non-Muslim">Non-Muslim</option>
                    </select>
                    </div>
                  </div>


                  <div id="disable" class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                      
                      <p><b>Disable details:</b></p>
                    <input class="multisteps-form__input form-control" type="text" placeholder="Disable details"/>
                    </div>
                  </div>


                  <div id="province" class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                      <p><b>Province</b></p>
                    <select class="multisteps-form__input form-control">
                          <option value="Federal Capital">Federal Capital</option>
                          <option value="Balochistan">Balochistan</option>
                          <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Sindh Rular">Sindh Rular</option>
                          <option value="Sindh Urban">Sindh Urban</option>
                    </select>
                    
                    </div>
                  </div>


                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <p><b>System Role:</b></p>
                    <select class="multisteps-form__input form-control" id="admin">
                          <option  value="Employee">Employee</option>
                          <option  value="Admin">Admin</option>
                          <option  value="SuperAdmin">Super Admin</option>
                     </select>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <p><b>On Contract:</b></p>
                            <input type="radio" name="contract" value="Yes">  Yes
                            <input type="radio" name="contract" value="No">  No
                    </div>
                  </div>


                  <div id="contract" class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                     <p><b>Contract Type</b></p>
                    <select class="multisteps-form__input form-control">
                          <option>Select</option>
                          <option value="Consolidated">Consolidated</option>
                          <option value="Annual">Annual</option>
                          <option value="Booking">Booking</option>
                          <option value="Daily wages">Daily wages</option>
                    </select>
                    
                    </div>
                  </div>


                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                      <p><b>Upload Image</b></p>
                      <input class="multisteps-form__input form-control"type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                  </div>

                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                    <button class="btn btn-primary" type="Submit" title="Save data">Save Record</button>
                    </div>
                  </div>
                </form>
<!--End single form panel-->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Your Address</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Address 1"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Address 2"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="City"/>
                    </div>
                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">State...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Zip"/>
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Your Order Info</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-12 col-md-6 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
                          <h5 class="card-title">Item Title</h5>
                          <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
                          <h5 class="card-title">Item Title</h5>
                          <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Additional Comments</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <textarea class="multisteps-form__textarea form-control" placeholder="Additional Comments and Requirements"></textarea>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-success ml-auto" type="button" title="Send">Send</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>

$( "#user-data" ).submit(function(e) {
  e.preventDefault();
  var frmdata = $(this).serialize();
  $.post('{{ URL::to('admin/employees/store') }}', frmdata, function(data, xhrStatus, xhr){



  });
  //alert( frmdata );
});






  
// hide or show the contract field
  $('input[type=radio][name=contract]').on('change', function() {
  switch ($(this).val()) {
    case 'Yes':
      $("#contract").show();
      break;
    case 'No':
      $("#contract").hide();
      break;
  }
});


$('#qouta').on('change', function() {
      //$("#xyz").hide();
      //alert('hi');
    var responseId = $(this).val();
    if(responseId=="Disabled"){
          //alert('hi Disabled');
          $("#province").hide();
          $("#disable").show();
          //alert('hi Disabled end');
    }
    else if(responseId=="Provincial"){
          //alert('hi');
          $("#disable").hide();
          $("#province").show();
    }
    else{
      $("#disable").hide();
      $("#province").hide();
      

    }
});

$( document ).ready(function() {
  $("#disable").hide();
  $("#province").hide();
  $("#contract").hide();
});
</script>

<script>
    $(":input").inputmask();

   </script>
@endsection