<?php
/* SCRIPT DE CONTENIDO PARA LUX ANT DIGITAL
creado por Guillermo Granados Gómez 'W3G'.

MANUAL DE USO:
---------------

Este Script junto a otros más que se irán creando sirve para establecer el contenido
en el sitio web según el idioma que el usuario haya seleccionado, o desde el dominio que 
haya llegado. Si no tienes conocimientos previos sobre programación aquí tienes unos TIPS:
- Las variables son aquellas palabras que comienzan con $ como $language, estas palabras
sirven para establecer un espacio en memoria, en el que con el símbolo = llenamos con el texto 
que queremos que aparezca en el sitio web en este caso específico.
- El texto que aparece entre comillas " " ejemplo "Features", es el contenido que se muestra en
el sitio web, este texto cambiará según el archivo de idioma en el que nos encontremos.

AVISO FINAL
------------
A la hora de editar este archivo nunca y reitero NUNCA cambies el nombre de ninguna variable
(las que comienzan en $). Para editar este archivo solo se permite que cambies el texto entre
comillas "" al que apunta el archivo, ya que como hemos dicho antes es el texto que al modificar
como resultado se mostrará diferente en el sitio web.

BONUS TRACK
------------
Cualquier cambio de nombre de variables (las que empiezan por $), ya sea que quieras poner €
en vez de $ porque creas que eso importa o cambiar $language por $idioma provocará que el sitio
web principal no encuentre la variable y por tanto no muestre ese texto. 

Cada vez que se carga el sitio web, importa los datos de este u otro archivo de contenido,
para saber donde va cada cosa necesita reconocer la variable por ejemplo: $headTitle, si no 
encuentra esta variable, no se mostrará texto o se verá un mensaje de error en su lugar.

La edición puede comenzar a partir de la línea 40 en adelante.

*/

$language = "ru"; //NO TOCAR ESTA LÍNEA - RIESGO DE MAL FUNCIONAMIENTO

//NAVBAR - Barra de navegación
//===============================================================================
$price = "CURRENT PRICE ALUX: $";
$welcome = "Welcome";
$buttonBuy = "BUY TOKENS";
$buttonProfile = "PROFILE";
$buttonBalance = "BALANCE";
//-------------------------------------------------------------------------------

//HEAD - Cabecera con metas y Título que muestra el navegador
//===============================================================================
$metaDescription = "We are the first ICO that seeks the alternative to traditional banking, we fight for the right of all.
Lux Ant Digital gives back the power to the people with the Blockchain and Smart Contract technology.
We work to live, we do not live to work!";
$metaKeywords = "token, buy tokens, bank, cryptocurrency, ICO, whitepaper, Alux, Alux Bank, Lux, Lux Ant Digital, Lux Ant Digital Bank, Investment, pre-sale, presale, Cryptocurrency Bank";
$headTitle = "Alux Bank ICO - The Decentralized future of the new Electronic Banking";

//-------------------------------------------------------------------------------

//LOGIN - Iniciar sesión
//===============================================================================
$loginTitle = "Please sign in";
$email = "Email address";
$password = "Password";
$alert = "Nombre de usuario o contraseña incorrectos";

$signInButton = "Sign in";
$forgotAlert1 = "I forgot my password,";
$forgotAlert2 = "send my password";

$registerAlert = "I don't have an account";
$registerButton = "Register a new user";
//-------------------------------------------------------------------------------

//REGISTER - Iniciar sesión
//===============================================================================
$registerTitle = "Register a new user";
$name = "First name";
$subName = "Last name";
$email = "Email address";
$password = "Password";
$repite = "Repite Password";
$wallet = "Ethereum Wallet";
$infoWallet = "The Wallet can’t be of exchange if so you will lose your funds,you can download one at ";
$termsText1 = "I agree to the ";
$termsText2 = "terms and conditions";
$privacyText = "privacy policy";
$registerButton = "Register";

$haveAccount = "I have an account";
//-------------------------------------------------------------------------------

//BUY TOKENS - Pasarela de Compra de tokens
//===============================================================================
$Buytitle = "КУПИТЬ ТОКEНOВ";
$labelNombre = "Имя:";
$labelCorreo = "Электронная почта:";
$labelCartera = "Aдрес Ethereum :";

$importantTitle = "Важно";
$importantContent1 = "Bы получите токeнoв в этом кошельке. ";
$importantContent2 = " Hе используйте exchange-адрес, иначе вы потеряете средства.";
$importantContent3 = "Допустимым является использование ";

$LabelSoldTokens = "Количество токенов: ";
$labelCalculate = "РАСЧЕТ:";
$labelPaymethod = "Способ оплаты";
$paypalLabel = "With";

$textTerms1 = "Я прочитал и принял ";
$linkTerms1 = "УСЛОВИЯ И ПОЛОЖЕНИЯ";
$textTerms2 = " и ";
$linkTerms2 = "ПОЛИТИКУ КОНФИДЕНЦИАЛЬНОСТИ";

