@extends('layouts.app')
@section('title', "FAQs")

<style>
.accordion {
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

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

.panel.acordianshow {
    overflow: auto !important;
    height: 100% !important;
    max-height: 10vh !important;
    display: flex;
    align-items: center;
}



.panel.acordianshow p {
    font-size: 18px;
    line-height: 25px;
}
</style>

@section('content')
    <div class="container mt-5 mb-5" style="border: none;">
        <div class="col-md-8 faqs" style="margin: 0 auto;">     
            <div>
                <h3 class="text-center font-weight-bold">FAQs</h3>

                <button class="accordion"> 1.	How Do I Open an Account? </button>
                <div class="panel">
                <p>If you’d like to set up an account with us, please register via the Apply for a Trade Account Register </p>
                </div>

                <button class="accordion"> 2.	Does KO Imports Sell To the Public? </button>
                <div class="panel">
                <p> KO Imports is a wholesaler and deals only with trade customers. We do not sell directly to the public.</p>
                </div>

                <button class="accordion">3.  Is there a minimum order value?  </button>
                <div class="panel">
                <p> We have a minimum order value of £100.</p>
                </div>

                <button class="accordion">4.	How Long Does Delivery Take? </button>
                <div class="panel">
                <p> Please Check the Delivery Tab.</p>
                </div>

                <button class="accordion">5.	How Do I return something?  </button>
                <div class="panel">
                <p>  Please Check the return form tab.</p>
                </div>

                <button class="accordion"> 6.	Will I receive a credit account?  </button>
                <div class="panel">
                <p>   All accounts will be on a proforma basis, credit accounts are issued at the discretion of KO Imports .</p>
                </div>
              


            </div>
        </div>    
    </div>
    
    <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                panel.classList.add('acordianshow');
                } else {
                    panel.classList.add('acordianshow');
                } 
            });
            }
    </script>

@endsection