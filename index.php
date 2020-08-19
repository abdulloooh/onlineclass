<?php require "top.php"?>


<main role="main" style="text-align:center">
  <div class="row" id="top" style="justify-content:center"></div>
</main>


<script>
  const modules = (<?=getModules();?>)
  const toplevel = Object.keys(modules)
</script>


<script>
      let doc = document.getElementById("top");
      toplevel.forEach((el) => {
        doc.innerHTML += `
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <a href="/sub.php?from=${el}">
          <div class="card">
            <img src="./assets/images/rock.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">${el}</p>
            </div>
          </a>
        </div>
        `;
      });
</script>


