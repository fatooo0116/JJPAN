<?php 
    include "lib/simple_html_dom.php"; 

    $ch = curl_init('https://www.jjpan.com/wp-json/wp/v2/pages/9731');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $curl_html = curl_exec($ch);
    $curl_html = json_decode($curl_html);
    $html = str_get_html($curl_html->content->rendered);


    // $html1 = $data->content->rendered;
    // print_r($html1);
    // print_r($curl_html->content->rendered);

     $title = $html->find('.usquare_square_text_wrapper h2');
     $text = $html->find('.usquare_about ul');
?>




<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  -->             
            <h1 class="main_title top">聯絡我們</h1>
  

            <div class="aloha_accordin">
                <?php  
                    foreach($title as $key => $element){      
                ?>                    
                    <button class="accordion"><span class="fa fa-plus"></span> <?php echo   $title[$key]->innertext; ?></button>
                    <div class="panel  contact_info">
                            <?php  echo $text[$key];?>
                    </div>
                <?php        
                    }
                ?>
                
            </div>




            <div class="icon_menu">
                <a href="all_news.php" class="link">                    
                    <div class="icon">                       
                        <h3>動態消息</h3>
                    </div>
                </a>

                <a href="projects.php" class="link">                    
                    <div class="icon">
                        <h3>作品</h3>
                    </div>
                </a>      
                
                <a href="publishs.php" class="link">                    
                    <div class="icon">
                        <h3>出版</h3>
                    </div>
                </a>  
                
                <a href="leadership.php" class="link">                    
                    <div class="icon">
                        <h3>團隊</h3>
                    </div>
                </a>       
                                 
            </div>





 



            <!-- #####   footer images  #####  -->
            <div class="full_img">
                <img src="assets/dist/img/footer.jpg" />
            </div>
        </div>


<?php include "tpl/footer.php"; ?>