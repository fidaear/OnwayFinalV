@extends('layouts.app')
@section('title','Register')
@section('links')

    <link rel="stylesheet" href="{{asset("css/r-register.css")}}">
@endsection
@section('content')

	<br>
	<div class="global">

	<div class="DIVb"><br>
<form id="f"  action="{{ route('recruiters.store') }}" method="POST" enctype="multipart/form-data">
@csrf
	<div id="imgEnt"><img src="{{asset('images/entreprise.png')}}" id="imgE" width="20px"></div>
	<div class="form">
	<div class="form-group" id="divCom"><strong>Company Information</strong></div>
  <div class="form-group">

  <label for="company_name">Company Name:</label>
  <input type="text" name="company_name" class="form-control" id="formGroupExampleInput" placeholder="Campany name"  required>
 @error('company_name')
 <span class="text-danger">{{$message}}</span>
  @enderror
  </div>
  <div class="form-group">
  <label for="industry_type">Industry Type:</label>
        <select name="industry_type" id="industry_type" class="form-control form-control-lg"required>
    <option value="high_tech_it" selected>High Tech / Information Technology</option>
    <option value="agriculture_agri-food">Agriculture and Agri-Food</option>
    <option value="architecture_urban_planning">Architecture and Urban Planning</option>
    <option value="arts_entertainment">Arts and Entertainment</option>
    <option value="automotive">Automotive</option>
    <option value="banking_finance">Banking and Finance</option>
    <option value="building_construction">Building and Construction</option>
    <option value="chemical_chemical_products">Chemical and Chemical Products</option>
    <option value="retail">Retail</option>
    <option value="education_training">Education and Training</option>
    <option value="energy_natural_resources">Energy and Natural Resources</option>
    <option value="hospitality_restaurant">Hospitality and Restaurant</option>
    <option value="pharmaceuticals">Pharmaceuticals</option>
    <option value="media_communication">Media and Communication</option>
    <option value="health_healthcare">Health and Healthcare</option>
    <option value="professional_services">Professional Services</option>
    <option value="telecommunications">Telecommunications</option>
    <option value="tourism_travel">Tourism and Travel</option>
    <option value="transport_logistics">Transport and Logistics</option>
    <option value="other">Other</option>
</select>

	</div>


	<div class="form-group">
    <label for="company_size">Company Size:</label>
<select name="company_size" id="company_size" class="form-control form-control-lg" required>
    <option value="micro">Micro-business (1-9 employees)</option>
    <option value="small">Small business (10-49 employees)</option>
    <option value="medium">Medium-sized business (50-249 employees)</option>
    <option value="large">Large business (250-499 employees)</option>
    <option value="extra_large">Significant-sized enterprise (500-999 employees)</option>

</select>
</div>
		<div class="form-group">
	  <input type="email" class="form-control"  name="email" id="formGroupExampleInput2" placeholder="Email" required>
		</div>
		<div class="form-group">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"  class="form-control" id="formGroupExampleInput2" required>

  </div>
	<div class="form-group">

   <label for="password">Location:</label>
   <input type="text" name="location" class="form-control" id="formGroupExampleInput2" placeholder="Location" required>
   </div>


<div class="row g-3 mt-2">
  <div class="col-md-2">
     <label class="picture-register-upload d-center" for="image"><i class="bi bi-camera"></i>
    <input type="file" name="image" class="form-control" id="pic"  accept=".jpeg,.png,.jpg,.gif" >
  </label>
  </div>
  <div class="col-md-6">
<div class="picture-register-div d-center">
    <img src="{{asset("pictures/pic-2.jpg")}}" id="pic-place" class="picture-register" alt="Picture...">
</div>
  </div>
</div>




        <br>
</div>
	</div>

	</div>

	<div class="db">
<br>
	<div class="form"><div id="details"><img src="{{ asset('images/téléchargement (2).png') }}" id="deta2"><strong>Details at a Glance</strong></div><br>
 <div class="foorr">
    <div class="form-group">
  <label for="company_website">Company Website:</label>
    <input type="text" class="form-control" name="company_website" id="formGroupExampleInput" placeholder="name">
  </div>
  <div class="form-group">
  <label for="mobile_number">Corporate Mobile Number:</label>
        <input type="text" name="mobile_number" class="form-control" id="formGroupExampleInput2" required>
        @error('mobile_number')
            <p>{{ $message }}</p>
        @enderror

	   </div>
  <div class="form-group">
       <label for="about_company">About Company:</label>
        <textarea id="textarea" name="about_company" required></textarea>
	 </div>

	<label class="cv-upload text-center btn btn-outline-dark" for="my-file-selector" >Upload Company Overview or Brochure File

    <input type="file"  name="company_overview_file" id="my-file-selector" accept=".pdf, .doc, .docx" required placeholder="Upload Company Overview or Brochure File">
  </label>
</label><br><br>
	<div class="form-check form-check-inline">
  <label>
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="terms_and_conditions" required>
  Terms and Conditions Agreement
        </label>
</div><br><br>

		<div id="divBut"><button type="submit" class="btn">Became An Employer</button></div>
	</div>
</div>
</form><br>
	</div>

	</div>
  <script src="{{asset("js/script.js")}}"></script>
@endsection
