<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Crud_Operation</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD APPLICATION</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <h1 class="container mt-3">Update User</h1>
    <div class="container mt-3">
        <form action="<?php echo base_url('index.php/user/update/'); ?>" name="createUser" method="post">
            <div class="col-md-6 mb-3">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo $user['name']; ?>">  
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control"value="<?php //echo set_value('email',$user['email']); ?>">
              <?php //echo form_error('email'); ?>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
        </form>
    </div>
</body>
</html>
