<h1 class="sidebar px-2 dark-text fs-5 border-start border-5 border-info sm-1" id="sidebar">   
              E-classe
</h1>

<div class="list-group d-flex flex-column align-items-center w-100">                  
    <img src="images/profile.jpg" alt="profile picture"
        class=" profile w-75 rounded-circle mx-auto d-block my-2 p-1  ">
      <div class="user text-center ">
        <h6 > Admin name </h6>
        <span class=" fs-6 text-info fw-bold" >Admin</span>              
    </div>
    </a>
     <ul class=" p-0 d-flex flex-column align-items-center mt-5 mb-5 mx-auto sidebar-nav w-30 fw-bold justify-content-center align-items-center">

    <li class="  w-100" style="justify-content: space-between;">
            <a href="dashboard.php" class=" text-bold pl-4 text-dark  <?php if( basename($_SERVER['REQUEST_URI'])=="dashboard.php"){ echo "bg-info";}else{echo"bg-transparent";};?>">  
                <img src="images/ic-house.svg" alt="" class="card-image ">
                <span class="d-none d-md-inline">Home</span>           
            </a>
        </li>

        <li class=" w-100" style="justify-content: space-between;">
            <a href="#" class=" text-light pl-4 text-dark">  
                <img src="images/ic-course.svg" alt="" class="card-image ">
                <span class="d-none d-md-inline"> Course</span>
            </a>
        </li>

        <li class=" w-100 " style="justify-content: space-between;">
                <a href="students.php" class=" text-light pl-4 text-dark  <?php if( basename($_SERVER['REQUEST_URI'])=="students.php"){ echo "bg-info";}else{echo"bg-transparent";};?>"> 
                <img src="images/ic-students.svg" alt="" class="card-image" >
                <span class="d-none d-md-inline"> Students</span>
                </a>
        </li>

        <li class=" w-100" style="justify-content: space-between;">
            <a href="payement.php" class=" text-light pl-4 text-dark  <?php if( basename($_SERVER['REQUEST_URI'])=="payement.php"){ echo "bg-info";}else{echo"bg-transparent";};?>">  
                <img src="images/ic_payment.svg" alt="" class="card-image" >
                <span class="d-none d-md-inline"> Payment</span>
            </a>
        </li>

        <li class=" w-100 " style="justify-content: space-between;">
            <a href="#" class=" text-light pl-4 text-dark">
                <img src="images/ic-report.svg" class="card-image">
                <span class="d-none d-md-inline">  Report</span>
            </a>
        </li>

        <li class=" w-100  pl-5">
            <a href="#" class=" text-light pl-4 text-dark">
                
            <span class="d-none d-md-inline">  <img src="images/ic-settings.svg" class="card-image">Settings</span>
            </a>
        </li>
        <a href="#" class=" text-light pl-4 text-dark mt-5 fw-bolder text-decoration-none">
                Logout  <i class="fas fa-sign-out-alt  "></i>  </a>
    </ul>
    
</div>
           