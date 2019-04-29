<?php
// DB credentials.
$host = "localhost";
$username = "root";
$password = "";
$database = "schoolman";

// $host = "localhost";
// $username = "beginnersbasicsc_mgt";
// $password = "ilovedaniel";
// $database = "beginnersbasicsc_mgt";
// Establish database connection.

// Establish database connection.
$db = new mysqli($host, $username, $password, $database);
$connect_error = $db->connect_error;
if ($connect_error != null) {
	echo "database connection error ".$connect_error;
	exit;
}
?>

<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="profile.php"><img src="../images/1a.jpg" class="img-circle" width="60"></a></p>
                   <?php
                      $email = $_SESSION['login'];
                      $query= $db->prepare("SELECT name from teachers where emailid = ?");
                      $query->bind_param('s',$email);
                      $query->execute();
                      $query->bind_result($staffName);
                      $query->fetch();
                      $query->close();

                  ?>
              	  <h5 class="centered"><?php echo htmlentities($staffName); ?></h5>

                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php">Profile</a></li>
                          <li><a  href="change-password.php">Change Password</a></li>

                      </ul>
                  </li>
                  
                  <li class="sub-menu">-
                     <a href="javascript:;" >
                         <i class="fa fa-book"></i>
                         <span>Students</span>
                     </a>
                     <ul class="sub">
                          <!-- <li><a  href="select-primary-class.php">Primary School</a></li> -->
                         <li><a href="addnew_student.php">Add Students</a></li>
                         <li><a href="managenew-students.php">View Students</a></li>
                          <!-- <li><a  href="select-subject-mock.php">Junior & Senior Mock</a></li> -->
                     </ul>
                   </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Enter Scores</span>
                      </a>
                      <ul class="sub">
                          <!--<li><a  href="select-primary-class.php">Primary School</a></li>-->
                          <li><a  href="select-class.php">Enter School Results</a></li>
                          <!--<li><a  href="select-subject-mock.php">Junior & Senior Mock</a></li>-->
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>View Results</span>
                      </a>
                      <ul class="sub">
                          <!--<li><a  href="select-primary-class2.php">Primary School</a></li>-->
                          <li><a  href="select-class2.php">View School Results</a></li>
                          <!--<li><a  href="select-class-mock.php">Junior & Senior Mock</a></li>-->
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Behaviourial Ratings</span>
                      </a>
                      <ul class="sub">
                          <!--<li><a  href="select-primary-class3.php">Primary School</a></li>-->
                          <li><a  href="select-class3.php">Rate Students</a></li>
                      </ul>
                  </li>

                  <!--<li class="sub-menu">-->
                  <!--    <a href="javascript:;" >-->
                  <!--        <i class="fa fa-tasks"></i>-->
                  <!--        <span>Class Promotion</span>-->
                  <!--    </a>-->
                  <!--    <ul class="sub">-->
                  <!--        <li><a  href="promotion-select2.php">Primary School</a></li>-->
                  <!--        <li><a  href="promotion-select1.php">Secondary School</a></li>-->
                  <!--    </ul>-->
                  <!--</li>-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
