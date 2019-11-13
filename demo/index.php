<!DOCTYPE html>

<html>
<head>
    
<meta charset="utf-8">
    
    
    
<?php include 'header.php'; ?>   
    
<?php include 'connection.php'; ?>    

<title> Demo product page </title>     
    
<link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

<script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" > </script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"> </script>  
    
<link rel= "ext/stylesheet" href= "style.css";  
    
      </head>   
    


<body>
    
    
<div class="jumbotron" img src= "banner.jpg">
    <h1 class="display-3">Hello, world!</h1>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name </th>
      <th scope="col">Address </th>
    </tr>
  </thead>
  <tbody>
       <?php 
        $query1= "SELECT * from user_table";
        $read=$mysqli-> query ($query1);
        foreach ($read as $row ) {
        ?>
    <tr>
      <td><?php echo $row ['id'];?> </td>
      <td><?php echo $row ['first_name'];?> </td>
      <td><?php echo $row ['last_name'];?> </td>
      <td><?php echo $row ['address'];?> </td>
      
    <?php } ?> 
    </tr>
  </tbody>
</table> 

</body>



</html>