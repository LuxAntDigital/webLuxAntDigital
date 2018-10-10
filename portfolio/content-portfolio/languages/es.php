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

$language = "es"; //NO TOCAR ESTA LÍNEA - RIESGO DE MAL FUNCIONAMIENTO

//NAVBAR - Barra de navegación
//===============================================================================
$price = "PRECIO ACTUAL DE ALUX: $";
$welcome = "Bienvenido";
$buttonBuy = "COMPRAR TOKENS";
$buttonProfile = "PERFIL";
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
$loginTitle = "Inicia sesión por favor";
$email = "Dirección de Email";
$password = "Contraseña";
$alert = "Nombre de usuario o contraseña incorrectos";

$signInButton = "Iniciar Sesión";
$forgotAlert1 = "He olvidado mi contraseña,";
$forgotAlert2 = "enviar contraseña";

$registerAlert = "Aún no tengo cuenta";
$registerButton = "Registrarse como nuevo usuario";
//-------------------------------------------------------------------------------

//REGISTER - Iniciar sesión
//===============================================================================
$registerTitle = "Registrarse como nuevo usuario";
$name = "Nombre";
$subName = "Apellidos";
$email = "Dirección de Email";
$password = "Contraseña";
$repite = "Repetir contraseña";
$wallet = "Dirección de Ethereum";
$infoWallet = "La dirección no puede provenir de un exchange sino se podrían perder los tokens, una buena opción es ";
$termsText1 = "Estoy de acuerdo con ";
$termsText2 = "los términos y condiciones";
$privacyText = "la política de privacidad";
$registerButton = "Registrarse";

$haveAccount = "Ya dispongo de una cuenta";
//-------------------------------------------------------------------------------

//BUY TOKENS - Pasarela de Compra de tokens
//===============================================================================
$Buytitle = "COMPRAR TOKENS";
$labelNombre = "Nombre:";
$labelCorreo = "Email:";
$labelCartera = "Dirección Ethereum:";

$importantTitle = "IMPORTANTE";
$importantContent1 = "Recibirá los Tokens en ésta Wallet.";
$importantContent2 = "No utilice una dirección de Exchange o perderá sus fondos.";
$importantContent3 = "Una opción válida es usar ";

$LabelSoldTokens = "Cantidad de Tokens: ";
$labelCalculate = "CALCULAR:";
$labelPaymethod = "Método de pago";
$paypalLabel = "Con";

$textTerms1 = "He leído y acepto los ";
$linkTerms1 = "Términos y Condiciones";
$textTerms2 = " y la ";
$linkTerms2 = "Política de Privacidad";

$buyButton = "FINALIZAR COMPRA";

$buyInstructionsTitle = "Más información";
$buyInstructions1 = "La cantidad mínima de compra es de 400 tokens ALUX.";
$buyInstructions2 = "Recibirás tus tokens cuando ﬁnalice la preventa.";

$buttonLogout = "CERRAR SESIÓN";

//-------------------------------------------------------------------------------

//Buy - Paso final para realizar compra en bitcoin
//===============================================================================

$buyTextInstructions1 = "Por favor, envíe la cantidad indicada a la siguiente dirección";

$buyTextInstructions2 ="Los tokens ALUX quedarán registrados en su Porfolio personal una vez confirmado el pago. La operación se demorará entre 1-2 días.";

$amountSend1 = "Debe enviar la cantidad de";
$amountSend2 = " para obtener ";
$amountSend3 = " ALUX";

$finally = "Una vez finalizado el pago, por favor pulse en PROCESAR PAGO para confirmar el pago";
$cancelPay = "Si lo desea puede cancelar el pago pinchando en el botón CANCELAR COMPRA";

$buttonFinish = "PROCESAR PAGO";
$buttonCancel = "CANCELAR COMPRA";

//-------------------------------------------------------------------------------

//PROFILE - Perfil del Usuario
//===============================================================================
$profileTitle = "PERFIL";
$labelName = "Nombre: ";
$labelEmail = "Email: ";
$labelWallet = "Wallet: ";
$labelBalance = "Balance:";
$labelAdvantage = "Ventajas:";
$labelReferral = "Enlace de Referidos: ";

