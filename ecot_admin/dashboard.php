<?php
session_start();
require_once 'db.php';

include("../includes/top-nav.php");
include("../includes/menu-nav.php");



if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
// echo "Welcome, you are logged in!";

?>



<main id="tg-main" class="tg-main tg-haslayout container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>

    <p>Welcome, you are logged in!<a href="logout.php">Logout</a></p>
    <p>Changes can be made to <?php echo $_SESSION['faculty_id']; ?></p>




</main>

<script>
    window.onload = () => {
        const d = new Date(),
            day = d.getDate();
        const suffix = ['th', 'st', 'nd', 'rd'][((day % 10) < 4 && (day % 100 - day) !== 10) ? day % 10 : 0];
        document.getElementById("tg-datebox").textContent = d.toLocaleDateString('en-US', {
            weekday: 'long',
            month: 'short',
            day: 'numeric',
            year: 'numeric'
        }).replace(/\d+/, day + suffix);
    };
</script>