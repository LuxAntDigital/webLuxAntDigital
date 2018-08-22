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



//HEAD - Cabecera con metas y Título que muestra el navegador
//===============================================================================
$metaDescription = "Мы первый ICO, который ищет альтернативу традиционному банковскому делу, мы боремся за право всех.
Lux Ant Digital возвращает власть людям с технологией Blockchain и Smart Contract.
Мы работаем, чтобы жить, мы не живем, чтобы работать!";
$metaKeywords = "банка, криптовалюта, ICO, белая бумага, Alux, Lux, Lux Ant Digital, Lux Ant Digital Bank, инвестиции, предварительная продажа, предпродажная";
$headTitle = "Lux Ant Digital - Децентрализованное будущее нового электронного банкинга";

//-------------------------------------------------------------------------------

//NAVBAR - Barra de navegación del sitio web
//===============================================================================
$features = "ГЛАВНАЯ";
$services = "услуги";
$roadmap = "Карта маршрута";
$about = "о нас";
$team = "Команда";
$tokens = "Tокенов";
$blog = "блог";
$contact = "контакт";

$buybutton = "ПОКУПАЙТЕ Tокенов";

//-------------------------------------------------------------------------------

//BANNER - Página que se muestra tras la carga del sitio
//===============================================================================
$titulo = "Децентрализованное будущее нового электронного банкинга";
$subtitulo = "Мы первый ICO, который ищет альтернативу традиционному банковскому делу, мы боремся за право всех.
Lux Ant Digital возвращает власть людям с технологией Blockchain и Smart Contract.
Мы работаем, чтобы жить, мы не живем, чтобы работать!";
$cabeceraBotones = "Загрузите нашу информацию";
$playVideo = "Проиграть видео";
$referral = "REFERRAL";

$countdownTitle = "$0.06 !! ПРОДАЖА НАЧИНАЕТСЯ В";
$capital = "soft cap 10M - hard cap 25M";
$promotion = "Buy Tokens in August only cost $0.05";
$smallLetters = "Sold Tokens: 20.030.000";
$payMethod = "WE ACCEPT THIS PAY METHODS";

//-------------------------------------------------------------------------------

//FEATURES - Las ventajas de tener Tokens ALUX
//===============================================================================
$benefictsTitle =  "Преимущества наших решений";
$benefictsSubtitle = " Развитие проекта ALUX BANK предоставляет нам следующие возможности";

$electronicBankingPlatform = "Электронная банковская платформа";
$contentElectronicBankingPlatform = "С помощью платформы Lux Digital Ant, используемой в качестве электронного банкинга, вы можете выстраивать отношения с клиентами, поставщиками, родственниками, полностью контролируя процесс оплаты и списания средств, перевода денег и/или цифровых активов, от входа в систему и до конца транзакции.";

$appMobile = "Мобильное приложение";
$contentAppMobile = "Через мобильное приложение «Alux Bank» , вы можете выполнять процедуры перевода денег и сбережений, выполнять услуги по зачислению заработной платы, совершать другие платежи, а также конвертировать валюту, совершать покупки в режиме онлайн, осуществлять микрокредитование и многое другое.";

$paymentCard = "Платежная карта";
$contentPaymentCard = "Выпуск инновационной дебетовой карты в виде простой и более функциональной, не требующий чип и пин, использующей простой «QR» код, который связывает его непосредственно с вашим банковский счетом Alux Bank";

$saveMoney = "Экономия денег";
$contentSaveMoney = "С легкостью доступа к банковскому счету, предлагаемому «Alux Bank», вы можете начать экономить и посмотреть, как ваши деньги растут изо дня в день.";

$microLoans = "Микрозаймы (корпоративные и частные)";
$contentMicroLoans = "Микрозаймы, которые мы хотим предоставить другим пользователям, чтобы иметь возможность продолжить кредитование или инвестировать в какой-либо опубликованный проект, это будет доступно с помощью Smart Contract, интегрированного в платформу Alux Bank.";

$sendMoney = "Отправление и получение денег";
$contentSendMoney = "С платформой Digital Lux Ant, представленной как электронный банк, вы сможете работать с вашими клиентами, поставщиками, родственниками и т. д., а также контролировать покупки, продажи, отправки денег и / или цифровые активы с начала операции и до конца сделки.";

