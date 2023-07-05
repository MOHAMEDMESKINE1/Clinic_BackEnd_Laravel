<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Stripe Payment Gateway Integration Example - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{ asset('storage/img/logo-hoptial.svg') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
    rel="stylesheet"
  />
</head>
<style type="text/css">
    h2{
        margin:80px auto;
    }    
    body{
                background: url("/storage/img/background-wecare.jpg") !important;
                background-repeat: no-repeat !important;
                object-fit :scale-down !important ;
               background:  fixed;
               
        }
    .mtop{
        margin-top: 70px !important;
    }
</style>
<body>

    <div class="">
        
  
        <div class="mtop">
                
            <div class="container-fluid mx-auto mt-5">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3  mt-5 ">
                        <div class="panel panel-default credit-card-box   shadow-md">
                            <div class=" panel-heading display-table"  >
                                <h3 class="panel-title text-center">
    
                                    <strong>Payment Details</strong>
                                </h3>
                            </div>
                            <div class="panel-body">
                
                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                @endif
                                @if (Session::has('fail-message'))
                                    <div class="alert alert-danger text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('fail-message') }}</p>
                                    </div>
                                @endif
                
                                    <form 
                                        role="form" 
                                        action="{{ route('stripe.post') }}" 
                                        method="post" 
                                        class="require-validation"
                                        data-cc-on-file="false"
                                        {{-- data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" --}}
                                        data-stripe-publishable-key="pk_test_51NPsXMBvlMexzi6uzxg8zgAQrm9s5bknJtWnIpmsdBo2RqlCoskqFQxCWD02o6Gn4yguc8hTjE849pR8EpgV4A0X00tYAIVVWW"
                                        id="payment-form">
                                    @csrf
                
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> 
                                            <input class='form-control ' name="name" size='4' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Email</label> 
                                            <input class='form-control ' name="email" size='4' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Address</label> 
                                            <input class='form-control ' name="address" size='4' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Amount</label> 
                                            <input autocomplete='off' name="amount" class='form-control amount' size='20' type='number'>
    
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Card Number</label> 
                                            <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                        </div>
                                    </div>
                                   
                
                                    <div class='form-row row'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label> 
                                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label> 
                                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                        </div>
                                    </div>
                
                                    <div class='form-row row'>
                                        <div class='col-md-12 error form-group hide'>
                                            <div class='alert-danger alert'>Please correct the errors and try again.</div>
                                        </div>
                                    </div>
                
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn  btn-lg btn-block" style="background-color: #0b1b75;color: #eee;" type="submit">
    
                                                <span class="font-bold mx-2 "> Make Payment </span>                                  
                                                <i class="fa-brands fa-cc-stripe fa-2xl " style="color: #eee;"></i>
    
                                            </button>
                                            <a href="{{route('patient.statistics')}}" class="btn  btn-secondary btn-success  btn-lg btn-block"  >
    
                                                <span class="font-bold mx-2 "> Cancel Payment  </span>                                  
    
                                            </a>
                                        </div>
                                    </div>
                                        
                                </form>
                            </div>
                        </div>        
                    </div>
                </div>
                
            </div>
        </div>
      
          
    </div>
        
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        
    <script type="text/javascript">
    
    $(function() {
    
        /*------------------------------------------
        --------------------------------------------
        Stripe Payment Code
        --------------------------------------------
        --------------------------------------------*/
        // var Stripe = Stripe('pk_test_51NPsXMBvlMexzi6uzxg8zgAQrm9s5bknJtWnIpmsdBo2RqlCoskqFQxCWD02o6Gn4yguc8hTjE849pR8EpgV4A0X00tYAIVVWW');
        var $form = $(".require-validation");
        
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');
        
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
            });
        
            if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
            }
        
        });
        
        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                    
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
        
    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</body>
</html>