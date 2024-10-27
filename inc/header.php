<?php
defined('CONTROL') or die('Acesso inválido')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>UTFPR - PEI</title>
</head>

<body id="header">
    <header class="d-flex align-items-center px-5 py-1 bg-light border-bottom">
        <div class="col text-center">
            <div class="logo">
                <img src="../img/UTFPR_logo.png" alt="Logo UTFPR" height="60">
            </div>
        </div>
        <div class="col text-center">
            <div class="username fw-bold">
                Regina Almeida
            </div>
        </div>
        <div class="col text-center">
            <a href="?route=login">
                <button type="submit" class="btn btn-warning btn-sm">Desconectar</button>
            </a>
        </div>
    </header>