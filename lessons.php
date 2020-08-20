<?php require "top.php"?>


<main role="main" style="text-align:center">
  <div style="margin-bottom:20px">
    <span id="navTop"></span>
    >
    <span id="classHeading"></span>

  </div>

  <div class="row" id="top" style="justify-content:center"></div>
</main>


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


<script>
      let doc = document.getElementById("top");
      lesson_names.forEach((el) => {
        doc.innerHTML += `
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <a href="/load.php?from=${from}?${el}">
          <div class="card">
            <img src="./assets/images/rock.jpeg" class="card-img-top" alt="rocket image">
            <div class="card-body">
              <p class="card-text">${el}</p>
          </div>
          </a>
        </div>
        `;
      });

      let navigation = document.getElementById("navTop")
      navigation.innerHTML = `<a href="/">Channels</a> \> <a href="/sub.php?from=${topLevel}">${topLevel}</a>`


      let heading = document.getElementById("classHeading")
      heading.innerHTML = `${midLevel}`
</script>


