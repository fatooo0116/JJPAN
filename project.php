<?php 
    include "lib/simple_html_dom.php"; 

    $html1 = file_get_html('https://www.jjpan.cn/en/');
  
  

?>
<?php include "tpl/header.php"; ?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####   home_news  #####  --> 
           <div class="project_cat">
               <a href="#">Projects</a> > <a href="#">Planing</a>
           </div>
           <div class="top_slider">
            <?php 
                        $i=0;
                        foreach($html1->find('#rev_slider_5_1 img') as $element){

                            if($i<8){
                                echo '<div  class="slide_pic"  style=";background-image:url('.$element->attr['data-lazyload'].')"></div>';
                            }
                            $i++;
                        }                        
                ?>              
            </div>

            
            <div id="main_text" class="hidemore" >
                <h1>Xiamen Chang Gung Memorial Hospital” wins the Competition</h1>
                <div class="content">
                    <p>JP is proud to announce its design for the Xiamen Chang Gung Memorial Hospital Competition, has been declared the winner of the competition.</p>
                    <p>Located in Haicang district, Maluan Bay, the Xiamen Chang Gung Memorial Hospital has a site area of 325,800㎡ with a total floor area at 37,600㎡. The hospital consists of one basement level and 23 above grade.</p>
                    <p>Maluan Bay Park is situated to the north of the hospital, while waterways run through the east and west of the site. The hospital also enjoys open views of the water and the Caijianwei Mountain scenery, the number 2 subway line provides transportation accessibility. The architectural design takes inspiration from the lighthouses of Maluan Bay to create a healthcare facility that takes full advantage of the ocean views. Close attention is paid to the circulation routes as well as designing them to be universal accessible facilities. Program elements incorporated in the tower include both living quarters and healthcare elements. Public service areas, restaurants, commercial street fronts, childcare centers, and exhibition zones are placed in the first level.  Multi-function halls, rehabilitation, and fitness center are located on the 2nd level. The podium section consists of nursing and daycare units to provide professional services to the semi-disabled residents.</p>
                </div>

                <a href="#" class="toggle_class">More Details</a>
            </div>


                <div class="more_spec"> 
                    <ul>
                        <li>Location: Xiamen City</li>
                        <li>Location: Xiamen City</li>
                        <li>Location: Xiamen City</li>
                    </ul>
                </div>


            <div class="rela_postx">
                <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i> PREV</a>
                <a href="#" class="back"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                <a href="#" class="next">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>



            <!-- #####   home_news  #####  -->
            <div class="project_filter">
                <select name="" id=""  class="pj_select">
                    <option value="">AAA</option>
                    <option value="">BBB</option>
                    <option value="">CCC</option>
                </select>
            </div>

            
            <div id="home_news" class="grey_bk">
              
                <div class="one_post_box_type2">
                    <a href="#"><img src="assets/dist/img/news_200824_4.jpg" /></a>
                    <div class="desc">
                        <div class="date">2020/03/11</div>
                        <div class="cat">PROJECTS</div>
                        <h3><a href="#">Experiencing 20 years of Grace” Suang-Lien Elderly Center</a></h3>
                        <p class="excerpt">
                            JP is proud to announce its design for the Xiamen Chang Gung Memorial Hospital Competition, has been declared the winner of the competition.<br/>Located in Haicang district.
                            <a href="#" class="more">READ MORE</a>
                        </p>                        
                    </div>                    
                </div>   
                
                <div class="one_post_box_type2">
                    <a href="#"><img src="assets/dist/img/news_200824_4.jpg" /></a>
                    <div class="desc">
                        <div class="date">2020/03/11</div>
                        <div class="cat">PROJECTS</div>
                        <h3><a href="#">Experiencing 20 years of Grace” Suang-Lien Elderly Center</a></h3>
                        <p class="excerpt">
                            JP is proud to announce its design for the Xiamen Chang Gung Memorial Hospital Competition, has been declared the winner of the competition.<br/>Located in Haicang district.
                            <a href="#" class="more">READ MORE</a>
                        </p>                        
                    </div>                     
                </div>
                
                <div class="one_post_box_type2">
                    <a href="#"><img src="assets/dist/img/news_200824_4.jpg" /></a>
                    <div class="desc">
                        <div class="date">2020/03/11</div>
                        <div class="cat">PROJECTS</div>
                        <h3><a href="#">Experiencing 20 years of Grace” Suang-Lien Elderly Center</a></h3>
                        <p class="excerpt">
                            JP is proud to announce its design for the Xiamen Chang Gung Memorial Hospital Competition, has been declared the winner of the competition.<br/>Located in Haicang district.
                            <a href="#" class="more">READ MORE</a>
                        </p>                        
                    </div>                     
                </div>                

            </div><!-- ## home_news -->

         

        </div>


<?php include "tpl/footer.php"; ?>