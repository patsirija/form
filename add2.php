<?php 
    error_reporting(0);
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    if($_SESSION['UserID'] == "")
    {
	    echo "Please Login!<br>";
?>
        <br>
        <a href="login11">
            Login
        </a> 
<?php
	    exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
    <body>
        <br>
        <center>
            <table border="1" bordercolor="black"  width="40%">
                <tr> 
                    <td>  
                        <div class="navbar navbar-default">
        </center>
                            <center>
                                <br>
                                <span style="font-size:32px"  class="glyphicon glyphicon-paste" >
                                <h3>เพิ่ม</h3> 
                            </center>
                        </div>
                        &nbsp;  &nbsp;  &nbsp;  
                        <form action="<?php echo base_url('blog/submit') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="topic" class="col-md-2 text-right">
                                </label>
                                <div class="col-md-10">
                                    <input type="text" name="txt_topic" class="form-control"  style="width:400px;" placeholder="Topic" required="" value="<?php echo !empty($user['topic'])?$user['topic']:''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php 
                                    $query = $this->db->query("SELECT * FROM databasename WHERE UserID = '".$_SESSION['UserID']."' ");
                                    foreach ($query->result() as $row)
                                    {
                                ?>
                                        <label for="content" class="col-md-2 text-right">
                                        </label>
                                        <div class="col-md-10">
                                            <textarea name="txt_content" class="form-control"  style="width:400px;" placeholder="Content" required="" value="<?php echo !empty($user['txt_content'])?$user['txt_content']:''; ?>"></textarea>
                                        </div>
                            </div>

                                        <div class="form-group">
                                            <label for="author" class="col-md-2 text-right">
                                            </label>
                                            <div class="col-md-10">
                                                <input type="hidden" name="txt_author" class="form-control"  style="width:400px;" placeholder="author" required="" value=" <?php echo $row->firstname; ?>" readonly>

                                            </div>
                                        </div>
         
                                        <div class="form-group">
                                            <label for="username" class="col-md-2 text-right">
                                            </label>
                                            <div class="col-md-10">
                                                <input type="hidden" name="username" class="form-control"  style="width:400px;" required="" value="<?php echo $row->username; ?>" readonly>

                                            </div>
                                            <div class="col-md-10">
                                                <input type="hidden" name="userid" class="form-control"  style="width:400px;" required="" value="<?php echo $row->UserID; ?>" readonly>

                                            </div>
                                        </div>
         

                                        <div class="form-group">
                                            <label for="fileToUpload">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image
                                            </label>
                                            <center>
                                                <?php echo form_open_multipart('blog/submit');?>
                                                <Br>
                                                ไฟล์ต้องนามสกุลjpg,png,jpeg<br>
                                                <input name="userfile[]" id="userfile" type="file" multiple="" />
                                            </center>
                                            <br>
                                            <center>   
                                                <input type="submit" name="btnSave2" class="btn btn-primary" value="สร้าง" >     

                                                <?php 
                                                    echo form_close() 
                                                ?>
                                            </center>  
                                        </div>

                                <?php 
                                    }
                                ?>
                        </form> 
                    </td>
                </tr>
            </table>
  
    </body>
</html>