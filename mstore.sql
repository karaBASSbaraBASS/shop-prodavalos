-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 13 2017 г., 22:14
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mstore`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` int(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `sort_order`, `status`) VALUES
(1, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `disc` int(10) NOT NULL DEFAULT '1',
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `disc`, `availability`, `brand`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(1, 'Моё желание', 3, 1839707, 85, 1, 60, 'Виталий Козловский', 'В конце декабря 2016 года Виталий Козловский отмечает годовщину творческой деятельности. Дата ознаменуется выходом нового альбома артиста. С момента предыдущего релиза «Будь сильнее» прошло чуть более двух лет, все чувства и настроения которых вылились в новую пластинку с символичным «говорящим» названием - «Мое желание». Заглавным треком альбома стала одноименная композиция, которую артист создал вместе с композитором Русланом Квинтой и автором Виталием Куровским.\r\n\r\nДиск состоит из 13 треков - это 13 историй артиста с совершенно разным настроением и посылом: от глубокой «Чого являєшся мені у сні» до зажигательной танцевальной композиции «Трачу». От дерзкой «Отпускаю на» до проникновенной баллады «Первая ночь без тебя». Нестандартные аранжировки, запоминающиеся мелодии и проникновенный вокал – это именно тот Виталий Козловский, которого любят тысячи поклонников.\r\n', 0, 50, 1),
(2, 'Delta Machine', 1, 346290, 108, 1, 10, 'Depeche Mode', 'Тринадцатая студийная пластинка группы, \"Delta Machine\" станет их первой записью после предыдущего \"Sounds Of Universe\"(2009), возглавившего хит-парады 14 стран. \"Сессии, на которых создавались новые песни, прошли просто ошеломительно\", - говорит Мартин Гор, - \"Я постарался сделать звук альбома максимально современным и актуальным. Я хочу, чтобы люди получали удовольствие и покой от этой записи. В ней есть что-то волшебное\".\r\n\r\n\"Этот альбом записывался совсем иначе, чем остальные\" - добавляет Дейв Гэан, - \"В какой-то момент нам показалось, что он звучит слишком обычно, и мы тут же переставили все с ног на голову, добившись настоящего звука Depeche Mode. Я не могу дождаться, когда наши поклонники наконец услышат эти песни\". \"Delta Machine\" станет первым релизом группы, изданном не на Mute -, закончившем свое существование в прежней форме несколько лет назад. Продюсером \"Delta Machine\" стал Бен Хиллиер, а звук сводил прославленный Flood, предыдущий раз сотрудничавший с Depeche Mode 20 лет назад, на альбоме \"Songs of Faith and Devotion\". В диск войдет 13 песен, еще 4 новые композиции будут добавлены на Deluxe- издание пластинки. Первым синглом с \"Delta Machine\" выбрана песня \"Heaven\" - ее премьера состоится 1 февраля.\r\n', 0, 80, 1),
(112, 'Romantic Classic', 4, 599029, 89, 1, 50, 'Георг Фридрих Гендель', 'Классическая музыка - океан, раскинувшийся от туманных берегов раннего Барокко до материка ХХ века. Эта коллекция музыкальных произведений выдающихся композиторов позволит ознакомиться с разнообразием зарубежной классической музыки начинающим меломанам и станет замечательным подарком настоящим ценителям классики.Звуки природы, положенные на музыку величайших композиторов откроют для вас мир чудес и красоты. Отвлекитесь от повседневной суеты и успокойте Вашу душу в царстве музыки и природы. Добро пожаловать в мир классической музыки. ', 0, 70, 1),
(114, 'Opera - The Ultimate Collection', 4, 462050, 89, 1, 65, 'Andrea Bocelli', 'Сборник арий из опер в исполнении итальянского оперного певца Андреа Бочелли. Несмотря на слепоту, он стал одним из наиболее запоминающихся голосов современной оперы и поп-музыки. Бочелли одинаково хорошо удается исполнение и классического репертуара, и поп-баллад. ', 0, 75, 1),
(115, 'The Diva', 5, 598887, 65, 1, 12, 'Ella Fitzgerald', 'Традиционный поп, Джазовый вокал, Боп, Свинг, Американская популярная песня, Джазовые стандарты.', 0, 50, 1),
(116, 'Milesin\' (180 Gram 3 LP) (Import)', 5, 397716, 1541, 1, 2, 'Miles Davis', '\r\n\r\nTracklist:\r\n\r\n1. Tune Up / When the Lights Are Low\r\n2. Surrey With the Fringe On Top\r\n3. Salt Peanuts\r\n4. Something I Dreamed Last Night\r\n5. When I Fall In Love\r\n6. It Never Entered My Mind\r\n7. Four\r\n8. In Your Own Sweet Way\r\n9. Ahmad\'s Blues\r\n10. Diane\r\n11. It Could Happen to You\r\n12. The Theme (Take 1)\r\n13. Trane\'s Blues\r\n14. My Funny Valentine\r\n15. Blues By Five\r\n16. Airegin\r\n17. Woody \'n\' You\r\n18. The Theme (Take 2)\r\n19. If I Were a Bell\r\n20. You\'re My Everything\r\n21. I Could Write a Book\r\n22. Oleo\r\n23. Well, You Needn\'t\r\n24. Half Nelson\r\n', 0, 100, 1),
(117, 'Shania Twain', 6, 29314, 85, 1, 1, 'New Collection', 'В новой коллекции впервые более 20 лучших песен знаменитой певицы на одном диске!', 0, 60, 1),
(118, 'Tuskegee', 6, 294852, 50, 1, 62, 'Lionel Richie', 'Современная музыка для взрослых, Кантри-поп.', 0, 60, 1),
(119, 'Hardwired... to Self-Destruct', 2, 722938, 160, 1, 12, 'Metallica', 'Hardwired... To Self-Destruct (рус. «Прошит... на саморазрушение») — десятый студийный альбом американской группы Metallica, выпущенный 18 ноября 2016 года. Он дебютировал на первом месте американского хит-парада Billboard 200 (в 6-й раз в карьере музыкантов). В общем, альбом возглавил чарты в 57 странах. Название альбома, список песен и клип на заглавную композицию были выпущены группой 18 августа 2016 года. Продюсером альбома стал Грег Фидельман, работавший над предыдущим альбомом группы. В альбом вошло 12 песен. Альбом поступил в продажу 18 ноября 2016 года. На все песни альбома сняты видеоклипы. ', 1, 90, 1),
(120, 'Рок-Січ (DVD)', 1, 255658, 92, 2, 60, 'Воплі Відоплясова', 'Компакт-диск формату DVD із записом фільму-концерту «В.В. на сцені фестивалю РОК СІЧ». Перше офіційне «живе» відео легендарного українського рок-колективу поверне нас до незабутньої травневої ночі 2006 року, коли «Воплі Відоплясова» влаштували на березі Дніпра грандіозне рок-шоу, яке стало фінальним акордом першого Міжнародного музичного фестивалю «Рок Січ». Тоді з великої фестивальної сцени прозвучала ексклюзивна концертна програма, складена виключно з найкращих, перевірених часом «вевешних» хітів. ', 1, 65, 1),
(121, 'Beside You in Time (DVD)', 2, 606540, 55, 2, 30, 'Nine Inch Nails', 'Beside You in Time — концертный видео-альбом американской индастриал-группы Nine Inch Nails, вышедший 26 февраля 2007 года. Beside You in Time - это видеоотчёт о турне 2006 года Live: With Teeth по Северной Америке.', 0, 54, 1),
(122, 'Простыми словами (DVD)', 3, 650649, 100, 2, 60, 'Алиса Савинская', 'Вашему вниманию предлагается альбом Алисы Савинской \"Простыми словами\" ', 1, 25, 1),
(123, 'Giuseppe Verdi’s Aida (DVD)', 4, 634133, 728, 2, 20, 'Margaret Price, Luciano Pavarotti', 'Verdi\'s enduring masterpiece of musical theater, \"Aida,\" is a marvelous blend of human emotion and grand spectacle, full of Egyptian pomp and pageantry. In Sam Wanamaker\'s lavish 1983 production, highly acclaimed for its extraordinary musical performances, Margaret Price is outstanding as the Ethiopian slave, Aida, Luciano Pavarotti gives a monumental debut performance as Radames, Commander of the Egyptian Army, and the entire performance is masterfully shaped by the Spanish conductor, Garcia Navarro.', 1, 80, 1),
(124, 'Live at the Greek Theatre (DVD)', 6, 18972, 40, 2, 50, 'Il Divo', 'Il Divo – одно из самых ярких и свежих явлений в популярной музыке последних лет. Четверо одаренных молодых людей, исполняющих оперные арии, песни Тони Брекстон, Фрэнка Синатра и Энио Мориконне, продали в прошлом году 12 миллионов экземпляров своего дебютного альбома. Подбор вокалистов занял у продюсеров два года, в результате в составе группы оказались нью-йоркский тенор Дэвид Миллер, популярный французский певец Себастьен Изамбар (собиравший полную \"Олимпию\" еще в 2001), испанский баритом Карлом Марин и швейцарский тенор Урс Булер. Все, кроме Изамбара получили консерваторское образование, по иронии судьбы он один был популярен и до создания крватета. Материал, отобранный для перовой пластинки Il Divo, составили как оригинальные композиции, так и кавер-версии классических поп-хитов. Успех проекта был огромен – сейчас группа собирается уже во второе по счету мировое турне, а в конце 2005-го их печати вышла биография группы \"Romancing the World\".', 1, 80, 1),
(125, 'Right Now Live (DVD)', 5, 633950, 723, 2, 60, 'Charlie Hunter Quintet', 'Charlie Hunter is an American guitarist, composer and bandleader. First coming to prominence in the early 1990s, Hunter has recorded 17 albums. Hunter plays custom-made seven and eight-string guitars, on which he simultaneously plays basslines, rhythm guitar, and solos. Critic Sean Westergaard described Hunter\'s guitar technique as \"mind-boggling ... he\'s an agile improviser with an ear for great tone, and always has excellent players alongside him in order to make great music, not to show off\".', 1, 70, 1),
(126, 'Vintage Getz (DVD)', 5, 633807, 723, 2, 50, 'Stan Getz', 'Concerts filmed at the Robert Mondavi Winery, Napa Valley, California, 1983.', 1, 65, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(2, 'Konstantin', 'Konstantin@gmail.com', '$2y$10$dMakUYv8Km9riHUKpHwjB.gDtLq7j7.QNF9DFxQddBQIDZELTiFqC', 'user'),
(3, 'Administrator', 'ad@i.ua', 'administrator', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
