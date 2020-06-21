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
    <?php include("../include/header-attendee.php");?>
      <section id="content_outer_wrapper" style="padding-left:0%;padding-bottom:0%;margin-bottom:300px">
        <div id="content_wrapper">
          <div id="header_wrapper" class=" header-sm">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-9">
                  <header id="header">
                    <h1>Agenda Folders</h1>
                  </header>
                </div>
                <div class="col-xs-3 pull-right">
                  <header id="header">
                    <button class="btn btn-success pull-right" style="margin-right:0%;margin-top:0%;" data-toggle="modal" data-target="#Request" data-toggle="tooltip" data-placement="left" title="Add Meeting">Request Agenda</button>
                  </header>
                </div>
              </div>
            </div>
          </div>
            <div id="content" class="container-fluid">  
              <div class="row">
                <div class="col-xs-9">
                  <div>
                    <div class="card card-data-tables product-table-wrapper">
                      <header class="card-heading">
                        <h2 class="card-title">Agenda Folders</h2>
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
                            <p>Heads up! You can Swipe table Left to Right on Mobile devices.</p>
                          </div>
                          <div id="txtHint" class="table-responsive">
                            <table id="productsTable" class="mdl-data-table product-table m-t-0" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th data-orderable="false" class="col-xs-3"></th>
                                <th class="col-xs-4">Folder Name</th>
                                <th class="col-xs-3">Date Created</th>
                                <th class="col-xs-1">Quarter</th>
                                <th class="col-xs-1">Action</th>
                              </tr>
                            </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <a href="agenda.php?meetingid=<?php echo $folderid[$fc];?>">
                                    <div class="card-heading text-center ">
                                      <i class="zmdi zmdi-folder zmdi-hc-4x btn-fab-lg md-text-white"></i>
                                    </div>
                                    </a>
                                  </td>
                                  <td>
                                  <a href="agenda.php?meetingid=<?php echo $folderid[$fc];?>"></a>
                                  </td>
                                  <td><a href="folder-agenda.php?fid=<?php echo $folderid[$fc];?>"></a></td>
                                  <td><a href="folder-agenda.php?fid=<?php echo $folderid[$fc];?>"></a></td>
                                  <td>
                                  <a href="mysummaryofnotes.php">
                                  <button class="btn btn-warning btn-fab btn-fab-xs"  data-toggle="tooltip" data-placement="top" title="Print Summary of Notes">
                                  <i class="zmdi zmdi-print"></i>
                                  </button></a>
                                  <a href="mysummaryofcomments.php">
                                  <button class="btn btn-info btn-fab btn-fab-xs"  data-toggle="tooltip" data-placement="top" title="Print Summary of Notes">
                                    <i class="zmdi zmdi-print"></i>
                                  </button></a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card">
                    <div class="card-body p-0">
                      <div class="card-body">
                        <form>
                          <div class="row">
                            <div class="col-sm-12">
                              <label for="" class="control-label">Year</label>
                              <select class="select form-control" name="year" style="float:right" onchange="showYear(this.value)">
                              <option value="<?php echo $year[$yc];?>"></option>  
                              </select>
                            </div>
                          </div>
                        </form>
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
