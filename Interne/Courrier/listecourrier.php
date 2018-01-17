<?php
    require 'header.php';
    require_once 'function.php';
    session_start();


$id_client = $_POST['id_client'] ?? null;

if(isset($_POST['id_client'])) {
    afficheMesCourriers($id_client);
}
$limit=20;
$page = intVal($_GET['page'] ?? 1);
$query = $db->query("SELECT COUNT(*) nb_courrier FROM courrier WHERE 1 = 1 $search");
$count = intVal($query->fetch()['nb_courrier']);
$max_page = intVal(ceil($count / $limit));
$offset = ($page - 1) * $limit;



?>

<nav aria-label="Page navigation courrier">
    <ul class="pagination justify-content-center">
        <?php if ($page > 1) : ?>
            <li class="page-item">
                <a class="page-link" href="?<?php $_GET['page'] = $page - 1; echo http_build_query($_GET) ?>">Précédent</a>
            </li>
        <?php endif; ?>
        <?php if ($page < $max_page) : ?>
            <li class="page-item">
                <a class="page-link" href="?<?php $_GET['page'] = $page + 1; echo http_build_query($_GET) ?>">Suivant</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