$currencyConversion = "Обмен валюты";
$contentCurrencyConversion = "Вы можете обменять любую валюту в наших банкоматах, в магазинах-партнерах или в мобильном приложении Alux Bank , моментально и с минимальной комиссией.";

$ownATMNetwork = "Собственная сеть банкоматов и сотрудничество с магазинами";
$contentOwnATMNetwork = "Основной идеей, вызывающей рост банковской сети Alux , является способ продвижения ее использования, заключение контрактов с предприятиями и сотрудничающими компаниями на выпуск и перевыпуск карт, а также то, что у них есть наши банкоматы в их помещениях.";

//-------------------------------------------------------------------------------

//SERVICES - Servicios que ofrecerá ALUX Bank
//===============================================================================
$servicesTitle = "ТЕКУЩИЕ УСЛУГИ";
$servicesSubtitle = "If you buy tokens can obtains these services when ICO ends";

$menuCustody = "ОПЕКА";
$menuTrading = "ТОРГОВЫЙ Бот";
$menuConsultory = "КОНСУЛЬТАЦИЯ И СОВЕТНИК";
$menuManufacture = "ПРОИЗВОДСТВО ATM (БАНКОМАТОВ)";
$menuTokenDevelopment = "РАЗВИТИЕ TOKEN";

$custodyPoint1 = "Собственность: ваш продукт является вашей собственностью, он не станет частью баланса Lux Ant Digital, он не будет сдаваться в аренду, или использоваться в качестве гарантии какой-либо операции.";
$custodyPoint2 = "Безопасность: часть ключей ваших цифровых активов будут находится на депозитах в банке, обеспечивая нашим клиентам больше безопасности и уверенности. ";
$custodyPoint3 = "Пунктуальность : Lux Ant Digital хранит те средства , которые вы депонировали и обещают не манипулировать ими никоим образом.";
$custodyPoint4 = "Обособление : ваши средства будут оставаться изолированы от других клиентов, а также от фонда Lux Ant Digital.";
$custodyPoint5 = "Прозрачность: вы можете самостоятельно проверить Блокчейн всякий раз, когда захотите. Убедитесь сами, ваши средства останутся на вашем кошельке.";
$custodyPoint6 = "Конфиденциальность: Lux Ant Digital не будет распространять информацию о сделках, управляя транзакцией со всей осторожностью.";
$custodyPoint7 = "Продажа: вы можете запросить продажу своих средств, если вам необходим немедленный капитал докупить его в момент роста цены.";
$custodyPoint8 = "Фиксированная ставка: Lux Ant Digital гарантирует фиксированную ставку независимо от количества активов на хранении.";

$tradingPoint1 = "Проверяйте личные пароли, в любое время и где вы хотите. Наш БОТ работает безостановочно, постоянно выполняя заказы.";
$tradingPoint2 = "Получайте прибыль, даже если идёт падение рынка.";
$tradingPoint3 = "Низкие комиссионные обусловлены экономией ручного труда.";
$tradingPoint4 = "Пусть наш БОТ работает для вас; разработанный с использованием лучших алгоритмов и стратегий, чтобы получать больше преимуществ.";
$tradingPoint5 = "Получайте свой доход каждый месяц на свой кошелек или непосредственно на свой банковский счет.";
$tradingPoint6 = "Мы обеспечиваем круглосуточную поддержку.";
$tradingPoint7 = "Наша защита от отрицательного баланса означает, что вы не сможете потерять больше, чем инвестируете.";
$tradingPoint8 = "Решите только «сколько» и «когда», и менее чем за неделю ваши цифровые активы будут получать прибыль.";

$consultoryPoint1 = "Мы разработали платформу для консультаций для всех, кто хочет ориентироваться в мире цифровых активов. Мы предлагаем несколько ";
$consultoryPoint2 = "консультационных диапазонов для тех клиентов, которые хотят быть постоянно информированы и предупреждены о неожиданных движениях. Выберите вариант, который вам больше всего подходит, и наслаждайтесь быстрыми решениями и преимуществами перед любым изменением на рынке.";
$consultoryPoint3 = "Бронзовый тариф, серебряный тариф и золотой тариф.";

$contentManufacture ="В настоящее время мы продаем две модели банкоматов, которые включают в себя самые высокие технологические достижения, как в технологической , так и в компьютерной безопасности. Они отличаются только своим внешним видом, будучи идентичны в функциональности программного обеспечения и возможности обработки запросов.";

