<div class="container">
    <div class="col-8"> 
      
   <?php
    $sql="SELECT * FROM seats WHERE name='1'";
    
    $result=mysqli_query($connection,$sql);
    while($row=mysqli_fetch_array($result)){
  ?>
      <form action="view no seat.php" method="post">
        Name:<input type="text" name="name" value="<?php echo $row['name']; ?>">
        VIP:<input type="text" name="vip" value="<?php echo $row['vip']; ?>" >
        First Class:<input type="text" name="fc" value="<?php echo $row['fc']; ?>" >
        Second Class:<input type="text" name="sc" value="<?php echo $row['sc']; ?>" >
      </form>
    
   <?php


 }
    ?>
 
</div>
  

    
</div>
   
     
        













      
   <?php
   $sql="UPDATE seats
SET name='[value-1]',vip='[value-2]',fc='[value-3]',sc='[value-4]'
WHERE name=1";
    
   
      
      
   