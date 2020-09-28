<?php
if(isset($_FILES['myImage'])) {

    if($_FILES['myImage']['error'] == 0) {
        
        if($_FILES['myImage']['size'] <= 1000000) {
            
            $extension = ['jpg', 'jpeg', 'png', 'gif', 'JPG', 'JPEG', 'PNG', 'GIF'];
            $infosFile = pathinfo($_FILES['myImage']['name']);
            $extension_upload = $infosFile['extension'];

            if(in_array($extension_upload, $extension)) {

                $name = basename($_FILES['myImage']['name']);
                $imageFile = date('j-m-Y_H.i.s') .'_'. $name;

                move_uploaded_file($_FILES['myImage']['tmp_name'], 'uploads/'. $imageFile);
                echo 'The file is successfully uploaded<br />';
                echo 'Pour afficher l\'image, <a href="uploads/'. $imageFile .'">cliquez ici</a>';
            } else {
                echo 'The files with extension .<em>'. $extension_upload .'</em> is not accepted';
            }
        } else {
            echo $_FILES['myImage']['size'] .' octet is bigger to upload, change this file';
        }
    } else {
        echo 'Error code : '. $_FILES['myImage']['error'];
    }
}
?>