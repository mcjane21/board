<?php 
    $cp = basename($_SERVER['PHP_SELF']);

?>
<head>
<style>#app_topnavbar-wrapper .dropdown-menu.dropdown-lg-menu {
    min-width: 400px;
    max-width: 400px;
    height: auto;
}
	
</style>
</head>
    <header id="app_topnavbar-wrapper" style="padding-left:0">
      <nav role="navigation" class="navbar topnavbar">
        <div class="nav-wrapper">
          <ul class="nav navbar-nav pull-left">
            <li>
              <a href="index.php" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Home">
                <span><i class="zmdi zmdi-home"></i></span>
              </a>
            </li>
            <li>
              <a href="sent-proposal.php" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Proposals">
                <span><i class="zmdi zmdi-file"></i></span>
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
                  <p style="font-size:10px;line-height:0.0em;" ><b>Proponent</b></p>
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
                  <a href="../include/logout.php"><i class="zmdi zmdi-sign-in"></i>Sign Out</a>
                </li>
              </ul>
            </li>
			<li class="dropdown hidden-sm">
				<a id="hrefnotif" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<span id="countnotif" class="badge status danger countnotif"  style="margin-right:25%"></span>
					<!--span class="badge status danger"  style="margin-right:25%"><//?php echo $g_nots['count'];?></span-->
				<span class="zmdi zmdi-notifications" style="font-size:30px;padding-top:50%"></span>
				</a>
				<ul class="dropdown-menu dropdown-lg-menu dropdown-menu-right dropdown-alt">
                <li class="dropdown-menu-header">
                  <h5>NOTIFICATIONS</h5>
                  <ul class="card-actions icons right-top">
                    <li>
					  <form class="form-horizontal" method="post" id="submit_mark_all">
						<input type="hidden" id="mark" name="mark" value="hahaha">
                      <button type="submit" name="submit" id="submit" class="btn btn-warning btn-fab btn-fab-xs"  data-toggle="tooltip" data-placement="bottom" title="mark all as read">
						<i class="zmdi zmdi-check-all"></i>
					  </button> 
					  </form> 
                    </li>
                  </ul>
                </li>
				<div class=" scrollbar max-h-500">
					<ul class="list-group notif" style="text-overflow: ellipsis;display: inline-block; white-space: nowrap; overflow: hidden; width: 100%;">
               <!--template-->
				
				
                </ul>
                </div>
                <li class="dropdown-menu-footer">
                  <a href="notifications.php"  target="_blank">
                    View All
                  </a>
                </li>
              </ul>
			</li>
		</ul>
        </div>
      </nav>
    </header>
		
<audio id="myAudio" style=" width: 400px;
    height: 0px;
    padding-top: 50%;">
  <source src="../assets/media/success.mp3" type="audio/mpeg">
</audio>

<script src="assets/js/vendor.bundle.js"></script>
<script src="assets/js/app.bundle.js"></script>
<script>
var x = document.getElementById("myAudio"); 

$(window).on('load',function(){
	var docid = 5;
	
	function load_unseen_notification(view1 = ''){ 	// fetch comments whether public or private
		$.ajax({
		url:"../process/fetch_notification_proponent.php",
		method:"POST",
		data:{view1:view1}, // view1 - variable for document id
		dataType:"json",
		success:function(data){
			$('#notif').html(data.notif);
			if(data.countNotif >= 0) {
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
	
	/*$('#pass_this_mark').on('submit', function(event){
		event.preventDefault();
		if(docid != null && $('#docID').val() != ''){
			var form_data = $(this).serialize();
			$.ajax({
			url:"../process/mark_as_read.php",
			method:"POST",
			data: form_data + '&docID=' + docid, // form_data = var for the comment
			success:function(data){	// if successful - reset the comment input form
				x.play(); 
				$('#submit_mark')[0].reset(); 
				load_unseen_notification(docid);
			   }
			});
		}else {
			alert("Both Fields are Required"); // if the variables are null
		}
	});*/
	
	$("#notif").on('change', function(event){
		var notif = $(this).val();
		load_unseen_notification(notif);
	});
	
	
	$('#submit_mark_all').on('submit', function(event){
		event.preventDefault();
		if(docid != null && $('#mark').val() != ''){
			var form_data = $(this).serialize();
			$.ajax({
			url:"../process/mark_prop_all_as_read.php",
			method:"POST",
			data: form_data + '&docid=' + docid, // form_data = var for the comment
			success:function(data){	// if successful - reset the comment input form
			
				$('#submit_mark_all')[0].reset(); 
				load_unseen_notification(docid);
			   }
			});
		}else {
			alert("Both Fields are Required"); // if the variables are null
		}
	});
	
	$('#submit_comment_form').on('submit', function(event){
		event.preventDefault();
		if(docid != null && $('#comment').val() != ''){
			var form_data = $(this).serialize();
			$.ajax({
			url:"../process/insert_comment.php",
			method:"POST",
			data: form_data + '&docid=' + docid, // form_data = var for the comment
			success:function(data){	// if successful - reset the comment input form
		
				$('#submit_comment_form')[0].reset(); 
				load_unseen_notification(docid);
			   }
			});
		}else {
			alert("Both Fields are Required"); // if the variables are null
		}
	});
	
	setInterval(function(){ 
		load_unseen_notification(docid);; 
	}, 1000); 
});

</script>

