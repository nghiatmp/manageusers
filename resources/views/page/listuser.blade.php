@extends('master.index')
@section('title')
listuser
@endsection

@section('content')
   <div class="container">
		<div style="width: 80%; margin:auto" class="content">
			<div class="header" style="padding:5px 15px; border: 1px solid #DAFAF2;display: flex; position: relative">
				<div class="mt-2 mb-2">
					<b> <a href="{{route('admin.adminpage')}}" title="">Trang Chủ  >></a> <span style="color: red">Danh sách</span> </b>
				</div>
				<div class="dropdown mt-2 mb-2" style="right: 20px; position: absolute">
					<div class="dropdown">
				      <a class="dropdown-toggle" data-toggle="dropdown">Admin
				    </a>
				    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
				      <a class="dropdown-item" href="#">Trang cá nhân</a>
				      <a class="dropdown-item" href="#">Đăng xuất</a>
				    </div>
				  </div>
				</div>
			</div>
			<div class="search">
				<div style="padding: 5px  0px; background-color: #F7EFEF; border: 1px solid #DAFAF2;">
					<h6 class="ml-2"> Tìm kiếm người dùng</h6>
				</div>
				<div class="row mt-4 mb-2" style="font-size: 15px">
					<div class="col-xl-6 col-md-6 col-sm-6 col-xs-6">
						<form>
							<div class="form-group row">
							    <label for="inputEmail3" class="col-sm-3 col-form-label"> <b>Tài Khoản</b></label>
							    <div class="col-sm-9">
							      <input type="email" class="form-control" id="inputEmail3" placeholder="Tài khoản">
							    </div>
							 </div>
							 <div class="form-group row">
							    <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Tên Thật</b></label>
							    <div class="col-sm-9">
							      <input type="email" class="form-control" id="inputEmail3" placeholder="Tên thật">
							    </div>
							 </div>
							 <div class="form-group row">
							    <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Email</b></label>
							    <div class="col-sm-9">
							      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
							    </div>
							 </div>
							 <div class="form-group row">
							 		<button class="btn btn-danger" style="font-size: 14px; margin-left: 155px">Reset</button>
							 		<button class="btn btn-info" style="font-size: 14px; margin-left: 10px">Tìm Kiếm</button>
							 </div>
						</form>
					</div>
					<div class="col-xl-6 col-md-6 col-sm-6 col-xs-6">
						<form>
							<div class="form-group row">
							    <label for="inputEmail3" class="col-sm-4 col-form-label"><b>Giới Tính</b></label>
							    <div class="col-sm-8">
							      <input type="radio" value="0" name="gender"> Nam
							      <input type="radio" value="1" name="gender"> Nữ
							      <input type="radio" value="2" name="gender"> Cả hai
							    </div>
							 </div>
							 <div class="form-group row">
							    <label for="inputEmail3" class="col-sm-4 col-form-label"><b>Ngôn ngữ lập trình</b></label>
							    <div class="col-sm-8">
							      <input type="radio" value="0" name="laguage"> PHP
							      <input type="radio" value="1" name="laguage"> Java
							      <input type="radio" value="2" name="laguage"> PyThon
							    </div>
							 </div>
							 <div class="form-group row">
							    <label for="inputEmail3" class="col-sm-4 col-form-label"><b>Quốc tịch</b></label>
							    <div class="col-sm-8">
							      <select name="" class="form-control" id="quoctichlist">
							      	<option value="">--Lựa Chọn Quốc Tịch</option>
							      	<option value="">Vietnames</option>}
							      	<option value="">Chinees</option>}
							      	option
							      </select>
							    </div>
							 </div>
						</form>
					</div>
				</div>
			</div>
			<div class="list">
				<div style="padding: 10px  0px; background-color: #F7EFEF; margin-bottom: 40px;border: 1px solid #DAFAF2; ">
					<h6 class=" mb-1 ml-2">Danh sách người dùng</h6>
				</div>
				<table style="margin-top: 25px;font-size: 15px" id="table_id" class="table table-hover table-bordered">
				    <thead>
				        <tr>
				            <th>Tên Tài Khoản</th>
				            <th>Tên Thật</th>
				            <th>Email</th>
				            <th>Giới Tính</th>
				            <th>Ngôn Ngữ Lập Trình</th>
				            <th>Quốc Tịch</th>
				            <th>Action</th>
				        </tr>
				    </thead>
				    <tbody>
				    	@foreach($user as $user)
				        <tr>
				            <td>{{$user->name}}</td>
				            <td>{{$user->fullname}}</td>
				            <td>{{$user->email}}</td>
				            <td> {{$user->gender ==1 ? 'Nam' : 'Nữ' }}</td>
				            <td>{{$user->language}}</td>
				            <td>{{$user->National}}</td>
				            <td>
				            	<a onclick="return confirm('Are you sure ???')" href="" title="" class="btn btn-danger">Xóa</a>
				            </td>
				          </tr>
				         @endforeach
				        </tbody>
				</table>

			</div>
		</div>
	</div>
@endsection