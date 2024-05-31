<?php

  $dbHost = 'estacionamento-inteligente.chsee6scygfc.us-east-2.rds.amazonaws.com';
  $dbUsernamo = 'admin';
  $dbPassword = 'estacionamentoTCC2_puc';
  $dbName = 'estacionamento-inteligente';

  $conexao = new mysqli($dbHost,$dbUsernamo,$dbPassword,$dbName);

?>