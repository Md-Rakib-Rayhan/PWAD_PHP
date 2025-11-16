            <!-- Main link for all area -->
            <?php
               $current_page = basename($_SERVER["PHP_SELF"]);
            ?>
            
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link <?php if($current_page=="index.php"){echo "active";} ?>">Home</a>
                                <a href="about.php" class="nav-item nav-link <?php if($current_page=="about.php"){echo "active";} ?>">About</a>
                                <a href="service.php" class="nav-item nav-link <?php if($current_page=="service.php"){echo "active";} ?>">Service</a>
                                <a href="team.php" class="nav-item nav-link <?php if($current_page=="team.php"){echo "active";} ?>">Team</a>
                                <a href="project.php" class="nav-item nav-link <?php if($current_page=="project.php"){echo "active";} ?>">Project</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle <?php if($current_page=="blog.php" || $current_page=="single.php"){echo "active";} ?>" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.php" class="dropdown-item">Blog Page</a>
                                        <a href="single.php" class="dropdown-item">Single Page</a>
                                    </div>
                                </div>
                                <a href="contact.php" class="nav-item nav-link <?php if($current_page=="contact.php"){echo "active";} ?>">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="#">Get A Quote</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>