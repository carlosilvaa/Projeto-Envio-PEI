<?php
function apiRequest($url, $method = 'GET', $data = null, $headers = []) {
    // Função para consumir API
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Método
    switch (strtoupper($method)) {
        case 'POST':
            curl_setopt($ch, CURLOPT_POST, true);
            if ($data) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            }
            break;
        case 'PUT':
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            if ($data) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            }
            break;
        case 'DELETE':
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
            break;
    }

    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Erro: ' . curl_error($ch);
        return null;
    }

    curl_close($ch);

    return json_decode($response, true);
}

//função apenas para exemplo
function login($user, $password) { 
    $url = "http://localhost:8000/api/usuarios/login";
    $method = 'POST';
    $data = [
        'NOME' => $user, // ou email, vai depender de como vai ser feito no banco de dados
        'SENHA' => $password
    ];
    $headers = [
        'Content-Type: application/json',
        'Accept: application/json'
    ];
    // em suma, retorna um json_decode com as informações do servidor
    return apiRequest($url, $method, $data, $headers);
}
function register($user, $password, $email) { 
    $url = "http://localhost:8000/api/usuarios/cadastrar";
    $method = 'POST';
    $data = [
        'NOME_PROFIS' => $user, // ou email, vai depender de como vai ser feito no banco de dados
        'SENHA' => $password,
        'EMAIL' => $email
    ];
    $headers = [
        'Content-Type: application/json',
        'Accept: application/json'
    ];
    // em suma, retorna um json_decode com as informações do servidor
    return apiRequest($url, $method, $data, $headers);
}