$buttonEditProfile = "Editar perﬁl";
$titleKYC = "Documentación KYC";
$contentKYC = " Por razones de seguridad, si ha contribuido con más de $ 5000, lea el siguiente informe y cargue los datos personales necesarios.";
$buttonKYC = "Subir datos personale";

//-------------------------------------------------------------------------------

//PROFILE MODAL - Cambiar perfil y subir documentos
//===============================================================================
$editProfile = "EDITAR PERFIL";
$editName = "Nombre Completo";
$emailAdress = "DIRECCIÓN DE EMAIL";
$emailValue = "Dirección de Email";
$editPassword = "CONTRASEÑA";
$passwordValue = "Contraseña";
$editWallet ="DIRECCIÓN ETHEREUM";
$walletValue = "Dirección Ethereum";

$textWallet = "No utilice una dirección de Exchange o perderá sus fondos. Una opción válida es usar ";

$buttonSave = "Guardar Cambios";

$uploadKYC = "Subir Documentación KYC";
$uploadID = "Subir su ID";
$uploadProof = "Subir su permiso de residencia";

$download1 = "Por favor haga clic";
$pdf = "spanish";
$download2 = " aquí";
$donwload3 = " para descargar el documento KYC.";
$uploadButton = "Subir";

$operationTitle = "TODAS LAS OPERACIONES";
$operation1 = "COMPRAR TOKENS";
$operation2 = "MÉTODOS DE PAGO";
$operation3 = "TOKENS VENDIDOS";
$operation4 = "FECHA";

//-------------------------------------------------------------------------------

//BALANCE - Historial de operaciones
//===============================================================================
$balanceTitle = "Historial de compras";

$invest = "Inversión";
$paymethod = "Método de pago";
$tokens = "Tokens comprados";
$date = "Fecha";

//-------------------------------------------------------------------------------

//FAQ - Preguntas y respuestas
//===============================================================================

$question1 = "¿QUÉ ES LUX ANT DIGITAL?";
$asked1 = "Lux Ant Digital se basa en tecnología ﬁnanciera, hemos desarrollado un proyecto que agrega valor al término innovación. Nuestra estructura se basa en el criterio de mejorar el sistema tecnológico ﬁnanciero y bancario y nuestro objetivo es crear una banca electrónica totalmente descentralizada, utilizando la tecnología Blockchain y Smart Contract.";
$asked1content1 = "La solicitud de licencias EDE (entidad bancaria electrónica) nos permitirá ofrecer una gran cantidad de servicios:";
$asked1content2 = "Plataforma de banca electrónica";
$asked1content3 = "Aplicación móvil";
$asked1content4 = "Tarjeta de Pago";
$asked1content5 = "Ahorrar dinero";
$asked1content6 = "Solicitar Micro-Préstamos Públicos y Privados";
$asked1content7 = "Enviar y recibir dinero";
$asked1content8 = "Conversión de Moneda";
$asked1content9 = "Red de cajeros automáticos propios y colaboración con tiendas";

$question2 = "¿QUÉ VENTAJAS OBTIENE AL INVERTIR EN TOKENS ALUX?";
$asked2 = "Si tiene tokens ALUX tendrá acceso prioritario a todos los productos lanzados en la plataforma ALUX BANK con estas ventajas:";

$question3 = "¿CUÁNDO RECIBIRÉ MIS TOKENS?";
$asked3content1 = "Todos los tokens comprados durante la preventa de septiembre, octubre y noviembre se asignarán cuando ﬁnalice la preventa.";
$asked3content2 = "";

$question4 = "¿DEBO VERIFICAR MI IDENTIDAD PARA PARTICIPAR EN EL ICO?";
$asked4 = "Debe aprobar el procedimiento KYC / AML si los fondos que usted aportó son superiores o equivalentes a $ 5000 en total. El procedimiento estará abierto en septiembre.";

$question5 = "¿CÓMO TRANSFIERO TOKENS ALUX A MI BILLETERA?";
$asked5 = "Podrá ver el procedimiento en el documento adjunto en nuestro blog.";

