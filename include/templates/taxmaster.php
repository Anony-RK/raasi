<?php 
$id=0;
 if(isset($_POST['submittax']) && $_POST['submittax'] != '')
 {
     
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $updatetaxmaster = $userObj->updatetaxmaster($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>edittaxmaster&msc=2';</script> 
    <?php	}
    else{   
		$addtaxmaster = $userObj->addtaxmaster($mysqli);   
        
        ?>
     <script>location.href='<?php echo $HOSTPATH;  ?>edittaxmaster&msc=1';</script>
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
	$deletetaxmaster = $userObj->deletetaxmaster($mysqli,$del); 
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>edittaxmaster&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$gettaxmaster = $userObj->gettaxmaster($mysqli,$idupd); 
	
	if (sizeof($gettaxmaster)>0) {
        for($tax=0;$tax<sizeof($gettaxmaster);$tax++)  {	
            $taxid              = $gettaxmaster['taxid'];
            $financialyear      = $gettaxmaster['financialyear'];
			$classification     = $gettaxmaster['classification'];
			$description      	= $gettaxmaster['description'];
            $tax     	        = $gettaxmaster['tax'];

            $cess     	        = $gettaxmaster['cess'];
            $addl      			= $gettaxmaster['addl'];
			$total       	    = $gettaxmaster['total'];
			
		
            $status	    		= $gettaxmaster['status'];

		}
	}
}
?>
  


<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Tax Master</li>
					</ol>

					<a href="editcustomer">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Tax Master</button>
					</a>

				</div>
				<!-- Page header end -->

				<!-- Main container start -->
				<div class="main-container">


<!--------form start-->
<form id = "employee" name="customer" action="" method="post" enctype="multipart/form-data"> 
<input type="hidden" class="form-control" value="<?php if(isset($taxid )) echo $taxid ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">

 		<!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">Tax Master</div>
					</div>
                    <div class="card-body">

                    	 <div class="row ">
                            <!--Fields -->
                           <div class="col-md-12 "> 
                              <div class="row">
                                   <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-12">
                                            
                                        </div>
                                        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 ml-4">
                                            <div class="form-group d-flex align-items-center justify-content-around" >
                                                <label >Financial year <span class="text-danger">*</span></label>
                                                <select class="form-control w-75" tabindex="3" id="financialyear" name="financialyear">
                                                
                                                <option value=""> Select Gender</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2001-2002" ) echo 'selected'; }  ?> value="2001-2002"> 2001-2002</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2002-2003" ) echo 'selected'; }  ?> value="2002-2003"> 2002-2003</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2003-2004" ) echo 'selected'; }  ?> value="2003-2004"> 2003-2004</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2004-2005" ) echo 'selected'; }  ?> value="2004-2005"> 2004-2005</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2005-2006" ) echo 'selected'; }  ?> value="2005-2006"> 2005-2006</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2006-2007" ) echo 'selected'; }  ?> value="2006-2007"> 2006-2007</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2007-2008" ) echo 'selected'; }  ?> value="2007-2008"> 2007-2008</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2008-2009" ) echo 'selected'; }  ?> value="2008-2009"> 2008-2009</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2009-2010" ) echo 'selected'; }  ?> value="2009-2010"> 2009-2010</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2010-2011" ) echo 'selected'; }  ?> value="2010-2011"> 2010-2011</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2011-2012" ) echo 'selected'; }  ?> value="2011-2012"> 2011-2012</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2012-2013" ) echo 'selected'; }  ?> value="2012-2013"> 2012-2013</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2013-2014" ) echo 'selected'; }  ?> value="2013-2014"> 2013-2014</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2014-2015" ) echo 'selected'; }  ?> value="2014-2015"> 2014-2015</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2015-2016" ) echo 'selected'; }  ?> value="2015-2016"> 2015-2016</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2016-2017" ) echo 'selected'; }  ?> value="2016-2017"> 2016-2017</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2017-2018" ) echo 'selected'; }  ?> value="2017-2018"> 2017-2018</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2018-2019" ) echo 'selected'; }  ?> value="2018-2019"> 2018-2019</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2019-2020" ) echo 'selected'; }  ?> value="2019-2020"> 2019-2020</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2020-2021" ) echo 'selected'; }  ?> value="2020-2021"> 2020-2021</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2021-2022" ) echo 'selected'; }  ?> value="2021-2022"> 2021-2022</option>
                                                <option <?php if(isset($financialyear)) { if($financialyear == "2022-2023" ) echo 'selected'; }  ?> value="2022-2023"> 2022-2023</option>
                                            </select>
                                                <label id="financialyearcheck" class="text-danger">Enter Customer Name</label>

                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            
                                        </div>  
                                    </div>
                                </div>   
                              </div>