$subtitleTokenDevelopment = "Специализируемся на разработке токенов";
$contentTokenDevelopment = "В настоящее время, помимо криптовалюты, существуют виртуальные пакеты некоторых компаний под названием Token. Токены - это смарт-контракты сети Ethereum. Token настроен специально под клиентский заказ и имеют четыре альтернативы.";
$packTokenDevelopment1 = "Пакет 1: Разработка токенов";
$packTokenDevelopment2 = "Пакет 2: Продвижение токенов на веб-сайте компании и распространение на Social Media + Техническая поддержка владельцу токенов и инвесторам + Цифровой маркетинг за определенную плату.";
$packTokenDevelopment3 = "Пакет 3: Техническая поддержка владельца Token и инвесторов + Разработка корпоративного сайта + Техническое обслуживание.";
$packTokenDevelopment4 = "Пакет 4: Общий пакет.";

$buttonMoreInfo = "Дополнительная информация"; 
$buttonLink = "english"; // NO TOCAR.

//-------------------------------------------------------------------------------

//ROADMAP - Trayectoria del proyecto
//===============================================================================
$roadmapTitle = "КАРТА РАЗВИТИЯ";

$roadmapDate1 = "1/2 КBAPT 2018 г.";
$dateObjetive1 = "Решение правовых вопросов";
$dateObjetive2 = "Первоначальный дизайн продукта";
$dateObjetive3 = "Консультанты";
$dateObjetive4 = "Структура предложения токена, веб-сайт";
$dateObjetive5 = "Проектный документ V1 & V2";

$roadmapDate2 = "3/4 КBAPT 2018 г.";
$date2Objetive1 = "Написание Устава EDE";
$date2Objetive2 = "Процедура внешнего управления ";
$date2Objetive3 = "Баунти-программа ";
$date2Objetive4 = "Проектный документ, V3";
$date2Objetive5 = "Airdrop";
$date2Objetive6 = "ПО, патенты";

$roadmapDate3 = "1/2 КBAPT 2019 г.";
$date3Objetive1 = "Платформа электронного банкинга";
$date3Objetive2 = "Разработка приложения Alux Bank";
$date3Objetive3 = "Выпуск платежных решений";
$date3Objetive4 = "Карта оплаты Alux Bank";

$roadmapDate4 = "3/4 КBAPT 2019 г.";
$date4Objetive1 = "Процедуры внешнего управления ";
$date4Objetive2 = "Внутренняя социальная сеть ";
$date4Objetive3 = "План I+D+i";
$date4Objetive4 = "Выплата дивидендов";

$roadmapDate5 = "1/2 КBAPT 2020 г.";
$date5Objetive1 = "Регулируемый финансовый менеджер ";
$date5Objetive2 = "Широкое развертывание с большим количеством партнеров и";

$roadmapDate6 = "3/4 КBAPT 2020 г.";
$date6Objetive = "Сотрудничество с финансовыми учреждениями";

$roadmapDate7 = "2021 г.";
$date7Objetive = 'Мы следим за обеспечением бесперебойности бизнеса, чтобы достичь максимального потенциала нашей компании.';

$roadmapDate8 = "+ 2022 г.";
$date8Objetive = "Это формирует жизненно важную часть управления безопасностью проверенных  систем, кибернетической безопасностью.";

$roadmapDate9 = "РЕЗЕРВНЫЙ ПЛАН";
$date9Objetive = "планируемых и информационных ныне именуемое Когда мы говорим о бесперебойности бизнеса, мы говорим о способности выжить при «плохих вещах», которые могут оказать негативное влияние на компанию.";

//-------------------------------------------------------------------------------

//ADVANTAGES - Ventajas que obtendrás tras terminar la ICO
//===============================================================================
$advantagesTitle = "Преимущества наличия токенов ALUX";
$advantagesSubtitle = "Если у вас есть Alux токенов";

$quantityTokens1 = "100 to 10,000 токенов";
$timeQuantity1 = "3"; $quantityDate1 = "месяца";
$content1Advantage1 = "20% бонус в консалтинговых услугах.";
$content1Advantage2 = "бесплатное oпека ваших цифровых активов.";
$content1Advantage3 = "10% скидка на услуги ALUX BANK.";

