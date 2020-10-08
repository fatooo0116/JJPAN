<?php 
    include "lib/simple_html_dom.php"; 

    // $html1 = file_get_html('https://www.jjpan.com/firm-overview/');
  

    $ch = curl_init('https://www.jjpan.com/wp-json/wp/v2/pages/4447');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $curl_html = curl_exec($ch);
    $curl_html = json_decode($curl_html);
    $html1 = str_get_html($curl_html->content->rendered);    

    
    $ch = curl_init('https://www.jjpan.com/wp-json/wp/v2/pages/12634');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $curl_html = curl_exec($ch);
    $curl_html = json_decode($curl_html);
    $html2 = str_get_html($curl_html->content->rendered);      

?>




<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 
            <div class="full_img">
                <img src="assets/dist/img/about1.png" />
            </div>

            
            <h1 class="main_title">關於</h1>

            <div class="aloha_accordin">
                <button class="accordion active">
                    <span class="fa fa-plus"></span> 事務所介紹</button>
                <div class="panel">
                    <div id="aboutme">
                        <?php 
                                foreach($html1->find('.firm-over') as $element){
                                    echo $element->innertext;
                                }                        
                        ?>
                    </div>
                </div>

                <button class="accordion">
                    <span class="fa fa-plus"></span> 組織結構</button>
                <div class="panel">
                   
                        <?php 
                                foreach($html2->find('img') as $element){
                                    echo $element;
                                }                        
                        ?>
                    
                </div>                
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






            <!-- #####   footer images  #####  -->
            <div class="full_img">
                <img src="assets/dist/img/team.png" />
            </div>
        </div>


<?php include "tpl/footer.php"; ?>