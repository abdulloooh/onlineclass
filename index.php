<?php require "top.php"?>


<main role="main">
  <ul id="top"></ul>
</main>


<script>
  const modules = (<?=getModules();?>)
  const toplevel = Object.keys(modules)
</script>


<script>
      let doc = document.getElementById("top");
      toplevel.forEach((el) => {
        doc.innerHTML += `<li><a href="/sub.php?from=${el}">${el}</a>  </li>`;
      });
</script>


<?php require "bottom.php"?>