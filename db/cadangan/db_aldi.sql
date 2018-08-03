-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2018 at 12:24 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aldi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `kd_kendaraan` varchar(10) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tarif` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`kd_kendaraan`, `warna`, `tarif`, `gambar`) VALUES
('ang00005', 'Abu - abu Hijau', 4000, '1508712918.png'),
('ang00003', 'Kuning', 4000, '1508688256.png'),
('ang00004', 'Abu - abu', 4000, '1508688519.png'),
('ang00002', 'Merah', 4000, '1508688233.png'),
('ang00001', 'Biru', 4000, '1508684519.png'),
('ang00006', 'ungu', 4000, '1508063124.png');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `kd_rute` varchar(3) NOT NULL,
  `rute` varchar(50) NOT NULL,
  `kd_kendaraan` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`kd_rute`, `rute`, `kd_kendaraan`) VALUES
('RPA', 'Raja Basa - Pasar Tengah', 'ang00001'),
('RPB', 'Pasar Tengah - Raja Basa', 'ang00001'),
('KTA', 'Kemiling - Tanjung karang', 'ang00002'),
('RKB', 'Terminal kemiling - Raja basa', 'ang00003'),
('KTB', 'Tanjung Karang - Kemiling', 'ang00002'),
('SPB', 'Sukarame - Tanjung Karang', 'ang00007'),
('TSA', 'Tanjung Karang - Sukarame', 'ang00004'),
('TIB', 'Ir. Sutami - Tanjung Karang', 'ang00005'),
('TIA', 'Tanjung Karang - Ir. Sutami', 'ang00005'),
('RKA', 'Rajabasa - Terminal Kemiling', 'ang00003'),
('TSB', 'Sukarame - Tanjung Karang', 'ang00004');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rute`
-- (See below for the actual view)
--
CREATE TABLE `v_rute` (
`kd_rute` varchar(3)
,`rute` varchar(50)
,`kd_kendaraan` varchar(10)
,`warna` varchar(20)
,`tarif` int(11)
,`gambar` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `kd_wilayah` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`kd_wilayah`, `nama`, `lat`, `lng`) VALUES
('RPA0000001', 'Terminal Raja Basa', -5.36854732445341, 105.236328542233),
('RPA0000002', 'Jl. Jauhari Wahid', -5.37019578692737, 105.238090753555),
('RPA0000003', 'Lampu Merah Unila', -5.3718835002805, 105.239410400391),
('RPA0000004', 'Bundaran Unila', -5.36619011944064, 105.243744850159),
('RPA0000005', 'Museum Lampung', -5.37260985648738, 105.240102410316),
('RPA0000006', 'Perguruan Tinggi Umitra Lampung', -5.37335757520749, 105.241137742996),
('RPA0000007', 'Apotek Kimia Farma KMC', -5.37422813227527, 105.242532491684),
('RPA0000008', 'Minimarket Surya Kedaton', -5.37454591199921, 105.24314135313),
('RPA0000009', 'Jl. Hi. Ali Unusman', -5.37548322769806, 105.244807004929),
('RPA0000010', 'Pasca Sarjana Universitas Bandar Lampung', -5.3757075423522, 105.246228575706),
('RPA0000011', 'Akper Panca Bhakti / Tegar TV', -5.37600128760766, 105.247955918312),
('RPA0000012', 'Jl. Untung Suropati', -5.37651934707646, 105.24940431118),
('RPA0000013', 'Percetakan depan Darma Jaya', -5.37716024477831, 105.25046646595),
('RPA0000014', 'Jl. Dakwah', -5.37792398032518, 105.251399874687),
('RPA0000015', 'Universitas Muhammadiyah Lampung', -5.37847942375734, 105.252078473568),
('RPA0000016', 'Apotek Raden Intan', -5.37876515647929, 105.252435207367),
('RPA0000017', 'Jl. Dempo', -5.3796704209461, 105.253604650497),
('RPA0000018', 'Pizza Hut Pagar Alam / KFC Pagar Alam', -5.37993746035458, 105.254001617432),
('RPA0000019', 'Jl. Pelita 1', -5.38041813099446, 105.25474190712),
('RPA0000020', 'Star Rock Karaoke', -5.38074391865666, 105.255385637283),
('RPA0000021', 'Jl. Sultan H.', -5.38176934753648, 105.257579684258),
('RPA0000022', 'Jl. Sultan Agung', -5.38232478745786, 105.258598923683),
('RPA0000023', 'Mall Bumi Kedaton', -5.38246898812373, 105.258902013302),
('RPA0000024', 'Bumbu Desa', -5.38303510892577, 105.259773731232),
('RPA0000025', 'Jl. Tunggul Ametung', -5.38396974117192, 105.260599851608),
('RPA0000026', 'Jl. Teratai', -5.38661340745855, 105.26146620512),
('RPA0000027', 'Lampu Merah Urip Sumoharjo', -5.38743587906886, 105.261688828468),
('RPA0000028', 'FIF Group', -5.38822096456731, 105.261865854263),
('RPA0000029', 'Griyacom', -5.38910752248178, 105.26201069355),
('RPB0000041', 'Kantor Pos Bandar Lampung Kedaton', -5.36962431330874, 105.237433612347),
('RPB0000040', 'Jl. A. Kadir', -5.37016908256459, 105.237827897072),
('RPB0000039', 'Mall Robinson Raja Basa', -5.37097822423712, 105.238503813744),
('RPB0000038', 'Jl. Kopi', -5.37223065592859, 105.239544510841),
('RPB0000037', 'SMPN 22 Bandar Lampung', -5.37271133265321, 105.239973664284),
('RPB0000036', 'Pondok Santap Glompong', -5.37322939492066, 105.240660309792),
('RPB0000035', 'Jl. Lada Raya', -5.37345905124878, 105.240971446037),
('RPB0000034', 'Jl. Cengkeh', -5.37446312906189, 105.242671966553),
('RPB0000033', 'Jl. Dahlia Cempedak', -5.37477289741479, 105.243203043938),
('RPB0000032', 'Jl. Kedelai', -5.37501323482142, 105.243583917618),
('RPB0000031', 'Tribun Lampung', -5.37535504785858, 105.244163274765),
('RPB0000030', 'Jl. St. Jamil', -5.37549925017609, 105.244426131248),
('RPB0000029', 'Jl. Purnawirawan Raya', -5.37590782322357, 105.246574580669),
('RPB0000028', 'Fitrinofane Swalayan', -5.37604401417847, 105.247577726841),
('RPB0000027', 'Dian Cipta Cendikia (DCC) Lampung', -5.37663951544695, 105.249219238758),
('RPB0000026', 'IBI Darmajaya', -5.37726706099636, 105.250324308872),
('RPB0000025', 'Jl. Yulius Usman', -5.37824442852099, 105.251512527466),
('RPB0000024', 'Dunkin Donuts', -5.37840999335604, 105.251711010933),
('RPB0000023', 'Universitas Bandar Lampung', -5.37879987166067, 105.252220630646),
('RPB0000022', 'Jl. Mayor Sukardi Hamdani', -5.37962769462987, 105.253266692162),
('RPB0000021', 'Jl. Pelita 2 / Waroeng Steak and Shake', -5.38059170640998, 105.254680216312),
('RPB0000020', 'Jl. Keramat', -5.38121390710784, 105.255959630013),
('RPB0000019', 'Jl. Beringin', -5.38164650979306, 105.25697350502),
('RPB0000018', 'Perguruan Tinggi Teknokrat', -5.38212717908243, 105.257939100266),
('RPB0000017', 'SPBU Teuku Umar', -5.38263989257234, 105.258867144585),
('RPB0000016', 'Jl. Pagar Alam (PU)', -5.38322470586901, 105.259760320187),
('RPB0000015', 'Puskesmas Kedaton', -5.38395104854107, 105.260382592678),
('RPB0000014', 'PTPN 7', -5.38512601279088, 105.260833203793),
('RPB0000013', 'Jl. Kelinci', -5.38579894583831, 105.261047780514),
('RPB0000012', 'Jl. Kijang', -5.38749195663811, 105.261506438255),
('RPB0000011', 'Jl. Tupai', -5.38820494242443, 105.261678099632),
('RPB0000010', 'Gg. Murni', -5.38871231007736, 105.261758565903),
('RPB0000009', 'Holland Bakery', -5.39002345294392, 105.261924862862),
('RPB0000008', 'Jl. Kelelawar', -5.39142004396304, 105.261871218681),
('RPB0000007', 'Pasar Koga', -5.39201820051059, 105.261855125427),
('RPB0000006', 'Jl. Kangguru', -5.39246147685753, 105.261833667755),
('RPB0000005', 'Jl. Kiwi', -5.39332666590334, 105.261812210083),
('RPB0000004', 'Jl. Landak', -5.39456035926119, 105.261731743813),
('RPB0000003', 'Jl. Zebra', -5.3953828201062, 105.26162981987),
('RPB0000002', 'Jl. Badak', -5.39633879592086, 105.261522531509),
('RPA0000030', 'jl. Danau Mentana', -5.38922328227856, 105.262012705207),
('RPA0000031', 'Global Printing', -5.3894509298041, 105.262042209506),
('RPA0000032', 'Kedaton Komputer', -5.3894889823147, 105.262044221163),
('RPA0000033', 'Pondok sate bang Tato', -5.38973692444106, 105.26207908988),
('RPA0000034', 'Gang Chandra', -5.3900987567782, 105.262088477612),
('RPA0000035', 'Mega Motor', -5.39017325951081, 105.26206433773),
('RPA0000036', 'The House of sulthan', -5.39026471896141, 105.262065008283),
('RPA0000037', 'Jl. Danau poso', -5.39040958533002, 105.262070372701),
('RPA0000038', 'Karya sejati', -5.39049370127012, 105.262063667178),
('RPA0000039', 'Mandiri KCP Bandar Lampung', -5.39063055654458, 105.26206433773),
('RPA0000040', 'Alicom', -5.39067995793279, 105.262062996626),
('RPA0000048', 'jl. kelelawar', -5.39133352485849, 105.262050926685),
('RPA0000041', 'Prince Computer', -5.39079945585687, 105.26206433773),
('RPA0000042', 'JNE Teuku Umar 1', -5.39083016489363, 105.262060314417),
('RPA0000043', 'Ramiracoll', -5.39084084627608, 105.262065008283),
('RPA0000044', 'Zoya Lampung', -5.39100507250786, 105.262062326074),
('RPA0000045', 'Gang Banten', -5.39103444630073, 105.262059643865),
('RPA0000046', 'Nasi goreng Banten', -5.39105580905827, 105.262060984969),
('RPA0000047', 'Bank Mandiri Teuku umar', -5.39123138419348, 105.26205830276),
('RPA0000049', 'jl. Danau Toba', -5.3915591688157, 105.262050256133),
('RPB0000001', 'Pasar Tengah', -5.410293734885207, 105.25774598121643),
('RPA0000050', 'RS ADVENT R 16', -5.392020336913301, 105.26205897331238),
('RPA0000051', 'Chiko Baby Shop', -5.392413410763263, 105.2621179819107),
('RPA0000052', 'Jl. Dn. Batur', -5.392543723407049, 105.26205897331238),
('RPA0000053', 'Mie Ayam Koga', -5.393008362059047, 105.26201605796814),
('RPA0000054', 'Jl. Danau Tondano (RM Khas Lampung)', -5.393424934341178, 105.26200532913208),
('RPA0000055', 'Acer Customer Service Center - Lampung', -5.393753919298188, 105.26205360889435),
('RPA0000056', 'Metro Com Service', -5.394325370243546, 105.26203215122223),
('RPA0000057', 'Jl. Danau Singkarak', -5.394471704454711, 105.26194632053375),
('RPA0000058', 'Grapari Telkomsel', -5.394827392125305, 105.26197850704193),
('RPA0000059', 'Jl. Danau Ranau', -5.395245031354325, 105.2618470788002),
('RPA0000060', 'Bank Mandiri Syariah Kedaton', -5.395446907917427, 105.26190340518951),
('RPA0000061', 'Jl. Danau Meninjau', -5.396036515593405, 105.26174247264862),
('RPA0000062', 'Metro Com Kedaton', -5.3965524215952705, 105.26173710823059),
('RPA0000063', 'Taman Makan Pahlawan', -5.3972915659785565, 105.26158690452576),
('RPA0000064', 'Jl. Pahlawan', -5.398648085601606, 105.26140451431274),
('RPA0000065', 'TDC Telkomsel Distribution Center Penengahan', -5.398843552221847, 105.26148498058319),
('RPA0000066', 'Angkringan 78 Gass Poll', -5.399500448217114, 105.26148498058319),
('RPA0000067', 'Bank Mandiri - KCP Bandar Lampung Teuku Umar Penengahan', -5.399783500743592, 105.2613240480423),
('RPA0000068', 'Princess Teuku Umar Penengahan', -5.400338924184977, 105.2611631155014),
('RPA0000069', 'Kios Bos Ubi Madu Bakar Asli Cilembu Teuku Umar', -5.400958434346043, 105.26095926761627),
('RPA0000070', 'ADIL Printing Teuku Umar', -5.401310913982599, 105.26087880134583),
('RPA0000071', 'FANS CELL Teuku Umar', -5.40173282115679, 105.26076078414917),
('RPA0000072', 'Watala Teuku Umar', -5.403062627922716, 105.26043891906738),
('RPA0000073', 'Anaya Salon N Spa Teuku Umar', -5.403767584542445, 105.26023507118225),
('RPA0000074', 'Jl. Hanoman', -5.404426611558634, 105.25977909564972),
('RPA0000075', 'ATM BNI Teuku Umar Sawah Brebes', -5.405198857579627, 105.25941967964172),
('RPA0000076', 'Warung Makan Ibu Henni (Jl. Dipo)', -5.405882449478337, 105.25888592004776),
('RPA0000077', 'Depot Air Minum Isi Ulang Gunari', -5.4071908849444466, 105.2581000328064),
('RPA0000078', 'Dekat Tugu Juang Bandar Lampung Lampung', -5.408551120514654, 105.25762259960175),
('RPA0000079', 'Masjid Taqwa Tanjung Karang', -5.408616809354191, 105.25861501693726),
('RPA0000080', 'Stasiun Kereta Api Tanjung Karang', -5.408918014907391, 105.25927484035492),
('RPA0000081', 'Tugu Radin Inten Ramayana', -5.410307086184482, 105.25866329669952),
('RPA0000082', 'Ramayana Tanjung Karang', -5.410528717709361, 105.25869011878967);

-- --------------------------------------------------------

--
-- Structure for view `v_rute`
--
DROP TABLE IF EXISTS `v_rute`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rute`  AS  select `rute`.`kd_rute` AS `kd_rute`,`rute`.`rute` AS `rute`,`rute`.`kd_kendaraan` AS `kd_kendaraan`,`kendaraan`.`warna` AS `warna`,`kendaraan`.`tarif` AS `tarif`,`kendaraan`.`gambar` AS `gambar` from (`rute` join `kendaraan` on((`rute`.`kd_kendaraan` = `kendaraan`.`kd_kendaraan`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`kd_kendaraan`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`kd_rute`),
  ADD KEY `kd_kendaraan` (`kd_kendaraan`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`kd_wilayah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
