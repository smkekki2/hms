<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('public/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rocker</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Default</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Alternate</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Graphical</a>
                </li>
            </ul>
        </li>

        {{-- <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li> --}}
        
      
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-user-plus"></i>
                </div>
                <div class="menu-title"> Patients</div>
            </a>
            <ul>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Registration</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Nurse station</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Outpatient (OPD)</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Inpatient (IPD)</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Appointments</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Laboratory</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Radiology</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Pharmacy</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-dollar-circle fs-5"></i>
                </div>
                <div class="menu-title">Billing</div>
            </a>
            <ul>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Exemptions</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Bills and sales</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Sale returns</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Manage claims</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Submit claims</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Patients exit</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Wallets</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-cart-alt"></i>
                </div>
                <div class="menu-title">Inventory</div>
            </a>
            <ul>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Manage items</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Internal orders</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Adjustments</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Find items</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Bulk items</a>
                </li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-money"></i>
                </div>
                <div class="menu-title">Finance</div>
            </a>
            <ul>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Budget</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Debtors</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Creditors</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Payments</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Reconciliation</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-volume-high"></i>
                </div>
                <div class="menu-title">Procurement</div>
            </a>
            <ul>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Suppliers</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Purchase requests</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Purchase orders</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Goods received </a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Purchases</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-group"></i>
                </div>
                <div class="menu-title">H-Resource</div>
            </a>
            <ul>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Staff management </a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Announcements</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>SMS</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-layer"></i>
                </div>
                <div class="menu-title">Reports</div>
            </a>
            <ul>
                {{-- <li> <a href="index.html"><i class='bx bx-radio-circle'></i>Dashboard</a>
                </li> --}}
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Financial reports</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Inventory reports</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Clinical reports</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Staff reports</a>
                </li>
                <li> <a href="#"><i class='bx bx-radio-circle'></i>Data export</a>
                </li>
            </ul>
        </li>
        
        
        {{-- <li class="menu-label">Pages</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-lock"></i>
                </div>
                <div class="menu-title">Authentication</div>
            </a>
            <ul>
                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Basic</a>
                    <ul>
                        <li><a href="auth-basic-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
                        <li><a href="auth-basic-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
                        <li><a href="auth-basic-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
                        <li><a href="auth-basic-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Cover</a>
                    <ul>
                        <li><a href="auth-cover-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
                        <li><a href="auth-cover-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
                        <li><a href="auth-cover-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
                        <li><a href="auth-cover-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>With Header Footer</a>
                    <ul>
                        <li><a href="auth-header-footer-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
                        <li><a href="auth-header-footer-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
                        <li><a href="auth-header-footer-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
                        <li><a href="auth-header-footer-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="user-profile.html">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">User Profile</div>
            </a>
        </li> --}}
        
        
        
       
        
        
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->