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
                  <h1>Dashboard</h1>
                </header>
              </div>
            </div>
          </div>
        </div>
        <div id="content" class="container-fluid m-t-0">
          <div class="row">
            <div class="col-xs-8">
              <div class="content">   
                <div class="col-lg-12">
                  <div class="card">
                    <header class="card-heading border-bottom">
                      <button class="btn btn-primary btn-fab btn-fab-sm pull-right" style="margin-right:0%;margin-top:0%;" data-toggle="modal" data-target="#addMeeting" data-toggle="tooltip" data-placement="left" title="Add Meeting"><i class="zmdi zmdi-plus"></i></button>
                      <h2 class="content-title">Upcoming Meetings</h2>
                    </header> 
                    <div class="card-body scrollbar max-h-350">
                      <ul class="list-group" id="list_Meeting"></ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <header class="card-heading border-bottom">
                      <div class="row">
                        <div class="col-xs-9">
                          <h2 class="content-title">Previous Meetings</h2>
                        </div>
                        <div class="col-xs-3">
                          <select class="select form-control pull-right" name="year" style="float:right" id="previd">
                            <option <?php if(!isset($countyear)){echo "selected";} ?> disabled value="null">SELECT YEAR</option>
                            <?php  for($yc=0; $yc<$yearcount; $yc++) { ?>
                            <option value="<?php echo $year[$yc]; ?>" <?php if($year[$yc] == $condYear) {echo "selected";} ?>><?php echo $year[$yc]; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </header> 
                    <div class="card-body scrollbar max-h-350">
                      <ul  id="txtHint" class="list-group ">
                        <?php 
                        $count = 1;    
                        $pevent_count = $p_event->num_rows;
                        if($pevent_count > 0) {
                        while($pevent = $p_event -> fetch_array()){
                          $ptime = date('h:i A', strtotime($pevent['MeetingTime'])); ?>
                          <li class="list-group-item "style="box-shadow: 0 1px 1px rgba(1,0,0,.1);">
                            <div class="list-group-item-body">
                              <div class="list-group-item-heading"><?php echo $mysqli->real_escape_string($pevent['MeetingName']); ?></div>
                              <div class="list-group-item-text"><?php echo $mysqli->real_escape_string($pevent['MeetingDescription']); ?></div>
                            </div><br>
                            <div class="list-group-item-text col-sm-12 col-xs-12">
                              <span class="pull-left"><div class="icon  col-sm-12 col-xs-12" data-name="pin" data-code="f32e"><i class="zmdi zmdi-pin zmdi-hc-fw"></i><span><?php echo $mysqli->real_escape_string($pevent['MeetingVenue']); ?></span></div></span><br>
                              <span class="pull-left"><div class="icon  col-sm-12 col-xs-12" data-name="calendar-alt" data-code="f32e"><i class="zmdi zmdi-calendar-alt zmdi-hc-fw"></i> <span><?php echo $mysqli->real_escape_string($pevent['mdate']); ?></span></div></span>
                              <span class="pull-left"><div class="icon col-sm-12 col-xs-12" data-name="time" data-code="f32e"><i class="zmdi zmdi-time zmdi-hc-fw"></i> <span><?php echo $mysqli->real_escape_string($ptime); ?></span></div></span>
                              <span class="pull-left"><div class="icon col-sm-12 col-xs-12" data-name="group" data-code="f32e"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i><span><?php echo $mysqli->real_escape_string($pevent['GroupName']); ?></span></div></span>
                            </div><br><br>
                          </li>
                          <?php $count++; }} else{ echo '<div class="row" style="font-size:20px;text-align:center;padding-top:12%;padding-bottom:23%;">No available data.</div>';} ?>
                      </ul>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="card" style="padding:0;">
                <header class="card-heading border-bottom" >
                  <h4 class="card-title" >Board Resolutions</h4>
                </header>
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="list-group-item-body" >
                        <div class="list-group-item-heading" ><a>New...</a></div>
                        <?php while($f_res = $s_res->fetch_array()){ ?>
                          <div class="list-group-item-text" style="text-align:left;padding-left:10%;padding-right:10%"><a href="" data-toggle="modal" data-target="#boardResolution<?php echo $f_res['ResID'];?>" value="<?php echo $f_res['ResID'];?>">BOR Resolution <?php echo $f_res['ResNo'];?> Series of <?php echo $f_res['ResSeries'];?></a></div>
                        <!--View Resolution modal-->    
                          <div class="modal fade" id="boardResolution<?php echo $f_res['ResID'];?>" tabindex="-1" role="dialog" aria-labelledby="basic_modal">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel-2">Resolution No. <?php echo $f_res['ResNo'];?> Series of <?php echo $f_res['ResSeries'];?></h4>
                                  <ul class="card-actions icons right-top">
                                    <a href="javascript:void(0)" data-dismiss="modal" class="text-white" aria-label="Close">
                                      <i class="zmdi zmdi-close"></i>
                                    </a>
                                  </ul>
                                </div>
                                <div class="modal-body">
                                  <?php echo $f_res['ResDescription'];?>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                        </div>
                    </li>
                  </ul><hr>
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="list-group-item-body" style="text-align:left;padding-left:10%;padding-right:10%">
                        <?php while($f_yrres = $s_yrres->fetch_array()){ ?>
                        <div class="list-group-item-text"><a href="boardresolutions.php?year=<?php echo $f_yrres['ResSeries'];?>">Calendar Year <?php echo $f_yrres['ResSeries'];?> Board Resolutions</a></div>
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
    <script src="../include/assets/js/vendor.bundle.js"></script>
    <script src="../include/assets/js/app.bundle.js"></script>
</body>
</html>
