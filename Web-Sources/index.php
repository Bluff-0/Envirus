<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
<?php include "header.php"; ?>
<?php include "intro.php"; ?>
<?php include 'about.php'; include 'services.php'; ?>
<?php include "map.php"; include 'whyus.php';?>
<?php include "calltoaction.php"; ?>
<?php include "client.php"; ?>
<?php include "forum.php";?>
<?php  include 'team.php'; 
include "footer.php" ?>
<?php include "end.php" ?>