

		</div> <!-- end of wrapper  -->
		<script src="javascript/js.js" type="text/javascript"></script>
	</body>
</html>

<?php
	if(isset($conn)){
		mysqli_close($conn);
	}
?>

<?php ob_end_flush() ?>