$buyButton = "ПОКУПАЙТЕ ТОКEНOВ";

$buyInstructionsTitle = "Дополнительная информация";
$buyInstructions1 = "Минимальная сумма покупки 400 токeнoв ALUX. ";
$buyInstructions2 = "Вы получите свои жетоны, когда препродак закончится.";

$buttonLogout = "близко сессия";

//-------------------------------------------------------------------------------

//Buy - Paso final para realizar compra en bitcoin
//===============================================================================

$buyTextInstructions1 = "Please send the amount indicated to the following address";

$buyTextInstructions2 ="The ALUX tokens will be registered in your Dashboard once the payment is confirmed. The operation may b take between 1-2 days.";

$amountSend1 = "You must send the amount of";
$amountSend2 = " to get ";
$amountSend3 = " ALUX";

$finally = "Once the payment is finished, please press PROCESS PAYMENT to confirm the payment";
$cancelPay = "If you want, you can cancel the payment by pressing in CANCEL PURCHASE button";

$buttonFinish = "Finish Purchase";
$buttonCancel = "Cancel Purchase";

//-------------------------------------------------------------------------------

//PROFILE - Perfil del Usuario
//===============================================================================
$profileTitle = "ПРОФИЛЬ";
$labelName = "Name: ";
$labelEmail = "Email: ";
$labelWallet = "бумажник: ";
$labelBalance = "Balance:";
$labelAdvantage = "Advantage:";
$labelReferral = "Ссылка ссылки: ";

$buttonEditProfile = "Изменить профиль";
$titleKYC = "KYC документация";
$contentKYC = " По соображениям безопасности, если вы внесли более 5000 долларов США, прочитайте следующий отчет и загрузите необходимую личную информацию.";
$buttonKYC = "Нагрузка личная информация";

//-------------------------------------------------------------------------------

//PROFILE MODAL - Cambiar perfil y subir documentos
//===============================================================================
$editProfile = "EDIT PROFILE";
$editName = "Full name";
$emailAdress = "EMAIL ADDRESS";
$emailValue = "Email address";
$editPassword = "PASSWORD";
$passwordValue = "Password";
$editWallet ="ETHEREUM WALLET";
$walletValue = "Ethereum Wallet";

$textWallet = "Don’t use the wallet of an exchange. A valid option is to use ";

$buttonSave = "Save changes";

$uploadKYC = "Upload KYC documentation";
$uploadID = "Upload your ID";
$uploadProof = "Upload proof of residency";

$download1 = "Please clic ";
$pdf = "english";
$download2 = " here";
$donwload3 = " for download the KYC document.";
$uploadButton = "Upload";

$operationTitle = "ALL OPERATIONS";
$operation1 = "INVEST";
$operation2 = "PAYMETHOD";
$operation3 = "TOKENS BUY";
$operation4 = "DATE";

//-------------------------------------------------------------------------------

//BALANCE - Historial de operaciones
//===============================================================================
$balanceTitle = "The purchase confirmation will be displayed here";

$invest = "INVEST";
$paymethod = "PAYMETHOD";
$tokens = "TOKENS BUY";
$date = "DATE";

//-------------------------------------------------------------------------------

//FAQ - Preguntas y respuestas
//===============================================================================

$question1 = "ЧТО ТАКОЕ LUX ANT DIGITAL?";
$asked1 = "Lux Ant Digital основана на финансовой технологии, мы разработали проект, который добавляет ценность термина «инновации». Наша структура основана на критерии совершенствования финансовой и банковской технологической системы, и наша цель - создать полностью децентрализованное электронное банковское обслуживание, используя технологию Blockchain и Smart Contract.";
$asked1content1 = "Лицензионное приложение EDE (электронное банковское подразделение) позволит нам предложить большое количество услуг:";
$asked1content2 = "Электронная банковская платформа";
$asked1content3 = "Мобильное приложение";
$asked1content4 = "Платежная карточка";
$asked1content5 = "Экономьте деньги";
$asked1content6 = "Запросить микро-государственные и частные кредиты";
$asked1content7 = "Отправлять и получать деньги";
$asked1content8 = "Конвертация валют";
$asked1content9 = "Сеть собственных банкоматов и сотрудничество с магазинами";

$question2 = "ПРЕИМУЩЕСТВО НАЛИЧИЯ ALUX ТОКЕНОВ?";
$asked2 = "Если у вас есть токены ALUX, у вас будет приоритетный доступ ко всем продуктам, запущенным на платформе ALUX BANK, с такими преимуществами:";

$question3 = "КОГДА Я ПОЛУЧУ СВОИ ЖЕТОНЫ?";
$asked3content1 = "Все жетоны, купленные в течение сентябрьской, октябрьской и ноябрьской предпродажи, будут назначены, когда предпродажи закончится.";
$asked3content2 = "";

