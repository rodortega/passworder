<div class="col-sm-4 col-sm-offset-4 center-height">
	<form method="post" action="<?php echo URL.'home/validate'?>">
		<div class="form-group">
			<input type="text" name="string" class="form-control" placeholder="STRING" required><br>
			<input type="password" name="password" class="form-control" placeholder="KEY" required autofocus><br>
			<button type="submit" name="encrypt" class="btn btn-md btn-danger">ENCRYPT</button>
			<button type="submit" name="decrypt" class="btn btn-md btn-success">DECRYPT</button>
		</div>
	</form>
</div>