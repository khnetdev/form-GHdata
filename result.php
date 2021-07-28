<?php require("connect.php") ?>
<?php include("header.php"); ?>
<h1>Table Data</h1>
<div class="card">
    <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Github</th>
            </tr>
            </thead>
            <tbody>

    <?php
        $name = "";
        $email = "";
        $github = "";
        $data = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(!empty($_POST["name"])) {
                $name = htmlspecialchars($_POST["name"]);
            } else {
                $name = " ";
            }

            if(!empty($_POST["email"])) {
                $email = htmlspecialchars($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $email = "Invalid email format";
                }
            } else {
                $email = "";
            }

            if(!empty($_POST["github"])) {
                $github = htmlspecialchars($_POST["github"]);
                $githubRegex =  '/^(http(s?):\/\/)?(www\.)?github\.([a-z])+\/([A-Za-z0-9]{1,})+\/?$/i';
                if (!preg_match($githubRegex, $github)) {
                    $github = "Invalid github url format";
                }
            } else {
                $github = " ";
            }
            $data = "INSERT INTO data(id, myname, email, github) values(null, ' $name ', ' $email ' , ' $github ')";
        } 
        
        if (!mysqli_query($connection, $data)) {
            echo "<h1>SQL error</h1>" . mysqli_error($connection);
        }
        
        $sql = "SELECT * FROM data";
        $mysql = mysqli_query($connection, $sql);

        while($alldata = mysqli_fetch_assoc($mysql)) {
            print "<tr>
            <td> ". $alldata["myname"] . "</td> .
            <td> ". $alldata["email"] . "</td> .
            <td> ". $alldata["github"] . "</td>
            </tr>";
        }
    ?>

        </tbody>
    </table>
</div>

<?php include("footer.php"); ?>