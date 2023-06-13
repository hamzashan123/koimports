@extends('layouts.app')
@section('title', "FAQs")

<style>

.myaccordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.myactive, .myaccordion:hover {
  background-color: #ccc;
}

.myaccordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.myAccordion-active:after {
  content: "\2212";
}

.shop-filter-child {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
    </style>
@section('content')
    <div class="container mt-5 mb-5" style="border: none;">
        
            <div>
                <h3 class="text-center font-weight-bold">FAQs</h3>

                <div class="py-2 px-4 bg-white text-black mb-3 parent-list-sidebar myaccordion">
                    <strong class="small text-uppercase font-weight-bold">
                        <a class="text-decoration-none text-white" >
                        1.	How Do I Open an Account? 
                        </a>
                    </strong>
                </div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal shop-filter-child">
                    
                        <li class="mb-2">
                            <a class="reset-anchor" >
                            If you’d like to set up an account with us, please register via the Apply for a Trade Account Register 
                            </a>
                        </li>
                    
                </ul>

                <div class="py-2 px-4 bg-white text-black mb-3 parent-list-sidebar myaccordion">
                    <strong class="small text-uppercase font-weight-bold">
                        <a class="text-decoration-none text-white" >
                        2.	Does KO Imports Sell To the Public? 
                        </a>
                    </strong>
                </div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal shop-filter-child">
                    
                        <li class="mb-2">
                            <a class="reset-anchor">
                            KO Imports is a wholesaler and deals only with trade customers. We do not sell directly to the public.
                            </a>
                        </li>
                    
                </ul>


                <div class="py-2 px-4 bg-white text-black mb-3 parent-list-sidebar myaccordion">
                    <strong class="small text-uppercase font-weight-bold">
                        <a class="text-decoration-none text-white" >
                        3.	Is there a minimum order value?  
                        </a>
                    </strong>
                </div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal shop-filter-child">
                    
                        <li class="mb-2">
                            <a class="reset-anchor">
                            We have a minimum order value of £100.
                            </a>
                        </li>
                    
                </ul>


                <div class="py-2 px-4 bg-white text-black mb-3 parent-list-sidebar myaccordion">
                    <strong class="small text-uppercase font-weight-bold">
                        <a class="text-decoration-none text-white" >
                        4.	How Long Does Delivery Take?
                        </a>
                    </strong>
                </div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal shop-filter-child">
                    
                        <li class="mb-2">
                            <a class="reset-anchor">
                            Please Check the Delivery Tab
                            </a>
                        </li>
                    
                </ul>


                <div class="py-2 px-4 bg-white text-black mb-3 parent-list-sidebar myaccordion">
                    <strong class="small text-uppercase font-weight-bold">
                        <a class="text-decoration-none text-white" >
                        5.	How Do I return something?
                        </a>
                    </strong>
                </div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal shop-filter-child">
                    
                        <li class="mb-2">
                            <a class="reset-anchor">
                            Please Check the return form tab
                            </a>
                        </li>
                    
                </ul>

                <div class="py-2 px-4 bg-white text-black mb-3 parent-list-sidebar myaccordion">
                    <strong class="small text-uppercase font-weight-bold">
                        <a class="text-decoration-none text-white" >
                        6.	Will I receive a credit account?
                        </a>
                    </strong>
                </div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal shop-filter-child">
                    
                        <li class="mb-2">
                            <a class="reset-anchor">
                            All accounts will be on a proforma basis, credit accounts are issued at the discretion of KO Imports 
                            </a>
                        </li>
                    
                </ul>



            </div>
            
        </div>
    
@endsection