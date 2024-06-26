<?php
include ("header.php");
// include ("sider.php");
?>
<?php

// sql to delete a record
$sql = "SELECT *  FROM family ";
$result = mysqli_query($dbconn, $sql);
$count = mysqli_num_rows($result);

?>


<!-- Navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 container-fluid">
          <h1 class="m-0 p-3 ml-1 ">Members Page
            <a href="addfamilymembers.php" class="btn btn-primary">Add</a>
          </h1>
        </div><!-- /.col -->
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card ">
              <!-- /.card-header -->
              <div class="container col-sm-12">
                <table class="table table-hover text-nowrap">
                  <caption>Total number of records is <?php echo $count; ?></caption>
                  <thead>
                    <tr>
                      <th>S.NO</th>
                      <th>NAME</th>
                      <th>PHONE NUMBER</th>
                      <th>LOCATION</th>
                      <th>KULAM</th>
                      <th>KOVIL</th>
                      <th>GENDER</th>
                      <th>VIEW</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    if ($count > 0) {
                      while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td><?php echo $row["id"] ?></td>
                          <td><?php echo $row["name"] ?></td>
                          <td><?php echo $row["phone_number"] ?></td>
                          <td><?php echo $row["location"] ?></td>
                          <td><?php echo $row["kulam"] ?></td>
                          <td><?php echo $row["koviel"] ?></td>
                          <td><?php echo $row["gender"] ?></td>
                          <td><a href="view.php?id=<?php echo $row['id']; ?>">
                              <div class="input-group-append">
                                <div class="input-group-text-sm">
                                  <span class="fas fa-envelope">View</span>
                                </div>
                              </div>
                            </a></td>
                          <td><a href="editfamilymembers.php?id=<?php echo $row['id']; ?>">
                              <div class="input-group-append">
                                <div class="input-group-text-sm">
                                  <span class="fas fa-envelope">Edit</span>
                                </div>
                              </div>
                            </a></td>
                          <td><a href="deletefamilymembers.php?id=<?php echo $row['id']; ?> ">
                              <div class="input-group-append">
                                <div class="input-group-text-sm">
                                  <span class="fas fa-lock">Delete</span>
                                </div>
                              </div>
                            </a></td>
                        </tr>
                      <?php }
                    }

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
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
<?php

include 'footer.php';

?>