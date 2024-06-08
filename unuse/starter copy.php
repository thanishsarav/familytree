<?php




$ft = array(
  "unknown" => array(
    "name" => "unknown",
    "wife" => "unknown",
    "children" => array(
      "kupanan" => array(
        "name" => "Kupanan gounder",
        "wife" => "agamal",
        "children" => array(
          "palaniyandi" => array(
            "name" => "palaniyandi gounder",
            "wife" => "chinnamal",
            "children" => array(
              "sam" => array(
                "name" => "sampath",
                "wife" => "pushpalatha",
                "children" => array(
                  "sarav" => array(
                    "name" => "saravanan",
                    "wife" => "selvarani",
                    "children" => array(
                      "thanish" => array(
                        "name" => "thanish"
                      ),
                      "mohitha" => array(
                        "name" => "mohitha"
                      )
                    )
                  ),
                  "saranya" => array(
                    "name" => "saranya",
                    "husband" => "madhavan",
                    "children" => array(
                      "sanjhu" => array(
                        "name" => "sanjhu"
                      ),
                      "shriya" => array(
                        "name" => "shriya"
                      )
                    )
                  )
                )
              ),
              "nallam" => array(
                "name" => "nallamalle",
                "husband" => "karupaiaa",
                "children" => array(
                  "poogkothai" => array(
                    "name" => "poogkothai",
                    "husband" => "none"
                  ),
                  "dhevi" => array(
                    "name" => "dhevi",
                    "husband" => "none",
                    "children" => array(
                      "nekil" => array(
                        "name" => "nekil"
                      ),
                      "shriya" => array(
                        "name" => "shriya"
                      )
                    )
                  )
                )
              )
            )
          ),
          "kanthasami" => array(
            "name" => "kanthasami",
            "wife" => "rathanam",
            "children" => array(
              "indumathi" => array(
                "name" => "indumathi",
                "husband" => "none",
                "children" => array(
                  "kaviya" => array(
                    "name" => "kaviya"
                  ),
                  "shriya" => array(
                    "name" => "shriya"
                  )
                )
              ),
              "parthiban" => array(
                "name" => "parthiban",
                "husband" => "none",
                "children" => array(
                  "nithin" => array(
                    "name" => "nithin"
                  ),
                  "anisha" => array(
                    "name" => "anisha"
                  )
                )
              )
            )
          )
        )
      ),
      "marappa" => array(
        "name" => "marappa",
        "wife" => "Gandhi",
        "children" => array(
          "prekas" => array(
            "name" => "prekas",
            "wife" => "unknown"
          ),
          "unknown" => array(
            "name" => "unknown",
            "wife" => "unknown"
          )
        )
      )

    ),

  )
);


?>
<?php
function displayFamily($family, $root = false)
{
  // var_dump($family); 
  ?>
  <ul 
   <?php 
   if($root) {
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
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <style>
    ul,
    #myUL {
      list-style-type: none;
    }

    #myUL {
      margin-top: 50pt;
      margin-left: 50pt;
      padding: 0;
      font-size: large;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-weight: bolder;
      color: rgb(4, 128, 87);
    }

    .caret {
      cursor: pointer;
      -webkit-user-select: none;
      /* Safari 3.1+ */
      -moz-user-select: none;
      /* Firefox 2+ */
      -ms-user-select: none;
      /* IE 10+ */
      user-select: none;
    }

    .caret::before {
      content: "\25B6";
      color: rgb(254, 9, 9);
      display: inline-block;
      margin-right: 6px;
    }

    .caret-down::before {
      -ms-transform: rotate(90deg);
      /* IE 9 */
      -webkit-transform: rotate(90deg);
      /* Safari */
      transform: rotate(90deg);
    }

    .nested {
      display: none;
    }

    .active {
      display: block;
    }
  </style>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->


      <!-- SidebarSearch Form -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Starter Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>

              </ol>

            </div>
            <div>

            <h1>Recursive</h1>
<!-- Using recursive function -->
<?php 
displayFamily($ft, true);
?>

<h1>Using For loop</h1>
              <ul id="myUL">
                <?php foreach ($ft as $family) { ?>

                  <li><span class="caret"><?php echo $family['name']; ?></span>
                    <ul class="nested">
                      <?php foreach ($family['children'] as $f1) { ?>
                        <li><span class="caret"><?php echo $f1['name'] ?></span>
                          <ul class="nested">
                            <?php foreach ($f1['children'] as $f2) { ?>
                              <li><span class="caret"><?php echo $f2['name']; ?></span>
                                <?php
                                if (isset($f2['children'])) { ?>
                                  <ul class="nested">
                                    <?php foreach ($f2['children'] as $f3) { ?>
                                      <li><span class="caret"><?php echo $f3['name']; ?></span>
                                        <?php
                                        if (isset($f3['children'])) { ?>
                                          <ul class="nested">
                                            <?php foreach ($f3['children'] as $f4) { ?>

                                              <li><span class="caret"><?php echo $f4['name']; ?></span>
                                                <?php
                                                if (isset($f4['children'])) { ?>
                                                  <ul>
                                                    <?php foreach ($f4['children'] as $f5) { ?>

                                                      <li><span class="caret"><?php echo $f5['name']; ?>
                                                        </span>
                                                      </li>

                                                    <?php } ?>
                                                  </ul>
                                                <?php } ?>
                                              </li>

                                            <?php } ?>
                                          </ul>
                                        <?php } ?>
                                      </li>
                                    <?php } ?>
                                  </ul>

                                <?php } ?>
                              </li>
                            <?php } ?>
                          </ul>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
              </ul>

              <ul id="myUL">
                <li><span class="caret"> unknown-unknown</span>

                  <ul class="nested">
                    <li><span class="caret"> Kuppanna Gounder-angamal </span>

                      <ul class="nested">
                        <li><span class="caret"> Palaniyandi gounder-chinnamal</span>

                          <ul class="nested">
                            <li><span class="caret"> Sampath</span><a href="pushpalatha.html"
                                class="caret">pushpalatha</a>

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