<h1>Checkout PayPal</h1>

<?php if(!empty($error)): ?>
<div class="warn">
	<?php echo $error; ?>
</div>
<?php endif; ?>

<div class="row">
	<div class="col-sm-6">
		<h3>DADOS PESSOAIS</h3>
		<div class="form-group">
			<label for="name">Nome:</label><br/>
				<input type="text" class="form-control" name="name" value="Pedro Henrique" id="name"  />
		</div>		
		<div class="form-group">
			<label for="cpf">CPF:</label><br/>
				<input type="text" class="form-control" name="cpf" value="05352745139" id="cpf"/>
		</div>
		<div class="form-group">
			<label for="tel">Telefone:</label><br/>
				<input type="text" class="form-control" name="telefone" value="6192545754" id="tel"  />
		</div>
		<div class="form-group">
		<label for="email">E-mail:</label><br>
			<input type="email" class="form-control" name="email" id="email" value="testador@hotmail.com"  />
		</div>
		<div class="form-group">
		<label for="pwd">Senha:</label><br/>
			<input type="password" class="form-control" name="password" value="123" id="pwd"  />
		</div>
	</div>
	
	<div class="col-sm-6">
		<h3>DADOS DA ENTREGA</h3>

		<div class="form-group">
			<label for="cep">CEP:</label><br/>
				<input type="text" class="form-control" name="cep" id="cep" maxlength="9"  />
		</div>
		<div class="form-group">
			<label for="rua">Rua:</label><br/>
				<input type="text" class="form-control" name="rua" id="rua"  />
		</div>	
		<div class="form-group">
		<label for="numero">Número:</label><br/>
			<input type="text" class="form-control" name="numero" id="numero"  />
		</div>
		<div class="form-group">
			<label>Complemento:</label><br/>
				<input type="text" class="form-control" name="complemento" />
		</div>
		<div class="form-group">
			<label for="bairro">Bairro:</label><br/>
				<input type="text" class="form-control" name="bairro" id="bairro"  />
		</div>
		<div class="form-group">
			<label for="cidade">Cidade:</label><br/>
				<input type="text" class="form-control" name="cidade"  id="cidade" />
		</div>
		<div class="form-group">
			<label for="estado">Estado:</label><br/>
				<input type="text" class="form-control" name="estado" id="estado" />
		</div>	
	</div>
	<input type="submit" value="Efetuar Compra" class="button efetuarCompra" />
</div>	