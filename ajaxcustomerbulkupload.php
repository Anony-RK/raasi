<?php
require_once('vendor/csvreader/php-excel-reader/excel_reader2.php');
require_once('vendor/csvreader/SpreadsheetReader.php');
include("ajaxconfig.php");

if(isset($_FILES["file"]["type"])){
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
if(in_array($_FILES["file"]["type"],$allowedFileType)){
	    $targetPath = 'uploads/bulkimport/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        $Reader = new SpreadsheetReader($targetPath);
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
        	$Reader->ChangeSheet($i);
        	foreach ($Reader as $Row){
            $customername = "";
            if(isset($Row[0])) {
            $customername = mysqli_real_escape_string($con,$Row[0]);
            }
            $gender = "";
            if(isset($Row[1])) {
            $gender = mysqli_real_escape_string($con,$Row[1]);
            }
            $dateofbirth = "";
            if(isset($Row[2])) {
            $dateofbirth = mysqli_real_escape_string($con,$Row[2]);
            }
            $employeeimage = "";
            if(isset($Row[3])) {
            $employeeimage = mysqli_real_escape_string($con,$Row[3]);
            }
            $age = "";
            if(isset($Row[4])) {
            $age = mysqli_real_escape_string($con,$Row[4]);
            }
            $mobilenumber = "";
            if(isset($Row[5])) {
            $mobilenumber = mysqli_real_escape_string($con,$Row[5]);
            }
            $whatsappnumber = "";
            if(isset($Row[6])) {
            $whatsappnumber = mysqli_real_escape_string($con,$Row[6]);
            }
            $anniverserydate = "";
            if(isset($Row[7])) {
            $anniverserydate = mysqli_real_escape_string($con,$Row[7]);
            }
            $emailid = "";
            if(isset($Row[8])) {
            $emailid = mysqli_real_escape_string($con,$Row[8]);
            }
            $needmembership = "";
            if(isset($Row[9])) {
            $needmembership = mysqli_real_escape_string($con,$Row[9]);
            }
            $typeofcustomer = "";
            if(isset($Row[10])) {
            $typeofcustomer = mysqli_real_escape_string($con,$Row[10]);
            }
            $noofvisit = "";
            if(isset($Row[11])) {
            $noofvisit = mysqli_real_escape_string($con,$Row[11]);
            }
            $frequencyofvisit = "";
            if(isset($Row[12])) {
            $frequencyofvisit = mysqli_real_escape_string($con,$Row[12]);
            }
           

        if($i==0)
		{ 
        $query = "INSERT INTO customer(customername, gender, 
        dateofbirth, employeeimage, age, 
        mobilenumber, whatsappnumber, anniverserydate, 
        emailid, needmembership, 
        typeofcustomer, noofvisit, frequencyofvisit
      ) VALUES (
	   '".strip_tags($customername)."',
	   '".strip_tags($gender)."',
	   '".strip_tags($dateofbirth)."',
	   '".strip_tags($employeeimage)."',
	   '".strip_tags($age)."',
	   '".strip_tags($mobilenumber)."',
	   '".strip_tags($whatsappnumber)."',
	   '".strip_tags($anniverserydate)."',
	   '".strip_tags($emailid)."',
       '".strip_tags($needmembership)."',
       '".strip_tags($typeofcustomer)."',
       '".strip_tags($noofvisit)."',
       '".strip_tags($frequencyofvisit)."',
    

       $result = $con->query($query);

    } } }  

    if(!empty($result)) {
    echo "Excel Data Imported into the Database !";
    }
    else{
    echo "Problem in Importing Excel Data".$con->error;
    }
}
}else{
    echo "Kindly Select The Excel";
}

?>