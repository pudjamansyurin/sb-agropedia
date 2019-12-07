-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 03:28 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabil_agropedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL,
  `last_activity` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `id_role`, `last_activity`, `last_login`, `created_on`, `created_by`) VALUES
(1, 'root@mailinator.com', 'r00t', 1, '2017-10-16 11:37:16', '2017-10-16 11:35:51', '2017-06-23 23:06:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `answer`) VALUES
(1, 'Apa itu Agropedia ?', 'Agropedia adalah market place yang dikhususkan untuk hasil bumi Indonesia, baik dari hasil pertanian, perkebunan, peternakan, dan perikanan.'),
(2, 'Siapa yang membuat Agropedia?', 'Agropedia diusulkan oleh DPP LDII, dan direalisasikan dalam bentuk aplikasi dengan bantuan Al-Manshurin Informatika.'),
(3, 'Apakah dikenakan biaya?', 'Tidak, kami tidak memungut biaya untuk fitur standar, alias GRATIS.');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `tgl_posting` datetime NOT NULL,
  `tgl_panen` date NOT NULL,
  `lokasi` text NOT NULL,
  `dilihat` int(11) NOT NULL,
  `dihubungi` int(11) NOT NULL,
  `id_kategori_sub` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_iklan_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `judul`, `deskripsi`, `harga`, `id_satuan`, `tgl_posting`, `tgl_panen`, `lokasi`, `dilihat`, `dihubungi`, `id_kategori_sub`, `id_user`, `id_iklan_status`) VALUES
