<!-- ##### SIDEBAR LOGO ##### -->
   <div class="kt-sideleft-header">
     <div class="kt-logo"><a href="#">SixInSix</a></div>
     <div id="ktDate" class="kt-date-today"></div>
     <div class="input-group kt-input-search">
       <input type="text" class="form-control" placeholder="Search...">
       <span class="input-group-btn mg-0">
         <button class="btn"><i class="fa fa-search"></i></button>
       </span>
     </div><!-- input-group -->
   </div><!-- kt-sideleft-header -->

   <!-- ##### SIDEBAR MENU ##### -->
   <div class="kt-sideleft">
     <label class="kt-sidebar-label">Navigation</label>
     <ul class="nav kt-sideleft-menu">

       <!-- nav-item-->
       <li class="nav-item">
         <a href="../platform" class="nav-link {{ (\Request::route()->getName() == 'platform.pages.dashboard') ? 'active' : '' }}">
           <i class="icon ion-home"></i>
           <span>Dashboard</span>
         </a>
       </li>


       <!-- nav-item -->
       <li class="nav-item">
         <a href="#" class="nav-link with-sub">
           <i class="icon ion-person"></i>
           <span>User Profile</span>
         </a>
         <ul class="nav-sub">
                      <li class="nav-item"><a href="form-elements.html" class="nav-link">View</a></li>
                      <li class="nav-item"><a href="../platform/user_profile/edit" class="nav-link">Edit</a></li>
         </ul>
      </li>

      <!-- nav-item -->
      <li class="nav-item">
        <a href="#" class="nav-link with-sub">
          <i class="icon ion-card"></i>
          <span>Billing</span>
        </a>
        <ul class="nav-sub">
                     <li class="nav-item"><a href="form-elements.html" class="nav-link">Invoices</a></li>
          <li class="nav-item"><a href="../platform/user_profile/edit" class="nav-link">Payment Method</a></li>
        </ul>
     </li>


     <!-- nav-item-->
     <li class="nav-item">
       <a href="../platform/bugreport" class="nav-link {{ (\Request::route()->getName() == 'platform.pages.bugreport') ? 'active' : '' }}">
         <i class="icon ion-bug"></i>
         <span>Bug Report</span>
       </a>
     </li>


     </ul>
   </div><!-- kt-sideleft -->
