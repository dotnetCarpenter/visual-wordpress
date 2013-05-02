<?php
/*
// TAGER TID I DB-KONTAKT
$user_db = 'idpf_dk'; 	
$pass_db = 'arvidergod'; 
$host_db = 'idpf_dk_db'; 
$db = 'arvidergod'; 

@mysql_connect ($host_db, $user_db, $pass_db);
@mysql_select_db ($db);


$query = "SELECT * FROM wp_usermeta WHERE meta_value = 'test' AND user_id = 4"; 
$result = mysql_query($query) or die ("Fejl in query: $query. ".mysql_error());
if (mysql_num_rows($result) > 0) { 
while($row = mysql_fetch_assoc($result)) 
{
$meta_value = $row['meta_value'];
echo "$meta_value<br />";
}
}
*/

//echo '<img src="http://www.idpf.dk/wp-content/uploads/userphoto/2.jpg" height="130" width="130" style="z-index:999;">';

//if ( function_exists( 'get_wp_parallax_content_slider' ) ) { get_wp_parallax_content_slider(); } 


?>
    <link rel="stylesheet" type="text/css" media="screen" href="http://www.idpf.dk/wp-content/themes/idpf/liquid-slider/stylesheets/liquid-slider.css">

    <!-- This is just styling for the demo to make it a little less crowded at the top 
    <style>h1{margin:100px;}</style>
-->

    <!-- Liquid Slider relies on jQuery and easing effects-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://www.idpf.dk/wp-content/themes/idpf/liquid-slider/js/jquery.easing.1.3.js"></script>

    <!-- Optional code for enabling touch -->
    <script src="http://www.idpf.dk/wp-content/themes/idpf/liquid-slider/js/jquery.touchSwipe.min.js"></script>

    <!-- This is Liquid Slider code. The full version (not .min) is also included in the js directory -->
    <script src="http://www.idpf.dk/wp-content/themes/idpf/liquid-slider/js/jquery.liquid-slider.min.js"></script>   
   
   
    <script>
    $(function(){

      /* Here is the slider using default settings */
      /*
	  $('#slider-id').liquidSlider();
	  */
	   $('#slider-id').liquidSlider({
            autoSlide:true,
            autoHeight:true,
			autoSlideInterval:6000
          });


      /* If you want to adjust the settings, you set an option
         as follows:

          $('#slider-id').liquidSlider({
            autoSlide:false,
            autoHeight:false
          });

         Find more options at http://liquidslider.kevinbatdorf.com/
      */

      /* If you need to access the internal property or methods, use this:

      var sliderObject = $.data( $('#slider-id')[0], 'liquidSlider');
      console.log(sliderObject);

      */


    });
	
	
	
    </script> 
    
<?php 
  $user_id = 1;
  $key = 'last_name';
  $single = true;
  $user_last = get_user_meta( $user_id, $key, $single ); 
  //echo '<p>The '. $key . ' value for user id ' . $user_id . ' is: ' . $user_last . '</p>'; 
  
$user_query = new WP_User_Query( $args );

$blogusers = get_users('');
    foreach ($blogusers as $user) {
        //echo '<p>' . $user->ID . '</p>';
    }
	
	
$i_alle = 1;
//while ($i_alle <= 5) {
$all_meta_for_user = get_user_meta( 1 );
  		//print_r( $all_meta_for_user );
		$forside_0 = $all_meta_for_user['_tern_wp_member_list'][0];
		$forside_1 = $all_meta_for_user['_tern_wp_member_list'][1];
		$forside_2 = $all_meta_for_user['_tern_wp_member_list'][2];
		$forside_3 = $all_meta_for_user['_tern_wp_member_list'][3];
		$forside_4 = $all_meta_for_user['_tern_wp_member_list'][4];
		$forside_5 = $all_meta_for_user['_tern_wp_member_list'][5];
		$forside_6 = $all_meta_for_user['_tern_wp_member_list'][6];
		
		if ($forside_0 == "Forsiden" ||
		$forside_1 == "Forsiden" ||
		$forside_2 == "Forsiden" ||
		$forside_3 == "Forsiden" ||
		$forside_4 == "Forsiden" ||
		$forside_5 == "Forsiden" ||
		$forside_6 == "Forsiden" ){
		//echo  "<p>$i_alle er med på $forside</p>";
		}
//$i_alle = $i_alle++;
if ($i_alle == "10"){$i_alle = "1";}
//}





?>

      <div style="margin:30px 0 0 0;" class="liquid-slider"  id="slider-id">
        
	<?php
	// HENT ALLE BRUGERE EFTER ID	
	$search = "search=$i";
	$blogusers = get_users("$search");
    foreach ($blogusers as $user) {
	$bruger_id = "$user->ID";
	$navn = "$user->user_firstname $user->user_lastname";
	//echo "tester: $bruger_id $navn";	
	}
	$key = '$all_meta_for_user';
  	//$single = true;
  	//$region = get_user_meta( $bruger_id, $key, $single ); 
	
