<?php 


    $data = array(
        "post_per_page"=>999,
        "term_id"=>57,
        "skip"=>0
    );

    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/latest_post_by_term');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result  = json_decode($result,true); 
    // print_r($result);



    include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 
           <h1 class="main_title top">出版</h1>

           <div id="book_store">
                <?php                     
                    foreach($result as $link){
                        ?>
                            <div class="book_item">
                                <a href="publish.php?b=<?php echo $link['id']; ?>"><img src="<?php  echo $link['img']; ?>" /></a>
                                <h3>
                                    <a href="publish.php?b=<?php echo $link['id']; ?>"><?php echo $link['title']; ?></a>
                                    <div class="date">
                                        <?php 
                                            echo  date('Y / m / d',strtotime($link['date']));

                                        ?>
                                    </div>
                                </h3>
                                <a href="#" class="readmore" >Read More</a>
                            </div>

                        <?php
                    }
                
                ?>

           </div><!-- book_store -->








        </div><!-- #main -->
<?php include "tpl/footer.php"; ?>