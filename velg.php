<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <?PHP
            $directory = "images/logoer/";
            $fi = new FilesystemIterator($directory, FilesystemIterator::SKIP_DOTS);
            printf("There are %d logos", iterator_count($fi)); ?>

        <br> <br>

        <?php 
            /* function:  returns the logo title */
            function get_logo_name($file_name) {
                return substr(strrchr($file_name,'/'),1);
            }
        ?>

        <?php
            // $images = glob("{$directory}*.png, {$directory}*.jpeg");
            // $images = glob($directory."*.png");
            $images = glob($directory."*.{jpg,gif,png}",GLOB_BRACE);
            $index = 0;
            $images_per_row = 5;
            foreach($images as $image) {
                // echo '
                //     <img src="'.$image.'" width="50" height="50" />
                //     <br />
                // ';

                

                $index++;
                $logo_name = get_logo_name($image.$file);
                //<img src="',$image,'" width="50" height="50" />
                echo '<a href="form-page.php?logo=',$logo_name,'" class="photo-link smoothbox" rel="gallery"><img src="',$image,'" width="50" height="50" /> </a>';
                // echo get_logo_name($image.$file);
                if($index % $images_per_row == 0) 
                { 
                    echo '<div class="clear"></div>'; 
                }
            }
            echo '<div class="clear"></div>';
        ?>
</body>
</html>