// HENTER 5 TILFÆLDIGE BRUGERE
$con=mysqli_connect("mysql15.unoeuro.com","idpf_dk","arvidergod","idpf_dk_db");
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();}
  
$result = mysqli_query($con,"SELECT * FROM wp_usermeta WHERE meta_value LIKE 'Forsiden' ORDER BY RAND() LIMIT 0,1");
while($row = mysqli_fetch_array($result))
  {
  $bruger_1 = $row['user_id'];
  }

$result = mysqli_query($con,"SELECT * FROM wp_usermeta WHERE meta_value LIKE 'Forsiden' ORDER BY RAND() LIMIT 0,1");
while($row = mysqli_fetch_array($result))
  {
  $bruger_2 = $row['user_id'];
  }
    
$result = mysqli_query($con,"SELECT * FROM wp_usermeta WHERE meta_value LIKE 'Forsiden' ORDER BY RAND() LIMIT 0,1");
while($row = mysqli_fetch_array($result))
  {
  $bruger_3 = $row['user_id'];
  }

$result = mysqli_query($con,"SELECT * FROM wp_usermeta WHERE meta_value LIKE 'Forsiden' ORDER BY RAND() LIMIT 0,1");
while($row = mysqli_fetch_array($result))
  {
  $bruger_4 = $row['user_id'];
  }

$result = mysqli_query($con,"SELECT * FROM wp_usermeta WHERE meta_value LIKE 'Forsiden' ORDER BY RAND() LIMIT 0,1");
while($row = mysqli_fetch_array($result))
  {
  $bruger_5=  $row['user_id'];
  }

//echo "$bruger_1 - $bruger_2 - $bruger_3 - $bruger_4 - $bruger_5";

mysqli_close($con);		


$i = 1;
while ($i <= 5) {
	
if ($i == 1){
$bruger_random = $bruger_1;
}
if ($i == 2){
$bruger_random = $bruger_2;
}
if ($i == 3){
$bruger_random = $bruger_3;
}
if ($i == 4){
$bruger_random = $bruger_4;
}
if ($i == 5){
$bruger_random = $bruger_5;
}

	
	
	$search = "search=$bruger_random";
    //http://codex.wordpress.org/Function_Reference/get_users
	$blogusers = get_users("$search");
	//$blogusers = get_users('search=*');
    foreach ($blogusers as $user) {
		
		
		// Tjek jpg, png, gif, jpeg
		$filename_jpg = "wp-content/uploads/userphoto/".$bruger_random.".jpg"; 
		$filename_jpeg = "wp-content/uploads/userphoto/".$bruger_random.".jpeg";
		$filename_gif = "wp-content/uploads/userphoto/".$bruger_random.".gif"; 
		$filename_png = "wp-content/uploads/userphoto/".$bruger_random.".png"; 
		
 		if (file_exists($filename_jpg)) { 
		$foto = "$bruger_random.jpg";
		} 
 		else if (file_exists($filename_jpeg)) { 
		$foto = "$bruger_random.jpeg";
		}
 		else if (file_exists($filename_gif)) { 
		$foto = "$bruger_random.gif";
		}
 		else if (file_exists($filename_png)) { 
		$foto = "$bruger_random.png";
		}
		
				
		else { 
		$foto = "no_photo.jpg";
		}
		
		//$user_query = new WP_User_Query( array( 'number' => 5, 'offset' => 25 ) );
			
		$bruger_id = "$user->ID";
		//echo "tester: $bruger_id";	
		$navn = "$user->user_firstname $user->user_lastname";
		$bruger_beskriv = "$user->user_description";
		$bruger_beskriv = substr($bruger_beskriv,0,300).'...';
		$bruger_url = "$user->user_url";
		$bruger_url = str_replace('http://', '', $bruger_url); 
		$bruger_url = "<a href='http://$bruger_url' target='_blank'>$bruger_url</a>";
		
		$key = '_tern_wp_member_list';
  		//$single = true;
  		$findes = get_user_meta( $bruger_id, $key, $single ); 
		
		echo "<div style='background: url(http://www.idpf.dk/wp-content/uploads/userphoto/slider_bg_gul".$i.".jpg) no-repeat bottom center;'>";
		
		//echo "$user->user_firstname "." $user->user_lastname ".'</h3><p>'.
		echo '<img class="slider_billede" style="" src="http://www.idpf.dk/wp-content/uploads/userphoto/'.$foto.'" >';	
		echo "<div class='slider_tekst'>";
		echo "<h2 class='slider_title'>$navn</h2>";
		echo "<p>Tlf.: $user->jabber<br />"; 
		echo "$user->user_email<br />"; 
		echo "$user->_line1<br />"; 
		echo "$user->_zip $user->_city <br />"; 
		echo "$bruger_url</p></div>";
		
		$key = '_tern_wp_member_list';
  		//$single = true;
  		$region = get_user_meta( $bruger_id, $key, $single ); 
  		//echo '<p>The '. $key . ' value for user id ' . $user_id . ' is: ' . $user_last . '</p>'; 
		//echo "<p>Region $region</p>";
		
		$all_meta_for_user = get_user_meta( $bruger_id );
  		//print_r( $all_meta_for_user );
		$region_0 = $all_meta_for_user['_tern_wp_member_list'][0];
		if ($region_0 != "" && $region_0 != "Forside"){
		//echo "<p>$navn praktiserer i:</p><p>$region_0</p>";
		$regioner = "<p><strong>$navn</strong> praktiserer her:</p><p>$region_0</p>";
		}
		$region_1 = $all_meta_for_user['_tern_wp_member_list'][1];
		if ($region_1 != "" && $region_1 != "Forsiden"){
		//echo "<p>$region_1</p>";
		$regioner .= "<p>$region_1</p>";
		}
		$region_2 = $all_meta_for_user['_tern_wp_member_list'][2];
		if ($region_2 != "" && $region_2 != "Forsiden"){
		//echo "<p>$region_2</p>";
		$regioner .= "<p>$region_2</p>";
		}
		$region_3 = $all_meta_for_user['_tern_wp_member_list'][3];
		if ($region_3 != "" && $region_3 != "Forsiden"){
		//echo "<p>$region_3</p>";
		$regioner .= "<p>$region_3</p>";
		}
		$region_4 = $all_meta_for_user['_tern_wp_member_list'][4];
		if ($region_4 != "" && $region_4 != "Forsiden"){
		//echo "<p>$region_4</p>";
		$regioner .= "<p>$region_4</p>";
		}
		$region_5 = $all_meta_for_user['_tern_wp_member_list'][5];
		if ($region_5 != "" && $region_5 != "Forsiden"){
		//echo "<p>$region_5</p>";
		$regioner .= "<p>$region_5</p>";
		}
		$region_6 = $all_meta_for_user['_tern_wp_member_list'][6];
		if ($region_6 != "" && $region_6 != "Forsiden"){
		//echo "<p>$region_6</p>";
		$regioner .= "<p>$region_6</p>";
		}
		$region_7 = $all_meta_for_user['_tern_wp_member_list'][7];
		if ($region_7 != "" && $region_7 != "Forsiden"){
		echo "<p>$region_7</p>";
		//$regioner .= "<p>$region_7</p>";
		}
		//echo "<p>$regioner</p><p>Find en ID Psykoterapeut</p>";
		
		echo "<div class='slider_find_terapeut' style='display:inline-block;padding:20px 0 0 0;'><p>$regioner</p><p>&nbsp;</p><p><a href='http://www.idpf.dk/psykoterapeuter/'>Find en ID Psykoterapeut</a></p></div>";
		
		//echo "<p>$bruger_beskriv</p>";
		//echo '<img src="http://www.idpf.dk/wp-content/uploads/userphoto/2.jpg" height="130" width="130" style="z-index:999;">';
        //echo '<p>' . $user->user_firstname . ' ' . $user->user_lastname . ' ' . $user->user_email . $user->user_description . '</p>';
		
		echo "</div>";
    }
    $i++;  

//echo "<p>$regioner</p>";

// WHILE op til 4 slut
}
		
		//echo '<img style="float:left;margin:0 26px 0 0;" src="http://www.idpf.dk/wp-content/uploads/userphoto/3.jpg" width="180">';	
		
			
		?>
        
      </div>
      <!-- Liquid Slider Ends Here -->
      
