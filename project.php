<?php 
    include "lib/simple_html_dom.php"; 

    // $meta1 = file_get_html('https://www.jjpan.cn/en/');
    


    $data = array(
        "post_id"=> $_GET['po'],
    );

    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/portfolio');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result  = json_decode($result,true); 
    $html1= str_get_html($result['content']);

     // print_r($result);
    $meta1 = file_get_html($result['link']);


    $data = array();

    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/pterms');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $allslk = curl_exec($ch);
    curl_close($ch);
    $allslk  = json_decode($allslk,true);



?>
<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 
           <div class="project_cat">
               <a href="projects.php">Projects </a> > <a > Planing</a>
           </div>
           <div class="top_slider">
            <?php 
                        foreach($meta1->find('.royalSlider .rsImg') as $element){                            
                            echo '<div  class="slide_pic"  style=";background-image:url('.$element->attr['href'].')"></div>';
                        }                         
                ?>              
            </div>

            
            <div id="main_text" class="hidemore" >
                <h1><?php   echo $result['title']; ?> </h1>
                <div class="content">
                    <?php 
                        foreach($html1->find('p') as $element){ 
                            echo $element;
                        }
                    
                    ?>
                           
                </div>

                <a href="#" class="toggle_class">More Details</a>
            </div>


            <div class="work_spec">
                <?php 
                        foreach($meta1->find('.portfolio-details-part-two.has-border > p') as $elm){     
                            echo $elm;
                        }                    
                    ?>
            </div>


            <div class="sns_share"> 
                    <h5>分享文章</h5>
                    <div class="all_links">
                        <ul>
                            <li><a href="https://www.facebook.com/share.php?u=http://sbox.com/jjpan/news.php?p=21731"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/share?url=htt/sbox.com/jjpan/news.php?p=21731"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-weixin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>    
            </div>


            <div class="rela_postx news_bottom">       
                <?php if(array_key_exists('pre_post',$result)){ ?>
                    <a href="<?php echo "project.php?po=".$result['pre_post']['link']; ?>" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i> PREV</a>        
                <?php }else{ echo '<a href="#" style="visibiility:hidden">&nbsp;</a>'; } ?>
                    <a href="projects.php" class="back"><i class="fa fa-th-large" aria-hidden="true"></i></a>                                
                <?php if(array_key_exists('next_post',$result)){?>
                    <a href="<?php echo "project.php?po=".$result['next_post']['link']; ?>" class="next">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <?php }else{ echo '<a href="#" style="visibiility:hidden">&nbsp;</a>'; } ?>               
            </div>



            <!-- #####   home_news  #####  -->
           
            <div class="project_filter">
                <select name="" id=""  class="pj_select">
                    <option value="">select category</option>
                    <?php  foreach($allslk as $elm){ ?>
                        <option value="<?php echo $elm['tid']; ?>"><?php  echo $elm['name']; ?></option>
                    <?php } ?>
                </select>
            </div>

            
            <div id="home_news" class="grey_bk">
                <h3>相關作品</h3>
                <?php 
                        foreach($meta1->find('ul.orguss-related-posts  .orguss_related2') as $elm){                            
                            // echo '<div  class="slide_pic"  style=";background-image:url('.$element->attr['src'].')"></div>';
                             $pid  = 0;
                             $pid = $elm->pid;
                            ?>
                                <div class="imgbox">
                                    <a href="project.php?po=<?php echo $pid; ?>">
                                        <?php  echo $elm->find('img')[0]; ?>
                                        <h4><?php  echo $elm->find('h4')[0]; ?></h4>
                                    </a>
                                </div>
                                                                                 
                            <?php
                       }                         
                ?>                            

            </div><!-- ## home_news -->

         

        </div>


<?php include "tpl/footer.php"; ?>