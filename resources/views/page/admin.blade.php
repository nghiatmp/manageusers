@extends('master.index')
@section('title')
	admin
@endsection
@section('content')
	<div class="container">
		<div class="admmincontent">
			<h2 class="text-center mt-3 mb-3">Trang chủ Admin</h2>
					<ul>
						<li>
							<a href="{{route('admin.list')}}" title="">Danh sách người dùng</a>
						</li>
						<li>
							<a href="{{route(('admin.adduser'))}}" title="">Thêm mới người dùng</a>
						</li>
					</ul>		
			</div>
	</div>
@endsection