@extends('base_for_login')

@section('title', 'Login | TopHotelAsia')

@section('content')
    <section class="form-elegant">

        <!--Form without header-->
        <div class="card">

            <div class="card-body mx-4">

                <!--Header-->
                <div class="text-center" style="padding-top: 20px">
                    <h3 class="dark-grey-text mb-5">
                        <strong>Sign in</strong>
                    </h3>
                </div>

                <!--Body-->
                <div class="md-form">
                    <input type="text" id="Form-email1" class="form-control">
                    <label for="Form-email1">Your email</label>
                </div>

                <div class="md-form pb-3">
                    <input type="password" id="Form-pass1" class="form-control" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                    <label for="Form-pass1">Your password</label>
                    <p class="font-small blue-text d-flex justify-content-end">Forgot
                        <a href="#" class="blue-text ml-1"> Password?</a>
                    </p>
                </div>

                <div class="text-center mb-3">
                    <a href="{{ url('cash-on-hand') }}" class="btn blue-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light">Sign in</a>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer mx-5 pt-3 mb-1">
                <p class="font-small grey-text d-flex justify-content-end">Not a member?
                    <a href="#" class="blue-text ml-1"> Sign Up</a>
                </p>
            </div>

        </div>
        <!--/Form without header-->

    </section>
@endsection