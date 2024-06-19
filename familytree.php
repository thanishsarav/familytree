<?php
    include ("header.php");
    // include ("sider.php");
    ?><?php
include "data.php";
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

    <!-- Navbar -->
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="m-0">FAMILY TREE</h1>
            </div><!-- /.col -->
           
            <div class="recursive" >
            <div>
            <ul id="myUL">
                <li><span class="caret"> unknown-unknown</span>

                    <ul class="nested">
                        <li><span class="caret"> Kuppanna Gounder-angamal </span>

                            <ul class="nested">
                                <li><span class="caret"> Palaniyandi gounder-chinnamal</span>

                                    <ul class="nested">
                                        <li><span class="caret"> Sampath-</span><a href="pushpalatha.html" class="caret">pushpalatha</a>

                                            <ul class="nested">
                                                <li><span class="caret"> saravanan-selvarani</span>

                                                    <ul class="nested">
                                                        <li><span class="caret">thanish</span></li>
                                                        <li><span class="caret"> mohitha</span></li>
                                                    </ul>
                                                </li>
                                                <li><span class="caret"> Saranya-madhavan</span>

                                                    <ul class="nested">
                                                        <li><span class="caret"> sanjhu</span></li>
                                                        <li><span class="caret"> shriya</span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><span class="caret"> Nallammal-karupaiaa</span>

                                            <ul class="nested">
                                                <li><span class="caret"> poogkothai</span></li>
                                                <li><span class="caret"> dhevi-none</span>

                                                    <ul class="nested">
                                                        <li><span class="caret"> nekil</span></li>
                                                        <li><span class="caret"> shriya</span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li><span class="caret"> Kanthasami-rathanam</span>

                                    <ul class="nested">
                                        <li><span class="caret"> indumathi</span>

                                            <ul class="nested">
                                                <li><span class="caret">kaviya</span></li>
                                                <li><span class="caret"> shriya</span></li>
                                            </ul>
                                        </li>
                                        <li><span class="caret"> parthiban</span>

                                            <ul class="nested">
                                                <li><span class="caret"> nithin</span></li>
                                                <li><span class="caret">anisha</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><span class="caret"> Marappa Gounder-Gandhi</span>

                            <ul class="nested">
                                <li><span class="caret"> prekas</span></li>
                                <li><span class="caret"> unknown</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
            </div>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->


  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- Default to the left -->

  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
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

</body>

</html>