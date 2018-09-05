<?php
session_start();
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
//header( "refresh:1;url=http://godaddy.com" );
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home.php");
}
?>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
	<title>Welcome</title>
	<link href="tools/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="tools/bootstrap.min.css"/>
	<script type="text/javascript" src="tools/jquery.min.js"></script>
	<script type="text/javascript" src="tools/bootstrap.min.js"></script>
	<script type="text/javascript" src="tools/particles.js"></script>
	<script type="text/javascript" src="tools/cufon-yui.js"></script>
	<script type="text/javascript" src="tools/Bebas_400.font.js"></script>
	<script type="text/javascript" src="tools/Bell_Gothic_Std_300.font.js"></script>
	<link href="tools/jquery-fallr-2.0.1.css" rel="stylesheet"/>
    <script src="tools/jquery-fallr-2.0.1.js"></script>

	<script type="text/javascript">
	Cufon.replace('a.logo', {fontFamily: 'Bebas'});
	Cufon.replace('a.logo span', {fontFamily: 'Bell Gothic Std'});
	</script>
	
	<style type="text/css">
	.auto-style2 {
	font-size: 80px;
	}
	.auto-style4 {
	text-align: center;
	font-weight: bold;
	}
	.container {
  position: absolute;
  top: 350px;
  right: 50%;
  -webkit-transform: translate(50%, -50%);
          transform: translate(50%, -50%);
  color: #fff;
  max-width: 90%;
  padding: 2em 3em;
  background: rgba(0, 0, 0, 0.4);
}
.form-control{
	background: transparent;
}
.btn-primary {
color: #fff;
    background-color: #b16767;
    border-color: #ffffff; }
	</style>
	
	</head>
	<link rel="SHORTCUT ICON" href="images/in.png" />
	<body id="particles-js">
	<div class="container">
	   <a href="user/home.php"><button type="button" class="btn btn-primary">Apply Licence Online</button></a>
	<div class="col-md-12">
	<h2 align="center" style="color: aquamarine;">Welcome to Dhing Municipal Board</h2>
	<div class="col-md-12"><a class="logo" style="height: 194px">&nbsp;</a></div>
	</div>
	<form action="" method="post" >
	<div class="auto-style4 col-md-6 col-md-offset-3">
	<!-- Text input-->
  <div class="form-group">
    <h3>For Login</h3>
  <!--<label class="col-md-6 control-label" for="email"></label>  -->
  <div class="col-md-12">
  <input id="username" name="username" placeholder="User Name" class="form-control input-md"  type="text" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
    
  </div>
  </div>
  <br/>
  <br/>
<!-- Password input-->
                <div class="form-group">
                <!--<label class="col-md-6 control-label" for="password"></label>-->
                <div class="col-md-12">
                <input id="password" name="password" placeholder="Password" class="form-control input-md" type="password" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                 <br/>
            	<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Log In" style="background:white;">
              <span><?php echo $error; ?></span>
            	</div>
            	</div>
	</div>
	
	</form>
	</div>

	<script type="text/javascript">
	var con,mysql;

		"use strict";

particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 700
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);



	</script>
	</body>
	</html>