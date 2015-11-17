<!DOCTYPE html>
<html>
<head>
	<title>Search Word</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		.searchWord{
			width: 200px;
			display: inline-block;
		}
	</style>
</head>
<body>

	<div class="container">
		<h2>Search Word Program</h2>
		<form action="searchWord" method="post">
			<input type="text" class="form-control searchWord" placeholder="Nhập đuôi từ cần tìm" name="keyword" />
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="submit" class="btn btn-primary search" value="Search">

		</form>
	</div>
		<div class="container">
			@yield('title')
            @yield('result')
        </div>
	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>