$question6 = "UNA VEZ INVERTIDO, ¿DÓNDE APARECERÁN TOKENS ALUX?";
$asked6 = "Una vez que se haya veriﬁcado y completado su transacción, sus tokens aparecerán en su porfolio personal. La actualización demora hasta una semana. Podrá almacenar sus tokens ALUX en cualquier dirección nativa de ERC20 (por ejemplo: MyEtherWallet, MetaMask).";

$question7 = "¿CUÁNDO SE EMITIRÁ EL TOKEN DE ALUX?";
$asked7 = "Los tokens ALUX se emitirán el 30 de noviembre.";

$question8 = "¿DÓNDE PUEDO LEER LA DOCUMENTACIÓN DE LUX ANT DIGITAL Y EL WHITEPAPER?";
$asked8 = "Puede descargarlos aquí:";
$asked8content2 = "https://www.luxantdigitalbank.es";
$asked8content3 = " en “Descargar nuestros documentos”";

$question9 = "¿QUÉ ES SMART CONTRACT?";
$asked9content1 = "Los contratos inteligentes son programas que ejecutan acuerdos registrados entre dos o más usuarios, están diseñados con una tecnología autónoma, es decir, que descentraliza la gestión que corresponde a las partes involucradas en el contrato. Un contrato inteligente representa la constante evolución de la tecnología, porque reemplaza al contrato convencional, su diseño autónomo hace de este tipo de acuerdos uno de los inventos más seguros, ya que permite a los 
inversores disponer de su capital en cualquier negocio que deseen ejecutar de acuerdo a los parámetros establecidos, ya que los contratos no se pueden modiﬁcar de ninguna manera.";
$asked9content2 = "Son una estrategia que construye acuerdos digitales, programados con una serie de códigos que no pueden ser descifrados o modiﬁcados de ninguna manera, porque su tecnología autónoma es responsable de asignar el cumplimiento de las variables, con el ﬁn de obtener los mejores resultados. Debido a esto, se incrementa la eﬁciencia, se obtiene la seguridad de los resultados, y se obtiene una reducción considerable en relación al costo de los contratos, esto se debe a que los convenios convencionales deben ser realizados por un abogado, quien describe las variables , personas involucradas, fechas programadas y más.";
$asked9content3 = "Al sustituir el manejo humano por la inteligencia de un sistema que tiene la capacidad de dar cuenta, determinar, asegurar de forma segura y automática las condiciones de un contrato a un costo menor, es posible determinar que la inteligencia artiﬁcial se ha convertido en una mejor opción.";

$question10 = "¿CUÁL ES EL LÍMITE MÍNIMO DE LA CAMPAÑA DE ICO?";

$question11 = "¿CUÁL ES EL LÍMITE MÁXIMO DE LA CAMPAÑA DE ICO?";

$question12 = "¿ES COMPATIBLE ALUX ERC20?";
$asked12 = "Sí. Es compatible con cualquier dirección nativa de ERC20.";

$question13 = "¿CUÁL ES EL SUMINISTRO TOTAL DE TOKENS ALUX";

$question14 = "¿CÓMO SE REGULA LA CRIPTOMONEDA RECOPILADA POR LAS AUTORIDADES FISCALES?";
$asked14 = "Todo depende de su país de residencia.";

$question15 = "¿PUEDO COMPRAR ALUX EN FRACCIONES?";
$asked15 = "No, los ALUX tokens no tienen decimales.";

$question16 = "DISTRIBUCIÓN DE LOS TOKENS";

$question17 = "¿DÓNDE PUEDO OBTENER MÁS INFORMACIÓN SOBRE EL PROYECTO ALUX BANK?";
$asked17content1 = "Visite nuestro sitio web ";
$asked17content2 = "Si tiene alguna otra pregunta, pregunte uniéndose a nuestro ";
$asked17content3 = "canal de Telegram";
//-------------------------------------------------------------------------------

//FAQ - Preguntas y respuestas
//===============================================================================

$referralTitle = "PRIMERA COMPRA";
$referralRegister = "Por favor complete el siguiente formulario para registrarse en su panel personal:";
$lname = "Apellidos";
$retype = "Repetir contraseña";
//-------------------------------------------------------------------------------


?>
