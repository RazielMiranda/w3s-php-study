<h1>inserir matriculas</h1>
<h3>Selecione o aluno:</h3>

<form method="post" action="processa_matricula.php">

	<select name="escolhe_aluno">
	<?php
		while ($linha = mysqli_fetch_array($consulta_alunos)) {
			echo '<option value="'.$linha['ID_ALUNOS'].'">'.$linha['NOME_ALUNOS'].'</option>';
		}
	?>
	</select>






	<h3>Selecione o curso:</h3>

	<select name="escolhe_curso">
	<?php
		while ($linha = mysqli_fetch_array($consulta_cursos)) {
			echo '<option value="'.$linha['ID_CURSOS'].'">'.$linha['NOME_CURSOS'].'</option>';
		}
	?>
	</select>

	<br><br>

	<input type="submit" value="Matricular aluno">

</form>