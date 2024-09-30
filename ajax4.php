<!DOCTYPE html>
<html>

<head>
	<style>
	.container {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}
	
	h1 {
		color: green;
	}
	
	h3 {
		text-align: center;
	}
	
	input,
	span {
		margin-top: 20px;
	}
	</style>
</head>

<body>
	<div>
		<h1 class="container">
			GeeksforGeeks
		</h1>
		<h3>Submitting the form without page refresh</h3>
	</div>
	<form action="submit-form.php" method="post" class="form">
		<div class="container">
			<input placeholder=" Full Name" type="text" name="name" />
			<input placeholder="Job" type="text" name="job" />
            
			<input type="submit" />
		</div>
		<span class="container"></span>
	</form>




	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script>

	
	<script type="text/javascript">
	$(document).ready(function() {
		$('form').on('submit', function(event) {
		event.preventDefault();
		
			// It returns a array of object
			let userinfo = $(this).serializeArray();
			let user = {};
			userinfo.forEach((value) => {
				
				// Dynamically create an object
				user[value.name] = value.value;
			});
			let url = "https://reqres.in/api/users";
			$.ajax({
				method: "POST",
				url: 'submit-form.php',
				data: user
			}).done(function(msg) {
				
				// When the request is successful
				$('span').text('user is successfully submit form ');
			}).fail(function(err, textstatus, error) {
				$('span').text(textstatus);
				
			}); 
		});
	});
	
	</script>
</body>

</html>
