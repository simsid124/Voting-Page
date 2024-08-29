<?php require 'extras/header.php'; 

if(isset($_POST['sbmBtn'])){
    $EmailID= $_POST['EmailID'];
    $password = $_POST['password'];

    $qry = "INSERT INTO voters (EmailID, password) VALUES(:EmailID, :password)";
    $run_qry = $conn->prepare($qry);

    $data = [
        ':EmailID'=>$EmailID,
        ':password'=>$password,
    ];
    $run_qry->execute($data);
    if($run_qry){
        $_SESSION['voter'] = $EmailID;
        header('Location: home.php');
    } else{
        echo "User Not Inserted, Successfully";
    }
}
?>
<body>
    <?php require 'extras/navbar.php'; ?>

    <div class="container p-3">
    <form action="signup.php" method="POST">
        <div class="col w-50 m-auto">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="EmailID" name="EmailID" placeholder="name@example.com" required>
                <label for="EmailID">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <div class="text-center">
                <input type="submit" value="Submit" name="sbmBtn" class="btn btn-secondary w-50">
            </div>
        </div>
    </form>
    </div>

    <?php require 'extras/footer.php'; ?>
</body>
</html>