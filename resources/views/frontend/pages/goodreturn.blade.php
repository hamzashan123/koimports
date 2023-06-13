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
            <h5>
            Once you've filled out the returns form you'll receive an email with the information you've submitted. You MUST print this out and attach it to the goods you are returning. We MUST have this information included/attached to the goods you are returning for our drivers to accept them.
            </h5>
            <!-- <a style=" text-decoration: underline;" download="SampleOrderCsv" href="{{ asset('csv_sample.csv') }}" title="MyPdf">Download CSV Bulk Order Template</a> -->
            
                   

 
            <h5>
            Thank you.
            </h5>
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
                Returns Policy

                To reflect manufacturers’ strict conditions with returns, we also have to be strict with returns.
                <br>
                <br>
                A copy of proof of purchase or receipt must accompany any faulty item you wish to return, as this is a safeguard to you the retailer. Please familiarise yourselves with manufacturer’s warranty policies as many are 1 year although some companies extend to a 2-year warranty on electricals. If you have any queries, please ring the Sales Office.
                <br>
                <br>
                Please note, we insist on receiving a receipt for all electrical goods. Issues with them will only be resolved if they’re still within warranty. If items are returned without receipts they will be disposed of within 4 weeks. The electrical product will also be returned to you if it’s sent with a receipt but it is out of warranty.
                <br>
                <br>
                For Juwel items, we must also insist on a completed service card & copy of receipt for any item.
                <br>
                <br>
                For Eheim – please be aware that if a part is repairable or can be easily replaced we have to do this. They have issued a returns policy, which has some useful tips/starting points for diagnosing a problem.
                <br>
                <br>
                If you wish to return a special order item or transfer order – you must seek prior authorisation. An invoice number is a requirement on paperwork for these items please, as we are unable to find text/non-stock.
                <br>
                <br>
                You have the option to either upload a copy of the customer receipt or send it back with the goods.
                <br>
                <br>
                PLEASE ONLY COMPLETE THIS FORM THE WEEK YOU ARE RETURNING THE STOCK WITH OUR DRIVER.
                <br>
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