$cuantityTokens2 = "10,001 to 100,000 токенов";
$timeQuantity2 = "6"; $quantityDate2 = "месяца";
$content2Advantage1 = "Доступ к нашему руководство ТОРГОВЫЙ Бот.";
$content2Advantage2 = "35% бонус в консалтинговых услугах.";
$content2Advantage3 = "бесплатное oпека ваших цифровых активов.";
$content2Advantage4 = "10% скидка на услуги ALUX BANK.";

$cuantityTokens3 = "100,001 to 1,000,000 токенов";
$timeQuantity3 = "2"; $quantityDate3 = "лет";
$content3Advantage1 = "Доступ к нашему ТОРГОВЫЙ Бот автоматизированный + IA c 3% ежемесячным заработком.";
$content3Advantage2 = "Annual fixed dividends of 10%";
$content3Advantage3 = "50% бонус в консалтинговых услугах.";
$content3Advantage4 = "бесплатное oпека ваших цифровых активов.";
$content3Advantage5 = "10% скидка на услуги ALUX BANK.";

$cuantityTokens4 = "1,000,001 или более токенов";
$timeQuantity4 = "навсегда";
$content4Advantage1 = "Вы получите акции нашей компании.";
$content4Advantage2 = "Доступ к нашему ТОРГОВЫЙ Бот автоматизированный + IA c 5% ежемесячным заработком.";
$content4Advantage3 = "Annual fixed dividends of 20%";

//-------------------------------------------------------------------------------

//ABOUT US - Sobre el proyecto Lux Ant Digital
//===============================================================================
$aboutTitle = "O НАС";
$aboutLine1 = "Lux Ant S.L. является технологическим стартапом, который фокусируется на проектах и разработках, связанных с цифровыми валютами.";
$aboutLine2 = "Философия компании основана на следующих принципах:";
$aboutPrinciples1 = "Мы - будущее: ощущаемая монета, которую мы используем ежедневно, скоро исчезнет из наших карманов. ";
$aboutPrinciples2 = "Исключение посредника: во время экономической сделки между двумя, третий человек не требуется . ";
$aboutPrinciples3 = "Эффективность возрастает: платите мгновенно без задержек. ";
$aboutPrinciples4 = "Улучшает экономику: мы поддерживаем альтернативную экономику, которая возвращает власть народу. ";
//-------------------------------------------------------------------------------

//TEAM PLAYERS - Nuestro equipo y advisors
//===============================================================================
$teamTitle = "Команда";
$teamSubtitle = "The team the team that will transform this ICO in a Cryptocurrency Bank";

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
$advisorsDescription1 = "Always interested in new technologies, the blockchain is my passion from 2015. I am a professional and good connected ICO expert and advisor, with proven experience in marketing, sales, community management, and negotiation with investors.";

$advisorsName2 = "Sergio Valcárcel Ramírez";
$advisorsPosition2 = "Head of business development";
$advisorsDescription2 = "Head of business development";

$advisorsName3 = "Javer Melero García";
$advisorsPosition3 = "Head of operations";
$advisorsDescription3 = "Head of operations";

$advisorsName4 = "Patricia Casado Fdez. de Carranza";
$advisorsPosition4 = "Consultory &amp; nerworks";
$advisorsDescription4 = "Commercial and PR Expert, Institutional Relations. Online business developer expert with key accounts. Online experience for more than fifteen years.";

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
$tokenTitle = "НАЗНАЧЕНИЕ ТОКEHОВ";

//Token Allocations
$tokenAllocations = "РАСПРЕДЕЛЕНИЕ ТОКЕНОВ";
$tokenValue1 = "Общественная продажа: 50%";
$tokenValue2 = "Команда: 15%";
$tokenValue3 = "Советники: 5%";
$tokenValue4 = "Баунти: 2%";
$tokenValue5 = "POP: 10%";
$tokenValue6 = "Pезерв: 18%";

//Use of Proceeds
$tokenProceeds = "ИСПОЛЬЗОВАНИЕ ДОХОДОВ";
$tokenProceedsValue1 = "Разработка программного обеспечения: 40%";
$tokenProceedsValue2 = "Маркетинг и I+D+i: 20%";
$tokenProceedsValue3 = "ETH резерв: 20%";
$tokenProceedsValue4 = "Расходы по юридическому процессу: 5%";
$tokenProceedsValue5 = "Развитие сообщества: 7%";
$tokenProceedsValue6 = "Расходы администрации: 8%";

