<!-- admin dashbord page with options for admin -->

<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<style>
    body {
        background-image: url('../images/6.png');
        background-size: 420mm 165mm;
        background-position-y: 26mm;
    }
</style>

<div class="admintitle">
    <div>
        <h5><a href="../index.php" style="float: left; margin-left:20px; color:white;">LoginAsUser</a></h5>
        <h5><a href="logout.php" style="float: right; margin-right:20px; color:white;">LogOut</a></h5>
    </div>
    <h1 align='center' style=" color:white; font-size:50px;text-shadow: 0.1em 0.1em 0.15em black;">Welcome To Admin Dashbord</h1>
</div>
<div align="center" style="margin-top:240px;">
    <form style="position: center;color:lightblue;font-weight:bold;font-size:50px">

        <!-- <a href="insertdata.php">Insert Data</a><br><br> -->

        <!-- <a href="updatedata.php">Update Data</a><br><br> -->

        <a href="deletedata.php" style=" color:black;"><i>Delete Data</i></a><br><br>

        <a href=" deleteusers.php" style="color:black;  "><i>Delete Users</i></a><br><br>
    </form>

</div>
</body>

</html>
