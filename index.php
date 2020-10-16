<?php 
    include "lib/simple_html_dom.php"; 

   // $html1 = file_get_html('https://www.jjpan.cn/en/');

   $data = array(
    "post_per_page"=>10,
    "skip"=>0
    );

    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/get_home_page');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result  = json_decode($result,true);    

    // print_r($result);

?>



<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 
           <div class="top_slider">
                <?php 
                
                        $i=0;
                        foreach($result['homeslider'] as $element){
                            if($i<8){
                                echo '<div  class="slide_pic"  style=";background-image:url('.$element['url'].')">';
                                echo '<div class="text"><h3>'.$element['title']."</h3></div>";
                                echo '</div>';
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
                <?php  foreach($result['post'] as $elm1){  ?>                
                    <div class="one_post_box_type2">
                        <a href="/jjpan/news.php?p=<?php echo $elm1['id'];  ?>">
                            <img src="<?php echo $elm1['img'];  ?>" />
                        </a>
                        <div class="desc">
                            <div class="date"><?php echo substr($elm1['date'],0,10);  ?></div>
                            <div class="cat">
                                <?php 
                                    $mycat = array();
                                    foreach( $elm1['cat'] as $mmcat){
                                        $mycat[] = $mmcat['name'];
                                    }
                                    echo implode(',',$mycat);
                                ?>
                            </div>
                            <h3><a href="/jjpan/news.php?p=<?php echo $elm1['id']; ?>" ><?php echo $elm1['title']; ?></a></h3>
                            <p class="excerpt">
                                <?php echo  $elm1['excerpt']; ?>
                                <a href="/jjpan/news.php?p=<?php echo $elm1['id']; ?>" class="more">READ MORE</a>
                            </p>                            
                        </div>                    
                    </div>                 
                <?php } ?>    

                <?php  foreach($result['portfolio'] as $elm2){  ?>
                    <div class="one_post_box_type2">
                        <a href="/jjpan/project.php?po=<?php echo $elm2['id'];  ?>">
                            <img src="<?php echo $elm2['img'];  ?>" />
                        </a>
                        <div class="desc">
                            <div class="date"><?php echo substr($elm2['date'],0,10);  ?></div>
                            <div class="cat">
                                <?php 
                                    $mycat = array();
                                    foreach( $elm2['cat'] as $mmcat){
                                        $mycat[] = $mmcat['name'];
                                    }
                                    echo implode(',',$mycat);
                                ?>
                            </div>
                            <h3><a href="/jjpan/project.php?po=<?php echo $elm2['id']; ?>" ><?php echo $elm2['title']; ?></a></h3>
                            <p class="excerpt">
                                <?php echo  $elm1['excerpt']; ?>
                                <a href="/jjpan/project.php?po=<?php echo $elm2['id']; ?>" class="more">READ MORE</a>
                            </p>                            
                        </div>                    
                    </div>                                         
                <?php } ?>      


            </div>
        </div>


<?php include "tpl/footer.php"; ?>