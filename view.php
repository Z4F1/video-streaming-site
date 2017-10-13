<?php
$title = "Streaming Site";
include "php/template/header.php";

$video_title = "Hei guys";
?>

<div class="video">
    <video class="video-screen" src="#" width="800px" height="600px"></video>
    <h1 class="video-title"><?php echo $video_title; ?></h1>
    
    <div class="comments">
        <div class="comment">
            <h2 class="comment-title">Title</h2>
            <p class="comment-author">Author</p>
            <p class="comment-text">This an comment on this website</p>
        </div>
    </div>
</div>

<?php
include "php/template/footer.php";
?>