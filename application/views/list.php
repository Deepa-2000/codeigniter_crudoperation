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
    <div class="container" style="padding-top: 10px;">
        <div class="row">
            <div class="col-md-12">
                <?php
                $success= $this->session->userdata('success');
                if ($success != "") {
                ?>
                <div class="alert alert-success"><?php echo $success;?></div>
                <?php } ?>
                <?php
                $failure= $this->session->userdata('failure');
                if ($failure != "") {
                ?>
                <div class="alert alert-danger"><?php echo $failure;?></div>
                <?php } ?>
            </div>
            <div class="col-md-7"><h3>List of Users</h3></div>
            <div class="col-md-5 text-right">
                <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th width="60">Edit</th>
                        <th width="60">Delete</th>
                    </tr>
                    <?php if (!empty($users)) { foreach($users as $user){ ?>
                    <tr>
                        <td><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><a href="<?php echo base_url('index.php/user/edit/'.$user['user_id']); ?>" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form method="DELETE" action="<?php echo base_url('index.php/user/delete/'.$user['user_id']);?>">
                                <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>

                        </td>
                    </tr>
                    <?php } }else{ ?>
                        <tr>
                            <td colspan="5">Records not found</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>