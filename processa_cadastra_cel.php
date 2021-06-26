<?php
	session_start();

	$conectar = mysqli_connect ("localhost", "root", "", "themax");

	$numero_serie = $_POST["numero_serie"];
	$marca = $_POST["marca"];
	$nome = $_POST["nome"];
    $processador = $_POST["processador"];
    $memoria = $_POST["memoria"];
    $armazenamento = $_POST["armazenamento"];
    $camera_frontal = $_POST["camera_frontal"];
    $camera_traseira = $_POST["camera_traseira"];
    $sistema = $_POST["sistema"];
    $bateria = $_POST["bateria"];
	$preco = $_POST["preco"];
	$foto = $_POST["foto"];

	$foto_nome = "img/".$foto;
	move_uploaded_file($foto["tmp_name"], $foto_nome);

	

	$sql_consulta = "SELECT numero_serie_cel FROM celular
                    	WHERE numero_serie_cel = '$numero_serie'";

	$resultado_consulta = mysqli_query($conectar, $sql_consulta);

	$linhas = mysqli_num_rows($resultado_consulta);

	if ($linhas == 1) {

    echo "<script> alert ('Celular já cadastrado. Tente outro!'); </script>";
    echo "<script> location.href = ('cadastra_cel.php'); </script>";
	} else {	
		$sql_cadastrar = "INSERT INTO celular (numero_serie_cel, 
												marca_cel, 
												nome_cel, 
												processador_cel,
												memoria_cel,
												armazenamento_cel,
												camera_frontal_cel,
												camera_traseira_cel,
												so_cel,
												bateria_cel, 
												preco_cel,
												foto_cel) 
						VALUES 			   ('$numero_serie',
												'$marca', 
												'$nome',
												'$processador',
												'$memoria',
												'$armazenamento',
												'$camera_frontal',
												'$camera_traseira',
												'$sistema',
												'$bateria',
												'$preco',
												'$foto')";
												
		$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);
		
		if ($sql_resultado_cadastrar == true) { 	
			echo "<script>
					alert ('$marca $nome cadastrado com sucesso') 
				</script>";
			echo "<script>
					location.href = ('lista_cel.php') 
				</script>";		
		}
		else { 	
			echo "<script> 
					alert ('ocorreu um erro no servidor ao 
												tentar cadastrar') 
				</script>";
			
			echo "<script> 
					location.href = ('cadastra_cel.php') 
				</script>";
		}
	}	
?>