<?php
error_reporting(0);
require_once 'models/Utility.php';
require_once 'models/Items.php';
require_once 'models/Category.php';
include_once ('models/db.php');
include_once ('models/function.php');

$page_type = "home";
$coo_items_obj = new Items();

$where = "";

$search_text = (isset($_GET['search']) ? strval($_GET['search']) : '');
//echo('search='.$_GET['search'] . ', $search_text='.$search_text);
if ($search_text != '') {// && strlen($search_text)<100){
    $where .= ($where == '' ? '' : ' AND ' ) . ( "( b_title LIKE '%" . $search_text . "%' OR  b_detail like '%" . $search_text . "%' )");
    //echo('$where=='.$where);
}

$cat_id = (isset($_GET['cat']) && $_GET['cat'] != '' ? intval($_GET['cat']) : -1);

$where .= ($where == '' ? '' : ' AND ' ) . ( ' b_isactive=1 AND b_cat_id<1000');

$total_records = $coo_items_obj->GetItemsListTotalCount($where);
//echo('$total_records='.$total_records);
$show_all_records = false;
$page_num = 1;
//echo('<br>page_num='.$_POST['page_num_val'] . ' pnum = ' . $page_num);
if (isset($_GET['page_num'])) {

    $page_num = (int) $_GET['page_num'];
}

$rows_per_page = 4;
if ($show_all_records) {
    $records_from = 0;
} else {
    $records_from = ($page_num - 1) * $rows_per_page;
}
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 4;
    	$startpoint = ($page * $limit) - $limit;
        //to make pagination
        $statement = "`business` where `b_isactive` = 1";
$records = $coo_items_obj->GetItemsList($where, $startpoint, $limit);

if($page > 1){
$page_name = 'Couple Name Editing In Different Style - Combine Name Of Lovers '.$page ;
 }
  else{
 $page_name = 'Couple Name Editing In Different Style - Combine Name Of Lovers';
  }
  
  //Couple Name Editing In Different Style - Combine Name Of Lovers
$page_description = 'Stylish name maker online for couple name editing in different style.Combine name of lovers by writing couple name on romantic cute love images. Page '.$page;
$meta_keyword = "Couple Name Editing In Different Style, Combine Name Of Lovers, stylish couple name maker,romantic couple name generator, couple name editing online,Stylish name combiner, couple name combiner,  Couple name editing in heart";
$detail_para ="Stylish couple name maker provides a facility for <a href='". $bas_url."Cute-Couple-Name-Maker-love-name-picture/541'><b> Couple Name Editing In Different Style </b></a>for cute couple and lovers to send love wishes. Lovers and couples want to see their love happy all the time thats why they always look for some new ideas to give a cute surprise to their partner. 
                Romantic love images are specially designed to <a href='".$bas_url."Cute-Lovers-Name-Combiner-love-name-picture/698'><b>Combine Name Of Lovers</b></a>.There is a huge collection of sweet love images to combine couple name. Just select any picture and write couple name. Download free and share you couple name image with your love.";

