<h3>Pilih gambar dari komputer Anda dan klik UPLOAD</h3>
    <table>
        <tr>
            <td>Filename</td>
            <td>Image</td>
        </tr>

    <?php 
//     $this->load->helper('directory'); //load directory helper
//     $dir = "upload/images/"; // Your Path to folder
//     $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */
     $dir = "upload/";
    foreach ($map as $k)
    {?>
    <tr>
        <td><?php //$image_metadata['file_name']; ?></td>
        <td><img src="<?php echo base_url($dir)."/".$k;?>" alt="" height="100px" width="100px"></td>
        
    </tr>
    <?php 
    }      
    ?> 
    </table>