<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/avatar.css">

<script src="css/avatar.js"></script>
<script src="js/button.js"></script>
<div class="container" style="margin-top:20px;">
<div class="row">
<div id="user" class="col-md-12" >
  <div class="panel panel-primary panel-table animated slideInDown">
   <div class="panel-heading " style="padding:5px;">
        <div class="row">
        <div class="col col-xs-3 text-left">
            <!-- code -->
        </div>
        <div class="col col-xs-5 text-center">
            <h1 class="panel-title">Add Stock</h1>
        </div>
        <!-- -->
        <div class="col col-xs-2 text-right ">
          <button type="button" class="btn  btn-success "> ADD NEW<i class="fa fa-plus-square" ></i></button>
        </div>
        </div>
    </div>
   <div class="panel-body">
     <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
       <table class="table table-striped table-bordered table-list">
        <thead>
         <tr>
            <th class="avatar">photo</th>
            <th>name</th>
            <th>Description</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Tax</th>
            <th>Label</th>
            <th>Bar Code Num</th>

            <th><em class="fa">*</em></th>
          </tr> 
         </thead>
         <tbody>
          <tr class="ok">
             <td class="avatar"><img src="https://pbs.twimg.com/profile_images/746779035720683521/AyHWtpGY_400x400.jpg"></td>
             <td>Djelal Eddine </td>
             <td>Algeria </td>
             <td>djelaleddine@gmail.com </td>
             <th>Qty</th>
             <th>Qty</th>
             <th>Label</th>
             <th>Bar Code Num</th>
             <td align="center">
               <a href="#" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>
               <a href="#" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"   ></i></a>
               <a href="#" class="btn btn-danger"  title="delete"><i class="fa fa-trash" ></i></a>
             </td>
          </tr>
          <tr class="ban">
             <td class="avatar"><img src="https://pbs.twimg.com/profile_images/3511252200/f97a40336742d17609e0b0ca17e301b8_400x400.jpeg"></td>
             <td>Moh Aymen </td>
             <td>Algeria </td>
             <td>email@gmail.com </td>
             <th>Qty</th>
             <th>Qty</th>
             <th>Label</th>
             <th>Bar Code Num</th>
             <td align="center">
               <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil">        </i></a>
               <a href="#" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"   >admitted</i></a>
               <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash" >        </i></a>
             </td>
          </tr>
          <tr class="new">
             <td class="avatar"><img src="https://pbs.twimg.com/profile_images/3023221270/fcb34337f850c1037af9840ebe510d36_400x400.jpeg"></td>
             <td>Dia ElHak  </td>
             <td>Tunisia </td>
             <td>email@gmail.com </td>
             <th>Qty</th>
             <th>Qty</th>
             <th>Label</th>
             <th>Bar Code Num</th>
             <td align="center">
               <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil"   >     </i></a>
               <a href="#" class="btn btn-success" title="validate"><i class="fa fa-check-square">validate</i></a>
               <a href="#" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"       >      </i></a>
               <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash"     >        </i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- END id="list" -->
        
      <div role="tabpanel" class="tab-pane " id="thumb">
        <div class="row">
        <div class="col-md-12">
        
        <div class="ok">
         <div class="col-md-3">
         <div class="panel panel-default panel-thumb">
            <div class="panel-heading">
                <h3 class="panel-title">Djelal Eddine</h3>
            </div>
            <div class="panel-body avatar-card">
             <img src="https://pbs.twimg.com/profile_images/746779035720683521/AyHWtpGY_400x400.jpg">
            </div>
            <div class="panel-footer">
               <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil"></i></a>
               <a href="#" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"   ></i></a>
               <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash" ></i></a>
            </div>
         </div>
         </div>
       </div>
        
        <div class="ban">
         <div class="col-md-3">
         <div class="panel panel-default panel-thumb">
            <div class="panel-heading">
                <h3 class="panel-title">Moh Aymen</h3>
            </div>
            <div class="panel-body avatar-card">
             <img src="https://pbs.twimg.com/profile_images/3511252200/f97a40336742d17609e0b0ca17e301b8_400x400.jpeg">
            </div>
            <div class="panel-footer">
               <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil">        </i></a>
               <a href="#" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"   >admitted</i></a>
               <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash" >        </i></a>
            </div>
         </div>
         </div>
       </div>
        
        <div class="new">
         <div class="col-md-3">
         <div class="panel panel-default panel-thumb">
            <div class="panel-heading">
                <h3 class="panel-title">Dia ElHak</h3>
            </div>
            <div class="panel-body avatar-card">
             <img src="https://pbs.twimg.com/profile_images/3023221270/fcb34337f850c1037af9840ebe510d36_400x400.jpeg">
            </div>
            <div class="panel-footer">
               <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil"   >     </i></a>
               <a href="#" class="btn btn-success" title="validate"><i class="fa fa-check-square">validate</i></a>
               <a href="#" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"       >      </i></a>
               <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash"     >        </i></a>
            </div>
         </div>
         </div>
       </div>
       
       </div>
      </div>
      </div><!-- END id="thumb" -->
       
     </div><!-- END tab-content --> 
    </div>
   
   <div class="panel-footer text-center">
        <ul class="pagination">
          <li ><a>«</a></li>
           <li class="active"><a href="#">1</a></li>
           <li ><a href="#">2</a></li>
           <li ><a href="#">3</a></li>
           <li ><a>»</a></li>
         </ul>
   </div>
  </div><!--END panel-table-->
</div>
</div>
</div>