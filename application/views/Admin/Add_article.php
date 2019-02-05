<?php 
include_once('Header.php');
?>
<html>
<head></head>
   <body>
    <div class="container" style="margin-top:100px;margin-left:375px">
        
        <h1>Add Article</h1>
        <?php echo form_open_multipart('Admin/article_form_validate'); ?>
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
               <?php echo form_hidden('user_id',$this->session->userdata('id'));?>
                <label>Title</label>
                <?php echo form_input(['class' => 'form-control','placeholder'=>'Enter Article Title','name'=>'article_title','value'=>set_value('article_title') ]);?>
                
                <div class="text-danger">
                <?php echo form_error('article_title'); ?>
                </div> 
            </div>
            
          </div> 
        </div>  
        
        
        <div class="row">
           <div class="col-lg-6">
            <div class="form-group">
                <label>Body</label>

                <?php echo form_textarea(['class' => 'form-control','placeholder'=>'Enter Discription','type'=>'password','name'=>'article_body','value'=>set_value('article_body')]); ?>
                <div class="text-danger"><?php echo form_error('article_body'); ?></div>
            </div> 
          </div>  
        </div>
        
        <div class="row">
           <div class="col-lg-6">
            <div class="form-group">
                <label>Upload Image</label>

                <?php echo form_upload(['name'=>'userfile']); ?>
                <div class="text-danger">
                <?php
                    if(isset($upload_error))
                    {
                        echo $upload_error; 
                    }
                    ?>
                </div>
            </div> 
          </div>  
        </div>
        
        
        
        <div>
            <?php echo form_submit(['class' =>'btn btn-success','type'=>'submit','value'=>'Submit']); ?>
            <?php echo form_reset(['class' =>'btn btn-primary','type'=>'reset','value'=>'Reset']); ?>
            
        </div> 
        
    </div>
    </body>
</html>

