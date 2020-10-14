<?php 
    include "lib/simple_html_dom.php"; 

    // $html1 = file_get_html('https://www.jjpan.cn/en/');




  
    $data = array(
        "post_per_page"=>10,
        "skip"=>0
    );

    if(isset($_GET['page'])){
        $data['page'] = $_GET['page'];
    }

    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/latest_post');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result  = json_decode($result,true); 


    // print_r($result);


    $ch2 = curl_init('https://www.jjpan.com/wp-json/news/v1/get_home_slider');
    curl_setopt($ch2, CURLOPT_POST, 1);
    curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch2, CURLOPT_POSTFIELDS, '');
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    $result2 = curl_exec($ch2);
    curl_close($ch2);
    $result2  = json_decode($result2,true); 

    // $html2 = str_get_html($result['content']);
   // print_r($result);
  

?>
<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 
           <div class="top_slider">
                <?php 
                        $i=0;
                        foreach($result2 as $element){

                            if($i<8){
                                echo '<div  class="slide_pic"  style=";background-image:url('.$element['url'].')"></div>';
                            }
                            $i++;
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





            <!-- #####   home_news  #####  -->
            <div id="home_news" >
                <?php 
                    foreach($result['data'] as $item){
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
                                <a href="/jjpan/news.php?p=<?php echo $item['id']; ?>" class="more">READ MORE</a>
                            </p>
                            
                        </div>                    
                    </div>                    
                <?php
                    }
                ?>                        
            </div>


            <div class="paginator  news_bottom">
                    <?php if($result['prev_page']>0){ ?>
                    <a href="/jjpan/all_news.php?page=<?php echo $result['prev_page']; ?>" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i> PREV</a>                                                    
                    <?php }else{ echo '<span style="visibility:hidden"> <i class="fa fa-angle-left" aria-hidden="true"></i> PREV </span>';} ?>
                    <div class="slk_page">
                        <select name="" id="">
                            <?php for($i=1;$i<$result['all_page'];$i++){ ?>
                            <option value="<?php echo $i; ?>"  <?php if($result['cur_page']==$i){ echo 'selected'; } ?> ><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <?php if($result['next_page'] <= $result['all_page'] ){ ?>
                    <a href="/jjpan/all_news.php?page=<?php echo $result['next_page']; ?>" class="next">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <?php } ?>
            </div>

            

        </div>


<?php include "tpl/footer.php"; ?>