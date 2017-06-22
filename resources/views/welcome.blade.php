@extends('layouts.app')

@section('title')
  Welcome!
@endsection

@section('content')
 <!-- HEADER SECTION -->
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Create. View. Manage.</h1>
            <hr>
            <p>A software solution to managing your tasks</p>
        </div>
        <br>
        <p class="m-button">
            <a href="" class="btn btn-default btn btnSwing">Get started</a> &nbsp; &nbsp;
            <a href="" class="btn btn-default btn btnSwing">Company profile</a>
        </p>
    </div>
</header>
  <!-- /Header -->

<!-- HOW IT WORKS -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section-heading">We are tailored to your needs</h2>
                <hr class="separator">
            </div>
        </div>
    </div>
</section>
<!-- /How it works -->
@endsection
