-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2019 at 11:38 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cfs`
--

CREATE TABLE IF NOT EXISTS `cfs` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `cfs` text COLLATE utf8_vietnamese_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `pby` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2067 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `cfs`
--

INSERT INTO `cfs` (`id`, `date`, `type`, `cfs`, `ip`, `pby`) VALUES
(2056, '20/07/2019 - 21:52:06', 'cfs', 'Q8OzIGLhuqFuIG7DoG8gxJHhuq11IHR1eeG7g24gdGjhurNuZyBVRUgga28/IE3DrG5oIGtvIHLDtSBjw6FjIGxv4bqhaSBo4buTIHPGoSBs4bqvbSBuw6puIG1vbmcgxJHGsOG7o2MgY2jhu4kgZOG6q24gPSkpKSk=', '27.3.254.132', ''),
(2057, '20/07/2019 - 23:33:24', 'timdo', 'W0fDk0MgVMOCTSBT4buwXQpU4bubIGtvIHBo4bqjaSB0w6JuIGjhu41jIHNpbmggR2lhIMSQ4buLbmggbmjGsG5nIEdpYSDEkOG7i25oIHjGsGEgbmF5IHbhuqtuIGzDoCBtxqEgxrDhu5tjLCBraMOhdCBraGFvIGPhu6dhIHThu5suIMSQw6MgdOG7q25nIHbDrCBHaWEgxJDhu4tuaCBtw6AgY+G7kSBn4bqvbmcgcuG6pXQgbmhp4buBdS4gVHJvbmcgc3Xhu5F0IGPhuqMgY+G6pXAgMiwgMSB0cm9uZyBuaOG7r25nIMSRaeG7gXUgbWF5IG3huq9uIG5o4bqldCBjw7MgbOG6vSBsw6AgxJFjIGfhurdwIGPhuq11IC0gY+G6rXUgYuG6oW4gY2jDrSBj4buRdCBo4bujcCBj4bqhIGPhu6dhIHThu5suIELDonkgaCBj4bqtdSDEkcOjIGzDoCAxIHBo4bqnbiBj4bunYSBHaWEgxJDhu4tuaCBy4buTaS4gVOG7myBt4burbmcgY2hvIGPhuq11IHbDoCBjxaluZyBnaGVuIHThu4sgduG7m2kgY+G6rXUuIFbDrCDEkcOzIGzDoCDGsOG7m2MgbXXhu5FuIGPhu6dhIGPhuqMgMi4uLm5oxrBuZyB04bubIGzhuqFpIGtvIGzDoG0gxJFjLiBU4bubIGPhuqNtIHRo4bqleSBtw6xuaCBoxqFpIHbDtCBk4bulbmcgdsOgIGPDsyBs4buXaSB24bubaSBjw7RuZyBz4bupYyBj4bqtdSDEkcOjIGTDoG5oIG5o4buvbmcgbmfDoHkgY3Xhu5FpIHR14bqnbiDEkeG7gyBrw6htIFRvw6FuIHThu5ssIMSRw6MgY2hpYSBz4bq7IG5o4buvbmcga2luaCBuZ2hp4buHbSBjaG8gdOG7my4uLkh1aHUuIE5nw6B5IGJp4bq/dCBtw6xuaCDEkeG6rXUgbnYyIHRo4bqtdCBz4buxIHThu5sgY8Wpbmcga28gdGjhuqV5IHZ1aSBs4bqvbS4gQ2jhu4kgdGjhuqV5IG1heSB2w6wga28gdHXhu5l0IHh14buRbmcgbnYzIHRow7RpLi4uCk5oxrBuZyBtw6AgbMOgIHbhuqd5Li4udGjhuq10IHJhIHRow6wuLi504bubIGPFqW5nIGPhuqNtIHRo4bqleSBy4bqldCBnw6wgdsOgIGzDoHkgbOG7jSB24bubaSBj4bqtdSBuaMOpIDo+IFbDrCBsw7pjIHThu5sgeOG6pXUgeMOtIG5o4bqldCwgdGjhuqNtIGjhuqFpIG5o4bqldCwgYmkgcXVhbiB0acOqdSBj4buxYyBuaOG6pXQsIGPhuq11IGzDoCBuZyBiw6puIGPhuqFuaCB04bubLCBjaOG7i3UgbmdoZSB04bubIHTDom0gc+G7sS4uLiBUaOG6rXQgc+G7sSBy4bqldCBj4bqjbSBrw61jaC4gQ8ahIG3DoC4uLiBk4bqnbiBkw6AgbsOzIGzhuqFpIGJp4bq/biB0aMOgbmggMSBj4bqjbSB4w7pjIMSR4bq3YyBiaeG7h3Qga2jDoWMgbMOgbSB04bubIHLhuqV0IMSRYXUgxJHhuqd1LgpCaeG6v3QgcuG6sW5nIHNhdSBuw6B5IGPhuqMgMiBjb24gbmcgaG/huqF0IGLDoXQgbmjGsCBjaMO6bmcgdGEgc+G6vSBz4bubbSBjw7Mgbmjhu69uZyBuZyBi4bqhbiBt4bubaSwgbmjGsG5nIG3DoC4uLmNo4bqvYyBjaOG6r24gdOG7myBz4bq9IG5o4bubIGPhuq11IHbDoCB04bubIGPhu6dhIG5nw6B5IHjGsGEgbOG6r20gbOG6r20uIFbDoCBiaeG6v3Qga28uLi504bubIGPFqW5nIHRpbiB2w6BvIGR1ecOqbiBwaOG6rW4gbuG7r2EuIDEgbmfDoHkgbsOgbyDEkcOzLCBraGkgY+G6oyAyIMSR4bunIHRyxrDhu59uZyB0aMOgbmggdOG7myBz4bq9IMSR4bupbmcgdHJjIGPhuq11IG3DoCDEkcaw4budbmcgxJHGsOG7nW5nIGNow61uaCBjaMOtbmggbmdoacOqbSB0w7pjIG7Ds2kgcmEgbmjhu69uZyDEkWnhu4F1IHThu5sgxJHDoyB04burbmcgc3V5IG5naMSpLCBjaOG7qSBrbyBwaOG6o2kgbuG7rWEgxJHDuWEgbuG7rWEgdGjhuq10IG5oxrAgYsOieSBnaeG7nS4gVuG7m2kgbOG6oWksIMSRw6MgYW4gdG/DoG4gZOG7jW4gcXVhIEdpYSDEkOG7i25oIHRow6wgaMOjeSBo4buNYyB0aOG6rXQgdOG7kXQsIGPhu5EgZ+G6r25nIHbDoCBj4buRIGfhuq9uZyBoxqFuIG7hu69hLCBi4bubdCBuZ2hp4buHcCB24bubaSBzw6JuIHNpIGzhuqFpIMSR4buDIMSRYyB0aOG6p3kgecOqdSBi4bqhbiBt4bq/biBuaGEgY+G6rXUgOikpKSBU4bubIG5naGUgbsOzaSBHSUEgxJDhu4pOSCBMw4AgR0lBIMSQw4xOSCwgY2jDumMgY+G6rXUgdsOgIG3hu41pIG5nIHRyb25nIMSR4bqhaSBnaWEgxJHDrG5oIEdpYSDEkOG7i25oIHPhur0gbHXDtG4gbMOgIG5p4buBbSBow6BvIGNobyBuaGnhu4F1IG5oaeG7gXUgdGjhur8gaOG7hyBzYXUgbuG7r2EuIFbDoCBuaOG7r25nIMSR4bupYSBuaMawIHThu5sgxJFjIHThu7EgaMOgbyBrw6kgYWhpaGkgOj4KCg==', '27.75.218.192', '');

-- --------------------------------------------------------

--
-- Table structure for table `cfs_deleted`
--

CREATE TABLE IF NOT EXISTS `cfs_deleted` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `cfs` text COLLATE utf8_vietnamese_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `pby` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cfs_done`
--

CREATE TABLE IF NOT EXISTS `cfs_done` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `cfs` text COLLATE utf8_vietnamese_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `pby` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`name`, `value`) VALUES
('noti', ''),
('number', '26875');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `sign` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `sign`, `level`) VALUES
('1459851530818306', '', 'BB', 0),
('2131399000507724', '', 'WiCho', 0),
('292255208143128', '', 'Shanky', 0),
('795780237420921', '', 'Minhon', 0),
('906690149524326', '', 'Kumakun', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cfs`
--
ALTER TABLE `cfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cfs_deleted`
--
ALTER TABLE `cfs_deleted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cfs_done`
--
ALTER TABLE `cfs_done`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cfs`
--
ALTER TABLE `cfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2067;
--
-- AUTO_INCREMENT for table `cfs_deleted`
--
ALTER TABLE `cfs_deleted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cfs_done`
--
ALTER TABLE `cfs_done`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
