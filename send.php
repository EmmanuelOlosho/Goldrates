<?php 	
include'dashboard.php';
$current = @$_GET['current'];
?>
<div class="col-10 off-2">
	<div class="col-10 off-1 down-15 bottom-50 bg-faded">
	 <span class="white" id="active"><?php 	echo$current ?></span>
	</div>
</div>
<script>
	 var a = document.getElementById('active').innerHTML;
	 var b = document.getElementById('active').innerHTML;
	 if(a == b){
	 	document.getElementById(a).className = "side-bar-item current"
	 }
	 else {
	 	document.getElementById(a).className = "side-bar-item"
	 }
</script>