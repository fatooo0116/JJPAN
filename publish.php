<?php 
    include "lib/simple_html_dom.php"; 
    /* 抓本文 */


    $data = array(
        "post_id"=> $_GET['b'],
    );


    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/book');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result  = json_decode($result,true); 
    $html1 = str_get_html($result['content']);

   //  print_r($result); 

    /* 抓 meta  */    

?>
<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 

                
            <div id="main_text" class="" >
                <h1><?php   echo $result['title']; ?> </h1>
                <div class="content  book_content">
                    <?php 
                        echo $result['content'];
                    
                    ?>
                           
                </div>

                <a href="#" class="toggle_class">More Details</a>
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
                    <a href="<?php echo "publish.php?b=".$result['pre_post']['link']; ?>" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i> PREV</a>        
                <?php }else{ echo '<a href="#" style="visibiility:hidden">&nbsp;</a>'; } ?>
                    <a href="publishs.php?b=" class="back"><i class="fa fa-th-large" aria-hidden="true"></i></a>                                
                <?php if(array_key_exists('next_post',$result)){?>
                    <a href="<?php echo "publish.php?b=".$result['next_post']['link']; ?>" class="next">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <?php }else{ echo '<a href="#" style="visibiility:hidden">&nbsp;</a>'; } ?>               
            </div>

        
         

        </div>


<?php include "tpl/footer.php"; ?>