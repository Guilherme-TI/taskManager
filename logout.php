<?php

require_once "class/Conexao.php";
session_destroy();
header("Location: index.php");