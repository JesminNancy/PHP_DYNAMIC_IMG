<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <?php include 'css/style.php' ;?>
  <?php include 'link/links.php' ;?>
</head>
<body>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-11 col-11">
        <div class="table-responsive">
        <table class="table table-striped text-center table-bordered">
          <thead class="bg-dark text-white">
            <tr>
              <th class="py-3 text-white">id</th>
              <th class="py-3 text-white">username</th>
              <th class="py-3 text-white">email</th>
              <th class="py-3 text-white">degree</th>
              <th class="py-3 text-white">lang</th>
              <th class="py-3 text-white">photo</th>
            </tr>
          </thead>
          <tbody>
          
            <?php
            
            include 'dbconn.php';
            
            $selectquery = "SELECT * FROM registration";
            
            $query = mysqli_query($conn, $selectquery);
            
            $result = mysqli_fetch_array($query);
            
            while($result = mysqli_fetch_array($query)){
              ?>
              <tr>
                <td><?php echo $result['id'];?></td>
                <td><?php echo $result['username'];?></td>
                <td><?php echo $result['email'];?></td>
                <td><?php echo $result['degree'];?></td>
                <td><?php echo $result['lang'];?></td>
                <td><img src="<?php echo $result['photo'];?>" width="100" height="50" alt=""></td>
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
