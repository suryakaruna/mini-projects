<?php
session_start();
session_destroy();
echo "<script>
		alert('Sucessfully signed out');
		window.location.href='index.html';
		</script>";
?>