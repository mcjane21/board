<header id="app_topnavbar-wrapper">
      <nav role="navigation" class="navbar topnavbar">
        <div class="nav-wrapper">
          <ul class="nav navbar-nav pull-left">
            <li>
              <a href="index.php" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Home">
                <span><i class="zmdi zmdi-home"></i></span>
              </a>
            </li>
            <li>
			<a id="hrefnotif" href="file-manager.php" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Agenda Folders">
					<!--div id="mult"-->
					<span class="badge status danger "  style="margin-right:25%"></span>
					<!--/div-->
				<span class="zmdi zmdi-view-carousel" style="font-size: 24px;line-height: 2em;"></span>
			</a>
            </li>
            <li>
              <a href="members.php" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Board Members">
                <span><i class="zmdi zmdi-accounts-list"></i></span>
              </a>
            </li>
            <li>
              <a href="info-bulletin.php" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Information Bulletin">
                <span><i class="zmdi zmdi-format-list-bulleted"></i></span>
              </a>
            </li>
		  </ul>
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown avatar-menu">
              <a href="javascript:void(0)" style="line-height:2.5em;" data-toggle="dropdown" aria-expanded="false">
                <span class="meta">
                  <span class="avatar">
				    <img id="header-profile-pic" src="<?php if($f_User['Pic'] == ''){if(($f_User['Gender']) == "Female"){echo '../include/assets/img/profiles/female.jpg';}else{echo '../include/assets/img/profiles/male.jpg';}}else{echo $f_User['ProfilePic'];}?>" alt="" class="img-circle max-w-35" id="header-profile-pic">
                    <i class="badge mini success status"></i>
                  </span>
                  <span class="name" ></span>
                  <span class="caret"></span>
                  <p style="font-size:10px;line-height:0.0em;" ><b>Board Member</b></p>
                </span>
              </a>
              <ul class="dropdown-menu btn-primary dropdown-menu-right">
                <li>
                  <a href="my-profile.php"><i class="zmdi zmdi-account"></i>My Profile</a>
                </li>
                <li>
                  <a href="my-account.php"><i class="zmdi zmdi-settings"></i>Account Settings</a>
                </li>
                <li>
                  <a href="help.php"><i class="zmdi zmdi-help-outline"></i>Help</a>
                </li>
                <li>
                  <a href="../include/logout.php"><i class="zmdi zmdi-sign-in"></i>Sign Out</a>
                </li>
              </ul>
			   </li>
		  </ul>
        </div>
      </nav>
    </header>

<script>
$(document).ready(function(){
    $('#hi').show();
    $('#mult').hide();
}
</script>
<script>
var x = document.getElementById("myAudio"); 

$(window).on('load',function(){
	var docid = 5;
	
	function load_unseen_notification(view1 = ''){ 	// fetch comments whether public or private
		$.ajax({
		url:"../process/fetch_notification.php",
		method:"POST",
		data:{view1:view1}, // view1 - variable for document id
		dataType:"json",
		success:function(data){
			$('#notif').html(data.notif);
			if(data.countNotif > 0) {
				$('.countnotif').html(data.countNotif)
				$('.notif').html(data.Notif)
				$('.countnotif').show();
				$('.countall').show();
				$('#hrefnotif #countnotif.countnotif').addClass('warning');
			}else {
				$('.countnotif').hide();
				$('.countall').hide();
				//$('#hrefpublic #countnotif.warning').removeClass('warning').addClass('default');
			}
		   }
		});
	}
	load_unseen_notification(docid);	// call function
	
	$("#notif").on('change', function(event){
		var notif = $(this).val();
		load_unseen_notification(notif);
	});
	
	setInterval(function(){ 
		load_unseen_notification(docid);; 
	}, 1000); 
	
});

</script>