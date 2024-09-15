<?php 
session_start();
require './conexao.php'; 


// CRUD DO USUÁRIO

// Criar Usuário
if (isset($_POST['create_usuario'])) {
    $nome = mysqli_real_escape_string($conection, trim($_POST['nomeUsuario']));
    $username = mysqli_real_escape_string($conection, trim($_POST['usernameUsuario']));
    $nasc = mysqli_real_escape_string($conection, trim($_POST['nascUsuario']));
    $email = mysqli_real_escape_string($conection, trim($_POST['emailUsuario']));
    $senha = mysqli_real_escape_string($conection, trim($_POST['senhaUsuario']));
    $area_interesse = mysqli_real_escape_string($conection, trim($_POST['areaInteresseUsuario']));
    $curriculo = mysqli_real_escape_string($conection, trim($_POST['curriculoUsuario']));
    $contato = mysqli_real_escape_string($conection, trim($_POST['contatoUsuario']));
    $foto = mysqli_real_escape_string($conection, trim($_POST['fotoUsuario']));
    $cidade = mysqli_real_escape_string($conection, trim($_POST['cidadeUsuario']));
    $estado = mysqli_real_escape_string($conection, trim($_POST['estadoUsuario']));
    $logradouro = mysqli_real_escape_string($conection, trim($_POST['logradouroUsuario']));
    $cep = mysqli_real_escape_string($conection, trim($_POST['cepUsuario']));
    $numero_logradouro = mysqli_real_escape_string($conection, trim($_POST['numeroLograUsuario']));
    $sobre = mysqli_real_escape_string($conection, trim($_POST['sobreUsuario']));
    $experiencia = mysqli_real_escape_string($conection, trim($_POST['experienciaUsuario']));
    $nome_competencia = mysqli_real_escape_string($conection, trim($_POST['nomeCompetenciaUsuario']));
    $formacao_competencia = mysqli_real_escape_string($conection, trim($_POST['formacaoCompetenciaUsuario']));
    $data_formacao = mysqli_real_escape_string($conection, trim($_POST['dataFormacaoCompetenciaUsuario']));

    $sql = "INSERT INTO tb_Usuario 
        (nomeUsuario, usernameUsuario, nascUsuario, emailUsuario, senhaUsuario, areaInteresseUsuario, curriculoUsuario, contatoUsuario, fotoUsuario, cidadeUsuario, estadoUsuario, logradouroUsuario, cepUsuario, numeroLograUsuario, sobreUsuario, experienciaUsuario, nomeCompetenciaUsuario, formacaoCompetenciaUsuario, dataFormacaoCompetenciaUsuario)
        VALUES 
        ('$nome', '$username', '$nasc', '$email', '$senha', '$area_interesse', '$curriculo', '$contato', '$foto', '$cidade', '$estado', '$logradouro', '$cep', '$numero_logradouro', '$sobre', '$experiencia', '$nome_competencia', '$formacao_competencia', '$data_formacao')";

    if (mysqli_query($conection, $sql)) {
        $_SESSION['mensagem'] = 'Usuário cadastrado com sucesso';
        header('Location: ./usuario.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Usuário não cadastrado';
        header('Location: ./usuario.php');
        exit;
    }
}

// Atualizar Usuário
if (isset($_POST['update_usuario'])) {
    $user_id = mysqli_real_escape_string($conection, $_POST['usuario_id']);
    $nome = mysqli_real_escape_string($conection, trim($_POST['nomeUsuario']));
    $username = mysqli_real_escape_string($conection, trim($_POST['usernameUsuario']));
    $nasc = mysqli_real_escape_string($conection, trim($_POST['nascUsuario']));
    $email = mysqli_real_escape_string($conection, trim($_POST['emailUsuario']));
    $senha = mysqli_real_escape_string($conection, trim($_POST['senhaUsuario']));
    $area_interesse = mysqli_real_escape_string($conection, trim($_POST['areaInteresseUsuario']));
    $curriculo = mysqli_real_escape_string($conection, trim($_POST['curriculoUsuario']));
    $contato = mysqli_real_escape_string($conection, trim($_POST['contatoUsuario']));
    $foto = mysqli_real_escape_string($conection, trim($_POST['fotoUsuario']));
    $cidade = mysqli_real_escape_string($conection, trim($_POST['cidadeUsuario']));
    $estado = mysqli_real_escape_string($conection, trim($_POST['estadoUsuario']));
    $logradouro = mysqli_real_escape_string($conection, trim($_POST['logradouroUsuario']));
    $cep = mysqli_real_escape_string($conection, trim($_POST['cepUsuario']));
    $numero_logradouro = mysqli_real_escape_string($conection, trim($_POST['numeroLograUsuario']));
    $sobre = mysqli_real_escape_string($conection, trim($_POST['sobreUsuario']));
    $experiencia = mysqli_real_escape_string($conection, trim($_POST['experienciaUsuario']));
    $nome_competencia = mysqli_real_escape_string($conection, trim($_POST['nomeCompetenciaUsuario']));
    $formacao_competencia = mysqli_real_escape_string($conection, trim($_POST['formacaoCompetenciaUsuario']));
    $data_formacao = mysqli_real_escape_string($conection, trim($_POST['dataFormacaoCompetenciaUsuario']));

    $sql = "UPDATE tb_Usuario 
        SET nomeUsuario = '$nome', usernameUsuario = '$username', nascUsuario = '$nasc', emailUsuario = '$email', senhaUsuario = '$senha', areaInteresseUsuario = '$area_interesse', curriculoUsuario = '$curriculo', contatoUsuario = '$contato', fotoUsuario = '$foto', cidadeUsuario = '$cidade', estadoUsuario = '$estado', logradouroUsuario = '$logradouro', cepUsuario = '$cep', numeroLograUsuario = '$numero_logradouro', sobreUsuario = '$sobre', experienciaUsuario = '$experiencia', nomeCompetenciaUsuario = '$nome_competencia', formacaoCompetenciaUsuario = '$formacao_competencia', dataFormacaoCompetenciaUsuario = '$data_formacao'
        WHERE idUsuario = '$user_id'";

    if (mysqli_query($conection, $sql)) {
        $_SESSION['mensagem'] = 'Usuário atualizado com sucesso';
        header('Location: ./usuario.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Usuário não atualizado';
        header('Location: ./usuario.php');
        exit;
    }
}

// Deletar Usuário
if (isset($_POST['delete_usuario'])) {
    $user_id = mysqli_real_escape_string($conection, $_POST['delete_usuario']);

    $sql = "DELETE FROM tb_Usuario WHERE idUsuario = '$user_id'";

    if (mysqli_query($conection, $sql)) {
        $_SESSION['mensagem'] = 'Usuário deletado com sucesso';
        header('Location: ./usuario.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Usuário não deletado';
        header('Location: ./usuario.php');
        exit;
    }
}



// CRUD DAS VAGAS

// Criar vaga
if (isset($_POST['create_vaga'])){
    $nomeVaga = mysqli_real_escape_string($conection, trim($_POST['nomeVaga']));
    $dataPublicacaoVaga = mysqli_real_escape_string($conection, trim($_POST['dataPublicacaoVaga']));
    $prazoVaga = mysqli_real_escape_string($conection, trim($_POST['prazoVaga']));
    $modalidadeVaga = mysqli_real_escape_string($conection, trim($_POST['modalidadeVaga']));
    $salarioVaga = mysqli_real_escape_string($conection, trim($_POST['salarioVaga']));
    $cidadeVaga = mysqli_real_escape_string($conection, trim($_POST['cidadeVaga']));
    $estadoVaga = mysqli_real_escape_string($conection, trim($_POST['estadoVaga']));
    $areaVaga = mysqli_real_escape_string($conection, trim($_POST['areaVaga']));
    $beneficiosVaga = mysqli_real_escape_string($conection, trim($_POST['beneficiosVaga']));
    $diferencialVaga = mysqli_real_escape_string($conection, trim($_POST['diferencialVaga']));
    $idEmpresa = mysqli_real_escape_string($conection, trim($_POST['idEmpresa']));
    $idStatusVaga = mysqli_real_escape_string($conection, trim($_POST['idStatusVaga']));

    $sql = "INSERT INTO tb_vaga (nomeVaga, dataPublicacaoVaga, prazoVaga, modalidadeVaga, salarioVaga, cidadeVaga, estadoVaga, areaVaga, beneficiosVaga, diferencialVaga, idEmpresa, idStatusVaga) 
            VALUES ('$nomeVaga', '$dataPublicacaoVaga', '$prazoVaga', '$modalidadeVaga', '$salarioVaga', '$cidadeVaga', '$estadoVaga', '$areaVaga', '$beneficiosVaga', '$diferencialVaga', '$idEmpresa', '$idStatusVaga')";

    if (mysqli_query($conection, $sql)) {
        $_SESSION['mensagem'] = 'Vaga cadastrada com sucesso';
        header('Location: ./vagas.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Vaga não cadastrada';
        header('Location: ./vagas.php');
        exit;
    }
}   

// Atualizar vaga
if (isset($_POST['update_vaga'])){
    $vaga_id = mysqli_real_escape_string($conection, $_POST['vaga_id']);
    $nomeVaga = mysqli_real_escape_string($conection, trim($_POST['nomeVaga']));
    $dataPublicacaoVaga = mysqli_real_escape_string($conection, trim($_POST['dataPublicacaoVaga']));
    $prazoVaga = mysqli_real_escape_string($conection, trim($_POST['prazoVaga']));
    $modalidadeVaga = mysqli_real_escape_string($conection, trim($_POST['modalidadeVaga']));
    $salarioVaga = mysqli_real_escape_string($conection, trim($_POST['salarioVaga']));
    $cidadeVaga = mysqli_real_escape_string($conection, trim($_POST['cidadeVaga']));
    $estadoVaga = mysqli_real_escape_string($conection, trim($_POST['estadoVaga']));
    $areaVaga = mysqli_real_escape_string($conection, trim($_POST['areaVaga']));
    $beneficiosVaga = mysqli_real_escape_string($conection, trim($_POST['beneficiosVaga']));
    $diferencialVaga = mysqli_real_escape_string($conection, trim($_POST['diferencialVaga']));
    $idEmpresa = mysqli_real_escape_string($conection, trim($_POST['idEmpresa']));
    $idStatusVaga = mysqli_real_escape_string($conection, trim($_POST['idStatusVaga']));

    $sql = "UPDATE tb_vaga 
            SET nomeVaga = '$nomeVaga', dataPublicacaoVaga = '$dataPublicacaoVaga', prazoVaga = '$prazoVaga', modalidadeVaga = '$modalidadeVaga', salarioVaga = '$salarioVaga', cidadeVaga = '$cidadeVaga', estadoVaga = '$estadoVaga', areaVaga = '$areaVaga', beneficiosVaga = '$beneficiosVaga', diferencialVaga = '$diferencialVaga', idEmpresa = '$idEmpresa', idStatusVaga = '$idStatusVaga' 
            WHERE idVaga = '$vaga_id'";

    if (mysqli_query($conection, $sql)) {
        $_SESSION['mensagem'] = 'Vaga atualizada com sucesso';
        header('Location: ./vagas.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Vaga não atualizada';
        header('Location: ./vagas.php');
        exit;
    }
} 

// Deletar vaga
if (isset($_POST['delete_vaga'])){
    $vaga_id = mysqli_real_escape_string($conection, $_POST['delete_vaga']);

    $sql = "DELETE FROM tb_vaga WHERE idVaga = '$vaga_id'";

    if (mysqli_query($conection, $sql)) {
        $_SESSION['mensagem'] = 'Vaga deletada com sucesso';
        header('Location: ./vagas.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Vaga não deletada';
        header('Location: ./vagas.php');
        exit;
    }
}
?>
