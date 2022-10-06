@extends('layouts.app')

@section('content')


<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> {{ __('Register') }} </h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" action="{{ route('register') }}">

						<div class="form-group ">
							<div class="col-xs-12">
                                <input id="name" type="text" placeholder="UserName" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								
							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">
                                    {{ __('Register') }}
								</button>
							</div>
						</div>

					</form>

				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 text-center">
                    @if (Route::has('login'))
					<p>
						Already have account?<a href="{{ route('login') }}" class="text-primary m-l-5"><b>{{ __('LogIn') }}</b></a>
					</p>
                    @endif
				</div>
			</div>

		</div>






@endsection
