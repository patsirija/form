<?php 
    error_reporting(0);
    error_reporting(E_ERROR | E_PARSE);
	session_start();
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!<br>";
?>
        <br><a href="login11">Login</a> 
        <?php
	        exit();
    }
    if($blog->UserID == $_SESSION['UserID'])
    {   
        ?>
     <h3>Edit blog</h3>                        <br>
     <a href ="<?php echo base_url('blog/index5');?>"class="btn btn-default">Back</a>
     <form action="<?php echo base_url('blog/update2') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
     <?php  if($blog->image != "")
{   ?> 
     <?php

                                $images = explode(",", $blog->image);
if(sizeof($images) > 0 ){
  foreach($images as $image){
    echo '<img src="../../uploads/'.$image.'">' ;

  }
}  ?><?php }else{echo "don't have image";} ?><br>       <?php echo form_open_multipart('blog/update2');?>



เลือกไฟล์ภาพใหม่ ไฟล์ต้องนามสกุลjpg,png,jpegถ้าต้องการลบรูปไม่ต้องเลือกไฟล์<input name="userfile[]" id="userfile" type="file" multiple="" />
<br>
  <br>
           <input type="hidden" name="txt_hidden" value="<?php echo $blog->id; ?>">
         <div class="form-group">
            <label for="topic" class="col-md-2 text-right">Topic</label>
            <div class="col-md-10">
                 <input type="text" value="<?php echo $blog->topic; ?>" name="txt_topic" class="forn-control">
            </div>
         </div>
         <div class="form-group">

            <div class="col-md-10">
                 <input type="hidden" value="<?php echo  $blog->image; ?>" name="oldimage" class="forn-control">
            </div>
         </div>
         <div class="form-group">
            <label for="content" class="col-md-2 text-right">Content</label>
            <div class="col-md-10">
                 <input type="text" value="<?php echo $blog->content; ?>" name="txt_content" class="forn-control">
            </div>
        

            <br>
            <div class="col-md-10">
                 <input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
            </div>
         </div>

     </form>                    <?php echo form_close() ?>
     <?php }else {
        echo "can't";

    } ?>
