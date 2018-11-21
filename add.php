<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <br>
</head>
    <body>  
        <center>
            <table border="1" bordercolor="black"  width="40%">
                <tr> 
                    <td>  
                        <div class="navbar navbar-default">
        </center>
                            <center>
                                <br>
                                    <span style="font-size:32px"  class="glyphicon glyphicon-user" >
                                        <h3>Register</h3> 
                            </center>
                        </div>
                        <div class="container">
                                &nbsp;  &nbsp;  &nbsp;  
                                <form action="<?php echo base_url('blog/submit') ?>" method="post" class="form-horizontal"  enctype="multipart/form-data">
                        </div>
                                        <div class="form-group">
                                                <label for="username" class="col-md-2 text-right">
                                                </label>
                                                <div class="col-md-10">
                                                        <input type="text" name="txt_username" class="form-control"  style="width:800px;" placeholder="Username" required="" value="<?php echo !empty($user['txt_username'])?$user['txt_username']:''; ?>">
                                                </div>
                                
                                        </div>
                                        <div class="form-group">
                                                <label for="password" class="col-md-2 text-right">
                                                </label>
                                                <div class="col-md-10">
                                                        <input type="text" name="txt_password" class="form-control"  style="width:800px;" placeholder="Password" required="" value="<?php echo !empty($user['txt_password'])?$user['txt_password']:''; ?>">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="firstname" class="col-md-2 text-right">
                                                </label>
                                                <div class="col-md-10">
                                                        <input type="text" name="txt_firstname" class="form-control"  style="width:800px;" placeholder="Firstname" required="" value="<?php echo !empty($user['txt_firstname'])?$user['txt_firstname']:''; ?>">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="lastname" class="col-md-2 text-right">
                                                </label>
                                                <div class="col-md-10">
                                                        <input type="text"  class="form-control" name="txt_lastname"  placeholder="Lastname" style="width:800px;" required="" value="<?php echo !empty($user['txt_lastname'])?$user['txt_lastname']:''; ?>">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <?php
                                                        if(!empty($user['txt_sex']) && $user['txt_sex'] == 'Female'){
                                                                $fcheck = 'checked="checked"';
                                                                $mcheck = '';
                                                        }else{
                                                                $mcheck = 'checked="checked"';
                                                                $fcheck = '';
                                                        }
                                                ?>
                                                <label>
                                                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sex 
                                                </label>
                                                <label for="sexf" >
                                                        &nbsp; &nbsp; Female 
                                                </label>
                                                <input type="radio" style="width:18px; height:30px;" name="txt_sex" id="sexf" value="Female" class="forn-control"  <?php echo $fcheck; ?>/><br>
                                                <label for="sexm" >
                                                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;   &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Male  &nbsp; &nbsp; 
                                                </label>
                                                <input type="radio" style="width:18px; height:30px;" name="txt_sex" id="sexm" value="Male" class="forn-control" <?php echo $mcheck; ?>/>  <br>
                                        </div>
                                        <div class="form-group">
                                                <label for="age" class="col-md-2 text-right">
                                                </label>
                                                <div class="col-md-10">
                                                        <input type="number" name="txt_age" class="form-control" style="width:800px;" placeholder="Age" required="" value="<?php echo !empty($user['txt_age'])?$user['txt_age']:''; ?>"><br>
                                                </div>    
                                        </div>   
                                        <BR><BR>
                                        <div class="form-group">
                                                <label for="fileToUpload">
                                                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image
                                                </label>
                                                <center>
                                                        <br>
                                                        ไฟล์ต้องนามสกุลjpg,png,jpeg<br>
                                                        <input type="file" name="fileToUpload" id="fileToUpload" required="" value="<?php echo !empty($user['fileToUpload'])?$user['fileToUpload']:''; ?>">
                                                </center>
                                                <br>
                                                <center>   
                                                        <input type="submit" name="btnSave" class="btn btn-primary" value="Save" >   
                                                </center>  
                                        </div>
                                </form>        
                    </td>
                </tr>
            </table>
    </body>
</html>
