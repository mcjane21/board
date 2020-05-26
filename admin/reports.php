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
      <div id="content_wrapper" >
        <div id="header_wrapper" class="header-sm">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12">
                  <header id="header">
                    <h1>Reports</h1>
                  </header>
                </div>
              </div>
            </div>
        </div>
        <div id="content" class="container-fluid">
            <div class="content-body">
              <div class="row">
                <div class="col-xs-12">
                  <div class="card">
                    <header class="card-heading">
                      <h2 class="card-title">Reports</h2>
                        <small class="dataTables_info">Office of the Board Secretary</small>
                    </header><hr>
                    <div class="row">
                      <div class="col-xs-2">
                        <div class="card-heading text-center">
                          <i class="zmdi zmdi-file-text zmdi-hc-3x btn-fab-lg md-text-white"></i>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <header class="card-heading">
                          <h5 class="card-title">List of Accepted Proposals</h5>
                        </header>
                      </div>
                      <form method = "post" action = "listofacceptedproposals.php">
                        <div class="col-xs-3">
                          <div class="form-group is-empty">
                            <label for="" class="control-label">Meeting</label>
                              <select class="select form-control" name="mtg" id="mtg">
                              <?php
                                  $s_active_mtg = $mysqli->query("SELECT * FROM meeting, folder WHERE meeting.MeetingID = folder.MeetingID AND FolderStatus = 'Active' OR FolderStatus = 'Closed' GROUP BY meeting.MeetingID ") or die($mysqli->error);
                                  while($f_active_mtg = $s_active_mtg->fetch_array()){?>  
                                <option value="<?php echo $f_active_mtg['MeetingID'];?>"><?php echo $f_active_mtg['MeetingName'];?></option>
                                <?php }?>
                              </select>
                          </div>
                        </div>
                        <div class="col-xs-3 text-center" >
                          <div class="form-group is-empty">
                            <button type="submit" name="submit" class="btn btn-info btn-sm">Generate</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div><hr>
            </div> 
        </div>
      </div>
    <?php include("../include/footer.php");?> 
    </section>
    <script src="../include/assets/js/vendor.bundle.js"></script>
    <script src="../include/assets/js/app.bundle.js"></script>
</body>
</html>
