<?php
if (!isset($about_width)) {
    $about_width = 4;
}
?>

<div class="col-md-<?php echo $about_width;?>">
    <h2>About this site.</h2>
    <hr>
    <p>
        This site primarily deals with managing events and all the tasks related to them.
    </p>
    <a class="btn btn-default" href="about.php">More Info</a>
</div>
<div class="col-md-<?php echo $about_width;?>">
    <h2>Some techy stuff</h2>
    <hr>
    <p>
        The site has been developed with the help of Apache MySQL and PHP.
        Also a little bit of Bootstrap3 and JQuery is used to make the site look beautiful.
    </p>
    <a class="btn btn-default" href="about.php#tech">More Info</a>
</div>
