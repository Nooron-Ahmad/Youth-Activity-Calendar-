<?php

//Set Page info Here
$include_path="..";
$PageName="Toddlers";
$PageSlogan="First Steps Toward Reading";


//Include Header File
include("{$include_path}/includes/header.php");

//Set this Link to Active
$tod="active ";

//Call the Navigation Menu
include "{$include_path}/includes/nav-menu.php";

echo <<< HTML

	</header>

	<div class="mainContent">
		<div class="content">
			<article class="topcontent">				
				<div id="sideimage">
                    <img src="{$include_path}/graphics/activitycalendar/October_p1_2023.png" alt="Image for {$PageName} page" title="Image for {$PageName} page">
                    <br><br>
                    <img src="{$include_path}/graphics/activitycalendar/October_p2_2023.png" alt="Image for {$PageName} page" title="Image for {$PageName} page">
				</div>			
			</article>
		</div>
	</div>
HTML;

include("{$include_path}/includes/footer.php")
?>