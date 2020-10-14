<?php 
    include "tpl/header.php"; 


    $term_id = (isset($_GET['t'])) ? $_GET['t'] : 44;

    $data = array(
        "post_per_page"=>99,
        "term_id"=> $term_id,
        "skip"=>0
    );

    $ch = curl_init('https://www.jjpan.com/wp-json/news/v1/latest_portfolio_by_term');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result  = json_decode($result,true);

    // print_r($result);
    
?>
<?php include "tpl/menu.php"; ?>
        <div id="main">

           <!-- #####   home_news  #####  --> 
           <h1 class="main_title top"><?php echo $result['cur_term']['name']; ?></h1>

            <div class="menu_tab">
                <div class="inner">
                    <a href="project_cat1.php?t=<?php echo $term_id; ?>" class="tab1"></a>
                    <a href="project_cat2.php?t=<?php echo $term_id; ?>" class="tab2"></a>
                    <a href="project_cat3.php?t=<?php echo $term_id; ?>" class="tab3"></a>
                </div>
                <h4>Select display style</h4>
            </div>    





            <!-- #####   home_news  #####  -->
            <div id="project_archives" >
                <?php  
                    foreach($result['data'] as $elm){                            
                 ?>
                <div class="single_project_1">
                    <a href="project.php?po=<?php echo $elm['id']; ?>"><img src="<?php echo $elm['img']; ?>" /></a>
                    <div class="desc">
                        <h3><a href="project.php?po=<?php echo $elm['id']; ?>"><?php echo $elm['title']; ?></a></h3>
                    </div>                    
                </div>

                <?php } ?>               

            </div>           
        </div>


<?php include "tpl/footer.php"; ?>