<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebars.css');?>">
    <title><?= $user['last_name']?>,<?= $user['first_name']?></title>
</head>

<style>
    .profile-image{
  border-radius: 50%;
  min-width: 20%; /* depends on size of photo & container */
  height: auto;
    }


    .container{
      
        position:absolute;
        display:flex;
        padding-top: 5%;
        padding-left: 10%;
        width: 100%;
    }

    .circular--portrait {
  position: relative;
  width: 20vw;
  height: 20vw;
  overflow: hidden;
  border-radius: 50%;
}
.circular--portrait img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


@media screen and (max-width: 800px) {
  .circular--portrait {
    width: 40vw;
    height: 40vw;
  }

}


    /*upload*/
.form {
	 width: 400px;
}
 .file-upload-wrapper {
	 position: relative;
	 width: 100%;
	 height: 60px;
}
 .file-upload-wrapper:after {
	 content: attr(data-text);
	 font-size: 18px;
	 position: absolute;
	 top: 0;
	 left: 0;
	 background: #fff;
	 padding: 10px 15px;
	 display: block;
	 width: calc(100% - 40px);
	 pointer-events: none;
	 z-index: 20;
	 height: 40px;
	 line-height: 40px;
	 color: #999;
	 border-radius: 5px 10px 10px 5px;
	 font-weight: 300;
}
 .file-upload-wrapper:before {
	 content: 'Upload';
	 position: absolute;
	 top: 0;
	 right: 0;
	 display: inline-block;
	 height: 60px;
	 background: #2C0AA6;
	 color: #fff;
	 font-weight: 700;
	 z-index: 25;
	 font-size: 16px;
	 line-height: 60px;
	 padding: 0 15px;
	 text-transform: uppercase;
	 pointer-events: none;
	 border-radius: 0 5px 5px 0;
}
 .file-upload-wrapper:hover:before {
	 background: #0088cc;
}
 .file-upload-wrapper input {
	 opacity: 0;
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 z-index: 99;
	 height: 40px;
	 margin: 0;
	 padding: 0;
	 display: block;
	 cursor: pointer;
	 width: 100%;
}

label[for="file-input"] {
	display: block;
	margin-bottom: 1em;
	font-size: 1em;
	color: #fff;
  padding-left: 1em;
	opacity: 0.9;
	font-weight: bold;
}
input[type="file"] {
	cursor: pointer !Important;
}
input[type="file"]::-webkit-file-upload-button {
	background: #F27457;
	border: 0;
	padding: .5em 2em;
	cursor: pointer;
	color: #fff;
	border-radius: 0.2em;
}
input[type="file"]::-ms-browse {
	background: #e62163;
	border: 0;
	padding: 1em 2em;
	cursor: pointer;
	color: #fff;
	border-radius: 0.2em;
}
/*button*/



    .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #f27457 !important;
    border: none;
    color:#a23d3d;
    font-weight: 600;
}

.buttons{
  padding-top: 10%;
}
  


*{
    font-family: 'Montserrat', sans-serif;
    color: #041159;
    }

    html{
        overflow: hidden;
    }

    .container-fluid{
        position:absolute;
    display:flex;
    margin-left: 20%;
    padding-top: 7%;
    }

   
    .registration-header{
        font-weight: 800
    }

    .form-control{
        border-radius: 50px;
        width: 100%;
        padding: 1.5em;
    }

    .registration-button{
        background-color: #F27457;
        font-weight: 700;
        font-size: 1vw;
        border-radius: 25px;
        padding: 2%;
        padding-right: 7%;
        padding-left: 7%;
        color: #8C2E36;
        border: none;
    }

    .registration-button:hover{
      background-color: #1D28F2;
      color: #ffff;
    }

    .need-account{
        text-align: center;
    }
    .signin-link{
        color: #231773;
    }

    .login-container{
        padding-top: 5%;
    }


    
    .login{
    padding-top: 8%;
  }
</style>
<body>
    <div class="container">

    
  
    
   



    <div class="container">
  <div class="row">
    <div class="col">
   
    

    <div class="circular--portrait">
    <?php
        $user_img = !empty(session("uploaded_flleinfo")) ? session("uploaded_flleinfo") : 'default.svg';
        ?>

    <img src="<?php echo base_url().'/uploads/profile/'.$user_img; ?>"  alt="">