<div align="center" style="margin:0 0 -30px 0 ";>&nbsp;</div>


<!--

<div align="center" style="margin:0 0 -50px 0 ";>&nbsp;
<div class="nivoSlider" style="height:245px; width:980px;margin:8px 0 0px 0;">

<?php
//echo $tern_wp_members_defaults->_city;
$i = 1;
while ($i <= 4) {

	$search = "search=$i";
    //http://codex.wordpress.org/Function_Reference/get_users
	$blogusers = get_users("$search");
	//$blogusers = get_users('search=*');
    foreach ($blogusers as $user) {
		
		// Tjek jpg, png, gif, jpeg
		$filename = "wp-content/uploads/userphoto/$i.jpg"; 
 		if (file_exists($filename)) { 
		//echo "Jep"; 
		} else { 
		//echo "Nope"; 
		}

		
		echo "<img src='http://www.idpf.dk/wp-content/uploads/userphoto/slider_bg_gul.jpg' height='130' width='130' alt='' title='<h3>
		$user->user_firstname "." $user->user_lastname ".'</h3><p>'.
		"Tlf.: $user->jabber ".'<br />'." 
		$user->user_email ".'<br />'." 
		$user->_line1 ".'<br />'." 
		$user->_zip"." $user->_city".'<br />'." 
		$user->user_url ".'<br />'.$i." 
		Region: ".'</p>'." 
		' />";
		//echo '<img src="http://www.idpf.dk/wp-content/uploads/userphoto/2.jpg" height="130" width="130" style="z-index:999;">';
        //echo '<p>' . $user->user_firstname . ' ' . $user->user_lastname . ' ' . $user->user_email . $user->user_description . '</p>';
    }
    $i++;  



// WHILE op til 4 slut
}
?>
</div>
</div>
-->