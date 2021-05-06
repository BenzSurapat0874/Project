
<div class="modal fade" id="CModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h2 class=" text-center">Check Reward</h2>

</div>
     <div class="modal-body">





      
      <div class="container">
                             <div class="text-center">
                             <h4><b class="icon-user-circle"></b> <?php echo $_SESSION['user_id'];?></h4>
                            <h2 > <span class="display-5 icon-money"> <?php echo $_SESSION['Money'];?><small> Baht </small> </span> &nbsp&nbsp&nbsp  
                            <span class="display-5 icon-gift"> <?php echo $_SESSION['reward'];?><small> Point </small> </span>   </h2>
                           
                            </div>
                           
                            </div>
                         
   


                </div>
                <div class="modal-footer justify-content-center" >
        <input type="submit" data-dismiss="modal" class="btn btn-danger" name="edit" value="Close" >
      </div> 
            </div>
        </div>
    </div>
</div>