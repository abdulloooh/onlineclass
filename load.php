<?php require "top.php"?>


<!-- <style>
      @media(max-width:760px){
        video{
        width:100%;
        /* height:100%; */
        /* object-fit:cover; */
        }
        #top{
          /* height:400px; */
        }
      }
  </style> -->

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
  let from = `<?=$_GET['from'];?>`
  let topLevel
  let midLevel
  [topLevel , midLevel, fileLevel] = from.split("?")
  const lesson_modules = modules[topLevel][midLevel]
  const fileLinks= [`./modules/${topLevel}/${midLevel}/${fileLevel}.pdf`, `./modules/${topLevel}/${midLevel}/${fileLevel}.mp4`]
</script>



<script>
      let doc = document.getElementById("top");

        doc.innerHTML +=
        `
            <video width="380" height="260"  controls poster="rocket.webp">
                <source src="./modules/${topLevel}/${midLevel}/${fileLevel}.mp4">

                Your browser does not support the video tag.
            </video>
            <br><br>
            <a href="./modules/${topLevel}/${midLevel}/${fileLevel}.pdf">${fileLevel}.pdf</a>
        `

      let navigation = document.getElementById("navTop")
      navigation.innerHTML = `<a href="/">Channels</a> \> <a href="/sub.php?from=${topLevel}">${topLevel}</a> \> <a href="/lessons.php?from=${topLevel}?${midLevel}">${midLevel}</a>`


      let heading = document.getElementById("classHeading")
      heading.innerHTML = `${fileLevel}`
</script>


<?php require "bottom.php"?>