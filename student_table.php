<?php
session_start();

/* include 'functions/pending_student.php'; */
include 'connection.php';
$conn = openCon();

if(!isset($_SESSION['auth'])){
	header('location:login.php');
}



?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
   

    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    /> -->

    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>CIT Student Profile</title>
  </head>
  <body>

    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar1">
      <div class="container-fluid">

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>




       
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"href="#">
          <img src="images/CIT.png" alt="" width="30" height="30" class="mx-1">CIT Student Profile
        </a>
        
        
        
        
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation">


        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">

           <!--  <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div> -->

          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">

                <span>Welcome Admin</span>
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">My Account</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                  <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav sidebar1"tabindex="-1" id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <a class="nav-link px-3 mt-4 active" href="dashboard.php">
                <span class="me-2"><img src="images/dashboard-customize.svg" alt=""></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-uppercase px-3 mb-3 text-light">
                Main Menu
              </div>
            </li>
            <li>
              <a id ="course" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"href="#layouts">
               
                <span class="d-flex justify-content-center align-items-center">
                <img  class ="me-3" src="images/menu-book-rounded.svg">
                  
                  <span>Courses</span>
                
                </span>



                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">

                <li id="courseline"></li>


                  



                </ul>
              </div>
            </li>


            <li>
            <a href="student_table.php" class="nav-link px-3">
            <span class="me-2"><img src="images/table-chart-sharp.svg" alt=""></i></span>
            <span>Student Table</span>
              </a>  
            </li>

            <li>
            <a href="add_students.php" class="nav-link px-3">
                <span class="me-2"><img src="images/add2.svg" alt=""></i></span>
                <span>Add Students</span>
              </a>
            </li>

            <li>
            <a href="course_menu.php" class="nav-link px-3">
                <span class="me-2"><img src="images/menu-book-rounded.svg"></i></span>
                <span>Course Menu</span>
              </a>
            </li>



            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Admin Settings
              </div>
            </li>
            <li>
              <a href="change_admin_pass.php" class="nav-link px-3">
                <span class="me-2"><img src="images/change-circle.svg" alt=""></i></span>
                <span >Change Admin Pass</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><img src="images/add2.svg" alt=""></i></span>
                <span>Add Admin</span>  
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Add Students</h4>
          </div>
        </div> -->






  <div class="container-fluid mt-3 mb-3" >

  <?php
      if(isset($_SESSION['delete'])){
          
   ?>

  <div class="alert alert-success d-flex justify-content-center align-items-center" role="alert">
  <?= $_SESSION['delete'];?>
  </div>


  <?php     
  unset($_SESSION['delete']);  
  }

  else if(isset($_SESSION['add'])){
  ?>


  <div class="alert alert-success d-flex justify-content-center align-items-center " role="alert">
  <?= $_SESSION['add'];?>
  </div>

  <?php
  unset($_SESSION['add']); 
  }
  else if(isset($_SESSION['update_msg'])){
  ?>

<div class="alert alert-success d-flex justify-content-center align-items-center " role="alert">
  <?= $_SESSION['update_msg'];?>
  </div>


<?php
  unset($_SESSION['update_msg']); 
  }
  ?>











    <div class="col-md-12 mb-3">

          <div class="card">

            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> List of Students
            </div>

              <div class="card-body">

                <div class="table-responsive">

                  <table id="stud_table" class="table table-striped" style="width: 100%">
                    <thead>
                      <tr>
                        <th>Student Number</th>
                        <th>Full Name</th>
                        <th>Birthday</th>
                        <th>Age</th>
                        <th>Contact Number</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Time Registered</th>
                        <th>Actions</th>
                        <th hidden>ID</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php


                    $stmt = $conn->prepare("SELECT student_table.Student_ID as StudentID, course.CourseID as CourseID, 
                    student_table.Student_Number as 'Student Number',student_table.First_Name as Fname, student_table.Middle_Name as Mname
                    ,student_table.Last_Name as Lname, student_table.Date_of_Birth as Birthday, student_table.Age as Age, student_table.Contact_Number as 'Contact number',
                    student_table.Gender as Gender, course.Course as Course, student_table.Time_Registered as 'Time Registered' 
                    
                    
                    FROM student_table
                    INNER JOIN course ON course.CourseID = student_table.CourseID
                    Group by 1");
                    $stmt ->execute();
                    $result = $stmt->get_result();


                    if ($result->num_rows >0){
                        while ($row = $result -> fetch_assoc()){
                        $full_name = $row['Fname']." ".$row['Mname']." ".$row['Lname'];
                       /*  $id = $row['Student_ID']; */
    
                    ?>

                      <tr>
                        <td hidden><?php echo $row['StudentID']?></td>
                        <td><?php echo $row['Student Number']?></td>
                        <td><?php echo $full_name?></td>
                        <td><?php echo $row['Birthday']?></td>
                        <td><?php echo $row['Age']?></td>
                        <td><?php echo $row['Contact number']?></td>
                        <td><?php echo $row['Gender']?></td>
                        <td><?php echo $row['Course']?></td>
                        <td><?php echo $row['Time Registered']?></td>

                        <td><button data-id='<?php echo $row['StudentID']?>'type="button" class="view_info btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="images/baseline-remove-red-eye.svg">
                        </button>

                        <a href="update_students.php?update=<?php echo $row['StudentID']?>">
                          <button type="button" class="btn btn-success"><img src="images/edit.svg"></button>
                        </a>
                        
                        <button type="button" class="btn btn-danger btn_del" data-bs-toggle="modal" data-bs-target="#ask_delete" id="deletebtn"><img src="images/trash-bold.svg"></button>
                        </td>
                      </tr>
                    
                      </tr>

                      <?php
                        }
                      }
                      ?>

                      
                    </tbody>

                    
            
                  </table>
                  
                </div>
              </div>

              
        </div>

        
    </div>

    <form action="functions/excel.php" method="POST">
      <button type="submit" class="btn btn-success" name ="excel" id ="sendbtn">Export Student Table</button>
    </form>

    
  </div>



  




  <!-- PENDING REQUEST OF STUDENTS TABLE -->
  <div class="container-fluid mt-3 mb-3 mt-4" >

  <?php
  if (isset($_SESSION['s_accept'])){

  ?>


  <div class="alert alert-success d-flex justify-content-center align-items-center " role="alert">
  <?= $_SESSION['s_accept'];?>
  </div>


  <?php
  unset($_SESSION['s_accept']); 
  }

  else if (isset($_SESSION['s_reject'])){

  ?>

  <div class="alert alert-danger d-flex justify-content-center align-items-center " role="alert">
  <?= $_SESSION['s_reject'];?>
  </div>


  <?php
  unset($_SESSION['s_reject']); 
  }

  ?>











    <div class="col-md-12 mb-3">

          <div class="card">

            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Pending Requests of Students
            </div>

              <div class="card-body">

                <div class="table-responsive">

                  <table id="example" class="table table-striped" style="width: 100%">
                    <thead>
                      <tr>
                        <th>Student Number</th>
                        <th>Full Name</th>
                        <th>Birthday</th>
                        <th>Age</th>
                        <th>Contact Number</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Time Registered</th>
                        <th>Actions</th>
                        <th hidden>ID</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
   

                    $stmt = $conn->prepare("SELECT pending_request.PendingID as PendingID, course.CourseID as CourseID, pending_request.Student_Number as 'Student Number'
                    ,pending_request.First_Name as Fname, pending_request.Middle_Name as Mname, pending_request.Last_Name as Lname,
                    pending_request.Date_of_Birth as Birthday, pending_request.Age as Age, pending_request.Contact_Number as 'Contact number',
                    pending_request.Gender as Gender, course.Course as Course, pending_request.Time_Registered as 'Time Registered' 
                    
                    
                    FROM pending_request
                    INNER JOIN course ON course.CourseID = pending_request.CourseID
                    Group by 1 ");
                    $stmt ->execute();
                    $result = $stmt->get_result();


                    if ($result->num_rows >0){
                        while ($row = $result -> fetch_assoc()){
                        $full_name = $row['Fname']." ".$row['Mname']." ".$row['Lname'];
                        $id = $row['PendingID'];
    
                    ?>

                      <tr>
                        <td hidden><?php echo $row['PendingID']?></td>
                        <td><?php echo $row['Student Number']?></td>
                        <td><?php echo $full_name?></td>
                        <td><?php echo $row['Birthday']?></td>
                        <td><?php echo $row['Age']?></td>
                        <td><?php echo $row['Contact number']?></td>
                        <td><?php echo $row['Gender']?></td>
                        <td><?php echo $row['Course']?></td>
                        <td><?php echo $row['Time Registered']?></td>

                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="images/baseline-remove-red-eye.svg">
                        </button>

                        <button type="button" class="btn btn-danger btn_pending" data-bs-toggle="modal" data-bs-target="#pending" id=""><img src="images/edit.svg"></button>
                        </td>
                      </tr>
                    
                      </tr>

                      <?php
                        }
                      }
                      ?>

                      
                    </tbody>

                    
            
                  </table>
                  
                </div>
              </div>

              
        </div>

        
    </div>


    
  </div>

                    









      <?php
       
      ?>






    <!-- DELETE CONFIRMATION -->

    <div class="modal fade" id="ask_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Warning</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


    
      <form method = "POST" action="functions/delete_student.php">


      <div class="modal-body">
      Do you want to Delete this Data?
      </div>
      
      <div class="modal-footer">

      <!-- GET ID OF EACH USERS IN TABLE -->
      <input type="hidden" name="del_id" id="del_id">         

      <!-- END OF GET ID OF EACH USERS IN TABLE -->

      <button type="submit" class="btn btn-danger" name="delete_stud">Yes</button>
      <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>

      </div>
      </form>


    </div>
  </div>
</div>
<!-- END OF DELETE CONFIRMATION -->



    <!-- PENDING  CONFIRMATION -->

    <div class="modal fade" id="pending" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Warning</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <form method = "POST" action="functions/pending_student.php">

      <div class="modal-body">
      Are your sure you want to Accept Student Request?
      <input type="hidden" name="pending_id" id="pending_id">  
      </div>
      
      <div class="modal-footer">

      <button type="submit" class="btn btn-success" name="accept_stud">Yes</button>
      <button type="submit" class="btn btn-danger" name="reject_stud">No</button>
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
      </div>

      </form>

    </div>
  </div>
</div>
<!-- END OF PENDING CONFIRMATION -->



<!-- MODAL FOR STUDENT INFO -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel ">Student Info</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- STUDENT INFO -->
        <div class="modal-body stud_info">
            <div class="container ">

              <div class="container-lg d-flex m-1 p-1">

             
              </div>  
         
        </div>
      </div>
    
        <!-- END OF STUDENT INFO -->

        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
<!-- END OF MODAL FOR STUDENT INFO -->























<!-- LOGOUT MODAL -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Warning</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are your sure you want to Logout?
      </div>
      
      <div class="modal-footer">

      <a href="logout.php"><button type="button" class="btn btn-danger">Yes</button></a>
      <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>

      </div>
    </div>
  </div>
</div>
<!-- END OF LOGOUT MODAL -->








        <!-- FORMS -->

   
        <div class="row">
          





        </div>



        
      </div>
    </main>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/functions_js.js"></script>



  </body>
</html>
