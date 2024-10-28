<?php
// blog.php
?>
<section class="blog-section">
    <h1 class="heading">Blog</h1>
    <div class="blog-container">
        <?php
        // Path to the blogs folder
        $blogsPath = 'blogs';

        // Get all PHP files in the blogs folder
        $blogFiles = glob($blogsPath . '/*.php');

        // Sort blog files by date (assuming the filename contains the date or you have date within each post)
        usort($blogFiles, function($a, $b) {
            // Include both blog files to access their $date variables
            include($a);
            $dateA = strtotime($date);
            include($b);
            $dateB = strtotime($date);
            return $dateB - $dateA; // Descending order
        });

        foreach ($blogFiles as $file) {
            // Include the blog post file to access its variables
            include($file);
            ?>
            <div class="blog-card">
                <img src="<?php echo $thumbnail; ?>" alt="<?php echo htmlspecialchars($title); ?>" class="blog-thumbnail">
                <div class="blog-content">
                    <h2 class="blog-title"><?php echo htmlspecialchars($title); ?></h2>
                    <p class="blog-date"><?php echo date("F j, Y", strtotime($date)); ?></p>
                    <p class="blog-excerpt"><?php echo htmlspecialchars($excerpt); ?></p>
                    <!-- Read More Button -->
                    <button class="blog-readmore-btn" onclick="toggleBlogContent('<?php echo basename($file, '.php'); ?>')">Read More</button>
                </div>
                <!-- Hidden Full Content -->
                <div class="blog-full-content" id="<?php echo basename($file, '.php'); ?>" style="display: none;">
                    <?php echo $content; ?>
                    <button class="blog-close-btn" onclick="toggleBlogContent('<?php echo basename($file, '.php'); ?>')">Close</button>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>

