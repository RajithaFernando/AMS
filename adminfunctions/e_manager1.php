<?php include('../includes/connection.php') ?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
</head>
<body>
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="../index.php"><h1 style="font: normal 28px Cookie, Arial, Helvetica, sans-serif; line-height: 40px; color:#ffff; ">aUDITORIUM</h1></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home
          <!-- <span class="sr-only">(current)</span> -->
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customer.php">Customrers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="e_manager.php">Event Manager</a>
      </li>

      <!-- Dropdown -->
      <!-- <li class="nav-item dropdown"> -->
        <!-- <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" -->
          <!-- aria-expanded="false">Dropdown</a> -->
        <!-- <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink"> -->
          <!-- <ul> -->
          <!-- <a class="dropdown-item" href="#">Action</a> -->
          <!-- <a class="dropdown-item" href="#">Another action</a> -->
          <!-- <a class="dropdown-item" href="#">Something else here</a> -->
          <!-- </ul> -->
          
        <!-- </div> -->
      <!-- </li> -->

    </ul>
    <!-- Links -->

    <!-- <form class="form-inline"> -->
      <!-- <div class="md-form my-0"> -->
        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
      <!-- </div> -->
    <!-- </form> -->
  <!-- </div> -->
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<div class="row"> 
  <div class="col-3" style="margin: 15px; float: left;">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="event_confirm.php" role="tab"
        aria-controls="v-pills-home" aria-selected="true" >event confirmation</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="report_generate.php" role="tab"
        aria-controls="v-pills-profile" aria-selected="false">Report Generations</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="create_events.php" role="tab"
        aria-controls="v-pills-messages" aria-selected="false">Create Events</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
        aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>


  <div class-col-8>

    <?php 
    if (isset($_POST['submitDeleteBtn'])) {
      $key=$_POST['refNo'];
      $check=mysqli_query($connection,"SELECT * FROM tempevents WHERE'$key'");
        if (mysqli_num_rows($check)>0) {
         $queryDelete=mysqli_query($connection,"UPDATE tempevents SET status = 'deleted' WHERE  id='$key';");
         if(! $queryDelete){
  // echo "sfdfdf";
}
         ?>

           <div class="alert alert-warning"> 
            <p>Record deleted !!</p>
          </div> 

      <?php


        }


        else{
          //give warning that record not exsit
          ?>
          <div class="alert alert-warning">
            <p>Record does not exist</p>
          </div>


        <?php }

    }
    ?>
     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">RefNo</th>
      <th scope="col">name</th>
      <th scope="col">manager_id</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
   <?php
    $sql="SELECT * FROM tempevents WHERE status='confirmed' ";
    
    $result=mysqli_query($connection,$sql);
    
    while($row=mysqli_fetch_array($result)){
  ?>
  <tbody>
    <tr>
      <form action="e_manager.php" method="post">
      <td ><?php echo $row['refNo']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['manager_id']?></td>
      <td><?php echo $row['date']?></td>

      <td>
        <input type="hidden" name="refNo" value="<?php echo $row['refNo']; ?>">
    
      
      

        <input type="submit" name="submitDeleteBtn" value="Delete" class="btn btn-info">
        </form>
      </td>
    </tr>
   <?php


 }
 ?>
  </tbody>
</table>
</div>

    
      
     
     
        
    </div>
    
    
  </div>
</div>
</body> 
</html>   
    