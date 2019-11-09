-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2019 年 10 月 10 日 22:12
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `comic_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comme` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comme`, `indate`) VALUES
(2, '神風怪盗ジャンヌ', 'www.amazon.co.jp/dp/B00ANYH62S', 'まろんは一見フツーの女の子。でも実は、世間を騒がせている怪盗ジャンヌだった！？絵画にひそむ悪魔を退治するため、今宵も月明かりの空をとびまわる。そんな彼女の前に謎の怪盗シンドバッドが現れ…。\r\n', '2019-09-27 20:55:09'),
(3, '愛してるぜベイベ★★', 'www.amazon.co.jp/dp/B00ULACONK', '高校生・片倉結平が、従妹の幼稚園児・坂下ゆずゆの保護者役となり、蒸発してしまった母・都の代わりに面倒をみていく。そこに恋愛が入り混じったホーム&ラブドラマ。', '2019-09-27 20:55:43'),
(4, 'ミントな僕ら', 'www.amazon.co.jp/dp/B00Y8CY3EA', '主人公・南野のえるが父親とハワイへ行っている間に、双子の姉・まりあは弟ののえるに内緒で初恋の相手を追って全寮制の森ノ宮学園に転校してしまった。まりあに彼氏ができることを嫌がるのえるは、自分も転校してまりあをもとの学校に連れ戻すことを決心した。女子寮にしか空きがないため女子として編入するなら、という条件を理事長に出された彼は、女装し姉と瓜二つの妹として森ノ宮学園に編入する。', '2019-09-27 20:56:15'),
(5, 'GALS!', 'www.amazon.co.jp/dp/B00IU6ULIM', '渋谷最強のカリスマ女子高生・寿蘭とその友人・星野綾と山咲美由の友情を描いた物語。', '2019-09-27 20:56:40'),
(6, 'HIGH SCORE', 'www.amazon.co.jp/dp/B00CSOKRV8', 'めぐみと政宗、嵐士に沙夜に多摩先生…。常識を超えたキャラが続々と出現！ハイスピードで展開する学園ギャグ4コマ。', '2019-09-27 20:57:11'),
(9, 'TEST', 'test', 'test', '2019-10-03 20:57:12'),
(13, 'www', 'www', 'www', '2019-10-03 21:19:31'),
(14, 'TEST', 'test', 'hhh', '2019-10-10 20:55:09');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, '管理者', 'test1', 'test1', 1, 0),
(2, '一般', 'test2', 'test2', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- テーブルのAUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
