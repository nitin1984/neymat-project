<div class="container"> 

    <div class="header">
        <div class="menu-center" style="width: 800px;
             margin: auto;">
             <?php print render($page['menu']); ?>
        </div>  
    </div>
    <div class="header-bottom">
        <div class="logo">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            <?php endif; ?>

        </div>
        <div class="contact-no">
            Phone: +91-9810255727
        </div>
        <div class="clear"></div>

    </div>

    <div class="slider">
        <?php print render($page['slider']); ?>

    </div>
    
        <?php print render($page['welcome']); ?>
    

    <div class="welcome-content">
        
        <div class="page-title">
            <?php print $title;?>
        </div>
          <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
        <?php print render($page['gallery_block']); ?>
        <div class="clear"></div>
    </div>

    
    <div class="abc">
        <div class="xyz">hee</div>
    </div>
    

    <div class="footer">
        <div class="footer-align">
            <a href="#"class="footer-links">Home</a>
            <a href="#"class="footer-links">About Us</a>
            <a href="#"class="footer-links">Vision</a>
            <a href="#"class="footer-links">Team</a>
            <a href="#"class="footer-links">Services</a>
            <a href="#"class="footer-links">Landmark</a>
            <a href="#"class="footer-links">Contact Us</a>
        </div>
        <div class="powered_by">
            powered by:
            <a href="http://www.meshexperts.com" target="_blank" class="meshexperts"> Mesh<font color="#FF9900">experts</font></a>
        </div>


    </div>
</div>


