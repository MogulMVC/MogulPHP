<?php

echo 'This is from the default api';

echo "GET\n";
if(!empty($_GET)){
	var_dump($_GET);
}

echo "POST\n";
if(!empty($_POST)){
	var_dump($_POST);
}