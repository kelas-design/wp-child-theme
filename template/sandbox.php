<?php
/**
 * Template Name: Sandbox
 */

get_header();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $theme = $_POST['theme'];
    $plugin = $_POST['plugin'];
    $wpversion = $_POST['wpversion'];
    $phpversion = $_POST['phpversion'];
} else {
    echo "<h4 class='mt-5'> Data tidak diketemui, please choose your environment in the main page </h4>";
}
?>

<?php if (isset($theme)): ;?>
	<iframe
	    src="https://playground.wordpress.net?mode=browser-full-screen&php-extension-bundle=kitchen-sink&networking=yes&theme=<?php echo $theme; ?>&plugin=<?php echo $plugin; ?>"
	    class="vw-100 vh-100"></iframe>
	<?php endif;?>