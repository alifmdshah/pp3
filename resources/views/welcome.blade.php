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
          </tr>
           <tr>
             <td class="avatar" rowspan="7"> 
                    <div class="form-group">
                      <label for="exampleInputFile"></label>
                      <input type="file" id="exampleInputFile">

                     
                    </div>
            </td>
             <td> 
                    <div class="form-group">
                              <label for="#"></label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div> 
            </td>

             <td>
                    <div class="form-group">
                          <label for="#"></label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                     </div>
             </td>
             <td>
                   <div class="form-group">
                        <label for="#"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                   </div>
              </td>
          </tr>
           
         

            
           
         </thead>
         <form>
         <tbody>
          <tr class="ok">
         
           <tr >
            <th class="text-center">Price</th>
            <th class="text-center">Tax</th>
            <th class="text-center">Label</th>
            <th class="text-center">Bar Code Num</th>
          </tr>
         <tr>
             <th>
                <div class="form-group">
                              <label for="#"></label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Price">
                  </div> 
             </th>
             <th>
                 <div class="form-group">
                              <label for="#"></label>
                              <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Tax">
                  </div> 
             </th>
             <th>
                   <div class="form-group">
                              <label for="#"></label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Label">
                  </div> 
             </th>
             <th>
                   <div class="form-group">
                              <label for="#"></label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Category">
                  </div> 

             </th>
          </tr>
          
         
          </tbody>
          </form>
        </table>
      </div><!-- END id="list" -->
        
      
       
     </div><!-- END tab-content --> 
    </div>
   
   <div class="panel-footer text-center">
        <div class="col col-4 box-footer " >
                <button type="submit" class="btn btn-primary">Submit</button>
          </div>
   </div>
  </div><!--END panel-table-->
</div>
</div>
</div>