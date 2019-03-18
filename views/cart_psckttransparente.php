<h1>Checkout Transparente - Pagseguro</h1>

<div class="row">
	<div class="col-sm-4">
		<h3>Dados Pessoais</h3>
		<div class="form-group">
			<label for="name">Nome:</label><br/>
				<input type="text" class="form-control" name="name" value="Pedro Henrique" id="name"  /><br/>
		</div>		
		<div class="form-group">
			<label for="cpf">CPF:</label><br/>
				<input type="text" class="form-control" name="cpf" value="05352745139" id="cpf"  /><br/>
		</div>
		<div class="form-group">
			<label for="tel">Telefone:</label><br/>
				<input type="text" class="form-control" name="telefone" value="6192545754" id="tel"  /><br/>
		</div>
		<div class="form-group">
		<label for="email">E-mail:</label><br/>
			<input type="email" class="form-control" name="email" id="email" value="c40842998720568962162@sandbox.pagseguro.com.br"  /><br/>
		</div>
		<div class="form-group">
		<label for="pwd">Senha:</label><br/>
			<input type="password" class="form-control" name="password" value="A951454h6788P344" id="pwd"  /><br/>
		</div>
	</div>
	
	<div class="col-sm-4">
		<h3>Informações de Endereço</h3>

		<strong>CEP:</strong><br/>
			<input type="text" name="cep" id="cep" maxlength="9"  /><br/><br/>

		<strong>Rua:</strong><br/>
			<input type="text" name="rua" id="rua"  /><br/><br/>

		<strong>Número:</strong><br/>
			<input type="text" name="numero" id="numero"  /><br/><br/>

		<strong>Complemento:</strong><br/>
			<input type="text" name="complemento" /><br/><br/>

		<strong>Bairro:</strong><br/>
			<input type="text" name="bairro" id="bairro"  /><br/><br/>

		<strong>Cidade:</strong><br/>
			<input type="text" name="cidade"  id="cidade" /><br/><br/>

		<strong>Estado:</strong><br/>
			<input type="text" name="estado" id="estado" /><br/><br/>

	</div>	
	
	<div class="col-sm-4">
		<h3>Informações de Pagamento</h3>

		<strong>Titular do cartão:</strong><br/>
			<input type="text" name="cartao_titular"  /><br/><br/>

		<strong>CPF do Titular do cartão:</strong><br/>
			<input type="text" name="cartao_cpf"  /><br/><br/>

		<strong>Número do cartão:</strong><br/>
			<input type="text" name="cartao_numero" /><br/><br/>

		<strong>Código de Segurança:</strong><br/>
			<input type="text" name="cartao_cvv" maxlength="3"  /><br/><br/>

		<strong>Validade:</strong><br/>
			<select name="cartao_mes">
				<?php for($q=1;$q<=12;$q++): ?>
				<option><?php echo ($q<10)?'0'.$q:$q; ?></option>
				<?php endfor; ?>
			</select>
			<select name="cartao_ano">
				<?php $ano = intval(date('Y')); ?>
				<?php for($q=$ano;$q<=($ano+20);$q++): ?>
				<option><?php echo $q; ?></option>
				<?php endfor; ?>
			</select><br/><br/>

		<strong>Parcelas:</strong><br/>
			<select name="parc"></select><br/><br/>

		<input type="hidden" name="total" value="<?php echo $total; ?>" />

		<button class="button efetuarCompra">Efetuar Compra</button>
	</div>
</div>

<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/psckttransparente.js"></script>
<script type="text/javascript">
PagSeguroDirectPayment.setSessionId("<?php echo $sessionCode; ?>");
</script>