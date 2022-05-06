<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebars.css');?>">
</head>

<style>

*{
    font-family: 'Montserrat', sans-serif;
}

main{
  padding-top:10%;
  padding-left:10%;
}

.links{
    padding-top:%;
    font-weight: 500;
    font-size: 1.1em;
    color: #F27457;
}


.sidebar-text{
    font-weight: 400;
    font-size: 1.2em;
}

.link-container{
    padding-top: 5%;
    padding-bottom: 5%;
}


</style>
<body>
    

<div class="row">
    
    
    <div class="col-5 p-3 position-fixed sidebar-container" id="sticky-sidebar">
    <main>




<div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
  <div class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none disabled">
  <img class="big-svg" src="<?= base_url('assets/assets/ppsc.svg');?>" width="70" height="70"  alt="LOGO">
    <span class="fs-5 fw-semibold sidebar-text">Philippine Public Safety College</span>
</div>
  <ul class="list-unstyled ps-0">
    <li class="mb-1 link-container">
      <button class="btn btn-toggle align-items-center rounded collapsed sidebar-text" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
        Admins
      </button>
      <div class="collapse show" id="home-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="<?= base_url('Home/addadmin');?>" class="link-dark rounded links">Add Admin</a></li>
          <li><a href="<?= base_url('Home/admin');?>" class="link-dark rounded links">Admin List</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1 link-container">
      <button class="btn btn-toggle align-items-center rounded collapsed sidebar-text" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
        Faculty Members
      </button>
      <div class="collapse" id="dashboard-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="<?= base_url('Home/addfaculty');?>" class="link-dark rounded links">Add Faculty</a></li>
          <li><a href="<?= base_url('Home/faculty');?>" class="link-dark rounded links">Faculty List</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1 link-container">
      <button class="btn btn-toggle align-items-center rounded collapsed sidebar-text" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
        Students
      </button>
      <div class="collapse" id="orders-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="<?= base_url('Home/addstudent');?>" class="link-dark rounded links">Add Student</a></li>
          <li><a href="<?= base_url('Home/student');?>" class="link-dark rounded links">Student List</a></li>
        </ul>
      </div>
    </li>

    <li class="mb-1 link-container">
    <a class="btn align-items-center rounded button sidebar-text" href="<?= base_url('Home/academicyear');?>">
        Academic Year
    </a>
    </li>

    <li class="mb-1 link-container">
    <a class="btn align-items-center rounded button sidebar-text" href="<?= base_url('Home/subject');?>">
        Subject
    </a>
    </li>
    <li class="mb-1 link-container">
    <a class="btn align-items-center rounded button sidebar-text" href="<?= base_url('Home/course');?>">
        Classes
    </a>
    </li>

    <li class="mb-1 link-container">
    <a class="btn align-items-center rounded button sidebar-text" href="<?= base_url('Home/questions');?>">
        Questtionaire
    </a>
    </li>

    <li class="my-3"></li>
    <li class="mb-1 link-container">

    
      <button class="btn btn-toggle align-items-center rounded collapsed sidebar-text" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
        Account
      </button>


      <div class="collapse" id="account-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
        <?php if (session()->get('logged_in')):?>
            <li><a href="<?= base_url('/home/profile');?>" class="links">Profile</a></li>
            <li><a href="<?= base_url('/login/logout');?>" class="links">Log out</a></li>
          <?php else:?>
            <li><a href="<?= base_url('/home');?>">Log in</a></li>
			<?php endif; ?>
        </ul>
      </div>
    </li>
    
  </ul>
</div>

       
</main>
        </div>
    </div>


<script src="<?= base_url('assets/js/bootstrap.bundle.min.js');?>"></script>

<script src="<?= base_url('assets/js/sidebars.js');?>"></script>
</body>
</html>