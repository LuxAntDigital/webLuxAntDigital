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
$panel = "english";



//HEAD - Cabecera con metas y Título que muestra el navegador
//===============================================================================
$metaDescription = "We are the first ICO that seeks the alternative to traditional banking, we fight for the right of all.
Lux Ant Digital gives back the power to the people with the Blockchain and Smart Contract technology.
We work to live, we do not live to work!";
$metaKeywords = "token, buy tokens, bank, cryptocurrency, ICO, whitepaper, Alux, Alux Bank, Lux, Lux Ant Digital, Lux Ant Digital Bank, Investment, pre-sale, presale, Cryptocurrency Bank";
$headTitle = "Alux Bank ICO - The Decentralized future of the new Electronic Banking";

//-------------------------------------------------------------------------------

//NAVBAR - Barra de navegación del sitio web
//===============================================================================
$features = "Features";
$services = "Services";
$roadmap = "Roadmap";
$about = "About";
$team = "Team";
$tokens = "Tokens";
$blog = "Blog";
$contact = "Contact";

$buybutton = "BUY TOKENS";
$loginButton = "LOGIN";

//-------------------------------------------------------------------------------

//BANNER - Página que se muestra tras la carga del sitio
//===============================================================================
$titulo = "THE NEW ELECTRONIC BANKING SYSTEM ON BLOCKCHAIN TECHNOLOGY";
$subtitulo = "We are the first ICO that seeks the alternative to traditional banking, we fight for the right of all.
Alux Bank gives back the power to the people with the Blockchain and Smart Contract technology.
We work to live, we do not live to work!";
$cabeceraBotones = "DOWNLOAD DOCUMENTS FROM ICO";
$playVideo = "PLAY VIDEO";
$referral = "REFERRAL";

$countdownTitle = "ALUX BANK ICO IS LIVE! $0.18";
$capital = "soft cap 10M - hard cap 25M";
$promotion = "TOTAL SUPPLY 1 BILION OF ALUX TOKENS";
$smallLetters = "Sold Tokens: 24,750,545";
$payMethod = "WE ACCEPT THESE PAYMENT METHODS";

//-------------------------------------------------------------------------------

//FEATURES - Las ventajas de tener Tokens ALUX
//===============================================================================
$benefictsTitle =  "Benefits of Using Our Solution";
$benefictsSubtitle = "The development of the ALUX BANK project for the creation of a cryptocurrency bank will give you the following advantages at buy tokens";

$electronicBankingPlatform = "Electronic Banking Platform";
$contentElectronicBankingPlatform = "You can build close relationships with customers, suppliers, family, etc. and control the experience of buying, selling, sending money and / or digital assets from login to the end of the transaction. Lux Ant Digital Smart Contract apply where intermediaries do not exist and thus reduce service costs.";

$appMobile = "App Mobile";
$contentAppMobile = "With the APP Alux Bank, you will be able to carry out negotiations such as the sending of money, saving, collections of lists or other payments, currency conversions, on-line purchases and requests of micro-lending's, as well as others.";

$paymentCard = "Payment Card";
$contentPaymentCard = "The innovative emission of debit card payment, it allows us to give the approach to design a simpler card. This action is functional, without the need of a chip and/or a pin, using a simple QR code that Alux Bank links directly with said bank account.";

$saveMoney = "Save Money";
$contentSaveMoney = "With the ease of access to an account offered by Alux Bank, you can start saving and see how your money grows day by day in our cryptocurrency bank.";

$microLoans = "Micro-Loans Public &amp; Private";
$contentMicroLoans = "Which we want to give the capital to other users to be able to proceed with the lending or investing in some published project, it will be able to be done by means of the Smart Contract integrated inside Alux Bank's platform.";

$sendMoney = "Send &amp; Receive Money";
$contentSendMoney = "With the platform of Digital Lux Ant presented as an Electronic Banking, you will be able to begin relationships with your clients, suppliers, relatives, etc, and to control the experience of purchase, sale, sending of money and/or digital assets from the beginning of the session until the end of the transaction.";

$currencyConversion = "Currency Conversion";
$contentCurrencyConversion = "From our ATMs, partner shops or Alux Bank mobile APP, you can make conversions of any currency, instantly and with the minimum commission.";

$ownATMNetwork = "Own ATM Network &amp; Collaboration with Stores";
$contentOwnATMNetwork = "The main idea of causing the growth of the Alux banking network is a way of promoting its use, close contracts with businesses and collaborating companies for the issuance of cards and recharges thereof, and even that they have our ATMs in their premises.";

//-------------------------------------------------------------------------------

//SERVICES - Servicios que ofrecerá ALUX Bank
//===============================================================================
$servicesTitle = "Current Services";
$servicesSubtitle = "If you buy tokens can obtains these services when ICO ends";

