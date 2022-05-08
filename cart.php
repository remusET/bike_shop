<?php
	include 'header.php'
?>

<body>
	<p>
		<label for = "nume">Nume</label>
		<input type = "text" id = "nume"/>
	</p>
	
	<p>
		<label for = "prenume">Prenume</label>
		<input type = "text" id = "nume"/>
	</p>
		
	<p>
		<label for = "adresa">Adresa</label>
		<textarea name = "adresa" id = "adresa" cols="20" rows="1"></textarea>
	</p>
	
	<p>
		<label for = "email">Email</label>
		<input type = "email" id = "email"/>
	</p>
		
	<p>
		<label for = "pass">Parola</label>
		<input type = "password" id = "pass"/>
	</p>
		
	<p>
		<input type = "submit" value = "Trimite!"/>
	</p>
</body>
	
<?php
	include 'footer.php'
?>