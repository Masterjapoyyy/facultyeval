<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?= $faculty['last_name']?>,<?= $faculty['first_name']?> | Faculty</title>
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

  .label{
    font-size: 1.5em;
    font-weight: 500;
    padding-left:2em;
  }

  .password{
    font-size: 1.3em;
    font-weight: 400;
    padding-left:20%;
  }

  .password-container{
    padding-bottom: 10%;
  }

  .disabled{
  pointer-events: none;
}
</style>
<body>
    <div class="container-fluid">
    <?php $validation = \Config\Services::validation(); ?>
      <?= form_open_multipart('Faculty/updatefaculty/'.$faculty['id']) ?>
                    <div id="emailHelp" class="form-text">
                        <h1 class="display-3 registration-header">Edit Faculty</h1>
                    </div>
                    
                    

                    <div class="mb-3">
                    <input type="text" name="schoolid" class="form-control" placeholder="School Id" id="InputForName" value="<?= $faculty['schoolid']?>">
                  </div>
                  <?php if($validation->getError('schoolid')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('schoolid'); ?>
                    </div>
                <?php }?>  
                    
                    
                    
                    <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" id="InputForEmail" value="<?= $faculty['email']?>">
                  
                    </div>

                    <?php if($validation->getError('email')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php }?>





                    <div class="mb-3">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" id="InputForName" value="<?= $faculty['first_name']?>">
                  </div>
                  <?php if($validation->getError('first_name')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('first_name'); ?>
                    </div>
                <?php }?>  




                <div class="mb-3">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" id="InputForName" value="<?= $faculty['last_name']?>">
                  </div>
                  <?php if($validation->getError('last_name')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('last_name'); ?>
                    </div>
                <?php }?>  
                 



                <div class="password-container">
                <div class="row">
                <label class="label disabled" for="password">Auto Generated Password</label>
                </div>
                
                <div class="row">
                <label class="password disabled" for="password"><?= $faculty['clear_text']?></label>
                </div>
                </div>
                 
                

        <button type="submit" class="btn btn-primary registration-button">Edit Faculty Member</button>
                  </form>

                 
                    
                   


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