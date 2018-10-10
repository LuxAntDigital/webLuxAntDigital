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

$language = "en"; //NO TOCAR ESTA LÍNEA - RIESGO DE MAL FUNCIONAMIENTO

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
$alert = "Incorrect Username or Password";

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
$infoWallet = "Do not use the wallet of an exchange.If you do, you will loose your funds. You need an erc20 compatible wallet. You can download one here: ";
$termsText1 = "I agree to the ";
$termsText2 = "terms and conditions";
$privacyText = "privacy policy";
$registerButton = "Register";

$haveAccount = "I have an account";
//-------------------------------------------------------------------------------


//BUY TOKENS - Pasarela de Compra de tokens
//===============================================================================
$Buytitle = "BUY TOKENS";
$labelNombre = "Name:";
$labelCorreo = "Email:";
$labelCartera = "Ethereum Wallet:";

$importantTitle = "IMPORTANT";
$importantContent1 = "In this direction you will receive your tokens. ";
$importantContent2 = "Do not use the wallet of an exchange.If you do, you will loose your funds. You need an erc20 compatible wallet.";
$importantContent3 = "You can download one: ";

$LabelSoldTokens = "Number of tokens to buy: ";
$labelCalculate = "CALCULATE:";
$labelPaymethod = "Payment Method";
$paypalLabel = "With";

$textTerms1 = "I have read and accept the";
$linkTerms1 = "Terms &amp; Conditions";
$textTerms2 = " and the ";
$linkTerms2 = "Privacy Policy";

$buyButton = "FINISH PURCHASE";

$buyInstructionsTitle = "More Info";
$buyInstructions1 = "The minimum purchase is 400 ALUX tokens.";
$buyInstructions2 = "You will receive your tokens when the pre-sale ends.";

$buttonLogout = "LOGOUT";

//-------------------------------------------------------------------------------

//Buy - Paso final para realizar compra en bitcoin
//===============================================================================

$buyTextInstructions1 = "Please send the amount indicated to the following address";

$buyTextInstructions2 ="The ALUX tokens will be registered in your Dashboard once the payment is confirmed. The operation may be take between 1-2 days.";

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
$profileTitle = "PROFILE";
$labelName = "Name: ";
$labelEmail = "Email: ";
$labelWallet = "Wallet: ";
$labelBalance = "Balance:";
$labelAdvantage = "Advantage:";
$labelReferral = "Referral link: ";

$buttonEditProfile = "Edit Profile";
$titleKYC = "KYC Documentation";
$contentKYC = "For security reasons, if you have contributed more than $5000, read the following report, and upload the necessary personal data.";
$buttonKYC = "Upload personal data";

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

$question1 = "What is Lux Ant Digital?";
$asked1 = "Lux Ant Digital is based on financial technology, we have developed a project adding value to the term innovation. Our structure is based on the criterion of improving the financial and banking technological system and we aim to create a totally decentralized electronic banking, using the Blockchain and Smart Contract technology.";
$asked1content1 = "The application for EDE licenses (electronic banking entity) will allow us to offer a multitude of services:";
$asked1content2 = "Electronic Banking Platform";
$asked1content3 = "App Mobile";
$asked1content4 = "Payment Card";
$asked1content5 = "Save Money";
$asked1content6 = "Request Micro-Loans Public &amp; Private";
$asked1content7 = "Send &amp; Receive Money";
$asked1content8 = "Currency Conversion";
$asked1content9 = "Own ATM Network &amp; Collaboration with Stores";

$question2 = "What are the advantages of investing in the ALUX token?";
$asked2 = "If you have ALUX tokens will have priority access to all products launched on the ALUX BANK platform with this advantages:";

$question3 = "When will I receive my tokens?";
$asked3content1 = "All the tokens bought during the Pre Sale of September, October and November, will be allocated when the pre sale ﬁnalized.";
$asked3content2 = "";

$question4 = "Do I need to verify my identity to participate in the ICO?";
$asked4 = "You must pass the KYC/AML procedure if the funds you contributed are higher than or equivalent to $ 5000 in total. The procedure will be open on September. ";

$question5 = "How do I transfer ALUX tokens to my wallet?";
$asked5 = "You can see the process in the attached document in our blog. ";

$question6 = "Once invested, where will my tokens appear?";
$asked6 = "Once your transaction has been veriﬁed and completed, your tokens will appear on your dashboard. The update takes up to a week. You can store your ALUX tokens in any native address of ERC20 (for example: MyEtherWallet, MetaMask). ";

$question7 = "When will the ALUX token be issued?";
$asked7 = "ALUX Tokens will be issued on 30th November.";

$question8 = "Where can I read Lux Ant Digital essay, documentation and white paper?";
$asked8 = "You can download those here  ";
$asked8content2 = "https://www.luxantdigitalbank.com";
$asked8content3 = " in “Download our Documents”";

$question9 = "What are smart contract?";
$asked9content1 = "Smart contracts are programs that execute registered agreements between two or more brokers, they are designed with an autonomous technology, that is, that decentralizes the management that corresponds to the parties involved with the contract. A smart contract represents the constant evolution of technology, this is because it replaces the conventional contract, its autonomous design makes this type of agreement one of the safest inventions, because it allows investors to dispose of their capital in any business they wish to execute according to the established parameters, since the contracts can not be modified in any way.";
$asked9content2 = "They are a strategy that builds digital agreements, programmed with a series of codes that cannot be deciphered or changed in any way, because their autonomous technology is responsible for assigning compliance with the variables, in order to obtain the best results. Due to this, the efficiency is increased, the security of the results, and a considerable reduction in relation to the cost of the contracts is obtained, this is due to the fact that conventional agreements must be made by a lawyer, who describes the variables, people being involved, scheduled dates and more.";
$asked9content3 = "By substituting human management for the intelligence of a system that has the ability to account for, determine, securely and automatically secure the conditions of a contract at a lower cost, it is possible to determine that artificial intelligence has become a better option.";

$question10 = "What is the soft cap of the ICO’s campaign?";

$question11 = "What is the hard cap of the ICO’s campaign?";

$question12 = "Is ALUX ERC20 compliant?";
$asked12 = "Yes. It is compliant with any ERC20 native address.";

$question13 = "What is the total supply of ALUX tokens?";

$question14 = "How is the collected cryptocurrency regulated by the tax authorities?";
$asked14 = "That all depends on your country of residency.";

$question15 = "Can I buy tokens in fractions?";
$asked15 = "No, ALUX token don’t have decimals.";

$question16 = "Token Distribution";

$question17 = "Where can I learn more about the ALUX BANK Project?";
$asked17content1 = "Please visit our website ";
$asked17content2 = "If you have any other question, please ask by joining our ";
$asked17content3 = "Telegram channel";
//-------------------------------------------------------------------------------

//FAQ - Preguntas y respuestas
//===============================================================================

$referralTitle = "FIRST BUY";

//-------------------------------------------------------------------------------


?>
