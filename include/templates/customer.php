<?php 
$id=0;
 if(isset($_POST['submitcustomer']) && $_POST['submitcustomer'] != '')
 {
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $updatecustomer = $userObj->updatecustomer($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editcustomer&msc=2';</script> 
    <?php	}
    else{   
		$addcustomer = $userObj->addcustomer($mysqli);   
        ?>
     <script>location.href='<?php echo $HOSTPATH;  ?>editcustomer&msc=1';</script>
        <?php
    }
 }  
 
$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$deletecustomer = $userObj->deletecustomer($mysqli,$del); 
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editcustomer&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$getcustomer = $userObj->getcustomer($mysqli,$idupd); 
	
	if (sizeof($getcustomer)>0) {
        for($icustomer=0;$icustomer<sizeof($getcustomer);$icustomer++)  {	
            $customerid              = $getcustomer['customerid'];
            $customername            = $getcustomer['customername'];
			$gender                	 = $getcustomer['gender'];
			$dateofbirth      	     = $getcustomer['dateofbirth'];
            $employeeimage     	     = $getcustomer['employeeimage'];
            $age      			     = $getcustomer['age'];
			$mobilenumber       	 = $getcustomer['mobilenumber'];
			$whatsappnumber          = $getcustomer['whatsappnumber'];
			$anniverserydate         = $getcustomer['anniverserydate'];
			$emailid     			 = $getcustomer['emailid'];
			$needmembership          = $getcustomer['needmembership'];


			$typeofcustomer	         = $getcustomer['typeofcustomer'];
			$noofvisit               = $getcustomer['noofvisit'];
            $frequencyofvisit        = $getcustomer['frequencyofvisit']; 
		
            $status	    		     = $getcustomer['status'];

		}
	}
}
?>
  


<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Customer Master</li>
					</ol>

					<a href="editcustomer">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Customer</button>
					</a>

				</div>
				<!-- Page header end -->

				<!-- Main container start -->
				<div class="main-container">


