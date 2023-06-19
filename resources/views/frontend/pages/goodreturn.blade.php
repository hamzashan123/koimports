@extends('layouts.app')
@section('title', 'User Profile')
@section('content')
    <section class="breadcrumb-area pt-5 pb-5" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Goods Return Note</h2>
          
            </div>
        </div>
    </section>

    <section class="container padding-top-5 pb-5">
        
            <div class="col-lg-8 custom-8">
            <!-- <h5>
            Once you've filled out the returns form you'll receive an email with the information you've submitted. You MUST print this out and attach it to the goods you are returning. We MUST have this information included/attached to the goods you are returning for our drivers to accept them.
            </h5> -->
            <!-- <a style=" text-decoration: underline;" download="SampleOrderCsv" href="{{ asset('csv_sample.csv') }}" title="MyPdf">Download CSV Bulk Order Template</a> -->
            
                   

 
            <!-- <h5>
            Thank you.
            </h5> -->
            <form action="{{ route('products.return') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    
                    <div class="row">
                        <div class="col-lg-12 text-center mb-4">
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 form-group">
                            <label for="shop_name" class="text-small text-uppercase">Shop Name*</label>
                            <input type="text" class="form-control form-control-lg"
                                   name="shop_name" id="shop_name"
                                   >
                            @error('shop_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-lg-4 form-group">
                            <label for="shop_email" class="text-small text-uppercase">Email*</label>
                            <input type="text" class="form-control form-control-lg"
                                   name="shop_email" id="shop_email"
                                  >
                            @error('shop_email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-lg-4 form-group">
                            <label for="shop_account_number" class="text-small text-uppercase">Account Number*</label>
                            <input type="text" class="form-control form-control-lg"
                                   name="shop_account_number" id="shop_account_number"
                                  >
                            @error('shop_account_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    
                        <h3>Product Details</h3>
                        <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Product Code</th>
                                        <th>QTY</th>
                                        <th>Reason for return</th>
                                        <th>Invoice no</th>
                                        <th>Replacement/​Credit</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="product_code[]"></td>
                                            <td><input type="text" class="form-control" name="quantity[]"></td>
                                            <td><input type="text" class="form-control" name="reason[]"></td>
                                            <td><input type="text" class="form-control" name="invoice_number[]"></td>
                                            <td><select name="return_type[]" class="form-control"> <option value="Replacement" > Replacement </option> <option value="Credit" > Credit </option></select></td>
                                            
                                            
                                        </tr>
                                
                                    </tbody>
                                    
                                </table>
                        </div>
                    
                  
                   


                    <h5>
             

                Returns Policy To reflect manufacturers’ strict conditions with returns, KO Imports must also be strict with returns.
                <br><br>
A copy of the completed return form containing the purchase invoice number must accompany any faulty item you wish to return. Please familiarise yourselves with manufacturer’s warranty policies as many are 1 year although some companies offer extended warranties. If you have any queries, please ring the Sales Office.
<br><br>
Please note, for all electrical goods, issues with them will only be resolved if they are still within warranty. If items are returned without the completed return form and invoice, they will be disposed of within 4 weeks. The electrical product will also be returned to you if it is out of warranty at your return cost.
<br><br>
If you wish to return a special order item – you must seek prior authorisation from KO Imports. An invoice number is a requirement on the paperwork for these items.

                </h5>

               
                <input type="checkbox" style="width:auto !important;">
                I confirm that I agree to the Koimports Ltd Returns Policy
                           
                        
                    
                <div class="row">
                    <div class="col-lg-12 button-box">
                            <button class="default-btn">Submit</button>
                        </div>
                </div>

                </form>

              
          


            @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif




                


          
            
        </div>
    </section>
@endsection
