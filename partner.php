<?php 
    include "lib/simple_html_dom.php"; 

    $html1 = file_get_html('https://www.jjpan.com/0_%E5%90%88%E4%BD%9C%E5%A4%A5%E4%BC%B4/');
  
    /*
    $ch = curl_init('https://www.jjpan.com/0_%E5%90%88%E4%BD%9C%E5%A4%A5%E4%BC%B4/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $curl_html = curl_exec($ch);
    $curl_html = json_decode($curl_html);
    $html1 = str_get_html($curl_html->content->rendered);    
    */

    $title = $html1->find('.wpb_wrapper h4 .vc_tta-title-text');
    $text = $html1->find('.vc_tta-panel-body');


    $author = $html1->find('.usquare_block');
?>




<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  -->             
            <h1 class="main_title top">合作夥伴</h1>
            


            <div class="aloha_accordin">
                <?php  
                    foreach($title as $key => $element){      
                    
                ?>                    
                    <button class="accordion <?php if($key==0){ echo "active"; } ?>"><span class="fa fa-plus"></span> <?php echo   $title[$key]->innertext; ?></button>
                    <div class="panel">
                            <div class="main_content"><?php  echo $text[$key]->innertext;;?></div>
                    </div>
                <?php
                       
                    }
                ?>                
            </div>











 



            <!-- #####   footer images  #####  -->
            <!--
            <div class="full_img">
                <img src="assets/dist/img/about2.png" />
            </div>
            -->
        </div>


<?php include "tpl/footer.php"; ?>