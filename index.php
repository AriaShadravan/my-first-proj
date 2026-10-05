<?php
/**
 * 🔒 PHP Secure Password Generator
 * A simple CLI tool to generate cryptographically secure passwords.
 */
function generateSecurePassword($length = 16) {
    // Character sets to use in the password
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers   = '0123456789';
    $symbols   = '!@#$%^&*()-_=+[]{}|;:,.<>?';
    // Combine all characters
    $allChars = $uppercase . $lowercase . $numbers . $symbols;
    $password = '';
    $max = strlen($allChars) - 1;
    // Generate cryptographically secure random string
    for($i = 0; $i < $length; $i++) {
        $password .= $allChars[random_int(0, $max)];
    }
    return $password;
}
// Check if the script is running in CLI mode
if(php_sapi_name() !== 'cli') {
    die("❌ Error : This script must be run from the command line (CLI).\n");
}
// UI Header
echo "\n===================================\n";
echo "  🔒 PHP Secure Password Generator  \n";
echo "===================================\n\n";
// Get length from command line arguments or use default
$length = 16; // Default password length
if(isset($argv[1]) && is_numeric($argv[1])) {
    $length = (int)$argv[1];
}
if($length < 8) {
    echo "⚠️  Warning : Passwords shorter than 8 characters are not secure!\n\n";
}
// Generate and display the password
$password = generateSecurePassword($length);
echo "Length: $length characters\n";
echo "Your Secure Password:\n\n";
// Print in green text for better CLI UX
echo "\033[1;32m  $password  \033[0m\n\n";
echo "===================================\n\n";
?>
