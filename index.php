<?php

header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (!empty($_GET['save'])) {
    print('Спасибо, результаты сохранены.');
  }
  include('form.php');
  exit();
}

$errors = FALSE;
if (empty($_POST['fio'])) {
  print('Please, fill up the name row.<br/>');
  $errors = TRUE;
}
if (empty($_POST['email'])) {
  print('Please, fill up the email row.<br/>');
  $errors = TRUE;
}
if (empty($_POST['year'])) {
  print('Please, fill up the year row.<br/>');
  $errors = TRUE;
}
if (empty($_POST['abilities'])) {
    print('Please, fill up the abilities row.<br/>');
    $errors = TRUE;
}

$abilities = serialize($_POST['abilities']);
$ability1 = in_array('immortality', $_POST['abilities']) ? '1' : '0';
$ability2 = in_array('wallhack', $_POST['abilities']) ? '1' : '0';
$ability3 = in_array('levitation', $_POST['abilities']) ? '1' : '0';


if ($errors) {
  exit();
}


$user = 'u20419';
$pass = '9620609';
$db = new PDO('mysql:host=localhost;dbname=u20419', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

try {
  $stmt = $db->prepare("INSERT INTO application SET name = ?, email = ?, year = ?, gender = ?, lungs = ?, immortality = ?, wallhack = ?, levitation = ?, biography = ?");
  $stmt -> execute(array($_POST['fio'], $_POST['email'], $_POST['year'], (int)$_POST['gender'], $_POST['lungs'], $ability1, $ability2, $ability3, $_POST['biography']));
}
catch(PDOException $e){
  print('Error : ' . $e->getMessage());
  exit();
}

print_r('Thanks, the rersults are saved');
