<?php
require "fetch.php";
?>
<script>
  const modules = (<?=getModules();?>)
  const toplevel = Object.keys(modules)
</script>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <ul id="top"></ul>

    <script>
      let doc = document.getElementById("top");
      toplevel.forEach((el) => {
        doc.innerHTML += `<li><a href="/sub.php?from=${el}">${el}</a>  </li>`;
      });
    </script>
  </body>
</html>
