<?php
    session_start();
    include 'connect.php';
    $link = mysqli_connect('localhost:3306', 'root', '');
    mysqli_select_db($link , 'mycontact');
    $statement = mysqli_prepare($link,"select * from contact where userid = ?");
    mysqli_stmt_bind_param($statement,'s',$_SESSION['name']);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

        $user = mysqli_fetch_assoc($result);

?>

<?php
global $currentPage;
$currentPage = 'home';
include 'header.php';
?>

    <div class="panel panel-default">
        <div class="panel-heading">Contacts List</div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $count = 0;
                    while($user = mysqli_fetch_assoc($result)){
                        $count++;
                ?>
                <tr>

                    <td><?php echo $count; ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['number'] ?></td>
                    <td>


                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">مدیریت<span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/edit.php?id=<?= $user['id']?>">ویرایش</a></li>
                                <li><a href="/delete.php?id=<?= $user['id']?>">حذف</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>


<?php include 'footer.php'; ?>