<?php
require "fetch.php";
?>
<script>
  const modules = (<?=getModules();?>)
  const from = `<?=$_GET['from'];?>`
  const sub_modules = modules[from]
  const midLevel = Object.keys(sub_modules)
</script>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
  <div><a href="/">Channels</a></div>

  <h3 id="classHeading"></h3>
  <ul id="top"></ul>

    <script>
      let doc = document.getElementById("top");
      midLevel.forEach((el) => {
        doc.innerHTML += `<li><a href="/lessons.php?from=${from}?${el}">${el}</a>  </li>`;
      });

      let heading = document.getElementById("classHeading")
      heading.innerHTML = `${from}`
    </script>
  </body>
</html>
