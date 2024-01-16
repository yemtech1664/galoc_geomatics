<?php include 'includes/header.php' ?>
<div class="body-content">
	<!-- sidebar -->
	<?php include 'includes/sidebar.php'; ?>
	<!-- /sidebar -->
	<article class="side-content">
		<form>
			<h2>Add Property</h2>
			<div class="form-data">
				<label>Property Name:</label>
				<input class="form-control" type="text" name="" placeholder="2 bedroom flat">
			</div>
			<div class="form-data">
				<label>Property Address:</label>
				<input class="form-control" type="text" name="" placeholder="No1 Aerodrome Sango Ibadan Oyo State">
			</div>
			<div class="form-data">
				<label>Category:</label>
				<select class="form-control">
					<option>Room</option>
					<option>Self Contain</option>
					<option>Flat</option>
					<option>Duplet</option>
				</select>
			</div>
			<div class="form-data">
				<label>Description:</label>
				<textarea class="form-control"></textarea>
			</div>
			<div class="form-data">
				<label>property Price:</label>
				<input class="form-control" placeholder="150000" type="text"  name="">
			</div>
			<div class="form-data">
				<p>
				<label>State:</label>
				</p>
				<input class="form-control"  placeholder="Oyo state" type="text"  name="">
			</div>
			<div class="form-data">
				<p>
				<label>Image:</label>
				</p>
				<input class="form-control" placeholder="The propertyimage" type="file"  name="">
			</div>
			<input type="submit" value="SUBMIT" name="">
		</form>
	</article>
</div>
<script type="text/javascript" src="asset/js/script.js"></script>
</body>
</html>