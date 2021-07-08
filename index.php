<?php
session_start();
if(!isset($_SESSION["user_id"])){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title> Dashboard </title>
</head>

<body>
<div class="container">
	<div class="first">
		<div class="logo">
			<img src="image/ctguv.png" id="uni-logo" alt="logo">
		</div>
		<div class="menu">
			<a href="#profile">
			<div class="user">
			<p><?php echo($_SESSION["username"])?></p>
			<p><?php echo($_SESSION["email"])?></p>
			</div>
			</a>
			<a href="#help">
			<div class="help">
			<img src="image/support.png" class="aa" alt="support">
			<p>Help</p>
			</div>
			</a>
			<a href="logout.php">
			<div class="logout">
			<img src="image/logout.png" class="aa" alt="logout">
			<p>Log Out</p>
			</div>
			</a>
		</div>
	</div>
	<div class="second">
		<h3>NOC এর জন্য আবেদন ফর্ম</h3>
		<div class="img">
		<a href="application_form.php">
		<img src="image/form.png" alt="form" class="dept-icon">
		</a>
		</div>
	</div>
	<div class="third">
		 <h3>বিভাগ/কেন্দ্র/দপ্তর</h3>
		 <div class="departments">
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>সভাপতি, কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিং বিভাগ, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>হিসাব নিয়ামক, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>গ্রন্থাগারিক, <br/> চ.বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>কলেজ পরিদর্শক, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>পরীক্ষা নিয়ন্ত্রক, <br/> চ. বি. </p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>প্রধান প্রকৌশলী, <br/> চ. বি. </p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>পরিচালক, পরিকল্পনা ও উন্নয়ন দপ্তর <br/> চ. বি. </p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>উপ রেজিস্ট্রার <br/> (শিক্ষক সেল) রেজিস্ট্রার অফিস, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>চীফ মেডিকেল অফিসার, <br/> চ. বি. </p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>ডেপুটি রেজিস্ট্রার <br/> (একাডেমিক শাখা) রেজিস্ট্রার অফিস, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>ডেপুটি রেজিস্ট্রার <br/> (গৃহ ঋণ শাখা),  রেজিস্ট্রার অফিস, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>ডেপুটি রেজিস্ট্রার <br/> (গোপনীয় শাখা) রেজিস্ট্রার অফিস, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 </div>
	</div>
	<div class="forth">
		<h3>জরুরী বার্তা</h3>
		<div class="table-box">
			<table>
				<thead>
					<tr>
						<th>বিভাগ/কেন্দ্র/দপ্তর</th>
						<th>সমস্যা/অভিযোগ</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>