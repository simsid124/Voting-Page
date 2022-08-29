<?php require 'extras/header.php'; 
    $today = date('Y-m-d');
    $qID = 1;

?>
<script type="text/javascript" src="extras/chart.js"></script>
<script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Option", "Number of votes"],
            <?php
                // echo "SELECT * FROM questions WHERE QuesID=?";
                $rLDate = $conn->prepare("SELECT * FROM questions WHERE QuesID=?");
                $rLDate->execute([$qID]);
                $dLDate = $rLDate->fetch(PDO::FETCH_ASSOC);
                // echo $dLDate->endDate;

                $q = "SELECT DISTINCT Opted, COUNT(Opted) AS Num FROM answers WHERE QuesID=? GROUP BY Opted";
                $p = $conn->prepare($q);
                $p->execute([$qID]);
                while($d=$p->fetch(PDO::FETCH_ASSOC)){
                    echo "['".$d["Opted"]."', ".$d["Num"]."],";
                }
            ?>
        ]);

        var options = {
            title: 'Result',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
        }
    </script>
<body>
    <?php
    // echo $today.' '.$dLDate['endDate'];
        if(strtotime($dLDate['endDate'])<=strtotime($today)){
            echo '<div id="piechart_3d" style="width: 900px; height: 900px;margin: 0 auto;"></div>';
        }else echo '<script>alert("Wait for Last Date!")</script>';
        ?>
        <?php require 'extras/footer.php'; ?>
</body>
</html>