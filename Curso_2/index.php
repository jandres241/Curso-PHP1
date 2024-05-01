<?php

require_once 'const.php';
require_once 'functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);

?>

<?php render_template('head', $data); ?>
<?php render_template('main', $data); ?>
<?php require_once 'styles/styles.php'; ?>

