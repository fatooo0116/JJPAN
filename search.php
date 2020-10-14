<?php 
    include "lib/simple_html_dom.php"; 

    // $html1 = file_get_html('https://www.jjpan.cn/en/');
    $data = array(
        "text" => $_GET['s']        
    );

  

    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/search');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result  = json_decode($result,true); 


   // print_r($result);


 

    // $html2 = str_get_html($result['content']);
   // print_r($result);
  

?>
<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 


            <div class="search_result">
                <h3> 搜尋 <i class="fa fa-angle-right" aria-hidden="true"></i>  <?php  echo $_GET['s']; ?> </h3>
            </div>


            <!-- #####   home_news  #####  -->
            <div id="home_news" >
                <?php 
                    foreach($result as $item){
                ?>
                    <div class="one_post_box_type2">
                        <a href="/jjpan/news.php?p=<?php echo $item['id'];  ?>">
                            <img src="<?php echo $item['img'];  ?>" />
                        </a>
                        <div class="desc">
                            <div class="date"><?php echo substr($item['date'],0,10);  ?></div>
                            <div class="cat">
                                <?php 
                                    $mycat = array();
                                    foreach( $item['cat'] as $mmcat){
                                        $mycat[] = $mmcat['name'];
                                    }
                                    echo implode(',',$mycat);
                                ?>
                            </div>
                            <h3><a href="/jjpan/news.php?p=<?php echo $item['id']; ?>" ><?php echo $item['title']; ?></a></h3>
                            <p class="excerpt">
                                <?php echo  $item['excerpt']; ?>                                
                            </p>
                            
                        </div>                    
                    </div>   

                <?php
                    }
                    
                    if(!$result){
                        echo '<h3>無相關資料</h3>';
                    }
                ?>                        
            </div>


       

            

        </div>


<?php include "tpl/footer.php"; ?>