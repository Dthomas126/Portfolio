<?php
    include './inc/header.inc.php';


?>
    <main role="main" id="main">
        <article role="article" id="article">
        <section class="container-fluid project" id="projects">
            
                <header>
                        <h2>PROJECTS</h2>
                       
                    </header>
    
              
                        <div class="row row-edit">
                            <div class="scroll"><img class="img" src="images/architech.png" alt="Image"/></div>
                            <div class="scroll"><img class="img" src="images/rockband.png" alt="Image"/></div>
                            <div class="scroll"><img class="img" src="images/workout.png" alt="Image"/></div>
                        </div>
                   
                    <div class="puzzel"></div>
        </section>

            <section class="container-fluid tech" id="languages">
                    <div class="puzzel"></div>
                <header>
                    <h2>LANGUAGES</h2>
                    <p>Programming languages level of expirience.</p>


                </header>
                    <ul class="tech-list row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                        <li class="tech-item">HTML 5 <div class="progress">
  <div class="progress-bar bg-dark" style="width:60%">60%</div>
</div></li>
                        <li class="tech-item">CSS3 <div class="progress">
  <div class="progress-bar bg-dark" style="width:60%">60%</div>
</div></li>
                        <li class="tech-item">JQuery <div class="progress">
  <div class="progress-bar bg-dark" style="width:35%">35%</div>
</div></li>
                        <li class="tech-item">PHP <div class="progress">
  <div class="progress-bar bg-dark" style="width:40%">40%</div>
</div></li></div>
                     <div class="col-lg-6 col-md-12  col-sm-12">   <li class="tech-item">Java <div class="progress">
  <div class="progress-bar bg-dark" style="width:20%">20%</div>
</div></li>
                        <li class="tech-item">SQL <div class="progress">
  <div class="progress-bar bg-dark" style="width:40%">40%</div>
</div></li>
                        <li class="tech-item">JavaScript <div class="progress">
  <div class="progress-bar bg-dark" style="width:40%">40%</div>
</div></li>
                        <li class="tech-item">VueJS <div class="progress">
  <div class="progress-bar bg-dark" style="width:30%">30%</div>
</div></li></div>
                    </ul>
             

   
                    <div class="puzzel"></div>
</section>
<section class="container-fluid about" id="about">
    <h2>ABOUT ME</h2>
    <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
        <img class="about-img" src="images/IMG_20180525_183938_713.jpg" alt="Profile Image"/>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
            <p>Front-end developer looking to expand my skills in web development. Bringing art to the web has been somthing I never could have thought about doing. Through my journey I realized you will never win a race until you have at least started. It is not always about winning the first time, but to keep going even when you dont see the light at the end of the tunnel. I&apos;ve always had a passion for helping people acquire the tools necessary in order to build their brand. What better way than to develop a user friendly site that will help promote a business and its products.</p>

    </div>
</div>
</section>
<section class="container-fluid bg-dark">

    <form class="container contact" action="" method="POST">
        <h2>CONTACT ME</h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Name..">
        </div>
        <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" placeholder="Email..">
            </div>
            <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" placeholder="Name..">
                </div>
                <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" placeholder="Comment.."></textarea>
                    </div>
                    <button class="btn w-100 btn-default btn-lg">Send Contact Info</button>
    </form>
</section>

        </article>
        <?php
    include './inc/footer.inc.php';


?>