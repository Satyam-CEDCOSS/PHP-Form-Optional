<?php
// print_r($_POST);die;
if (
    $_POST['name'] && $_POST['email'] &&
    $_POST['address'] && $_POST['number'] && $_POST['age']
) {
    $fill = 1;
}
if (preg_match('/^[0-9]{10}+$/', $_POST['number'])) {
    $number = 1;
}
if (0 < $_POST['age'] && $_POST['age'] < 100) {
    $age = 1;
}
if ($age && $fill && $number) {
    print_r("The Form is Valid");
    die;
}
print_r("This form has some invalid Detail or unfilled Value");