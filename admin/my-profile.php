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
                      <h1>My Profile</h1>
                      <ol class="breadcrumb">
                        <li><a href="my-profile.php">Basic Personal Information</a></li>
                      </ol>
                    </header>
                  </div>
                </div>
              </div>
        </div>
          <div id="content" class="container-fluid">
                <div class="content-body">
                <div class="row">
                  <div class="col-xs-12" >
                  <div class="card">
                    <div class="col-sm-12" >
                     <header class="card-heading border-bottom">
                      <h2 class="card-title">Basic Personal Information</h2>
                    </header>
                    </div><br><br>
                    <div class="card-body"><br>
                    <form id="form-horizontal" action="update-profile.php"  class="form-horizontal">
                      <div class="form-group">
                      <label for="nameInput" class="col-sm-2 control-label">Full Name</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_User['FName'].' '.$f_User['MName'].' '.$f_User['LName'].' '.$f_User['ExtName'])?></p>
                      </div>
                      <label for="websiteInput" class="col-sm-2 control-label">Religion</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_User['Religion'])?></p>
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="nameInput" class="col-sm-2 control-label">Gender</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_User['Gender'])?></p>
                      </div>
                      <label for="ccInput" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-4">
                        <p><?php echo ($f_User['Email'])?></p>
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="nameInput" class="col-sm-2 control-label">Birthday</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_User['Bday'])?></p>
                      </div>
                      <label for="ccInput" class="col-sm-2 control-label">Contact Number</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_User['ContactNo'])?></p>
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="nameInput" class="col-sm-2 control-label">Address</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_User['Street'].' '.$f_User['Barangay'].' '.$f_User['TownCity'].' '.$f_User['Province']);?></p>
                      </div>
                      <label for="ccInput" class="col-sm-2 control-label">College/Office</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_collegeoffice['UnitName'])?></p>
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="nameInput" class="col-sm-2 control-label">Zip</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_User['Zip'])?></p>
                      </div>
                      <label for="ccInput" class="col-sm-2 control-label">Position</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_User['Position'])?></p>
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="nameInput" class="col-sm-2 control-label">Civil Status</label>
                      <div class="col-sm-4">
                        <p><?php echo strtoupper($f_User['CivilStatus'])?></p>
                      </div>
                      <label for="ccInput" class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-4">
                        <p><?php echo ($f_User['Username'])?></p>
                      </div>
                      </div>
                      <div class="form-group">
                      <div class="col-sm-offset-10 col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
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
    <script src="../include/assets/js/vendor.bundle.js"></script>
    <script src="../include/assets/js/app.bundle.js"></script>
</body>
</html>
