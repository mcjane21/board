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
                  <h1>Board Resolutions</h1>
                    <ol class="breadcrumb">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="boardresolutions.php">Board Resolutions CY <?php echo $year;?></a></li>
                    </ol>
                </header>
              </div>
            </div>
          </div>
        </div>
          <div id="content" class="container-fluid m-t-0">
            <div class="row">
              <div class="col-xs-8">
                <div class="card">
                  <header class="card-heading border-bottom">
                    <h2 class="card-title">Board Resolutions CY <?php echo $year;?></h2>
                    <small>Shown below are all the Board Resolutions of your chosen year.</small>
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
                    <div class="card-body scrollbar max-h-350">
                      <?php while($f_res = $s_res->fetch_array()){ ?>
                      <ul class="list-group ">
                        <li class="list-group-item ">
                          <div class="list-group-item-body">
                            <div class="list-group-item-heading">Resolution No. <?php echo $f_res['ResNo'];?> Series of <?php echo $f_res['ResSeries'];?></div>
                            <div class=""><?php echo ucwords($f_res['ResDescription']);?></div>
                          </div>
                        </li>
                      </ul>
                      <?php } ?>
                    </div>
                    <div class="card-footer border-top">
                    </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4">
              <div class="card" style="padding:0">
                <header class="card-heading border-bottom" >
                <h4 class="card-title" >Board Resolutions</h4>
                </header>
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">
                    <div class="list-group-item-body" style="text-align:left;">
                      <?php while($f_yrres = $s_yrres->fetch_array()){ ?>
                        <div class="list-group-item-text"><a href="boardresolutions.php?year=<?php echo $f_yrres['ResSeries'];?>">Calendar Year <?php echo $f_yrres['ResSeries'];?> Board Resolutions</a></div>
                      <?php } ?>
                    </div>
                    </li>
                  </ul><hr>
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="list-group-item-body" style="text-align:left;">
                      <?php while($f_meeting = $s_meeting->fetch_array()){ ?>
                        <div class=""><a href="boardresolutions-meeting.php?meeting=<?php echo $f_meeting['MeetingID'];?>&&year=<?php echo $year;?>"><?php echo $f_meeting['MeetingName'];?></a></div><hr>
                      <?php } ?>
                      </div>
                    </li>
                  </ul>
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
  