(1, 'Ayam Kampung', 'Ayam kampung adalah sebutan di Indonesia bagi ayam peliharaan yang tidak ditangani dengan cara budidaya massal komersial serta tidak berasal-usul dari galur atau ras yang dihasilkan untuk kepentingan komersial tersebut.[1] Ayam kampung tidak memiliki istilah ayam kampung petelur ataupun pedaging.[1] Hal ini disebabkan ayam kampung bertelur sebagaimana halnya bangsa unggas dan mempunyai daging selayaknya hewan pada umumnya.[1] Nama ilmiah untuk ayam kampung adalah Gallus domesticus.[2] Aktivitas peternakan ayam kampung telah ada sejak zaman dahulu.[1]', 20000, 2, '2017-11-08 00:00:00', '2018-01-04', 'Mojosari, Mojokerto', 4212, 2, 1, 1, 1),
(2, 'Bebek', 'Bebek atau Itik adalah nama umum untuk beberapa spesies burung dalam famili Anatidae. Bebek umumnya adalah burung akuatik yang sebagian besar berukuran lebih kecil dibandingkan kerabatnya, angsa dan angsa berleher pendek, dan dapat ditemukan pada perairan air tawar maupun air laut.', 35000, 2, '2017-07-05 00:00:00', '2017-11-14', 'Ploso, Jombang', 213, 0, 2, 1, 1),
(3, 'Brambang Jumbo', 'Bawang merah (Allium cepa var ascalonicum (L) Back) merupakan sejenis tanaman yang menjadi bumbu berbagai masakan di dunia, berasal dari Iran, Pakistan, dan pegunungan-pegunungan di sebelah utaranya, kemudian dibudidayakan di daerah dingin, sub-tropis maupun tropis.', 15000, 1, '2017-11-03 00:00:00', '2018-02-01', 'Lamongan Kota', 123, 99, 4, 1, 1),
(4, 'Durian Montong', 'Durian Montong, Buah Asli RI yang Jadi Andalan Ekspor Thailand. Jakarta - Bagi pecinta durian, pastinya mengenal durian montong yang manis, besar, dan memiliki daging tebal. Belum ada satu pun kawasan khusus perkebunan rakyat untuk produksi buah tropis dengan skala luas.', 40000, 5, '2017-11-12 00:00:00', '2018-06-20', 'Bekasi, Banten', 42, 1, 8, 1, 1),
(5, 'Jagung', 'Jagung (Zea mays ssp. mays) adalah salah satu tanaman pangan penghasil karbohidrat yang terpenting di dunia, selain gandum dan padi. Bagi penduduk Amerika Tengah dan Selatan, bulir jagung adalah pangan pokok, sebagaimana bagi sebagian penduduk Afrika dan beberapa daerah di Indonesia.', 250000, 3, '2017-10-25 00:00:00', '2018-01-17', 'Pasuruan', 231, 12, 5, 2, 1),
(6, 'Kentang', 'Kentang (Solanum tuberosum L.) adalah tanaman dari suku Solanaceae yang memiliki umbi batang yang dapat dimakan dan disebut \'kentang\' pula. Umbi kentang sekarang telah menjadi salah satu makanan pokok penting di Eropa walaupun pada awalnya didatangkan dari Amerika Selatan.', 375000, 3, '2017-10-04 00:00:00', '2017-12-06', 'Kleco, Sawoo, Ponorogo', 29, 0, 6, 1, 1),
(7, 'Ikan Koi', 'Ikan Koi adalah sejenis ikan yang termasuk ikan mas (Cyprinus carpio) yang mempunyai ornamen yang sangat indah dan jinak. Koi biasanya dipelihara sebagai hiasan dengan tujuan keindahkan dan keberuntungan di dalam rumah dan luar rumah (kolam koi atau taman air, karena ikan koi dipercaya membawa keberuntungan.', 12500, 2, '2017-11-13 00:00:00', '2017-11-30', 'Sragen, Solo', 12, 0, 12, 2, 1),
(8, 'Lele', 'Lele atau ikan keli, adalah sejenis ikan yang hidup di air tawar. Lele mudah dikenali karena tubuhnya yang licin, agak pipih memanjang, serta memiliki \'kumis\' yang panjang, yang mencuat dari sekitar bagian mulutnya.', 12500, 1, '2017-05-02 00:00:00', '2017-11-01', 'Semarang', 1232, 992, 13, 2, 1),
(9, 'Buah Naga', 'Buah naga (Inggris: pitaya) adalah buah dari beberapa jenis kaktus dari marga Hylocereus dan Selenicereus. Buah ini berasal dari Meksiko, Amerika Tengah dan Amerika Selatan namun sekarang juga dibudidayakan di negara-negara Asia seperti Taiwan, Vietnam, Filipina, Indonesia dan Malaysia.', 5000, 5, '2017-11-02 00:00:00', '2018-03-15', 'Jombatan, Jombang', 12, 0, 9, 1, 1),
(10, 'Padi', 'Padi (bahasa latin: Oryza sativa L.) merupakan salah satu tanaman budidaya terpenting dalam peradaban.', 400000, 4, '2017-10-24 00:00:00', '2017-12-23', 'Trawas, Pacet', 289102, 292, 7, 1, 1),
(11, 'Sapi Brahman', 'Sapi brahman adalah keturunan sapi Zebu atau Boss Indiscuss. Aslinya berasal dari India kemudia masuk ke Amerika pada tahun 1849 berkembang pesat di Amerika, Di AS, sapi Brahman dikembangkan untuk diseleksi dan ditingkatkan mutu genetiknya. Setelah berhasil, jenis sapi ini diekspor ke berbagai negara.', 18000000, 2, '2017-11-13 07:00:00', '2017-11-11', 'Madiun', 12, 8, 3, 1, 1),
(12, 'Kelapa Sawit', 'Kelapa sawit (Elaeis) adalah tumbuhan industri penting penghasil minyak masak, minyak industri, maupun bahan bakar (biodiesel). Perkebunannya menghasilkan keuntungan besar sehingga banyak hutan dan perkebunan lama dikonversi menjadi perkebunan kelapa sawit.', 9050500, 4, '2017-10-13 00:00:00', '2019-04-18', 'Ternate', 482, 21, 10, 1, 1),
(13, 'Wortel', 'Wortel adalah tumbuhan biennial (siklus hidup 12 - 24 bulan) yang menyimpan karbohidrat dalam jumlah besar untuk tumbuhan tersebut berbunga pada tahun kedua. Batang bunga tumbuh setinggi sekitar 1 m, dengan bunga berwarna putih, dan rasa yang manis langu.', 23000, 1, '2017-11-10 00:00:00', '2018-01-13', 'Pacet', 12, 0, 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `iklan_photo`
--

CREATE TABLE `iklan_photo` (
  `id_iklan_photo` int(11) NOT NULL,
  `iklan_photo` varchar(250) NOT NULL,
  `id_iklan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan_photo`
--

INSERT INTO `iklan_photo` (`id_iklan_photo`, `iklan_photo`, `id_iklan`) VALUES
(1, 'ayam1.jpg', 1),
(2, 'ayam2.jpg', 1),
(3, 'bebek1.jpg', 2),
(4, 'brambang1.jpg', 3),
(5, 'brambang2.jpg', 3),
(6, 'brambang3.jpg', 3),
(7, 'durian1.jpg', 4),
(8, 'durian2.jpg', 4),
(9, 'durian3.jpg', 4),
(10, 'jagung1.jpg', 5),
(11, 'jagung2.jpg', 5),
(12, 'kentang1.jpg', 6),
(13, 'kentang2.jpg', 6),
(14, 'kentang3.jpg', 6),
(15, 'koi1.jpg', 7),
(16, 'koi2.jpg', 7),
(17, 'lele1.jpg', 8),
(18, 'lele2.jpg', 8),
(19, 'naga1.jpg', 9),
(20, 'naga2.jpg', 9),
(21, 'naga3.jpg', 9),
(22, 'padi1.jpg', 10),
(23, 'padi2.jpg', 10),
(24, 'sapi1.jpg', 11),
(25, 'sapi2.jpg', 11),
(26, 'sapi3.jpg', 11),
(27, 'sawit1.jpg', 12),
(28, 'sawit2.jpg', 12),
(29, 'wortel1.jpg', 13),
(30, 'wortel2.jpg', 13),
(31, 'wortel3.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `iklan_satuan`
--

CREATE TABLE `iklan_satuan` (
  `id_satuan` int(11) NOT NULL,
  `satuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan_satuan`
--

INSERT INTO `iklan_satuan` (`id_satuan`, `satuan`) VALUES
(1, 'Kilogram'),
(2, 'Ekor'),
(3, 'Kwintal'),
(4, 'Ton'),
(5, 'Buah');

-- --------------------------------------------------------

--
-- Table structure for table `iklan_status`
--

CREATE TABLE `iklan_status` (
  `id_iklan_status` int(11) NOT NULL,
  `iklan_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan_status`
--

INSERT INTO `iklan_status` (`id_iklan_status`, `iklan_status`) VALUES
(1, 'AKTIF'),
(2, 'NON-AKTIF'),
(3, 'MODERASI'),
(4, 'DITOLAK');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `warna`, `icon`) VALUES
(1, 'Pertanian', 'green', '<img src=\"data:image/png;base64,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\">'),
(2, 'Perkebunan', 'blue', '<img src=\"data:image/png;base64,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\">'),
(3, 'Perikanan', 'orange', '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAynSURBVHhe7VtpUFRXFmaWmpqlZl+qZv7MVM2fWX7MUlOZmqmpytTMJMHejeBER8bEGKX3BoXgBiau40ISlwQVpemmu9nEBZGoiBoUFeICLkETI4gGgxvQC3TTcOecxwW66fuWNgmhwvuqvqK73z233zl93z3LPSTIkCFDhgwZMmTIkCFDhgwZMmTImMwoTU7+msOg1HtsumanURkoNCrCRWaV123RfFxs1V4utmlL7Qbl4gJD4j8dC576FhWTgcg3an7msmiuVi9P8X5UvpoEj71FBk5sJ31H3yQ9b79B7lasIe87lpKGN6yhfYtndDlMqqDHqm20G6fMLbBqv0enmZzAleeyqK9d2JoeIifziRSGT2wjrZ5XSM3KOV6nSRUA+TccqU/9hE45ueAwKSyHX5ntYxlKCn2HN5H6jYY+JzzuTpNiPklI+BKdenLAbdNe7ShfwzROPHxUlUv2ZE33ua2aqvw5mm/T6b/4cBhVfaFjeUyjxEvcN+vWpfa6zJpLk2ZvLDQomMb4JKzfaAy6wMng/kq/5ouLz8KAg3U7yNvLU3ohBMqjXzOxYZ+vfMJjVVcUmTUPIZbrd1k1nSVpunMum+o1e6pSs9Oc+GM6NAZ8BgxBKNOxew25vCOTnNyQCgb5LynPSCIem5Y4jEqO+LpswbOw9/2bHH71eXQmpDkvg7SXriQ91a/DdZ0f741+1cQDerwii3ojxGT+q/mLBn2HNpHwO9u52O1O2Wpy8a0FA2/npPRAQBwEZdtgRbxp1yc+XZKW9A06RZQBH1RuJE15C8nB7FmkJCOZnN21irSdqCA3S9dxsaAX5g3WvsWtMCS+Ri/cDcbyXT9DuloayK26CnLRk0v2Zb9AStKnEnBSnQ79FN22eapv0q+cOADDrNq3+N8+DHgjV89YDtblk3v71pOmbQsGKpfM6IbYrQ8MWm83qOajAcHQ3Co6tNZEbtfvJ8HOVkIGwoRD5wfMOaN47djQ2DEI99wnD6+cIu9syQo4wVkVp2n3FuoTn5wQoY7d8MxvXWZ1oLdmK1spAfYfz+OMtjszKVyWNZO0Hisj/V13qdoRCAcJOVvEnGOEpwsJCfVSAQbCIUIaXNxqbdm1eLAic7oXQp32QoMqBZzMV6g64w+3Ve1o3pYRZiolwI6Ktdx+VvHydHKvsRpWWj/VlIHWRuYcUWy/SAfzoPXdGBm8h6rsWZhnf1RoUGupSuMLl1l7t/vgazE3x8dhw+0Bw33gXEYG6+2E9MMK4wOuqvoC5lwjPOMYWmF8wPlPwxiWLBDz7orMZB9sJycK5j/zC6ra+AC9LToM1o1FEjf+o6te5Ax3oyib2/y5azfqqZY8uHUhZq4YtjbQwTy43cSWi+AA6ACOawCCb1+RUTWTqvfZw2lW+3FfYd0UErMCDCmK03Tk0vZM7n3UmN5uqiUPGoujx7PY20MH8+BcKVuOQYwAyjOmBTxmrf2x90anOfE7GGq4TOpurhZn09UUGBSJ9HIUsG53p2wV82YwrKhcOpNbeb5Dm2PHXNxLNeRBDziUsTJj2bSfDuZBt4Q5xhBjT9hmeuGRrou75rht3r++67aoW05u0Pf6D28m6F3fdywb9lpnC0yqX9GhHBwGRdrRlS/GVFE+dC3n4q9r9iVRn0fx1nmqJQ8+PM2Wi+SdS3QwD26eZcuJELeYuvWpQbdFey6u2NFj0R44+7qpjzXhlZ1ZsEeofQ6TMpkOT8Bg2GVRd9z0vDLIjYVx57bYuHju4YGNUXPE0HufasmD87vZcpH0P6SDeXC+nC0nhcNGhIUj6XHG7ADSJG/MPhXBB5UbSHG6zl9kUlmoWEJhauIf4H3P1V1ZA++sm0+ql6dwVWSW/AjPuqiGPAgG2HKRhLhOEOjBWXJxEBcOpIcBCNd2UXX5UWzVnr/pXs6cKJKYohWnTfVD9pBCRRMKDNrfw3L318J+J8Urk8sQ+wnhQRtbLpJXD9PBPLgPmQxLLk6ikyxbmOS3m5VJVN1YYPyDuexIeCHCRwdyCeS/MGniL3GPcFm0Z7AGh+kaa3wMPzxDteRBu4TwpQ2CYyFImUMi7+1bR2Cr6i406n5ITRYNh0FlObUhtZclzMcrO14Ow555fth4uGewxjH58XWqJQ8wr2XJRRLzYyFImCME29WmZelEoU7muAVe42essXhkgNEJNVk0PGm6/TecOUxBPuJqA1ffd3DZfwJxGQ+J4YUQmg+w5SLZ3UEH86C5ki0Xwa3Z6eSJv6ujiJ+xxmJEUgR5v2ue6kfUbKNwW3W3RL0mgxDnDV4vXMq8Jkgx7/muhOBXLAh/t4QtF0GFOinGgLgSWWORJ/43L+A0q9Kp2UaBAbOo52RwT9Z00lWVy7wmyD4f1ZIHArnrCLFKIwQJc8RrwPaSFcSTpm2gZhsFdgBgPsgSEmJJ2lTxkIVFMeWxyMCSi6RQBQchVoQAxvMII+lj3EPNNgqnSRnCg2qWkBCxpC7Z80ZSDCyZsRQDS2YM0WGgwYadCL7mcyJIjJFxsVGzjQJCkq5AzRamkBDdVi0XJ7GuCVKo/ISQsHpGqtV8wDIXS+4TEI8rYAU+pGYbBTzXLZ171zGFhAj57mDXwdeZ1wQZ9FMtefBp7IFSKjlx8ibk+BAvH6VmG4XHpnEKJv4MYtUCVuBAvOEPx0AX1ZIHkrywSBnrwh623CcgpHU9dr1yHjXbKApTlbNrVs3xsoT4eGqDvs9pVteXL5zmw8oNawwvReNA8RhOdI5LVWy5x6QXHl/wFX4s91GzjWLHi0//AFKVXqmO5FbxCm4vcOmV33eaVBngjf2YI7PGMnn3GtWSB59GJnL9BFvuMXl87Vx/kVG5hposFh6rrrpl15KhspQAMS/EPNhhUPyZikIYpEr1WDWB+/vXM2ViiHU6IUjJY/GgSAh3LrPlHoNYNAadO5mrbxiFxil/Krbp/HjcyJoEebt0JZfOOPSJaio2AiyuwrXBa1IyE7FKygMJlZSrR+hgHmCqx5KLk/4jW9Bx+BzGKU9RVfnhsmryj699KaYwgCWqc1tsQTDQI4de8Vc6fARYkcFf6L2diwb3LnqOnNqoBycj0G11xgkaDg4pyoKUWp5YTRFDJZZcHOw/vo3sW/Sc12lWLqeqCgMN4bZqGo6tnhvAkzS0Pj7WZQumet1mTZXzpWd+SodGwWFSpNWuGirt4wo+nWsguzOSuCPDsTc1QtGKtIRqsv8RHcyDCxVsOQlE4x3MnuV1WTTuuLoYuPqeVZ0LK+ohHiy5bdrKQkPi3+hlJvBwaayx8D02AuFqZKZ77U1USx5IOc8QOxPBcxeWnAjxfisXz/S6zBrXuHQucMebEBeOvRF8jBs3WbkDpiv5L0cfazZBqCIESadyInPgCmXJCRCPLUoWPOvFnp9x658RO2DHNrOaFS9gB8BQR8LwHiv2CIoG1DvFA2oph1NAvKfmvIUhTGsdRtU0qtr4QGqLx1Brx2yuJ+YDBxgSjy6FgI85Y54oinUm4GPOkovg0HYzzeu2aWr49vnPFG6LpgB+PclNRsM9MpU5z5OuFtjr+IoL/X1DnVeMOUaInVtCxQksOqDHZsjehvjuwNKZ3RB9tPE1D4wLnPMTfwPeyh9vmxt2n9asnEPKs2aQGzUeErp/m2odgU+jO+t288hYjCwub88Mg4Pr9ti0LXZDYlJOTs6XqSqfH1xm9Yp4Gi0v5tFGSyPXaNngNCgrIWC9c2Blqr/teHm4rwNSNSya4urCM2DGXCPE0lUoQK01BjBHqLMVm4fC+5fMeASxrBfPeSF7+gu99YkB9Fguk2otGINr9cU4EnPrmFZfkxoN1gbx5mY8zC+Y/eTX6RQcHCbl7zBw9aRpm1xWHTm1PZs0F63m/s0LVyzOhzVI3PTxx8DXuPIDTdWwgtuJ72YzuXexltw44iZ1by4lOAekmR+7zMpcR+qUf0z4rn3sVIDNuBQe6QcOo7If/nYWp+kawbutK9ArlFi4oENFga2/d2G/xBAI48lD2JQJnhx+AOI0qYjDqOBeY5iEn1dnp+DBD2ncbOX6cmpXz+2H1VY7Idp5Pw/wde9L4eUdmQPw43VgwxSdbvLhcQyIj/bp10whF2wTRQbFz+lUkxOwBQQD4DVZhmIRY9GqZbMCkIqej2er+MIC9rczLQWLRWuU2BRwcn1qENKvgMusWnIs58mv0ikmNyDE+SP2JL63M2ug9+hWLpdGr4sGa/O8Sho2WUK7M5N7wGiPYFyu0H9DTVoU6hW/dlt1RyB+68EzWQhx/G6btt2Trqt1GpUrsFL0uf6vhwwZMmTIkCFDhgwZMmTIkCFDhoxxQULC/wF7rAyQLEKicAAAAABJRU5ErkJggg==\">'),
(4, 'Peternakan', 'purple', '<img src=\"data:image/png;base64,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\">');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sub`
--

CREATE TABLE `kategori_sub` (
  `id_kategori_sub` int(11) NOT NULL,
  `kategori_sub` varchar(100) NOT NULL,
  `id_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_sub`
--

INSERT INTO `kategori_sub` (`id_kategori_sub`, `kategori_sub`, `id_parent`) VALUES
(1, 'Ayam', 4),
(2, 'Bebek', 4),
(3, 'Sapi', 4),
(4, 'Bawang Merah', 1),
(5, 'Jagung', 1),
(6, 'Kentang', 1),
(7, 'Padi', 1),
(8, 'Durian', 2),
(9, 'Buah Naga', 2),
(10, 'Kelapa Sawit', 2),
(11, 'Wortel', 1),
(12, 'Koi', 3),
(13, 'Lele', 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(25) NOT NULL,
  `role_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`, `role_desc`) VALUES
(1, 'ADMIN', 'Bisa Membuat Akun & Mengisi Data'),
(2, 'VIEW', 'Hanya Melihat Data');

-- --------------------------------------------------------

--
-- Table structure for table `sistem_config`
--

CREATE TABLE `sistem_config` (
  `id_sistem_config` int(11) NOT NULL,
  `sistem_config` varchar(100) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sistem_config`
--

INSERT INTO `sistem_config` (`id_sistem_config`, `sistem_config`, `value`) VALUES
(1, 'theme', 'purple'),
(2, 'cookie_time', '2629746'),
(3, 'webview_update_reminder', '15770031'),
(4, 'unsupported_device_message', 'JIKA ANDA MELIHAT PESAN INI, MENANDAKAN VERSI ANDROID ANDA TIDAK SUPPORT.'),
(5, 'app_title', 'SENSUS'),
(7, 'privacy_policy', '&lt;p&gt;Privacy Policy ini mengungkapkan kebijakan penanganan data-data pribadi pengguna pada situs Aplikasi Agropedia. Pada Privacy Policy ini, kecuali disebutkan lain, yang dimaksud dengan “Aplikasi Agropedia” adalah termasuk situs Aplikasi Agropedia.&lt;/p&gt;\r\n						&lt;h4&gt;INFORMASI YANG KAMI AMBIL DARI PENGGUNA&lt;/h4&gt;\r\n						&lt;p&gt;Informasi yang kami ambil dari pengguna kami terbagi dalam dua kategori: &lt;br&gt;1) data pribadi yang secara suka rela Anda berikan ketika Anda berlangganan, memesan barang atau layanan tertentu, mengisi dan melengkapi survey, mendaftar untuk mengikuti diskusi online, berpartisipasi dalam kontes atau kuis atau memberikan alamat e-mail dan &lt;br&gt;2) penelusuran informasi yang dikumpulkan ketika Anda bernavigasi di dalam situs kami&lt;/p&gt;\r\n						&lt;h4&gt;ANALISA STATISTIK&lt;/h4&gt;\r\n						&lt;p&gt;Aplikasi Agropedia&amp;nbsp;dapat melakukan analisa statistik, demografi dan marketing dari para pengguna dan pelanggannya serta kebiasaan serta pola-pola penggunaan yang terjadi untuk pengembangan produk.&lt;/p&gt;\r\n						&lt;h4&gt;BERBAGI INFORMASI DENGAN PIHAK KETIGA&lt;/h4&gt;\r\n						&lt;p&gt;Jika Anda telah terdaftar dalam salah satu layanan situs kami,&amp;nbsp;Aplikasi Agropedia tidak akan menjual, menyewakan, menukar, atau memberikan wewenang kepada pihak ketiga untuk menggunakan alamat e-mail Anda atau informasi lainnya yang secara pribadi bisa mengidentifikasi diri Anda tanpa ijin.&lt;/p&gt;\r\n						&lt;h4&gt;PERLINDUNGAN DAN KEAMANAN INFORMASI&lt;/h4&gt;\r\n						&lt;p&gt;Keamanan Data: Untuk mencegah akses data oleh pihak yang tidak memiliki wewenang, menjaga keakuratan data dan memastikan penggunaan informasi yang semestinya, kami menggunakan prosedur fisik, elektronik dan manajerial untuk melindungi informasi yang kami kumpulkan secara online&lt;/p&gt;\r\n						&lt;h4&gt;INFORMASI LAINNYA: Kepatuhan Pada Proses Hukum&lt;/h4&gt;\r\n						&lt;p&gt;Kami dapat menyampaikan informasi pribadi jika diperintahkan oleh hukum atau percaya bahwa langkah tersebut adalah perlu dilakukan untuk :&lt;br&gt;(1) patuh pada hukum atau proses pengadilan; &lt;br&gt;(2) melindungi dan mempertahankan hak cipta dan hak milik kami; &lt;br&gt;(3) melindungi terhadap penyalahgunaan atau penggunaan tanpa ijin dari situs web kami; atau &lt;br&gt;(4) melindungi keamanan pribadi atau properti atas pengguna kami atau publik (di antara hal lainnya, hal ini berarti jika Anda memberikan informasi palsu atau berpura-pura menjadi orang lain, informasi mengenai diri Anda dapat kami sampaikan sebagai bagian dari penyelidikan atas tindakan Anda).&lt;/p&gt;\r\n						&lt;h4&gt;INFORMASI LAINNYA: Perubahan Privacy Policy&lt;/h4&gt;\r\n						&lt;p&gt;Privacy Policy ini dapat diubah atau ditambah sewaktu-waktu. Setiap perubahan akan ditampilkan di halaman ini. &lt;/p&gt;'),
(8, 'company', 'Al-Manshurin Informatika'),
(9, 'company_email', 'pujakusumae@hotmail.com'),
(10, 'company_phone', '085730704081'),
(11, 'mailer_host', 'smtp.gmail.com'),
(12, 'mailer_username', 'sensus.suteng@gmail.com'),
(13, 'mailer_password', 'j0k4m354'),
(14, 'mailer_sender', 'Aplikasi Sensus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `handphone` varchar(50) NOT NULL,
  `photo_profil` varchar(500) NOT NULL,
  `banner` varchar(500) NOT NULL,
  `last_activity` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `email_verified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `handphone`, `photo_profil`, `banner`, `last_activity`, `last_login`, `created_on`, `email_verified`) VALUES
(1, 'buyer@mailinator.com', 'buyer1234', 'Buyer One', '08128318212', 'buyer1.jpg', '', '2017-10-16 11:37:16', '2017-10-16 11:35:51', '2017-06-23 23:06:58', 0),
(2, 'buyer2@mailinator.com', 'buyer1234', 'Buyer Two', '085730704081', 'buyer2.jpg', '', '2017-11-14 00:00:00', '2017-11-13 00:00:00', '2017-11-13 14:18:26', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `iklan_photo`
--
ALTER TABLE `iklan_photo`
  ADD PRIMARY KEY (`id_iklan_photo`);

--
-- Indexes for table `iklan_satuan`
--
ALTER TABLE `iklan_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `iklan_status`
--
ALTER TABLE `iklan_status`
  ADD PRIMARY KEY (`id_iklan_status`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_sub`
--
ALTER TABLE `kategori_sub`
  ADD PRIMARY KEY (`id_kategori_sub`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `sistem_config`
--
ALTER TABLE `sistem_config`
  ADD PRIMARY KEY (`id_sistem_config`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `iklan_photo`
--
ALTER TABLE `iklan_photo`
  MODIFY `id_iklan_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `iklan_satuan`
--
ALTER TABLE `iklan_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `iklan_status`
--
ALTER TABLE `iklan_status`
  MODIFY `id_iklan_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_sub`
--
ALTER TABLE `kategori_sub`
  MODIFY `id_kategori_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sistem_config`
--
ALTER TABLE `sistem_config`
  MODIFY `id_sistem_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
