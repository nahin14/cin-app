@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<h1>Welcome to Claim It Now Web Application!</h1>
                    <h1>You are logged in as {{ Auth::user()->name }}</h1>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
