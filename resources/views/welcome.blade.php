@extends('layouts.public')

@section('content')

<div class="py-5 bg-white">
    <div class="px-4 my-5 text-center">
        <h1 class="display-5 fw-bold mt-4">Contact App</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Contact App gives you everything you need to organize your contacts easily.</p>
            <div class="d-flex justify-content-sm-center">
                <a href="#" class="btn btn-primary btn-lg mr-2">Sign up</a>
                <a href="#" class="btn btn-outline-secondary btn-lg">Sign in</a>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <h3>Data Protection</h3>
            <p>In the event of contact deletion or corruption, keep your contacts secure and unharmed across all of
                your connected accounts.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h3>Notes & Tags</h3>
            <p>Group, search, and filter your contacts using notes and tags.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h3>Birthday Reminders</h3>
            <p>Weekly notifications are sent to you, including birthday reminders.</p>
        </div><!-- /.col-lg-4 -->
    </div>
</div>



@endsection