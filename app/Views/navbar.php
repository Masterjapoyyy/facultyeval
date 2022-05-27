<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css" />
</head>
<style type="text/css">
header{
  background:#f27457!important;
}
ul{
  padding: 0 60px;
  list-style-type: none;
}
  li{
    padding: 0px 20px;
    line-height: 3;
  }
  li a{
    font-size: 20px;
    color: #fff;


  }
  .navbar-expand-md .navbar-nav .nav-link{
    padding: 5px 15px 5px 15px;
  }
  li a:hover{
    color: #fff;
    background: #9c9999;
    
  }
  .navbar{
    padding: 0;
  }
  #top li{
    padding: 0;
    line-height: 1.8;

  }
  #top li a{
    font-size: 16px;
    padding: 0;
  }
  #top li a:hover{
    background: none;
    text-decoration: none;
  }
  .col-md-2 .fab{
    font-size: 20px;
    padding-right: 10px;
    padding-top: 5px;
    padding-left: 10px;
    
  }
  .navbar-brand img{
    height: 60px;

  }
  .navbar-toggler{
    color: #fff;
  }
  .fas:hover,.fab:hover{
    color: #E5E7E9;

  }
  .ownbg{
    background: #3f51b5!important;

  }
  @media(max-width: 992px){
  .col-md-2 .fab{
    font-size: 18px;
    padding-right: 0;

    
  }
  }
  @media(max-width: 768px){
    #top{
      display: none;
    }
     .navbar-brand img{
    height: 50px;

  }
    .navbar-dark .navbar-toggler{
      outline: none;
      border-color: rgba(255, 255, 255, 0);
    }
    ul,li{
      padding: 0;
      text-align: center;

    }
    .navbar-nav{
      padding-bottom: 40px;
    }
 
  }

  
.drop-down{
    display: inline-block;
    position: relative;
}

.drop-down__button{
  background: #a23d3d;
  display: inline-block;
  line-height: 40px;
  padding: 0 18px;
  padding-top: 1%;
  padding-bottom: 1%;
  text-align: left;
  border-radius: 50px;
  cursor: pointer;
}

.drop-down__name {
    font-size: 100%;
    text-transform: uppercase;
    color: #fff;
    font-weight: 500;
}

.drop-down__icon {
    width: 18px;
    vertical-align: middle;
    margin-left: 14px;
    height: 18px;
    border-radius: 50%;
    transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -ms-transition: all 0.4s;
  -o-transition: all 0.4s;
  
}



.drop-down__menu-box {
    position: absolute;
    width: 100%;
    left: 0;
    background-color: #fff;
    border-radius: 4px;
  box-shadow: 0px 3px 6px 0px rgba(0,0,0,0.2);
     transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
 visibility: hidden;
opacity: 0;
  margin-top: 5px;
}

.drop-down__menu {
    margin: 0;
    padding: 0 13px;
    list-style: none;
  
}
.drop-down__menu-box:before{
  content:'';
  background-color: transparent;
  border-right: 8px solid transparent;
  position: absolute;
  border-left: 8px solid transparent;
  border-bottom: 8px solid #fff;
  border-top: 8px solid transparent;
  top: -15px;
  right: 18px;

}

.drop-down__menu-box:after{
  content:'';
  background-color: transparent;
}

.drop-down__item {
    padding-right: 2%;
    padding-left: 2%;
    text-align: left;
    font-weight: 500; 
    font-size: 100%;
    color:#f27457;
    cursor: pointer;
    position: relative;
}

.drop-down__item-icon {
    width: 15px;
    height: 15px;
    position: absolute;
    right: 0px;
    fill: #8995b6;
    transition: width 2s, height 4s;
  
}

.drop-down__item:hover .drop-down__item-icon{
  fill: #a23d3d;
  transition: width 2s, height 4s;
}

.drop-down__item:hover{
  color: #a23d3d;
  transition: width 2s, height 4s;
}



.drop-down__item:last-of-type{
  border-bottom: 0;
}


.drop-down--active .drop-down__menu-box{
visibility: visible;
opacity: 1;
  margin-top: 15px;
}

.drop-down__item:before{
  content:'';
  position: absolute;
width: 3px;
height: 28px;
background-color: #a23d3d;
left: -13px;
top: 50%;
transform: translateY(-50%);
  display:none;
}

.drop-down__item:hover:before{
  display:block;
}

.toggle-icon {
  font-size: 1.3rem;
  color:#f27457;
}


.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
}
</style>
<body>
<header>
<div class="container" id="top">
  <div class="row">
    
    
  </div>
</div>
<nav class="navbar navbar-expand-md">
  <a class="navbar-brand text-white pl-5" href="#"><img src="<?= base_url('assets/assets/ppsc.svg');?>"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <div class="drop-down">
         <div id="dropDown" class="drop-down__button">
         <?php
        $user_img = !empty(session("uploaded_flleinfo")) ? session("uploaded_flleinfo") : 'default.svg';
        ?>
         <img class="big-svg noselect" src="<?php echo base_url().'/uploads/profile/'.$user_img; ?>" width="40" height="40"  alt="LOGO">
           <span class="drop-down__name" class="noselect"><?= session("first_name")?></span>
         </div>
         
         <div class="drop-down__menu-box">
           <ul class="drop-down__menu">
             <li data-name="profile" class="drop-down__item">
               <ion-icon name="person-outline" class="toggle-icon"></ion-icon>
               Profile
              </li>
             <li data-name="activity" class="drop-down__item" onclick="location.href='<?= base_url('Student/studentLogout/'.session('id'));?>';">
             <ion-icon name="log-out-outline" class="toggle-icon"></ion-icon>  
             Sign out
             </li>
           </ul>
         </div>
       </div>

      </li>
       
    </ul>
  </div>  
</nav>
</header>
</body>
<script>
$(document).ready(function(){
  $('#dropDown').click(function(){
    $('.drop-down').toggleClass('drop-down--active');
  });
});
</script>
</html>