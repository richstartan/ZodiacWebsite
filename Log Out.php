 <!-- If the User wants to Log Out -->
 <?php
    session_start();
    // If the user logs out, all sessions will be destroyed instantly!
    if(session_destroy()) 
    {
        header("Location: Login Page.php"); // Redirect to Login page
    }
 ?>