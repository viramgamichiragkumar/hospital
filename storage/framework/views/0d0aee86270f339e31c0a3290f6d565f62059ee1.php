<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>example</title>
</head>
<body>
<form action="<?php echo e(url('/insert')); ?>" method="post">
    <?php echo csrf_field(); ?>

	name<input type="text" name="name">	
	lastname<input type="text" name="lastname">
	address<input type="text" name="address">
	<button type="submit">Insert</button>
	
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\hospital\resources\views/insert.blade.php ENDPATH**/ ?>