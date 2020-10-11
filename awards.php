<?php 
    include "lib/simple_html_dom.php"; 

    $html1 = file_get_html('https://www.jjpan.com/award/');
  

    // print_r($history);
    $title = $html1->find('.wpb_wrapper h3');
    $text = $html1->find('.wpb_wrapper ul');
        // $link = $html1->find('.wpb_wrapper ul li a');

    

    

?>




<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  -->             
            <h1 class="main_title top">得獎紀錄</h1>

            <div class="aloha_accordin">
                <?php  
                    foreach($title as $key => $element){      
                ?>                    
                    <button class="accordion"><span class="fa fa-plus"></span> <?php echo   $title[$key]->innertext; ?></button>
                    <div class="panel">
                        <ul class="award">
                        <?php  
                            foreach($text[$key]->find('a') as $link){
                                echo '<li><a href="project.php?pt='.$link->attr['href'].'">'.$link->innertext."</a></li>";
                            }
                        ?>
                        </ul>
                    </div>
                <?php        
                    }
                ?>                
            </div>






        </div>


<?php include "tpl/footer.php"; ?>