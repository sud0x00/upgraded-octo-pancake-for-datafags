<!DOCTYPE html>
<html lang="en">

<head>
	<title>Movie DB (only for troons)</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
		<h1>Actor</h1>
<p>
				<label for="act_id">Actor ID:</label>
				<input type="text" name="act_id" id="act_id">
			</p>



			
			
<p>
				<label for="act_name">Actor Name:</label>
				<input type="text" name="act_name" id="act_name">
			</p>



			
			
<p>
				<label for="act_gender">Actor Gender:</label>
				<input type="text" name="act_gender" id="act_gender">
			</p>


			
<h1>Director</h1>
			
<p>
				<label for="dir_id">Director ID:</label>
				<input type="text" name="dir_id" id="dir_id">
			</p>


			
			
			
<p>
				<label for="dir_name">Director Name:</label>
				<input type="text" name="dir_name" id="dir_name">
			</p>

<p>
				<label for="dir_phone">Director Phone:</label>
				<input type="text" name="dir_phone" id="dir_phone">
			</p>

	<h1>Movie</h1>


<p>
				<label for="movie_id">Movie ID:</label>
				<input type="text" name="movie_id" id="movie_id">
			</p>

<p>
				<label for="movie_title">Movie TITle:</label>
				<input type="text" name="movie_title" id="movie_title">
			</p>


<p>
				<label for="movie_year">Year of release:</label>
				<input type="text" name="movie_year" id="movie_year">
			</p>


<p>
				<label for="movie_lang">Language:</label>
				<input type="text" name="movie_lang" id="movie_lang">
			</p>

	<h1>Movie Cast</h1>

	<p>
				<label for="role">Role:</label>
				<input type="text" name="role" id="role">
			</p>

		<h1>Rating</h1>
			
	<p>
				<label for="rat">Rating:</label>
				<input type="text" name="rat" id="rat">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