<div>
<div id="BulkUploadModal" class="modal">
  <div class="modal-content">
    <span class="bulkclose" style="width:4%;">&times;</span>
  <iframe src="taxuploadbulk.php" height="200px"></iframe>
  </div>
</div>
</div>


<hr>
                              <div class="row">
                                   
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group " >
                                                <label >Classification <span class="text-danger">*</span></label>
                                                <select class="form-control " tabindex="3" id="classification" name="classification"> 
                                                    <option value=""> Select Classification</option>
                                                    <option <?php if(isset($classification)) { if($classification == "TDS" ) echo 'selected'; }  ?> value="TDS"> TDS</option>
                                                    <option <?php if(isset($classification)) { if($classification == "Custom Duty" ) echo 'selected'; }  ?> value="Custom Duty"> Custom Duty</option>
                                                </select>
                                                <label id="classificationcheck" class="text-danger">Select Classification</label>

                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="form-group " >
                                                <label >Desicription</label>
                                                <input type="text" tabindex="1" class="form-control " id="description" name="description" value="<?php if(isset($description )) echo $description ; ?>" >
                                                <label id="descriptioncheck" class="text-danger">Enter Description</label>

                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                   <div class="form-group " >
                                                <label >Tax <span class="text-danger">*</span></label>
                                                <input type="text" tabindex="1" class="form-control " id="tax" name="tax" value="<?php if(isset($tax )) echo $tax ; ?>" >
                                                <label id="taxcheck" class="text-danger"> Enter tax</label>

                                            </div>
                                    </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                   <div class="form-group " >
                                                <label >Cess <span class="text-danger">*</span></label>
                                                <input type="text" tabindex="1" class="form-control " id="cess" name="cess" value="<?php if(isset($cess )) echo $cess ; ?>" >
                                                <label id="cesscheck" class="text-danger">Enter Cess </label>

                                            </div>
                                    </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group " >
                                                <label >Addl <span class="text-danger">*</span></label>
                                                <input type="text" tabindex="1" class="form-control " id="addl" name="addl" value="<?php if(isset($addl )) echo $addl ; ?>" >
                                                <label id="addlcheck" class="text-danger">Enter Addl</label>

                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="form-group " >
                                                <label > Total</label>
                                                <input type="text" readonly tabindex="1" class="form-control " id="total" name="total" value="<?php if(isset($total )) echo $total ; ?>" >

                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                </div>  


                          </div>

                          

                      <!-- </div> -->
                
                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" tabindex="70" value="Yes"  <?php if(isset($status)==0){echo'checked';}?> tabindex="16"  class="custom-control-input" id="status" name="status">
                                <label class="custom-control-label" for="status">Status</label>
                            </div><br /><br />
                        </div>
      
                  <div class="row">
					   <div class="col-md-4 d-flex" > 
						<button type="button" id="customerdownload" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button>
                        <button onclick="taxBulkupload()" tabindex="27" type="button" id="itembulkupload" name="itembulkupload" class="btn btn-primary  itembutton form-control" ><span class="icon-upload"></span> &nbsp Upload</button><br /><br />
					   </div>
					        <!-- <div class="col-md-2"> </div> -->
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2 ">
						
							<button type="submit" name="submittax" id="submittax" class="btn btn-primary" value="Submit" tabindex="73">Submit</button>
						    <button type="button" class="btn btn-outline-secondary" tabindex="74">Cancel</button>
					  </div>
                      
                  
                </div>

            </div>


        </div>
    </div>
</div>
</form>
</div>



