<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Bootstrap 4 Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	</head>
	<body>

		<div class="container">
			<form id="m_MyForm">
				<div id="a">Hello</div>
				<div id="b">Mahima</div>
				<button type="submit" name="submit" class="btn btn-success">Submit</button>
			</form>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			//(function)(jQuery);
			(function(){
				//alert('ok');
				//$(selector).action();
				$('#m_MyForm').submit(function(e){
					e.preventDefault();
					var x=$("#a").html("Mahima");
					var y=$("#b").html("Hello");
				});
				
			})(jQuery);
		
		</script>
	</body>
</html>