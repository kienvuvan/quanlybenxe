@extends('login.login')
@section('limiter')
	<div class="limiter">
		<div class="container-login100" style="background-image: url('resources/image/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="loginsys" method="POST">
					<span class="login100-form-title p-b-49">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Tài khoản của bạn đang để trống">
						<span class="label-input100">Tài khoản</span>
						<input class="input100" type="text" name="username" placeholder="Tài khoản của bạn" value="{{$username}}">
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Mật khẩu của bạn đang để trống">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="pass" placeholder="Mật khẩu của bạn" value="{{$password}}">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Quên mật khẩu?
						</a>
						<label style="text-align: center; color: red">Tài khoản hoặc mật khẩu không chính xác.Vui lòng nhập lại !!!</label>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Đăng nhập
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Đăng nhập với
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection