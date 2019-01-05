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
                        <strong>Cash in Hand</strong>
                    </h3>
                </div>

                <!--Body-->
                <div class="md-form">
                    <input type="number" id="Form-cash-on-hand" class="form-control">
                    <label for="Form-cash-on-hand">Amount</label>
                </div>
                <div class="text-center mb-3">
                    <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light">Open Register</button>
                </div>
            </div>
        </div>
        <!--/Form without header-->

    </section>
@endsection