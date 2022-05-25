<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/pagination.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/table.css');?>">
    <title>Students</title>
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
        font-size: 100%;
        border-radius: 100%;
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

  .email-button{
    padding-top:1%;
    padding-bottom:1%;
    padding-right:3%;
    padding-left:3%;
    border-radius: 1%;
    width:42%;
  }

  .email-container{
    padding-bottom:1%
  }





  .toast-wrap {
	 position: absolute;
	 max-width: 340px;
	 top: 15px;
	 right: 15px;
}
 .toast {
	 position: relative;
	 display: block;
	 background: #eee;
	 padding: 15px 25px;
	 border-radius: 4px;
	 top: 15px;
	 right: 15px;
	 color: #77788c;
	 font-family: arial;
	 font-size: 0.8em;
	 font-weight: bold;
	 max-width: 300px;
	 box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.14);
	 transition: 0.5s ease all;
	 z-index: 9999;
	 margin-bottom: 10px;
	 background: #f7f7f7;
	 opacity: 0;
	 margin-right: -20px;
}
 .toast p {
	 margin: 0;
}
 .toast.alert {
	 color: #fff;
	 background: #e84c3d;
}
 .toast.warning {
	 color: #fff;
	 background: #f2c40f;
}
 .toast.success {
	 color: #fff;
	 background: #2ecd71;
}
 .toast.active {
	 margin-right: 0;
	 opacity: 1;
}
 .toast-close {
	 position: absolute;
	 top: 5px;
	 right: 5px;
	 width: 18px;
	 height: 10px;
	 overflow: hidden;
	 color: transparent;
	 text-indent: 100%;
	 cursor: pointer;
}
 .toast-close:before, .toast-close:after {
	 content: '';
	 position: absolute;
	 top: 5px;
	 width: 10px;
	 height: 2px;
	 background-color: rgba(0, 0, 0, 0.15);
}
 .toast-close:before {
	 transform: rotate(45deg);
	 left: 4px;
}
 .toast-close:after {
	 transform: rotate(-45deg);
	 right: 4px;
}
 

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #f27457 !important;
    border: none;
    color:#a23d3d;
    font-weight: 600;
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

 
 
    <div class="col-sm">
  <p class="display-3 list-header">Students</p>
    </div>
    <div class="col-sm">
       <form action="/Home/sendemail" method="POST">
    <button type="submit" class="btn btn-primary rounded-pill float-right">Email All Student Passwords</button>
  </form>
    </div>
    <table>
     <thead>
        <tr>
          <th><label>#</label></th>
          <th><label>SCHOOL ID</label></th>
          <th><label>FIRST NAME</label></th>
          <th><label>LAST NAME</label></th>
          <th><label>EMAIL</label></th>
          <th><label>CLASS</label></th>
          <th><label>PASSWORD</label></th>
          <th><label>ACTION</label></th>
        </tr>
      </thead>
      <tbody>
      <?php $x = 1;?>
  <?php foreach($student as  $item) : ?>
        <tr>
      <td data-label="ID"><?php echo $x++;?> </td>
          <td data-label="School Id"><?= $item['schoolid']?></td>
          <td data-label="First Name"><?= $item['first_name']?></td>
          <td data-label="Last Name"><?= $item['last_name']?></td>
          <td data-label="Email"><?= $item['email']?></td>
          <td data-label="Class"><?= $item['course']?></td>
          <td data-label="Password"><?= $item['password']?></td>
          <td data-label="Action">
          
          <a class="btn btn-light btn-outline-info"  href="<?php echo base_url('Home/singleemailstudent/'. $item['id']);?>">Send Password</a>
      <a class="btn btn-light btn-outline-success" href="<?php echo base_url('Student/editstudent/'. $item['id']);?>">Edit</a>
      <a class="btn btn-light btn-outline-danger" href="<?php echo base_url('Student/deletestudent/'. $item['id']);?>">Delete</a>
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
<script>
/**
 * It creates a toast notification with a close button, and it removes itself after a set amount of
 * time.
 */
$('#generate').click(function(e) {
    e.preventDefault();

    createToast({
        style: 'success',
        content: 'Password Sent to a Student'
    });

});

function createToast(options) {

    var settings = $.extend({
        style: null,
        content: '',
        delay: 3000
    }, options);

    if ($('.toast-wrap').length < 1) {
        $('body').append('<div class="toast-wrap"></div>');
    }

    var $wrapper = $('.toast-wrap');

    var $newToast = $('<div class="toast ' + settings.style + '"><span class="toast-close">Close</span><p>' + settings.content + '</p></div>').appendTo($wrapper);

    setTimeout(function() {
        $newToast.addClass('active');
    }, 100);

    $newToast.children('.toast-close').click(function() {
        var _this = $(this).parent();
        _this.removeClass('active');
        setTimeout(function() {
          _this.remove();
        }, 500);
    });

    $newToast.delay(settings.delay).queue(function() {
      var _this = $(this);
      _this.removeClass('active');
      setTimeout(function() {
        _this.remove();
      }, 500);
    });
}



</script>
</html>