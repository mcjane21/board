<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>BoardProject</title>
  <link rel="stylesheet" href="../include/assets/css/vendor.bundle.css">
  <link rel="stylesheet" href="../include/assets/css/app.bundle.css">
  <link rel="stylesheet" href="../include/assets/css/theme-a.css">
  <link rel="stylesheet" href="../include/assets/css/theme-e.css">
</head>
<body>
  <div id="app_wrapper">
    <?php include("../include/navigation.php");?> 
    <section id="content_outer_wrapper">
      <div id="content_wrapper">
        <div id="header_wrapper" class=" header-sm">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-9">
                <header id="header">
                  <h1>Agenda Folders</h1>
                </header>
              </div>
              <div class="col-xs-3" >
                <header id="header" >
                  <select id="years" name="years" class="select form-control" style="float:right;color:white;">
                    <option isabled>SELECT YEAR</option>
                    <option value=""></option>
                  </select>
                </header>
              </div>
            </div>
          </div>
        </div>
        <div id="content" class="container-fluid">  
          <div class="row">
            <div class="col-xs-12">
              <div class="card card-data-tables product-table-wrapper">
                <header class="card-heading">
                  <h2 class="card-title">Agenda Folders<center><p id="message" style="color:#ee6e73"></p></center></h2>
                    <small class="dataTables_info">Shown below are all the Agenda Folders of your chosen year.</small>
                    <div class="card-search">
                      <div id="productsTable_wrapper" class="form-group label-floating is-empty">
                        <i class="zmdi zmdi-search search-icon-left"></i>
                        <input type="text" class="form-control filter-input" placeholder="Search..." autocomplete="off">
                        <a href="javascript:void(0)" class="close-search" data-card-search="close" data-toggle="tooltip" data-placement="top" title="Close"><i class="zmdi zmdi-close"></i></a>
                      </div>
                    </div>
                    <ul class="card-actions icons right-top">
                      <li>
                        <a href="javascript:void(0)" data-card-search="open" data-toggle="tooltip" data-placement="top" data-original-title="Search">
                          <i class="zmdi zmdi-filter-list"></i>
                        </a>
                      </li>
                    </ul>
                </header>
                  <div class="card-body p-0">
                    <div class="alert alert-info m-20 hidden-md hidden-lg" role="alert">
                      <p> Heads up! You can Swipe table Left to Right on Mobile devices. </p>
                    </div>
                    <div class="table-responsive"  id="tbody">
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("../include/footer.php");?> 
    </section>
  </div>  
    <script src="../include/assets/js/vendor.bundle.js"></script>
    <script src="../include/assets/js/app.bundle.js"></script>
</body>
</html>
