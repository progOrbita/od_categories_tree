<?php
require_once __DIR__ . '/src/Categories.php';
require_once __DIR__ . '/src/Tree.php';
include_once('../../config/config.inc.php');

$cat = new Categories(1);
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="views/css/styles.css" rel="stylesheet" />
</head>

<body>
  <div class='form-group categories border border-secondary'>
    <h2>CATEGORIES</h2>
    <input type="text" class="w-100" placeholder="Search categories">
    <h6>ASSOCIATED CATEGORIES</h6>
    <div class="categories-tree">
      <div class="associated-cat border border-secondary"></div>
      <h6 class="expand border-bottom"><i class="fa fa-angle-up"></i>COLLAPSE</h6>
      <?php
      echo Tree::makeTree($cat->getInfoTree($cat->id_root));
      ?>
    </div>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="views/js/script.js"></script>

</html>