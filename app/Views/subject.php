<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/pagination.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/table.css');?>">
    <title>Subjects</title>
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
        padding-top: 1%;
        width: 100%;
        background-color: #081b8599;
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
    @media screen and (max-width: 1000px) {

html{
      overflow-y: scroll;
  }
  
  .container-fluid{
        margin-bottom: 3%;
    }
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #f27457 !important;
    border: none;
    color:#a23d3d;
    font-weight: 600;
}
</style>
<body>
  
    <div class="container-fluid">
      

   
<div class="w-100 row">

 
 
<div class="col-sm">
<p class="display-3 list-header">Subjects</p>
</div>
<div class="col-sm">

<button type="button" class="btn btn-primary rounded-pill float-right" data-toggle="modal" data-target="#exampleModalCenter">
  Add Subject
</button>
</div>
<table>
 <thead>
    <tr>
      <th><label>#</label></th>
      <th><label>Subject Code</label></th>
      <th><label>Subject</label></th>
      <th><label>Description</label></th>
      <th><label>ACTION</label></th>
    </tr>
  </thead>
  <tbody>
  <?php $x = 1;?>
<?php foreach($subject as  $item) : ?>
    <tr>
  <td data-label="ID"><?php echo $x++;?> </td>
      <td data-label="AcademiC Year"><?= $item['subject_code']?></td>
      <td data-label="Semester"><?= $item['subject']?></td>
      <td data-label="Semester"><?= $item['description']?></td>
      <td data-label="Action">
      
      <a class="btn btn-light btn-outline-success" href="<?php echo base_url('Subject/editsubject/'. $item['id']);?>">edit</a>
      <a class="btn btn-light btn-outline-danger" href="<?php echo base_url('Subject/deletesubject/'. $item['id']);?>">delete</a>
    </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<div class="w-100"></div>
<div class="row ">

</div>
<div  class="d-flex justify-content-center fixed-bottom">
      <?= $pager->links() ?>
    </div>
</div>










<!-- add subject modal -->
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
    <form action="/Subject/save" method="post">
                    <div id="emailHelp" class="form-text">
                        <h1 class="display-3 registration-header">Add Subject</h1>
                    </div>
                    
                    

                    <div class="mb-3">
                    <input type="text" name="subject_code" class="form-control" placeholder="Subject Code" id="InputForName" value="Psych101">
                  </div>
                  <?php if($validation->getError('subject_code')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('subject_code'); ?>
                    </div>
                <?php }?>  
                    
                    
                    
                    <div class="mb-3">
                    <input type="text" name="subject" class="form-control" placeholder="Email" id="InputForEmail" value="Data Structures">
                  
                    </div>

                    <?php if($validation->getError('subject')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('subject'); ?>
                    </div>
                <?php }?>





                    <div class="mb-3">
                    <input type="text" name="description" class="form-control" placeholder="Description" id="InputForName" >
                  </div>
                  <?php if($validation->getError('description')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('description'); ?>
                    </div>
                <?php }?>  


                    
                    <button type="submit" class="btn btn-primary registration-button">Add Subject</button>
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




