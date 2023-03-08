<?php
 include 'connection.php';
 $conn = openCon();


    $stud_num = "";
    $email = "";
    $age = "";
    $fname ="";
    $lname ="";
    $mname ="";

    $homeno ="";
    $street =""; 
    $brgy ="";
    $city ="";
    $prov ="";
    $cnum ="";

    $dob = "";
    $age ="";
    $age ="";
    $pob ="";


    $gender =  "";
    $cnum = "";
    $pname = "";
    $religion = "";

    $course = "";
    $job = "";
    $relation ="";
    $pic = "";

    $pnum = "";


   /*  $folderPath = 'upload/';

    $image_parts = explode(";base64",$_POST['image']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux;
    $image_base64 = base64_decode($image_parts[1]);
   
    $file  = $folderPath . uniqid(). '.png';
    file_put_contents($file, $image_base64);

    $imgname = ($file. $image_base64);
   
    echo json_encode("image successfully uploaded");
    */

    date_default_timezone_set('Asia/Macau');
    $time_stamp = date("m-d-Y") ." ". date('h:i:s');
    


 if(isset($_POST['submit'])){


        $fpic = $_POST['fpic'];
        $stud_num = mysqli_real_escape_string($conn, $_POST['stud_num']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $mname = mysqli_real_escape_string($conn, $_POST['mname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);



  
        $homeno = mysqli_real_escape_string($conn, $_POST['homeno']);
        $street = mysqli_real_escape_string($conn, $_POST['street']);
        $brgy = mysqli_real_escape_string($conn, $_POST['brgy']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $prov = mysqli_real_escape_string($conn, $_POST['prov']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);

        $religion = mysqli_real_escape_string($conn, $_POST['religion']);
        $pob = mysqli_real_escape_string($conn, $_POST['pob']);


        $dob = mysqli_real_escape_string($conn, $_POST['dob']);


        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $cnum = mysqli_real_escape_string($conn, $_POST['cnum']);
        $pname = mysqli_real_escape_string($conn, $_POST['pname']);
        $pnum = mysqli_real_escape_string($conn, $_POST['pnum']);
        $relation = mysqli_real_escape_string($conn, $_POST['relation']);


        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $job = mysqli_real_escape_string($conn, $_POST['job']);
        $relation = mysqli_real_escape_string($conn, $_POST['relation']);



        $fullname = $fname." ".$lname;
       /*  $address = $homeno." ".$street." ".$brgy." ".$city." ".$prov; */



        $select = " SELECT * FROM student_table WHERE Student_Number = '$stud_num'";       
        $validate_stud_num = mysqli_query($conn, $select);



        if(strlen($stud_num)<5){
            $error = "Student Number Must More Than 5 Numbers";
        }

        else if ((strlen($cnum)<10) || (strlen($cnum)>10)){
            $error = "Contact Number Must 10 Numbers";
        }

        else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $error = "Invalid Email Format";
        }

        else {

            if(mysqli_num_rows($validate_stud_num) > 0){
        
                echo '<script>alert("Student Number Already Exists")</script>';
            
            }
            
            else{
                    $insert = "INSERT INTO student_table(Student_Number, First_Name, Middle_Name, Last_Name, Age, Date_of_Birth, 
                    Place_of_Birth,Religion,Gender, HomeNo,Street,Barangay,City,Province, Contact_Number, Email, CourseID, Parents_Name, Relationship,Number,Occupation
                    ,images,Time_Registered)
                    
                    VALUES ('$stud_num','$fname','$mname','$lname','$age','$dob','$pob','$religion','$gender',
                    '$homeno','$street','$brgy','$city','$prov','$cnum','$email','$course','$pname',
                    '$relation','$pnum','$job','$fpic','$time_stamp')";
                
    
                    $result = mysqli_query($conn, $insert) or die($conn->error);

                    $_SESSION['add'] = "Registered Successfully";
                    header('location:student_table.php');
            
            }    

        }

         

 }


?>