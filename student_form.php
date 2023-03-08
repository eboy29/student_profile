<?php
include 'f_add_students_form.php';
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="js/bootstrap.bundle.min.js"></script>    
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>


    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="./js/functions_js.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style2.css"/>
    
    <link rel ="stylesheet" href ="cropper/cropper.css">
    <script src="cropper/cropper.js"></script>

    <link rel ="stylesheet" href ="cropper/cropper.min.css">
    <script src="cropper/cropper.min.js"></script>
</head>
<body>


<div class="container-fluid d-flex justify-content-center align-items-center p-3 conta">
<img src="images/CIT.png" alt="" width="100" height="100" class="mx-1">

<h2 class="txt">CIT Student Registration Form</h2>

</div>


<div class="container  w-80 mt-4 mb-4 cont2">

    <?php if(isset($_POST['crop_image']))

    echo '<div class="alert alert-success d-flex justify-content-center align-items-center" role="alert">'
    .$imgname;

    ?>

        <?php
          if(isset($_SESSION['add'])){
            

            ?>

        <div class="alert alert-success" role="alert">
          <?= $_SESSION['add'];?>
        </div>

        <?php     
          unset($_SESSION['add']);  
          }

          ?>


    <div class="container-fluid mt-3 mb-3 overflow-auto" >

    <div id="message"></div>


    <?php if(isset($error)):?>
    <div class="alert alert-danger d-flex justify-content-center align-items-center" role="alert">
    <?php echo $error?>
    </div> 
    <?php endif?>

    <?php if(isset($success)):?>
    <div class="alert alert-success d-flex justify-content-center align-items-center" role="alert">
    <?php echo $success?>
    </div> 
    <?php endif?>



    <form id="add_student" method ="POST" onmousemove="findAge()">
    <div class="row">

    <div class="mb-3">Personal Information</div>

    <div class="col-md-3">
        <label for="inputEmail4" class="form-label" >Student Number</label>
        <input type="text" class="form-control" value="<?php echo $stud_num ?>" required ="required" id="stud_num1" name ="stud_num" onkeypress="number(event)">

    </div>
      

      <!-- FIRST NAME -->
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">First Name</label>
        <input type="text" class="form-control" id="inputPassword4" name ="fname" value="<?php echo $fname ?>">
        <p class="text-danger help-block"></p>
      </div>

      
      <!-- LAST NAME -->
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="inputPassword4" name ="lname" value="<?php echo $lname ?>">
        <p class="text-danger help-block"></p>
      </div>


      <!-- GENDER -->
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Gender</label>
        <select id="inputState" class="form-select" name ="gender">
          <option selected>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
        <p class="text-danger help-block"></p>
      </div>


      <!-- DATE OF BIRTH -->
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" name ="dob" id ="dobCal" >
        <p class="text-danger help-block"></p>
      </div>



      <!-- AGE -->
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Age</label>
        <input type="text" class="form-control" readonly name ="age" id="age" >
        <p class="text-danger help-block"></p>
      </div>


      <!-- CONTACT NUMBER -->
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Contact Number</label>
        <input type="text" class="form-control" placeholder="+63" value="<?php echo $cnum ?>" id="inputPassword4" name ="cnum" onkeypress="number(event)">
        <p class="text-danger help-block"></p>
      </div>


      <!-- EMAIL -->
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Email</label>
        <input type="text" class="form-control" value="<?php echo $email ?>"id="inputPassword4" name ="email">
        <p class="text-danger help-block"></p>
      </div>

      <!-- PLACE OF BIRTH -->
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Place of Birth</label>
        <input type="text" class="form-control" id="inputPassword4" value="<?php echo $pob ?>" name ="pob">
        <p class="text-danger help-block"></p>
      </div>


      <!-- RELIGION -->
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Religion</label>
        <input type="text" class="form-control" id="inputPassword4" value="<?php echo $religion ?>" name ="religion">
        <p class="text-danger help-block"></p>
      </div>

      </div>


      <div class="row">

      <div class="mb-4">Residential Address</div>

    
      <!-- HOME NO -->
      <div class="col-6">
        <label for="inputAddress" class="form-label">Home No / Blg No</label>
        <input type="text" class="form-control" id="inputAddress" value="<?php echo $street ?>"placeholder="1234 Main St" name ="homeno">
        <p class="text-danger help-block"></p>
      </div>

      <!-- STREET -->
      <div class="col-6">
        <label for="inputAddress" class="form-label">Street/Blg Name</label>
        <input type="text" class="form-control" id="inputAddress" value="<?php echo $street ?>" placeholder="Example St/Building " name ="street">
        <p class="text-danger help-block"></p>
      </div>


      <!-- BARANGAY -->
      <div class="col-6">
        <label for="inputAddress" class="form-label">Barangay / Road Name</label>
        <input type="text" class="form-control" id="inputAddress" value="<?php echo $brgy ?>" placeholder="Sito Juan/Roxas Ave" name ="brgy">
        <p class="text-danger help-block"></p>
      </div>

      <!-- CITY -->
      <div class="col-6">
        <label for="inputAddress" class="form-label">City</label>
        <input type="text" class="form-control" id="inputAddress" value="<?php echo $city ?>" placeholder="Manila" name ="city">
        <p class="text-danger help-block"></p>
      </div>


      <!-- PROVINCE -->
      <div class="col-6">
        <label for="inputAddress" class="form-label">Province</label>
        <input type="text" class="form-control" id="inputAddress" value="<?php echo $prov ?>" placeholder="NCR" name ="prov">
        <p class="text-danger help-block"></p>
      </div>



    </div>


    <div class="row">

        <div class="mb-4">Parent Information</div>


      <!-- PARENTS NAME -->
      <div class="col-md-4">
        <label for="inputZip" class="form-label">Parents Name/Guardian</label>
        <input type="text" class="form-control" id="inputZip" value="<?php echo $pname ?>"name ="pname">
      </div>


      <!-- RELATIONSHIP -->
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Relationship</label>
        <input type="text" class="form-control" id="inputZip" value="<?php echo $relation ?>"name ="relation">
      </div>

      <!-- OCCUPATION -->
      <div class="col-md-3">
        <label for="inputZip" class="form-label">Occupation</label>
        <input type="text" class="form-control" id="inputZip" value="<?php echo $job ?>"name ="job">
      </div>

      <!-- CONTACT NUMBER -->
      <div class="col-md-3">
        <label for="inputZip" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="inputZip" name ="pnum" value="<?php echo $pnum ?>"onkeypress="number(event)">
      </div>

    </div>


      <div class="row">

    <div class="mb-3">Course Information</div>


      <!-- PICTURE -->
        <div class="col-md-5">
          <label for="inputZip" class="form-label">Upload A Picture</label>
          <input type="file" class="form-control crop_img" id="crop_img" name ="pic" onchange="validate(this.value)">
        </div>

   
        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Course</label>
          <select id="inputState" class="form-select" name ="course">



          <?php
          $stmt = $conn->prepare("SELECT * FROM course");
          $stmt ->execute();
          $result = $stmt->get_result();


          if ($result->num_rows >0){
              while ($row = $result -> fetch_assoc()){
        ?>

            <option value="<?php echo $row['CourseID']?>"><?php echo $row['Course'];?></option>
            
            <?php
            }
          }
         ?>



          </select>
        </div>


        <div class="col-md-3">
        <label for="inputZip" class="form-label">Section</label>
        <input type="text" class="form-control" id="inputZip" name ="section" value="<?php echo $pnum ?>">
      </div>



        <!-- IMAGE NAME -->
        <input type="hidden" id="filename" name="fpic">
        <!-- END OF IMAGE NAME -->


         <!-- SUBMIT BUTTON -->
         
      <div class="container  mt-3 d-flex justify-content-center w-100">

          <button type="submit" class="btn btn-primary xl" name ="submit" id ="sendbtn">Add Student</button>
      </div>

    </div>






    <!-- MODAL FOR IMAGE CROP -->

<div class="modal fade " id="box_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crop Your Image</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
            <div class="img-container">
              <div class="row">
                
                  <div class="col-md-8 d-flex">
                    <img src="" id="sample_image" class="img-fluid w-100 h-100"/>
                  </div>

                  <div class="col-md-4">
                    <div class="preview"></div>
                  </div>

              </div>
            </div>
        </div>   

      
      <div class="modal-footer">

      <button type="button" class="btn btn-primary" id="cropbtn">Crop Image</button></a>
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>

      </div>
    </div>
  </div>
</div>

<!-- END FOR MODAL IMAGE DROP -->











</div>

</form>
</div>

    
</body>
</html>