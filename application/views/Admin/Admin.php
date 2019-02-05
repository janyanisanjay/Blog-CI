<?php 
include_once('Header.php');
?>
<html>
<head></head>
   <body>
    <div class="container" style="margin-top:120px;margin-left:375px">
        
        <h1>Admin Form</h1>
        <?php echo form_open('Admin/login '); ?>
        
        <?php if($error=$this->session->flashdata('Login_failed'))
                {?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                    </div>
                </div>    
                
        <?php } ?>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
                <label>Username</label>
                <?php echo form_input(['class' => 'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username') ]);?>
                
                <div class="text-danger">
                <?php echo form_error('username'); ?>
                </div> 
            </div>
            
          </div> 
        </div>  
        
        
        <div class="row">
           <div class="col-lg-6">
            <div class="form-group">
                <label>Password</label>

                <?php echo form_password(['class' => 'form-control','placeholder'=>'Enter Password','type'=>'password','name'=>'password','value'=>set_value('password')]); ?>
                <div class="text-danger"><?php echo form_error('password'); ?></div>
            </div> 
          </div>  
        </div>
        
        <div>
            <?php echo form_submit(['class' =>'btn btn-primary','type'=>'submit','value'=>'Submit']); ?>
            <?php echo form_reset(['class' =>'btn btn-primary','type'=>'reset','value'=>'Reset']); ?>
            
        </div>
        
    </div>
    </body>
</html>

