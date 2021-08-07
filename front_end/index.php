<?php
    global $link ;

    include 'config.php';
    $contacts = get_list('user');
?>

<?php
global $currentPage;
$currentPage = 'login';
include 'header.php'; ?>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="example-title">Login</h2>
                <form method="post" action="../front_end/home.php">
                    <div class="row">
                        <div class="col-6" style="margin-top: 20px;">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-6" style="margin-top: 20px;">
                            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                        </div>
                        <div class="col-6" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-primary btn-block" style="width: 65px;">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>


<?php include 'footer.php'; ?>