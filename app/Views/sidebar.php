<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebars.css');?>">
</head>
<style>

</style>
<body>
  <div class="sidenav-container" id="side-nav">
    <nav class="nav">
      <div class="nav__brand">
        <div class="nav__icon nav__icon--menu" id="nav-toggle">
          <ion-icon name="menu-outline" class="nav_menu_icon"></ion-icon>
        </div>
        
        
        <img class="big-svg" src="<?= base_url('assets/assets/ppsc.svg');?>" width="50" height="50"  alt="LOGO">
        
      </div>
     
      <hr>


      <?php if (session()->get('role') =='superadmin' ):?>
      <li class="nav__item">
          <a href="#" class="nav__link sidebar-link">
            <ion-icon name="person-outline" class="nav__icon"></ion-icon>
            <span class="nav__name">Admins</span>
            <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
          </a>

          <ul class="nav__drop">
            <div class="padding">
              <li>
              <a href="<?= base_url('Home/addadmin');?>" class="link-dark rounded links">Add Admin</a>
              </li>
              <li>
              <a href="<?= base_url('Home/admin');?>" class="link-dark rounded links">Admin List</a>
              </li>
            </div>
          </ul>
        </li>


        <li class="nav__item">
          <a href="#" class="nav__link">
            <ion-icon name="school-outline" class="nav__icon"></ion-icon>
            <span class="nav__name">Faculty<br>Members</span>
            <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
          </a>

          <ul class="nav__drop">
            <div class="padding">
              <li>
              <a href="<?= base_url('Home/addfaculty');?>" class="link-dark rounded links">Add Faculty</a>
              </li>
              <li>
              <a href="<?= base_url('Home/faculty');?>" class="link-dark rounded links">Faculty List</a>
              </li>
            </div>
          </ul>
        </li>





        <li class="nav__item">
          <a href="#" class="nav__link">
            <ion-icon name="book-outline" class="nav__icon"></ion-icon>
            <span class="nav__name">Students</span>
            <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
          </a>

          <ul class="nav__drop">
            <div class="padding">
            <li><a href="<?= base_url('Home/addstudent');?>" class="link-dark rounded links">Add Student</a></li>
          <li><a href="<?= base_url('Home/student');?>" class="link-dark rounded links">Student List</a></li>
            </div>
          </ul>
        </li>

        

        <li class="nav__item">
          <a href="<?= base_url('Home/academicyear');?>" class="nav__link">
            <ion-icon name="calendar-outline" class="nav__icon"></ion-icon>
            <span class="nav__name"> Academic Year</span>
          </a>
        </li>

        <li class="nav__item">
          <a href="<?= base_url('Home/subject');?>" class="nav__link">
            <ion-icon name="create-outline" class="nav__icon"></ion-icon>
            <span class="nav__name"> Subject</span>
          </a>
        </li>


        <li class="nav__item">
          <a href="<?= base_url('Home/course');?>" class="nav__link">
            <ion-icon name="clipboard-outline" class="nav__icon"></ion-icon>
            <span class="nav__name">Classes</span>
          </a>
        </li>



        <li class="nav__item">
          <a href="<?= base_url('Home/questions');?>" class="nav__link nav">
            <ion-icon name="help-outline" class="nav__icon"></ion-icon>
            <span class="nav__name">Questtionaire</span>
          </a>
        </li>


      </ul>

      <hr>
     
      
      <?php else:?>

        <li class="nav__item">
          <a href="#" class="nav__link">
            <ion-icon name="school-outline" class="nav__icon"></ion-icon>
            <span class="nav__name">Faculty<br>Members</span>
            <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
          </a>

          <ul class="nav__drop">
            <div class="padding">
              <li>
              <a href="<?= base_url('Home/addfaculty');?>" class="link-dark rounded links">Add Faculty</a>
              </li>
              <li>
              <a href="<?= base_url('Home/faculty');?>" class="link-dark rounded links">Faculty List</a>
              </li>
            </div>
          </ul>
        </li>





        <li class="nav__item">
          <a href="#" class="nav__link">
            <ion-icon name="book-outline" class="nav__icon"></ion-icon>
            <span class="nav__name">Students</span>
            <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
          </a>

          <ul class="nav__drop">
            <div class="padding">
            <li><a href="<?= base_url('Home/addstudent');?>" class="link-dark rounded links">Add Student</a></li>
          <li><a href="<?= base_url('Home/student');?>" class="link-dark rounded links">Student List</a></li>
            </div>
          </ul>
        </li>

        

        <li class="nav__item">
          <a href="<?= base_url('Home/academicyear');?>" class="nav__link">
            <ion-icon name="calendar-outline" class="nav__icon"></ion-icon>
            <span class="nav__name"> Academic Year</span>
          </a>
        </li>

        <li class="nav__item">
          <a href="<?= base_url('Home/subject');?>" class="nav__link">
            <ion-icon name="create-outline" class="nav__icon"></ion-icon>
            <span class="nav__name"> Subject</span>
          </a>
        </li>


        <li class="nav__item">
          <a href="<?= base_url('Home/course');?>" class="nav__link">
            <ion-icon name="clipboard-outline" class="nav__icon"></ion-icon>
            <span class="nav__name">Classes</span>
          </a>
        </li>



        <li class="nav__item">
          <a href="<?= base_url('Home/questions');?>" class="nav__link nav">
            <ion-icon name="help-outline" class="nav__icon"></ion-icon>
            <span class="nav__name">Questtionaire</span>
          </a>
        </li>


      </ul>

      <hr>
      <?php endif; ?>
    


      <div class="nav__user">
        <div class="nav__user-image">
        <?php
        $user_img = !empty(session("uploaded_flleinfo")) ? session("uploaded_flleinfo") : 'default.svg';
        ?>
          <img  onclick="location.href='<?= base_url('Home/profile');?>';" src="<?php echo base_url().'/uploads/profile/'.$user_img; ?>" alt="profile">
        </div>

        <div class="nav__user-info">
          <div class="nav__user-info-name" onclick="location.href='<?= base_url('Home/profile');?>';"><?= session("first_name")?></div>
          <div class="nav__user-info-email" onclick="location.href='<?= base_url('Home/profile');?>';"><?= session("email")?></div>
          
        </div>
        <ion-icon name="log-out-outline" onclick="location.href='<?= base_url('Login/logout');?>';" class="nav__icon float-right"></ion-icon>
      </div>
    </nav>
  </div>
  
  <!-- ===== IONICONS ===== -->
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <!-- ===== MAIN JS ===== -->
  <script src="main.js"></script>
</body>
<script>
  // -------- toggle sub menus --------
const navLinks = document.querySelectorAll(".nav__link");

navLinks.forEach((link) => link.addEventListener("click", drop));

function drop() {
  const subMenu = this.nextElementSibling;
  if (subMenu) {
    // if sub menu exists
    if (subMenu.style.height == "0px" || subMenu.style.height == "") {
      subMenu.style.height = subMenu.scrollHeight + "px";
      // open side nav
      sideNav.style.width = "14rem";
    } else {
      subMenu.style.height = "0px";
    }
  }
}

// --------- Toggle Side Nav --------
const menuBtn = document.querySelector("#nav-toggle");
const sideNav = document.querySelector("#side-nav");

menuBtn.addEventListener("click", toggleSideNav);

function toggleSideNav() {
  if (sideNav.style.width == "5.6rem" || sideNav.style.width == "") {
    sideNav.style.width = "18rem";
  } else {
    // close side nav
    sideNav.style.width = "5.6rem";
    // close all opened sub menus
    document.querySelectorAll('.nav__drop').forEach(drop => drop.style.height = '0px');
    
  }
}

</script>
</html>