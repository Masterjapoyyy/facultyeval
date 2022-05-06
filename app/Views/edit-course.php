<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?= $course['course']?>-<?= $course['year_level']?>-<?= $course['section']?> | subject</title>
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
</style>
<body>
    <div class="container-fluid">
    <?php $validation = \Config\Services::validation(); ?>
    <?= form_open_multipart('Course/updatecourse/'.$course['id']) ?>
                    <div id="emailHelp" class="form-text">
                        <h1 class="display-3 registration-header">Edit Class</h1>
                    </div>
                    
                    

                    <div class="mb-3">
                    <input type="text" name="course" class="form-control" placeholder="Course" id="InputForName" value="<?= $course['course']?>">
                  </div>
                  <?php if($validation->getError('course')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('course'); ?>
                    </div>
                <?php }?>  
                    
                
                    
                    <div class="mb-3">
                    <input type="number" name="year_level" class="form-control" placeholder="Year Level" id="InputForEmail" value="<?= $course['year_level']?>">
                  
                    </div>

                    <?php if($validation->getError('year_level')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('year_level'); ?>
                    </div>
                <?php }?>





                    <div class="mb-3">
                    <input type="text" name="section" class="form-control" placeholder="Section" id="InputForName"  value="<?= $course['section']?>">
                  </div>
                  <?php if($validation->getError('section')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('section'); ?>
                    </div>
                <?php }?>  


                    
                    <button type="submit" class="btn btn-primary registration-button">Edit Class</button>
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