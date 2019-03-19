<h1>Checkout Transparente - Pagseguro</h1>

<div class="row">
	<div class="col-sm-4">
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
			<input type="email" class="form-control" name="email" id="email" value="c40842998720568962162@sandbox.pagseguro.com.br"  />
		</div>
		<div class="form-group">
		<label for="pwd">Senha:</label><br/>
			<input type="password" class="form-control" name="password" value="A951454h6788P344" id="pwd"  />
		</div>
	</div>
	
	<div class="col-sm-4">
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
	
	<div class="col-sm-4">

		<h3>DADOS DO PAGAMENTO</h3>

		<div class="form-group">
			<label>Titular do cartão:</label><br/>
				<input type="text" class="form-control" name="cartao_titular"  />
		</div>
		<div class="form-group">
			<label>CPF do Titular do cartão:</label><br/>
				<input type="text" class="form-control" name="cartao_cpf"  />
		</div>
		<div class="form-group">
			<label>Número do cartão:</label><br/>
				<input type="text" class="form-control" name="cartao_numero" maxlength="16" />
		</div>		
		<div class="form-group">
			<label>Código de Segurança:</label><br/>
				<input type="text" class="form-control" name="cartao_cvv" maxlength="3"  />
		</div>
		<div class="form-group">
			<label>Validade:</label><br/>
				<select name="cartao_mes" class="form-control" style="width: 30%;">
					<?php for($q=1;$q<=12;$q++): ?>
					<option><?php echo ($q<10)?'0'.$q:$q; ?></option>
					<?php endfor; ?>
				</select>
				<select name="cartao_ano" class="form-control" style="width: 30%;">
					<?php $ano = intval(date('Y')); ?>
					<?php for($q=$ano;$q<=($ano+20);$q++): ?>
					<option><?php echo $q; ?></option>
					<?php endfor; ?>
				</select>
		</div>
		<div class="form-group">
			<label>Parcelas:</label>
				<select name="parc" class="form-control"></select><br/>
		</div>
		<input type="hidden" name="total" value="<?php echo $total; ?>" />

		<button class="button efetuarCompra">Efetuar Compra</button>
	</div>
</div>

<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/psckttransparente.js"></script>
<script type="text/javascript">
PagSeguroDirectPayment.setSessionId("<?php echo $sessionCode; ?>");
</script>