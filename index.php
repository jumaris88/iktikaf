

<!DOCTYPE html> 
<html>
<head>
	<title>Laporan Iktikaf Mesjid Al Wahdah Belopa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="/css/main.css">
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
	<div data-role="page">
    
    <div data-role="panel" id="panelmenu" data-position="left">
      
    </div><!-- /panel -->
    
    <div data-role="panel" id="panellogin" data-position="right">
        <form>
            <div style="padding:10px 20px;">
                <h3>Please sign in</h3>
                <label for="un" class="ui-hidden-accessible">Username:</label>
                <input type="text" name="user" id="un" value="" placeholder="username" data-theme="a">
                <label for="pw" class="ui-hidden-accessible">Password:</label>
                <input type="password" name="pass" id="pw" value="" placeholder="password" data-theme="a">
                <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Sign in</button>
            </div>
        </form>
    </div><!-- /panel -->
    
  	<div data-role="header" data-position="fixed">
  		<h1>I'tikaf Mesjid Al-Wahdah Belopa</h1>
  		<a href="#panelmenu" class="btnmenu ui-btn-left ui-btn ui-btn-inline ui-corner-all ui-btn-icon-top ui-icon-grid">Menu</a>
  		<a href="#panellogin" class="btnlogin ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-top ui-icon-user">Login</a>
  		<!--<span class="ui-title"></span>-->
  	</div><!-- /header -->
  
  	<div role="main" class="ui-content">
  		<div data-role="tabs">
  		  <div data-role="navbar">
          <ul>
            <li><a href="#one" class="ui-btn-active" data-ajax="false">PEMASUKAN</a></li>
            <li><a href="#two" data-ajax="false">PENGELUARAN</a></li>
            <li><a href="#saldo" data-ajax="false">SALDO</a></li>
          </ul>
        </div>
          <div id="one" class="ui-body-d">
              <ul class="tablist-content" data-role="listview" data-count-theme="a" data-inset="true">
                  <li><a href="#">Ustads Ridham <span class="ui-li-count">100.000</span></a></li>
                  <li><a href="#">Ustads Ali Abdullah <span class="ui-li-count">50.000</span></a></li>
                  <li><a href="#">Abanya Rani <span class="ui-li-count">200.000</span></a></li>
                  <li><a href="#">Abanya Hisyam <span class="ui-li-count">50.000</span></a></li>
                  <li><a href="#">Faisal Jamal <span class="ui-li-count">50.000</span></a></li>
                  <li><a href="#">Anto<span class="ui-li-count">100.000</span></a></li>
              </ul>
              <h2>Total : Rp. 550.000</h2>
          </div>
          <div id="two" class="ui-body-d">
              <ul id="two" class="tablist-content" data-role="listview" data-inset="true">
                  <li><a href="#">Air gelas 3 dus</a><span class="ui-li-count">50.000</span></li>
                  
              </ul>
              <h2>Total : Rp. 50.000</h2>
          </div>
          <div id="saldo">
            <h1>Rp. 500.000</h1>
          </div>
          
          
      </div>
  	</div><!-- /content -->
  
  	<div data-role="footer" data-position="fixed">
  		<p>Mesjid Al Wahdah Belopa</p>
  	</div><!-- /footer -->
  	
  </div><!-- /page -->
  
</body>
</html>