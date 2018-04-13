<?php
      session_start();
      $_SESSION['login'] = 'lol';
      $_SESSION['UserName'] = $username;
      $_SESSION['Active'] = 'True';
      //Define um tempo em Unixx para o Ultimo login do Usuário
      $_SESSION['Time'] = time();

  ?>
