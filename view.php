<?php
include("db/logic.php");
?>
<div>
    <?php foreach ($query as $q) { ?>
        <video controlsList="nodownload" oncontextmenu="return false;" width="320" height="240" controls>
            <source src="gallery/<?php echo $q['title']; ?>" type="video/mp4">
            <source src="gallery/<?php echo $q['title']; ?>" type="video/ogg">
            Your browser does not support the video tag.
            <!-- Text to be shown incase browser doesnt support html5 -->
        </video>
    <?php } ?>
</div>