$menuCustody = "Custody";
$menuTrading = "Trading Bot";
$menuConsultory = "Consultory &amp; Advisor";
$menuManufacture = "Manufacture of ATM's";
$menuTokenDevelopment = "Token Development";

$custodyPoint1 = "Propriety. Your product is yours, it won’t be part of Lux Ant Digital assets, it won’t be borrowed neither rented nor as a warrant of any operation. ";
$custodyPoint2 = "Security. A fraction of your digital assets keys will be deposit into a bank entities, achieving a higher security and conﬁdence with our customers. ";
$custodyPoint3 = "Accuracy. Lux Ant Digital custody exactly the products our customers have deposited and assuring not to handle the product under any circumstances.";
$custodyPoint4 = "Segregation. Your fund will be isolate from other customers and from Lux Ant Digital funds.";
$custodyPoint5 = "Transparency. Everybody could handle their funds are deposited in their wallet by check in the Blockchain.";
$custodyPoint6 = "Privacy. Lux Ant Digital won’t disseminate to anybody the transaction and will manage the information with all discretion.";
$custodyPoint7 = "Selling. Everybody could request sell their funds in case of an immediately funds needing. There is also the possibility to re buy the funds at the moment price quoted.";
$custodyPoint8 = "Fix tariﬀ. Lux Ant Digital applies the same rate in spite of the amount of funds under custody.";

$tradingPoint1 = "Check by yourself when and wherever you want, out Boot is working constantly placing and executing orders.";
$tradingPoint2 = "Generate incomes besides the market trend.";
$tradingPoint3 = "Realize our low fares because saving on human costs.";
$tradingPoint4 = "Let us our Boot working for you; developed with the best algorithms and strategies to take highest advantages.";
$tradingPoint5 = "Our “Negative Balance Protection” means you cannot lose more than you have invested.";
$tradingPoint6 = "Receive each month your incomes in your wallet or directly into your bank account.";
$tradingPoint7 = "We oﬀer 24/7 support.";
$tradingPoint8 = "You have only to decide “how many” and “when” and your digital assets will be generating incomes in less than a week.";

$consultoryPoint1 = "We have developed the consulting platform for anyone who wants to be guided in a world as novel as digital assets. We oﬀer several advisory ranges for those clients who wish to be constantly informed and warned of unexpected movements.";
$consultoryPoint2 ="Choose the option that best suits you and enjoy fast solutions and advantages before any market innovation.";
$consultoryPoint3 = "Bronze Rate, Silver Rate &amp; Gold Rate.";

$contentManufacture ="Currently, we market two models of ATMs that incorporate the highest technological advances, both in physical security and in computer security. They diﬀer in their physical appearance, being identical in software functionality and ticket processing capacity.";

$subtitleTokenDevelopment = "Specialized in token development";
$contentTokenDevelopment = "Nowadays, apart from cryptocurrencies there are virtual stakes of some companies called Token. Tokens are Smart Contracts of Ethereum’s net. Token is conﬁgured speciﬁcally of a customer order and under four working units.";
$packTokenDevelopment1 = "Pack 1; Token development";
$packTokenDevelopment2 = "Pack 2; Token promotion on company’s website and spreading on Social Media + Technical support to token owner and to the investors + Digital Marketing for a fee.";
$packTokenDevelopment3 = "Pack 3; Technical support to Token’s owner and to the investors + Develop a corporative website + Maintenance.";
$packTokenDevelopment4 = "Pack 4: Total pack.";

$buttonMoreInfo = "MORE INFO"; $buttonLink = "english";

//-------------------------------------------------------------------------------

//ROADMAP - Trayectoria del proyecto
//===============================================================================
$roadmapTitle = "Roadmap ICO";

$roadmapDate1 = "2018: Q1/Q2";
$dateObjetive1 = "Legal and Physical Jurisdiction";
$dateObjetive2 = "Initial Product Design";
$dateObjetive3 = "Advisors and Collaborating Partners";
$dateObjetive4 = "Website + Token Dynamic & Supply Structure";
$dateObjetive5 = "Whitepaper V1 & V2";

$roadmapDate2 = "2018: Q3/Q4";
$date2Objetive1 = "EDE Constitution";
$date2Objetive2 = "External Administrative Procedures";
$date2Objetive3 = "Bounty Campaign";
$date2Objetive4 = "Airdrop";
$date2Objetive5 = "Whitepaper V3";
$date2Objetive6 = "Software &amp; Patents";

$roadmapDate3 = "2019 Q1/Q2";
$date3Objetive1 = "Electronic Bank Platform";
$date3Objetive2 = "Alux Bank APP Developer";
$date3Objetive3 = "Issuance of Payment Solutions";
$date3Objetive4 = "Alux Bank payment card";

