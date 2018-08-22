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



//HEAD - Cabecera con metas y Título que muestra el navegador
//===============================================================================
$metaDescription = "Somos la primera ICO que busca la alternativa a la banca tradicional, luchamos por el derecho de todos. Lux Ant Digital devuelve el poder a las personas con la tecnología Blockchain y Smart Contract. ¡Trabajamos para vivir, no vivimos para trabajar!";
$metaKeywords = "token, comprar tokens, banca, cryptomonedas, ICO, whitepaper, Alux, Lux, Lux Ant Digital, Lux Ant Digital Bank, comprar tokens, pre-sale, presale, banca de criptomonedas";
$headTitle = "ICO Lux Ant Digital - El futuro descentralizado del la nueva Banca Electrónica";

//-------------------------------------------------------------------------------

//NAVBAR - Barra de navegación del sitio web
//===============================================================================
$features = "Inicio";
$services = "Servicios";
$roadmap = "Roadmap";
$about = "Nosotros";
$team = "Equipo";
$tokens = "Tokens";
$blog = "Blog";
$contact = "Contacto";

$buybutton = "COMPRAR TOKENS";

//-------------------------------------------------------------------------------

//BANNER - Página que se muestra tras la carga del sitio
//===============================================================================
$titulo = "LA NUEVA BANCA ELECTRÓNICA SOBRE TECNOLOGÍA BLOCKCHAIN";
$subtitulo = "Somos la primera ICO que busca la alternativa a la banca tradicional, luchamos por el derecho de todos. Lux Ant Digital devuelve el poder a las personas con la tecnología Blockchain y Smart Contract.
¡Trabajamos para vivir, no vivimos para trabajar!";
$cabeceraBotones = "Descárga la documentación de la ICO";
$playVideo = "REPRODUCIR VIDEO";
$referral = "Referidos";

$countdownTitle = "0.04€!! La pre venta de Tokens comienza en";
$capital = "soft cap 10M - hard cap 25M";
$promotion = "Comprar Tokens en Agosto te costará solo 0.04€!!";
$smallLetters = "Tokens vendidos: 20.030.000";
$payMethod = "ACEPTAMOS LOS SIGUIENTES MÉTODOS DE PAGO";

//-------------------------------------------------------------------------------

//FEATURES - Las ventajas de tener Tokens ALUX
//===============================================================================
$benefictsTitle =  "Beneﬁcios de nuestras soluciones";
$benefictsSubtitle = " El desarrollo del proyecto “ALUX BANK” para la creación de una banca de criptomonedas te aportará muchas ventajas al comprar tokens";

$electronicBankingPlatform = "Banca Electrónica";
$contentElectronicBankingPlatform = "Podrás entablar estrechas relaciones con tus clientes, proveedores, familiares, etc, realizando compras, ventas, envíos de dinero y/o activos digitales, recarga de tarjeta prepago o cualquier servicio de banca ofrecido reduciendo cualquier coste de servicios con la tecnología Smart Contract.";

$appMobile = "App Móvil";
$contentAppMobile = "Mediante la APP “Alux Bank”, se podrán realizar las gestiones de envío de dinero, ahorro, cobro de nóminas u otros pagos, conversión de divisas, compras on-line y solicitud de micro-préstamos, entre otras.";

$paymentCard = "Tarjeta de pago";
$contentPaymentCard = "La innovadora emisión de tarjeta de débito o tarjeta de prepago, nos permite dar el enfoque de diseñar una tarjeta simple pero con funcionalidad, sin necesidad de un chip y un pin, utilizando un simple código “QR” que la vincule directamente con su cuenta de banco “Alux Bank”.";

$saveMoney = "Ahorro";
$contentSaveMoney = "Con la facilidad de acceso a una cuenta bancaria ofrecida por “Alux Bank”, podrá comenzar a ahorrar y ver cómo su dinero crece día a día en nuestra banca de criptomonedas.";

$microLoans = "Micro-préstamos públicos y privados";
$contentMicroLoans = "Los usuarios interesados en prestar su capital a otros usuarios para poder tramitar el préstamo o invertir en algún proyecto publicado, podrá hacerlo mediante la tecnología Smart Contract integrada dentro de la plataforma de Alux Bank.";

