

<?php require "top.php"?>


<main role="main">

  <div>
    <span id="navTop"><a href="/">Channels</a></span>
    >
    <span id="classHeading"></span>
  </div>

  <ul id="top"></ul>

</main>


<script>
  const modules = (<?=getModules();?>)
  const from = `<?=$_GET['from'];?>`
  const sub_modules = modules[from]
  const midLevel = Object.keys(sub_modules)
</script>


<script>
  let doc = document.getElementById("top");
  midLevel.forEach((el) => {
    doc.innerHTML += `<li><a href="/lessons.php?from=${from}?${el}">${el}</a>  </li>`;
  });

  let heading = document.getElementById("classHeading")
  heading.innerHTML = `${from}`
</script>


<?php require "bottom.php"?>