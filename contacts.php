<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/custome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    
   
     <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }

       font-family: 'Roboto', sans-serif;

        body {
        background: #D9B280;
        font-family: "Roboto", sans-serif;
        }


        .container {
        background: #FFFFFF;
        width: 900px;
        height: 650px;
        margin: 5% auto;
        position: relative;
        }
        .container .map {
        width: 45%;
        float: left;
        }
        .container .contact-form {
        width: 53%;
        margin-left: 2%;
        float: left;
        }
        .container .contact-form .title {
        font-size: 2.5em;
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        color: #242424;
        margin: 5% 8%;
        }
        .container .contact-form .subtitle {
        font-size: 1.2em;
        font-weight: 400;
        margin: 0 4% 5% 8%;
        }
        .container .contact-form input,
        .container .contact-form textarea {
        width: 330px;
        padding: 3%;
        margin: 2% 8%;
        color: #242424;
        border: 1px solid #B7B7B7;
        }
        .container .contact-form input::placeholder,
        .container .contact-form textarea::placeholder {
        color: #242424;
        }
        .container .contact-form .btn-send {
        background: #A383C9;
        width: 180px;
        height: 60px;
        color: #FFFFFF;
        font-weight: 700;
        margin: 2% 8%;
        border: none;
        }

        .font{
            font-family: 'Montserrat', sans-serif;
        }
        body{
            overflow-x: hidden;
        }
    </style>

    
</head>
<body>
    <div style="margin-top:0px;margin-top:-20px">
         <?php include('includes/hedder.php') ?>
    </div>
   
        
	<!--The div element for the map -->
    <div id="map"></div>
  
   
   
   	
    <div class="container" style="">

        <div class="row" style="width:100%">
            <div class="col-md-6">
                <div class="contact-form">
            <h1 class="title">Contact Us</h1>
            <h2 class="subtitle">We are here assist you.</h2>
            <form action="">
                <input type="text" name="name" placeholder="Your Name" />
                <input type="email" name="e-mail" placeholder="Your E-mail Adress" />
                <input type="tel" name="phone" placeholder="Your Phone Number"/>
                <textarea name="text" id="" rows="8" placeholder="Your Message"></textarea>
                <button class="btn-send">Get a Call Back</button>
            </form>

                </div>
            
            </div>
            <div class="col-md-6" style="font-size:12pt ">
                <h5 style="color: black">contact line:</h5>
                <span class="fa fa-phone" aria-hidden="true" style="color: grey">   +944122554412,+944522261723</span>
                <span class="fa fa-phone" aria-hidden="true" style="color: grey">+94111234567</span>
                <br><br>
                <h5 style="color: black">Booking Hotline:</h5>
                
                
                <span class="fa fa-phone" aria-hidden="true" style="color: grey">+94111345678</span>
                <br><br>
                <span class="fa fa-envelope" aria-hidden="true" style="color: grey">&nbsp;&nbsp;Email <a href="nilamjayasundara@gmail.com">nilamjayasundara@gmail.com</span>
                <br><br>
                <span class="fas fa-address-card" style="color: grey">&nbsp;&nbsp;Address:University of colombo,colombo8,Sri Lanka.</span>
                <br><br>
                <h6 style="color: grey">Fax:<span class="fa fa-phone" aria-hidden="true" style="color: grey">+94112398764</span>
                </h6>
                <h6 style="color: grey">Cheif Manager:<span class="fa fa-phone" aria-hidden="true" style="color: grey">+94115467890</span>
                </h6>

            </div>

        </div>
        
    </div>



   </div>
	
  
</div>

    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat:6.902418, lng: 79.861487};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIr_1mumk0EcpdtP_hT0UCMVTX4b7xy0s&callback=initMap">
    </script> 
     <div style="margin-bottom: :0px;margin-bottom: :-20px">
         <?php include('includes/footer.html') ?>
    </div>
</body>
</html>