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

<main role="main" id="player-container">

  <div>
    <span id="navTop"><a href="/">Channels</a></span>
    <!-- > -->
    <!-- <span id="classHeading"></span> -->
  </div>

  <div id="top" style="padding:0"></div>

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
            <video width="700" controls poster="assets/images/r.jpeg" preload="none">
                <source src="./modules/${topLevel}/${midLevel}/${fileLevel}.mp4" type="video/mp4">

                Sorry, your browser doesn't support embedded videos or has it disbaled.
            </video>
            <br><br>
            <div id="pdf"><a href="./modules/${topLevel}/${midLevel}/${fileLevel}.pdf">${fileLevel}.pdf</a></div>
        `

      let navigation = document.getElementById("navTop")
      navigation.innerHTML = `<a href="/">Channels</a> \> <a href="/sub.php?from=${topLevel}">${topLevel}</a> \> <a href="/lessons.php?from=${topLevel}?${midLevel}">${midLevel}</a>`


      // let heading = document.getElementById("classHeading")
      // heading.innerHTML = `${fileLevel}`
</script>


<?php require "bottom.php"?>