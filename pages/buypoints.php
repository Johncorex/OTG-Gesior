<?php
$bonusPoints = $config['site']['bonusPoints'];
if ($action == ""){
$main_content .='
<script>
function validate_form(thisform){
with (thisform){
if(rules.checked==false){
alert(\'Para prosseguir com a doação você deve concordar com os termos acima!\');return false;
}}}
</script>
<div id="ProgressBar">
<div id="Headline">Regras da Doação</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter"> 
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div>
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div> 
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif"> 
<div id="FirstStep" class="Steps">
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif">
<div class="StepText" style="font-weight: bold;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif"> 
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-blue.gif"> 
<div class="StepText" style="font-weight: normal;">Método de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;"> 
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-blue.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-blue.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Regras da Doação</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
 <tbody><tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
Informamos aos jogadores e colaboradores que o <b>'.$config['server']['serverName'].' Alternate Tibia Server</b> não tem nenhum interesse financeiro. Toda a renda obtida é diretamente reaplicada para a manutenção do servidor - significa que ao fazer uma doação, você está garantindo a estabilidade e aumentando a qualidade do mesmo.</br></br>
Os pontos que são repassados aos jogadores que efetuam as doações não representam nada mais além de nossa gratificação, ou seja, você não está comprando pontos e sim recebendo uma gratificação simbólica (em formas de pontos) que te beneficie dentro do jogo; você poderá usar os seus pontos da maneira que desejar.</br></br>
A ideia deste sistema é simples: com o intuito de nos aproximarmos dos jogadores e fazer com que vocês se sintam em casa, entendemos a sua doação como uma via de mão dupla no quesito credibilidade. Ao acreditar que vale a pena investir na manutenção do servidor, nós investimos em vocês creditando-os com pontos, que como já dito anteriormente, podem ser utilizados da maneira que mais os couber.</br></br>

<h5><span style="color:red">O Doador está ciente que a doação não pode ser devolvida.</span></h5>
Os Pontos/Coins (Item virtual) serão entregues dentro do prazo de 24 horas na conta do doador.</br>
O Doador está ciente que não está comprando e sim doando, e como forma de gratificação iremos adicionar os Pontos/Coins (item virtual) na conta do doador.</br>
O valor dos Pontos/Coins estão sujeitos a alterações.</br>


<h3>Dúvidas Frequentes</h3></br>
-<b><span style="color:green">TIBIA COINS?</span></b>
TIBIA COINS faz parte do nosso sistema de doação, com eles você pode adquirir alguns benefícios que esteja disponível no Shopping Online ou in Game.</br></br>

-<b><span style="color:green">PAGAMENTOS VIA PAYPAL</span></b>
Todos pagamentos via paypal, não estao 100% automaticos ainda, voce deverá chamar um membro da staff no game ou enviando um e-mail para <span style="color:blue">johncore@gmail.com</span> , Com nome do seu char e quantos reais foram doados! Obrigado

</br>Como efetuar a doação?</b>
<br />Clique no botão <b><span style="color:green">"Continue"</span></b> e siga todos os procedimentos para realizar sua doação. 
<br />
<br />
<hr>
<div align="center">
<b>Termos de doação</b>
<br /><INPUT TYPE="checkbox" NAME="rules" id="rules" value="true" /> Eu aceito os termos e desejo prosseguir.<br />
<small style="color: red;">Esteja ciente dos termos de doação antes de prosseguir!</small>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<form action="?subtopic=buypoints&action=agreement" method="post" onsubmit="return validate_form(this)">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</form>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</center>';}
if ($action == "agreement"){
if(!$logged) {
$link = "index.php?subtopic=buypoints&action=agreement";
include("accountmanagement.php");
}
else
{
$buy_name = stripslashes(urldecode($_POST['buy_name']));
$main_content .= '
<div id="ProgressBar">
<div id="Headline">Método de Pagamento</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: bold;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-blue.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-blue.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
<br /><br />
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="4" WIDTH="100%"> 
<form action="index.php?subtopic=buypoints&action=tipo" method="POST">
<input type="hidden" name="char_name" value=""> 


<div class="TableContainer" style="position:relative;">
		<div class="ribbonShop-double"></div>
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);"></span>
					<div class="Text">Select a payment method</div>
					<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span> 
				</div>

<br>
</TR>';






if ($config['site']['pagseguro'] == 1){
$main_content .='
				<div class="InnerTableContainer">
						<table style="width:101%;">
							<tbody>
							<tr>
								<td>
									<div class="TableShadowContainerRightTop">
										<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rt.gif);"></div>
									</div>
									<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rm.gif);">
										<div class="TableContentContainer">
											<table class="TableContent" width="100%" style="border:1px solid #faf0d7;background-color;#faf0d7;">
								 
												</tr>
		<TD>';
			if ($bonusPoints > 1){
			if ($bonusPoints <= 4){$main_content .='<b>[Bônus Points <font color="#FF0000">x'.$bonusPoints.'</font>]</b><br />';}
			if ($bonusPoints >= 5){$main_content .='<b>[Bônus Points <font color="#FF0000" style="font-size:18px;font-weight:bold;">Extreme x'.$bonusPoints.'!</font>]</b><br />';}
			}
		$main_content .='<input type="radio" name="method" value="1" />&nbsp;<b><span style="color:Black">Pag</span><span style="color:green">Seguro</span></b> - Cartões de Crédito&nbsp;<i>/</i>&nbsp;Boleto&nbsp;<i>/</i>&nbsp;Transferência bancária
		</TD>
	</TR>';}
if ($config['site']['paypal'] == 1){
		$main_content .='
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="2" />&nbsp;<b><span style="color:MidnightBlue">Paypal</span></b> - Credit Cards/International Transactions</TD>
		</TR>';}
		if ($config['site']['caixa'] == 1){
		$main_content .='
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="3" />&nbsp;<b><span style="color:red">Caixa Economica</span></b> - Depósitos/DOCS/Transferencias Bancárias</TD>
		</TR>';}
		
				if ($config['site']['santander'] == 1){
		$main_content .='
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="3" />&nbsp;<b><span style="color:red">Santander</span></b> - Depósitos/DOCS/Transferencias Bancárias</TD>
		</TR>';}
		
				if ($config['site']['nubank'] == 1){
		$main_content .='
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="3" />&nbsp;<b><span style="color:BlueViolet">NuBank</span></b> - Boleto/Depósitos/Transferencias Bancárias</TD>
		</TR>';}
		
		
				if ($config['site']['picpay'] == 1){
		$main_content .='
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="4" />&nbsp;<b><span style="color:green">Picpay</span></b> - Cartões de Crédito</TD>
		</TR>';}
		
		
		
		
		if ($config['site']['caixa'] == 0 && $config['site']['pagseguro'] == 0 && $config['site']['paypal'] == 0){
		$main_content .='
		<TR BGCOLOR="#D4C0A1" padding="10px">
			<TD><b style="color: red; padding: 5px;">Nenhuma forma de pagamento disponível no momento.</b></TD>
		</TR>';
		}
		
		
		
		
		
$main_content .='
</TABLE>
</tbody>
</table>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>';
if ($config['site']['caixa'] == 1 || $config['site']['pagseguro'] == 1 ||  $config['site']['picpay'] == 1 || $config['site']['paypal'] == 1){
$main_content .='
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<a href="javascript:void();" onclick=location.href="index.php?subtopic=buypoints&action=pag_form">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/global/buttons/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>';
}
$main_content .='
</td>
</tr>
</tbody>
</table>';
}
$_SESSION["nome"] = stripslashes(urldecode($_POST['method']));}
elseif($action == 'tipo'){
if(!$logged){
$main_content .= '
<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
<TR BGCOLOR="'.$config['site']['vdarkborder'].'">
<TD CLASS="white"><b>Error</b></td>
</TR>
<TR BGCOLOR='.$config['site']['darkborder'].'>
<TD>Please, log in so you can proceed with the operation.<br /><a href="index.php?subtopic=accountmanagement">It is here log</a>. If you do not have an account, <a href="index.php?subtopic=createaccount">Register here</a>.</TD>
</TR>
</TABLE>';
}else{
$buy_tipo = stripslashes(urldecode($_POST['method']));
if($buy_tipo == 0) { $main_content .='
<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
<TR BGCOLOR="'.$config['site']['vdarkborder'].'">
<TD CLASS=white><b>Error</b></td>
</TR>
<TR BGCOLOR='.$config['site']['darkborder'].'>
<TD><b style="color: red;">No payment method has been selected.</b><br /><i>Select a form of payment available to give procedure.</i></TD>
</TR>
</TABLE>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td style="border: 0px none;"> 
<a href="javascript:void();" onclick=location.href="index.php?subtopic=buypoints&action=agreement">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Back" alt="Back" src="'.$layout_name.'/images/vips/_sbutton_back.gif" type="image">
</div>
</div>
</a>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
';}
if($buy_tipo == 1) {
$main_content .= '
<div id="ProgressBar">
<div id="Headline">Informações do Pedido</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: bold;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-blue.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
';
if ($bonusPoints >= 2){
$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Bônus Points!</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
<td>';
if ($bonusPoints >= 2){
$main_content .= '<div style="font-size: 20px; font-weight: bold; color: red;">Points x'.$bonusPoints.'</div>';
}
$main_content .='
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />';
}
$_POST['item_quant_1'];
$_POST['account_namev'];
$_POST['emailv'];
$_POST['character_namev'];
$main_content .='
<form action="?subtopic=buypoints&action=confirmacao" method="post" enctype="application/x-www-form-urlencoded">
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Account Information</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
</tr>
<tr>
<td><b>Account Name:</b></td>
<td><input type="hidden" value="' . $account_logged->getName() . '" name="account_namev" />' . $account_logged->getCustomField("name") . '</td>
</tr>
<tr>
<td><b>Email:</b></td>
<td><input type="hidden" value="' . $account_logged->getCustomField("email") . '" name="emailv" />' . $account_logged->getCustomField("email") . '</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Points to buy</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
<td width="10%"><b>Points:</b></td>
<td>
<select name="item_valor_1">
<option value="1000">R$:10,00 = 10 Coins</option>
<option value="2000">R$:20,00 = 20 Coins</option>
<option value="3000">R$:30,00 = 30 Coins</option>
<option value="4000">R$:40,00 = 40 Coins</option>
<option value="5000">R$:50,00 = 50 Coins</option>
<option value="6000">R$:60,00 = 60 Coins</option>
<option value="7000">R$:70,00 = 70 Coins</option>
<option value="8000">R$:80,00 = 80 Coins</option>
<option value="9000">R$:90,00 = 90 Coins</option>
<option value="10000">R$:100,00 = 100 Coins</option>

</select>
</td>
</tr>
</table>
<br />
<small><span style="color:red"><b>PARA AGILIZAR A ENTREGA DOS COINS ENVIAR NOME DO CHAR E COMPROVANTE PARA O E-MAIL:</b></span> <span style="color:blue">rjohncore@gmail.com</span></small>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>
</form>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</table>
';}
 




if($buy_tipo == 4) {
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
 


<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Picpay</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>


 				<div class="InnerTableContainer">
						<table style="width:101%;">
							<tbody>
							<tr>
							
							
							
								<td>
														
						
									<div class="TableShadowContainerRightTop">
										<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rt.gif);"></div>
									</div>
									
									<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rm.gif);">
										<div class="TableContentContainer">
											<table class="TableContent" width="100%" style="border:1px solid #faf0d7;background-color;#faf0d7;">
								 
												</tr>

		 



<td>

<p style="text-align: center;"><img src="https://i2.wp.com/naopiradesopila.com/wp-content/uploads/2017/08/PicPay_Logogrande.png?fit=410%2C200" alt="" width="269" height="131" /></p>
<p style="text-align: center;">Pague<span style="color: #339966;"> <strong> '. $config['site']['nomepicpay'] . ' </strong></span></p>

<p style="text-align: center;">Descrição: Envie o seu nome personagem / nome do server - no pagamento</p> 
<p style="text-align: center;">Abra o PicPay em seu telefone e escaneie o c&oacute;digo abaixo:</p>
<p style="text-align: center;">&nbsp;</p>

 '. $config['site']['linkqr'] . ' 
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<div style="text-align: center;">
<div class="payment-code" align="center">
<div id="">

</div>
</div>
</div>
<p class="scope-footer" style="text-align: center;">N&atilde;o tem conta no PicPay?&nbsp;<span style="color: #339966;"><u class="picpay-color link">Baixe o app gratuitamente</u></span></p>




</td>
</tr>
</TABLE>
<br />
<center>


		 

<td>
</td>
</tr>
</TABLE>
<br />
<center>
<a href="javascript:void();" onclick=location.href="index.php?subtopic=latestnews">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</center>';
}



if($buy_tipo == 3) {
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
 


<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Banco Caixa Economica</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>









<td><pre>' . $config['site']['CaixaCont'] . '</pre></td>
</tr>
</TABLE>
<br />
<center>
<a href="javascript:void();" onclick=location.href="index.php?subtopic=latestnews">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</center>';
}
if($buy_tipo == 2) {
$main_content .='
<b>PayPal</b><br /><br />
Valores:
<ul>
<li> 10 BRL ( <span style="color:green">10</span> Coins)</li>
<li> 20 BRL ( <span style="color:green">40</span> Coins)</li>
<li> 30 BRL ( <span style="color:green">60</span> Coins)</li>
<li> 40 BRL ( <span style="color:green">80</span> Coins)</li>
<li> 50 BRL ( <span style="color:green">100</span> Coins)</li>
<li> 60 BRL ( <span style="color:green">120</span> Coins)</li>
<li> 70 BRL ( <span style="color:green">140</span> Coins)</li>
<li> 80 BRL ( <span style="color:green">160</span> Coins)</li>
<li> 90 BRL ( <span style="color:green">180</span> Coins)</li>
<li> 100 BRL ( <span style="color:green">200</span> Coins)</li>


</ul>
<br />
 

<small><span style="color:red"><b>PARA AGILIZAR A ENTREGA DOS COINS ENVIAR NOME DO CHAR E COMPROVANTE PARA O E-MAIL:</b></span> <span style="color:blue">johncore@gmail.com</span></small>
<br />
<br />
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
 
</tr>

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Paypal</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>





<tr BGCOLOR='.$config['site']['darkborder'].'>



<td><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
 
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="'.$config['paypal']['email'].'">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Premium points">
<b>Account name/login:</b> <input type="text" name="custom" value="'.$account_logged->getCustomField("name").'" style="padding: 5px;" autocomplete="off" readonly="readonly">

<select name="amount">
<option value="10.00">10 BRL</option>
<option value="20.00">20 BRL</option>
<option value="30.00">30 BRL</option>
<option value="40.00">40 BRL</option>
<option value="50.00">50 BRL</option>
<option value="60.00">60 BRL</option>
<option value="70.00">70 BRL</option>
<option value="80.00">80 BRL</option>
<option value="90.00">90 BRL</option>
<option value="100.00">100 BRL</option>


</select>
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="currency_code" value="BRL">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="currency_code" value="BRL">
<input type="hidden" name="notify_url" value="'.$config['server']['url'].'/ipn.php">
<input type="hidden" name="return" value="'.$config['server']['url'].'">
<input type="hidden" name="rm" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="submit" value="Submit" style="padding: 5px;" />
</form></td>
</tr>
</TABLE>
';}
}
}












if ($action == "confirmacao"){
$main_content .='
<div id="ProgressBar">
<div id="Headline">Confirmação</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-green.gif">
<div class="StepText" style="font-weight: bold;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
Após confirmar esta etapa, você automaticamente aceitará os <a href="index.php?subtopic=termsdonate" target="_blank">Termos de Compra</a> do servidor <b>'.$config ['server']['serverName'].'</b>. <u>Leia e esteja de acordo com os termos.</u><br /><br />
<form target="pagseguro" method="post" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml">
<input type="hidden" name="email_cobranca" value="' . $config['pagseguro']['email']. '">
<input type="hidden" name="tipo" value="CP">
<input type="hidden" name="moeda" value="BRL">

<input type="hidden" name="item_id_1" value="1">
<input type="hidden" name="item_descr_1" value="' . $config['pagseguro']['produtoNome'] . '">

<input type="hidden" name="item_frete_1" value="0">
<input type="hidden" name="item_quant_1" value="1">
<input type="hidden" name="item_peso_1" value="0">
<input type="hidden" name="ref_transacao" value="' . $account_logged->getCustomField("name").'">
<input type="hidden" name="item_valor_1" value="'.$_POST['item_valor_1'].'">';

$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Points to buy</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="30%"><strong>Character Name:</strong></td>
<td><input type="hidden" value="' . $account_logged->getName() . '" name="account_namev" />' . $account_logged->getCustomField("name") . '</td>
</tr>
<tr>
<td><strong>Email:</strong></td>
<td>'.$_POST['emailv'].'</td>
</tr>
<tr>
<!--td><strong>Quant. Points:</strong></td>
<td>';
$main_content .= $_POST['item_valor_1'] * 2;
$main_content .='</td> 
</tr-->';
if ($bonusPoints >= 2){
$main_content .='
<tr>
<td><strong>Bônus Points:</strong></td>
<td>';
$main_content .= '<b>x&nbsp;'.$bonusPoints.'</b>';
$main_content .='</td>
</tr>';}
$main_content .='
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td style="border: 0px none;">

<div class="BigButton" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>

</form>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</center>
';}
if ($action == "realizado"){
$main_content .='
<div id="ProgressBar">
<div id="Headline">Pedido Realizado</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-green.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-green.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-green.gif">
<div class="StepText" style="font-weight: bold;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Pedido Realizado</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="8%" valign="top"><img src="images/account/account-status_green.gif" width="52" height="52" /></td>
    <td width="86%" align="left"><div style="font-weight:bold;font-size:16px; margin-bottom: -10px;">Pedido realizado com sucesso!</div><br />Recebemos seu pagamento com sucesso, dentro de 5 minutos seus pontos serão creditados. Agradecemos por sua colaboração!<br /><small>Att, Yours Community</small></td>
  </tr>
</table>
<br /><br />
<b style="color: red">Não tente nenhum tipo de fraude, pois sua conta será penalizada!</b>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/global/buttons/sbutton_over.gif);"></div>
<form action="index.php?subtopic=history" method="post">
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/global/buttons/_sbutton_submit.gif" type="image">
</form>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</center>';
}
?>