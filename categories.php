<?php
declare(strict_types = 1);
include '../includes/database-connection.php';
include '../includes/functions.php';

$success = $_GET['sucess'] ?? null;
$failure = $_GET['failure'] ?? null;

$sql = "SELECT id , name, price FROM category";
$categories = pdo($pdo, $sql)-> fetchAll();
?>
<?php include '../includes/admin-header.php' ?>
<main class="container" id="content">
    <section class="header">
        <h1>Categories</h1>
    </section>
</main>