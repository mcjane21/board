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
            <div class=" container-fluid">
              <div class="row">
                  <div class="col-xs-12">
                    <header id="header">
                      <h1>Information Bulletin</h1>
                      <ol class="breadcrumb">
                      <li><a href="index.php">Home</a></li>
                      <li class="active"><a>Information Bulletin</a></li>
                      </ol>
                    </header>
                  </div>
              </div>
            </div>
          </div>
            <div id="content" class="container-fluid" style="padding-left:100px;padding-right:100px;">
              <div class="content-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <div class="card">
                      <header class="card-heading border-bottom">
                          <button class="btn btn-primary btn-fab btn-fab-sm pull-right" style="margin-right:0%;margin-top:0%;" data-toggle="modal" data-target="#addMeeting" data-toggle="tooltip" data-placement="left" title="Add Meeting"><i class="zmdi zmdi-plus"></i></button>
                          <h2 class="content-title">Upcoming Meetings</h2>
                      </header>
                          <div class="card-body scrollbar max-h-300">
                            <ul class="list-group">
                                <li class="list-group-item ">
                                <div class="list-group-item-body col-sm-12 col-xs-12">
                                  <div class="list-group-item-heading"></div>
                                  <div class="list-group-item-text"></div>
                                </div><br><br><br>
                                <div class="list-group-item-text col-sm-12 col-xs-12" style="padding-left:5%">
                                  <span class="pull-left"><div class="icon  col-sm-12 col-xs-12" data-name="pin" data-code="f32e"> <i class="zmdi zmdi-pin zmdi-hc-fw"></i><span></span></div></span>
                                </div><br>
                                <div class="list-group-item-text col-sm-12 col-xs-12" style="padding-left:5%">
                                  <span class="pull-left"><div class="icon  col-sm-12 col-xs-12" data-name="calendar-alt" data-code="f32e"><i class="zmdi zmdi-calendar-alt zmdi-hc-fw"></i> <span></span></div></span>
                                  <span class="pull-left"><div class="icon col-sm-12 col-xs-12" data-name="time" data-code="f32e"><i class="zmdi zmdi-time zmdi-hc-fw"></i> <span></span></div></span>
                                </div>
                                </li>
                              <div class='row' style='font-size:30px;text-align:center;padding-top:12%;padding-bottom:23%;'>
                                No upcoming meetings yet.
                              </div>
                            </ul>
                          </div>
                      </div>
                    </div>  
                    <div class="col-xs-12 col-sm-5">
                      <div class="card">
                    <header class="card-heading border-bottom">
                    <h2 class="card-title ">My Groups</h2>
                      <small>Listed here are the members of the groups you belong to.</small>
                    </header>
                      <div class="card-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <ul class="nav nav-pills nav-stacked nav-pills-primary" role="tablist">
                          <li class="active">
                            <a href="#pillnav0" role="tab" data-toggle="tab">Board</a>
                          </li>
                          <li class="inactive">
                            <a href="#pillnav1" role="tab" data-toggle="tab">Finance Committee</a>
                          </li>
                          <li class="inactive">
                            <a href="#pillnav2" role="tab" data-toggle="tab">System Administrator</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-7">
                        <div id="pillContent3" class="tab-content">
                          <div class="tab-pane fade active in" id="pillnav0">
                            <ul>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a>
                                  </div>     
                                </div>
                              </li>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a></div>     
                                </div>
                              </li>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a></div>     
                                </div>
                              </li>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a>
                                  </div>     
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="tab-pane fade" id="pillnav1">
                            <ul>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a></div>     
                                </div>
                              </li>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a></div>     
                                </div>
                              </li>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                      </span></a>
                                  </div>     
                                </div>
                              </li>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a>
                                  </div>     
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="tab-pane fade" id="pillnav2">
                            <ul>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a>
                                  </div>     
                                </div>
                              </li>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a></div>     
                                </div>
                              </li>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                    </span></a>
                                  </div>     
                                </div>
                              </li>
                              <li>
                                <div class="col-sm-8">
                                  <h6>Arnulfo Mascarinas</h6>
                                </div>
                                <div class="col-sm-4" align="left">
                                  <div class="list-group-item-text" ><a href>
                                    <span class="avatar">
                                      <img src="assets/img/profiles/male.jpg" alt="" class="img-circle max-w-40" id="header-profile-pic">
                                      </span></a>
                                  </div>     
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                      </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-7">  
                    <div class="card">
                      <header class="card-heading border-bottom">
                        <div class="row">
                          <div class="col-xs-9">
                            <h2 class="content-title">Previous Meetings</h2>
                              <div class="col-xs-3">
                                <select class="select form-control pull-right" name="year" style="float:right" id="previd">
                                    <option disabled value="null">SELECT YEAR</option>
                                  <option value=""></option>
                                </select>
                              </div>
                          </div>
                      </header>
                        <div class="card-body scrollbar max-h-300">
                          <ul class="list-group ">
                              <li class="list-group-item ">
                                <div class="list-group-item-body col-sm-12 col-xs-12">
                                    <div class="list-group-item-heading"></div>
                                    <div class="list-group-item-text"></div>
                                </div><br><br><br>
                                    <div class="list-group-item-text col-sm-12 col-xs-12" style="padding-left:5%">
                                      <span class="pull-left"><div class="icon  col-sm-12 col-xs-12" data-name="pin" data-code="f32e"> <i class="zmdi zmdi-pin zmdi-hc-fw"></i><span></span></div></span>
                                    </div><br>
                                    <div class="list-group-item-text col-sm-12 col-xs-12" style="padding-left:5%">
                                      <span class="pull-left"><div class="icon  col-sm-12 col-xs-12" data-name="calendar-alt" data-code="f32e"><i class="zmdi zmdi-calendar-alt zmdi-hc-fw"></i> <span></span></div></span>
                                      <span class="pull-left"><div class="icon col-sm-12 col-xs-12" data-name="time" data-code="f32e"><i class="zmdi zmdi-time zmdi-hc-fw"></i> <span><</span></div></span>
                                </div>
                              </li>
                          </ul>
                        </div>
                    </div>
                  </div> 
                  <div class="col-xs-12 col-sm-5">
                    <div class="card">
                      <header class="card-heading text-center">
                        <h2 class="card-title">BU Office of the Board Secretary</h2>
                      </header>
                          <div class="card-body">
                            <div class="list-group">
                              <div class="list-group-item">
                                <div class="row-action-primary">
                                    <i class="zmdi zmdi-phone circle-xs mw-turquoise"></i>
                                  </div>
                                  <div class="row-content">
                                    <h5 class="list-group-item-text">Telephone: <b>(052) 480-010</b></h5>
                                </div>
                              </div>
                              <div class="list-group-item">
                                <div class="row-action-primary">
                                  <i class="zmdi zmdi-email circle-xs mw-turquoise"></i>
                                </div>
                                <div class="row-content">
                                  <h5 class="list-group-item-text">Email: <b>cielollenaresasjaylo@yahoo.com</b></h5>
                                </div>
                              </div>
                              <div class="list-group-item">
                                <div class="row-action-primary">
                                  <i class="zmdi zmdi-laptop circle-xs mw-turquoise"></i>
                                </div>
                                <div class="row-content">
                                  <h5 class="list-group-item-text">BU Website: <b>www.bicol-u.edu.ph</b></h5>
                                </div>
                              </div>
                              <div class="list-group-item">
                                <div class="row-action-primary">
                                  <i class="zmdi zmdi-pin circle-xs mw-turquoise"></i>
                                </div>
                                <div class="row-content">
                                  <h5 class="list-group-item-text">Address: <b>Legazpi City - 4500</b></h5>
                                </div>
                              </div>
                              <div class="list-group-item">
                                <div class="row-action-primary">
                                  <i class="zmdi zmdi-time circle-xs mw-turquoise"></i>
                                </div>
                                <div class="row-content">
                                  <h5 class="list-group-item-text">Office Hours: <b>8:00 AM - 9:00 PM</b></h5>
                                </div>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div> 
                </div>
                <div class="row">
                  <div class="card">
                    <header class="card-heading">
                      <h1 class="card-title text-center" style="font-family:Century Gothic;"><b>BICOL UNIVERSITY INFORMATION BULLETIN</b></h1>
                    </header>
                      <div class="row">
                          <div class="col-lg-12">
                            <div class="card card-heading-top">
                              <header class="card-heading card-default">
                                <h2 class="card-title">Bicol University Board of Regents</h2>
                              </header>
                                <section>
                                  <div class="card-body">
                                      <p>The governance of the university is vested in the Board of Regents, abbreviated as BOR. The board, with its 12 members, is the highest decision-making body of the university.<br><br>

                                      The Chairperson of the Commission on Higher Education (CHED) serves as the Board's Chairperson while the President of the Bicol University is the Vice-Chairperson. The Chairpersons of the Committees of Higher Education of the Senate and the House of Representatives are also members of the Board of Regents which are concurrent with their functions as committee chairpersons.<br><br>

                                      The students of the Bicol University is represented by a Student Regent, which is also the chairperson of the University Student Council. While the Faculty Regent is likewise nominated by the faculty members of the whole University. Alumni are represented by the President of the BU Alumni Association.</p>
                                  </div>
                                </section>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="card card-heading-top">
                              <header class="card-heading card-default">
                                <h2 class="card-title">Bicol University (BU)</h2>
                              </header>
                                <section>
                                  <div class="card-body">
                                    <p><b>Mission:</b><br>The Bicol University shall primarilly give professional and technical training, and provde advanced and specialized instruction on literature, philosophy, the science and arts, besodes providing for the promotion of scientific and technological researches (RA 5521, Sec. 3.0).</p>
                                     <p><b>Vision:</b><br>A world-class university producing leaders and change agents for social transformationand development.</p>
                                      <p><b>Quality Policy:</b><br>Bicol University commits to continually strive for excellence in instruction, research and extension by meeting the highest level of clientele satisfaction and adhering to quality standards.</p>
                                     <p><b>Goals:</b><br>In order that the graduates of Bicol University shall be proud flag bearers of the 
                                    quality of education the University stands for, it shall pursue the following goals:<br><br>

                                    Provide relevant and responsive curricular programs for undergraduate and graduate education which meet national and international standards of quality and excellence. The academic programs shall graduate employable citizens in their profession; <br><br>

                                    Generate and transfer knowledge and technology that shall address poverty in the region, integrating research and extension activities to improve the productivity of key economic sectors supportive of sustainable barangay, provincial, regional and national economic development; <br><br>

                                      Optimize the resource-generation capacity of the University pursuing academe-based entrepreneurship anchored on the core competencies of the faculty and the vast land resources of the University alongside with fund sourcing through partnership building and networking to support the delivery of quality instruction, research and extension functions of the university; <br><br>

                                    Effect timely administrative and academic support services through simplification of processes and actualization of the highest degree of efficiency and effectiveness in the administrative system and operation, therefore, promoting the University's mandate of quality instruction, research, extension and production, and; <br><br>

                                    Provide physical environment supportive of the instruction, research, extension and production programs.</p>
                                  </div>
                                </section>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
                  <!-- ENDS $dashboard_content -->
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