$sendMoney = "Enviar y recibir dinero";
$contentSendMoney = "Con la plataforma de Lux Ant Digital presentada como una Banca Electrónica, podrás entablar estrechas relaciones con tus clientes, proveedores, familiares, etc, y controlar la experiencia de compra, venta, envío de dinero y/o activos digitales desde el inicio de sesión hasta el ﬁnal de la transacción.";

$currencyConversion = "Conversión de divisas";
$contentCurrencyConversion = "Desde nuestros cajeros, comercios colaboradores o APP móbil de Alux Bank, podrás realizar conversiones de cualquier divisa, al instante y con la mínima comisión.";

$ownATMNetwork = "Red de cajeros propios y comercios colaboradores";
$contentOwnATMNetwork = "La idea principal para provocar el crecimiento de la red de Alux Bank y así promover su uso, es la de cerrar contratos con comercios y empresas colaboradoras para la emisión de tarjetas y recargas de las mismas, e incluso de que dispongan de nuestros cajeros en sus locales.";

//-------------------------------------------------------------------------------

//SERVICES - Servicios que ofrecerá ALUX Bank
//===============================================================================
$servicesTitle = "Servicios actuales";
$servicesSubtitle = "Al comprar tokens podrás beneficiarte de estos servicios tras finalizar la ICO";

$menuCustody = "Custodia";
$menuTrading = "Bot de Trading";
$menuConsultory = "Consultoría y Asesoría ";
$menuManufacture = "Fabricación de Cajeros";
$menuTokenDevelopment = "Desarrollo de Tokens";

$custodyPoint1 = "Propiedad: Su producto es de su propiedad, no forma parte del balance de Lux Ant Digital, y no será prestado, alquilado, ni utilizado como garantía de ninguna operación. ";
$custodyPoint2 = "Seguridad: Parte de las claves de sus activos digitales quedarán depositadas, en cajas de entidades bancarias, aumentando así la seguridad y conﬁanza con el cliente. ";
$custodyPoint3 = "Nominalidad: Lux Ant Digital custodia los productos exactos que usted ha depositado, comprometiéndose a no manipularlo de ninguna manera.";
$custodyPoint4 = "Segregación: Sus fondos permanecerán separados de los de otros clientes, y de los fondos de Lux Ant Digital. ";
$custodyPoint5 = "Transparencia: Usted podrá comprobar mediante la Blockchain y siempre que quiera, que sus fondos permanecen depositados en su wallet.";
$custodyPoint6 = "Privacidad: Lux Ant Digital no divulgará a ningún organismo, y gestiona la transacción con la máxima discreción.";
$custodyPoint7 = "Venta: Podrá solicitar la venta de sus fondos en caso de que precise capital inmediato y re comprarlo según la cotización del momento.";
$custodyPoint8 = "Tarifado ﬁjo: La mayoría de servicios de custodia cobran de forma variable según la cotización del en el periodo de servicio. En Lux Ant Digital, el porcentaje de custodia es ﬁja independientemente de la cantidad de activos digitales custodiados.";

$tradingPoint1 = "Compruebe personalmente con sus claves, cuándo y desde donde quiera, como nuestro Bot Leveler está trabajando sin parar, ejecutando órdenes constantemente.";
$tradingPoint2 = "Genere beneﬁcios aunque el mercado esté en tendencia bajista.";
$tradingPoint3 = "Compruebe las bajas comisiones debido al ahorro de trabajo humano.";
$tradingPoint4 = "Deje que nuestro Boot trabaje para usted; desarrollado con los mejores algoritmos y estrategias para tener mayores ventajas.";
$tradingPoint5 = "Recibe cada mes tus ingresos en tu wallet o directamente en tu cuenta bancaria.";
$tradingPoint6 = "Ofrecemos soporte 24/7.";
$tradingPoint7 = "Nuestra Protección Ante Saldo Negativo signiﬁca que nunca puede perder más de lo que invierte.";
$tradingPoint8 = "Solo decida “cuánto” y “cuándo” y en menos de una semana sus activos digitales ya le estarán generando beneﬁcios.";

