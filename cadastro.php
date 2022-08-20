<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Produtos</title>
	<style>
		body{
			font-family: Arial, Helverica, sans-serif;
			background-image: linear-gradient(to right, rgb(225, 147, 220), rgb(218, 165, 32));
		}
		.box{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: rgba(255, 255, 255, 0.8);
			padding: 15px;
			border-radius: 15px;
			width: 20%;
		}
		fieldset{
			border: 3px solid #ffd700;
		}
		legend{
			border: 1px solid #ffd700;
			padding: 10px;
			text-align: center;
			background-color: #ffd700;
			border-radius: 5px;
			color: black;
		}
		.inputBox{
			position: relative;
		} 
		.inputUser{
			background: none;
			border: none;
			border-bottom: 1px solid black;
			outline: none;
			color: black;
			font-size: 15px;
			width: 100%;
			letter-spacing: 2px;
		}
		.labelInput{
			position: absolute;
			top: 0px;
			left: 0px;
			pointer-events: none;
			transition: .5s;
		}
		.inputUser:focus ~ .labelInput, 
		.inputUser:valid ~ .labelInput{
			top: -20px;
			font-size: 12px;
			color: rgb(225, 147, 220);
		}
		#submit{
			background-color: #ffd700;
			width: 100%;
			border: none;
			padding: 15px;
			color: black;
			font-size: 15px;
			cursor: pointer;
			border-radius: 10px;
			font-weight: bold;
		}
		#submit:hover{
            background-color: #ffb515;
        }
	</style>
</head>
<body>
	<div class="box">
		<form action="">
			<fieldset>
				<legend><b>Cadastro de Produtos</b></legend>
				<br>
				<div class="inputBox">
					<input type="text" maxlength="30" name="nome" id="nome" class="inputUser" required>
					<label for="nome" class="labelInput">Nome</label>
				</div>
				<br><br>	
				<div class="inputBox">	
					<input type="number" name="preco" id="preco" class="inputUser" required>
					<label for="preco" class="labelInput">Preço</label>
				</div>	
				<br><br>		
				<div class="inputBox">	
					<input type="number" name="qtde" id="qtde" class="inputUser" required>
					<label for="qtde" class="labelInput">Quantidade</label>
				</div>	
				<br><br>		
				<div class="inputBox">	
					<textarea type="text" cols="30" rows="3" maxlength="250" name="desc" id="desc" class="inputUser" required></textarea>
					<label for="desc" class="labelInput">Descrição</label>
				</div>
				<br><br>	
				<input type="submit" name="submit" id="submit">
			</fieldset>
		</form>
	</div>
</body>
</html>
