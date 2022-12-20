<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="regist_student.css?v=<?php echo time(); ?>">
    <title>Đăng kí Tân sinh viên</title>	
	<body>
		<?php include "validate.php"; ?>
		
		<div class="container">
			<div class="form-validate">
			<div style="width: 200px; padding: 1px;">
				<p><?php echo $nameErr; ?></p>
				<p><?php echo $genderErr; ?></p>
				<p><?php echo $majorErr; ?></p>
                <p><?php echo $birthErr; ?></p>
			</div>
		
			<form method="post">
				<div class="form-group">
					<div class="col-label">
						<label for="name">Họ và tên<n class="col-sign">*</n></label>
					</div>
				
					<div class="col-input">
						<input type="text" id="name" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : "" ?>" /> 
					</div>
				</div>
			
			
				<div class="form-group">
					<div class="col-label">
						<label>Giới tính<n class="col-sign">*</n></label>
					</div>
				
					<div class="col-input">
						<div class="radio-group">
							<?php
							for($i = count($gender_arr) - 1; $i >= 0; $i--) {
								echo "<div class=\"radio-item\">";
								if (isset($_POST["gender"]) && $_POST["gender"] == $gender_arr[$i]) {
									echo"<input type=\"radio\" name=\"gender\" value=$gender_arr[$i] checked />";
								} else {
									echo"<input type=\"radio\" name=\"gender\" value=$gender_arr[$i] />";
								}
								echo"<label class=\"radio-item\">$gender_arr[$i]</label>";
								echo "</div>";
							}
							?>
						</div>
					</div>
				</div>
	
			
				<div class="form-group">
					<div class="col-label">
						<label for="major">Phân khoa<n class="col-sign">*</n></label>
					</div>
				
					<div class="col-input">
						<select id="major" name="major">
							<option hidden disabled selected value>&nbsp;</option>
							<?php
							echo " ";
							foreach($major_arr as $x => $x_value) {
								if (isset($_POST["major"]) && $_POST["major"] == $x_value) {
									echo"<option value=$x_value selected>$x</option>";;
								} else {
									echo"<option value=$x_value>$x</option>";
								}
							}
							?>
						</select>
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-label">
						<label for="birth">Ngày sinh<n class="col-sign">*</n></label>
					</div>
				
					<div class="col-input">
						<input style="width:52%;" type="text" id="date-time" name="birth" value="<?php echo isset($_POST["birth"]) ? $_POST["birth"] : "" ?>" /> 
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-label">
						<label for="address">Địa chỉ</label>
					</div>
				
					<div class="col-input">
						<input type="text" id="address" name="address" value="<?php echo isset($_POST["address"]) ? $_POST["address"] : "" ?>" /> 
					</div>
				</div>

				<div class="form-group">
					<div class="col-label">
					<label for="image">Hình ảnh</label>
					</div>
				
					<div class="col-input">
						<input type="file" id="image" name="image" accept="image/png, image/jpg, image/jpeg" value="<?php echo isset($_POST["image"]) ? $_POST["image"] : "" ?>" /> 
				</div>

				<div class="submit">
					<button type="submit" name="submit" value="Submit">Đăng ký</button>
				</div>
		    </form>
		</div>
		
		<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
	</body>
</html>