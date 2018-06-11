@extends('platform.layouts.app')

@section('title', 'Edit Profile')
@section('custom-css')
    <link rel="stylesheet" href="http://formvalidation.io/vendor/formvalidation/css/formValidation.min.css">
@endsection
@section('content')
    <div class="kt-pagetitle">
        <h5>Settings</h5>
    </div><!-- kt-pagetitle -->

    <div class="kt-pagebody">
        <div class="row">
            <div class="col-md-6 col-lg-6 mg-t-30 mg-md-t-0">
                <label class="content-left-label">Stripe Payment Management</label>
                <div class="card bg-gray-200 bd-0">
                    <div class="form-layout padding-40">
                        @if(Session::has('success_cancel'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {!! Session::get('success_cancel') !!}
                            </div><!-- alert -->
                        @endif

                        @if(Auth::user()->subscription('main'))
                                <div class="col-sm-12">
                                @if (Auth::user()->subscription('main')->cancelled())
                                     <p> Your subscription ends date is {{ substr(Auth::user()->subscription('main') ->ends_at, 0, 10)  }}</p>
                                     <a href="{{route('platform.settings.resumeSubscription')}}">Resume Subscription</a>
                                @else
                                     <p>If you want to cancel subscription , you can click this link  <a href="{{route('platform.settings.cancelSubscription')}}">Cancel Subscription</a></p>
                                @endif
                                </div>
                        @else
                            <form id="paymentForm">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label class="form-control-label">Credit card number: <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control" data-stripe="number" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Expiration: <span class="tx-danger">*</span></label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Month" data-stripe="exp-month" />
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Year" data-stripe="exp-year" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">CVV:  <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control" data-stripe="cvc" />
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                <input type="hidden" name="token" value="" />
                            </form>
                        @endif

                        {{--@if(!Auth::user()->subscribed('main'))--}}
{{--                        @if(!Auth::user()->subscription('main')->onTrial())--}}

                        {{--@else--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<p> Your trial ends date is {{ substr(Auth::user()->trial_ends_at, 0, 10)  }}</p>--}}
                                {{--@if (Auth::user()->subscription('main')->cancelled())--}}
                                    {{--<a href="{{route('platform.settings.cancelSubscription')}}">Cancel Subscription</a>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
    <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Change the key to your one
            Stripe.setPublishableKey("{{ env('STRIPE_KEY') }}");
            $('#paymentForm')
                .formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
//                        name: {
//                            validators: {
//                                notEmpty: {
//                                    message: 'The name is required'
//                                }
//                            }
//                        },
//                        email: {
//                            validators: {
//                                notEmpty: {
//                                    message: 'The email is required'
//                                }
//                            }
//                        },
//                        password: {
//                            validators: {
//                                notEmpty: {
//                                    message: 'The password is required'
//                                }
//                            }
//                        },
                        ccNumber: {
                            selector: '[data-stripe="number"]',
                            validators: {
                                notEmpty: {
                                    message: 'The credit card number is required'
                                },
                                creditCard: {
                                    message: 'The credit card number is not valid'
                                }
                            }
                        },
                        expMonth: {
                            selector: '[data-stripe="exp-month"]',
                            row: '.col-xs-3',
                            validators: {
                                notEmpty: {
                                    message: 'The expiration month is required'
                                },
                                digits: {
                                    message: 'The expiration month can contain digits only'
                                },
                                callback: {
                                    message: 'Expired',
                                    callback: function(value, validator) {
                                        value = parseInt(value, 10);
                                        var year         = validator.getFieldElements('expYear').val(),
                                            currentMonth = new Date().getMonth() + 1,
                                            currentYear  = new Date().getFullYear();
                                        if (value < 0 || value > 12) {
                                            return false;
                                        }
                                        if (year == '') {
                                            return true;
                                        }
                                        year = parseInt(year, 10);
                                        if (year > currentYear || (year == currentYear && value >= currentMonth)) {
                                            validator.updateStatus('expYear', 'VALID');
                                            return true;
                                        } else {
                                            return false;
                                        }
                                    }
                                }
                            }
                        },
                        expYear: {
                            selector: '[data-stripe="exp-year"]',
                            row: '.col-xs-3',
                            validators: {
                                notEmpty: {
                                    message: 'The expiration year is required'
                                },
                                digits: {
                                    message: 'The expiration year can contain digits only'
                                },
                                callback: {
                                    message: 'Expired',
                                    callback: function(value, validator) {
                                        value = parseInt(value, 10);
                                        var month        = validator.getFieldElements('expMonth').val(),
                                            currentMonth = new Date().getMonth() + 1,
                                            currentYear  = new Date().getFullYear();
                                        if (value < currentYear || value > currentYear + 100) {
                                            return false;
                                        }
                                        if (month == '') {
                                            return false;
                                        }
                                        month = parseInt(month, 10);
                                        if (value > currentYear || (value == currentYear && month >= currentMonth)) {
                                            validator.updateStatus('expMonth', 'VALID');
                                            return true;
                                        } else {
                                            return false;
                                        }
                                    }
                                }
                            }
                        },
                        cvvNumber: {
                            selector: '[data-stripe="cvc"]',
                            validators: {
                                notEmpty: {
                                    message: 'The CVV number is required'
                                },
                                cvv: {
                                    message: 'The value is not a valid CVV',
                                    creditCardField: 'ccNumber'
                                }
                            }
                        }
                    }
                })
                .on('success.form.fv', function(e) {
                    e.preventDefault();
                    var $form = $(e.target);
                    // Reset the token first
                    $form.find('[name="token"]').val('');
                    Stripe.card.createToken($form, function(status, response) {
                        if (response.error) {
                            alert(response.error.message);
                        } else {
                            // Set the token value
                            console.log(response);
                            alert(response.id);
                            $form.find('[name="token"]').val(response.id);
                            // Or using Ajax
                            $.ajax({
                                // You need to change the url option to your back-end endpoint
                                url: "{{route('platform.settings.subscription')}}",
                                data: $form.serialize(),
                                method: 'POST',
                                dataType: 'json'
                            }).success(function(data) {
                                alert(data.msg);
                                // Reset the form
                                $form.formValidation('resetForm', true);
                            });
                        }
                    });
                });

        });
    </script>

@endsection