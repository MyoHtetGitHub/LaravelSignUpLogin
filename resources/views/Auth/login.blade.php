@extends('layouts.master')
@section('title','Register')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
            @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
					@endif
			<div class="well">
				<legend>Login Form</legend>
				<form method="post">
					{{csrf_field()}}
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

						<button type="submit"  class="btn btn-info">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
