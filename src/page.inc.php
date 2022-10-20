<?php
if(isset($_GET['page'])){
    $_page = $_GET['page'];
    

    if ($_page ==1){
       // print " Hello css".$_page;
       include_once "./pages/page_css.inc.php";
    }
    if ($_page ==2){
       // print " Hello html".$_page;
        include_once "./pages/page_html.inc.php";
    }
    if ($_page ==3){
        //print " Hello java".$_page;
        include_once "./pages/page_java.inc.php";
    }
    if ($_page ==4){
        //print " Hello java".$_page;
        include_once "./pages/page_python.inc.php";
    }
    else if ($_page > 3 || $_page<=0){
        http_response_code(404);
        print '<p class="button-delete-color">La page n\'existe pas !!!</p>';
        exit;
    }
}
else {
    print "<p> vous êtes à l'acceuil";
}