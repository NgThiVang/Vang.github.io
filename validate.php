
<?php
// Use arrays to store the infor of gender and major
$gender_arr = array("Nam", "Nữ");
$major_arr = array(""=>"", "Khoa học máy tính"=>"MAT", "Khoa học vật liệu"=>"KDL");	
		
$name = $gender = $major = $birth = $address = $image = "";
$nameErr = $genderErr = $majorErr = $birthErr = $addressErr = $imageErr = "";
		
function get_data($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
function isValid($date, $format = 'Y-m-d') {
    $dt = DateTime::createFromFormat($format, $date);
    return $dt && $dt->format($format) === $date;
}		
session_start();
			
if(isset($_POST["submit"])) {
	if(empty($_POST["name"])) {
		$nameErr = "Hãy nhập tên.";
	} else {
		$name = get_data($_POST["name"]);
	}
				
	if(empty($_POST["gender"])) {
		$genderErr = "Hãy chọn giới tính.";
	} else {
		$gender = get_data($_POST["gender"]);
	}
					
	if(empty($_POST["major"])) {
		$majorErr = "Hãy chọn phân khoa.";
	} else {
		$major = array_search(get_data($_POST["major"]), $major_arr);
	}
	
    if(!empty(empty($_POST["birth"]))) {
		$birthErr = "Hãy nhập ngày sinh.";
	} else  {
		$birth = date('dd')/date('mm')/date('YYYY') ; 
		$birth = get_data($_POST["birth"]);
		// .get_data($_POST["birth"]);
	}

	if(empty($_POST["address"])) {
		$addressErr = " ";
	} else {
		$address = get_data($_POST["address"]);
	}
	if(empty($_POST["image"])) {
		$imageErr = " ";
	} else {
		$image = get_data($_POST["image"]);
	}
				
	if ($name != "" && $gender != "" && $major != "" && $image != "") {
		$_SESSION["name"] = $name;
		$_SESSION["gender"] = $gender;
		$_SESSION["major"] = $major;
		$_SESSION["birth"] = $birth;
		$_SESSION["address"] = $address;
		$date = (new DateTime())->format('YmdHis');
        $hinhanhbase = basename($_FILES['image']['name']);
        $image = str_replace('.', '_'.$date.'.', $hinhanhbase);
		$_SESSION["image"] = $image;
    	$target_dir = "upload/";
        if(!file_exists($target_dir)){
            mkdir($target_dir, 0777, true);
        };
        $target_file = $target_dir.$image;
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
		
		header("location: do_regist.php");
		exit();
	}
}			
?>