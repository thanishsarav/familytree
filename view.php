<?php include ("header.php"); ?>
<?php
$sno = $_GET['id'];


// sql to delete a record
$sql = "SELECT *  FROM family WHERE id = '$sno' ;";
$result = mysqli_query($dbconn, $sql);
$count = mysqli_num_rows($result);
$row = null;
if ($count > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<?php
if (isset($_POST['submit'])) {
    $success = false;
    $user = $_POST['father'];
    $password = $_POST['mother'];
    
    $sql = "UPDATE family set father_id = '$user' ,mother_id = '$password' WHERE id = '$sno'; ";
    if (mysqli_query($dbconn, $sql)) {
        header("Location:familymembers.php");
    } else {
        echo "Error updating record: " . mysqli_error($dbconn);
    }

 
}
?>
<!-- Navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="container-fluid">
        <div class="row mb-1">
            <div class="col-sm-12 container-fluid">
                <h1 class="m-0 p-3 mr-0 ">View Member
                    <a href="addfamilymembers.php?id=<?php echo $sno; ?>" class="btn btn-primary">Edit</a>
                    <a href="addfamilymembers.php?id=<?php echo $sno; ?>&action=addchild&gender=<?php echo $row['gender'] ?>" class="btn btn-primary">Add Child</a>
                    <a href="addfamilymembers.php?id=<?php echo $sno; ?>&action=addmother" class="btn btn-primary">Add mother</a>
                    <a href="addfamilymembers.php?id=<?php echo $sno; ?>&action=addfather" class="btn btn-primary">Add father</a></div>   
                </h1>


                
            </div><!-- /.col -->
           

        </div>
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="container">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <?php
                                if ($row) {
                                  
                                    ?>
                                    <tr>
                                        <td>FULLNAME:</td>
                                        <td><?php echo $row['name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Contact:</td>
                                        <td><?php echo $row['phone_number'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Location:</td>
                                        <td><?php echo $row['location'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>KULAM:</td>
                                        <td><?php echo $row['kulam'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>KOVIEL:</td>
                                        <td><?php echo $row['koviel'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>GENDER:</td>
                                        <td><?php echo $row['gender'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>FATHER-NAME:</td>
                                        <td>
                                            <?php

                                            if ($row['father_id']) {
                                                ?>
                                                <a href="view.php?id=<?php echo $row['father_id'] ?>">
                                                    <?php echo $row['father_name'] ?> </a>
                                            <?php } else { ?>
                                                <?php echo $row['father_name'] ?>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MOTHER-NAME:</td>
                                        <td> <?php

                                        if ($row['mother_id']) {
                                            ?>
                                                <a href="view.php?id=<?php echo $row['mother_id'] ?>">
                                                    <?php echo $row['mother_name'] ?> </a>
                                            <?php } else { ?>
                                                <?php echo $row['mother_name'] ?>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> <a href="familymembers.php" class="btn btn-primary">Go back</a></h3>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-5">
                    <div class="card p-3">
                        <!-- /.card-header -->
                        <div class="container">
                            <div>
                                <h1>Link Parents</h1>

                            </div>

                            <div>

                                <form action="" method="post">
                                    <label>Father</label>

                                    <!-- select -->
                                    <div class="form-group">
                                        <?php
                                        $sql = " SELECT * from family where gender = 'male' ";

                                        //sql query data storing
                                        $result = mysqli_query($dbconn, $sql);
                                        if (mysqli_num_rows($result) > 0) { ?>
                                            <select class="form-control" name="father">

                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                                    <option value="none">none</option>
                                                <?php } ?>
                                            </select>
                                        <?php } ?>
                                    </div>
                            </div>


                            <label>Mother</label>

                            <!-- select -->
                            <div class="form-group">
                                <?php
                                $sql = " SELECT * from family where gender = 'female' ";

                                //sql query data storing
                                $result = mysqli_query($dbconn, $sql);
                                if (mysqli_num_rows($result) > 0) { ?>
                                    <select class="form-control" name="mother">

                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                            <option value="none">none</option>
                                        <?php } ?>
                                    </select>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-4 p-3 ">
                            <button type="submit" name="submit" class="btn btn-danger btn-block">SignIn</button>
                        </div>
                        </form>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Children Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <tbody>
                                    <?php
                                     $sql = "SELECT * from family where mother_id = '$sno ' or father_id = '$sno ' ;";
                                     $result = mysqli_query($dbconn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><a href="view.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></td>
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>


        </div>
    </div>

    </div>

    </div><!-- /.container-fluid -->
    </div>
<?php }


include 'footer.php';

?>
