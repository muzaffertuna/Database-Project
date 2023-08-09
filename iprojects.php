<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>My Projects</title>
    </head>
    <body>
        <h4>My Projects Informations</h4>
        <?php
        include '.\dbConnect.php';
        $ssn = $_GET['ssn'];
        $query = "SELECT pName "
                . "FROM project "
                . "WHERE leadSsn ='$ssn' ";
        $result = mysqli_query($conn, $query);
        ?>
    
    <div class = "container col-6 justify-content-center mt-5">
        <table class="table table-sm table-hover table-dark table-striped caption-top border-primary">
            <caption>My Leading Projects</caption>
            <tr>
                <th class="table-primary">Project Name</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $pName = $row["pName"];
                echo "<td>" .$pName. "</td></tr>";
            }
            ?>
        </table>
    </div>
        <?php $query2 = "SELECT pName "
                . "FROM project_has_instructor "
                . "WHERE issn ='$ssn' ";
                $result2 = mysqli_query($conn, $query2);
        ?>
    
    <div class = "container col-6 justify-content-center mt-5">
        <table class="table table-sm table-hover table-dark table-striped caption-top border-primary">
            <caption>My Working Projects</caption>
            <tr>
                <th class="table-primary">Project Name</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result2)) {
                $pName = $row["pName"];
                echo "<td>" .$pName. "</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>