</div>


<div class="buttons">

    <div class="form-group">
    <button id="SIGNIN"class="btn btn-primary rounded-pill btn-block" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url('Profile/changepassword/'. $user['id']);?>" role="button">CHANGE PASSWORD</button>
    </div>


    <div class="form-group">
    <button type="button" class="btn btn-primary rounded-pill btn-block" data-toggle="modal" data-target="#exampleModalCenterinfo">
  UPDATE INFORMATION
    </button>
    </div>



    <div class="form-group">
    <button type="button" class="btn btn-primary rounded-pill btn-block" data-toggle="modal" data-target="#exampleModalCenter">
  CHANGE PROFILE PHOTO
    </button>
    </div>
   
    </div>





    </div>
    <div class="col info">
    <h1>ADMIN</h1>
    <div class="info-container">
            <figure class="figure">
        <h2 class="figure-img img-fluid rounded"><?= $user['first_name']?>,<?= $user['last_name']?></h2>
        <figcaption class="figure-caption">Name</figcaption>
        </figure>
    </div>


    <div class="info-container">
            <figure class="figure">
        <h2 class="figure-img img-fluid rounded"><?= $user['email']?></h2>
        <figcaption class="figure-caption">Email</figcaption>
        </figure>
    </div>


    </div>
    
    </div>
  </div>




</div>







    <!-- Modal for photo-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0 d-block">
        <h2 class="modal-title text-center" id="exampleModalLabel">CHANGE PROFILE PHOTO</h2>
      </div>
      <div class="modal-body">
      <?= form_open_multipart('Profile/photo/'.$user['id'] ) ?>
      <form class="form">
    <!--<div class="file-upload-wrapper" data-text="Select your file!">-->
    <div class="form-group">
    <label for="file-input">File upload</label>
    <input type="file" name="userfile" id="file-input">
    </div> 
    <div class="modal-footer border-0">
      <input id="SIGNIN" type="submit" class="btn btn-primary modal-button mx-auto" value="SAVE PHOTO">
</form>
      </div>
    </div>
  </div>
</div>
    </div>






    <!-- Modal password-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0 d-block">
        <h2 class="modal-title text-center" id="exampleModalLabel">CHANGE PASSWORD</h2>
        <p class="text-center">If you change password you will be logged out</p>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('Profile/updatepassword/'.$user['id']);?>">
      <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="password" class="form-control password" id="InputForPassword">
                    <div class="input-group-append">
                    <span class="input-group-text password-span">
                    <i class="fa fa-eye-slash" aria-hidden="true" onclick="myFunction()"></i>
                      </span>
                    </div>
      </div>
      <div class="modal-footer border-0">
      <input id="SIGNIN" type="submit" class="btn btn-primary modal-button mx-auto" value="SAVE NEW PASSWORD">
</form>
      </div>
    </div>
  </div>
</div>
    </div>





        <!-- Modal update info-->
<div class="modal fade" id="exampleModalCenterinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0 d-block">
        <h2 class="modal-title text-center" id="exampleModalLabel">UPDATE INFORMATION</h2>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('Profile/updateprofile/'.$user['id']);?>">
      <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" id="InputForEmail" value="<?= $user['email']?>">
                  
                    </div>

               


                    <div class="mb-3">
                    <input type="text" name="first_name" class="form-control" placeholder="name" id="InputForName" value="<?= $user['first_name']?>">
                    
                  </div>

                  <div class="mb-3">
                    
                    <input type="text" name="last_name" class="form-control" placeholder="name" id="InputForName" value="<?= $user['last_name']?>">
                  </div>
            
      </div>
      <div class="modal-footer border-0">
      <input id="SIGNIN" type="submit" class="btn btn-primary modal-button mx-auto" value="UPDATE INFORMATION">
</form>
      </div>
    </div>
  </div>
</div>
    </div>


    
</body>
<script>
function myFunction() {
  var x = document.getElementById("InputForPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>