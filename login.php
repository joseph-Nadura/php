<?php
//session_start();
include 'connection.php';

if(isset($_POST['login'])){
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query to check in users table
    $sql1 = "SELECT * FROM users WHERE USERNAME = '$username' AND STATUS=1";
    $query1 = $conn->query($sql1);

    // Query to check in student table
  /*  $sql2 = "SELECT * FROM student WHERE STUDENTID = '$username' AND STATUS=1";
    $query2 = $conn->query($sql2);

    // Query to check in faculty table
    $sql3 = "SELECT * FROM faculty WHERE FACULTYID = '$username' AND STATUS=1";
    $query3 = $conn->query($sql3);

    // Query to check in book table
    $sql4 = "SELECT * FROM book WHERE BOOKID = '$username' AND STATUS=1";
    $query4 = $conn->query($sql4);  
*/


    if($query1->num_rows > 0){
        $row = $query1->fetch_assoc();
        if($password == $row['PASSWORD']){
            $_SESSION['admin'] = $row['ID'];

            switch($row['ROLE']){

                case "admin":
                    header('location:app/dashboard.php');
                    break;

                case "student":
                    header('location:app/student.php');
                    break;

                case "faculy":
                    header('location:system/faculty.php');
                    break;

                case "Book":

                    header('location:system/book.php');
                    break;

                case "employeee":
                    header('location:app/employee.php');
                    break;

                case "supply":
                    header('location:system/supply_home.php');
                    break;
                    
                default:
                    header('location:app/user_home.php');
                    break;
            }

            // Log user login
            $host = $_SERVER['HTTP_HOST'];
            $uip = $_SERVER['REMOTE_ADDR'];
            $status = 1;
            // Uncomment below to log user login
            // $sql=mysqli_query($conn,"INSERT INTO tbl_userlog(UID,USERNAME,USERIP,STATUS) VALUES('".$_SESSION['admin']."','".$username ."','$host','$status')");

        } else {
            $_SESSION['error'] = 'Incorrect password';
            header('location: index.php');
        }
    } 
    
    elseif($query2->num_rows > 0){
        $row = $query2->fetch_assoc();
        if($password == $row['LASTNAME']){
            $_SESSION['admin'] = $row['ID'];

            if($row['ROLE'] == "Student"){
                header('location:student/student.php');
            }           
            
            // Log user login
            $host = $_SERVER['HTTP_HOST'];
            $uip = $_SERVER['REMOTE_ADDR'];
            $status = 1;
            // Uncomment below to log user login
            // $sql=mysqli_query($conn,"INSERT INTO tbl_userlog(UID,USERNAME,USERIP,STATUS) VALUES('".$_SESSION['admin']."','".$username ."','$host','$status')");

        } else {
            $_SESSION['error'] = 'Incorrect password';
            header('location: index.php');
        }
    } 
    
    elseif($query3->num_rows > 0){
        $row = $query3->fetch_assoc();
        if($password == $row['LASTNAME']){
            $_SESSION['admin'] = $row['IDguard'];

            if($row['ROLE'] == "Faculty"){
            header('location:faculty/faculty.php');
            }
            // Log user login
            $host = $_SERVER['HTTP_HOST'];
            $uip = $_SERVER['REMOTE_ADDR'];
            $status = 1;

            // Uncomment below to log user login
            // $sql=mysqli_query($conn,"INSERT INTO tbl_userlog(UID,USERNAME,USERIP,STATUS) VALUES('".$_SESSION['admin']."','".$username ."','$host','$status')");

        } else {
            $_SESSION['error'] = 'Incorrect password';
            header('location: index.php');
        }
    } 
    
    elseif($query3->num_rows > 0){
        $row = $query3->fetch_assoc();
        if($password == $row['LASTNAME']){
            $_SESSION['admin'] = $row['ID'];

            if($row['ROLE'] == "dean"){
            header('location:dean/dean.php');
            }
            // Log user login
            $host = $_SERVER['HTTP_HOST'];
            $uip = $_SERVER['REMOTE_ADDR'];
            $status = 1;

            // Uncomment below to log user login
            // $sql=mysqli_query($conn,"INSERT INTO tbl_userlog(UID,USERNAME,USERIP,STATUS) VALUES('".$_SESSION['admin']."','".$username ."','$host','$status')");

        } else {
            $_SESSION['error'] = 'Incorrect password';
            header('location: index.php');
        }
    } 

    else {
        $_SESSION['error'] = 'Username or password not found!';
        header('location: index.php');
        $host = $_SERVER['HTTP_HOST'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 0;
        // Log failed login attempt
        // $sql=mysqli_query($conn,"INSERT INTO tbl_userlog(UID,USERNAME,USERIP,STATUS) VALUES('".$_SESSION['admin']."','".$username ."','$host','$status')");
    }
} 

else {
    $_SESSION['error'] = 'Input admin credentials first';
    header('location: index.php');
}
?>
