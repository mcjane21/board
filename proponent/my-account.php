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
    <?php include("../include/header-proponent.php");?>
    <section id="content_outer_wrapper" style="padding-left:0%;padding-bottom:0%;margin-bottom:300px">
      <div id="content_wrapper">
        <div id="header_wrapper" class=" header-sm">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12">
                <header id="header">
                  <h1>Account Settings</h1>
                  <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active"><a>Update Account</a></li>
                  </ol>
                </header>
              </div>
            </div>
          </div>
        </div>
          <div id="content" class="container-fluid">
            <div class="content-body">
              <div class="row">
              <div class="col-xs-12 col-sm-5">
              <div class="card">
              <header class="card-heading border-bottom">
                <h2 class="content-title">Change Profile Picture</h2>
              </header>
              <form id="picture_form" method="post">
                 <header class="card-heading text-center">
                  <img src="<?php if($f_User['Pic'] == ''){if(($f_User['Gender']) == "Female"){echo '../include/assets/img/profiles/female.jpg';}else{echo '../include/assets/img/profiles/male.jpg';}}else{echo $f_User['ProfilePic'];}?>" alt="" class="img-circle profile-pic" style="width:45%;height:45%;">
                    <ul id="ulpic" class="card-actions icons right-top">
                      <button type="button" id="camera" title="" class="btn btn-blue btn-fab animate-fab btn-fab-sm" data-toggle="tooltip" data-placement="left" data-original-title="Update Profile Photo">
                        <i class="zmdi zmdi-camera upload-button"></i>
                      </button>
                      <input type="file" id="pic" name="pic" class="file-upload" style="display:none" accept="image/*"/>
                    </ul>
                    <h2 class="name"><?php echo ($f_User['FName'].' '.$f_User['LName']); ?></h2>
                   <h5 class="name"><?php echo ucwords($f_User['Position']); ?></h5>
                 </header>
                <div class="card-footer text-center">
                 <center><p id="alertpic" ></p></center>
                 <button disabled id="savepic" type="submit" name="submit" class="btn btn-info">SAVE</button>
                </div>
              </form>
              </div>
              </div>
                <div class="col-xs-12 col-sm-7">
              <div class="card">
                <header class="card-heading border-bottom">
                  <h2 class="content-title">Change Password</h2>
                </header>
                <div class="card-body">
                  <form id="form-horizontal"  class="form-horizontal  full-width-input submit_accprof_form" method="post">
                    <div class="card-body" >
                    <div class="row">
                      <div class="form-group is-empty">
                        <label for="uname" class="col-md-5 control-label">Username</label>
                        <div class="col-md-5">
                        <input type="text" id="uname" name="uname" value="<?php echo ($_SESSION['username']); ?>" class="form-control" aria-required="true" data-rule-required="true" data-rule-rangelength="[1,100]" minlength="1">
                        </div>
                      </div>
                        <div class="form-group is-empty">
                          <label for="newpass" class="col-md-5 control-label">New Password</label>
                            <div class="col-md-5">
                              <input type="password" id="newpass" name="newpass" class="form-control" aria-required="true" data-rule-required="true" data-rule-rangelength="[8,50]">
                            </div>
                        </div>
                        <div class="form-group is-empty">
                          <label for="confirmpass" class="col-md-5 control-label">Confirm Password</label>
                          <div class="col-md-5">
                            <input type="password" id="confirmpass" name="confirmpass" class="form-control" aria-required="true" data-rule-required="true" data-rule-rangelength="[8,50]">
                          </div>
                        </div>
                        <div class="form-group is-empty">
                          <label for="currentpass" class="col-md-5 control-label">Current Password</label>
                          <div class="col-md-5">
                            <input type="password" id="currentpass" name="currentpass" class="form-control" aria-required="true" data-rule-required="true" data-rule-rangelength="[5,50]">
                          </div>
                        </div>
                    </div>    
                    </div>    
                      <center><p id="alertnotequal" style="color:#ee6e73"></p></center>
                      <div class="card-footer text-center">
                      <button type="reset" class="btn btn-primary">RESET</button>
                      <button type="submit" name="submit_account" class="btn btn-info">SAVE</button>
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
    <script src="../include/assets/js/vendor.bundle.js"></script>
    <script src="../include/assets/js/app.bundle.js"></script>
</body>
</html>
