<!DOCTYPE html>
<html lang="vi">
	<head>
		<title>Thông tin</title>
		<link rel="stylesheet" type="text/css" href="regist_student.css?v=<?php echo time(); ?>">
		<?php   
			header('Content-Type: text/html; charset=utf-8');
			date_default_timezone_set("Asia/Bangkok");
			session_start();
		?>
		<style>
			.container {
				padding: 3% 10% 4% 5%;
				height: 300px;
			}
			
			.col-infor {
				margin-bottom: 0px;
				height: 34px;
			}
			
			.col-infor p {
				border: none;
				margin-top: 0px;
				margin-bottom: 0px;
				height: 16px;
				padding-top: 12px;
				
			}
		</style>
	</head>
	
	<body>
		<div class="container">
			<div class="form-group">
				<div class="col-label">
					<label>Họ và tên</label>
				</div>
			
				<div class="col-infor">
					<p><?php echo $_SESSION["name"]; ?></p> 
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-label">
					<label>Giới tính</label>
				</div>
			
				<div class="col-infor">
					<p><?php echo $_SESSION["gender"]; ?></p> 
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-label">
					<label>Phân khoa</label>
				</div>
			
				<div class="col-infor">
					<p><?php echo $_SESSION["major"]; ?></p> 
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-label">
						<label>Tuổi</label>
					</div>
			
				<div class="col-infor">
					<p><?php echo $_SESSION["birth"]; ?></p> 
				</div>
			</div>
			<div class="form-group">
				<div class="col-label">
						<label>Địa chỉ</label>
					</div>
			
				<div class="col-infor">
					<p><?php echo $_SESSION["address"]; ?></p> 
				</div>
			</div>

			<div class="form-group">
				<div class="col-label">
						<label>Hình ảnh</label>
					</div>
			
				<div class="col-infor">
				<?php
				if ($_SESSION["image"] != "") {
                    echo "<br> <img src='upload/".$_SESSION["image"]."' width='100' height='60'>";
                }
				?>
					<!-- <p><?php echo $_SESSION["image"]; ?></p>  -->
				</div>
			</div>
			<div class="submit">
					<button onClick=insertData() type="submit" name="submit" value="Submit">Xác nhận</button>
			</div>
		</div>
		
		<?php session_destroy(); ?>
	</body>
</html>
