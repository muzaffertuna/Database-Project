<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>My Advising Gradstudents</title>
    </head>
    <body>
        <h4>My Advising Gradtudents Informations</h4>
        <?php
        include '.\dbConnect.php';
        $ssn = $_GET['ssn'];
        $query = "SELECT ssn, studentname "
                . "FROM gradstudent G NATURAL JOIN Student S "
                . "WHERE advisorSsn ='$ssn' ";
        $result = mysqli_query($conn, $query);
        ?>
    
    <div class = "container col-6 justify-content-center mt-5">
        <table class="table table-sm table-hover table-dark table-striped caption-top border-primary">
            <caption>My Advising Gradstudents</caption>
            <tr>
                <th class="table-primary">SSN</th>
                <th class="table-primary">Student Name</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $sssn = $row["ssn"];
                $studentName = $row["studentname"];
                echo "<td>" .$sssn. "</td>";
                echo "<td>" .$studentName. "</td></tr>";
            }
            ?>

        </table>
    </div>
</body>
</html>