$roadmapDate4 = "2019 Q3/Q4";
$date4Objetive1 = "Internal Administrative Procedures";
$date4Objetive2 = "Intern Social Network";
$date4Objetive3 = "I+D+i Plan";
$date4Objetive4 = "Start of Dividends to the Capitalist Partners";

$roadmapDate5 = "2020 Q1/Q2";
$date5Objetive1 = "Regulated global financial manager";
$date5Objetive2 = "Generalized implementations with more partners and developers";

$roadmapDate6 = "2020 Q3/Q4";
$date6Objetive = "Collaboration with Financial Institutions";

$roadmapDate7 = "2021";
$date7Objetive = 'We follow a business continuity management, in order to process the achievement of the capacity and maintenance of our society.';

$roadmapDate8 = "+ 2022";
$date8Objetive = "This is a vital part of information system security management, planned and tested, which is now more commonly known as cybersecurity.";

$roadmapDate9 = "Contingency Plan";
$date9Objetive = "When we talk about business continuity we refer to the ability to survive the “bad things” that can have a negative impact on the company.";

//-------------------------------------------------------------------------------

//ADVANTAGES - Ventajas que obtendrás tras terminar la ICO
//===============================================================================
$advantagesTitle = "ALUX TOKENS ADVANTAGES";
$advantagesSubtitle = "If you have ALUX tokens or buy tokens";

$quantityTokens1 = "100 to 10,000 Tokens";
$timeQuantity1 = "3"; $quantityDate1 = "months";
$content1Advantage1 = "20% bonus on consultory services.";
$content1Advantage2 = "Free custody of your digital assets.";
$content1Advantage3 = "10% discount on ALUX BANK services.";

$cuantityTokens2 = "10,001 to 100,000 Tokens";
$timeQuantity2 = "6"; $quantityDate2 = "months";
$content2Advantage1 = "Access to our manual Trading Bot.";
$content2Advantage2 = "35% bonus on consultory services.";
$content2Advantage3 = "Free custody of your digital assets.";
$content2Advantage4 = "10% discount on ALUX BANK services.";

$cuantityTokens3 = "100,001 to 1,000,000 Tokens";
$timeQuantity3 = "2"; $quantityDate3 = "years";
$content3Advantage1 = "Access to our Trading Bot automated + IA with 3% monthly earnings.";
$content3Advantage2 = "Annual fixed dividends of 10%";
$content3Advantage3 = "50% bonus on consultory services.";
$content3Advantage4 = "Free custody of your digital assets.";
$content3Advantage5 = "10% discount on ALUX BANK services.";

$cuantityTokens4 = "1,000,001 or more Tokens";
$timeQuantity4 = "Forever";
$content4Advantage1 = "You will receive shares of our company.";
$content4Advantage2 = "Access to our Trading Bot automated + IA with 5% monthly earnings.";
$content4Advantage3 = "Annual fixed dividends of 20%";

//-------------------------------------------------------------------------------

//ABOUT US - Sobre el proyecto Lux Ant Digital
//===============================================================================
$aboutTitle = "About Us";
$aboutLine1 = "Alux Bank is a technological startup that focuses on projects and developments related to Blockchain and Smart Contract.";
$aboutLine2 = "The philosophy of the company is based on the following principles:";
$aboutPrinciples1 = "We are the future: the palpable coin we use on a daily basis will soon disappear from our pockets.";
$aboutPrinciples2 = "The exclusion of a mediator: during an economic transaction of two it isn’t necessary to have a third member.";
$aboutPrinciples3 = "The efficiency is on the increase: pay instantly without delays.";
$aboutPrinciples4 = "Improves the economy: we back up the alternative economy which gives back the power to the people.";
//-------------------------------------------------------------------------------

//TEAM PLAYERS - Nuestro equipo y advisors
//===============================================================================
$teamTitle = "Team Players";
$teamSubtitle = "";

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
$membersPosition8 = "Head of Community Manager";
$memberDescription8 = "Head of Community Manager";

$membersName9 = " Tasos Oureilidis";
$membersPosition9 = "Community Manager";
$memberDescription9 = "Community Manager";


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

$advisorsName4 = "David Akindele";
$advisorsPosition4 = "ICO Advisor";
$advisorsDescription4 = "ICO Advisor";

$advisorsName5 = "Cem Inan Unlu";
$advisorsPosition5 = " ICO Expert";
$advisorsDescription5 = " ICO Expert";

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
$tokenTitle = "Token Distribution";

