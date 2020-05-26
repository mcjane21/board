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
      <div class="col-xs-12">
        <header id="header">
        <h1>Incoming Proposals</h1>
        </header>
      </div>
      </div>
    </div>
    </div>
    <div id="content" class="container-fluid m-t-0">
    <div class="row">
      <div class="col-xs-12">
      <div id="txtHint">
        <div class="card card-data-tables product-table-wrapper">
        <header class="card-heading">
          <h2 class="card-title">Incoming Proposals<center><p id="message" style="color:#ee6e73"></p></center></h2>
          <small class="dataTables_info">Listed below are all incoming proposals. Select and click title of proposal to preview and update details.</small>
          <div class="card-search">
          <div id="productsTable_wrapper" class="form-group label-floating is-empty">
            <i class="zmdi zmdi-search search-icon-left"></i>
            <input type="text" class="form-control filter-input" placeholder="Filter Products..." autocomplete="off">
            <a href="javascript:void(0)" class="close-search" data-card-search="close" data-toggle="tooltip" data-placement="top" title="Close"><i class="zmdi zmdi-close"></i></a>
          </div>
          </div>
          <ul class="card-actions icons right-top">
          <li>
            <a href="javascript:void(0)" data-card-search="open" data-toggle="tooltip" data-placement="top" data-original-title="Filter Products">
            <i class="zmdi zmdi-filter-list"></i>
            </a>
          </li>
          <li class="dropdown" data-toggle="tooltip" data-placement="top" data-original-title="Show Entries">
            <a href="javascript:void(0)" data-toggle="dropdown">
            <i class="zmdi zmdi-more-vert"></i>
            </a>
            <div id="dataTablesLength">
            </div>
          </li>
          <li>
            <a href="logofincomingproposals.php" data-toggle="tooltip" data-placement="top" data-original-title="Generate Report">
            <i class="zmdi zmdi-print"></i>
            </a>
          </li>
          </ul>
        </header>
        <div class="card-body p-0" >
          <ul class="nav nav-pills nav-pills-primary " role="tablist">
          <li id="tabTable" value="0" class="active"  style="margin-left:2%;">
                        <a href="#" role="tab" data-toggle="tab">Pending</a>
                    </li>
          <li id="tabTable" value="1">
                        <a href="#" role="tab" data-toggle="tab">Returned</a>
          </li>
                    <li id="tabTable" value="2">
                        <a href="#" role="tab" data-toggle="tab">Needs Revision</a>
          </li>
          <li id="tabTable" value="3">
                        <a href="#" role="tab" data-toggle="tab">Accepted</a>
          </li>
          </ul>
          <div class="alert alert-info m-20 hidden-md hidden-lg" role="alert">
          <p>Heads up! You can Swipe table Left to Right on Mobile devices.</p>
          </div>
          <div id="listProposal" class="table-responsive">
          <!----TABLES ARE LOCATED HERE...--->
          </div>
        </div>
        </div>
      </div>
      </div>
      <div class="card-footer border-top"> </div>
    </div>
    </div>
  </div>
    <?php include("../include/footer.php");?> 
    </section>
    <script src="../include/assets/js/vendor.bundle.js"></script>
    <script src="../include/assets/js/app.bundle.js"></script>
</body>
</html>
