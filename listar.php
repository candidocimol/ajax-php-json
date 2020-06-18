<?php 

/*Abrir arquivo para leitura*/
if($file=fopen("dados_alunos.txt", 'r')){
	while($linha=fgets($file)){
		/*Utilizar expressão regular para validar conteudo lido*/
		$linha=explode("|",$linha);									
		$aluno['nome']=$linha[0];
		$aluno['dataNasc']=$linha[1];
		$aluno['matricula']=$linha[2];
		$alunos[]=$aluno;
	}
	/*Fecha o arquivo*/
	fclose($file);

	echo json_encode($alunos);
}