if($page == 1){
    $detail_para_2 ="Making and seeing someone happy is the name of special feeling and that is called love. If you have such feeling for someone that you want to see him / her smiling & happy all the time and for that you try your best to bring happiness in his / her life, then you are in love. The name of the lover brings his / her face in mind and eyes reflects the feelings. This could be the most special, memorable gift and surprise for couple if they see their names on cute love image. Sending a cute love wishing image to your love will surely give a sweet surprise to your love.
                    <br><br>You can give a cute surprise to couples or your lover by combing lovers name online on romantic images with <a href='".$bas_url."Cute-Lovers-Name-Combiner-love-name-picture/698'><b>couple name combiner</b></a>. This cute little surprise will bring smile on your lover face and give a great strength to your relationship.Couples and lovers want to see their names together as seeing their names together make them feel awesome and increase affection for each other. You can combine your couple name or any other couple names on beautiful and romantic HD images which are specially designed with love quotes. These name images will make home in your lover heart or other couple's heart because the feeling after seeing names together is unexplainable. Never miss a chance to make home in your lover or any couple heart that belongs to you, specially when it is just a matter of clicks and totally free.
      As couples are incomplete without each other and also their names are incomplete without each other names.This would be a great gift of life to anyone and you can give your lover this cute surprise on any event.
   <br> <br>Best idea to give your life partner or any couple an unforgettable surprise in today's busy life. Just two steps required for putting lovers name together.

     Lovenamepix.com is a enormous platform which provides facility for <a href='".$bas_url."Generator-For-Romantic-Couple-Name-love-name-picture/547'><b>couple name editing in different style</b></a> on huge collection of beautiful romantic couple photos designed with best quotes for you where you can write lovers name with your name or couple names for free in seconds. Browse through the website to select your favourite image and write names in the text fields below your favourite image and click on generate button to get your combine name images for free. Send your generated name image to your girlfriend, boyfriend, or anyone for that this name picture is generated.

    These combined lover name images you can send any couple or each other on Whatsapp, Facebook, Instagram, Twitter, or any social media platform as well. It is absolutely free for everyone. Your lover will definetly fall in love with you again after getting this sweet surprise from you.You and your love one will surely like this surprise. Share with your friends and give them a chance to utilize this great platform for giving surprises to their love ones. 
    <br><br/>Now Invite your love one in amazing and quickest way by sending them beautiful <a style='color : #e81e57;' target='_blank' href='https://bit.ly/3tI2F3v'> Invitation Card with name  </a> for free.";

}else{

    $detail_para_2 ="Making and seeing someone happy is the name of special feeling and that is called love. If you have such feeling for someone that you want to see him / her smiling & happy all the time and for that you try your best to bring happiness in his / her life, then you are in love. The name of the lover brings his / her face in mind and eyes reflects the feelings. This could be the most special, memorable gift and surprise for couple if they see their names on cute love image. Sending a cute love wishing image to your love will surely give a sweet surprise to your love.
                    <br><br>You can give a cute surprise to couples or your lover by combing lovers name online on romantic images with <a href='".$bas_url."Cute-Lovers-Name-Combiner-love-name-picture/698'><b>couple name combiner</b></a>. This cute little surprise will bring smile on your lover face and give a great strength to your relationship.Couples and lovers want to see their names together as seeing their names together make them feel awesome and increase affection for each other. You can combine your couple name or any other couple names on beautiful and romantic HD images which are specially designed with love quotes. These name images will make home in your lover heart or other couple's heart because the feeling after seeing names together is unexplainable. Never miss a chance to make home in your lover or any couple heart that belongs to you, specially when it is just a matter of clicks and totally free.
      As couples are incomplete without each other and also their names are incomplete without each other names.This would be a great gift of life to anyone and you can give your lover this cute surprise on any event.
   <br> <br>Best idea to give your life partner or any couple an unforgettable surprise in today's busy life. Just two steps required for putting lovers name together.

     Lovenamepix.com is a enormous platform which provides facility for <a href='".$bas_url."Generator-For-Romantic-Couple-Name-love-name-picture/547'><b>couple name editing in different style</b></a> on huge collection of beautiful romantic couple photos designed with best quotes for you where you can write lovers name with your name or couple names for free in seconds. Browse through the website to select your favourite image and write names in the text fields below your favourite image and click on generate button to get your combine name images for free. Send your generated name image to your girlfriend, boyfriend, or anyone for that this name picture is generated.

    These combined lover name images you can send any couple or each other on Whatsapp, Facebook, Instagram, Twitter, or any social media platform as well. It is absolutely free for everyone. Your lover will definetly fall in love with you again after getting this sweet surprise from you.You and your love one will surely like this surprise. Share with your friends and give them a chance to utilize this great platform for giving surprises to their love ones. 
     ";
}

     require_once 'mtemplate/header.php'; 
	 require_once 'maincat.php'; ?>

