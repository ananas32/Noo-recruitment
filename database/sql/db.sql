-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: recruitment
-- ------------------------------------------------------
-- Server version	5.5.50

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article_translations`
--

DROP TABLE IF EXISTS `article_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `locale` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `creator_id` int(10) unsigned NOT NULL,
  `editor_id` int(10) unsigned NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo_alt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `incision` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0',
  `comments` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `video` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `og_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `og_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_article_translations_article_id_idx` (`article_id`),
  CONSTRAINT `fk_article_translations_article_id` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_translations`
--

LOCK TABLES `article_translations` WRITE;
/*!40000 ALTER TABLE `article_translations` DISABLE KEYS */;
INSERT INTO `article_translations` VALUES (1,2,'ru',1,1,'2018-02-25 20:22:00','ВЫНУЖДЕННОЕ ЛУКАВСТВО','ВЫНУЖДЕННОЕ ЛУКАВСТВО: ПОЛЬСКИЕ ВЛАСТИ ПЫТАЮТСЯ ПРЕДСТАВИТЬ УКРАИНСКИХ ЗАРОБИТЧАН БЕЖЕНЦАМИ','vinuzhdennoe-lukavstvo-polskie-vlasti-pitayutsya-predstavit-ukrainskih-zarobitchan-bezhentsami','Украина и Польша никак не могут сблизить свои позиции по вопросу беженцев. Так, уже после празднования Нового года премьер-министр Польши Матеуш Моравецкий вновь высказался в отношении наших...','<p>Украина и Польша никак не могут сблизить свои позиции по вопросу беженцев. Так, уже после празднования Нового года премьер-министр Польши Матеуш Моравецкий вновь высказался в отношении наших соотечественников, работающих в его стране. По заявлению руководителя польской исполнительной власти, в РП 1,5 миллиона мигрантов-украинцев, из них 5% непосредственно из района боевых действий. Поэтому Польша вносит свою лепту в решение вопроса беженцев, принимая на себя их волну на восточном фланге ЕС, и не согласна размещать выходцев из Африки и Ближнего Востока.</p>\r\n<p>Это не первое высказывание нового премьер-министра Польши на эту тему. Ранее он уже называл заробитчан из нашей страны беженцами, чем вызвал раздраженную реакцию украинских официальных лиц. Глава отечественного внешнеполитического ведомства даже недипломатично назвал такие утверждения &laquo;полной чушью&raquo;. Позицию министра поддержала вице-спикер парламента Ирина Геращенко, призвав официальных лиц руководствоваться официальными цифрами.</p>\r\n<p>В Польше действительно мало беженцев из нашей страны. По данным главы украинского МИД, за последние пару лет в РП такой статус предоставлен только 88 украинцам. Недавно поляки опубликовали по этому поводу более расширенную информацию. В частности, Управление по вопросам иностранцев обнародовало данные о том, что в Польше в 2017 году защиту в различных формах получили всего 520 иностранцев из 5 тыс. обращавшихся. Среди получивших защиту: 276 &ndash; граждане Украины, 87 россиян и 35 таджиков. Таким образом, сами польские официальные данные не подтверждают утверждение о множестве беженцев, главным образом из нашей страны. &nbsp;</p>\r\n<p>С другой стороны, поляков тоже можно понять. Им нужны рабочая сила на низкооплачиваемые по европейским меркам работы. Беженцы из Сирии и Ливии вряд ли будут трудится в Польше, как это делают украинцы. Им даже ассимилироваться в польском обществе будет трудно. Понимая, что от таких беженцев будут только проблемы и убытки, польские власти будут всеми силами пытаться увильнуть от их приема. При этом они пользуются любыми отговорками, в том числе и на основе данных украинской трудовой миграции.</p>\r\n<p>Конечно, формально можно назвать людей, которые едут в другую страну в поисках заработка, избегая экономических неурядиц на родине, беженцами. Но польским официальным лицам не стоит забывать, что также можно назвать и поляков, которые выехали на заработки в Великобританию, Германию, другие страны Европы. Поэтому в данном деликатном вопросе все-таки лучше действительно опираться на официальные цифры. Это позволит не смешивать заробитчан, которые приносят пользу принимающему государству, и настоящих беженцев, создающих ему проблемы. Пополнить ряды именно трудового десанта украинцев на польской территории помогает лицензированная компания на рынке зарубежного трудоустройства.</p>','ВЫНУЖДЕННОЕ ЛУКАВСТВО: ПОЛЬСКИЕ ВЛАСТИ ПЫТАЮТСЯ ПРЕДСТАВИТЬ УКРАИНСКИХ ЗАРОБИТЧАН БЕЖЕНЦАМИ','позиции, Украина, Польша','Украина и Польша никак не могут сблизить свои позиции по вопросу беженцев. Так, уже после празднования Нового года премьер-министр Польши Матеуш Моравецкий вновь высказался в отношении наших соотечественников, работающих в его стране. По заявлению руковод',0,0,NULL,1,0,'2018-02-24 22:00:00','2018-02-25 18:31:05',NULL,NULL),(2,1,'ru',1,1,'2018-02-25 21:53:00','Парфум','ВЫГОДА ОСТАЮЩИХСЯ: ВЛАСТИ ОБНАРУЖИЛИ ПОЛОЖИТЕЛЬНУЮ СТОРОНУ ТРУДОВОЙ МИГРАЦИИ','vigoda-ostayushtihsya-vlasti-obnaruzhili-polozhitelnuyu-storonu-trudovoy-migratsii','В украинском правительстве увидели еще один положительный эффект от действия безвиза с Евросоюзом. По словам министра социальной политики Андрея Ревы, благодаря ему больше украинцев едут на работу...','<p>В украинском правительстве увидели еще один положительный эффект от действия безвиза с Евросоюзом. По словам министра социальной политики Андрея Ревы, благодаря ему больше украинцев едут на работу в Европу. Благодаря этому в стране снижается количество безработных и уменьшается конкуренция за свободные вакансии.</p>\r\n<p>С данным утверждением не полностью согласны эксперты рынка зарубежного трудоустройства. Действительно, отток рабочей силы из Украины значительный и имеет тенденцию к росту. Большинство заробитчан уезжают за границу на временные работы. Через некоторое время они возвращаются на родину с заработанными деньгами. Этот процесс оказывает положительное влияние на украинскую экономику в ее нынешнем состоянии. Заробитчане не создают давление на отечественный рынок труда и приносят необходимую для выравнивания платежного баланса валюту.</p>\r\n<p>Однако, в последнее время усилился и другой, негативный для будущего Украины, процесс. Нашу страну стали покидать квалифицированные специалисты и молодежь. Причем выезжают они уже не временно, а стараются осесть в Европе на постоянной основе. Чтобы вернуть обратно этих людей властям необходимо будет приложить большие усилия. А без них достичь будущего процветания будет очень трудно.</p>\r\n<p>Что касается уровня безработицы в Украине, то его показатель зависит от методологии подсчета. Если брать в расчет только официально зарегистрированных безработных, то у нас на начало декабря 2017 года было всего 1,2% безработных. Международная организация труда считает не только зарегистрированных, но и тех, кто не имел работы более четырех месяцев и занимался ее поисками. По этой методике безработных в Украине уже около 10%. Есть еще данные о занятости в нашей стране трудоспособного населения. По официальным данным Госстата, в третьем квартале 2017 года в Украине имели работу всего 65,5% трудоспособных граждан. Как видно, резервы для трудовой миграции у нашей страны на сегодняшний день значительны.</p>\r\n<p>Связано ли увеличение количества заробитчан с введением везвиза с ЕС &ndash; вопрос довольно спорный. Формально безвизовый режим не предназначен для трудоустройства. Известно также, что некоторые соседи Украины, такие как Польша и Венгрия, настолько остро нуждаются в рабочей силе, что отклоняются в этом вопросе от общеевропейской политики и разрешают работать безвизовым туристам.</p>\r\n<p>Но, с другой стороны, по мнению экспертов, влияние безвиза на трудовую миграцию не очень значительно. Он подходит скорее для краткосрочных выездов на подработки в течение нескольких месяцев, и пользуются этой возможностью не так уж много заробитчан. Большинство предпочитает трудоустройство на более солидный срок с возможностью его продления. Подобные вакансии в Польше и некоторых других европейских странах предлагает своим клиентам лицензированная компания на рынке зарубежного трудоустройства.</p>','Выгода остающихся: власти обнаружили положительную сторону трудовой миграции','Выгода остающихся, власти, украинское правительство, безвиз, Евросоюз','В украинском правительстве увидели еще один положительный эффект от действия безвиза с Евросоюзом. По словам министра социальной политики Андрея Ревы, благодаря ему больше украинцев едут на работу в Европу. Благодаря этому в стране снижается количество',0,0,NULL,1,0,'2018-01-24 19:09:03','2018-02-25 18:36:48',NULL,NULL),(3,3,'ru',3,1,'2018-02-25 18:11:00','БЕЗ НАС НЕ ОБОЙДУТСЯ','БЕЗ НАС НЕ ОБОЙДУТСЯ: ЧЕХИЯ СОГЛАСИЛАСЬ ПРИНИМАТЬ НА РАБОТУ БОЛЬШЕ УКРАИНЦЕВ','bez-nas-ne-oboydutsya-chehiya-soglasilas-prinimat-na-rabotu-bolshe-ukraintsev','У украинцев, собирающихся на заработки в Европу, появился больший выбор вариантов трудоустройства. Вслед за Польшей дверь для трудовых мигрантов из нашей страны шире открыла и Чехия. Оказывается...','<p>У украинцев, собирающихся на заработки в Европу, появился больший выбор вариантов трудоустройства. Вслед за Польшей дверь для трудовых мигрантов из нашей страны шире открыла и Чехия. Оказывается, этой стране также не хватает рабочих рук для дальнейшего развития.</p>\r\n<p>По данным чешского Управления по трудоустройству, количество только официально зарегистрированных вакансий выросло за год с 135 тыс. до 216 тыс. Дефицит рабочих рук становится настоящей проблемой для местных предпринимателей. Несмотря на то, что около 280 тыс. чехов числятся безработными, в стране один из самых низких уровней безработицы в Евросоюзе (3,8%). Найти специалистов на некоторые специальности становится все труднее. Так, дефицит строителей в течение года увеличился с 8 тыс. до 14 тыс., а водителей &ndash; с 6 тыс. до 9,5 тыс.</p>\r\n<p>Выходом из сложившейся ситуации чешские деловые круги и правительство считают более активное привлечение в страну иностранных работников. Тем более, что пример решения такой же проблемы рядом &ndash; это Польша. Чешская Республика и ранее не отказывалась от иностранной рабочей силы. В настоящий момент на местных предприятиях официально трудоустроено около 350 тыс. иностранцев. Кроме того, чешская полиция регулярно обнаруживает и высылает нелегалов. В прошлом году таких выявлено более 3 тыс. человек, а сколько осталось &ndash; неизвестно.</p>\r\n<p>Учитывая изложенное, неудивительно, что чешское правительство приняло решение увеличить квоту на приглашение украинских заробитчан по упрощенной процедуре. Таким образом Чехия готова принять на работу 19,6 тыс. наших соотечественников. Еще в 2016-м данная квота составляла 3,8 тыс. человек, а в 2017-м &ndash; 9,6 тыс.</p>\r\n<p>В связи с указанным решением, украинцам следует ждать увеличения предложения вакансий на чешских предприятиях. По результатам исследования, проведенного крупнейшим международным кадровым агентством Adecco, Чехия заняла 25 место по привлекательности трудоустройства среди 119 стран мира</p>','БЕЗ НАС НЕ ОБОЙДУТСЯ: ЧЕХИЯ СОГЛАСИЛАСЬ ПРИНИМАТЬ НА РАБОТУ БОЛЬШЕ УКРАИНЦЕВ','БЕЗ НАС НЕ ОБОЙДУТСЯ, Чехия, Украинцы, работа','У украинцев, собирающихся на заработки в Европу, появился больший выбор вариантов трудоустройства. Вслед за Польшей дверь для трудовых мигрантов из нашей страны шире открыла и Чехия. Оказывается, этой стране также не хватает рабочих рук для дальнейшего...',0,0,NULL,1,0,'2018-01-28 17:11:55','2018-02-25 18:26:12',NULL,NULL),(4,4,'ru',3,1,'2018-02-25 15:41:00','ГРАНИЦА НЕ ЗНАЕТ ПОКОЯ','ГРАНИЦА НЕ ЗНАЕТ ПОКОЯ: ПОЛЬСКАЯ ПОГРАНСЛУЖБА ПОДСЧИТАЛА КОЛИЧЕСТВО ВЪЕХАВШИХ К НИМ УКРАИНЦЕВ','granitsa-ne-znaet-pokoya-polskaya-pogransluzhba-podschitala-kolichestvo-vehavshih-k-nim-ukraintsev','Украина не дает Польше превратиться в европейский тупик. Благодаря нашим соотечественникам, пополняются ряды рабочих, готовых добросовестно трудиться за небольшие, по меркам Европы, деньги...','<p>Украина не дает Польше превратиться в европейский тупик. Благодаря нашим соотечественникам, пополняются ряды рабочих, готовых добросовестно трудиться за небольшие, по меркам Европы, деньги. О масштабах трудовой миграции из Украины к нашему западному соседу существуют только оценочные данные. При этом цифра заробитчан колеблется в пределах от одного до двух миллионов украинцев. Более точную статистику собрать пока не удается.</p>\r\n<p>Недавно были опубликованы данные Пограничной службы РП о количестве людей, пересекших польскую границу в прошлом году. Они позволяют примерно представить масштаб траффика между двумя странами, большую часть которого обеспечивается именно трудовой миграцией.</p>\r\n<p>На запрос портала Укринформ польские пограничники ответили, что в 2017 году в РП въехало 10 млн украинцев. Всего же в этот период страну посетило 18,2 млн иностранцев. Таким образом, наши соотечественники составили большую половину от общего числа гостей Польши.</p>\r\n<p>При этом 4,23 млн украинцев въехали в рамках малого приграничного движения (МПД). То есть, это были жители 30-километровой приграничной зоны, которые, как правило, имеют тесные семейные, деловые и другие связи с польской стороной. По действующему порядку МПД, они могут находиться в Польше до 2-х месяцев и не имеют права в это время трудиться.</p>\r\n<p>Среди въезжавших в Польшу наших соотечественников естественно были и те, кто воспользовался безвизовым режимом с ЕС. Таких набралось 1,27 млн. По этим людям уже не все так однозначно. Хотя режим безвиза официально и не предусматривает возможности трудоустройства, власти Польши сделали для украинцев исключение из этого правила. Поэтому значительное число заробитчан среди безвизовых туристов все-таки было.</p>\r\n<p>Остальные почти 5 млн граждан Украины въехали на польскую территорию по визам. В этой массе доля трудовых мигрантов наибольшая, так как работать по предварительно оформленной рабочей визе осталось удобней всего. Даже с учетом туристов и транзита, а также того, что украинцы работали в Польше вахтовым методом, по полгода, все равно количество одновременно пребывающих в РП в прошлом году заробитчан вполне войдет в рамки 1-2 млн.</p>\r\n<p>Таким образом, оценочные данные о трудовой миграции вполне соответствуют действительности и подтверждаются статистикой пограничников.</p>\r\n<p>Желающие найти работу в Польше должны заранее определится в том, каким путем они пойдут к своей цели. Для этого лучше проконсультироваться со знающими людьми, а еще лучше &ndash; с профессионалами. Согласно приведенным данным польских пограничников, 29,7 тыс. украинцев было отказано во въезде. Причинами стали неправильно оформленные или отсутствующие документы, подтверждающие цель поездки, недостаточное количество денег и другие. Чтобы избежать подобных проблем и получить достойное рабочее место у добросовестного работодателя, советуем обратиться к специалистам лицензированной компании на рынке зарубежного трудоустройства.</p>','Граница не знает покоя: польская погранслужба подсчитала количество въехавших к ним украинцев','Граница не знает покоя, граница, Украина, Польша','Украина не дает Польше превратиться в европейский тупик. Благодаря нашим соотечественникам, пополняются ряды рабочих, готовых добросовестно трудиться за небольшие, по меркам Европы, деньги. О масштабах трудовой миграции из Украины к нашему западному сосед',0,0,NULL,1,0,'2018-01-28 17:41:17','2018-02-25 18:21:45',NULL,NULL),(5,5,'ru',3,1,'2018-02-25 20:00:00','ЭФФЕКТ ЗАРОБИТЧАНИНА:','ЭФФЕКТ ЗАРОБИТЧАНИНА: ТРУДОВЫЕ МИГРАНТЫ КОСВЕННО ВЛИЯЮТ НА ИНФЛЯЦИЮ В УКРАИНЕ','effekt-zarobitchanina-trudovie-migranti-kosvenno-vliyayut-na-inflyatsiyu-v-ukraine','Трудовая миграция оказывает все большее влияние на украинскую экономику. Например, замглавы Нацбанка Дмитрий Сологуб в своем недавнем интервью газете «Сегодня»...','<p>Трудовая миграция оказывает все большее влияние на украинскую экономику. Например, замглавы Нацбанка Дмитрий Сологуб в своем недавнем интервью газете &laquo;Сегодня&raquo; рассказал о положительных и отрицательных воздействиях заробитчанства на инфляцию в 2017 году.</p>\r\n<p>Как известно, прошлогоднее повышение цен далеко вышло за рамки коридора, который отводился ему главным банком страны. Но официальным данным, инфляция составила 13,7% вместо планируемых 8<u>+</u>2%.</p>\r\n<p>Ускорение роста цен, по мнению представителя НБУ, произошло из-за роста зарплат украинцев. В итоге, увеличилась себестоимость производства, повысился спрос на товары без увеличения предложения, и цены пошли вверх. С банкиром согласен и представитель МВФ в Украине Йоста Люнгман. Он заявил, что рост зарплат должен соответствовать увеличению производительности труда в стране. Только тогда удастся избежать отрицательного эффекта на экономику.</p>\r\n<p>Как связаны заробитчане с повышением зарплат внутри страны? По словам Сологуба, работодателям приходится увеличивать оплату труда своим работниками для того, чтобы удержать их от соблазна поехать на заработки за границу. То есть мигранты ослабляют конкуренцию за рабочее место и способствуют повышению доходов остающихся. И не их вина в том, что владельцы предприятий перекладывают это повышение на потребителей и увеличивают цены на свою продукцию. Поэтому виновных в инфляции стоит все же поискать в другом месте.</p>\r\n<p>Еще одна польза от заробитчан &ndash; это деньги, заработанные за границей и присланные в Украину. Положительный эффект от этих переводов также признан Нацбанком. Без этих миллиардов долларов банкиры вряд ли смогли бы удерживать курс гривны относительно стабильным. А значит, деньги трудовых мигрантов непосредственно помогают сдерживать инфляцию.</p>\r\n<p>Конечно, хотелось бы, чтобы Украина как можно быстрее вышла из экономического кризиса. Чтобы в нашей стране было достаточно рабочих мест с достойной оплатой во всех регионах. Тогда украинцы смогут спокойно трудиться дома и с уверенностью смотреть в будущее.</p>\r\n<p>Пока такого нет, миграционные процессы будут продолжаться и усугубляться, формируя значимый источник валютных поступлений. А значит будет потребность в добросовестных компаниях-посредниках. С нашей помощью соотечественники находят вакансии с наилучшими условиями у добросовестных работодателей.</p>','Эффект заробитчанина: трудовые мигранты косвенно влияют на инфляцию в Украине - Anthill','Трудовая миграция, Эффект заробитчанина','Трудовая миграция оказывает все большее влияние на украинскую экономику. Например, замглавы Нацбанка Дмитрий Сологуб в своем недавнем интервью газете «Сегодня» рассказал о положительных и отрицательных воздействиях заробитчанства на инфляцию в 2017 году.',0,0,NULL,1,0,'2018-01-28 17:46:11','2018-02-25 18:37:45',NULL,NULL);
/*!40000 ALTER TABLE `article_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `og_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_articles_category_id_idx` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'articles/February2018/p2KRtmBgE19TQ8tgLj2i8usH6damMepJdKRwuD8Z.jpeg',NULL,NULL),(2,1,'articles/February2018/dfWSKZL5XgeWz1ImN852LJBkoWo1LpTReQSXC98M.jpeg','articles/February2018/wgRg4xRQKFwvyhRCQ9FuieRHZA2CmQleeod11lkh.jpeg',NULL),(3,1,'articles/February2018/o006qERlEkh79IvGyBdicCJXkaB5zonLL9lL5ML1.jpeg',NULL,NULL),(4,1,'articles/February2018/ov8OOUL5849UkgMGxac5D3std8Sn5prseOkLJRO5.jpeg',NULL,NULL),(5,1,'articles/February2018/hX8HXcRuWlwXBSVvmavNQ0275LD40PGYZTU7mbcJ.jpeg',NULL,NULL);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `call_me`
--

DROP TABLE IF EXISTS `call_me`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `call_me` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_adress` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` tinytext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `call_me`
--

LOCK TABLES `call_me` WRITE;
/*!40000 ALTER TABLE `call_me` DISABLE KEYS */;
/*!40000 ALTER TABLE `call_me` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'news',NULL,NULL),(2,'articles',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_translations`
--

DROP TABLE IF EXISTS `category_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `locale` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category_translations_category_id_idx` (`category_id`),
  CONSTRAINT `fk_category_translations_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_translations`
--

LOCK TABLES `category_translations` WRITE;
/*!40000 ALTER TABLE `category_translations` DISABLE KEYS */;
INSERT INTO `category_translations` VALUES (1,1,'ru','Новости',NULL,'Новости','новости, парфумы','самие лучие парфумы'),(2,2,'ru','Статьи',NULL,'Статьи','Статьи о парфюмах, парфюмерия, парфюмер','Статьи о парфюмах, парфюмерия, парфюмер');
/*!40000 ALTER TABLE `category_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numbers` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `company_active` tinyint(4) DEFAULT NULL,
  `admin_active` tinyint(4) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `companies_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,1,'Киев','0764368746','contact@origami.team',1,1,'companies/February2018/WkeAsMnQ32rYwQM4ts1RGSpvkrGYh0EQwFuleGxK.jpeg');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_translations`
--

DROP TABLE IF EXISTS `company_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `locale` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_translations`
--

LOCK TABLES `company_translations` WRITE;
/*!40000 ALTER TABLE `company_translations` DISABLE KEYS */;
INSERT INTO `company_translations` VALUES (1,'anthill','Компания по розработке веб сайтов','ru',1);
/*!40000 ALTER TABLE `company_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'countries/February2018/FylqJFjAaBVO2FfEZSkXK5QLvCyx1OFOZZIeYeeX.png');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country_translations`
--

DROP TABLE IF EXISTS `country_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country_translations`
--

LOCK TABLES `country_translations` WRITE;
/*!40000 ALTER TABLE `country_translations` DISABLE KEYS */;
INSERT INTO `country_translations` VALUES (1,'1','ru','Венгрия'),(2,'2','ru','test');
/*!40000 ALTER TABLE `country_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'',1),(2,1,'author_id','text','Author',1,0,1,1,0,1,'',2),(3,1,'category_id','text','Category',1,0,1,1,1,0,'',3),(4,1,'title','text','Title',1,1,1,1,1,1,'',4),(5,1,'excerpt','text_area','excerpt',1,0,1,1,1,1,'',5),(6,1,'body','rich_text_box','Body',1,0,1,1,1,1,'',6),(7,1,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(8,1,'slug','text','slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',8),(9,1,'meta_description','text_area','meta_description',1,0,1,1,1,1,'',9),(10,1,'meta_keywords','text_area','meta_keywords',1,0,1,1,1,1,'',10),(11,1,'status','select_dropdown','status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(12,1,'created_at','timestamp','created_at',0,1,1,0,0,0,'',12),(13,1,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',13),(26,3,'id','number','id',1,0,0,0,0,0,'',1),(27,3,'name','text','name',1,1,1,1,1,1,'',2),(28,3,'email','text','email',1,1,1,1,1,1,'',3),(29,3,'password','password','password',1,0,0,1,1,0,'',4),(30,3,'remember_token','text','remember_token',0,0,0,0,0,0,'',5),(31,3,'created_at','timestamp','created_at',0,1,1,0,0,0,'',6),(32,3,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',7),(33,3,'avatar','image','avatar',0,1,1,1,1,1,'',8),(34,5,'id','number','id',1,0,0,0,0,0,'',1),(35,5,'name','text','name',1,1,1,1,1,1,'',2),(36,5,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(37,5,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(45,6,'id','number','id',1,0,0,0,0,0,'',1),(46,6,'name','text','Name',1,1,1,1,1,1,'',2),(47,6,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(48,6,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(49,6,'display_name','text','Display Name',1,1,1,1,1,1,'',5),(50,1,'seo_title','text','seo_title',0,1,1,1,1,1,'',14),(51,1,'featured','checkbox','featured',1,1,1,1,1,1,'',15),(52,3,'role_id','text','role_id',1,1,1,1,1,1,'',9),(53,7,'id','number','id',1,0,0,0,0,0,'',1),(54,7,'data_type_id','select_dropdown','Data Type',1,1,1,1,1,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"display_name_singular\"}}',2),(55,7,'details','text','Details',1,0,1,1,1,1,'{\"formfields_custom\":\"form-builder-details\"}',3),(56,8,'id','number','Id',1,0,0,0,0,0,NULL,1),(57,8,'slug','text','Псевдоним',1,0,1,1,1,0,'{\"validation\":{\"rule\":\"required|max:120\"}}',2),(58,8,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(59,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(60,8,'order','hidden','Порядок',1,1,0,0,0,0,NULL,5),(61,8,'menu','checkbox','Отображать в меню',1,1,1,1,1,0,'{\"on\":\"Да\",\"off\":\"Нет\"}',6),(62,9,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(63,9,'page_id','hidden','Page Id',1,0,0,0,0,0,NULL,2),(64,9,'locale','hidden','Locale',1,0,0,0,0,0,NULL,3),(65,9,'title','text','Заголовок',1,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:100\"}}',4),(66,9,'body','rich_text_box','Текст',0,0,1,1,1,0,NULL,5),(67,9,'meta_title','text','Seo название',0,0,1,1,1,0,'{\"validation\":{\"rule\":\"max:100\"}}',6),(68,9,'meta_keywords','text','Ключевые слова (meta)',0,0,1,1,1,0,'{\"validation\":{\"rule\":\"max:255\"}}',7),(69,9,'meta_description','text_area','Описание (meta)',0,0,1,1,1,0,'{\"validation\":{\"rule\":\"max:255\"}}',8),(70,10,'id','hidden','Id',1,0,0,0,0,0,NULL,2),(71,10,'position','number','Порядок',1,1,0,0,0,0,NULL,1),(72,10,'image','image','Изображение',1,1,1,1,1,1,'{\"crop\":[{\"name\":\"avatar\",\"size\":{\"name\":\"max\",\"width\":\"320\",\"height\":\"195\"}}]}',3),(73,10,'active','checkbox','Активность',0,1,1,1,1,1,'{\"on\":\"Да\",\"off\":\"Нет\"}',4),(74,11,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(75,11,'head_slider_id','hidden','Head Slider Id',1,0,0,0,0,0,NULL,2),(76,11,'locale','hidden','Locale',1,0,0,0,0,0,NULL,3),(77,11,'title','text','Заголовок',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:100\"}}',4),(78,11,'text','text_area','Текст',0,0,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:255\"}}',5),(79,12,'id','number','Id',1,1,0,0,0,0,'{\"bread-ajax-list\":{\"order-default\":\"desc\"}}',1),(80,12,'category_id','select_dropdown','Категория',1,1,1,1,1,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"title\"},\"validation\":{\"rule\":\"required\"},\"bread-ajax-list\":{\"data\":{\"slug\":\"categories\",\"column\":\"title\"}}}',2),(81,12,'image','image','Изображение',0,1,1,1,1,1,'{\"crop\":[{\"name\":\"home\",\"size\":{\"name\":\"norm\",\"width\":\"570\",\"height\":\"300\"}}],\"bread-ajax-list\":{\"view\":{\"image\":{\"prefix\":\"avatar\",\"suffix\":\"min\"},\"css-style\":\"width:100px\"},\"searchable\":false,\"orderable\":false}}',3),(82,12,'og_image','image','Facebook фото',0,0,1,1,1,0,'{\"crop\":[{\"name\":\"facebook\",\"size\":{\"name\":\"max\",\"width\":\"600\",\"height\":\"315\"}}]}',4),(83,12,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,NULL,5),(84,13,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(85,13,'article_id','hidden','Article Id',1,0,0,0,0,0,NULL,3),(86,13,'locale','hidden','Locale',1,0,0,0,0,0,NULL,4),(87,13,'creator_id','select_dropdown','Редактор',1,1,0,0,0,0,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\"},\"data\":{\"slug\":\"categories\",\"column\":\"title\"}}',5),(88,13,'editor_id','select_dropdown','Удалил',1,0,0,0,0,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',6),(89,13,'published_at','timestamp','Дата публикации',1,1,1,1,1,0,'{\"validation\":{\"rule\":\"required|date_format:Y-m-d H:i\"},\"datetimepicker\":{\"format\":\"YYYY-MM-DD HH:mm\",\"locale\":\"ru\"}}',7),(90,13,'photo_alt','text','Название фото',1,0,1,1,1,0,'{\"validation\":{\"rule\":\"required|max:100\"}}',8),(91,13,'title','text','Заголовок',1,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:100\"}}',9),(92,13,'slug','text','Псевдоним',1,0,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:120\"}}',10),(93,13,'body','rich_text_box','Текст',1,0,1,1,1,0,'{\"validation\":{\"rule\":\"required\"}}',11),(94,13,'meta_title','text','Seo название',1,0,1,1,1,0,'{\"validation\":{\"rule\":\"required|min:40|max:100\"}}',12),(95,13,'meta_keywords','text','Ключевые слова (meta)',1,0,1,1,1,0,'{\"validation\":{\"rule\":\"required|max:255\"}}',13),(96,13,'meta_description','text_area','Описание (meta)',1,0,1,1,1,0,'{\"validation\":{\"rule\":\"required|min:120|max:255\"}}',14),(97,13,'views','hidden','Views',1,0,0,0,0,0,NULL,15),(98,13,'likes','hidden','Likes',1,0,0,0,0,0,NULL,16),(99,13,'comments','hidden','Comments',0,0,0,0,0,0,NULL,17),(100,13,'active','checkbox','Активность',1,1,1,1,1,1,'{\"on\":\"Да\",\"off\":\"Нет\",\"bread-ajax-list\":{\"view\":{\"template\":\"voyager::bread-ajax-list.activity-togglable\"},\"searchable\":false,\"orderable\":false}}',18),(101,13,'video','checkbox','Статья содержит видео',1,0,1,1,1,0,'{\"on\":\"Да\",\"off\":\"Нет\"}',19),(102,13,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,20),(103,13,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,21),(104,13,'og_title','text','Facebook заглавие',0,0,1,1,1,0,NULL,22),(105,13,'og_description','text_area','Facebook описание',0,0,1,1,1,0,NULL,23),(111,15,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(112,15,'category_id','hidden','Category Id',1,0,0,0,0,0,NULL,2),(113,15,'locale','hidden','Locale',1,0,0,0,0,0,NULL,3),(114,15,'title','text','Заголовок',1,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:100\"}}',4),(115,15,'body','rich_text_box','Текст',0,0,0,1,1,0,NULL,5),(116,15,'meta_title','text','Seo название',1,0,1,1,1,0,'{\"validation\":{\"rule\":\"required|max:100\"}}',6),(117,15,'meta_keywords','text','Ключевые слова (meta)',1,0,1,1,1,0,'{\"validation\":{\"rule\":\"required|max:255\"}}',7),(118,15,'meta_description','text_area','Описание (meta)',1,0,1,1,1,0,'{\"validation\":{\"rule\":\"required|max:255\"}}',8),(119,16,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(120,16,'slug','text','Псевдоним',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"},\"validation\":{\"rule\":\"required|max:120\"}}',2),(121,16,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(122,16,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(123,13,'incision','text_area','Короткий врез',0,0,1,1,1,0,'{\"validation\":{\"rule\":\"required|max:200\"}}',2),(124,17,'id','text','Id',1,1,0,0,0,0,NULL,1),(125,17,'country_id','select_dropdown','Страна',1,1,1,1,1,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(126,17,'adress','text','Адресс',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:100\"}}',3),(127,17,'numbers','text','Телефон',0,0,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:100\"}}',4),(128,17,'email','text','Email',1,0,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:100\"}}',5),(129,17,'company_active','checkbox','Активность (отображать на сайте)',0,0,1,1,1,1,NULL,6),(130,17,'admin_active','checkbox','Отображать на сайте (на усмотрение админа)',0,0,1,1,1,1,NULL,7),(131,17,'image','image','Изображение',0,1,1,1,1,1,'{\"crop\":[{\"name\":\"avatar\",\"size\":{\"name\":\"norm\",\"width\":\"250\",\"height\":\"150\"}}]}',8),(132,18,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(133,18,'company_name','text','Название компании',1,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:100\"}}',2),(134,18,'description','text_area','Описание',0,0,1,1,1,1,NULL,3),(135,18,'locale','hidden','Locale',1,0,0,0,0,0,NULL,4),(136,18,'company_id','hidden','Company Id',1,0,0,0,0,0,NULL,5),(138,21,'id','text','Id',1,1,0,0,0,0,NULL,1),(139,21,'image','image','Изображение',0,1,1,1,1,1,'{\"crop\":[{\"name\":\"avatar\",\"size\":{\"name\":\"norm\",\"width\":\"250\",\"height\":\"150\"}}]}',2),(140,22,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(141,22,'country_id','hidden','Country Id',1,0,0,0,0,0,NULL,2),(142,22,'locale','hidden','Locale',1,0,0,0,0,0,NULL,3),(143,22,'name','text','Название страны',0,1,1,1,1,1,NULL,4),(144,23,'id','text','Id',1,1,0,0,0,0,NULL,1),(145,24,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(146,24,'status_id','hidden','Status Id',1,0,0,0,0,0,NULL,2),(147,24,'locale','hidden','Locale',1,0,0,0,0,0,NULL,3),(148,24,'name','text','Название статуса',0,1,1,1,1,1,NULL,4),(149,25,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(150,25,'status_id','select_dropdown','Статус',1,1,1,1,1,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',3),(151,25,'sex','text','Пол',0,0,1,1,1,1,NULL,4),(152,25,'age','text','Возраст',0,0,1,1,1,1,NULL,5),(153,25,'field_id','select_dropdown','Компания',0,1,1,1,1,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"company_name\"}}',6),(154,25,'payment','text','Оплата (в доларах)',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|numeric\"}}',8),(155,25,'admin_active','checkbox','Активность (админ)',0,0,1,1,1,1,NULL,10),(156,25,'vacancy_active','checkbox','Активность вакансии',0,0,1,1,1,1,NULL,11),(157,26,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(158,26,'name_vacancy','text','Название вакансии',1,1,1,1,1,1,NULL,2),(159,26,'description','text_area','Описание',0,1,1,1,1,1,NULL,3),(160,26,'vacancy_id','hidden','Vacancy Id',0,0,0,0,0,0,NULL,4),(161,26,'locale','hidden','Locale',0,0,0,0,0,0,NULL,5),(162,25,'image','image','Изображение',0,1,1,1,1,1,'{\"crop\":[{\"name\":\"home\",\"size\":{\"name\":\"norm\",\"width\":\"360\",\"height\":\"200\"}}]}',7),(163,25,'slug','text','Псевдоним',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required\"}}',9),(170,26,'conditions','text_area','Условия проживания',0,0,1,1,1,1,NULL,6),(171,26,'responsibility','text_area','Обязаности',0,0,1,1,1,1,NULL,7),(172,26,'work_schedule','text','Рабочий график',0,0,1,1,1,1,NULL,8),(173,26,'experience','text','Опыт работы',0,0,1,1,1,1,NULL,9),(174,27,'id','number','Id',1,1,0,0,0,0,NULL,1),(175,27,'active','checkbox','Активность',0,1,1,1,1,1,NULL,2),(176,28,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(177,28,'name','text','Название специализации',0,1,1,1,1,1,NULL,2),(178,28,'specialization_id','hidden','Specialization Id',0,0,0,0,0,0,NULL,3),(179,28,'locale','hidden','Locale',0,0,0,0,0,0,NULL,4),(180,25,'specialization_id','select_dropdown','Специализация',0,0,1,1,1,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(181,30,'id','number','Id',1,1,0,0,0,0,NULL,1),(182,30,'vacancy_id','select_dropdown','Название вакаснсии',1,1,1,1,1,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name_vacancy\"}}',2),(183,30,'name','text','Имя',1,1,1,1,1,1,NULL,3),(184,30,'contact','text','Контакт для связи',1,0,1,1,1,1,NULL,4),(185,30,'text','text','Вопрос',1,0,1,1,1,1,NULL,5),(186,31,'id','number','Id',1,1,0,0,0,0,NULL,1),(187,31,'work_id','select_dropdown','Вакансия',0,0,1,1,1,1,'{\"default\":\"----\",\"relationship\":{\"key\":\"id\",\"label\":\"name_vacancy\"}}',2),(188,31,'name','text','Имя',0,0,1,1,1,1,NULL,3),(189,31,'surname','text','Фамилия',0,1,1,1,1,1,NULL,4),(190,31,'middle_name','text','Отчество',0,0,1,1,1,1,NULL,5),(191,31,'age','number','Года',0,1,1,1,1,1,NULL,6),(192,31,'email','text','Email',0,1,1,1,1,1,NULL,7),(193,31,'drive_license','text_area','Права на вождение',0,0,1,1,1,1,NULL,8),(194,31,'level_education','text_area','Уровень образования',0,0,1,1,1,1,NULL,9),(195,31,'qualification','text_area','Квалификация',0,1,1,1,1,1,NULL,10),(196,31,'experience','text_area','Навыки',0,0,1,1,1,1,NULL,11),(197,31,'other_languages','text_area','Языки',0,0,1,1,1,1,NULL,12),(198,31,'en','radio_btn','EN',0,0,1,1,1,1,NULL,13),(199,31,'de','radio_btn','De',0,0,1,1,1,1,NULL,14),(200,31,'ve','radio_btn','Ve',0,0,1,1,1,1,NULL,15),(201,31,'money','text','Уровень ЗП',0,0,1,1,1,1,NULL,16),(202,31,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,17),(203,31,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,18),(204,31,'file','file','Документ',0,0,1,1,1,1,NULL,19);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','','',NULL,1,0,'2018-01-21 07:24:23','2018-01-21 07:24:23'),(3,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','','',NULL,1,0,'2018-01-21 07:24:23','2018-01-21 07:24:23'),(5,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu','','',NULL,1,0,'2018-01-21 07:24:23','2018-01-21 07:24:23'),(6,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role','','',NULL,1,0,'2018-01-21 07:24:23','2018-01-21 07:24:23'),(7,'form_builders','form-builders','Form Builder','Forms Builder','voyager-list','TCG\\Voyager\\Models\\FormBuilder','','',NULL,1,0,'2018-01-21 07:24:23','2018-01-21 07:24:23'),(8,'pages','pages','Страница','Страницы','voyager-file-text','App\\Page',NULL,NULL,'{\"query\":{\"where\":[[\"articles.id\",\"<\",609],[\"articles.id\",\">\",607]]}}',1,0,'2018-01-21 10:47:23','2018-02-16 11:18:11'),(9,'page_translations','page-translations','Page Translation','Page Translations',NULL,'App\\PageTranslation',NULL,NULL,NULL,1,0,'2018-01-21 10:53:17','2018-01-21 10:53:17'),(10,'head_sliders','head-sliders','Слайд','Слайды',NULL,'App\\HeadSlider',NULL,NULL,'{\"datatable\":{\"rowReorder\":{\"selector\":\"tr td:not(:has(.toggle), :last-child)\",\"order_column\":\"position\"}}}',1,0,'2018-01-22 20:41:56','2018-01-22 20:43:26'),(11,'head_slider_translations','head-slider-translations','Head Slider Translation','Head Slider Translations',NULL,'App\\HeadSliderTranslation',NULL,NULL,NULL,1,0,'2018-01-22 20:42:04','2018-01-22 20:42:04'),(12,'articles','articles','Статья','Статьи',NULL,'App\\Article','\\TCG\\Voyager\\Http\\Controllers\\TranslationBreadAjaxController',NULL,'{\"buttons\":{\"read\":{\"attribute\":\"url\"}},\"datatable\":{\"order\":[[0,\"desc\"]]}}',1,0,'2018-01-23 20:47:53','2018-01-29 20:33:37'),(13,'article_translations','article-translations','Article Translation','Article Translations',NULL,'App\\ArticleTranslation',NULL,NULL,NULL,1,0,'2018-01-23 20:48:06','2018-01-23 20:48:06'),(15,'category_translations','category-translations','Category Translation','Category Translations',NULL,'App\\CategoryTranslation',NULL,NULL,NULL,1,0,'2018-01-23 21:32:48','2018-01-23 21:32:48'),(16,'categories','categories','Категория','Категории',NULL,'App\\Category',NULL,NULL,NULL,1,0,'2018-01-23 21:39:57','2018-01-23 21:39:57'),(17,'companies','companies','Компания','Компании',NULL,'App\\Company',NULL,NULL,NULL,1,0,'2018-02-16 13:07:37','2018-02-16 13:10:04'),(18,'company_translations','company-translations','Company Translation','Company Translations',NULL,'App\\CompanyTranslation',NULL,NULL,NULL,1,0,'2018-02-16 13:07:44','2018-02-16 13:07:44'),(21,'countries','countries','Страна','Страны',NULL,'App\\Country',NULL,NULL,NULL,1,0,'2018-02-16 13:38:24','2018-02-16 13:38:24'),(22,'country_translations','country-translations','Country Translation','Country Translations',NULL,'App\\CountryTranslation',NULL,NULL,NULL,1,0,'2018-02-16 13:46:44','2018-02-16 13:46:44'),(23,'status','status','Статус','Статусы',NULL,'App\\Status',NULL,NULL,NULL,1,0,'2018-02-16 19:42:38','2018-02-16 19:42:38'),(24,'status_translations','status-translations','Status Translation','Status Translations',NULL,'App\\StatusTranslation',NULL,NULL,NULL,1,0,'2018-02-16 19:43:12','2018-02-16 19:43:12'),(25,'vacancies','vacancies','Вакансия','Вакансии',NULL,'App\\Vacancy',NULL,NULL,NULL,1,0,'2018-02-16 19:50:08','2018-02-16 19:50:08'),(26,'vacancy_translations','vacancy-translations','Vacancy Translation','Vacancy Translations',NULL,'App\\VacancyTranslation',NULL,NULL,NULL,1,0,'2018-02-16 19:51:36','2018-02-16 19:51:36'),(27,'specializations','specializations','Специализация','Специализации',NULL,'App\\Specialization',NULL,NULL,NULL,1,0,'2018-02-24 16:57:17','2018-02-24 16:57:17'),(28,'specialization_translations','specialization-translations','Specialization translation','Specialization translations',NULL,'App\\SpecializationTranslation',NULL,NULL,NULL,1,0,'2018-02-24 17:00:02','2018-02-24 17:00:02'),(30,'vacancy_questions','vacancy-questions','Вопрос по вакансии','Вопросы по вакансиям',NULL,'App\\VacancyQuestion',NULL,NULL,NULL,1,0,'2018-02-25 17:03:03','2018-02-25 17:03:03'),(31,'resumes','resumes','Резюме','Резюме',NULL,'App\\Resume',NULL,NULL,NULL,1,0,'2018-02-27 16:59:09','2018-02-27 16:59:09');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_builders`
--

DROP TABLE IF EXISTS `form_builders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_builders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `form_builders_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `form_builders_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_builders`
--

LOCK TABLES `form_builders` WRITE;
/*!40000 ALTER TABLE `form_builders` DISABLE KEYS */;
INSERT INTO `form_builders` VALUES (1,12,'[{\"class\":\"col-md-7\",\"panels\":[{\"class\":\"panel\",\"title\":\"Основная информация\",\"fields\":[\"category_id\",\"title\",\"slug\",\"published_at\",\"body\",\"incision\",\"video\",\"active\"]},{\"class\":\"panel panel-bordered panel-info\",\"title\":\"voyager.post.seo_content\",\"fields\":[\"meta_title\",\"meta_keywords\",\"meta_description\"]}]},{\"class\":\"col-md-5\",\"panels\":[{\"class\":\"panel panel-bordered panel-primary\",\"title\":\"Фотографии\",\"fields\":[\"photo_alt\",\"image\"]},{\"class\":\"panel panel panel-bordered panel-primary\",\"title\":\"Facebook\",\"fields\":[\"og_image\",\"og_title\",\"og_description\"]}]}]',NULL);
/*!40000 ALTER TABLE `form_builders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Панель приборов','','_self','voyager-boat','#000000',NULL,1,'2018-01-21 07:24:23','2018-01-21 07:46:54','voyager.dashboard','null'),(2,1,'Файлы','','_self','voyager-images','#000000',NULL,6,'2018-01-21 07:24:23','2018-01-23 20:14:11','voyager.media.index','null'),(3,1,'Posts','','_self','voyager-news',NULL,NULL,7,'2018-01-21 07:24:23','2018-01-23 20:14:11','voyager.posts.index',NULL),(4,1,'Пользователи','','_self','voyager-person','#000000',NULL,3,'2018-01-21 07:24:23','2018-01-21 07:47:36','voyager.users.index','null'),(5,1,'Категории','','_self','voyager-categories','#000000',16,2,'2018-01-21 07:24:23','2018-01-23 20:13:55','voyager.categories.index','null'),(6,1,'Страницы','','_self','voyager-file-text','#000000',16,3,'2018-01-21 07:24:23','2018-01-23 20:13:55','voyager.pages.index','null'),(7,1,'Роли','','_self','voyager-lock','#000000',NULL,2,'2018-01-21 07:24:23','2018-01-21 07:47:15','voyager.roles.index','null'),(8,1,'Инструменты','','_self','voyager-tools','#000000',NULL,8,'2018-01-21 07:24:23','2018-01-23 20:14:11',NULL,''),(9,1,'Конструктор Меню','','_self','voyager-list','#000000',8,1,'2018-01-21 07:24:23','2018-01-23 20:12:11','voyager.menus.index','null'),(10,1,'Конструктор Форм','','_self','voyager-list','#000000',8,2,'2018-01-21 07:24:23','2018-01-23 20:12:11','voyager.form-builders.index','null'),(11,1,'База данных','','_self','voyager-data','#000000',8,3,'2018-01-21 07:24:23','2018-01-23 20:12:11','voyager.database.index','null'),(12,1,'Компас','/admin/compass','_self','voyager-compass','#000000',8,4,'2018-01-21 07:24:23','2018-01-23 20:12:11',NULL,''),(13,1,'Настройки','','_self','voyager-settings','#000000',NULL,9,'2018-01-21 07:24:23','2018-01-23 20:14:11','voyager.settings.index','null'),(14,1,'Слайдер (head)','','_self','voyager-photo','#000000',NULL,5,'2018-01-23 17:46:17','2018-01-23 20:14:11','voyager.head-sliders.index','null'),(15,1,'Статьи','','_self','voyager-news','#000000',16,1,'2018-01-23 20:07:07','2018-01-23 20:13:27','voyager.articles.index','null'),(16,1,'Контент','','_self','voyager-window-list','#000000',NULL,4,'2018-01-23 20:11:57','2018-01-23 20:12:11',NULL,''),(17,1,'Список компаний','','_self','voyager-window-list','#000000',NULL,10,'2018-02-16 13:16:47','2018-02-25 16:31:45','voyager.companies.index','null'),(18,1,'Страны','','_self','voyager-lighthouse','#000000',NULL,11,'2018-02-16 13:48:20','2018-02-25 16:56:21','voyager.countries.index','null'),(19,1,'Статусы вакансий','','_self','voyager-star-half','#000000',NULL,12,'2018-02-16 19:43:56','2018-02-25 16:59:14','voyager.status.index','null'),(20,1,'Список вакансий','','_self','voyager-receipt','#000000',NULL,13,'2018-02-16 19:52:15','2018-02-25 17:00:47','voyager.vacancies.index','null'),(21,1,'Специализации вакансий','','_self','voyager-sun','#000000',NULL,14,'2018-02-24 17:01:21','2018-02-25 17:01:34','voyager.specializations.index','null'),(22,1,'Вопросы по вакансиям','','_self','voyager-bubble','#000000',NULL,15,'2018-02-25 17:05:37','2018-02-25 18:24:14','voyager.vacancy-questions.index','null'),(23,1,'Список резюме','','_self',NULL,'#000000',NULL,16,'2018-02-27 17:00:14','2018-02-27 17:00:14','voyager.resumes.index','null');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2018-01-21 07:24:23','2018-01-21 07:24:23');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_01_01_000000_create_pages_table',1),(6,'2016_01_01_000000_create_posts_table',1),(7,'2016_02_15_204651_create_categories_table',1),(8,'2016_05_19_173453_create_menu_table',1),(9,'2016_10_21_190000_create_roles_table',1),(10,'2016_10_21_190000_create_settings_table',1),(11,'2016_11_30_135954_create_permission_table',1),(12,'2016_11_30_141208_create_permission_role_table',1),(13,'2016_12_26_201236_data_types__add__server_side',1),(14,'2017_01_13_000000_add_route_to_menu_items_table',1),(15,'2017_01_14_005015_create_translations_table',1),(16,'2017_01_15_000000_add_permission_group_id_to_permissions_table',1),(17,'2017_01_15_000000_create_permission_groups_table',1),(18,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(19,'2017_03_06_000000_add_controller_to_data_types_table',1),(20,'2017_04_21_000000_add_order_to_data_rows_table',1),(21,'2017_08_01_195854_create_form_builders_table',1),(22,'2017_11_04_000000_alter_post_nullable_fields_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_translations`
--

DROP TABLE IF EXISTS `page_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned NOT NULL,
  `locale` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  PRIMARY KEY (`id`),
  KEY `page_translations_page_id_index` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_translations`
--

LOCK TABLES `page_translations` WRITE;
/*!40000 ALTER TABLE `page_translations` DISABLE KEYS */;
INSERT INTO `page_translations` VALUES (1,1,'ru','О нас','<p>Компания <strong>AntHill Hungary</strong>&nbsp;специализируется на предоставлении услуг в сфере трудоустройства за рубежом. Мы обеспечим Вас как базовой консультацией на тему трудоустройства за границей.и устроим Вас на работу полностью официально и <strong>бесплатно.</strong></p>\r\n<p><strong>Сотрудничая с AntHill Hungary</strong><strong>, Вы гарантировано получаете:</strong></p>\r\n<ul>\r\n<li>полную информационную поддержку в процессе трудоустройства: от подбора вакансии до подписания трудового договора.</li>\r\n<li>консультационное сопровождение и помощь в формировании пакета документов для получения рабочей визы</li>\r\n<li>легальную работу за границей: мы работаем согласно Законодательству страны трудоустройства</li>\r\n<li>честное предоставление информации о вакансии: сколько Вы действительно сможете заработать; сколько часов в неделю будете работать; что будет входить в Ваши должностные обязанности</li>\r\n<li>поддержку после Вашего выезда из Украины в страну трудоустройства: мы остаемся на связи и подскажем Вам решение адаптационных трудностей с помощью местного координатора; посоветуем, как правильно поступить в форс-мажорных ситуациях</li>\r\n</ul>\r\n<p>Почему&nbsp;<strong>AntHill Hungary</strong>&nbsp;выполняет обещанное? Мы &ndash; молодая амбициозная команда профессионалов, работающая на принципах доверия, , понимая, что на нашей ответственности лежит жизненное благосостояние других людей.</p>\r\n<p>Кроме того, работа <strong>AntHill Hungary</strong>&nbsp;базируется на полноценном ресурсном фундаменте: наши контрагенты &ndash; проверенные временем и успешным сотрудничеством работодатели , давно ставшие партнерами. Наши информационные базы охватывают вакансии практически всех специализаций&nbsp; трудоустройства.</p>\r\n<p>Будем рады получить Ваш звонок или письмо с вопросами по трудоустройству за границей! И будьте готовы: очень скоро Вы обретете работу, которая изменит Вашу жизнь к лучшему!</p>','О нас','О нас, Anthill','Здесь вы можете узнать всю необходимую информацию о компании Anthill!'),(2,2,'ru','Новости',NULL,'Новости','Новости, Anthill','Эксклюзивные новости о работе в Европе. Все о работе на сайте Anthill!'),(3,3,'ru','Сотрудничество','<p><strong>Компания&nbsp;AntHill Hungary приглашает к сотрудничеству агентов из других регионов!</strong></p>\r\n<p>Наши основные услуги, которые мы предоставляем нашим согражданам: легальное трудоустройство за границей, иммиграционный сервис, визовую поддержку. AntHill Hungary поддерживает своих клиентов, соискателей работы за рубежом, даже после их выезда из Украины. Мы ценим и уважаем наших клиентов, работая только с проверенными иностранными партнёрами. На данный момент мы ищем партнеров в Украине &ndash; мы формируем команду региональных представителей по всем областям!</p>\r\n<p>AntHill Hungary заинтересован в том, чтобы наши агенты были профессионалами. Для этого мы сделаем все возможное и обеспечим Вас соответствующими условиями для &nbsp;развития Вашего творческого потенциала и повышения как уровня Ваших знаний, так и финансового роста.</p>\r\n<p>В чем выгода работы в команде <strong>AntHill Hungary</strong>?</p>\r\n<ul>\r\n<li>Мы подписываем с агентами договор о сотрудничестве &ndash; Ваши права и обязанности защищены Документом</li>\r\n<li>Мы предоставляем Вам все необходимые материалы для работы &nbsp;и право обратиться за помощью к своему менеджеру или руководителю при возникновении трудностей</li>\r\n<li>Вам будет предоставлен доступ к базе с актуальными вакансиями</li>\r\n<li>Мы оказываем финансовую поддержку в размещении рекламы Ваших услуг в Регионе/Области</li>\r\n<li>Отсутствие и ограничений в любом виде роста, в т.ч. финансового &mdash; Вы узнаете, что бонусы могут выплачиваться без задержек</li>\r\n<li>Мы прислушиваемся ко мнению сотрудников &ndash; нам интересно Ваше мнение и предложения по развитию AntHill Hungary</li>\r\n</ul>\r\n<p>Для жителей других городов!</p>\r\n<p>Мы с радостью проведем собеседование по Skype, либо телефону. Так же мы можем пригласить Вас на личное собеседование и однодневную стажировку в г. Киев. Стажировка предполагает знакомство с командой AntHill Hungary, а также &ndash; погружение в рабочую обстановку нашей деятельности!</p>\r\n<p>В обязанности агента входит:</p>\r\n<ul>\r\n<li>Реклама услуг AntHill Hungary на вверенной территории (первых 2 месяца, мы готовы предоставить частичную финансовую поддержку)</li>\r\n<li>Поиск клиентов, прием телефонных звонков и профессиональная консультация об услугах компании, связанным с трудоустройством за рубежом</li>\r\n<li>Работа с базой Клиентов и Вакансий: заполнение информации о клиентах, подбор подходящих вакансий</li>\r\n<li>Оформление пакета документов, необходимого для получения визы</li>\r\n</ul>\r\n<p>Требования: активность, коммуникабельность и&nbsp;желание работать и зарабатывать!</p>','Сотрудничество','Сотрудничество, Anthill','Здесь вы можете найти необходимую информацию о компании, с которыми мы сотрудничаем.'),(4,4,'ru','Собития',NULL,NULL,NULL,NULL),(5,5,'ru','Бренды',NULL,NULL,NULL,NULL),(6,6,'ru','Интернет-магазины',NULL,NULL,NULL,NULL),(7,7,'ru','Парфюмерия off-line',NULL,NULL,NULL,NULL),(8,8,'ru','Статьи/обзоры',NULL,NULL,NULL,NULL),(9,9,'ru','Контакты','<div class=\"col-sm-4\"><strong>Главный офис</strong>:\r\n<p>Hungary,9094 T&aacute;pszentmkl&oacute;s,Fő utca 38&nbsp;</p>\r\n</div>\r\n<div class=\"col-sm-4\"><strong>Телефоны</strong>:\r\n<p>+380 95 113 12 14</p>\r\n<p>+380 66 267 35 28</p>\r\n</div>\r\n<div class=\"col-sm-4\"><strong>Эл.почта</strong>: work.aleh@gmail.com\r\n<p><strong>Skype</strong>: christophori309</p>\r\n</div>\r\n<p>пн-пт: 09:00 &ndash; 18:00 сб &mdash; выходной, вс &mdash; выходной</p>','Контакты','Контакты, Anthill','Здесь вы можете найти наши контакты.'),(10,10,'ru','Главная','<p><strong>Фирма AntHill Hungary более известна в Словакии и в Венгрии. Занимается трудоустройством 12 лет. В Украине это первый большой наш проект, но продвигаемся очень хорошо.</strong></p>\r\n<p>Что мы предлагаем:</p>\r\n<ol>\r\n<li>Абсолютно бесплатное оформление документов. Это обозначает, что из зарплаты людей тоже ничего не стягивается.</li>\r\n<li>Современная система поиска рабочих мест, индивидуально для каждого человека, с учетом его возможностей и желаний.</li>\r\n<li>Наличие большого количества рабочих мест в сферах производства, компютерной технологии, строительства и так дальше.</li>\r\n<li>Обеспечиваем защиту интересов за все время рабочего стажа для каждого рабочего.(Как раньше профсоюз)</li>\r\n<li>Занимаемся исключительно официальными рабочими местами, все делаем легально.</li>\r\n<li>Не предоставляем \"более дешевую\" рабочую силу, все получают одинаковую зарплату,и украинские и венгерские рабочие.</li>\r\n<li>Чтоб устроиться на работу,достаточно иметь действующий загранпаспорт и желание работать.</li>\r\n</ol>','Главная','Главная страница, Anthill','Главная страница сайта - Anthill.'),(11,11,'ru','Найти работу',NULL,'Найти работу','Найти работу, робота, робота заграницей,  Anthill, робота anthill','Здесь вы можете найти себе работу в Европе!'),(12,12,'ru','Отправте свое резюме',NULL,'Отправить резюме - Anthill','Отправить резюме, резюме,  Anthill, работа','Отправить резюме');
/*!40000 ALTER TABLE `page_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` tinyint(4) NOT NULL DEFAULT '0',
  `menu` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'about',NULL,NULL,1,1),(2,'news',NULL,NULL,4,1),(3,'sotrudnichestvo',NULL,NULL,3,1),(9,'contacts',NULL,NULL,5,1),(10,'home',NULL,NULL,10,0),(11,'work',NULL,NULL,2,1),(12,'add-resume',NULL,NULL,0,0);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_groups`
--

DROP TABLE IF EXISTS `permission_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_groups`
--

LOCK TABLES `permission_groups` WRITE;
/*!40000 ALTER TABLE `permission_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(1,2),(2,1),(3,1),(3,2),(4,1),(5,1),(5,2),(6,1),(7,1),(8,1),(9,1),(10,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(21,2),(22,1),(22,2),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(41,2),(42,1),(42,2),(43,1),(43,2),(44,1),(44,2),(45,1),(51,1),(51,2),(52,1),(52,2),(53,1),(53,2),(54,1),(54,2),(55,1),(61,1),(61,2),(62,1),(62,2),(63,1),(63,2),(64,1),(64,2),(65,1),(81,1),(81,2),(82,1),(82,2),(83,1),(83,2),(84,1),(84,2),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1),(101,1),(102,1),(103,1),(104,1),(105,1),(111,1),(112,1),(113,1),(114,1),(115,1),(121,1),(122,1),(123,1),(124,1),(125,1),(131,1),(132,1),(133,1),(134,1),(135,1),(141,1),(142,1),(143,1),(144,1),(145,1),(146,1),(147,1),(148,1),(149,1),(150,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(2,'browse_database',NULL,'2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(3,'browse_media',NULL,'2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(4,'browse_compass',NULL,'2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(5,'browse_settings',NULL,'2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(6,'browse_menus','menus','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(7,'read_menus','menus','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(8,'edit_menus','menus','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(9,'add_menus','menus','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(10,'delete_menus','menus','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(16,'browse_roles','roles','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(17,'read_roles','roles','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(18,'edit_roles','roles','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(19,'add_roles','roles','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(20,'delete_roles','roles','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(21,'browse_users','users','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(22,'read_users','users','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(23,'edit_users','users','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(24,'add_users','users','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(25,'delete_users','users','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(26,'browse_posts','posts','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(27,'read_posts','posts','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(28,'edit_posts','posts','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(29,'add_posts','posts','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(30,'delete_posts','posts','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(36,'browse_form_builders','form_builders','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(37,'read_form_builders','form_builders','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(38,'edit_form_builders','form_builders','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(39,'add_form_builders','form_builders','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(40,'delete_form_builders','form_builders','2018-01-21 07:24:23','2018-01-21 07:24:23',NULL),(41,'browse_pages','pages','2018-01-21 10:47:23','2018-01-21 10:47:23',NULL),(42,'read_pages','pages','2018-01-21 10:47:23','2018-01-21 10:47:23',NULL),(43,'edit_pages','pages','2018-01-21 10:47:23','2018-01-21 10:47:23',NULL),(44,'add_pages','pages','2018-01-21 10:47:23','2018-01-21 10:47:23',NULL),(45,'delete_pages','pages','2018-01-21 10:47:23','2018-01-21 10:47:23',NULL),(46,'browse_page_translations','page_translations','2018-01-21 10:53:17','2018-01-21 10:53:17',NULL),(47,'read_page_translations','page_translations','2018-01-21 10:53:17','2018-01-21 10:53:17',NULL),(48,'edit_page_translations','page_translations','2018-01-21 10:53:17','2018-01-21 10:53:17',NULL),(49,'add_page_translations','page_translations','2018-01-21 10:53:17','2018-01-21 10:53:17',NULL),(50,'delete_page_translations','page_translations','2018-01-21 10:53:17','2018-01-21 10:53:17',NULL),(51,'browse_head_sliders','head_sliders','2018-01-22 20:41:56','2018-01-22 20:41:56',NULL),(52,'read_head_sliders','head_sliders','2018-01-22 20:41:56','2018-01-22 20:41:56',NULL),(53,'edit_head_sliders','head_sliders','2018-01-22 20:41:56','2018-01-22 20:41:56',NULL),(54,'add_head_sliders','head_sliders','2018-01-22 20:41:56','2018-01-22 20:41:56',NULL),(55,'delete_head_sliders','head_sliders','2018-01-22 20:41:56','2018-01-22 20:41:56',NULL),(56,'browse_head_slider_translations','head_slider_translations','2018-01-22 20:42:04','2018-01-22 20:42:04',NULL),(57,'read_head_slider_translations','head_slider_translations','2018-01-22 20:42:04','2018-01-22 20:42:04',NULL),(58,'edit_head_slider_translations','head_slider_translations','2018-01-22 20:42:04','2018-01-22 20:42:04',NULL),(59,'add_head_slider_translations','head_slider_translations','2018-01-22 20:42:04','2018-01-22 20:42:04',NULL),(60,'delete_head_slider_translations','head_slider_translations','2018-01-22 20:42:04','2018-01-22 20:42:04',NULL),(61,'browse_articles','articles','2018-01-23 20:47:53','2018-01-23 20:47:53',NULL),(62,'read_articles','articles','2018-01-23 20:47:53','2018-01-23 20:47:53',NULL),(63,'edit_articles','articles','2018-01-23 20:47:53','2018-01-23 20:47:53',NULL),(64,'add_articles','articles','2018-01-23 20:47:53','2018-01-23 20:47:53',NULL),(65,'delete_articles','articles','2018-01-23 20:47:53','2018-01-23 20:47:53',NULL),(66,'browse_article_translations','article_translations','2018-01-23 20:48:06','2018-01-23 20:48:06',NULL),(67,'read_article_translations','article_translations','2018-01-23 20:48:06','2018-01-23 20:48:06',NULL),(68,'edit_article_translations','article_translations','2018-01-23 20:48:06','2018-01-23 20:48:06',NULL),(69,'add_article_translations','article_translations','2018-01-23 20:48:06','2018-01-23 20:48:06',NULL),(70,'delete_article_translations','article_translations','2018-01-23 20:48:06','2018-01-23 20:48:06',NULL),(76,'browse_category_translations','category_translations','2018-01-23 21:32:48','2018-01-23 21:32:48',NULL),(77,'read_category_translations','category_translations','2018-01-23 21:32:48','2018-01-23 21:32:48',NULL),(78,'edit_category_translations','category_translations','2018-01-23 21:32:48','2018-01-23 21:32:48',NULL),(79,'add_category_translations','category_translations','2018-01-23 21:32:48','2018-01-23 21:32:48',NULL),(80,'delete_category_translations','category_translations','2018-01-23 21:32:48','2018-01-23 21:32:48',NULL),(81,'browse_categories','categories','2018-01-23 21:39:57','2018-01-23 21:39:57',NULL),(82,'read_categories','categories','2018-01-23 21:39:57','2018-01-23 21:39:57',NULL),(83,'edit_categories','categories','2018-01-23 21:39:57','2018-01-23 21:39:57',NULL),(84,'add_categories','categories','2018-01-23 21:39:57','2018-01-23 21:39:57',NULL),(85,'delete_categories','categories','2018-01-23 21:39:57','2018-01-23 21:39:57',NULL),(86,'browse_companies','companies','2018-02-16 13:07:38','2018-02-16 13:07:38',NULL),(87,'read_companies','companies','2018-02-16 13:07:38','2018-02-16 13:07:38',NULL),(88,'edit_companies','companies','2018-02-16 13:07:38','2018-02-16 13:07:38',NULL),(89,'add_companies','companies','2018-02-16 13:07:38','2018-02-16 13:07:38',NULL),(90,'delete_companies','companies','2018-02-16 13:07:38','2018-02-16 13:07:38',NULL),(91,'browse_company_translations','company_translations','2018-02-16 13:07:45','2018-02-16 13:07:45',NULL),(92,'read_company_translations','company_translations','2018-02-16 13:07:45','2018-02-16 13:07:45',NULL),(93,'edit_company_translations','company_translations','2018-02-16 13:07:45','2018-02-16 13:07:45',NULL),(94,'add_company_translations','company_translations','2018-02-16 13:07:45','2018-02-16 13:07:45',NULL),(95,'delete_company_translations','company_translations','2018-02-16 13:07:45','2018-02-16 13:07:45',NULL),(101,'browse_countries','countries','2018-02-16 13:38:24','2018-02-16 13:38:24',NULL),(102,'read_countries','countries','2018-02-16 13:38:24','2018-02-16 13:38:24',NULL),(103,'edit_countries','countries','2018-02-16 13:38:24','2018-02-16 13:38:24',NULL),(104,'add_countries','countries','2018-02-16 13:38:24','2018-02-16 13:38:24',NULL),(105,'delete_countries','countries','2018-02-16 13:38:24','2018-02-16 13:38:24',NULL),(106,'browse_country_translations','country_translations','2018-02-16 13:46:44','2018-02-16 13:46:44',NULL),(107,'read_country_translations','country_translations','2018-02-16 13:46:44','2018-02-16 13:46:44',NULL),(108,'edit_country_translations','country_translations','2018-02-16 13:46:44','2018-02-16 13:46:44',NULL),(109,'add_country_translations','country_translations','2018-02-16 13:46:44','2018-02-16 13:46:44',NULL),(110,'delete_country_translations','country_translations','2018-02-16 13:46:44','2018-02-16 13:46:44',NULL),(111,'browse_status','status','2018-02-16 19:42:38','2018-02-16 19:42:38',NULL),(112,'read_status','status','2018-02-16 19:42:38','2018-02-16 19:42:38',NULL),(113,'edit_status','status','2018-02-16 19:42:38','2018-02-16 19:42:38',NULL),(114,'add_status','status','2018-02-16 19:42:38','2018-02-16 19:42:38',NULL),(115,'delete_status','status','2018-02-16 19:42:38','2018-02-16 19:42:38',NULL),(116,'browse_status_translations','status_translations','2018-02-16 19:43:12','2018-02-16 19:43:12',NULL),(117,'read_status_translations','status_translations','2018-02-16 19:43:12','2018-02-16 19:43:12',NULL),(118,'edit_status_translations','status_translations','2018-02-16 19:43:12','2018-02-16 19:43:12',NULL),(119,'add_status_translations','status_translations','2018-02-16 19:43:12','2018-02-16 19:43:12',NULL),(120,'delete_status_translations','status_translations','2018-02-16 19:43:12','2018-02-16 19:43:12',NULL),(121,'browse_vacancies','vacancies','2018-02-16 19:50:08','2018-02-16 19:50:08',NULL),(122,'read_vacancies','vacancies','2018-02-16 19:50:08','2018-02-16 19:50:08',NULL),(123,'edit_vacancies','vacancies','2018-02-16 19:50:08','2018-02-16 19:50:08',NULL),(124,'add_vacancies','vacancies','2018-02-16 19:50:08','2018-02-16 19:50:08',NULL),(125,'delete_vacancies','vacancies','2018-02-16 19:50:08','2018-02-16 19:50:08',NULL),(126,'browse_vacancy_translations','vacancy_translations','2018-02-16 19:51:36','2018-02-16 19:51:36',NULL),(127,'read_vacancy_translations','vacancy_translations','2018-02-16 19:51:36','2018-02-16 19:51:36',NULL),(128,'edit_vacancy_translations','vacancy_translations','2018-02-16 19:51:36','2018-02-16 19:51:36',NULL),(129,'add_vacancy_translations','vacancy_translations','2018-02-16 19:51:36','2018-02-16 19:51:36',NULL),(130,'delete_vacancy_translations','vacancy_translations','2018-02-16 19:51:36','2018-02-16 19:51:36',NULL),(131,'browse_specializations','specializations','2018-02-24 16:57:17','2018-02-24 16:57:17',NULL),(132,'read_specializations','specializations','2018-02-24 16:57:17','2018-02-24 16:57:17',NULL),(133,'edit_specializations','specializations','2018-02-24 16:57:17','2018-02-24 16:57:17',NULL),(134,'add_specializations','specializations','2018-02-24 16:57:17','2018-02-24 16:57:17',NULL),(135,'delete_specializations','specializations','2018-02-24 16:57:17','2018-02-24 16:57:17',NULL),(136,'browse_specialization_translations','specialization_translations','2018-02-24 17:00:02','2018-02-24 17:00:02',NULL),(137,'read_specialization_translations','specialization_translations','2018-02-24 17:00:02','2018-02-24 17:00:02',NULL),(138,'edit_specialization_translations','specialization_translations','2018-02-24 17:00:02','2018-02-24 17:00:02',NULL),(139,'add_specialization_translations','specialization_translations','2018-02-24 17:00:02','2018-02-24 17:00:02',NULL),(140,'delete_specialization_translations','specialization_translations','2018-02-24 17:00:02','2018-02-24 17:00:02',NULL),(141,'browse_vacancy_questions','vacancy_questions','2018-02-25 17:03:03','2018-02-25 17:03:03',NULL),(142,'read_vacancy_questions','vacancy_questions','2018-02-25 17:03:03','2018-02-25 17:03:03',NULL),(143,'edit_vacancy_questions','vacancy_questions','2018-02-25 17:03:03','2018-02-25 17:03:03',NULL),(144,'add_vacancy_questions','vacancy_questions','2018-02-25 17:03:03','2018-02-25 17:03:03',NULL),(145,'delete_vacancy_questions','vacancy_questions','2018-02-25 17:03:03','2018-02-25 17:03:03',NULL),(146,'browse_resumes','resumes','2018-02-27 16:59:09','2018-02-27 16:59:09',NULL),(147,'read_resumes','resumes','2018-02-27 16:59:09','2018-02-27 16:59:09',NULL),(148,'edit_resumes','resumes','2018-02-27 16:59:09','2018-02-27 16:59:09',NULL),(149,'add_resumes','resumes','2018-02-27 16:59:09','2018-02-27 16:59:09',NULL),(150,'delete_resumes','resumes','2018-02-27 16:59:09','2018-02-27 16:59:09',NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_vacancies`
--

DROP TABLE IF EXISTS `question_vacancies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_vacancies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_adress` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_vacancies`
--

LOCK TABLES `question_vacancies` WRITE;
/*!40000 ALTER TABLE `question_vacancies` DISABLE KEYS */;
/*!40000 ALTER TABLE `question_vacancies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resumes`
--

DROP TABLE IF EXISTS `resumes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resumes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(10) unsigned DEFAULT '0',
  `name` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drive_license` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'null',
  `level_education` text COLLATE utf8_unicode_ci,
  `qualification` text COLLATE utf8_unicode_ci,
  `experience` text COLLATE utf8_unicode_ci,
  `other_languages` text COLLATE utf8_unicode_ci,
  `en` int(11) DEFAULT '0',
  `de` int(11) DEFAULT '0',
  `ve` int(11) DEFAULT '0',
  `money` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resumes`
--

LOCK TABLES `resumes` WRITE;
/*!40000 ALTER TABLE `resumes` DISABLE KEYS */;
INSERT INTO `resumes` VALUES (6,0,'Простий','дядб','sdfas',1221,'perfumer@origami.com','водятл','аіваіфв','афіва','афіваіфв',NULL,NULL,NULL,NULL,1212,'2018-02-27 16:54:10','2018-02-27 16:54:10','[HTTP/1.0 200 OK\nCache-Control: no-cache, private\nContent-Type:  application/json\nDate:          Tue, 27 Feb 2018 18:54:10 GMT\n\n{\"download_link\":\"resumes\\/IQJp0WhOf6dhfNwmMStlQr8N3ZYDy2uBlIIROdl7.txt\",\"original_name\":\"resumes.sql\"}]'),(7,0,'admin','Лабкович','asdfasd',12,'perfumer@origami.com','водятл',NULL,NULL,NULL,NULL,NULL,NULL,NULL,12,'2018-02-27 17:16:06','2018-02-27 17:16:06','[{\"download_link\":\"resumes\\/yfQfVL61X38TV2Pp7ulzcXodGBzlQiuIVY2PVq3g.txt\",\"original_name\":\"resumes.sql\"}]');
/*!40000 ALTER TABLE `resumes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2018-01-21 07:24:23','2018-01-21 07:24:23'),(2,'main-editor','Главный редактор','2018-01-21 07:24:23','2018-01-22 20:07:40');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (2,'title','Site Title','Perfumer',NULL,'text',0),(3,'news_number_in_list','Количество новостей на странице','10',NULL,'text',1);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialization_translations`
--

DROP TABLE IF EXISTS `specialization_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialization_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `specialization_id` int(10) unsigned DEFAULT NULL,
  `locale` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialization_translations`
--

LOCK TABLES `specialization_translations` WRITE;
/*!40000 ALTER TABLE `specialization_translations` DISABLE KEYS */;
INSERT INTO `specialization_translations` VALUES (1,'Производство',1,'ru'),(2,'Работа на складах',2,'ru'),(3,'Работники пищевой промышленности',3,'ru');
/*!40000 ALTER TABLE `specialization_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specializations`
--

DROP TABLE IF EXISTS `specializations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specializations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specializations`
--

LOCK TABLES `specializations` WRITE;
/*!40000 ALTER TABLE `specializations` DISABLE KEYS */;
INSERT INTO `specializations` VALUES (1,1),(2,0),(3,0);
/*!40000 ALTER TABLE `specializations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1),(2);
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_translations`
--

DROP TABLE IF EXISTS `status_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` int(10) unsigned NOT NULL,
  `locale` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_translations`
--

LOCK TABLES `status_translations` WRITE;
/*!40000 ALTER TABLE `status_translations` DISABLE KEYS */;
INSERT INTO `status_translations` VALUES (1,1,'ru','Горящая'),(2,2,'ru','Нормальный');
/*!40000 ALTER TABLE `status_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin','','perfumer@origami.com','','users/January2018/origami.jpg','$2y$10$I9EUnW0nxJwttjU93EXf3eG6EdVYeJKibglHh2n/EXWA2lJc0Wawu','jVb9AylpWQl6T72HPZOnwyo7IaiTn7SAg4LjFOAnNpgT75ERrMHjLe26XIRl','2018-01-21 07:32:37','2018-01-21 07:44:38'),(3,2,'Лилия','Мацура','m-l-v@ukr.net','+380676923845','users/January2018/14448829_1111123388984277_8815926990942257670_n.jpg','$2y$10$ZL067CktM4PDWiag3bn.ueDyqT4cHjLCNFHBOKIKHYwRKO6h1uqf2',NULL,'2016-11-17 06:14:54','2018-01-22 20:14:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacancies`
--

DROP TABLE IF EXISTS `vacancies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vacancies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` int(10) unsigned NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field_id` int(11) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `admin_active` tinyint(4) DEFAULT NULL,
  `vacancy_active` tinyint(4) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `specialization_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacancies`
--

LOCK TABLES `vacancies` WRITE;
/*!40000 ALTER TABLE `vacancies` DISABLE KEYS */;
INSERT INTO `vacancies` VALUES (1,1,'мужчины и женщины','18 - 35',1,866,1,1,'vacancies/February2018/YnBFzxWozEeAHv4ifqEZLhMd0TSr3j2v4hrJqTzS.jpeg','rabotnik-sklada',2),(2,1,'женщины','18 - 45',1,837,1,1,'vacancies/February2018/YJfo0DYXRMnIMs0P9QKmAuhyVNlbn97ZZY9ZSYyI.jpeg','rabotnik-na-upakovku-plastikovyh-stakanchikov',1),(3,1,'мужчины и женщины','18 - 45',1,834,1,1,'vacancies/February2018/v3KBgVfbzoyMoqNyBU8IfL1vtQvEcX0UWeOsop2V.jpeg','rabotnik-na-komplektatsiyu-avtomobilnyh-rulej',1),(4,1,'мужчины, женщины','18 - 40',1,729,0,0,'vacancies/February2018/2tw8aYmGBB99GPTleSyFObZgwZ3j8EDMCBGSj1iJ.jpeg','rabotnik-na-proizvodstvo-i-upakovku-ponchikov',3),(5,1,'женщины','18 - 45',1,667,0,0,'vacancies/February2018/sl3d2dMhAssGtEPQpGysxopUQt7KZhwGkW6kZklK.jpeg','rabotnik-na-komplektatsiyu-elektrokabelej-molex',1);
/*!40000 ALTER TABLE `vacancies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacancy_questions`
--

DROP TABLE IF EXISTS `vacancy_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vacancy_questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vacancy_id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacancy_questions`
--

LOCK TABLES `vacancy_questions` WRITE;
/*!40000 ALTER TABLE `vacancy_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `vacancy_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacancy_translations`
--

DROP TABLE IF EXISTS `vacancy_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vacancy_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_vacancy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `vacancy_id` int(11) DEFAULT NULL,
  `locale` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conditions` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsibility` text COLLATE utf8_unicode_ci,
  `work_schedule` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacancy_translations`
--

LOCK TABLES `vacancy_translations` WRITE;
/*!40000 ALTER TABLE `vacancy_translations` DISABLE KEYS */;
INSERT INTO `vacancy_translations` VALUES (1,'РАБОТНИК СКЛАДА',NULL,1,'ru','Проживание предоставляется работодателем (400 зл./мес.). Транспорт до места работы предоставляется бесплатно работодателем','В обязанности работника входит: комплектация товаров со сканером; упаковка товаров в коробки; хорошее состояние здоровья для мужчин (работа иногда связана с поднятием коробок до 20 кг)','Работа посменная: ВС-ЧТ с 5:00 до 15:00; 15:00-1:00 (10 часов). ПТ-СБ с 06:00 до 18:00 (12 часов). Склад работает без выходных – можно брать «плавающие» выходные','без опыта работы'),(2,'РАБОТНИК НА УПАКОВКУ ПЛАСТИКОВЫХ СТАКАНЧИКОВ',NULL,2,'ru','Бесплатное проживание. Хорошие условия','В рабочие обязанности входит упаковка пластиковых стаканчиков (работа на конвейере); контроль качества произведенной продукции','ПН-СБ или ПН-ВС: смена – 12 часов. Выработка в месяц – 290-350 часов','без опыта работы'),(3,'РАБОТНИК НА КОМПЛЕКТАЦИЮ АВТОМОБИЛЬНЫХ РУЛЕЙ',NULL,3,'ru','Проживание бесплатное, предоставляется работодателем','Требуются работники на производство рулевых систем управления автомобилем (сбор рулевых колонок). Производитель поставляет элементы для таких марок как Fiat, Volkswagen, Renault, Opel и др.\r\nВ рабочие обязанности входит: обслуживание продукционной линии, сбор детали «с нуля»; каждый следующий работник добавляет к изделию элемент; общий вес изделия до 15 кг (на процессах, где работают женщины - до 7 кг). Также в работу входит: вложение кабеля к элементам','12 часов в день, 6 дней в неделю (2 смены)','без опыта работы'),(4,'РАБОТНИК НА ПРОИЗВОДСТВО И УПАКОВКУ ПОНЧИКОВ',NULL,4,'ru','Проживание 350 злотых','Упаковка пончиков на производственной линии. Сортировка и выкладка упакованных изделий на поддоны','5 дней на неделю, смены по 8, 11, 12 часов','без опыта работы'),(5,'РАБОТНИК НА КОМПЛЕКТАЦИЮ ЭЛЕКТРОКАБЕЛЕЙ MOLEX',NULL,5,'ru','Бесплатное проживание в квартирах (3-5 человек в комнатах)','В обязанности входит производство и монтаж кабельных жгутов (присоединять, сцеплять, собирать электрические кабели)','8-10 часовой рабочий день; 5-6 дней в неделю (до 250 рабочих часов в месяц)','без опыта работы');
/*!40000 ALTER TABLE `vacancy_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'recruitment'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-27 21:17:56
