<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		//*** SMTP *** //

		 require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		 const HOST = 'smtp.mail.ru';
		 const LOGIN = 'ubayd2000@mail.ru';
		  const PASS = 'Vivolente56378';
		  const PORT = '465';

		//*** /SMTP *** //
   
    const SENDER = 'ubayd2000@mail.ru';
    const CATCHER = 'ubayd200@gmail.com';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    