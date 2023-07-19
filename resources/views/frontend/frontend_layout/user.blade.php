@extends('layouts.main')

@section('main-container')
<title>User Information</title>

<script src="../frontend/js/jquery.user.js"></script>
<!-- Custom Theme files -->
<link href="{{asset('frontend/css/user.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Favicon -->
    
    <link rel="shortcut icon" type="image/png" href="{{asset('frontend/img/images/logo.png')}}">

<!-- //for-mobile-apps -->
<!--Google Fonts-->
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
				<img src="frontend/img/images/Bakerz_logo6_edit-removebg-preview.png" alt="">

		    <h4> User Information </h4>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="#" method="post">
						<label for="">Full name</label>
						<input type="text"  value="" name="name"><br>
						<label for="">Email</label><br>
						<input type="email"  value="" name="email"><br>
						<label for="">Number phone</label><br>
						<input type="text"  value="" name="nurberphone" ><br>
						<label for="">Birthday</label> <br>
						<input type="text"  value="" name="birthday"><br>
					</form>	
					<div class="header-left-top">
		
					</div>
						
				</div>
				</div>
			  
			</div>
		</div>
</div>
<!--header end here-->

<!--footer end here-->
</body>
</html>
@endsection
