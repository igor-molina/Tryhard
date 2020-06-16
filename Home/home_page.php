<?php 
    include "../Login/protection.php";
	include "../Database/connection.php";
	
	/*if(isset($_POST['publish'])){
		if($_FILES["file"]["error"] > 0){
			$texto = $_POST["texto"];
			$hoje = date("Y-a-d");

			if($text ==""){
				echo "<script type='javascript'>alert('Não podes fazer uma publicação vazia.');";
			}else{
				$query = "INSERT INTO pubs(uNickname, pTexto, pData) VALUES ("
			}
		}
	}*/
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_page.css">
    <title>Tryhard</title>
</head>
<body>
<div class="primary-nav">

	<nav role="navigation" class="menu">

		<img src="images/chest.png" class="inventory">

		<img src="images/pergaminho.png" class="create-session">

		<img src="images/book.png" class="adventure-books">

		<img src="images/beer.png" class="add-alies">

		<div class="overflow-container">

			<ul class="menu-dropdown">

				<li><a href="#">Inventário</a></li>

				<li class="menu-hasdropdown">
					<a href="#">Crie sua campanha</a>
					<input type="checkbox" class="sub-menu-checkbox" id="settings" />

					<ul class="sub-menu-dropdown">
						<li><a href="">Profile</a></li>
						<li><a href="">Security</a></li>
						<li><a href="">Account</a></li>
					</ul>
				</li>
				<li><a href="#">Livros</a></li>
				<li><a href="#">Recrute um aliado</a></li>
			</ul>

		</div>

	</nav>

</div>

<div class="new-wrapper">

	<div id="main">

		<div id="main-contents">
			<form method="POST" enctype="multipart/form-data">
				<br/>
				<textarea placeholder="Publique algo" name="texto"></textarea>
				<label for="file-input">
					<img src="images/gallery.png" title="Inserir uma imagem"/>
				</label>
				<input type="submit" value="Publicar" name="publish"/>
				
				<input type="file" id="file-input" name="file" hidden/>
			</form>
		</div>
	</div>
</div>
</body>
</html>