$consultoryPoint1 = "Hemos desarrollado la plataforma de consultoría para cualquiera que quiera ser guiado en un mundo tan novedoso como es el de los activos digitales. Ofrecemos varios rangos de asesoramiento para aquellos clientes que desean estar constantemente informados y asesorados de movimientos inesperados.";
$consultoryPoint2 = "Elija la opción que mejor se le adapte y disfrute de soluciones y ventajas rápidas antes de cualquier movimiento en el mercado.";
$consultoryPoint3 = "Tarifa Bronce, Tarifa Plata y Tarifa Oro.";

$contentManufacture ="Actualmente, comercializamos dos modelos de cajeros automáticos que incorporan los mayores avances tecnológicos, tanto en seguridad física como en seguridad informática. Se diferencian en su apariencia física, siendo idénticos en funcionalidad de software y capacidad de procesamiento de tickets.";

$subtitleTokenDevelopment = "Especializados en desarrollo de Tokens.";
$contentTokenDevelopment = "Hoy en día, aparte de las criptomonedas, hay acciones virtuales de algunas empresas llamadas Token. Los Tokens son contratos inteligentes de la red de Ethereum. El Token se conﬁgura por encargo y en cuatro unidades de trabajo.";
$packTokenDevelopment1 = "Pack 1: Crear Token.";
$packTokenDevelopment2 = "Pack 2: Promoción del token en las páginas webs de la empresa y difusión en las Redes Sociales del grupo + Soporte técnico al propietario del token y a los inversores + Marketing digital de pago.";
$packTokenDevelopment3 = "Pack 3: Soporte técnico al propietario del token y a los inversores + Crear pagina web corporativa + mantenimiento.";
$packTokenDevelopment4 = "Pack 4: Pack completo.";

$buttonMoreInfo = "Más información"; $buttonLink = "spanish";

//-------------------------------------------------------------------------------

//ROADMAP - Trayectoria del proyecto
//===============================================================================
$roadmapTitle = "Roadmap ICO";

$roadmapDate1 = "2018: Q1/Q2";
$dateObjetive1 = "Jurisdicción Legal y Física";
$dateObjetive2 = "Diseño del Producto Inicial";
$dateObjetive3 = "Asesores y Partners colaboradores";
$dateObjetive4 = "Website + Token Dynamic & Supply Structure";
$dateObjetive5 = "Whitepaper V1 & V2";

$roadmapDate2 = "2018: Q3/Q4";
$date2Objetive1 = "Constitución EDE";
$date2Objetive2 = "Gestiones Administrativas Externas";
$date2Objetive3 = "Bounty Campaign";
$date2Objetive4 = "Airdrop";
$date2Objetive5 = "Whitepaper V3";
$date2Objetive6 = "Software y Patentes";

$roadmapDate3 = "2019 Q1/Q2";
$date3Objetive1 = "Plataforma de Banca Electrónica";
$date3Objetive2 = "Desarrollo de APP Alux Bank";
$date3Objetive3 = "Emisión de Soluciones de Pago";
$date3Objetive4 = "Tarjeta de pago Alux Bank";

$roadmapDate4 = "2019 Q3/Q4";
$date4Objetive1 = "Gestiones Administrativas Internas";
$date4Objetive2 = "Intern Social Network";
$date4Objetive3 = "Plan I+D+i";
$date4Objetive4 = "Inicio de Dividendos a los Socios Capitalistas";

$roadmapDate5 = "2020 Q1/Q2";
$date5Objetive1 = "Gestor ﬁnanciero global regulado";
$date5Objetive2 = "Implementaciones generalizadas con más socios y desarrolladores";

$roadmapDate6 = "2020 Q3/Q4";
$date6Objetive1 = "Colaboración con Entidades Financieras";

$roadmapDate7 = "2021: PLAN DE CONTINGENCIA";
$date7Obetive = 'Seguimos una gestión de continuidad de negocio, para así, procesar el logro de la capacidad y mantenimiento de nuestra sociedad.';

