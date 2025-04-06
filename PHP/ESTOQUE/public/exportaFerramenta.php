<?php
$ferramenta=[
    'nome'=> $_POST ['nome'],
    'marca'=> $_POST ['marca'], 
    'valor'=> $_POST ['valor'], 
    'unidade'=> $_POST ['unidade']];
file_put_contents('../ferramenta.json',json_encode($ferramenta));