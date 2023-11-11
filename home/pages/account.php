<?php include('connection.php'); 
session_start();

if (empty($_SESSION)) {
  $avatar = "avatars/unknown.jpg";
  $name= "No user";
} else {
  $avatar = $_SESSION['avtar'];
  $name = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 text-left">
            <button id="backButton" onclick="goBack()" class="btn btn-secondary mt-3">Back</button>

            </div>
            <div class="col-6 text-right">
                 
                                <a href="dataset.php"><h2 class="mt-4" id="datasetHeader">Datasets <img id="datasetIcon" src="../image/dataset.png" style="width:30px; height:30px;"></h2></a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 text-center mt-5">
                <img id="profilePicture" src="avatars/<?php echo $avatar ?>" class="rounded-circle" alt="Profile Picture">
                <h2 id="username" class="mt-3"><?php echo $name ?></h2>
                <a href="edit.php"><button id="editDetails" class="btn btn-primary mt-3">Edit Details</button></a>
            </div>
        </div>
    </div>
</body>
<script>
    function goBack() {
    window.location.href = "../index.php";
}
</script>
</html>