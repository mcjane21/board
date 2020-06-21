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
  <link rel="stylesheet" href="../include/assets/css/theme-1ee.css">
  <style>
    #header_wrapper.profile-header{
      background-color:#EEF5F9;
      background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,transparent),color-stop(30%,transparent),color-stop(100%,rgba(0,0,0,.45))),
      url(../include/assets/img/headers/banner8.jpg)!important;
      height:320px;
      min-height:320px;
      max-height:320px;
      padding:25px;
      background-size:cover;
      background-position:0 90%!important}
      body{background-image: url('../include/assets/img/backgrounds/bgbor.jpg')};
  </style>
</head>
<body>
  <div id="app_wrapper">
    <?php include("../include/header-attendee.php");?>
      <section id="content_outer_wrapper"style="padding-left:0%;padding-bottom:0%;margin-bottom:300px">
        <div id="content" class="container-fluid m-t-0">
          <div class="row">
            <div class="col-xs-12">
              <div class="content">
                <div class="content-body">
                  <div class="row"> 
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2"style="background-color: rgba(245, 245, 245, 0);padding-top:5%;" id="packages">
                      <header class="card-heading col-sm-12 col-sm-offset" style="padding-bottom:11.5%">
                        <h2 class="card-title text-white" style="font-family:Century Gothic;"><b>W E L C O M E </b></br></h2>
                        </header>
                          <div class="card-heading text-white">
                            <p>
                              <i class="'.$time_orange.'"></i> <br>
                              <i class="'.$date_orange.'"></i> <br>
                              <i class="'.$venue_orange.'"></i>
                            </p>
                              <a '.$style.'; href="agenda.php?meetingid='.$f_meeting['MeetingID'].'"><button class="btn btn-info"><b>Proceed</b></button></a>
                              <br>
                              <a href="help.php"><button  data-toggle="tooltip" data-placement="left" title="Help" class="btn btn-warning btn-fab btn-fab-sm" ><i class="zmdi zmdi-help-outline"></i></button></a>
                          </div>
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
