 <!-- -----------導覽列------------ -->
 <div class="nav_burgurBar">
     <div class="nav_burgurBar_img">
         <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20">
             <g id="Group_135" data-name="Group 135" transform="translate(-341.5 -1313.5)">
                 <line id="Line_50" data-name="Line 50" x2="23" transform="translate(342.5 1314.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                 <line id="Line_51" data-name="Line 51" x2="23" transform="translate(342.5 1323.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                 <line id="Line_52" data-name="Line 52" x2="23" transform="translate(342.5 1332.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
             </g>
         </svg>
     </div>

     <div class="nav_logo_mobile">
         <img src="./img/nav_logo_mobile.svg" alt="">
     </div>

 </div>

 <div class="nav_overlayNav">
     <div class="nav_closeBtn mb-4">
         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20">
             <title>close</title>
             <path fill='#fff' d="M10 8.586l-7.071-7.071-1.414 1.414 7.071 7.071-7.071 7.071 1.414 1.414 7.071-7.071 7.071 7.071 1.414-1.414-7.071-7.071 7.071-7.071-1.414-1.414-7.071 7.071z">
             </path>
         </svg>
     </div>
     <div class="nav_overlayNavBox">
         <ul>
             <a href="">
                 <li>最新消息</li>
             </a>
             <a href="">
                 <li>探索灣廟</li>
             </a>
             <a href="">
                 <li>線上服務</li>
             </a>
             <a href="">
                 <li>聖地巡禮</li>
             </a>
             <a href="">
                 <li>祈福商店</li>
             </a>
             <a href="">
                 <li>購物車</li>
             </a>
             <a href="" data-toggle="modal" data-target="#loginCenter">
                 <li>登入 | 註冊</li>
             </a>
         </ul>
     </div>
 </div>

 <!-- 電腦螢幕大小的navbar -->
 <nav class="nav_navbar_com">
     <div class="nav_navbar_com_container">
         <!-- 請依檔案位置修改logo路徑 -->
         <img src='./img/nav_logo.svg'>

         <div class="nav_navbar">
             <div class="nav_navbarBox">
                 <ul class="nav_nav_left">
                     <a href="">
                         <li class="nav_news"></li>
                     </a>
                     <a href="">
                         <li class="nav_explore"></li>
                     </a>
                     <a href="">
                         <li class="nav_serv"></li>
                     </a>
                     <a href="">
                         <li class="nav_trip"></li>
                     </a>
                     <a href="">
                         <li class="nav_shop"></li>
                     </a>
                     <a href="">
                         <li class="nav_cart"></li>
                     </a>
                 </ul>
                 <ul class="nav_nav_right">
                     <a href="" data-toggle="modal" data-target="#loginCenter">
                         <li>登入</li>
                     </a>
                     <span>|</span>
                     <a href="" data-toggle="modal" data-target="#registerCenter">
                         <li>註冊</li>
                     </a>
                 </ul>
             </div>
         </div>

     </div>

     <hr class="nav_navline">
 </nav>

 <!-- login -->
 <div class="modal fade" id="loginCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content modal-content-re">
             <div class="modal-header modal-header-re">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
                 <h5 class="modal-title" id="exampleModalCenterTitle">登入 | LOGIN</h5>
             </div>
             <div class="modal-body">
                 <form class="mt-3">
                     <div class="form-group mb-3">
                         <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                     </div>
                     <div class="form-group">
                         <input class="form-control form-control-re" id="password-text" placeholder="Password">
                     </div>
                     <input type="checkbox"> 記住帳號
                 </form>
             </div>
             <div class="modal-footer modal-footer-re">
                 <button type="button" class="btn btn-primary btn-primary-re">登入</button>
             </div>
             <div class="modal-footer2-re mt-3">
                 <a class="mr-5" data-toggle="modal" data-target="#lostPassword" id="passwordbtn">忘記密碼</a>
                 <a data-toggle="modal" data-target="#registerCenter" id="registerbtn">註冊帳號</a>
             </div>
         </div>
     </div>
 </div>

 <!-- lost password -->
 <div class="modal fade" id="lostPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content modal-content-re">
             <div class="modal-header modal-header-re">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
                 <h5 class="modal-title" id="exampleModalCenterTitle">找回密碼</h5>
             </div>
             <div class="modal-body">
                 <form class="mt-3">
                     <div class="form-group mb-3">
                         <p>請輸入您註冊的電子郵件，您將會在電子郵件信箱中收到重設密碼的連結。</p>
                         <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                     </div>
                 </form>
             </div>
             <div class="modal-footer modal-footer-re">
                 <button type="button" class="btn btn-primary btn-primary-re">送出</button>
             </div>
         </div>
     </div>
 </div>

 <!-- register -->
 <div class="modal fade" id="registerCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content modal-content-re">
             <div class="modal-header modal-header-re">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
                 <h5 class="modal-title" id="exampleModalCenterTitle">註冊 | REGISTER</h5>
             </div>
             <div class="modal-body">
                 <form class="mt-3">
                     <div class="form-group mb-3">
                         <input type="text" class="form-control form-control-re" id="account-name" placeholder="User Name">
                     </div>
                     <div class="form-group mb-3">
                         <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                     </div>
                     <div class="form-group">
                         <input class="form-control form-control-re" id="password-text" placeholder="Password">
                     </div>
                     <div class="form-group">
                         <input class="form-control form-control-re" id="password-text" placeholder="Repeat Password">
                     </div>
                 </form>
             </div>
             <div class="modal-footer modal-footer-re">
                 <button type="button" class="btn btn-primary btn-primary-re">註冊</button>
             </div>
         </div>
     </div>
 </div>