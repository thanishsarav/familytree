<?php
//ini_set('memory_limit', '256M');
include ("header.php");
// include ("sider.php");
?>
<?php
include "data.php";

getFamilyTree(13);
?>
<?php
function displayFamily($family, $root = false)
{
  ?>
  <ul <?php
  if ($root) {
    echo "id='myUL'";
  } else {
    echo 'class="nested"';
  }
  ?>>
    <?php foreach ($family as $f) { ?>
      <li><span class="caret"> <?php
      // var_dump($f); die;
      echo $f['name'] ?></span>
        <?php if (isset($f['children'])) {
          displayFamily($f['children']);
        }
        ?>
      </li>
    <?php } ?>
  </ul>
  <?php
}
?>
<?php
function getFamilyTree($id)
{
  global $dbconn, $ft;

  $root = getRoot($id);
  // echo "<br>Root: $root <br>";
  $sql = "SELECT *  FROM family where id = $root ;";
  $result = mysqli_query($dbconn, $sql);
  $count = mysqli_num_rows($result);
  $row = null;
  $tree= [];
  if ($count > 0) {
    $row = mysqli_fetch_assoc($result);
    $tree[] = array(
      "self" => $row,
      'name' => $row['name'],
      'wife' => 'Not Available',
      'children' => getchildren($root)
    );
   
    // var_dump($tree);
 
    // var_dump($ft);
    $ft = $tree;


  }





  // var_dump($children);

}
function getFather($id)
{
  global $dbconn;
  $sql = "SELECT *  FROM family where id= '$id'";
  $result = mysqli_query($dbconn, $sql);
  $count = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);
  $father = $row['father_id'];
  // $mother = $row['mother_id'];
  $sql = "SELECT *  FROM family where id= '$father' ";
  $result = mysqli_query($dbconn, $sql);

  $row = mysqli_fetch_assoc($result);

  return $row;

}
function getchildren($id)
{
  global $dbconn;
  $sql = "SELECT *  FROM family where  father_id = $id or mother_id = $id ;";
  $result = mysqli_query($dbconn, $sql);
  $children = [];
  $row = mysqli_fetch_assoc($result);

  // if (!$row) {
  //   echo "<br><br>Getting child for id $id <br><br>";
  //   var_dump($row);
  // }
  while ($row) {
    // echo "<br><br>Getting child for id $id <br><br>";
    // var_dump($row);
    $child = array(
      "self" => $row,
      'name' => $row['name'],
      'wife' => 'Not Available',
    );

    $grandchildren = getchildren($row['id']);
    if (count($grandchildren) > 0) {
      $child['children'] = $grandchildren;
    }
    $children[] = $child;
    $row = mysqli_fetch_assoc($result);
  }

  return $children;


}
function getRoot($id)
{
  global $dbconn;
  $father = getFather($id);
  $root = $id;
  while ($father) {
    $root = $father['id'];
    $father = getFather($father['id']);
  }
  return $root;

}

?>
<!-- Navbar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-sm-12">
          <h1 class="m-0">Starter Page</h1>
        </div><!-- /.col -->

        <div class="recursive">
          <?php
          displayFamily($ft, true);

          ?>
        </div><br>

      </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.container-fluid -->

<script>
  var toggler = document.getElementsByClassName("caret");
  var i;

  for (i = 0; i < toggler.length; i++) {
    toggler[i].addEventListener("click", function () {
      this.parentElement.querySelector(".nested").classList.toggle("active");
      this.classList.toggle("caret-down");
    });
  }
</script>
<?php

include 'footer.php';

?>