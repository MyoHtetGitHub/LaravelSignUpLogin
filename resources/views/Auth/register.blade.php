@extends('layouts.master')
@section('title','Register')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="well">
				<legend>Register Form</legend>
				<form method="post">
					{{csrf_field()}}
					@if(session('status'))
					<p class="alert alert-success">{{session('status')}}</p>
					@endif
					<div class="form-group" >
						<label>User Name</label>
						<input type="text" name="name" id="name" class="form-control">
						@if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                       @endif
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="email" class="form-control">
						@if($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                       @endif
                    </div>
                    <div class="form-group">
						<label>Password</label>
						<input type="password" name="password" id="password" class="form-control">
						@if($errors->has('password'))
                    <div class="error">{{ $errors->first('password') }}</div>
                       @endif
                    </div>
                    <div class="form-group">
						<label>Confirm Password</label>
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
						@if($errors->has('password_confirmation'))
                    <div class="error">{{ $errors->first('password_confirmation') }}</div>
                       @endif
					</div>


						<div class="form-group">

						<button type="submit"  class="btn btn-info">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
