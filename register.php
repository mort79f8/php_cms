<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/style.css">
<?php
include_once "header.php";

$errormsg = "";
if (isset($_POST['rusername'])) {
    $formuser = $_POST['rusername'];
    $formfirst = $_POST['ruserfirstname'];
    $formpass = $_POST['rpassword'];
    $formpassrepeat = $_POST['rpasswordrepeat'];

    include_once 'includes/connect.php';
    $sql = "SELECT * FROM users WHERE username = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$formuser]);

    if ($row = $statement->fetch()) {
        $errormsg = "<h2 style='color: red'>Bruger er allerede registeret</h2>";
    } elseif ($formpass !== $formpassrepeat) {
        $errormsg = "<h2 style='color: red'>kodeordene er ikke det samme</h2>";
    } else {
        $sql = "INSERT INTO users(username, userfirstname, userpass) VALUES(?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$formuser, $formfirst, password_hash($formpass, PASSWORD_DEFAULT)]);
        $errormsg = "<h2 style='color: green'>bruger oprettet</h2>";
        header("Refresh:2; url=index.php", true, 303);
    }
}

?>

<section>
    <div class="register-section">
        <h2>Opret ny bruger</h2>
        <form action="" method="POST" class="register-form">
            <div>
                <label for="rusername">Bruger navn </label>
                <input type="text" name="rusername" id="rusername" placeholder="Bruger navn" required>
            </div>
            <div>
                <label for="ruserfirstname">Fornavn </label>
                <input type="text" name="ruserfirstname" id="ruserfirstname" placeholder="Fornavn" required>
            </div>
            <div>
                <label for="rpassword">Kodeord </label>
                <input type="password" name="rpassword" id="rpassword" placeholder="Kodeord" required>
            </div>
            <div>
                <label for="rpasswordrepeat">Gentag kodeord </label>
                <input type="password" name="rpasswordrepeat" id="rpasswordrepeat" placeholder="Gentag kodeord" required>
            </div>
            <input type="submit" value="Opret bruger">
        </form>
        <?= $errormsg;
        ?>
    </div>
</section>
<?php
include_once "footer.php"
?>