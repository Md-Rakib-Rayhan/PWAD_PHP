    <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
    <nav>
        

        <a href="index.php" <?php if ($current_page == "index.php"){ echo "class=\"active\""; }?> >Home</a> |
        <a href="about.php" <?php if ($current_page == "about.php"){ echo "class=\"active\""; }?> >About</a> |
        <a href="contact.php" <?php if ($current_page == "contact.php"){ echo "class=\"active\""; }?> >Contact</a>
    </nav>


    
     <?php // if ($current_page == "index.php"){ echo "class=\"active\""; }?> 


  