//Token Allocations
$tokenAllocations = "Token Allocations";
$tokenValue1 = "Public Sale: 50%";
$tokenValue2 = "Team: 15%";
$tokenValue3 = "Advisors: 5%";
$tokenValue4 = "Bounties: 2%";
$tokenValue5 = "POP: 10%";
$tokenValue6 = "Reserve: 18%";

//Use of Proceeds
$tokenProceeds = "Use of Proceeds";
$tokenProceedsValue1 = "Software Development: 40%";
$tokenProceedsValue2 = "Marketing &amp; I+D+i: 20%";
$tokenProceedsValue3 = "ETH Reserve: 20%";
$tokenProceedsValue4 = "Legal Process Expenses: 5%";
$tokenProceedsValue5 = "Comunity Development: 7%";
$tokenProceedsValue6 = "Administration Expenses: 8%";

//-------------------------------------------------------------------------------

//TOKEN PRICE - Tabla de valores del Token según vaya evolucionando la ICO
//===============================================================================

/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/                                                        $priceTitle = "Token Price";                                                                                          /**/
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/                                                                                                       $tokenStarts = "Token Starts: 01/09/2018 - Token Ends: 30/11/2018";    /**/  
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/ $rowTitle1 = "Original Price"; /**/ $row1Column1 = "$0.20";           /**/ $row1Column2 = "$0.20";            /**/ $row1Column3 = "$0.20";    /**/ $row1Column4 = "$0.20";   /**/ 
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/      
/**/ $rowTitle2 = "Discount %";     /**/ $row2Column1 = "70%";            /**/ $row2Column2 = "40%";             /**/ $row2Column3 = "10%";     /**/ $row2Column4 = "0%";         /**/ 
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/      
/**/ $rowTitle3 = "Token Price";    /**/ $row3Column1 = "$0.06";           /**/ $row3Column2 = "$0.12";            /**/ $row3Column3 = "$0.18";    /**/ $row3Column4 = "$0.20";   /**/ 
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/ $rowTitle4 = "Phases";         /**/ $row4Column1 = "Token Starts";   /**/ $row4Column2 = "Phase 2";         /**/ $row4Column3 = "Phase 3"; /**/ $row4Column4 = "Token Ends"; /**/
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/**/ $rowTitle5 = "Timeline";       /**/ $row5Column1 = "September 1-15"; /**/ $row5Column2 = "September 16-30"; /**/ $row5Column3 = "October"; /**/ $row5Column4 = "November";   /**/ 
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

//-------------------------------------------------------------------------------

//CONTACT - Información y contacto.
//===============================================================================
$contactTitle = "Contact Us";
$contactMail = "info@luxantdigitalbank.com";
$contactPhone = "925251029";
$contactAdress = "Calle Italia 113";
$contactPostal = "Toledo 45005";

$contactMapTitle = "VIEW MAP";
$contactFollow = "Follow us :";

$contactMailFormTitle = "Leave Us a Message";
$contactMailFormFirstName = "First Name";
$contactMailFormLastName = "Last Name";
$contactMailFormPhone = "Phone";
$contactMailFormEmail = "Email";
$contactMailFormMessage = "Message";
$buttomSubmitMessage = "SUBMIT YOUR MESSAGE";

//-------------------------------------------------------------------------------

//FOOTER - Datos generales al final del sitio web
//===============================================================================
$footerColumnCompanyTitle = "COMPANY";
$footerColumnCompanyContent1 = "About";
$footerColumnCompanyContent2 = "Team";
$footerColumnCompanyContent3 = "Blog";
$footerColumnCompanyContent4 = "Contact";

$footerColumnFundingTitle = "ICO FUNDING";
$footerColumnFundingContent1 = "Features";
$footerColumnFundingContent2 = "Product";
$footerColumnFundingContent3 = "Roadmap";
$footerColumnFundingContent4 = "Token";

$footerColumnPayMethods = "WE ACCEPT THIS PAY METHODS";

$footerColumnLuxAntDigital = "ALUX BANK";
$footerColumnLuxAntDigitalContent1 = "ALUX BANK, Buy Tokens";
$footerColumnLuxAntDigitalContent2 = "ALUX BANK, Tokens Alux"; 
$footerColumnLuxAntDigitalContent3 = "ALUX BANK, Electronic Banking";
$footerColumnLuxAntDigitalContent4 = "ALUX BANK, Profit";
$footerColumnLuxAntDigitalContent5 = "ALUX BANK, Ethereum Wallet";

$footerCopyright = "Copyright &copy; 2018. All rights reserved by";
$footerTermsandConditions = "Terms &amp; Conditions";
$footerPrivacyPolicy = "Privacy Policy";
$footerDisclaimer = "Disclaimer";

//-------------------------------------------------------------------------------
?>
