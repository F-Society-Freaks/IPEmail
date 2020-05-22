<?php
require_once "includes/config.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="120">

    <title>IPEmail - Get IP address using a mail</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
</head>

<nav>
    <center>
        <h1 style="font-family: 'Signika', sans-serif;">IPEmail</h1>
        <p style="font-family: 'Signika', sans-serif;">Send a spoofed email, receive the IP of the person who opened it
        </p>
    </center>
    <hr>
</nav>

<body>
    <div class="container">
        <div class="col-12">
            <div class="jumbotron" style="background-color: white; padding: 25px;">
                <form action="sendMail.php" method="POST">
                    <div class="form-group">
                        <label>To Email</label>
                        <input type="text" name="emailto" class="form-control" placeholder="mail@example.com">
                    </div>

                    <div class="form-group">
                        <label>From Email</label>
                        <input type="text" name="emailfrom" class="form-control" placeholder="mail@example.com">
                    </div>

                    <div class="form-group">
                        <label>From Name</label>
                        <input type="text" name="namefrom" class="form-control" placeholder="SecretSomeone69">
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Important Update">
                    </div>

                    <div class="form-group">
                        <label>Message (HTML formatting allowed)</label>
                        <textarea name="message" class="form-control" rows="6"></textarea>
                    </div>
                    <p>For the IP tracking to work add this to the bottom of the email: <code>&lt;img src="https://eenzamekluizenaar.nl/ipemail/track.php" /&gt;</code></p>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>

        <div class="col-12">
            <div class="jumbotron" style="background-color: white; padding: 25px;">
                <a class="btn btn-primary" style="color: white;" href="clear.php">Clear</a><br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Click ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">IP (1)</th>
                            <th scope="col">IP (2)</th>
                            <th scope="col">User Agent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$sql = "SELECT * FROM `clicks`";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><th>" . $row['id'] . "</th><th>" . $row['date'] . "</th><th>" . $row['ip'] . "</th><th>" . $row['ip2'] . "</th><th>" . $row['ug'] . "</th></tr>";
}
?>
                    </tbody>
                </table>
                <p>Page refreshes automatically every 2 minutes</p>
            </div>
        </div>
    </div>
</body>

</html>