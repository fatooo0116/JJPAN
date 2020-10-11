<?php 
    include "lib/simple_html_dom.php"; 

    $html1 = file_get_html('https://www.jjpan.com/careers/');
  
    $career_text = $html1->find('#career_text .wpb_wrapper');
?>


<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  -->             
            <h1 class="main_title top">工作機會 & 實習計畫</h1>
            <div class="full_img">
                <img src="assets/dist/img/career.png" />
            </div>

            <div class="aloha_accordin">
                <button class="accordion active">
                    <span class="fa fa-plus"></span> 福利</button>
                <div class="panel">
                    <div class="inner">
                        <div id="career_text">
                            <?php echo $career_text[0]->innertext ?>
                        </div>
                        

                        <div id="benefit">
                            <?php                             
                                $title = $html1->find('.icon_description h3');
                                $text = $html1->find('.icon_description_text');
                                $icon = array('fa-cutlery','fa-lightbulb-o','fa-home','fa-cogs','fa-calendar','fa-road','fa-briefcase','fa-flag');

                                foreach($title as $key => $element){                                       
                                    ?>
                                    <div class="sec">
                                        <div class="pic"><i class="fa <?php  echo $icon[$key]; ?>"></i></div>
                                        <h3><?php echo $title[$key]; ?></h3>
                                        <div class="desc"><?php echo $text[$key]; ?></div>
                                    </div>
                                 <?php  }  ?>

                        </div>
                                 
                    </div>
                </div>               
            </div>





        </div>


<?php include "tpl/footer.php"; ?>