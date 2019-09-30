
@extends('master.index')
@section('title')
confirm
@endsection

@section('content')
	<div class="container" style="border: 1px solid #79F2E7;">
		<div class="row mb-3" style="border-bottom: 1px solid #79F2E7;background-color: #F5F1F1;">
			<b class="ml-5 mt-3 mb-3 " style="font-size: 20px;">Xác nhận người dùng</b>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				@if(isset($images))
			
				<img width="300px" height="300px" src="image/{{$images}}" alt=""> <br>
				@else
				<img width="300px" height="300px" src="image/avarta.jpg" alt=""> <br>

				@endif
				<b style="margin-left:80px; margin-top:15px;">Ảnh đại diện[&radic;]</b>
			</div>

			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<div class="form-group">
					<label for=""><b>Tên tài khoản [&radic;]</b></label>
					<p>{{old('name')}}</p>
					{{-- <input type="text" name="" value="{{old('name')}}" disabled=""> --}}
				</div>
				<div class="form-group">
					<label for=""><b>Mật khẩu [&radic;]</b></label>
					<p>{{old('pass')}}</p>
				</div>
				<div class="form-group">
					<label for=""><b>Nhập lại mật khẩu [&radic;]</b></label>
					<p>{{old('PassAgain')}}</p>
				</div>
				<div class="form-group">
					<label for=""><b>Tên thật [&radic;]</b></label>
					<p>{{old('fullname')}}</p>
				</div>
				<div class="form-group">
					<label for=""><b>Giới tính [&radic;]</b></label>
					<p>
						@if(null!==old('gender'))
							{{old('gender') == 0 ? 'Nam' : 'Nữ'}}
						@endif
					</p>
				</div>
				<div class="form-group">
					<label for=""><b>Ngôn ngữ lập trình [&radic;]</b></label>
					<p>
					@if(null!==old('language'))
					@foreach(old('language') as $lan)
						{{$lan}}
					@endforeach
					@endif
					</p>
				</div>
				<div class="form-group">
					<label for=""><b>Quốc tịch [&radic;]</b></label>
					<p>
						@if(null!==old('nationnal'))
						{{old('nationnal') ==='Vietnames' ? 'Vietnamese' : 'Chinees'}}
						@endif
					</p>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" onclick="back()"><b>Quay lại trang trước</b></button> 
					<button style="margin-left: 290px" class="btn btn-primary"><b>Cập nhật dữ liệu</b></button>
				</div>
			</div>


		</div>
	</div>
@endsection
@section('script')
	<script type="text/javascript">
		function back(){
			 history.back();
		}
	</script>
@endsection
