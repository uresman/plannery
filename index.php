<?php
// Start session (for future PHP login/authentication)
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Planner Pro - Complete System</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Your existing CSS -->
    <style>
        /* ✅ KEEP ALL YOUR CSS EXACTLY AS IS */
        <?php /* CSS unchanged */ ?>
    </style>
</head>
<body>

<?php
// Optional: example PHP variable usage later
// echo "<!-- Logged in user: " . ($_SESSION['user'] ?? 'Guest') . " -->";
?>

<!-- ================= NAVIGATION ================= -->
<nav class="navbar">
    <div class="container nav-container">
        <div class="logo">
            <div class="logo-icon">💒</div>
            <h1>Plannery</h1>
        </div>

        <div class="nav-links">
            <a href="#" onclick="showSection('home')" class="active" id="home-link">Home</a>
            <a href="#" onclick="showSection('venues')" id="venues-link">Venues</a>
            <a href="#" onclick="showSection('budget')" id="budget-link">Budget Calculator</a>
            <a href="#" onclick="showSection('wishlist')" id="wishlist-link">
                Wishlist <span id="wishlist-count">(0)</span>
            </a>

            <!-- PHP-ready auth buttons -->
            <div id="auth-nav">
                <a href="#" onclick="showAuthModal()" class="btn btn-outline">Login / Register</a>
            </div>

            <div id="user-nav" class="user-info hidden">
                <div class="avatar" onclick="toggleUserDropdown()" id="user-avatar">U</div>
                <span id="user-name">User</span>
            </div>

            <a href="#" onclick="showSection('admin')" id="admin-link" class="hidden">Admin</a>
        </div>
    </div>
</nav>

<!-- ================= MAIN CONTENT ================= -->
<?php
// 🔽 Everything below stays EXACTLY the same as your HTML
// Home Section, Venues, Budget, Wishlist, Admin, Modals, Footer
?>

<!-- ⚠️ PASTE YOUR ENTIRE BODY CONTENT HERE UNCHANGED -->
<!-- (home-section, venues-section, scripts, etc.) -->

<!-- ================= JAVASCRIPT ================= -->
<script>
    // ✅ Keep all JavaScript unchanged
</script>

</body>
</html>
