<!DOCTYPE html>
<html lang="en">
<head>
    <script src="http://localhost/notes/json/jquery-3.3.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="./js/materialize.js"></script>
    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	<!-- <script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script> -->
        <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
        <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
     body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
  #banner{
      background-image: url('cropped-L3.jpg');
  }
    </style>
    <script>
        $( document ).ready(function(){
      $(".button-collapse").sidenav();
    });
    </script>
    
    <title>trackr</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper" style="background-color:#f0f4fd;">
            <a href="#" class="brand-logo" style="font-size:250%;color:#657083">Trackr</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down" style="color:#657083">
                <li><a class="modal-trigger" href="#reg-modal" style="color:#657083">Register</a></li>
                <li><a href="./track.php" style="color:#657083">Track</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav" style="left: 0px;">
              <li><a href="#">Navbar Link</a></li>
            </ul>
              <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    
        </div>
    </nav>
    <main>
    <div id="reg-modal" class="modal">
    <div class="modal-content">
      <h4>Create New Admission</h4>
      <form action="./scripts/newAdd.php" class="reg-form" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Firstname" name="firstname" id="firstname" type="text" class="validate">
          <label for="firstname">Firstname</label>
        </div>
        <div class="input-field col s6">
          <input name="lastname" placeholder="Lastname" id="lastname" type="text" class="validate">
          <label for="lastname">Lastname</label>
        </div>
        <div class="input-field col s6">
          <input name="email" placeholder="email" id="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
        
        <div class="input-field col s6">
          <button type="submit">Register</button>
        </div>
      </div>
    </div>
    </div>
    </form>
    </div>
  </div>