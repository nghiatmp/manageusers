@extends('master.index')
@section('title')
adduser
@endsection

@section('content')
	<div class="contentadd" style="border: 1px solid black">
			<div class="">
				<h2 class="text-primary text-center mt-5">Thêm Người Dùng
                       <small style="font-size: 15px"><a href="{{route('admin.adminpage')}}" title="">(Quay lại trang chủ)</a></small>
				</h2>
			</div>
			@include('master.errors')
			<form style="padding: 30px 30px" action="{{route('admin.postadd')}}" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="exampleInputEmail1"><b>Tên tài khoản</b></label>
			    <input type="text" class="form-control" name="name" placeholder="Tên tài khoản" value="{{ old('name') }}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><b>Mật khẩu</b></label>
			    <input type="password" class="form-control"   name="pass" placeholder="Mật khẩu" value="{{ old('pass') }}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><b>Nhìn lại mật khẩu</b></label>
			    <input type="password" class="form-control"  placeholder="Nhập lại mật khẩu" name="PassAgain"  value="{{ old('PassAgain') }}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><b>Tên thật</b></label>
			    <input type="text" class="form-control"  placeholder="Họ va tên" name="fullname"  value="{{ old('fullname') }}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><b>Email</b></label> 
			    <input type="text" class="form-control"  placeholder="Email" name="email"  value="{{ old('email') }}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"> <b>Anh đại diện</b>   </label>
			    <input type="file" name="images" value="{{ old('images') }}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"> <b>Giới tính </b> </label>
			    <input type="radio" name="gender" value="0" checked="" @if(old('gender')== 0 ) checked="" @endif> Nam
			    <input type="radio" name="gender" value="1" @if(old('gender')== 1 ) checked="" @endif> Nữ
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"> <b>Ngôn ngữ lập trình</b>  </label>
			    	<input type="checkbox" name="language[]" value="Java" checked="" @if(old('language')=== 'Java' ) checked="" @endif> Java
			     	<input type="checkbox" name="language[]" value="PHP" @if(old('language') === 'PHP' ) checked="" @endif> PHP
			      	<input type="checkbox" name="language[]" value="JavaScript" @if(old('language')=== 'JavaScript' ) checked="" @endif> JavaScript
			  </div>
			  <div class="form-group">
				    <label for="inputEmail3"><b>Quốc tịch</b></label>
				  
			      <select name="nationnal" class="form-control" id="quoctichlist" >
			      	<option value="">--Lựa Chọn Quốc Tịch--</option>
			      	<option value="Vietnames" selected="" @if(old('nationnal')=== 'Vietnames' ) selected="" @endif >Vietnames</option>}
			      	<option value="Chinees"  @if(old('nationnal')=== 'Chinees' ) selected="" @endif>Chinees</option>}
			      </select>

			 </div>
			  <button type="submit" class="btn btn-primary">Xác nhận thêm mới</button>
			  @csrf
		</form>
	</div>
@endsection