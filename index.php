<!doctype html>
<html>
    <head>
        <title>Тестовй сайт</title>
        <meta charset="utf-8">
        <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>

    </head>
	
    <body>
	<div class="sidebar" style="display:none" id="mySidebar">
  		<button class="btnclose" onclick="w3_close()">Close &times;</button>
  		<a href="#" class="textheader columns">Link 1</a>
  		<a href="#" class="textheader columns">Link 2</a>
  		<a href="#" class="textheader columns">Link 3</a>
	</div>
    <header class="" id="main">
        <div class="header">
            <button id="openNav" onclick="w3_open()" class="btnlogin">&#9776;</button>
            <ul class="list">
                <li><a href="#" class="textheader">Home</a></li>
                <li><a href="#" class="textheader">Features</a></li>
                <li><a href="#" class="textheader">Pricing</a></li>
                <li><a href="#" class="textheader">FAQs</a></li>
                <li><a href="#" class="textheader">About</a></li>
            </ul>
          
            <input type="search" class="searchpull" placeholder="Search..." aria-label="Search">
          
            <div class="text-end">
                <button type="button" class="btnlogin">Login</button>
                <button type="button" class="btnsign">Sign-up</button>
            </div>
        </div>
  	</header>
    <div class="try"><button id="add-row" type="button" class="btnaddrow">New row</button></div>
    <div id="example-table" class="table"></div>  
    
    <script src="js/script.js"></script>
    </body>
</html>