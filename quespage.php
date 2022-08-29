<?php require 'extras/header.php';
if(isset($_POST['Opted'])){
    if(isset($_POST['opt'])){
        $option = $_POST['opt'];
        $QuesID = $_POST['QuesID'];
        $EmailID = $_SESSION['voter'];
        $qry = "SELECT * FROM answers WHERE EmailID=? AND QuesID=?";
        $run = $conn->prepare($qry);
        $run->execute([$EmailID, $QuesID]);
        if($run->rowCount()==0){
            // INSERT
            $insQry = "INSERT INTO answers(EmailID, QuesID, Opted) VALUES (?, ?, ?)";
            $runIns = $conn->prepare($insQry);
            $runIns->execute([$EmailID, $QuesID, $option]);
            if($runIns) echo '<script>alert("Your Responsed is Inserted !")</script>';
        }else{
            // UPDATE
            $AnsData = $run->fetch(PDO::FETCH_OBJ);
            $updQry = "UPDATE answers SET Opted=? WHERE AnsID=?";
            $runUpd = $conn->prepare($updQry);
            $runUpd->execute([$option, $AnsData->AnsID]);
            if($runUpd) echo '<script>alert("Your Responsed is Updated !")</script>';
        }

    }else echo '<script>alert("Select One Option !")</script>';
}
?>

<body>
    <?php require 'extras/navbar.php';
    $today = date('Y-m-d');
    $qry = "SELECT * FROM questions WHERE startDate<=? AND endDate>=?";
    $run = $conn->prepare($qry);
    $run->execute([$today, $today]);
    $nRec = $run->rowCount();
  ?>

<div class="container p-3">
    <form action="quespage.php" method="post">
    <?php
            while($qtn=$run->fetch(PDO::FETCH_OBJ)){
                echo '
        <div class="col w-75 m-auto">
            <div class="bg-light p-3 text-danger"><input type="hidden" name="QuesID" value="'.$qtn->QuesID.'">'.$qtn->QuesID.'. '.$qtn->Question.'"</div>
            <div class="row bg-light text-danger m-0 p-2">
            <div class="col"><input type="radio" value="1" name="opt" id="opt">1</div>
            <div class="col"><input type="radio" value="2" name="opt" id="opt">2</div>
            <div class="col"><input type="radio" value="3" name="opt" id="opt">3</div>
            <div class="col"><input type="radio" value="5" name="opt" id="opt">4</div>
            <div class="col"><input type="radio" value="6" name="opt" id="opt">5</div>
        </div>
        <div class="text-center m-3">
            <input class="btn btn-secondary w-50" type="submit" value="Vote" name="Opted">
        </div>';
    }
    ?>
    </form>
    </div> 
    <?php require 'extras/footer.php';?>
</body>
</html>