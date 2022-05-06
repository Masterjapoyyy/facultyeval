

<!DOCTYPE html>
<html lang="en" ng-app="register">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>REGISTER</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/register.css');?>">
    
 


</head>
<style>
*{
    font-family: 'Montserrat', sans-serif;
    color: #041159;
    }

    html{
        overflow: hidden;
    }

    .container-fluid{
        box-sizing: border-box;
        padding: 10%;
        padding-top: 7%;
        overflow: hidden;
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


    
    .register{
    padding-top: 8%;
  }


  .validate{
    padding-bottom: 5px;
  }

  *:focus {
    outline: 0 !important;
}
</style>
<body>
    <div class="container-fluid">
    <?php $validation = \Config\Services::validation(); ?>
        <div class="row mx-auto">
            <div class="col-xl">
                <img class="big-svg" src="<?= base_url('assets/assets/ppsc.svg');?>" alt="">
              </div>

            <div class="col-xl column-overflow d-flex justify-content-center register" ng-controller='userCtrl'>
              
            <form action="/Register/save" method="post">
                    <div id="emailHelp" class="form-text">
                        <h1 class="display-3 registration-header">REGISTER</h1>
                    </div>
                    <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" id="InputForEmail" value="<?= set_value('email') ?>">
                  
                    </div>

                    <?php if($validation->getError('email')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php }?>


                    <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Username" id="InputForName" value="<?= set_value('name') ?>">
                   
                  </div>
                  <?php if($validation->getError('name')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('name'); ?>
                    </div>
                <?php }?>  
                    <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="password" class="form-control password" id="InputForPassword">
                    <div class="input-group-append">
                    <span class="input-group-text password-span">
                    <i class="fa fa-eye-slash" aria-hidden="true" onclick="myFunction()"></i>
                      </span>
                    </div>
                    
                  </div>

                  <?php if($validation->getError('password')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('password'); ?>
                    </div>
                <?php }?>   
                

                    <div class="input-group mb-3">
                        
                        <input type="password" name="confpassword" placeholder="Confirm Password" class="form-control password" id="InputForConfPassword">
                        <div class="input-group-append">
                    <span class="input-group-text password-span">
                    <i class="fa fa-eye-slash" aria-hidden="true" onclick="myFunction2()"></i>
                      </span>
                    </div>
                      </div>

                      <?php if($validation->getError('password')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('password'); ?>
                    </div>
                <?php }?>   


                      <div class="mb-3 need-account">
                        ALREADY HAVE AN ACCOUNT?   <a href="/Home" class="link-primary signin-link"><b>SIGNIN</b></a>
                      </div>
                      
                    
                    <button type="submit" class="btn btn-primary registration-button">Register</button>
                  </form>
              
                  
           

                  


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

<script>
function myFunction2() {
  var x = document.getElementById("InputForConfPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>