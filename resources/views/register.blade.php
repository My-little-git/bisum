@extends('layouts.master')

@section('title', 'Регистрация')

@section('content')

    <div class="login-page mt-100">
        <div class="container">
            <form action="#" class="login-form common-form mx-auto">
                <div class="section-header mb-3">
                    <h2 class="section-heading text-center">Register</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <fieldset>
                            <label class="label">First name</label>
                            <input type="text" />
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Last name</label>
                            <input type="text" />
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Email address</label>
                            <input type="email" />
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Password</label>
                            <input type="password" />
                        </fieldset>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn-primary d-block mt-3 btn-signin">CREATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
