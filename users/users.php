<?php
    include ("../header.php");
    // include ("sider.php");
    ?><?php


// sql to delete a record
$sql = "SELECT id, username, password  FROM users ";
$result = mysqli_query($dbconn,$sql);
$count = mysqli_num_rows($result);

?>


    <!-- Navbar -->
   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 container-fluid">
              <h1 class="m-0 p-3 ml-1 ">Starter Page
              <a href="adduser.php" class="btn btn-primary">Add</a></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div>
           
            <div class="row">
              <div class="col-12">
               <div class="card">
              <!-- /.card-header -->
                  <div class="container">
                 <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Password</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                 
                  <tbody>
                  <?php
                    if ($count > 0) { 
                      while($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                      <td><?php echo  $row["id"]?></td>
                      <td><?php echo  $row["username"] ?></td>
                      <td><?php echo  $row["password"]?></td>
                      <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                      <td><a href="delete.php?id=<?php echo $row['id']; ?> ">Delete</a></td>
                    </tr>
                    <?php }}
          mysqli_close($dbconn);
          ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <?php

include '../footer.php';

?>