$question4 = "Нужно ли мне проверять свою личность для участия в ICO?";
$asked4 = "Вы должны пройти процедуру KYC / AML, если предоставленные вами средства превышают или эквивалент 5000 долларов США. Процедура будет открыта в сентябре.";

$question5 = "КАК ПЕРЕНЕСТИ ТОКЕНЫ ALUX НА МОЙ КОШЕЛЕК?";
$asked5 = "Вы можете увидеть процедуру в прилагаемом документе в нашем блоге.";

$question6 = "ПОСЛЕ ДОСТАВКИ, ГДЕ ПОЯВЯТСЯ ТОКЕНЫ ALUX?";
$asked6 = "Как только ваша транзакция будет проверена и завершена, ваши токены будут отображаться в вашем личном профиле. Обновление занимает до недели. Вы можете хранить токены ALUX в любом из ваших собственных адресов ERC20 (например: MyEtherWallet, MetaMask).";

$question7 = "КОГДА БУДЕТ ВЫДАН ТОКЕН ALUX?";
$asked7 = "ALUX Tokens выйдет 30 ноября.";

$question8 = "ГДЕ Я МОГУ ПРОЧИТАТЬ ДОКУМЕНТАЦИЮ И WHITEPAPER LUX ANT DIGITAL?";
$asked8 = "Вы можете скачать их здесь : ";
$asked8content2 = "https://www.luxantdigitalbank.ru";
$asked8content3 = " в разделе “Скачать наши документы”";

$question9 = "ЧТО ТАКОЕ SMART CONTRACT?";
$asked9content1 = "Смарт-контракты - это программы, которые выполняют зарегистрированные соглашения между двумя или более брокерами, разработаны с автономной технологией, то есть с децентрализованным управлением, которое соответствует сторонам, участвующим в контракте. Интеллектуальный контракт представляет собой постоянную эволюцию технологий, поскольку он заменяет обычный контракт, его автономный дизайн делает этот тип соглашений одним из самых безопасных изобретений, поскольку он позволяет инвесторам иметь свой капитал в любом бизнесе, который они хотят выполнить. в соответствии с установленными параметрами, поскольку контракты никоим образом не могут быть изменены.";
$asked9content2 = "Они представляют собой стратегию, которая строит цифровые соглашения, запрограммированные с помощью ряда кодов, которые не могут быть расшифрованы или изменены каким-либо образом, поскольку их автономная технология отвечает за назначение соответствия переменных, чтобы получить наилучшие результаты. В связи с этим повышается эффективность, обеспечивается безопасность результатов и достигается значительное снижение стоимости контрактов, это связано с тем, что обычные соглашения должны быть сделаны адвокатом, который описывает переменные , вовлеченные люди, запланированные даты и многое другое.";
$asked9content3 = "Заменяя человеческое управление интеллектом системы, которая имеет возможность учитывать, определять, надежно и автоматически защищать условия контракта по более низкой цене, можно определить, что искусственный интеллект стал лучше вариант.";

$question10 = "ЧТО ТАКОЕ МИНИМАЛЬНАЯ ОГРАНИЧЕННОСТЬ КАМПАНИИ ICO?";

$question11 = "ЧТО ТАКОЕ МАКСИМАЛЬНАЯ ОГРАНИЧЕННОСТЬ КАМПАНИИ ICO?";

$question12 = "СОВМЕСТИМ ЛИ ALUX ERC20?";
$asked12 = "Да. Он совместим с любым собственным адресом ERC20.";

$question13 = "ЧТО ТАКОЕ СУЩЕСТВЕННОЕ ПОСТАВЛЕНИЕ ТОКЕНСОВ АЛЮКС?";

$question14 = "КАК СОБИРАЕМАЯ КРИПТОВАЛЮТА РЕГУЛИРУЕТСЯ НАЛОГОВЫМИ ОРГАНАМИ?";
$asked14 = "Все зависит от страны проживания.";

$question15 = "МОГУ ЛИ Я ПОКУПАТЬ ЖЕТОНЫ ВО ФРАКЦИЯХ?";
$asked15 = "Нет, токены ALUX не имеют десятичных знаков.";

$question16 = "РАСПРЕДЕЛЕНИЕ ТОКЕНОВ";

$question17 = "ГДЕ Я МОГУ УЗНАТЬ БОЛЬШЕ О ПРОЕКТЕ ALUX BANK?";
$asked17content1 = "Посетите наш веб-сайт ";
$asked17content2 = "Если у вас есть другие вопросы, пожалуйста, обратитесь, присоединившись к нашему ";
$asked17content3 = "каналу Telegram";
//-------------------------------------------------------------------------------

//FAQ - Preguntas y respuestas
//===============================================================================

$referralTitle = "FIRST BUY";
$referralRegister = "Please complete the following form for create your personal account:";
$lname = "Last name";
$retype = "Retype Password";
//-------------------------------------------------------------------------------


?>
