<?php
/*
 * Security Class
 * Handles CSRF token generation & validation
 * Handles XSS escaping
 */
class Security {

    // Generate CSRF Token
    public static function generateCsrfToken(){
        if(empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    // Verify CSRF Token
    public static function verifyCsrfToken($token){
        if(isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token)){
            return true;
        }
        return false;
    }

    // Get CSRF Input Field
    public static function csrfField(){
        $token = self::generateCsrfToken();
        return '<input type="hidden" name="csrf_token" value="' . $token . '">';
    }

    // Escape output for XSS prevention
    public static function esc($string){
        if (is_null($string)) {
            return '';
        }
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}
