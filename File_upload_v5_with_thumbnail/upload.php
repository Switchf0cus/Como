
<?php include "upload_process.php";?>
<div class="form-box">

        <?php if(isset($confirmation)) echo "<div class='confirmation'>".$confirmation."</div>" ; ?>
        <div class="error"> <?php if(isset($error_file)) echo $error_file ; ?></div>
            <form id="upload-form" name="upload-form" enctype="multipart/form-data" method="post" action="">
                <input type="file" name="image"/>
      			<input type="submit" name="submit" value="Upload"/>
            </form>
</div>
