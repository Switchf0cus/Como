 
 <?php 

 function generate_thumb_now($field_name = '',$target_folder ='',$file_name = '', $thumb = FALSE, $thumb_folder = '', $thumb_width = '',$thumb_height = ''){
         //folder path setup
         $target_path = $target_folder;
         $thumb_path = $thumb_folder;   
         //file name setup
    $filename_err = explode(".",$_FILES[$field_name]['name']);
    $filename_err_count = count($filename_err);
    $file_ext = $filename_err[$filename_err_count-1];
     if($file_name != '')
     {
        $fileName = $file_name.'.'.$file_ext;
      }
    else
    {
        $fileName = $_FILES[$field_name]['name'];
    }   
    //upload image path
    $upload_image = $target_path.basename($fileName);   
    //upload image
    if(move_uploaded_file($_FILES[$field_name]['tmp_name'],$upload_image))
    {
         //thumbnail creation
        if($thumb == TRUE)
        {
            $thumbnail = $thumb_path.$fileName;

            list($width,$height) = getimagesize($upload_image); // Get the size of an image
			# list construct assign variables as if they were an array, like extract() function
			#is used to assign a list of variables in one operation.

            $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height); //imagecreatetruecolor — Create a new true color image
            switch($file_ext){
                case 'jpg':
                    $source = imagecreatefromjpeg($upload_image); #imagecreatefromjpeg() returns an image identifier representing the image type of jpg / jpeg
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;
                case 'png':
                    $source = imagecreatefrompng($upload_image); #imagecreatefromjpeg() returns an image identifier representing the image type of png
                    break;
                case 'gif':
                    $source = imagecreatefromgif($upload_image);  #imagecreatefromjpeg() returns an image identifier representing the image type of gif
                     break;
                default:
                    $source = imagecreatefromjpeg($upload_image); # Default jpeg
            }
            
       imagecopyresized($thumb_create, $source, 0, 0, 0, 0, $thumb_width, $thumb_height, $width,$height); 
	   #imagecopyresized — Copy and resize part of an image
					/*bool imagecopyresized ( 
						resource $dst_image , 
						resource $src_image , 
						int $dst_x , int $dst_y , 
						int $src_x , int $src_y , 
						int $dst_w , int $dst_h , 
						int $src_w , int $src_h ) */
            switch($file_ext){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumbnail,100); 
					# imagejpeg() creates a JPEG file from the given image.
					# To Output image to browser or file
                    break;
                case 'png':
                    imagepng($thumb_create,$thumbnail,100); 
					#imagejpeg() creates a PNG file from the given image.
					# To Output image to browser or file
					
                    break;
                case 'gif':
                    imagegif($thumb_create,$thumbnail,100); 
					#imagejpeg() creates a GIF file from the given image.
					# To Output image to browser or file
                     break;
                default:
                    imagejpeg($thumb_create,$thumbnail,100); 
					# Default creates a JPEG file from the given image.
					# To Output image to browser or file
            }
        }
        return $fileName;
     }
    else
    {
        return false;
     }
    }

if($_POST){


  if(!empty($_FILES['image']['name'])){       
    $upload_img = generate_thumb_now('image','images/','',TRUE,'images /thumbs/','400','320');

    //full path of the thumbnail image
    $thumb_src = 'images/thumbs/'.$upload_img;

    //set success and error messages
    $confirmation = $upload_img?"<img id='profile-img' src='$thumb_src' /><br> <span style='color:#008000;'>Image thumbnail created successfully.</span>":"<span style='color:#F00000;'>Some error occurred, please try again.</span>";

    }else{

    //if form is not submitted, below variable should be blank
    $thumb_src = '';
    $message = '';
	$confirmation = "<p style='color:red'>You need to select a file!";
    }
}




	
	?>