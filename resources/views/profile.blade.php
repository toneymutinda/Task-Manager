@extends('layouts.app')

@section('title')
  My Profile
@endsection

@section('content')
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
  	<div class="col-md-10 col-md-offset-1">
  	    @include('common.errors')
	  	<img src="../images/avatars/{{ Auth::user()->avatar }}" alt="My profile Image" style="width: 100px; height: 100px; float: left; margin-right: 25px;" class="img-circle">
		<h2>{{ Auth::user()->name }}'s Profile</h2>
		<div class="row">
			<div class="col-md-6">
				<form action="/profile" enctype="multipart/form-data" method="POST">
					{{ csrf_field() }}
					<label for="avatar">Upload Profile Image</label>
					<input type="file" name="avatar"><br>
					<input type="submit" class="btn btn-sm btn-primary">
				</form>
			</div>
		</div>
  	</div>
  </div>
</div>
	
@endsection