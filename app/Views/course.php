<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/pagination.css');?>">
    <title>Classes</title>
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
        width: 78%;
    }

    .disabled{
  pointer-events: none;
}
.table-borderless > tbody > tr > td,
.table-borderless > tbody > tr > th,
.table-borderless > tfoot > tr > td,
.table-borderless > tfoot > tr > th,
.table-borderless > thead > tr > td,
.table-borderless > thead > tr > th {
    border: none;
}

.header{
    font-size: 1.2em;
}

.body{
    font-size: 1.1em;
}

tbody:before {
    content:"@";
    display:block;
    line-height:3em;
    text-indent:-99999px;
}

.pagination{
    position: relative;
    margin-left: 16vw;
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

    .modal-button{
      padding: 5px;
      padding-left: 1vw;
      padding-right: 1vw;
      border-radius: 100px;
    }

</style>
<body>
  
    <div class="container-fluid">
      

   
<div class="w-100 row">
    <button type="button" class="btn btn-primary registration-button modal-button" data-toggle="modal" data-target="#exampleModalCenter">
  Add Class
</button>

  <div class="w-100"></div>
  <div class="w-100 row">
  <table class="table table-borderless">
  <thead>
    <tr>
      <th class="disabled header" scope="col">#</th>
      <th class="disabled header" scope="col">CLASS</th>
      <th class="disabled header" scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $x = 1;?>
  <?php foreach($course as  $item) : ?>
    <tr>
      <th class="disabled body" scope="row"><?php echo $x++;?> </th>
      <td class="disabled body"><b><?= $item['course']?>-<?= $item['year_level']?>-<?= $item['section']?></b></td>
      <td>
      
      <a class="btn btn-light btn-outline-success" href="<?php echo base_url('Course/editcourse/'. $item['id']);?>">edit</a>
      <a class="btn btn-light btn-outline-danger" href="<?php echo base_url('Course/deletecourse/'. $item['id']);?>">delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  <div class="w-100"></div>
  <div class="row ">
  <div class="d-flex justify-content-center flex-nowrap pagination fixed-bottom">
          <?= $pager->links() ?>
        </div>
</div>









<!-- add year_level modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php $validation = \Config\Services::validation(); ?>
    <form action="/Course/save" method="post">
                    <div id="emailHelp" class="form-text">
                        <h1 class="display-3 registration-header">Add Class</h1>
                    </div>
                    
                    

                    <div class="mb-3">
                    <input type="text" name="course" class="form-control" placeholder="Course" id="InputForName" value="BSIT">
                  </div>
                  <?php if($validation->getError('course')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('course'); ?>
                    </div>
                <?php }?>  
                    
                    
                    
                    <div class="mb-3">
                    <input type="number" name="year_level" class="form-control" placeholder="Year Level" id="InputForEmail" value="2">
                  
                    </div>

                    <?php if($validation->getError('year_level')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('year_level'); ?>
                    </div>
                <?php }?>





                    <div class="mb-3">
                    <input type="text" name="section" class="form-control" placeholder="Section" id="InputForName"  value="A">
                  </div>
                  <?php if($validation->getError('section')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('section'); ?>
                    </div>
                <?php }?>  


                    
                    <button type="submit" class="btn btn-primary registration-button">Add year_level</button>
                  </form>
      </div>
      <div class="modal-footer border-0">
       
      </div>
    </div>
  </div>
</div>








    </div>
</body>
</html>