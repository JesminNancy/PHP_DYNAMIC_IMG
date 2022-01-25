<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dynamic Image</title>
  <?php include 'css/style.php' ;?>
  <?php include 'link/links.php' ;?>
</head>
<body>

<div class="container register">
    <div class="row">
    
      <div class="col-md-3 register-left">
        <img src="img/" alt="">  
        <h3>Welcome</h3>
        <p>Please fill all the details carefully.This form can change your life.</p>
        <a href="display.php">Check Form</a><br>
      </div>
      
      <div class="col-md-9">
        <div class="register-right">
          <div class="tab-content" id="mytabcontent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            
            <h3 class="register-heading">Apply for web developer post</h3>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
              <div class="row register-form">
                <div class="col-md-6">
                
                <div class="form-group">
                   <input type="text" class="form-control" name="username" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                   <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                   <input type="file" class="form-control" name="photo">
                </div>
                  
                </div>
                
                <div class="col-md-6">
                <div class="form-group">
                   <input type="text" class="form-control" name="degree" placeholder="Enter your qualification" required>
                </div>
                <div class="form-group">
                   <input type="text" class="form-control" name="lang" placeholder="Enter your lanagaue" required>
                </div>
                <div class="form-group">
                   <input type="submit" class="btnregister" name="submit" value="Register">
                </div>
                
                </div>
                
              </div>
            </form>
          </div>  
          </div>
        </div>
      </div>
    </div>
  
</div>

</body>
</html>