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
                                echo '<div  class="slide_pic"  style=";background-image:url('.$element->attr['data-lazyload'].')"></div>';
                            }
                            $i++;
                        }                        
                ?>               
            </div>


            <div class="icon_menu">
                <div class="link">                    
                    <a href="all_news.php" class="icon">
                        <h3>動態消息</h3>
                    </a>                    
                </div>

                <div class="link">                    
                    <a href="projects.php" class="icon">
                        <h3>作品</h3>
                    </a>                    
                </div>
                
                <div class="link">                    
                    <a href="publishs.php" class="icon">
                        <h3>出版</h3>
                    </a>                    
                </div>
                
                <div class="link">                    
                    <a href="leadership.php" class="icon">
                      <h3>團隊</h3>
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