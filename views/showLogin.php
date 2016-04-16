<?php

function showLogin() {
 ?>
 <div class="container">
   <div class="row">
     <div class="col-md-6">
      <img src="https://c1.staticflickr.com/7/6101/6306512682_28c5b42b8f_z.jpg" />
     </div>
     <div class="col-md-4">
       <h1>Login Using:</h1>
       <button class="btn btn-default" data-toggle="modal" data-target="#ssoModal"><i class="fa fa-envelope"></i> SSO (Single Sign On) Link</button>
     </div>
     <div class="col-md-2">
     </div>
   </div>
  </div>
 <div id="ssoModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title"><i class="fa fa-envelope"></i> SSO (Single Sign On) Link</h4>
       </div>
       <div class="modal-body">
         <p>Please input your email address here.</p>
         <form action="./ssoLogin" method="post">
           <div class="form-group">
             <label for="email">Email address:</label>
             <input type="email" name="email" class="form-control" id="email">
           </div>
           <input type="submit" value="Login" class="btn btn-success">
         </form>
       </div>
     </div>
   </div>
 </div>
 <?php } ?>
