<?php 
    include 'header.php'; 
?>
<section class="project-section">
    <h1 class="project-heading">Check out my Recent Projects:</h1> 
    <div class="project-container">

        <div class="project-card">
            <img src="img/project-1.png" class="project-img" alt="">
            <div class="project-content">
                <h1 class="project-title">PLEXOS to Bokeh Pivot (P2BP)</h1>
                <p class="project-info">A Python tool that converts PLEXOS XML solution files to CSV format 
                    and visualizes data using Bokeh Pivot, designed for scenario comparison.</p>
                <div class="project-btn-grp">
                    <a href="https://github.com/username/P2BP" class="project-btn github">GitHub Repo</a>
                    <a href="project1_details.php" class="project-btn readmore">Read More</a>
                </div>
            </div>
        </div>

        <div class="project-card">
                <img src="img/project-2.png" class="project-img" alt="">
                <div class="project-content">
                    <h1 class="project-title">GroSal</h1>
                    <p class="project-info">
                    A React Native app with Expo, and JavaScript that allows weekly budget tracking,
                    expense recording, and visualization of spending habits. </p>
                    <div class="project-btn-grp">
                        <a href="https://github.com/username/GroSal" class="project-btn github">GitHub Repo</a>
                        <a href="project2_details.php" class="project-btn readmore">Read More</a>
                    </div>
                </div>
            </div>
    </div>
</section>
<?php
    include 'footer.php';
?>