$roadmapDate8 = "+ 2022";
$date8Objetive = "Ello conforma una parte vital de la gestión de seguridad de sistemas de información, planiﬁcado y probado, que ahora se conoce más comúnmente como seguridad cibernética.";

$roadmapDate9 = "Plan de Contingencia";
$date9Objetive = "Cuando hablamos de continuidad del negocio nos referimos a la capacidad de sobrevivir a las “cosas malas” que pueden tener un impacto negativo en la empresa.";

//-------------------------------------------------------------------------------

//ADVANTAGES - Ventajas que obtendrás tras terminar la ICO
//===============================================================================
$advantagesTitle = "Ventajas de tener Tokens ALUX";
$advantagesSubtitle = "Si dispones de tokens ALUX o piensas Comprar Tokens";

$quantityTokens1 = "100 a 10,000 Tokens";
$timeQuantity1 = "3"; $quantityDate1 = "meses";
$content1Advantage1 = "20% de boniﬁcación en servicios de consultoría.";
$content1Advantage2 = "Custodia gratuita de sus activos digitales.";
$content1Advantage3 = "10% de descuento en los servicios de ALUX BANK.";

$cuantityTokens2 = "10,001 a 100,000 Tokens";
$timeQuantity2 = "6"; $quantityDate2 = "meses";
$content2Advantage1 = "Acceso a nuestro manual Trading Bot.";
$content2Advantage2 = "35% de boniﬁcación en servicios de consultoría.";
$content2Advantage3 = "Custodia gratuita de sus activos digitales.";
$content2Advantage4 = "10% de descuento en los servicios de ALUX BANK.";

$cuantityTokens3 = "100,001 a 1,000,000 Tokens";
$timeQuantity3 = "2"; $quantityDate3 = "años";
$content3Advantage1 = "Acceda a nuestro Trading Bot automatizado + IA con un 3% de ganancias mensuales.";
$content3Advantage2 = "Dividendos fijos anuales del 10%";
$content3Advantage3 = "50% de boniﬁcación en servicios de consultoría.";
$content3Advantage4 = "Custodia gratuita de sus activos digitales.";
$content3Advantage5 = "10% de descuento en los servicios de ALUX BANK.";

$cuantityTokens4 = "1,000,001 o más Tokens";
$timeQuantity4 = "Para siempre";
$content4Advantage1 = "Recibirá acciones de nuestra compañía.";
$content4Advantage2 = "Acceso a nuestro Trading Bot automatizado + IA con 5% de ganancias mensuales.";
$content4Advantage3 = "Dividendos fijos anuales del 20%";

//-------------------------------------------------------------------------------

//ABOUT US - Sobre el proyecto Lux Ant Digital
//===============================================================================
$aboutTitle = "Sobre nosotros";
$aboutLine1 = "Lux Ant S.L. es una startup tecnológica que se centra en proyectos y desarrollos relacionados con las monedas digitales a través de compra y venta de Tokens.";
$aboutLine2 = "La ﬁlosofía de la compañía se basa en los siguientes principios:";
$aboutPrinciples1 = "Somos el futuro: la moneda física del día a día desaparecerá en poco tiempo de nuestros bolsillos. ";
$aboutPrinciples2 = "Eliminación de intermediarios: no es necesario un tercero en una transacción económica entre dos. ";
$aboutPrinciples3 = "Aumenta la eﬁcacia: paga instantáneamente sin demoras.";
$aboutPrinciples4 = "Mejora la economía: apoyamos la economía alternativa que devuelve el poder a las personas.";
//-------------------------------------------------------------------------------

//TEAM PLAYERS - Nuestro equipo y advisors
//===============================================================================
$teamTitle = "Nuestro Equipo";
$teamSubtitle = "El equipo que transformará esta ICO en Banca de Cryptomonedas";

$operatingTeam = "OPERATING TEAM";
$advisors = "ADVISORS";

//Equipo
$membersName1 = "Nancy Herrera Muñoz";
$membersPosition1 = "Founder &amp; CEO";
$memberDescription1 = "Nancy Herrera Muñoz - Founder &amp; CEO";

