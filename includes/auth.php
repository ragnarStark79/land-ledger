<?php
// Ensure the session is started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Check if user is logged in
 * 
 * @return bool True if user is logged in, false otherwise
 */
function isLoggedIn() {
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}

/**
 * Get current user information
 * 
 * @return array|null User information or null if not logged in
 */
function getCurrentUser() {
    if (isLoggedIn()) {
        return [
            'id' => $_SESSION['user_id'] ?? null,
            'name' => $_SESSION['user_name'] ?? 'User',
            'email' => $_SESSION['user_email'] ?? 'user@example.com'
        ];
    }
    return null;
}

/**
 * Require login to access page
 * 
 * @param string $redirect URL to redirect to if not logged in
 */
function requireLogin($redirect = 'login.php') {
    // Prevent redirection loop
    if (!isLoggedIn() && basename($_SERVER['PHP_SELF']) !== $redirect) {
        header("Location: $redirect");
        exit;
    }
}

/**
 * Logout current user
 */
function logout() {
    // Unset all session variables
    $_SESSION = array();
    
    // Delete the session cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    
    // Finally, destroy the session
    session_destroy();
}
?>
