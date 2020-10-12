<?php
/**
 * Created 
 */
    class navigation {
        public function redirectNavigation() 
        {
            header("Location: http://www.google.com");
        }
    }

    $nav = new Navigation;

    print_r($nav);

    die;

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
    {
        $nav->redirectNavigation();
    } else if (sset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) 
    {
        $nav->redirectNavigation();
    }
?>
