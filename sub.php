

<?php require "top.php"?>


<main role="main" style="text-align:center">

  <div style="margin-bottom:20px">
    <span id="navTop"><a href="/">Channels</a></span>
    >
    <span id="classHeading"></span>
  </div>

  <div class="row" id="top" style="justify-content:center"></div>

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
    doc.innerHTML += `
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <a href="/lessons.php?from=${from}?${el}">
      <div class="card">
        <img src="./assets/images/rock.jpeg" class="card-img-top" alt="rocket image">
        <div class="card-body">
          <p class="card-text">${el}</p>
      </div>
      </a>
    </div>
    `;
  });

  let heading = document.getElementById("classHeading")
  heading.innerHTML = `${from}`
</script>

