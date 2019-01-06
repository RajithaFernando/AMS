<?php include('../includes/connection.php') ?>
<?php include('../includes/session.php') ?>

<?php checkSession(); 

if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'c'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:../html/login.php?msg=' . $message);
       exit();
       }
       
       ?>


<?php 
if (isset($_POST['card']) || isset($_POST['sub']))
	{
		$userID = $_SESSION['id'];
		$Date = date("Y-m-d");
		$eventRef = $_SESSION['event'] ;
		$seatID = "1";
		$ticketValue = $_POST['ticketValue'] ;
		$Catagory = $_POST['Catagory'] ;
		$count = $_POST['count'];

		$val = $_POST['val'];
		$_SESSION['paid'] = "Not Paied"  ;
	}

?>


<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
	</style>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
	<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	</head>
	<style>
		/* Padding - just for asthetics on Bootsnipp.com */
		body { margin-top:20px; }

		/* CSS for Credit Card Payment form */
		.credit-card-box .panel-title {
			display: inline;
			font-weight: bold;
		}
		.credit-card-box .form-control.error {
			border-color: red;
			outline: 0;
			box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
		}
		.credit-card-box label.error {
		  font-weight: bold;
		  color: red;
		  padding: 2px 8px;
		  margin-top: 2px;
		}
		.credit-card-box .payment-errors {
		  font-weight: bold;
		  color: red;
		  padding: 2px 8px;
		  margin-top: 2px;
		}
		.credit-card-box label {
			display: block;
		}
		/* The old "center div vertically" hack */
		.credit-card-box .display-table {
			display: table;
		}
		.credit-card-box .display-tr {
			display: table-row;
		}
		.credit-card-box .display-td {
			display: table-cell;
			vertical-align: middle;
			width: 50%;
		}
		/* Just looks nicer */
		.credit-card-box .panel-heading img {
			min-width: 180px;
		}
		
		.anchor {
			text-decoration: none !important ;
		
		}
	
	
	
	</style>

<body>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
		<h1 class="display-4">Payment</h1>
		</div>
	</div>
    <div class="row">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-4">
        
        
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
				
				
				
				
				
				
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
					
						<div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">Amount</label>
                                    <div class="">
                                       
										<input type="text" class="form-control" id="validationTooltipUsername" placeholder="" aria-describedby="validationTooltipUsernamePrepend" readonly value="<?php echo $_POST['val'] ;?>">
										<!--
                                        <span class="input-group-addon"><i class="fa  fa-dollar-sign"></i></span>
										-->
								   </div>
                                </div>                            
                            </div>
                        </div>
					
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12">
                            	
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                    <form action="card.php"  method="post" >
                            		<input type="hidden" id="custId" name="Catagory" value="<?php echo $Catagory; ?>">
			                        <input type="hidden" id="custId" name="ticketValue" value="<?php echo $pr; ?>">
			                        <input type="hidden" id="custId" name="count" value="<?php echo $count; ?>">
                          			<input type="hidden" id="custId" name="val" value="<?php echo $val ; ?>">
            						<?php 

            						if (!(isset($_POST['sub'])))
            						{
            							echo '<button type="submit" name="sub" id="cust" class="subscribe btn btn-success btn-lg btn-block " onclick="myFunction()">Start Subscription</button>' ;
            						}


            						?>

                                	
                            	</form>
                </div>
            </div> 



            <?php 
           // echo "sssssssssssssssssss";

            if (isset($_POST['sub'])){
            	// echo "222222222222222";


            		$userID = $_SESSION['id'];
					$Date = date("Y-m-d");
					$eventRef = $_SESSION['event'] ;
					$seatID = "1";

					$ticketValue = $_POST['ticketValue'] ;
					$Catagory = $_POST['Catagory'] ;
					$count = $_POST['count'];


					// echo $userID;
					// echo $Date;
					// echo $eventRef;
					// echo $Catagory;
					// echo $count;
					
            	$Query = "INSERT INTO sales ( userID , Date , eventRef , seatID , ticketValue , Catagory) VALUES ('$userID', '$Date', '$eventRef', '$seatID', '$ticketValue', '$Catagory')";
            
	            for ($i=0;$i<$count; $i ++){
	            	$run = mysqli_query($connection,$Query);
	            	$_SESSION['paid'] = "paid";
	            	}



	            	
            }


            ?>          
            <!-- CREDIT CARD FORM ENDS HERE -->
            
            
        </div>            
        
        
		<div class="row">							<?php if (isset($_POST['sub']))
															{  echo '<div class="alert alert-success" role="alert" ><h4 class="alert-heading">Well done!</h4><p>you have successfully reserved Seats. We will Notify you with an email soon. Please Use Your Reference Code in the ticket Stall on the event Day</p><hr><p class="mb-0"> AMS© | Auditorium Management System  </p></div><div><a href="../html/index.php" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Go Back to Home Page !</a></div>';
												; } 
												
													?> 
												
												
												</div>
											</div>
            
       
        
    </div>
