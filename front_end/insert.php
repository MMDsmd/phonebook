
<?php
global $currentPage;
$currentPage = 'contacts';
include 'header.php';
?>

<?php
    session_start();
    $name = $_POST['name'];
    $number = $_POST['number'];

    $link = mysqli_connect('localhost:3306', 'root', '');
    // if (!$link){
    // //     echo 'could not connect: '.mysqli_connect_error();
    // //     exit;
    // }
    mysqli_select_db($link, 'mycontact');


    // $SQL = "insert into users (email , password) values ('{$email}','{$password}')" ;
    $statement = mysqli_prepare($link, "insert into contact (userid,name ,number) values (?,?,?)");
    mysqli_stmt_bind_param($statement, 'sss', $_SESSION['name'], $name, $number);
//    mysqli_stmt_execute($statement);

    if ($result = mysqli_stmt_execute($statement)) {

        // $succes = true ;
//        var_dump(mysqli_stmt_affected_rows($statement));
        echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>You successfully read this important alert message.</div>';

    }
//    else {
//        echo 'error: ' . mysqli_error($link);

//    }
?>



    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3 class="example-title">Create New Contact</h3>
            <form method="post" action="./insert.php">
                <div class="row">
                    <div class="col-6" style="margin-top: 20px;">
                        <input type="text" name="name" class="form-control" placeholder="Enter Contact Name" required>
                    </div>
                    <div class="col-6" style="margin-top: 20px;">
                        <input type="text" name="number" class="form-control" placeholder="Enter Your Phone Number" required>
                    </div>
                    <div class="col-6" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-primary btn-block" style="width: 65px;">Create</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>


<?php include 'footer.php'; ?>