$membersName2 = "Ariadna Juliá Brunet";
$membersPosition2 = "Head of Finance &amp; Crypto Analyst";
$memberDescription2 = "Ariadna Juliá Brunet - Head of Finance &amp; Crypto Analyst";

$membersName3 = "Anna Fábrega Sagrera";
$membersPosition3 = "Development Manager";
$memberDescription3 = "Anna Fábrega Sagrera - Development Manager";

$membersName4 = "Isaac Antonete";
$membersPosition4 = "Head of Marketing";
$memberDescription4 = "Isaac Antonete - Head of Marketing";

$membersName5 = "Yamilé Ruiz Torres";
$membersPosition5 = "Head of Customer Service";
$memberDescription5 = "Yamilé Ruiz Torres - Head of Customer Service";

$membersName6 = "Guillermo Granados G.";
$membersPosition6 = "Frontend Developer &amp; SEO";
$memberDescription6 = "Guillermo Granados Gómez - Frontend Developer &amp; SEO";

$membersName7 = "Asier Belaza Ortega";
$membersPosition7 = "Backend Developer &amp; Security";
$memberDescription7 = "Asier Belaza Ortega - Backend Developer &amp; Security";

$membersName8 = "Spyros Kekos";
$membersPosition8 = "Comunity Manager";
$memberDescription8 = "Comunity Manager";

//Advisors

$advisorsName1 = "Juan Pablo Fernández Agüero";
$advisorsPosition1 = "ICO Expert &amp; Marketing Specialist";
$advisorsDescription1 = "Interesado en las nuevas tecnologías y entusiasta de la Blockchain desde 2015. Asesor profesional en ICO, con amplia experiencia en marketing, ventas, gestión comunitaria y negociación con inversores.";

$advisorsName2 = "Sergio Valcárcel Ramírez";
$advisorsPosition2 = "Head of business development";
$advisorsDescription2 = "Analista Financiero y de Proyectos Empresariales, especializado en el ámbito de las startups.";

$advisorsName3 = "Javer Melero García";
$advisorsPosition3 = "Head of operations";
$advisorsDescription3 = "Head of operations";

$advisorsName4 = "Patricia Casado Fdez. de Carranza";
$advisorsPosition4 = "Consultory &amp; nerworks";
$advisorsDescription4 = "Especialista en captación y negociación de cuentas clave y en desarrollar nuevas lineas de negocio online. Más de quince años de experiencia en plataformas digitales.";

$advisorsName5 = "Laura Sánchez";
$advisorsPosition5 = "Head of legal &amp; financial";
$advisorsDescription5 = "Head of legal &amp; financial";

$advisorsName6 = "Estefanía Mateo Vazquez";
$advisorsPosition6 = "Business analyst";
$advisorsDescription6 = "Business analyst";

$advisorsName7 = "Fuencisla Sanz Ruiz";
$advisorsPosition7 = "Investments analyst";
$advisorsDescription7 = "Investments analyst";

$advisorsName8 = "Nicolás Campo Ros";
$advisorsPosition8 = "Operations management";
$advisorsDescription8 = "Operations management";

//-------------------------------------------------------------------------------

//TOKENS - Distribución de los Tokens
//===============================================================================
$tokenTitle = "Asignación de Tokens";

//Token Allocations
$tokenAllocations = "Distribución del Token";
$tokenValue1 = "Venta Pública: 50%";
$tokenValue2 = "Equipo: 15%";
$tokenValue3 = "Asesores: 5%";
$tokenValue4 = "Bounties: 2%";
$tokenValue5 = "POP: 10%";
$tokenValue6 = "Reserva: 18%";

//Use of Proceeds
$tokenProceeds = "Procedimiento de Uso";
$tokenProceedsValue1 = "Desarrollo Software: 40%";
$tokenProceedsValue2 = "Marketing & I+D+i: 20%";
$tokenProceedsValue3 = "Reserva ETH: 20%";
$tokenProceedsValue4 = "Gastos de procesos legales: 5%";
$tokenProceedsValue5 = "Desarrollo comunitario: 7%";
$tokenProceedsValue6 = "Gastos de Administración: 8%";

