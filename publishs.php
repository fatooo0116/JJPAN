<?php 

    // $html1 = file_get_html('https://www.jjpan.com/firm-overview/');
  
    /*
    $ch = curl_init('https://www.jjpan.com/wp-json/wp/v2/pages/9945');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $curl_html = curl_exec($ch);
    $curl_html = json_decode($curl_html);
    $html1 = str_get_html($curl_html->content->rendered);    

    $title = $html1->find('.spg-clip img');
    $text = $html1->find('.wpb_wrapper h5');


    $author = $html1->find('.usquare_block');
    */

    $data = array(
        "post_per_page"=>99,
        "term_id"=>57,
        "skip"=>0
    );

    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/latest_post_by_term');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );
    $result = curl_exec($ch);
    curl_close($ch);
    $result  = json_decode($result,true); 


    print_r($result);



    include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 
           <h1 class="main_title top">出版</h1>

           <div id="book_store">
                <div class="book_item">
                    <a href="#"><img src="assets/dist/img/20151019_4-1.jpg" /></a>
                    <h3>
                        <a href="#">Cartier in Moton</a>
                        <div class="date">2012/12/12</div>
                    </h3>
                    <a href="#" class="readmore" >Read More</a>
                </div>

                <div class="book_item">
                    <a href="#"><img src="assets/dist/img/20151019_4-1.jpg" /></a>
                    <h3>
                        <a href="#">Cartier in Moton</a>
                        <div class="date">2012/12/12</div>
                    </h3>
                    <a href="#" class="readmore" >Read More</a>
                </div>
                
                <div class="book_item">
                    <a href="#"><img src="assets/dist/img/20151019_4-1.jpg" /></a>
                    <h3>
                        <a href="#">Cartier in Moton</a>
                        <div class="date">2012/12/12</div>
                    </h3>
                    <a href="#" class="readmore" >Read More</a>
                </div>
           </div><!-- book_store -->








        </div><!-- #main -->
<?php include "tpl/footer.php"; ?>