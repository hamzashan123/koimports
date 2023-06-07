@extends('layouts.app')
@section('title', 'User Profile')
@section('content')
    <section class="breadcrumb-area pt-5 pb-5" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Bulk Order Upload (CSV File)</h2>
          
            </div>
        </div>
    </section>

    <section class="container padding-top-5 pb-5">
        
            <div class="col-lg-8 custom-8">
            <p>
                    It is now possible to place your order via CSV File.
            </p>
            <a style=" text-decoration: underline;" download="SampleOrderCsv" href="{{ Storage::url('csv_sample.csv') }}" title="MyPdf">Download CSV Bulk Order Template</a>
            
                   

 
            <p>
            How to order:
            </p>

            <ul>
                <li> 1) Download the CSV File Template  </li>
                <li> 2) Add your order to the CSV File - you will need your account number, item codes, and item quantities.</li>
                <li> 3) Save your file</li>
                <li> 4) Upload to JNK Website - Find and select the correct CSV file for your order</li>
            </ul>







                </p>
                <form action="{{ route('save.order') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    
                    <div class="row">
                        <div class="col-lg-12 text-center mb-4">
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label for="first_name" class="text-small text-uppercase">First Name</label>
                            <input type="text" class="form-control form-control-lg"
                                   name="first_name" id="first_name"
                                   >
                            @error('first_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="last_name" class="text-small text-uppercase">Last Name</label>
                            <input type="text" class="form-control form-control-lg"
                                   name="last_name" id="last_name"
                                  >
                            @error('last_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label for="company_name" class="text-small text-uppercase">Company Name</label>
                            <input type="text" class="form-control form-control-lg"
                                   name="company_name" id="company_name"
                                   >
                            @error('company_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="phone" class="text-small text-uppercase">Phone</label>
                            <input type="tel" class="form-control form-control-lg"
                                   name="phone" id="phone"
                                  >
                            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <label for="order_csv" class="text-small text-uppercase">CSV File Upload</label>
                            <input type="file" id="order_csv" name="order_csv"><br>
                            @error('order_csv')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 button-box">
                            <button class="default-btn">Submit</button>
                        </div>
                    </div>

                </form>
          
            
        </div>
    </section>
@endsection
