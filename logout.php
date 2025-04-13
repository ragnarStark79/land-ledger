
<?php
// Include auth utilities
require_once 'includes/auth.php';

// Logout the user
logout();

// Redirect to home page
header('Location: index.php');
exit;
?>
