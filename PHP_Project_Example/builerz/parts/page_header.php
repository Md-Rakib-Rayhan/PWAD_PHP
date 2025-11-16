            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php

                            if($current_page=="about.php"){echo "<h2>About Us</h2>";}
                            elseif($current_page=="service.php"){echo "<h2>Our Services</h2>";}
                            elseif($current_page=="contact.php"){echo "<h2>Contact Us</h2>";}
                            elseif($current_page=="team.php"){echo "<h2>Our Team</h2>";}
                            elseif($current_page=="project.php"){echo "<h2>Our Projects</h2>";}
                            elseif($current_page=="single.php"){echo "<h2>Single Page</h2>";}
                            elseif($current_page=="blog.php"){echo "<h2>Our Blog</h2>";}
                            
                            ?>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <?php

                            if($current_page=="about.php"){echo "<a href='about.php'>About Us</a>";}
                            elseif($current_page=="service.php"){echo "<a href='service.php'>Our Services</a>";}
                            elseif($current_page=="contact.php"){echo "<a href='contact.php'>Contact Us</a>";}
                            elseif($current_page=="team.php"){echo "<a href='team.php'>Our Team</a>";}
                            elseif($current_page=="project.php"){echo "<a href='project.php'>Our Projects</a>";}
                            elseif($current_page=="single.php"){echo "<a href='single.php'>Single Page</a>";}
                            elseif($current_page=="blog.php"){echo "<a href='blog.php'>Our Blog</a>";}
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>