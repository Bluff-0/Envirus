<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<script type="text/javascript">
	function ulululu() {
		
		window.location= "./../Web-Sources";
	}
</script>
<?php
session_start(); 
session_destroy();
echo "<script>ulululu();</script>";
?>