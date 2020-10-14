<?php 


    $data = array();

    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/pterms');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result  = json_decode($result,true);

    // print_r($result);


    include "tpl/header.php"; 
?>
<?php include "tpl/menu.php"; ?>
        <div id="main">
           <!-- #####  Project Filter  #####  --> 
            <div class="project_filter">
                <select name="" id=""  class="pj_select">
                    <option value="">Select category</option>
                    <?php foreach($result as $elm){ ?>
                        <option value="<?php echo $elm['tid']; ?>"> <?php echo $elm['name']; ?></option>
                    <?php } ?>                   
                </select>
            </div>


            <!-- #####   home_news  #####  -->
            <div id="all_projects" >
                <?php foreach($result as $elm){  ?>
                    <section class="project_archive" style="background-image:url(<?php  echo $elm['desc'];?>)">
                    <?php if($elm['desc']){ ?>
                        <img src="<?php echo $elm['desc']; ?>" class="pic" />
                    <?php } ?>
                    <a href="project_cat1.php?t=<?php echo $elm['tid']; ?>" title="Planning">                        
                        <h3><?php echo $elm['name']; ?></h3>
                    </a>
                    </section>                    
                <?php } ?>    
                                          
            </div>

           <!-- #####  Project Filter  #####  --> 
           <div class="project_filter">
                <select name="" id=""  class="pj_select">
                    <option value="">Select category</option>
                    <?php foreach($result as $elm){ ?>
                        <option value="<?php echo $elm['tid']; ?>"> <?php echo $elm['name']; ?></option>
                    <?php } ?>     
                </select>
            </div>
        </div>


<?php include "tpl/footer.php"; ?>