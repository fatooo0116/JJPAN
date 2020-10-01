<?php 
    include "lib/simple_html_dom.php"; 

    $html1 = file_get_html('https://www.jjpan.com/firm-overview/');
  

    // print_r($history);

?>




<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 
            <div class="full_img">
                <img src="assets/dist/img/about1.png" />
            </div>

            
            <h1 class="main_title">About JJPan</h1>

            <div class="aloha_accordin">
                <button class="accordion">
                    <span class="fa fa-plus"></span> History</button>
                <div class="panel">
                <?php 
                        foreach($html1->find('.firm-over') as $element){
                            echo $element->innertext;
                        }                        
                ?>
                </div>

                <button class="accordion"><span class="fa fa-plus"></span> Vision</button>
                <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>




            <div class="icon_menu">
                <a href="#" class="link">                    
                    <div class="icon">
                        <img src="assets/dist/img/menu_icon1.png">
                    </div>
                    <h3>News</h3>
                </a>

                <a href="#" class="link">                    
                    <div class="icon">
                        <img src="assets/dist/img/menu_icon2.png">
                    </div>
                    <h3>Projects</h3>
                </a>      
                
                <a href="#" class="link">                    
                    <div class="icon">
                        <img src="assets/dist/img/menu_icon3.png">
                    </div>
                    <h3>Publications</h3>
                </a>  
                
                <a href="#" class="link">                    
                    <div class="icon">
                        <img src="assets/dist/img/menu_icon4.png">
                    </div>
                    <h3>Leadership</h3>
                </a>                  
            </div>




            <div class="icon_menu">
                <a href="#" class="link">                    
                    <div class="icon">
                        <img src="assets/dist/img/menu_icon1.png">
                    </div>
                    <h3>News</h3>
                </a>

                <a href="#" class="link">                    
                    <div class="icon">
                        <img src="assets/dist/img/menu_icon2.png">
                    </div>
                    <h3>Projects</h3>
                </a>      
                
                <a href="#" class="link">                    
                    <div class="icon">
                        <img src="assets/dist/img/menu_icon3.png">
                    </div>
                    <h3>Publications</h3>
                </a>  
                
                <a href="#" class="link">                    
                    <div class="icon">
                        <img src="assets/dist/img/menu_icon4.png">
                    </div>
                    <h3>Leadership</h3>
                </a>                  
            </div>




            <!-- #####   footer images  #####  -->
            <div class="full_img">
                <img src="assets/dist/img/about2.png" />
            </div>
        </div>


<?php include "tpl/footer.php"; ?>