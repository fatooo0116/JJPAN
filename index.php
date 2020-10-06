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
                        $i=0;
                        foreach($html1->find('#rev_slider_5_1 img') as $element){

                            if($i<8){
                                echo '<div><img src="'.$element->attr['data-lazyload'].'" /></div>';
                            }
                            $i++;
                        }                        
                ?>               
            </div>


            <div class="icon_menu">
                <div class="link">                    
                    <a href="#" class="icon">
                        <h3>News</h3>
                    </a>                    
                </div>

                <div class="link">                    
                    <a href="#" class="icon">
                        <h3>Projects</h3>
                    </a>                    
                </div>
                
                <div class="link">                    
                    <a href="#" class="icon">
                        <h3>Publications</h3>
                    </a>                    
                </div>
                
                <div class="link">                    
                    <a href="#" class="icon">
                      <h3>Leadership</h3>
                    </a>                    
                </div>                                  
            </div>





            <!-- #####   home_news  #####  -->
            <div id="home_news" >
                <div class="one_post_box">
                    <img src="assets/dist/img/news_200824_4.jpg" />
                    <div class="desc">
                        <h3>Experiencing 20 years of Grace” Suang-Lien Elderly Center</h3>
                        <div class="meta">
                            <div class="cat news">News</div>
                            <div class="date">July 22, 2020</div>
                        </div>
                    </div>                    
                </div>

                <div class="one_post_box">
                    <img src="assets/dist/img/news_200824_4.jpg" />
                    <div class="desc">
                        <h3>Experiencing 20 years of Grace” Suang-Lien Elderly Center</h3>
                        <div class="meta">
                            <div class="cat news">News</div>
                            <div class="date">July 22, 2020</div>
                        </div>
                    </div>                    
                </div>
                
                <div class="one_post_box">
                    <img src="assets/dist/img/news_200824_4.jpg" />
                    <div class="desc">
                        <h3>Experiencing 20 years of Grace” Suang-Lien Elderly Center</h3>
                        <div class="meta">
                            <div class="cat news">News</div>
                            <div class="date">July 22, 2020</div>
                        </div>
                    </div>                    
                </div>
                
                <div class="one_post_box">
                    <img src="assets/dist/img/056000051.jpg" />
                    <div class="desc">
                        <h3>Jiaxing Complex with Shopping Mall, Office and Residential</h3>
                        <div class="meta">
                            <div class="cat project">Projects</div>
                            <div class="date">July 22, 2020</div>
                        </div>
                    </div>                    
                </div> 
                
                <div class="one_post_box">
                    <img src="assets/dist/img/056000051.jpg" />
                    <div class="desc">
                        <h3>Jiaxing Complex with Shopping Mall, Office and Residential</h3>
                        <div class="meta">
                            <div class="cat project">Projects</div>
                            <div class="date">July 22, 2020</div>
                        </div>
                    </div>                    
                </div>  
                
                <div class="one_post_box">
                    <img src="assets/dist/img/056000051.jpg" />
                    <div class="desc">
                        <h3>Jiaxing Complex with Shopping Mall, Office and Residential</h3>
                        <div class="meta">
                            <div class="cat project">Projects</div>
                            <div class="date">July 22, 2020</div>
                        </div>
                    </div>                    
                </div>  


            </div>
        </div>


<?php include "tpl/footer.php"; ?>