<!--------form start-->
<form id = "employee" name="customer" action="" method="post" enctype="multipart/form-data"> 
<input type="hidden" class="form-control" value="<?php if(isset($customerid )) echo $customerid ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">

 		<!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">General Info</div>
					</div>
                    <div class="card-body">

                    	 <div class="row ">
                            <!--Fields -->
                           <div class="col-md-8 "> 
                              <div class="row">
                                   <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label >Customer Name</label>
                                                <input type="text" tabindex="1" class="form-control" id="customername" name="customername" value="<?php if(isset($customername )) echo $customername ; ?>" placeholder="Enter Customer Name">
                                                <label id="customernamecheck" class="text-danger">Enter Customer Name</label>

                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="disabledInput">Gender <span class="required">*</span></label>
                                            <select class="form-control" tabindex="3" id="gender" name="gender">
                                                
                                                <option value=""> Select Gender</option>
                                                <option <?php if(isset($gender)) { if($gender == "Male" ) echo 'selected'; }  ?> value="Male"> Male</option>
                                                <option  <?php if(isset($gender)) { if($gender == "Female" ) echo 'selected'; }  ?> value="Female"> FeMale</option>
                                            </select>
                                            <label id="gendercheck" class="text-danger">Select Gender</label>
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Date Of Birth</label>
                                            <input type="date" tabindex="5" class="form-control" id="dateofbirth" name="dateofbirth" value="<?php if(isset($dateofbirth )) echo $dateofbirth ; ?>">
                                            <label id="dateofbirthcheck" class="text-danger">Select Date Of Birth</label>

                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Age<span class="required">*</span></label>
                                                <input type="number" id="age" tabindex="4" name="age" class="form-control"  value="<?php if(isset($age )) echo $age ; ?>" >
                                                <label id="agecheck" class="text-danger" >Enter Age</label>
                                            </div>
                                        </div>
                                    
                                    <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Mobile Number <span class="required">*</span></label>
                                                <input type="number" id="mobilenumber" tabindex="4" name="mobilenumber" class="form-control"  value="<?php if(isset($mobilenumber )) echo $mobilenumber ; ?>" placeholder="Enter Mobile Number">
                                                <label id="mobilenumbercheck" class="text-danger" >Enter Mobile Number</label>
                                            </div>
                                        </div>

                                      <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Whatsapp Number</label>
                                                <input type="text" tabindex="6" id="whatsappnumber" name="whatsappnumber" class="form-control" value="<?php if(isset($whatsappnumber )) echo $whatsappnumber ; ?>">                                           
                                                <label id="whatsappnumbercheck" class="text-danger">Enter Whatsapp Number</label>
                                                </div>
                                        </div>

                                        <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Anniversery Date</label>
                                                <input type="date" tabindex="6" id="anniverserydate" name="anniverserydate" class="form-control" value="<?php if(isset($anniverserydate )) echo $anniverserydate ; ?>">
                                                <label id="anniverserydatecheck" class="text-danger">Select Anniversery Date</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Email Id</label>
                                                <input type="email" tabindex="6" id="emailid" name="emailid" class="form-control" value="<?php if(isset($emailid )) echo $emailid ; ?>">
                                                <label id="emailidcheck" class="text-danger">Enter Email Id</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Need Membership</label>
                                                <select class="form-control" tabindex="3" id="needmembership" name="needmembership">
                                                
                                                <option value=""> Select Membership</option>
                                                <option <?php if(isset($needmembership)) { if($needmembership == "Yes" ) echo 'selected'; }  ?> value="Yes"> Yes</option>
                                                <option  <?php if(isset($needmembership)) { if($needmembership == "No" ) echo 'selected'; }  ?> value="No"> No</option>
                                            </select>
                                             <label id="needmembershipcheck" class="text-danger">Enter Need Membership</label>           
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                   <!-- Field Finished -->
                                   <?php if(isset($_GET['upd'])<=0){ ?>
                                   <div class="col-md-4"><br />
                                   <div class="col-xl-12 col-lglg-4 col-md-6 col-sm-6 col-12 mx-auto">
                                            <div class="form-group" style="margin: auto;"> 
                                            <img src="img/profile-pic.jpg" width="43%" id="viewimage">
                                            <input type="file" tabindex="7"  class="form-control" 
                                            accept="image/*" onchange="loadFile(event)"  
                                            id="customerimage" name="customerimage" style="width:43%">
                                            </div>

                                        </div>
                                        <script>
                                            var loadFile = function(event) {
                                                var image = document.getElementById("viewimage");
                                                image.src = URL.createObjectURL(event.target.files[0]);
                                            };
                                        </script>
                                   </div>
                               <?php } ?>
                                </div>
                              </div>
                          </div>
                      </div>
                  <!-- </div> -->



            <!-- </div> -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">Type</div>
					</div>
                    <div class="card-body">
                        
                        <div class="row ">
                          
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Type Of Customer</label>
                                    <select class="form-control" tabindex="3" id="typeofcustomer" name="typeofcustomer">     
                                      <option value=""> Select Membership</option>
                                      <option <?php if(isset($typeofcustomer)) { if($typeofcustomer == "Regular" ) echo 'selected'; }  ?> value="Regular"> Regular</option>
                                      <option <?php if(isset($typeofcustomer)) { if($typeofcustomer == "New" ) echo 'selected'; }  ?> value="New"> New</option>
                                    </select>
                                    <label id="typeofcustomercheck" class="text-danger">Type Of Customer</label>           

                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputEmail">No of Visit</label>
                                    <input type="number" tabindex="12" class="form-control" id="noofvisit" name="noofvisit"  value="<?php if(isset($noofvisit )) echo $noofvisit ; ?>">
                                    <label id="noofvisitcheck" class="text-danger">Enter number Of VIsit</label>           

                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                    <label for="inputEmail">Frequency Of Visit</label>
                                    <input type="number" tabindex="12" class="form-control" id="frequencyofvisit" name="frequencyofvisit"  value="<?php if(isset($frequencyofvisit )) echo $frequencyofvisit ; ?>">
                                    <label id="frequencyofvisitcheck" class="text-danger">Enter Frequency OF Visit</label>           
                                </div>
                            </div>
                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" tabindex="70" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="16"  class="custom-control-input" id="status" name="status">
                                <label class="custom-control-label" for="status">Status</label>
                            </div><br /><br />
                        </div>




                        </div>
                    </div>
                </div>
            <!-- </div> -->
      

      
            <div class="row">
					   <div class="col-md-2 d-flex" > 
						<button type="button" id="customerdownload" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button>
						<button type="button" id="cuustomerupload" id="cuustomerupload" onclick="customerBulkupload()" tabindex="72" class="btn btn-primary mb-2 ml-2"><span class="icon-upload"></span>Upload</button>
					   </div>
					        <div class="col-md-2"> </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
						
							<button type="submit" name="submitemployee" id="submitcustomer" class="btn btn-primary" value="Submit" tabindex="73">Submit</button>
						    <button type="button" class="btn btn-outline-secondary" tabindex="74">Cancel</button>
					  </div>
                      
                  
                </div>

            </div>


        </div>
    </div>
</div>
</form>
</div>



