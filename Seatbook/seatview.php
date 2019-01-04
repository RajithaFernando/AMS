<html><head>
    <title>Seats</title>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------  ---------->

    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
		.main .img-responsive {
		margin-bottom: 30px;
		}
    </style>    
</head>

<body>


<div class="container main">
    <h2 class="text-center">Seat view</h2>
    <hr>
    <div class="row">
        <div class="col-sm-1">
           
        </div>
		<?php 
		for ($j=0; $j<4; $j++){
			}
		?>
        <div class="row col-sm-10">
			<?php 
			
				for ($i=0; $i<12; $i++){
					echo '
					<div class="col-xs-1">
						'.$i.'
					</div>
					';
				}
			?>
            
            
        </div>
		<div class="col-sm-1">
           
        </div>
    </div>
</div>

</body></html>