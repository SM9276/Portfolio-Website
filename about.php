<?php 
    include 'header.php'; 
?>
<section class="about-section">
    <div class="about">
        <div class="about-img-container">
            <img src="img/oreo.png" class="about-img" alt=""> 
            <button class="download-cv-btn">Download CV</button>
        </div>
        <p class="about-info">
            Hello! My Name is Sergio Mercado Nuñez. This is my first website using PHP, HTML, and CSS, 
            and it's now live on the internet! I am a computer engineering student at the Rochester Institute of Technology. 
            I love learning about computers and how they work!
            My most recent obsession has been VHDL, and I am currently working on a Gameboy Hardware Emulator using it.	
            I am also currently working as a Research Assistant at the Golisano Institute of Technology.
            The project that I created for the research is a tool called PLEXOS to Bokeh Pivot(P2BP) 
            written in Python. I love the feeling of performing and dancing mexican folk since
            I get to spread my beautiful culture .
            I also love my pet dog Oreo.
        </p>
    </div>    
    <!-- Skills Section -->    
    <div class="skill-section">
        <h1 class="heading">Skills</h1> 
        <div class="skill-container">
            <div class="skill-card">
                <img src="img/vhdl.png" class="skill-img" alt=""> 
                <h1 class="skill-name">VHDL</h1>
                <p class="skill-info">VHDL RULES!</p> 
	    </div>
	    <div class="skill-card">
                <img src="img/C.png" class="skill-img" alt=""> 
                <h1 class="skill-name">C</h1>
                <p class="skill-info">A simple language but is so hard to master</p> 
            </div>
	    <div class="skill-card">
                <img src="img/ASM.png" class="skill-img" alt=""> 
                <h1 class="skill-name">Assembly</h1>
                <p class="skill-info">Low level language</p> 
            </div>
        </div>
    </div>
   <!-- Timeline Section -->
    <div class="timeline">
        <h1 class="heading">My Computer Engineering Journey</h1>
        <!-- Timeline cards here -->
        <!-- First Computer  -->	
        <div class="card">
            <div class ="card-body">
                <h1 class="card-title"> 2012 </h1>     
                <p class="card-detail"> The first computer I interacted with was my father's Windows XP machine. 
                Since I was always such a curious child, I ended up dismantling it.
                I really wanted to know how this box displayed an image. My father was really mad that night! </p>
            </div>
        </div>
        
        <!-- Custom OS  -->	
        <div class="card">
            <div class ="card-body">
                <h1 class="card-title"> 2015 </h1>     
                <p class="card-detail"> I got into installing custom Android OSes. I was rocking Lineage OS running Android 7.1.2 on a Galaxy J7.
                I ended up helping the community around me; I would help farm workers unlock their SIM cards
                and improve their phones. </p>
            </div>
        </div>

        <!-- Computer build -->	
        <div class="card">
            <div class ="card-body">
                <h1 class="card-title"> 2016 </h1>     
                <p class="card-detail"> A series of slow, cheap laptops led me to want to build my own desktop computer. 
                    I still use this machine to this day. I have upgraded a few parts, but the i7-7700 is still going strong. </p>
            </div>
        </div>

         <!-- First CS Class  -->	
        <div class="card">
            <div class ="card-body">
                <h1 class="card-title"> 2018-2019 </h1>     
                <p class="card-detail"> I took my first computer science class in my freshman year of high school. 
                We learned the fundamentals of boolean logic and did assignments in HTML and CSS. </p>
            </div>
        </div>

         <!-- AP Computer Science Class -->	
        <div class="card">
            <div class ="card-body">
                <h1 class="card-title"> 2019-2020 </h1>     
                <p class="card-detail"> Sophomore year of high school, I took AP Computer Science. 
                I learned about Object-Oriented Programming and built assignments in Java. </p>
            </div>
        </div>

        <!-- Rochester Institute of Technology-->	
        <div class="card">
            <div class ="card-body">
                <h1 class="card-title"> 2022 </h1>     
                <p class="card-detail"> I started attending the Rochester Institute of Technology for a Computer Engineering Degree. </p>
            </div>
        </div>
    </div>
</section>
<?php
    include 'footer.php';
?>