//-------------------------------------------------------------------------------

//TOKEN PRICE - Tabla de valores del Token según vaya evolucionando la ICO
//===============================================================================

/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/                                                        $priceTitle = "Token Price";                                                                                                  /**/
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/                                                                                                    $tokenStarts = "IНАЧАЛО ПРОДАЖИ 01/09/18 - КОНЕЦ ПРОДАЖИ: 30/11/2018";            /**/  
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/ $rowTitle1 = "Первоначал ьная цена"; /**/ $row1Column1 = "$0,20";          /**/ $row1Column2 = "$0,20";           /**/ $row1Column3 = "$0,20";   /**/ $row1Column4 = "$0,20";        /**/ 
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/      
/**/ $rowTitle2 = "Скидка %";             /**/ $row2Column1 = "70%";            /**/ $row2Column2 = "40%";             /**/ $row2Column3 = "10%";     /**/ $row2Column4 = "0%";           /**/ 
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/      
/**/ $rowTitle3 = "Токен Цена";           /**/ $row3Column1 = "$0,06";          /**/ $row3Column2 = "$0,12";           /**/ $row3Column3 = "$0,18";   /**/ $row3Column4 = "$0,20";        /**/ 
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/ $rowTitle4 = "Фазы";                 /**/ $row4Column1 = "Начало токена";  /**/ $row4Column2 = "Фазы  2";         /**/ $row4Column3 = "Фазы  3"; /**/ $row4Column4 = "конец токена"; /**/
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/ $rowTitle5 = "Timeline";             /**/ $row5Column1 = "сентябрь 1-15";  /**/ $row5Column2 = "сентябрь 16-30";  /**/ $row5Column3 = "октябрь"; /**/ $row5Column4 = "ноябрь";       /**/ 
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

//-------------------------------------------------------------------------------

//CONTACT - Información y contacto.
//===============================================================================
$contactTitle = "контакт";
$contactMail = "info@luxantdigitalbank.com";
$contactPhone = "925251029";
$contactAdress = "Calle Italia 113";
$contactPostal = "Toledo 45005";

$contactMapTitle = "Посмотреть карту";
$contactFollow = "Следуйте за нами :";

$contactMailFormTitle = "Оставьте нам сообщение";
$contactMailFormFirstName = "First Name";
$contactMailFormLastName = "Last Name";
$contactMailFormPhone = "Phone";
$contactMailFormEmail = "Email";
$contactMailFormMessage = "Message";
$buttomSubmitMessage = "послать сообщение";

//-------------------------------------------------------------------------------

//FOOTER - Datos generales al final del sitio web
//===============================================================================
$footerColumnCompanyTitle = "COMPANY";
$footerColumnCompanyContent1 = "O НАС";
$footerColumnCompanyContent2 = "Команда";
$footerColumnCompanyContent3 = "блог";
$footerColumnCompanyContent4 = "контакт";

$footerColumnFundingTitle = "ICO FUNDING";
$footerColumnFundingContent1 = "ГЛАВНАЯ";
$footerColumnFundingContent2 = "продукт";
$footerColumnFundingContent3 = "ДОРОЖНАЯ КАРТА";
$footerColumnFundingContent4 = "Tокенов";

$footerColumnPayMethods = "WE ACCEPT THIS PAY METHODS";

$footerColumnLuxAntDigital = "LUX ANT DIGITAL";
$footerColumnLuxAntDigitalContent1 = "Lux Ant Digital, Buy Tokens";
$footerColumnLuxAntDigitalContent2 = "Lux Ant Digital, Tokens Alux"; 
$footerColumnLuxAntDigitalContent3 = "Lux Ant Digital, Electronic Banking";
$footerColumnLuxAntDigitalContent4 = "Lux Ant Digital, Profit";
$footerColumnLuxAntDigitalContent5 = "Lux Ant Digital, Ethereum Wallet";

$footerCopyright = "Copyright &copy; 2018. All rights reserved by";
$footerTermsandConditions = "Условия использования";
$footerPrivacyPolicy = "Политика конфиденциальности";
$footerDisclaimer = "уведомление правовой";

//-------------------------------------------------------------------------------
?>