</div>
</body>
<script>
	var $form = $('#payment-form');
		$form.find('.subscribe').on('click', payWithStripe);

		/* If you're using Stripe for payments */
		function payWithStripe(e) {
			e.preventDefault();
			
			/* Abort if invalid form data */
			if (!validator.form()) {
				return;
			}

			/* Visual feedback */
			$form.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);

			var PublishableKey = 'pk_test_6pRNASCoBOKtIshFeQd4XMUh'; // Replace with your API publishable key
			Stripe.setPublishableKey(PublishableKey);
			
			/* Create token */
			var expiry = $form.find('[name=cardExpiry]').payment('cardExpiryVal');
			var ccData = {
				number: $form.find('[name=cardNumber]').val().replace(/\s/g,''),
				cvc: $form.find('[name=cardCVC]').val(),
				exp_month: expiry.month, 
				exp_year: expiry.year
			};
			
			Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
				if (response.error) {
					/* Visual feedback */
					$form.find('.subscribe').html('Try again').prop('disabled', false);
					/* Show Stripe errors on the form */
					$form.find('.payment-errors').text(response.error.message);
					$form.find('.payment-errors').closest('.row').show();
				} else {
					/* Visual feedback */
					$form.find('.subscribe').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
					/* Hide Stripe errors on the form */
					$form.find('.payment-errors').closest('.row').hide();
					$form.find('.payment-errors').text("");
					// response contains id and card, which contains additional card details            
					console.log(response.id);
					console.log(response.card);
					var token = response.id;
					// AJAX - you would send 'token' to your server here.
					$.post('/account/stripe_card_token', {
							token: token
						})
						// Assign handlers immediately after making the request,
						.done(function(data, textStatus, jqXHR) {
							$form.find('.subscribe').html('Payment successful <i class="fa fa-check"></i>');
						})
						.fail(function(jqXHR, textStatus, errorThrown) {
							$form.find('.subscribe').html('There was a problem').removeClass('success').addClass('error');
							$form.find('.payment-errors').text('Payment successful !');
							$form.find('.payment-errors').closest('.row').show();
						});
				}
			});
		}
		/* Fancy restrictive input formatting via jQuery.payment library*/
		$('input[name=cardNumber]').payment('formatCardNumber');
		$('input[name=cardCVC]').payment('formatCardCVC');
		$('input[name=cardExpiry').payment('formatCardExpiry');

		/* Form validation using Stripe client-side validation helpers */
		jQuery.validator.addMethod("cardNumber", function(value, element) {
			return this.optional(element) || Stripe.card.validateCardNumber(value);
		}, "Please specify a valid credit card number.");

		jQuery.validator.addMethod("cardExpiry", function(value, element) {    
			/* Parsing month/year uses jQuery.payment library */
			value = $.payment.cardExpiryVal(value);
			return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
		}, "Invalid expiration date.");

		jQuery.validator.addMethod("cardCVC", function(value, element) {
			return this.optional(element) || Stripe.card.validateCVC(value);
		}, "Invalid CVC.");

		validator = $form.validate({
			rules: {
				cardNumber: {
					required: true,
					cardNumber: true            
				},
				cardExpiry: {
					required: true,
					cardExpiry: true
				},
				cardCVC: {
					required: true,
					cardCVC: true
				}
			},
			highlight: function(element) {
				$(element).closest('.form-control').removeClass('success').addClass('error');
			},
			unhighlight: function(element) {
				$(element).closest('.form-control').removeClass('error').addClass('success');
			},
			errorPlacement: function(error, element) {
				$(element).closest('.form-group').append(error);
			}
		});

		paymentFormReady = function() {
			if ($form.find('[name=cardNumber]').hasClass("success") &&
				$form.find('[name=cardExpiry]').hasClass("success") &&
				$form.find('[name=cardCVC]').val().length > 1) {
				return true;
			} else {
				return false;
			}
		}

		$form.find('.subscribe').prop('disabled', true);
		var readyInterval = setInterval(function() {
			if (paymentFormReady()) {
				$form.find('.subscribe').prop('disabled', false);
				clearInterval(readyInterval);
			}
		}, 250);


function myFunction() {
  document.getElementById("demo").innerHTML = '<div class="alert alert-success" role="alert" ><h4 class="alert-heading">Well done!</h4><p>you have successfully reserved Seats. We will Notify you with an email soon. Please Use Your Reference Code in the ticket Stall on the event Day</p><hr><p class="mb-0"> AMS© | Auditorium Management System  </p></div><div><a href="../html/index.php" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Go Back to Home Page !</a></div>';
}
</script>





</html>