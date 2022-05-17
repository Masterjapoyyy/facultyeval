<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/pagination.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/table.css');?>">
    <title>Questtionaire</title>
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


  
  @media screen and (max-width: 1000px) {

html{
      overflow-y: scroll;
  }
  
  .container-fluid{
        margin-bottom: 3%;
    }
}

</style>
<body>
    <div class="container-fluid">
      


                       
                  

  <div class="w-100 row">


  <p class="display-3 list-header">Questions</p>

    <table>
     <thead>
        <tr>
          <th><label>#</label></th>
          <th><label>ACADEMIC YEAR</label></th>
          <th><label>SEMESTER</label></th>
          <th><label>ACTION</label></th>
        </tr>
      </thead>
      <tbody>
      <?php $x = 1;?>
  <?php foreach($academicyear as  $item) : ?>
        <tr>
      <td data-label="ID"><?php echo $x++;?> </td>
          <td data-label="Academic Year"><?= $item['year']?></td>
          <td data-label="Semester"><?= $item['semester']?></td>
          <td data-label="Action">
          <a class="btn btn-light btn-outline-info" href="<?php echo base_url('Question/managequestion/'. $item['id']);?>">Manage</a>
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
    
</body>
</html>


