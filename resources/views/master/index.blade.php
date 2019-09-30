@include('master.header')
<body>
	
	@yield('content')
	

	<!-- MDBootstrap Datatables  -->
	<!-- <script type="text/javascript" src="css/js/addons/datatables.min.js"></script> -->
	
	@yield('script')
	<script type="text/javascript" src="https://cdn.datatables.net/w/dt/dt-1.10.18/datatables.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
	<script type="text/javascript" src="css/jquery.dataTables.min.js"></script>
	<script>
	    $(document).ready(function () {
	        $('#table_id').DataTable();
	    });
	</script>
</body>
</html>