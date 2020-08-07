<?php include 'fetch.php';?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8' />
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0' />
<title>Class Video Gallery</title>
<link rel = 'stylesheet' href = './assets/bootstrap/css/bootstrap.min.css' />
<link rel = 'stylesheet' href = './assets/main.css' />
</head>

<body>
<div class = 'container'>
  <?php $dir = "";?>
  <div id=<?=$dir;?> class="row">
    <?php foreach ($classTree as $key => $value): ?>
        <?php $dir .= $key;?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title"></div>
              <div class="card-text">
                <h3><?=$key;?></h3>
              </div>
          </div>
        </div>
    <?php endforeach;?>
  </div>
</div>
</body>
</html>
