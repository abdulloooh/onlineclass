<?php
require "fetch.php";
?>
<script>
  const modules = (<?=getModules();?>)
  let from = `<?=$_GET['from'];?>`
  let topLevel
  let midLevel
  [topLevel , midLevel] = from.split("?")
  const lesson_modules = modules[topLevel][midLevel]
  let lesson_names = []
  lesson_modules.forEach(el => {
        lesson = el.split('.')
        lesson.splice(-1)
        lesson = lesson.join('.')
        lesson_names.push(lesson)
  })
  lesson_names = lesson_names.filter((el,index)=>lesson_names.indexOf(el)===index)

</script>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div id="navTop"></div>
    <h3 id="classHeading"></h3>

    <ul id="top"></ul>

    <script>
      let doc = document.getElementById("top");
      lesson_names.forEach((el) => {
        doc.innerHTML += `<li><a href="/load.php?from=${from}?${el}">${el}</a>  </li>`;
      });

      let navigation = document.getElementById("navTop")
      navigation.innerHTML = `<a href="/">Channels</a>/<a href="/sub.php?from=${topLevel}">${topLevel}</a>`


      let heading = document.getElementById("classHeading")
      heading.innerHTML = `${midLevel}`
    </script>
  </body>
</html>
