
	<h2>Cadastrar Usuário</h2>

	<?php echo $_SERVER['HTTP_REFERER']; ?>
	
	<form metho22d="get" action="salvar_cadastro.php">
		<div class="form-group">
			<input type="text" name="nome" value="<?php if( isset($_GET['nome']) ) echo $_GET['nome'];?>" class="form-control" placeholder="Nome">
		</div>
		<div class="form-group">
			<input type="text" name="idade" value="<?php if( isset($_GET['idade']) ) echo $_GET['idade'];?>" class="form-control" placeholder="Idade">
		</div>
		<div class="form-group">
			<input type="text" name="email" value="<?php if( isset($_GET['email']) ) echo $_GET['email'];?>" class="form-control" placeholder="E-mail">
		</div>
		<div class="form-group">
			<input type="password" name="senha" value="<?php if( isset($_GET['senha']) ) echo $_GET['senha'];?>" class="form-control" placeholder="Senha">
		</div>
		<div class="form-group">
			<input type="submit" name="salvar" class="form-control btn btn-success">
		</div>
		
	</form>