<?php 
    include "lib/simple_html_dom.php"; 

    $html1 = file_get_html('https://www.jjpan.cn/en/');
  
  

?>
<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 
           <div class="top_slider">
                <?php 
                        foreach($html1->find('#rev_slider_5_1 img') as $element){
                            echo '<div><img src="'.$element->attr['data-lazyload'].'" /></div>';
                        }                        
                ?>               
            </div>


            <div class="icon_menu">
                <a href="#" class="link">                    
                    <div class="icon">
                        <h3>News</h3>
                    </div>
                </a>

                <a href="#" class="link">                    
                    <div class="icon">
                        <h3>Projects</h3>
                    </div>
                </a>      
                
                <a href="#" class="link">                    
                    <div class="icon">
                        <h3>Publications</h3>
                    </div>
                </a>  
                
                <a href="#" class="link">                    
                    <div class="icon">
                        <h3>Leadership</h3>
                    </div>
                </a>                  
            </div>





            <!-- #####   home_news  #####  -->
            <div id="home_news" >
                <div class="one_post_box_type2">
                    <img src="assets/dist/img/news_200824_4.jpg" />
                    <div class="desc">
                        <div class="date">2020/03/11</div>
                        <div class="cat">PROJECTS</div>
                        <h3>Experiencing 20 years of Grace” Suang-Lien Elderly Center</h3>
                        <p class="excerpt">
                            JP is proud to announce its design for the Xiamen Chang Gung Memorial Hospital Competition, has been declared the winner of the competition.<br/>Located in Haicang district.
                            <a href="#" class="more">READ MORE</a>
                        </p>
                        
                    </div>                    
                </div>

                <div class="one_post_box_type2">
                    <img src="assets/dist/img/news_200824_4.jpg" />
                    <div class="desc">
                        <div class="date">2020/03/11</div>
                        <div class="cat">PROJECTS</div>
                        <h3>Experiencing 20 years of Grace” Suang-Lien Elderly Center</h3>
                        <p class="excerpt">
                            JP is proud to announce its design for the Xiamen Chang Gung Memorial Hospital Competition, has been declared the winner of the competition.<br/>Located in Haicang district.
                            <a href="#" class="more">READ MORE</a>
                        </p>
                        
                    </div>                    
                </div>
                
                <div class="one_post_box_type2">
                    <img src="assets/dist/img/news_200824_4.jpg" />
                    <div class="desc">
                        <div class="date">2020/03/11</div>
                        <div class="cat">PROJECTS</div>
                        <h3>Experiencing 20 years of Grace” Suang-Lien Elderly Center</h3>
                        <p class="excerpt">
                            JP is proud to announce its design for the Xiamen Chang Gung Memorial Hospital Competition, has been declared the winner of the competition.<br/>Located in Haicang district.
                            <a href="#" class="more">READ MORE</a>
                        </p>
                        
                    </div>                    
                </div>
 

            </div>

            

        </div>


<?php include "tpl/footer.php"; ?>