<?php 
    include "lib/simple_html_dom.php"; 

    // $html1 = file_get_html('https://www.jjpan.com/firm-overview/');
  

    $ch = curl_init('https://www.jjpan.com/wp-json/wp/v2/pages/16537');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $curl_html = curl_exec($ch);
    $curl_html = json_decode($curl_html);
    $html1 = str_get_html($curl_html->content->rendered);    

    $title = $html1->find('.wpb_wrapper h4 strong');
    $text = $html1->find('.wpb_wrapper h5');


    $author = $html1->find('.usquare_block');
?>




<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  -->             
            <h1 class="main_title top">團隊</h1>
            <div class="full_img">
                <img src="assets/dist/img/team.png" />
            </div>


            <div class="aloha_accordin">
                <?php  
                    foreach($title as $key => $element){      
                     if($key<3){   
                ?>                    
                    <button class="accordion"><span class="fa fa-plus"></span> <?php echo   $title[$key]->innertext; ?></button>
                    <div class="panel">
                            <div class="main_content"><?php  echo $text[$key]->innertext;;?></div>
                    </div>
                <?php
                     }        
                    }
                ?>                
            </div>



            <div id="usquare_7">
                    <?php 
                        foreach($author as $key => $elm){     
                            echo $elm;
                        }
                    ?>
            </div>







 



            <!-- #####   footer images  #####  -->
            <div class="full_img">
                <img src="assets/dist/img/about2.png" />
            </div>
        </div>


<?php include "tpl/footer.php"; ?>