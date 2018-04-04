<head><link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body{
    background-color: #525252;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
</head>
<body>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up  <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="login.php" method="post">
			    			<div class="row">
							
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" required name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" required name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" required id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" required id="password" class="form-control input-sm" placeholder="Password" >
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" required name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" onkeyup='check();'>
			    					</div>
			    				<span id="message"> </span></div>
			    			</div>
							<div class="form-group">
							<p>Select class to manage</p>
			    			<select placeholder="classes to manage" name="section" required>
							<option> cccc </option>
							<option> csa </option>
							<option> csb </option>
							<option> csd </option>
							</select></div>
			    			<input type="submit" value="Register" class="btn btn-info btn-block" >
			    		
			    		</form>
			    	</div>
			    
	    		</div>
    		</div>
    	</div>
    </div>
    <script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('password_confirmation').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
		document.getElementsByClassName("btn btn-info btn-block")[0].disabled=false;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
    document.getElementsByClassName('btn btn-info btn-block')[0].disabled=true;
  }
}
</script>
    </body>