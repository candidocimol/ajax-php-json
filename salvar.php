<?php			
			if(isset($_POST['matricula'])){
				/*Validar as informações recebidas*/

				
				/*Formata a data*/ 
				$dataNasc=explode("-",$_POST['dataNasc']);
				$data=$dataNasc[2]."/".$dataNasc[1]."/".$dataNasc[0];
				/*string a ser escrita no arquivo*/
				$str_aluno=$_POST['nome']."|".$data."|".$_POST['matricula']."\n";
				$msg=null;
				/*Abre o arquivo para escrita*/
				if($file=fopen("dados_alunos.txt", 'a')){
					/*Escreve no arquivo*/
					if(fwrite($file, $str_aluno)){
						$msg['msg']= "Registro salvo com sucesso!";
						$msg['class']="success";
					}else{
						$msg[msg]="Falha ao salvar registro";
						$msg['class']="danger";
					}
					/*Fecha o arquivo*/
					fclose($file);
				}
				if(isset($msg)){
					echo json_encode($msg);
				}
			}else{
				echo "Não há registros";
			}
			
				
				
				

		?>