<!DOCTYPE html>
<html>
    <body>
        <?PHP
            $directory = "images/logoer/";
            $fi = new FilesystemIterator($directory, FilesystemIterator::SKIP_DOTS);
            printf("There are %d logos", iterator_count($fi)); ?>

        <br> <br>
        <?php
            // $images = glob("{$directory}*.png, {$directory}*.jpeg");
            // $images = glob($directory."*.png");
            $images = glob($directory."*.{jpg,gif,png}",GLOB_BRACE);
            foreach($images as $image) {
                echo '<img src="'.$image.'" width="50" height="50" /><br />';
                // echo 'image ';
            }
        ?>
</body>
</html>
