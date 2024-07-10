<!DOCTYPE html>
<html>
<head>
    <title>Image Uploaded Success</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
        <h3>Selamat! File Anda berhasil diupload</h3>
        <p>Klik di sini untuk melihat gambar yang baru saja Anda upload
            <?php //anchor('upload/'.$image_metadata['file_name'], 'View My Image!')?>
        </p>
        <ul>
            <?php foreach ($upload_data as $item => $value):?>
            <li><?php echo $item;?>: <?php echo $value;?></li>
            <?php endforeach; ?>
            <img src="<?=base_url()?>upload/<?=$upload_data['file_name']?>" <?=$upload_data['image_size_str']?>>
        </ul>
  
        <p>
            <?php echo anchor('ImageUpload_Controller', 'Go back to Image Upload'); ?>
        </p>
    </div>
</body>
</html>