//-------------------------------------------------------------------------------

//TOKEN PRICE - Tabla de valores del Token según vaya evolucionando la ICO
//===============================================================================

/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/                                                        $priceTitle = "Línea Temporal - Precio del Token";                                                                                  /**/
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/                                                        $tokenStarts = "Inicio Token: 01/09/2018 - Final Token: 01/11/2018";                                                                /**/  
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/ $rowTitle1 = "Precio Original";      /**/ $row1Column1 = "$0,20";            /**/ $row1Column2 = "$0,20";             /**/ $row1Column3 = "$0,20";         /**/ $row1Column4 = "$0,20";    /**/ 
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/      
/**/ $rowTitle2 = "Descuento %";          /**/ $row2Column1 = "70%";             /**/ $row2Column2 = "40%";              /**/ $row2Column3 = "10%";          /**/ $row2Column4 = "0%";          /**/ 
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/      
/**/ $rowTitle3 = "Precio Token";         /**/ $row3Column1 = "$0,06";            /**/ $row3Column2 = "$0,12";             /**/ $row3Column3 = "$0,18";         /**/ $row3Column4 = "$0,20";    /**/ 
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/ $rowTitle4 = "Fases";                /**/ $row4Column1 = "Inicio Token";    /**/ $row4Column2 = "Fase 2";           /**/ $row4Column3 = "Fase 3";       /**/ $row4Column4 = "Final Token"; /**/ 
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/ $rowTitle5 = "Línea Temporal";       /**/ $row5Column1 = "Septiembre 1-15"; /**/ $row5Column2 = "Septiembre 16-30"; /**/ $row5Column3 = "Octubre";      /**/ $row5Column4 = "Noviembre";   /**/ 
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

//-------------------------------------------------------------------------------

//CONTACT - Información y contacto.
//===============================================================================
$contactTitle = "Contacto";
$contactMail = "info@luxantdigitalbank.com";
$contactPhone = "925251029";
$contactAdress = "Calle Italia 113";
$contactPostal = "Toledo 45005";

$contactMapTitle = "Ver Mapa";
$contactFollow = "Síguenos :";

$contactMailFormTitle = "Déjanos tu mensaje";
$contactMailFormFirstName = "Nombre";
$contactMailFormLastName = "Apellidos";
$contactMailFormPhone = "Nº de Teléfono";
$contactMailFormEmail = "Email";
$contactMailFormMessage = "Mensaje";
$buttomSubmitMessage = "ENVIAR MENSAJE";
//===============================================================================
$footerColumnCompanyTitle = "COMPAÑÍA";
$footerColumnCompanyContent1 = "Nosotros";
$footerColumnCompanyContent2 = "Equipo";
$footerColumnCompanyContent3 = "Blog";
$footerColumnCompanyContent4 = "Contacto";

$footerColumnFundingTitle = "ICO FUNDING";
$footerColumnFundingContent1 = "Inicio";
$footerColumnFundingContent2 = "Productos";
$footerColumnFundingContent3 = "Roadmap";
$footerColumnFundingContent4 = "Token";

$footerColumnPayMethods = "ACEPTAMOS LOS SIGUIENTES MÉTODOS DE PAGO";

$footerColumnLuxAntDigital = "LUX ANT DIGITAL";
$footerColumnLuxAntDigitalContent1 = "Lux Ant Digital, Comprar Tokens";
$footerColumnLuxAntDigitalContent2 = "Lux Ant Digital, Tokens Alux"; 
$footerColumnLuxAntDigitalContent3 = "Lux Ant Digital, Banca Electrónica";
$footerColumnLuxAntDigitalContent4 = "Lux Ant Digital, Rentabilidad";
$footerColumnLuxAntDigitalContent5 = "Lux Ant Digital, Ethereum Wallet";

$footerCopyright = "Copyright &copy; 2018. Todos los derechos reservados por ";
$footerTermsandConditions = "Términos de uso";
$footerPrivacyPolicy = "Política de privacidad";
$footerDisclaimer = "Aviso Legal";

//-------------------------------------------------------------------------------
?>