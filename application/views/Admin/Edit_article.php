<?php 
include_once('Header.php');
?>
<html>
<head></head>
   <body>
    <div class="container" style="margin-top:120px;margin-left:375px">
        
        <h1>Edit Article</h1>
        <?php echo form_open("Admin/update_article"); ?>
<!--
        
        <?php 
//            echo form_open("Admin/update_article/{$r->id}");
            ?>
        
-->
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
               <?php echo form_hidden('id',$r->id);?>
                <label>Title</label>
                <?php echo form_input(['class' => 'form-control','placeholder'=>'Enter Article Title','name'=>'article_title','value'=>set_value('article_title',$r->article_title)]);?>
                
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

                <?php echo form_textarea(['class' => 'form-control','placeholder'=>'Enter Discription','type'=>'password','name'=>'article_body','value'=>set_value('article_body',$r->article_body)]); ?>
                <div class="text-danger"><?php echo form_error('article_body'); ?></div>
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

