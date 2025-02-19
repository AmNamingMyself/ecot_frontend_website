<?php
session_start();
include 'db.php';

include("../includes/top-nav.php");
include("../includes/menu-nav.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password, faculty_id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password, $faculty_id);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $username;
            $_SESSION['faculty_id'] = $faculty_id; // Store faculty ID in session
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid credentials!";
        }
    } else {
        echo "User not found!";
    }
    $stmt->close();
}
?>



<main id="tg-main" class="tg-main tg-haslayout">


    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>


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