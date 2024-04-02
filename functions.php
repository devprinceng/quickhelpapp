<?php
// db connection
$con = connect();

//view helps
function viewhelps()
{
    global $con;
    $query = $dconn = $con->prepare("select * from helps");
    //bind parameters
    if ($query->execute()) {
        $result = $query->get_result()->fetch_assoc();

        return $result;
    }
}
//login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != '' && $password != "") {
        // prepare statement
        $query = $dconn = $con->prepare("select * from users where email = ? and password = ?");

        //bind parameters
        $query->bind_param("ss", $email, $password);
        if ($query->execute()) {
            $result = $query->get_result()->fetch_assoc();
            session_start();
            $_SESSION['email'] = $result['email'];
            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['auth_user_id'] = $result['id'];
            header('location:desk.php');
            exit;
        } else {
            session_start();
            $_SESSION['error'] = "incorrect email or password";
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
    } else {
        session_start();
        $_SESSION['error'] = "An error occurred, try again later";
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
}

//register
if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    if ($firstname != '' && $lastname != "") {
        // prepare statement
        $query = $dconn = $con->prepare("insert into users(firstname,lastname,email,phone,password) values (?,?,?,?,?)");

        //bind parameters
        $query->bind_param("sssss", $firstname, $lastname, $email, $phone, $password);
        //try execution
        if ($query->execute()) {
            $query = $dconn = $con->prepare("select * from users where email = ? and password = ?");

            //bind parameters
            $query->bind_param("ss", $email, $password);
            if ($query->execute()) {
                $result = $query->get_result()->fetch_assoc();
                session_start();
                $_SESSION['auth_user_id'] = $result['id'];
                $_SESSION['firstname'] = $firstname;
                header('location:desk.php');
                exit;
            }
        } else {
            //to use session notifications
            session_start();
            $_SESSION['error'] = "Registration Unsuccessful, try again";
            header("location: " . $_SERVER['HTTP_REFERER']);
        }

    }
}

//save help
if (isset($_POST['save_help'])) {
    $title = $_POST['title'];
    $message = $_POST['message'];
    $user_id = $_POST['user_id'];


    if ($title != '' or $message != '' or $user_id != '') {
        // prepare statement
        $query = $dconn = $con->prepare("insert into helps(title,message,user_id) values (?,?,?)");

        //bind parameters
        $query->bind_param("sss", $title, $message, $user_id);
        //try execution
        if ($query->execute()) {
            session_start();
            //send a success message into the session
            $_SESSION['success'] = "Help Submitted Successfully! \nWe will reach you via your email or phone immediately...";
            header('location:' . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            //to use session notifications
            session_start();
            $_SESSION['error'] = "Submission Unsuccessful, try again";
            header("location: " . $_SERVER['HTTP_REFERER']);
        }

    }
}
function connect()
{
    $servername = "localhost";
    $email = "root";
    $password = "";
    $dbname = "QuickHelp";

    //db connection
    try {
        $dbconn = new mysqli($servername, $email, $password, $dbname);
    } catch (mysqli_sql_exception $e) {
        session_start();
        $_SESSION['error'] = 'Could not connect to database';
        header("location:" . $_SERVER['HTTP_REFERER']);
        exit;
    }



    return $dbconn;
}
