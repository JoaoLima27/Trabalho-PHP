<?php  
    require_once "Aluno.php";

    //Instanciando a classe Aluno
    $novoAluno = new Aluno;//criando o objeto $novoAluno

    echo "Antes do uso dos métodos get <br><br>";
    var_dump($novoAluno);
    
    //Atribuiu valores aos atributos do objeto $novoAluno
    $novoAluno->setMatricula("12345");
    $novoAluno->setNome("Luciene Motta");
    $novoAluno->setEmail("luciene.motta@santoinacio-rio.com.br");
    $novoAluno->setTelefone("21998761234");
    $novoAluno->setTurno("Noturno");

    echo "<br><br>Depois do uso dos métodos get <br><br>";
    var_dump($novoAluno);

    //----- Testes aula 13/11 -----
    echo "<hr>";
    $turno = $novoAluno->verificarTurnoNoturno();
    if ($turno){
        echo "O aluno é do turno NOTURNO";
    }else{
        echo "O aluno não é do turno NOTURNO";
    }
    
