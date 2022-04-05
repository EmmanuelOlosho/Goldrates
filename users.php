<?php 	
include'db.php';
include'dashboard.php';
$current = @$_GET['current'];
$total = mysqli_query($con, "SELECT * from users order by id") or die();
$total_male = mysqli_query($con, "SELECT * from users where gender = 'm' ") or die();
$total_female = mysqli_query($con, "SELECT * from users where gender = 'f' ") or die();
?>
<div class="col-10 off-2">
	<div class="col-10 off-1 down-15 bottom-50 fade-in">
	 <span class="white" hidden="" id="active"><?php 	echo$current ?></span>
   <div class="mother bottom-20 centered bg-faded">
     <div class="mother xs-down-5 down-2"><span class="white px13 xs-px15 bold">REGISTERED USERS <i class="fas fa-users color-code-1 px15"></i></span></div>
   </div>
   <div class="mother down-2">
   	<div class="container">
   		<div><span class="white px13">Total Users: <?php echo mysqli_num_rows($total) ?></span></div>
   		<div><span class="white px13">Total Male: <?php echo mysqli_num_rows($total_male) ?></span></div>
   		<div><span class="white px13">Total Female: <?php echo mysqli_num_rows($total_female) ?></span></div>
   	</div>
   </div>
   <div class="mother down-2 bottom-50">
   	<div class="container">
   		   <table class="color-code-1 mother centered bottom-50">
   		    <th class="centered">
   		    	 <tr class="centered">
   		    	 	<td class=""><i class="fas fa-user white px13"></i></td>
   		    	 	<td><i class="fas fa-envelope white px13"></i></td>
   		    	 	<td><i class="fas fa-user-plus white px13"></i></td>
   		    	 	<td><i class="fas fa-phone-alt white px13"></i></td>
   		    	 	<td><i class="fas fa-edit white px13"></i></td>
   		    	 	<td><i class="fas fa-trash white px13"></i></td>
   		    	 </tr>
   		    </th>
   		  <?php 
   		    $i = 0;
   		    $name = mysqli_query($con, "SELECT * from users order by id desc");
   		    while ($row = mysqli_fetch_assoc($name)){
   		     $i++
   		   ?>
   		     <tr class="xs-down-1 xs-12 px13 promptoR down-5 centere tx-10">
   		       <td><?php echo$row['first_name']." ".$row['last_name']; ?></td>
   		       <td><?php echo$row['mail']; ?></td>
   		       <td><?php echo$row['gender']; ?></td>
   		       <td><?php echo$row['link']; ?></td>
   		       <td><a href="javascript:void(0)" class="" onclick="clickBtn()"><?php echo"edit" ?></a></td>
   		       <td><a href="javascript:void(0)" class="" onclick="clickBtn('delete')"><?php echo"delete"; ?></a></td>
   		     </tr>
   		     <div class="mother">
   		     	 <form method="POST" action="helper">
   		     	 	 <input type="text" name="id" value="<?php echo$row['id'] ?>">
   		     	 	 <input type="submit" name="delete_user" value="delete" id="delete">
   		     	 </form>
   		     </div>
   		<?php   } ?>
   		   </table>
   	</div>
   </div>
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

	 function	clickBtn(modal){
	 	document.getElementById(modal).click();
	 }
</script>