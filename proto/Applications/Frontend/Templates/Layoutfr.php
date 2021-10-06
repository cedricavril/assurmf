<?php 
    $addr_prefixe = ($_SERVER['SERVER_NAME'] == 'localhost') ? '/assurmf/proto/Web' : '';
?>
<?php
    $title = "ASSUR & MF";
    $style = "indexStyle.css";
    $menu["index"] = "active";
    include ("../../includes/formHead.php");

	
	echo $content; 


    include "../../includes/footer.php";
?>


</body>
</html>