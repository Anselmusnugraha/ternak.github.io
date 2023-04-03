DROP TABLE customer;

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("1","Mbah Wiyono","Geneng, Kaliares, Wonoboyo","0","-","-");
INSERT INTO customer VALUES("2","Heri \"Prabu\"","Perum Giri Asri Brumbung","0","-","-");
INSERT INTO customer VALUES("3","Bu Misno \"Pakan\"","Bungkal, Ponorogo","0","-","-");
INSERT INTO customer VALUES("4","Jamu \"Raka Sehat\"","Wonokarto depan garasi Agra Mas","0","-","-");
INSERT INTO customer VALUES("5","NN","Tonggo Dewe","0","-","-");
INSERT INTO customer VALUES("6","Giyatno","Celep, Sukoharjo","081336026273","-","-");
INSERT INTO customer VALUES("7","Baskoro","Wonoboyo","0","-","-");
INSERT INTO customer VALUES("8","Sri \"Pokoh Kidul\"","Pokoh Kidul","0","-","-");
INSERT INTO customer VALUES("9","Inti Telur","Bauresan, Belakang Pasar Wonogiri","0","-","-");
INSERT INTO customer VALUES("10","Bu Lis","Jatisrono","0","-","-");
INSERT INTO customer VALUES("11","Pak Iskak","Semin, Pokoh Kidul","0","-","-");
INSERT INTO customer VALUES("12","Reza","Bauresan, Giripurwo, Wonogiri (Barat SMK Pariwisata)","081239777135","-","-");
INSERT INTO customer VALUES("13","Anton Pancuran","Pancuran, Selogiri","0895363091743","","");



DROP TABLE det_produksi;

CREATE TABLE `det_produksi` (
  `id_detproduksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_produksi` int(11) NOT NULL,
  `tgl_produksi` date NOT NULL,
  `jumlah_produksi` int(11) NOT NULL,
  `keterangan` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_detproduksi`),
  KEY `id_produksi` (`id_produksi`),
  CONSTRAINT `det_produksi_ibfk_1` FOREIGN KEY (`id_produksi`) REFERENCES `produksi` (`id_produksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

INSERT INTO det_produksi VALUES("1","3","2020-01-24","2","etan 1 kulon 1");
INSERT INTO det_produksi VALUES("2","3","2020-01-25","3","");
INSERT INTO det_produksi VALUES("3","3","2020-01-26","4","");
INSERT INTO det_produksi VALUES("4","3","2020-01-27","4","");
INSERT INTO det_produksi VALUES("5","3","2020-01-28","5","");
INSERT INTO det_produksi VALUES("6","3","2020-01-29","5","");
INSERT INTO det_produksi VALUES("7","3","2020-01-30","6","");
INSERT INTO det_produksi VALUES("8","3","2020-01-31","8","");
INSERT INTO det_produksi VALUES("9","3","2020-02-01","15","");
INSERT INTO det_produksi VALUES("10","3","2020-02-02","13","");
INSERT INTO det_produksi VALUES("11","3","2020-02-03","17","");
INSERT INTO det_produksi VALUES("12","3","2020-02-04","18","");
INSERT INTO det_produksi VALUES("13","3","2020-02-05","13","");
INSERT INTO det_produksi VALUES("14","3","2020-02-06","22","");
INSERT INTO det_produksi VALUES("15","3","2020-02-07","22","");
INSERT INTO det_produksi VALUES("16","3","2020-02-08","24","");
INSERT INTO det_produksi VALUES("17","3","2020-02-09","24","");
INSERT INTO det_produksi VALUES("18","3","2020-02-10","20","");
INSERT INTO det_produksi VALUES("19","3","2020-02-11","26","");
INSERT INTO det_produksi VALUES("20","3","2020-02-12","36","");
INSERT INTO det_produksi VALUES("21","3","2020-02-13","37","");
INSERT INTO det_produksi VALUES("22","3","2020-02-14","40","");
INSERT INTO det_produksi VALUES("23","3","2020-02-15","43","");
INSERT INTO det_produksi VALUES("24","3","2020-02-16","49","");
INSERT INTO det_produksi VALUES("25","3","2020-02-17","47","");
INSERT INTO det_produksi VALUES("26","3","2020-02-18","54","");
INSERT INTO det_produksi VALUES("27","3","2020-02-19","68","");
INSERT INTO det_produksi VALUES("28","3","2020-02-20","68","");
INSERT INTO det_produksi VALUES("29","3","2020-02-21","70","");
INSERT INTO det_produksi VALUES("30","3","2020-02-22","70","");
INSERT INTO det_produksi VALUES("31","3","2020-02-23","74","");
INSERT INTO det_produksi VALUES("32","3","2020-02-24","73","");
INSERT INTO det_produksi VALUES("33","3","2020-02-25","78","");
INSERT INTO det_produksi VALUES("34","3","2020-02-26","79","");
INSERT INTO det_produksi VALUES("35","3","2020-02-27","81","");
INSERT INTO det_produksi VALUES("36","3","2020-02-28","90","");
INSERT INTO det_produksi VALUES("37","3","2020-02-29","94","");
INSERT INTO det_produksi VALUES("38","3","2020-03-01","88","");
INSERT INTO det_produksi VALUES("39","3","2020-03-02","97","");
INSERT INTO det_produksi VALUES("40","3","2020-03-03","95","");
INSERT INTO det_produksi VALUES("41","3","2020-02-04","99","");
INSERT INTO det_produksi VALUES("42","3","2020-03-05","94","");
INSERT INTO det_produksi VALUES("43","3","2020-03-06","97","");
INSERT INTO det_produksi VALUES("44","3","2020-03-07","96","");
INSERT INTO det_produksi VALUES("45","3","2020-03-08","104","");
INSERT INTO det_produksi VALUES("46","3","2020-03-09","104","");
INSERT INTO det_produksi VALUES("49","2","2020-03-01","48","");
INSERT INTO det_produksi VALUES("50","2","2020-03-02","48","");
INSERT INTO det_produksi VALUES("51","2","2020-03-03","47","");
INSERT INTO det_produksi VALUES("52","2","2020-03-04","49","");
INSERT INTO det_produksi VALUES("53","2","2020-03-05","50","");
INSERT INTO det_produksi VALUES("54","2","2020-03-06","50","");
INSERT INTO det_produksi VALUES("55","2","2020-03-07","46","");
INSERT INTO det_produksi VALUES("56","2","2020-03-08","47","");
INSERT INTO det_produksi VALUES("57","2","2020-03-09","53","");



DROP TABLE gj_karyawan;

CREATE TABLE `gj_karyawan` (
  `id_kry` int(11) NOT NULL AUTO_INCREMENT,
  `id_profit` int(11) NOT NULL,
  `nama_kry` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `gaji` int(11) NOT NULL,
  `tgl_gaji` date NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  PRIMARY KEY (`id_kry`),
  KEY `id_profit` (`id_profit`),
  CONSTRAINT `gj_karyawan_ibfk_1` FOREIGN KEY (`id_profit`) REFERENCES `profit` (`id_profit`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE m_bibit;

CREATE TABLE `m_bibit` (
  `id_mbibit` int(11) NOT NULL AUTO_INCREMENT,
  `id_profit` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `populasi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_bibit` date NOT NULL,
  `total_Mbibit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mbibit`),
  KEY `id_profit` (`id_profit`),
  CONSTRAINT `m_bibit_ibfk_1` FOREIGN KEY (`id_profit`) REFERENCES `profit` (`id_profit`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO m_bibit VALUES("1","1","Kandang Lor (Periode 1/Apkir)","130","77000","2018-09-05","10010000");
INSERT INTO m_bibit VALUES("2","1","Kandang Kidul","100","78000","2019-01-10","7800000");
INSERT INTO m_bibit VALUES("3","1","Kandang lor (Periode 2)","120","73000","2020-01-16","8760000");



DROP TABLE m_kandang;

CREATE TABLE `m_kandang` (
  `id_mkandang` int(11) NOT NULL AUTO_INCREMENT,
  `id_profit` int(11) NOT NULL,
  `ket_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `tgl_beli` date DEFAULT NULL,
  `keterangan` varchar(300) DEFAULT NULL,
  `total_Mkandang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mkandang`),
  KEY `id_profit` (`id_profit`),
  CONSTRAINT `m_kandang_ibfk_1` FOREIGN KEY (`id_profit`) REFERENCES `profit` (`id_profit`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO m_kandang VALUES("1","1","Kandang 1 (Lor)","1","2814500","2018-10-12","Perbaikan Kandang Pertama","2814500");
INSERT INTO m_kandang VALUES("2","1","Kandang 2 (Kidul)","1","6774000","2018-12-20","Mbangun Kandang Baru","6774000");
INSERT INTO m_kandang VALUES("3","1","Kandang 1 (Lor)","1","452000","2019-12-01","Perbaikan Kandang Lor Periode 2","452000");



DROP TABLE m_lain;

CREATE TABLE `m_lain` (
  `id_mlain` int(11) NOT NULL AUTO_INCREMENT,
  `id_profit` int(11) NOT NULL,
  `ket_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `keterangan` varchar(300) DEFAULT NULL,
  `total_Mlain` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mlain`),
  KEY `id_profit` (`id_profit`),
  CONSTRAINT `m_lain_ibfk_1` FOREIGN KEY (`id_profit`) REFERENCES `profit` (`id_profit`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

INSERT INTO m_lain VALUES("1","1","Turbo","4","34000","2019-02-25","","136000");
INSERT INTO m_lain VALUES("2","1","Lampu","2","24000","2019-02-25","","48000");
INSERT INTO m_lain VALUES("3","1","Mineral","2","5000","2019-02-25","2 bungkus, harga @5000/bungkus","10000");
INSERT INTO m_lain VALUES("4","1","Neobro","1","28000","2019-02-25","","28000");
INSERT INTO m_lain VALUES("5","1","EM4","4","19000","2019-02-25","","76000");
INSERT INTO m_lain VALUES("6","1","Tetes tebu","4","9000","2019-02-25","","36000");
INSERT INTO m_lain VALUES("7","1","Mineral","1","100000","2019-02-28","Beli 1 Sak isi 25 bungkus","100000");
INSERT INTO m_lain VALUES("8","1","Kalsit","1","10000","2019-03-08","","10000");
INSERT INTO m_lain VALUES("9","1","EM4","1","20000","2019-03-16","","20000");
INSERT INTO m_lain VALUES("10","1","Tetes tebu","2","9000","2019-03-29","","18000");
INSERT INTO m_lain VALUES("11","1","Genting Kaca","15","10000","2019-03-31","","150000");
INSERT INTO m_lain VALUES("12","1","Kalsit","2","6000","2019-03-31","","12000");
INSERT INTO m_lain VALUES("13","1","EM4","1","20000","2019-04-29","","20000");
INSERT INTO m_lain VALUES("14","1","Kalsit","4","6000","2019-04-29","","24000");
INSERT INTO m_lain VALUES("15","1","Turbo","2","34000","2019-05-04","","68000");
INSERT INTO m_lain VALUES("16","1","EM4","4","20000","2019-05-08","","80000");
INSERT INTO m_lain VALUES("17","1","Tetes tebu","5","9000","2019-05-08","","45000");
INSERT INTO m_lain VALUES("18","1","Mineral","1","100000","2019-06-12","","100000");
INSERT INTO m_lain VALUES("19","1","Turbo","2","34000","2019-07-02","","68000");
INSERT INTO m_lain VALUES("20","1","Desinfektan","1","36000","2019-07-02","","36000");
INSERT INTO m_lain VALUES("21","1","Desinfektan","1","35000","2019-07-06","","35000");
INSERT INTO m_lain VALUES("22","1","Kalsit","4","6000","2019-07-06","","24000");
INSERT INTO m_lain VALUES("23","1","Terpal","1","135000","2019-07-07","","135000");
INSERT INTO m_lain VALUES("24","1","Turbo","2","34000","2019-07-30","","68000");
INSERT INTO m_lain VALUES("25","1","Mineral","1","100000","2019-08-14","","100000");
INSERT INTO m_lain VALUES("26","1","Turbo","1","34000","2019-08-26","","34000");
INSERT INTO m_lain VALUES("27","1","Turbo","3","34000","2019-08-30","","102000");
INSERT INTO m_lain VALUES("28","1","Bak Pakan","6","15000","2019-09-06","","90000");
INSERT INTO m_lain VALUES("29","1","Turbo","2","34000","2019-09-23","","68000");
INSERT INTO m_lain VALUES("30","1","Turbo","2","34000","2019-10-09","","68000");
INSERT INTO m_lain VALUES("31","1","EM4","1","20000","2019-10-09","","20000");
INSERT INTO m_lain VALUES("32","1","Kalsit","4","6000","2019-10-15","","24000");
INSERT INTO m_lain VALUES("33","1","Turbo","2","34000","2019-10-17","","68000");
INSERT INTO m_lain VALUES("34","1","Mineral","1","100000","2019-10-24","1 sak","100000");
INSERT INTO m_lain VALUES("35","1","em 4","2","20000","2019-11-02","","40000");
INSERT INTO m_lain VALUES("36","1","tetes","3","9000","2019-11-02","","27000");
INSERT INTO m_lain VALUES("37","1","Turbo","2","34000","2019-11-07","","68000");
INSERT INTO m_lain VALUES("38","1","Turbo","2","34000","2019-11-18","","68000");
INSERT INTO m_lain VALUES("39","1","Dolomit","10","10000","2019-12-01","","100000");
INSERT INTO m_lain VALUES("40","1","turbo","1","34000","2019-12-09","","34000");
INSERT INTO m_lain VALUES("41","1","Turbo","2","34000","0219-12-19","","68000");
INSERT INTO m_lain VALUES("42","1","keranjang angkut telor","1","90000","2019-12-19","","90000");
INSERT INTO m_lain VALUES("43","1","Mineral","1","100000","2019-12-24","","100000");
INSERT INTO m_lain VALUES("44","1","Kalsit","10","6000","2020-01-11","","60000");
INSERT INTO m_lain VALUES("46","1","Tahi Graji","25","3000","2020-01-14","Beli di selepan doyong harga /Sak 3000 rupiah","75000");
INSERT INTO m_lain VALUES("47","1","EM4","1","17000","2020-01-19","","17000");
INSERT INTO m_lain VALUES("48","1","HERBALTOP","1","12000","2020-01-19","","12000");
INSERT INTO m_lain VALUES("49","1","Turbo","1","34000","2020-01-21","","34000");
INSERT INTO m_lain VALUES("50","1","turbo","1","34000","2020-02-13","","34000");
INSERT INTO m_lain VALUES("51","1","em4","1","20000","2020-02-13","","20000");
INSERT INTO m_lain VALUES("52","1","em4","1","20000","2020-02-13","","20000");
INSERT INTO m_lain VALUES("53","1","bak pakan","6","15000","2020-03-01","","90000");



DROP TABLE m_pakan;

CREATE TABLE `m_pakan` (
  `id_mpakan` int(11) NOT NULL AUTO_INCREMENT,
  `id_profit` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `keterangan` varchar(300) DEFAULT NULL,
  `total_Mpakan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mpakan`),
  KEY `id_profit` (`id_profit`),
  CONSTRAINT `m_pakan_ibfk_1` FOREIGN KEY (`id_profit`) REFERENCES `profit` (`id_profit`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

INSERT INTO m_pakan VALUES("1","1","PJ","20","230000","2018-09-20","Pakan 2 Bulan Pertama","4600000");
INSERT INTO m_pakan VALUES("2","1","PJ","7","235000","2018-10-17","","1645000");
INSERT INTO m_pakan VALUES("3","1","PJ","10","235000","2018-11-14","","2350000");
INSERT INTO m_pakan VALUES("4","1","Fermentasi","1","193000","2018-11-14","","193000");
INSERT INTO m_pakan VALUES("5","1","Kons. Golden Egg","1","400000","2018-12-01","","400000");
INSERT INTO m_pakan VALUES("6","1","Katul","1","100000","2018-12-08","","100000");
INSERT INTO m_pakan VALUES("7","1","PJ","8","238000","2018-12-12","","1904000");
INSERT INTO m_pakan VALUES("8","1","Kons. 144 RED","1","422500","2018-12-26","","422500");
INSERT INTO m_pakan VALUES("9","1","PJ","1","238000","2019-01-02","","238000");
INSERT INTO m_pakan VALUES("10","1","PJ","13","238000","2019-01-09","","3094000");
INSERT INTO m_pakan VALUES("11","1","Kons. 144 RED","1","422500","2019-01-21","","422500");
INSERT INTO m_pakan VALUES("12","1","PJ","11","240000","2019-01-30","","2640000");
INSERT INTO m_pakan VALUES("13","1","PJ","12","240000","2019-02-13","","2880000");
INSERT INTO m_pakan VALUES("14","1","Kons. 144 RED","1","422500","2019-02-16","","422500");
INSERT INTO m_pakan VALUES("15","1","Katul","1","221000","2019-02-25","Harga katul @3400/Kg, jumlah Beli 65 Kg","221000");
INSERT INTO m_pakan VALUES("16","1","Kons. 144 RED","1","415000","2019-02-28","","415000");
INSERT INTO m_pakan VALUES("17","1","PJ","12","240000","2019-03-07","","2880000");
INSERT INTO m_pakan VALUES("18","1","Kons. 144 RED","1","415000","2019-03-10","","415000");
INSERT INTO m_pakan VALUES("19","1","Katul Biasa","1","15000","2019-03-11","Beli 1 plastik di warung","15000");
INSERT INTO m_pakan VALUES("20","1","Kons. 144 RED","1","415000","2019-03-29","","415000");
INSERT INTO m_pakan VALUES("21","1","PJ","14","240000","2019-03-31","","3360000");
INSERT INTO m_pakan VALUES("22","1","Gogik","19","3700","2019-03-31","gogik jumlah dan harga satuan per Kg","70300");
INSERT INTO m_pakan VALUES("23","1","Katul Kasar","5","3200","2019-04-01","","16000");
INSERT INTO m_pakan VALUES("24","1","Gogik","44","3700","2019-04-06","","162800");
INSERT INTO m_pakan VALUES("25","1","PJ","12","235000","2019-04-17","","2820000");
INSERT INTO m_pakan VALUES("26","1","Gogik","35","3700","2019-04-22","","129500");
INSERT INTO m_pakan VALUES("27","1","Kons. 144 RED","1","415000","2019-04-29","","415000");
INSERT INTO m_pakan VALUES("28","1","Gogik","34","3700","2019-05-01","","125800");
INSERT INTO m_pakan VALUES("29","1","PJ","12","235000","2019-05-08","","2820000");
INSERT INTO m_pakan VALUES("30","1","Kons. 144 RED","1","415000","2019-05-11","","415000");
INSERT INTO m_pakan VALUES("31","1","Gogik","45","3700","2019-05-11","","166500");
INSERT INTO m_pakan VALUES("32","1","PJ","1","230000","2019-05-14","","230000");
INSERT INTO m_pakan VALUES("33","1","Gogik","39","3700","2019-05-14","","144300");
INSERT INTO m_pakan VALUES("34","1","PJ","12","230000","2019-05-29","","2760000");
INSERT INTO m_pakan VALUES("35","1","Gogik","54","3700","2019-06-01","","199800");
INSERT INTO m_pakan VALUES("36","1","Kons. 144 RED","1","415000","2019-06-12","","415000");
INSERT INTO m_pakan VALUES("37","1","PJ","6","230000","2019-06-18","","1380000");
INSERT INTO m_pakan VALUES("38","1","PJ","6","230000","2019-06-25","","1380000");
INSERT INTO m_pakan VALUES("39","1","Gogik","51","3700","2019-06-25","","188700");
INSERT INTO m_pakan VALUES("40","1","Kons. 144 RED","1","415000","2019-07-02","","415000");
INSERT INTO m_pakan VALUES("41","1","PJ","10","230000","2019-07-10","","2300000");
INSERT INTO m_pakan VALUES("42","1","Kons. 144 RED","1","415000","2019-07-17","","415000");
INSERT INTO m_pakan VALUES("43","1","Gogik","43","3700","2019-07-17","","159100");
INSERT INTO m_pakan VALUES("44","1","Kons. 144 RED","1","415000","2019-07-27","","415000");
INSERT INTO m_pakan VALUES("45","1","PJ","10","235000","2019-07-30","","2350000");
INSERT INTO m_pakan VALUES("46","1","Kons. 144 RED","1","415000","2019-08-07","","415000");
INSERT INTO m_pakan VALUES("47","1","Gogik","48","3700","2019-08-07","","177600");
INSERT INTO m_pakan VALUES("48","1","Kons. 144 RED","1","415000","2019-08-14","","415000");
INSERT INTO m_pakan VALUES("49","1","PJ","13","235000","2019-08-22","","3055000");
INSERT INTO m_pakan VALUES("50","1","Gogik","48","3700","2019-08-24","","177600");
INSERT INTO m_pakan VALUES("51","1","Kons. 144 RED","1","415000","2019-08-26","","415000");
INSERT INTO m_pakan VALUES("52","1","Kons. 144 RED","1","415000","2019-09-04","","415000");
INSERT INTO m_pakan VALUES("53","1","Kons. 144 RED","1","415000","2019-09-14","","415000");
INSERT INTO m_pakan VALUES("54","1","Gogik","55","3700","2019-09-14","","203500");
INSERT INTO m_pakan VALUES("55","1","PJ","10","240000","2019-09-19","","2400000");
INSERT INTO m_pakan VALUES("56","1","Kons. 144 RED","1","415000","2019-09-23","","415000");
INSERT INTO m_pakan VALUES("57","1","Kons. 144","1","395000","2019-09-28","","395000");
INSERT INTO m_pakan VALUES("58","1","PJ","9","240000","2019-10-01","","2160000");
INSERT INTO m_pakan VALUES("59","1","Kons. 144 RED","1","400000","2019-10-09","Turun Harga","400000");
INSERT INTO m_pakan VALUES("60","1","PJ","13","240000","2019-10-13","","3120000");
INSERT INTO m_pakan VALUES("61","1","Kons. 144 RED","1","400000","2019-10-17","","400000");
INSERT INTO m_pakan VALUES("62","1","Kons. 144 RED","1","400000","2019-10-24","","400000");
INSERT INTO m_pakan VALUES("63","1","144 red","1","400000","2019-11-02","","400000");
INSERT INTO m_pakan VALUES("64","1","144 red","1","400000","2019-11-09","","400000");
INSERT INTO m_pakan VALUES("65","1","PJ","10","240000","2019-11-13","","2400000");
INSERT INTO m_pakan VALUES("66","1","Kons. 144 RED","1","400000","2019-11-18","","400000");
INSERT INTO m_pakan VALUES("67","1","144 red","1","400000","2019-11-23","","400000");
INSERT INTO m_pakan VALUES("68","1","PJ","5","240000","2019-12-06","","1200000");
INSERT INTO m_pakan VALUES("69","1","144 Red","1","400000","2019-12-09","","400000");
INSERT INTO m_pakan VALUES("70","1","Kons. 144 RED","1","400000","2019-12-23","","400000");
INSERT INTO m_pakan VALUES("71","1","PJ","5","240000","2019-12-27","","1200000");
INSERT INTO m_pakan VALUES("72","1","Kons. 144 RED","1","400000","2020-01-04","","400000");
INSERT INTO m_pakan VALUES("73","1","PJ","10","240000","2020-01-16","","2400000");
INSERT INTO m_pakan VALUES("74","1","144 Red","1","400000","2020-01-21","","400000");
INSERT INTO m_pakan VALUES("75","1","PJ","10","240000","2020-01-28","","2400000");
INSERT INTO m_pakan VALUES("76","1","Golden Egg","1","390000","2020-02-04","","390000");
INSERT INTO m_pakan VALUES("77","1","144 RED","1","400000","2020-02-13","","400000");
INSERT INTO m_pakan VALUES("78","1","PJ","10","240000","2020-02-18","","2400000");
INSERT INTO m_pakan VALUES("79","1","144 RED","1","295000","2020-03-03","Sing ngedoli ibu2 kleru dango","295000");
INSERT INTO m_pakan VALUES("80","1","Golden Egg","1","395000","2020-03-03","","395000");
INSERT INTO m_pakan VALUES("81","1","pj","5","240000","2020-03-04","","1200000");



DROP TABLE pemasukkan_lain;

CREATE TABLE `pemasukkan_lain` (
  `id_pemasukkan` int(11) NOT NULL AUTO_INCREMENT,
  `id_profit` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pemasukkan`),
  KEY `id_profit` (`id_profit`),
  CONSTRAINT `pemasukkan_lain_ibfk_1` FOREIGN KEY (`id_profit`) REFERENCES `profit` (`id_profit`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO pemasukkan_lain VALUES("2","1","2020-01-16","Apkir Kandang Lor Prd. 1 (107 Ekor)","107","43000","4601000");



DROP TABLE penjualan_telur;

CREATE TABLE `penjualan_telur` (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `id_profit` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_jual` date NOT NULL,
  `jml_telur` int(11) NOT NULL,
  `harga_perbtr` int(11) NOT NULL,
  `total_pjl` int(11) DEFAULT NULL,
  `pembayaran` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_penjualan`),
  KEY `id_profit` (`id_profit`),
  KEY `id_customer` (`id_customer`),
  CONSTRAINT `penjualan_telur_ibfk_1` FOREIGN KEY (`id_profit`) REFERENCES `profit` (`id_profit`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `penjualan_telur_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=319 DEFAULT CHARSET=latin1;

INSERT INTO penjualan_telur VALUES("1","1","9","2018-10-12","120","1750","210000","210000","Lunas");
INSERT INTO penjualan_telur VALUES("2","1","7","2018-10-18","325","1800","585000","585000","Lunas");
INSERT INTO penjualan_telur VALUES("3","1","7","2018-10-26","232","1800","417600","417000","Lunas");
INSERT INTO penjualan_telur VALUES("4","1","7","2018-10-26","170","1600","272000","272000","Lunas");
INSERT INTO penjualan_telur VALUES("5","1","9","2018-10-31","420","1750","735000","735000","Lunas");
INSERT INTO penjualan_telur VALUES("6","1","5","2018-11-04","9","2000","18000","18000","Lunas");
INSERT INTO penjualan_telur VALUES("7","1","7","2018-11-08","259","1800","466200","466000","Lunas");
INSERT INTO penjualan_telur VALUES("8","1","7","2018-11-08","205","1600","328000","328000","Lunas");
INSERT INTO penjualan_telur VALUES("9","1","4","2018-11-09","60","1500","90000","90000","Lunas");
INSERT INTO penjualan_telur VALUES("10","1","2","2018-11-09","300","1700","510000","510000","Lunas");
INSERT INTO penjualan_telur VALUES("11","1","4","2018-11-10","18","1800","32400","500","50rb beli bakso");
INSERT INTO penjualan_telur VALUES("12","1","4","2018-11-10","12","1500","18000","0","50rb beli bakso");
INSERT INTO penjualan_telur VALUES("13","1","4","2018-11-12","85","1800","153000","153000","Lunas");
INSERT INTO penjualan_telur VALUES("14","1","4","2018-11-12","15","1500","22500","22500","Lunas");
INSERT INTO penjualan_telur VALUES("15","1","4","2018-11-13","155","1800","279000","279000","Lunas");
INSERT INTO penjualan_telur VALUES("16","1","4","2018-11-13","20","1500","30000","30000","Lunas");
INSERT INTO penjualan_telur VALUES("17","1","4","2018-11-17","100","1800","180000","180000","Lunas");
INSERT INTO penjualan_telur VALUES("18","1","1","2018-11-17","228","1700","387600","387500","Lunas");
INSERT INTO penjualan_telur VALUES("19","1","4","2018-11-20","120","1800","216000","216000","Lunas");
INSERT INTO penjualan_telur VALUES("20","1","5","2018-11-22","20","1800","36000","36000","Lunas");
INSERT INTO penjualan_telur VALUES("21","1","1","2018-11-22","300","1700","510000","510000","Lunas");
INSERT INTO penjualan_telur VALUES("22","1","1","2018-11-22","30","1500","45000","45000","Lunas");
INSERT INTO penjualan_telur VALUES("23","1","4","2018-11-23","85","1800","153000","153000","Lunas");
INSERT INTO penjualan_telur VALUES("24","1","4","2018-11-26","44","1800","79200","79000","Lunas");
INSERT INTO penjualan_telur VALUES("25","1","4","2018-11-26","10","1500","15000","15000","Lunas");
INSERT INTO penjualan_telur VALUES("26","1","6","2018-11-26","200","1800","360000","360000","Lunas");
INSERT INTO penjualan_telur VALUES("27","1","4","2018-11-29","100","1800","180000","180000","Lunas");
INSERT INTO penjualan_telur VALUES("28","1","1","2018-11-30","256","1700","435200","435500","Lunas");
INSERT INTO penjualan_telur VALUES("29","1","1","2018-11-30","13","1500","19500","19500","Lunas");
INSERT INTO penjualan_telur VALUES("30","1","6","2018-12-04","200","1800","360000","360000","Lunas");
INSERT INTO penjualan_telur VALUES("31","1","1","2018-12-06","125","1700","212500","212500","Lunas");
INSERT INTO penjualan_telur VALUES("32","1","1","2018-12-06","49","1600","78400","78500","Lunas");
INSERT INTO penjualan_telur VALUES("33","1","1","2018-12-06","25","1500","37500","37500","Lunas");
INSERT INTO penjualan_telur VALUES("34","1","4","2018-12-07","60","1800","108000","108000","Lunas");
INSERT INTO penjualan_telur VALUES("35","1","4","2018-12-08","60","1800","108000","110000","Lunas");
INSERT INTO penjualan_telur VALUES("36","1","6","2018-12-09","200","1800","360000","360000","Lunas");
INSERT INTO penjualan_telur VALUES("37","1","4","2018-12-10","60","1800","108000","110000","Lunas");
INSERT INTO penjualan_telur VALUES("38","1","4","2018-12-12","100","1800","180000","180000","Lunas");
INSERT INTO penjualan_telur VALUES("39","1","4","2018-12-14","100","1800","180000","180000","Lunas");
INSERT INTO penjualan_telur VALUES("40","1","1","2018-12-14","215","1700","365500","365500","Lunas");
INSERT INTO penjualan_telur VALUES("41","1","1","2018-12-14","11","1500","16500","16500","Lunas");
INSERT INTO penjualan_telur VALUES("42","1","4","2018-12-17","60","1800","108000","108000","Lunas");
INSERT INTO penjualan_telur VALUES("43","1","10","2018-12-17","50","2000","100000","100000","Lunas");
INSERT INTO penjualan_telur VALUES("44","1","6","2018-12-18","200","1800","360000","360000","Lunas");
INSERT INTO penjualan_telur VALUES("45","1","4","2018-12-19","100","1800","180000","180000","Lunas");
INSERT INTO penjualan_telur VALUES("46","1","4","2018-12-21","60","1800","108000","108000","Lunas");
INSERT INTO penjualan_telur VALUES("47","1","1","2018-12-22","250","1700","425000","425000","Lunas");
INSERT INTO penjualan_telur VALUES("48","1","1","2018-12-22","20","1500","30000","30000","Lunas");
INSERT INTO penjualan_telur VALUES("49","1","6","2018-12-24","150","1800","270000","270000","Lunas");
INSERT INTO penjualan_telur VALUES("50","1","4","2018-12-25","50","1600","80000","80000","Lunas");
INSERT INTO penjualan_telur VALUES("51","1","2","2018-12-26","172","1800","309600","309500","Lunas");
INSERT INTO penjualan_telur VALUES("52","1","4","2018-12-27","31","1800","55800","55800","Lunas");
INSERT INTO penjualan_telur VALUES("53","1","4","2018-12-27","29","1600","46400","46200","Lunas");
INSERT INTO penjualan_telur VALUES("54","1","4","2018-12-29","30","1800","54000","54000","Lunas");
INSERT INTO penjualan_telur VALUES("55","1","4","2018-12-29","50","1600","80000","80000","Lunas");
INSERT INTO penjualan_telur VALUES("56","1","1","2018-12-30","210","1700","357000","298000","Lunas");
INSERT INTO penjualan_telur VALUES("57","1","6","2019-01-01","166","1800","298800","298000","Lunas");
INSERT INTO penjualan_telur VALUES("58","1","4","2019-01-02","35","1800","63000","63000","Lunas");
INSERT INTO penjualan_telur VALUES("59","1","4","2019-01-02","15","1600","24000","24000","Lunas");
INSERT INTO penjualan_telur VALUES("60","1","4","2019-01-04","10","1800","18000","18000","Lunas");
INSERT INTO penjualan_telur VALUES("61","1","4","2019-01-04","20","1600","32000","32000","Lunas");
INSERT INTO penjualan_telur VALUES("62","1","6","2019-01-05","200","1800","360000","360000","Lunas");
INSERT INTO penjualan_telur VALUES("63","1","4","2019-01-05","25","1800","45000","45000","Lunas");
INSERT INTO penjualan_telur VALUES("64","1","4","2019-01-05","15","1600","24000","24000","Lunas");
INSERT INTO penjualan_telur VALUES("65","1","1","2019-01-08","333","1700","566100","566000","Lunas");
INSERT INTO penjualan_telur VALUES("66","1","1","2019-01-08","15","1500","22500","22500","Lunas");
INSERT INTO penjualan_telur VALUES("67","1","6","2019-01-10","165","1800","297000","297000","Lunas");
INSERT INTO penjualan_telur VALUES("68","1","4","2019-01-10","35","1600","56000","56000","Lunas");
INSERT INTO penjualan_telur VALUES("69","1","6","2019-01-14","200","1800","360000","360000","Lunas");
INSERT INTO penjualan_telur VALUES("70","1","4","2019-01-10","50","2000","100000","100000","Lunas");
INSERT INTO penjualan_telur VALUES("71","1","1","2019-01-16","217","1700","368900","369000","Lunas");
INSERT INTO penjualan_telur VALUES("72","1","1","2019-01-16","10","1500","15000","15000","Lunas");
INSERT INTO penjualan_telur VALUES("73","1","4","2019-01-16","23","1700","39100","39000","Lunas");
INSERT INTO penjualan_telur VALUES("74","1","4","2019-01-18","30","1800","54000","54000","Lunas");
INSERT INTO penjualan_telur VALUES("75","1","4","2019-01-19","50","1800","90000","90000","Lunas");
INSERT INTO penjualan_telur VALUES("76","1","6","2019-01-19","203","1800","365400","365000","Lunas");
INSERT INTO penjualan_telur VALUES("77","1","2","2019-01-21","168","1800","302400","302500","Lunas");
INSERT INTO penjualan_telur VALUES("78","1","4","2019-01-23","30","1600","48000","48000","Lunas");
INSERT INTO penjualan_telur VALUES("79","1","6","2019-01-26","200","1850","370000","370000","Lunas");
INSERT INTO penjualan_telur VALUES("80","1","1","2019-01-27","253","1700","430100","430000","Lunas");
INSERT INTO penjualan_telur VALUES("81","1","1","2019-01-27","17","1500","25500","25000","Lunas");
INSERT INTO penjualan_telur VALUES("82","1","4","2019-01-30","70","1800","126000","126000","Lunas");
INSERT INTO penjualan_telur VALUES("83","1","6","2019-01-31","200","1850","370000","370000","Lunas");
INSERT INTO penjualan_telur VALUES("84","1","5","2019-01-31","30","1700","51000","50000","Lunas");
INSERT INTO penjualan_telur VALUES("85","1","2","2019-02-03","300","1800","540000","540000","Lunas");
INSERT INTO penjualan_telur VALUES("86","1","6","2019-02-07","210","1850","388500","388000","Lunas");
INSERT INTO penjualan_telur VALUES("87","1","1","2019-02-08","180","1700","306000","306000","Lunas");
INSERT INTO penjualan_telur VALUES("88","1","1","2019-02-08","30","1500","45000","45000","Lunas");
INSERT INTO penjualan_telur VALUES("89","1","6","2019-02-11","210","1850","388500","388000","Lunas");
INSERT INTO penjualan_telur VALUES("90","1","5","2019-02-13","30","1700","51000","50000","Lunas");
INSERT INTO penjualan_telur VALUES("91","1","4","2019-02-13","50","1700","85000","85000","Lunas");
INSERT INTO penjualan_telur VALUES("92","1","3","2019-02-13","168","1900","319200","319000","Lunas");
INSERT INTO penjualan_telur VALUES("93","1","2","2019-02-16","294","1800","529200","529000","Lunas");
INSERT INTO penjualan_telur VALUES("94","1","5","2019-02-16","5","2000","10000","10000","Lunas");
INSERT INTO penjualan_telur VALUES("95","1","1","2019-02-20","85","1700","144500","144500","Lunas");
INSERT INTO penjualan_telur VALUES("96","1","1","2019-02-20","35","1500","52500","52500","Lunas");
INSERT INTO penjualan_telur VALUES("97","1","12","2019-02-22","500","1900","950000","950000","Lunas");
INSERT INTO penjualan_telur VALUES("98","1","2","2019-02-24","240","1900","456000","456000","Lunas");
INSERT INTO penjualan_telur VALUES("99","1","6","2019-02-26","110","1850","203500","203500","Lunas");
INSERT INTO penjualan_telur VALUES("100","1","1","2019-03-01","35","1700","59500","59500","Lunas");
INSERT INTO penjualan_telur VALUES("101","1","1","2019-03-01","37","1500","55500","55500","Lunas");
INSERT INTO penjualan_telur VALUES("102","1","1","2019-03-01","280","1800","504000","504000","Lunas");
INSERT INTO penjualan_telur VALUES("103","1","7","2019-03-03","264","1900","501600","501500","Lunas");
INSERT INTO penjualan_telur VALUES("104","1","2","2019-03-07","300","1900","570000","570000","Lunas");
INSERT INTO penjualan_telur VALUES("105","1","1","2019-03-08","71","1700","120700","120500","Lunas");
INSERT INTO penjualan_telur VALUES("106","1","1","2019-03-08","18","1500","27000","27000","Lunas");
INSERT INTO penjualan_telur VALUES("107","1","1","2019-03-08","240","1800","432000","432000","Lunas");
INSERT INTO penjualan_telur VALUES("108","1","2","2019-03-10","140","1900","266000","266000","Lunas");
INSERT INTO penjualan_telur VALUES("109","1","6","2019-03-12","300","1850","555000","555000","Lunas");
INSERT INTO penjualan_telur VALUES("110","1","1","2019-09-14","45","1700","76500","76500","Lunas");
INSERT INTO penjualan_telur VALUES("111","1","1","2019-03-14","30","1500","45000","45000","Lunas");
INSERT INTO penjualan_telur VALUES("112","1","1","2019-03-14","285","1800","513000","513000","Lunas");
INSERT INTO penjualan_telur VALUES("113","1","2","2019-03-17","474","1900","900600","900000","Lunas");
INSERT INTO penjualan_telur VALUES("114","1","2","2019-03-20","450","1900","855000","855000","Lunas");
INSERT INTO penjualan_telur VALUES("115","1","1","2019-03-22","20","1500","30000","30000","Lunas");
INSERT INTO penjualan_telur VALUES("116","1","1","2019-03-22","276","1800","496800","496000","Lunas");
INSERT INTO penjualan_telur VALUES("117","1","6","2019-03-24","200","1850","370000","370000","Lunas");
INSERT INTO penjualan_telur VALUES("118","1","2","2019-03-27","538","1900","1022200","1022000","Lunas");
INSERT INTO penjualan_telur VALUES("119","1","1","2019-03-29","27","1500","40500","40500","Lunas");
INSERT INTO penjualan_telur VALUES("120","1","1","2019-03-29","327","1800","588600","588500","Lunas");
INSERT INTO penjualan_telur VALUES("121","1","3","2019-03-31","320","1925","616000","616000","Lunas");
INSERT INTO penjualan_telur VALUES("122","1","2","2019-04-03","390","1900","741000","740000","Lunas");
INSERT INTO penjualan_telur VALUES("123","1","1","2019-04-06","45","1500","67500","67500","Lunas");
INSERT INTO penjualan_telur VALUES("124","1","1","2019-04-06","395","1800","711000","711000","Lunas");
INSERT INTO penjualan_telur VALUES("125","1","6","2019-04-06","160","1850","296000","296000","Lunas");
INSERT INTO penjualan_telur VALUES("126","1","2","2019-04-10","450","1900","855000","855000","Lunas");
INSERT INTO penjualan_telur VALUES("127","1","1","2019-04-12","295","1800","531000","531000","Lunas");
INSERT INTO penjualan_telur VALUES("128","1","1","2019-04-12","40","1500","60000","60000","Lunas");
INSERT INTO penjualan_telur VALUES("129","1","7","2019-04-15","295","1900","560500","560000","Lunas");
INSERT INTO penjualan_telur VALUES("130","1","2","2019-04-17","400","1900","760000","760000","Lunas");
INSERT INTO penjualan_telur VALUES("131","1","1","2019-04-20","455","1800","819000","819000","Lunas");
INSERT INTO penjualan_telur VALUES("132","1","1","2019-04-20","55","1500","82500","82500","Lunas");
INSERT INTO penjualan_telur VALUES("133","1","6","2019-04-21","150","1800","270000","270000","Lunas");
INSERT INTO penjualan_telur VALUES("134","1","2","2019-04-23","300","1800","540000","540000","Lunas");
INSERT INTO penjualan_telur VALUES("135","1","1","2019-04-27","420","1800","756000","756000","Lunas");
INSERT INTO penjualan_telur VALUES("136","1","1","2019-04-27","29","1500","43500","43500","Lunas");
INSERT INTO penjualan_telur VALUES("137","1","2","2019-04-29","390","1800","702000","702000","Lunas");
INSERT INTO penjualan_telur VALUES("138","1","2","2019-05-03","282","1800","507600","507500","Lunas");
INSERT INTO penjualan_telur VALUES("139","1","1","2019-05-04","38","1600","60800","60500","Lunas");
INSERT INTO penjualan_telur VALUES("140","1","1","2019-05-04","32","1500","48000","48000","Lunas");
INSERT INTO penjualan_telur VALUES("141","1","1","2019-05-04","410","1800","738000","738000","Lunas");
INSERT INTO penjualan_telur VALUES("142","1","6","2019-05-05","120","1800","216000","216000","Lunas");
INSERT INTO penjualan_telur VALUES("143","1","2","2019-05-08","418","1800","752400","752500","Lunas");
INSERT INTO penjualan_telur VALUES("144","1","1","2019-05-11","325","1800","585000","585000","Lunas");
INSERT INTO penjualan_telur VALUES("145","1","1","2019-05-11","35","1500","52500","52500","Lunas");
INSERT INTO penjualan_telur VALUES("146","1","3","2019-05-14","510","1800","918000","918000","Lunas");
INSERT INTO penjualan_telur VALUES("147","1","1","2019-05-18","23","1600","36800","36500","Lunas");
INSERT INTO penjualan_telur VALUES("148","1","1","2019-05-18","32","1500","48000","48000","Lunas");
INSERT INTO penjualan_telur VALUES("149","1","1","2019-05-18","360","1800","648000","648000","Lunas");
INSERT INTO penjualan_telur VALUES("150","1","7","2019-05-20","211","1900","400900","400000","Lunas");
INSERT INTO penjualan_telur VALUES("151","1","3","2019-05-22","300","1900","570000","570000","Lunas");
INSERT INTO penjualan_telur VALUES("152","1","1","2019-05-25","341","1800","613800","613500","Lunas");
INSERT INTO penjualan_telur VALUES("153","1","1","2019-05-25","19","1500","28500","28500","Lunas");
INSERT INTO penjualan_telur VALUES("154","1","2","2019-05-29","489","1800","880200","880000","Lunas");
INSERT INTO penjualan_telur VALUES("155","1","2","2019-05-29","21","1500","31500","31500","Lunas");
INSERT INTO penjualan_telur VALUES("156","1","1","2019-06-01","377","1800","678600","678500","Lunas");
INSERT INTO penjualan_telur VALUES("157","1","1","2019-06-01","35","1500","52500","52500","Lunas");
INSERT INTO penjualan_telur VALUES("158","1","2","2019-06-04","375","1800","675000","675000","Lunas");
INSERT INTO penjualan_telur VALUES("159","1","1","2019-06-08","435","1800","783000","783000","Lunas");
INSERT INTO penjualan_telur VALUES("160","1","1","2019-06-08","45","1500","67500","67500","Lunas");
INSERT INTO penjualan_telur VALUES("161","1","5","2019-06-10","60","2000","120000","120000","Lunas");
INSERT INTO penjualan_telur VALUES("162","1","2","2019-06-12","448","1800","806400","806000","Lunas");
INSERT INTO penjualan_telur VALUES("163","1","1","2019-06-16","361","1800","649800","649500","Lunas");
INSERT INTO penjualan_telur VALUES("164","1","1","2019-06-16","57","1500","85500","85500","Lunas");
INSERT INTO penjualan_telur VALUES("165","1","2","2019-06-19","300","1800","540000","540000","Lunas");
INSERT INTO penjualan_telur VALUES("166","1","1","2019-06-22","475","1800","855000","855000","Lunas");
INSERT INTO penjualan_telur VALUES("167","1","1","2019-06-22","65","1500","97500","97500","Lunas");
INSERT INTO penjualan_telur VALUES("168","1","8","2019-06-27","500","1900","950000","950000","Lunas");
INSERT INTO penjualan_telur VALUES("169","1","5","2019-06-28","25","2000","50000","50000","Lunas");
INSERT INTO penjualan_telur VALUES("170","1","1","2019-06-29","373","1800","671400","671500","Lunas");
INSERT INTO penjualan_telur VALUES("171","1","1","2019-06-29","47","1500","70500","70500","Lunas");
INSERT INTO penjualan_telur VALUES("172","1","2","2019-07-02","367","1800","660600","660500","Lunas");
INSERT INTO penjualan_telur VALUES("173","1","2","2019-07-02","27","1500","40500","40500","Lunas");
INSERT INTO penjualan_telur VALUES("174","1","8","2019-07-03","104","1900","197600","197500","Lunas");
INSERT INTO penjualan_telur VALUES("175","1","1","2019-07-06","340","1800","612000","612000","Lunas");
INSERT INTO penjualan_telur VALUES("176","1","1","2019-07-06","50","1500","75000","75000","Lunas");
INSERT INTO penjualan_telur VALUES("177","1","8","2019-07-07","120","1900","228000","228000","Lunas");
INSERT INTO penjualan_telur VALUES("178","1","2","2019-07-10","300","1800","540000","540000","Lunas");
INSERT INTO penjualan_telur VALUES("179","1","8","2019-07-10","106","1900","201400","202000","Lunas");
INSERT INTO penjualan_telur VALUES("180","1","1","2019-07-13","379","1800","682200","682500","Lunas");
INSERT INTO penjualan_telur VALUES("181","1","1","2019-07-13","41","1500","61500","61500","Lunas");
INSERT INTO penjualan_telur VALUES("182","1","3","2019-07-16","390","1900","741000","741000","Lunas");
INSERT INTO penjualan_telur VALUES("183","1","2","2019-07-17","150","1800","270000","270000","Lunas");
INSERT INTO penjualan_telur VALUES("184","1","1","2019-07-20","368","1800","662400","662500","Lunas");
INSERT INTO penjualan_telur VALUES("185","1","1","2019-07-20","32","1500","48000","48000","Lunas");
INSERT INTO penjualan_telur VALUES("186","1","2","2019-07-23","400","1800","720000","720000","Lunas");
INSERT INTO penjualan_telur VALUES("187","1","1","2019-07-27","378","1800","680400","680500","Lunas");
INSERT INTO penjualan_telur VALUES("188","1","1","2019-07-27","42","1500","63000","63000","Lunas");
INSERT INTO penjualan_telur VALUES("189","1","2","2019-07-31","500","1800","900000","900000","Lunas");
INSERT INTO penjualan_telur VALUES("190","1","1","2019-08-02","496","1800","892800","892500","Lunas");
INSERT INTO penjualan_telur VALUES("191","1","1","2019-08-02","62","1500","93000","93000","Lunas");
INSERT INTO penjualan_telur VALUES("192","1","2","2019-08-07","300","1800","540000","540000","");
INSERT INTO penjualan_telur VALUES("193","1","1","2019-08-07","397","1800","714600","714500","Lunas");
INSERT INTO penjualan_telur VALUES("194","1","1","2019-08-07","69","1500","103500","103500","Lunas");
INSERT INTO penjualan_telur VALUES("195","1","5","2019-08-12","382","1900","725800","725500","Lunas");
INSERT INTO penjualan_telur VALUES("196","1","5","2019-08-12","30","1600","48000","48000","Lunas");
INSERT INTO penjualan_telur VALUES("197","1","2","2019-08-14","300","1800","540000","540000","Lunas");
INSERT INTO penjualan_telur VALUES("198","1","1","2019-08-16","500","1800","900000","900000","Lunas");
INSERT INTO penjualan_telur VALUES("199","1","1","2019-08-16","40","1500","60000","60000","Lunas");
INSERT INTO penjualan_telur VALUES("200","1","2","2019-08-21","300","1800","540000","540000","Lunas");
INSERT INTO penjualan_telur VALUES("201","1","1","2019-08-22","655","1800","1179000","1179000","Lunas");
INSERT INTO penjualan_telur VALUES("202","1","1","2019-08-22","63","1500","94500","94500","Lunas");
INSERT INTO penjualan_telur VALUES("203","1","4","2019-08-22","40","1600","64000","65000","Lunas");
INSERT INTO penjualan_telur VALUES("204","1","4","2019-08-24","40","1600","64000","65000","Lunas");
INSERT INTO penjualan_telur VALUES("205","1","1","2019-08-30","765","1700","1300500","1300500","Lunas");
INSERT INTO penjualan_telur VALUES("206","1","1","2019-08-30","39","1500","58500","58500","Lunas");
INSERT INTO penjualan_telur VALUES("207","1","4","2019-08-30","40","1600","64000","65000","Lunas");
INSERT INTO penjualan_telur VALUES("208","1","4","2019-09-03","40","1600","64000","64000","Lunas");
INSERT INTO penjualan_telur VALUES("209","1","2","2019-09-04","300","1600","480000","480000","Lunas");
INSERT INTO penjualan_telur VALUES("210","1","1","2019-09-06","628","1700","1067600","1067500","Lunas");
INSERT INTO penjualan_telur VALUES("211","1","1","2019-09-06","21","1500","31500","31500","Lunas");
INSERT INTO penjualan_telur VALUES("212","1","4","2019-09-07","40","1600","64000","65000","Lunas");
INSERT INTO penjualan_telur VALUES("213","1","2","2019-09-11","500","1700","850000","850000","Lunas");
INSERT INTO penjualan_telur VALUES("214","1","4","2019-09-12","60","1600","96000","116000","Lunas");
INSERT INTO penjualan_telur VALUES("215","1","1","2019-09-14","500","1700","850000","850000","Lunas");
INSERT INTO penjualan_telur VALUES("216","1","1","2019-09-14","18","1500","27000","27000","Lunas");
INSERT INTO penjualan_telur VALUES("217","1","1","2019-09-20","450","1700","765000","765000","Lunas");
INSERT INTO penjualan_telur VALUES("218","1","1","2019-09-20","12","1500","18000","18000","Lunas");
INSERT INTO penjualan_telur VALUES("219","1","1","2019-09-20","47","1600","75200","75000","Lunas");
INSERT INTO penjualan_telur VALUES("220","1","2","2019-09-24","300","1700","510000","510000","Lunas");
INSERT INTO penjualan_telur VALUES("221","1","4","2019-09-25","60","1600","96000","96000","Lunas");
INSERT INTO penjualan_telur VALUES("222","1","4","2019-09-26","60","1600","96000","96000","Lunas");
INSERT INTO penjualan_telur VALUES("223","1","1","2019-09-28","705","1700","1198500","1198500","Lunas");
INSERT INTO penjualan_telur VALUES("224","1","1","2019-09-28","47","1500","70500","70500","Lunas");
INSERT INTO penjualan_telur VALUES("225","1","1","2019-09-28","47","1600","75200","75000","Lunas");
INSERT INTO penjualan_telur VALUES("226","1","11","2019-09-29","360","1700","612000","612000","Lunas");
INSERT INTO penjualan_telur VALUES("227","1","4","2019-09-30","60","1600","96000","90000","Lunas");
INSERT INTO penjualan_telur VALUES("228","1","2","2019-10-03","500","1700","850000","850000","Lunas");
INSERT INTO penjualan_telur VALUES("229","1","4","2019-10-05","60","1600","96000","96000","Lunas");
INSERT INTO penjualan_telur VALUES("230","1","12","2019-10-06","330","1700","561000","560000","Lunas");
INSERT INTO penjualan_telur VALUES("231","1","4","2019-10-09","60","1600","96000","96000","Lunas");
INSERT INTO penjualan_telur VALUES("232","1","2","2019-10-10","499","1700","848300","850000","Lunas");
INSERT INTO penjualan_telur VALUES("233","1","1","2019-10-13","470","1700","799000","799000","Lunas");
INSERT INTO penjualan_telur VALUES("234","1","1","2019-10-13","109","1500","163500","163500","Lunas");
INSERT INTO penjualan_telur VALUES("235","1","1","2019-10-13","25","1600","40000","40000","Lunas");
INSERT INTO penjualan_telur VALUES("236","1","4","2019-10-14","30","1600","48000","50000","Lunas");
INSERT INTO penjualan_telur VALUES("237","1","11","2019-10-15","265","1700","450500","450000","Lunas");
INSERT INTO penjualan_telur VALUES("238","1","2","2019-10-17","300","1700","510000","36000","Ngedolke Endog ");
INSERT INTO penjualan_telur VALUES("239","1","11","2019-10-17","230","1700","391000","391000","Lunas");
INSERT INTO penjualan_telur VALUES("240","1","1","2019-10-19","259","1700","440300","440500","Lunas");
INSERT INTO penjualan_telur VALUES("241","1","1","2019-10-19","113","1500","169500","169500","Lunas");
INSERT INTO penjualan_telur VALUES("242","1","2","2019-10-24","500","1700","850000","850000","Lunas");
INSERT INTO penjualan_telur VALUES("243","1","1","2019-10-26","415","1700","705500","705000","");
INSERT INTO penjualan_telur VALUES("244","1","1","2019-10-26","124","1500","186000","186000","");
INSERT INTO penjualan_telur VALUES("245","1","11","2019-10-28","240","1700","408000","408000","");
INSERT INTO penjualan_telur VALUES("246","1","4","2019-10-31","60","1500","90000","90000","");
INSERT INTO penjualan_telur VALUES("247","1","2","2019-10-31","300","1700","510000","510000","");
INSERT INTO penjualan_telur VALUES("248","1","4","2019-11-04","30","1500","45000","40000","");
INSERT INTO penjualan_telur VALUES("249","1","11","2019-11-04","240","1700","408000","408000","");
INSERT INTO penjualan_telur VALUES("250","1","1","2019-11-02","331","1700","562700","562000","");
INSERT INTO penjualan_telur VALUES("251","1","1","2019-11-02","92","1500","138000","138000","");
INSERT INTO penjualan_telur VALUES("252","1","4","2019-11-07","30","1500","45000","45000","Lunas");
INSERT INTO penjualan_telur VALUES("253","1","1","2019-11-09","410","1700","697000","697000","");
INSERT INTO penjualan_telur VALUES("254","1","1","2019-11-09","56","1500","84000","83000","");
INSERT INTO penjualan_telur VALUES("255","1","11","2019-11-11","240","1700","408000","408000","");
INSERT INTO penjualan_telur VALUES("256","1","2","2019-11-11","300","1700","510000","510000","");
INSERT INTO penjualan_telur VALUES("257","1","4","2019-11-13","60","1500","90000","85000","Lunas");
INSERT INTO penjualan_telur VALUES("258","1","1","2019-11-16","335","1700","569500","569500","Lunas");
INSERT INTO penjualan_telur VALUES("259","1","1","2019-11-16","71","1500","106500","106500","Lunas");
INSERT INTO penjualan_telur VALUES("260","1","2","2019-11-18","300","1700","510000","510000","Lunas");
INSERT INTO penjualan_telur VALUES("261","1","11","2019-11-18","240","1700","408000","408000","Lunas");
INSERT INTO penjualan_telur VALUES("262","1","2","2019-11-21","300","1700","510000","510000","");
INSERT INTO penjualan_telur VALUES("263","1","1","2019-11-23","385","1700","654500","654000","");
INSERT INTO penjualan_telur VALUES("264","1","1","2019-11-23","85","1500","127500","128000","");
INSERT INTO penjualan_telur VALUES("265","1","11","2019-11-25","210","1700","357000","357000","");
INSERT INTO penjualan_telur VALUES("266","1","4","2019-11-28","60","1500","90000","90000","");
INSERT INTO penjualan_telur VALUES("267","1","1","2019-11-29","427","1700","725900","726000","");
INSERT INTO penjualan_telur VALUES("268","1","1","2019-11-29","23","1500","34500","34000","");
INSERT INTO penjualan_telur VALUES("269","1","2","2019-11-26","50","1700","85000","85000","450 btr jualne mas Eko wiro");
INSERT INTO penjualan_telur VALUES("270","1","4","2019-12-05","40","1500","60000","60000","");
INSERT INTO penjualan_telur VALUES("271","1","1","2019-12-07","228","1700","387600","405000","");
INSERT INTO penjualan_telur VALUES("272","1","1","2019-12-07","62","1500","93000","93000","");
INSERT INTO penjualan_telur VALUES("273","1","2","2019-12-08","210","1700","357000","357000","Lunas");
INSERT INTO penjualan_telur VALUES("274","1","11","2019-12-10","120","1700","204000","204000","");
INSERT INTO penjualan_telur VALUES("275","1","1","2019-12-15","68","1500","102000","102000","Lunas");
INSERT INTO penjualan_telur VALUES("276","1","1","2019-12-15","196","1700","333200","333000","Lunas");
INSERT INTO penjualan_telur VALUES("277","1","2","2019-12-15","210","1700","357000","357000","Lunas");
INSERT INTO penjualan_telur VALUES("278","1","1","2019-12-22","204","1700","346800","347000","Lunas");
INSERT INTO penjualan_telur VALUES("279","1","1","2019-12-22","36","1500","54000","54000","Lunas");
INSERT INTO penjualan_telur VALUES("280","1","11","2019-12-23","120","1700","204000","204000","Lunas");
INSERT INTO penjualan_telur VALUES("281","1","2","2019-12-24","210","1700","357000","257000","");
INSERT INTO penjualan_telur VALUES("282","1","1","2019-12-21","204","1700","346800","347000","");
INSERT INTO penjualan_telur VALUES("283","1","1","2019-12-21","84","1500","126000","126000","");
INSERT INTO penjualan_telur VALUES("284","1","11","2019-12-30","115","1700","195500","195000","");
INSERT INTO penjualan_telur VALUES("285","1","2","2020-01-01","100","1700","170000","170000","");
INSERT INTO penjualan_telur VALUES("286","1","1","2020-01-04","85","1500","127500","127500","Lunas");
INSERT INTO penjualan_telur VALUES("287","1","11","2020-01-06","150","1700","255000","255000","Lunas");
INSERT INTO penjualan_telur VALUES("288","1","2","2020-01-08","180","1700","306000","306000","Lunas");
INSERT INTO penjualan_telur VALUES("289","1","1","2020-01-11","276","1700","469200","469000","Lunas");
INSERT INTO penjualan_telur VALUES("290","1","1","2020-01-11","100","1500","150000","150000","Lunas");
INSERT INTO penjualan_telur VALUES("291","1","11","2020-01-13","115","1700","195500","195500","Lunas");
INSERT INTO penjualan_telur VALUES("292","1","2","2020-01-15","65","1700","110500","110500","Lunas");
INSERT INTO penjualan_telur VALUES("293","1","1","2020-01-19","179","1700","304300","304000","");
INSERT INTO penjualan_telur VALUES("294","1","1","2020-01-19","42","1500","63000","63000","");
INSERT INTO penjualan_telur VALUES("295","1","11","2020-01-20","112","1700","190400","190000","");
INSERT INTO penjualan_telur VALUES("296","1","1","2020-01-26","132","1800","237600","237600","");
INSERT INTO penjualan_telur VALUES("297","1","1","2020-01-26","36","1500","54000","54000","");
INSERT INTO penjualan_telur VALUES("298","1","2","2020-01-26","120","1700","204000","205000","");
INSERT INTO penjualan_telur VALUES("299","1","11","2020-01-27","235","1800","423000","423000","");
INSERT INTO penjualan_telur VALUES("300","1","1","2020-01-31","230","1800","414000","414000","");
INSERT INTO penjualan_telur VALUES("301","1","1","2020-01-31","48","1500","72000","72000","");
INSERT INTO penjualan_telur VALUES("302","1","11","2020-02-04","235","1800","423000","423000","");
INSERT INTO penjualan_telur VALUES("303","1","11","2020-02-04","5","1500","7500","7000","");
INSERT INTO penjualan_telur VALUES("304","1","1","2020-02-08","35","1500","52500","52000","");
INSERT INTO penjualan_telur VALUES("305","1","11","2020-02-10","320","1800","576000","576000","");
INSERT INTO penjualan_telur VALUES("306","1","11","2020-02-10","4","1500","6000","6000","");
INSERT INTO penjualan_telur VALUES("307","1","11","2020-02-17","354","1800","637200","637000","");
INSERT INTO penjualan_telur VALUES("308","1","1","2020-02-15","260","1800","468000","468000","");
INSERT INTO penjualan_telur VALUES("309","1","1","2020-02-15","70","1500","105000","105000","");
INSERT INTO penjualan_telur VALUES("310","1","1","2020-02-23","600","1800","1080000","1080000","");
INSERT INTO penjualan_telur VALUES("311","1","1","2020-02-23","58","1500","87000","82000","");
INSERT INTO penjualan_telur VALUES("312","1","13","2020-02-26","25","1800","45000","45000","Lunas");
INSERT INTO penjualan_telur VALUES("313","1","1","2020-03-01","679","1800","1222200","1212000","kembalikan kelebihan minggu lalu 10 rb");
INSERT INTO penjualan_telur VALUES("314","1","1","2020-03-01","116","1500","174000","174000","");
INSERT INTO penjualan_telur VALUES("315","1","3","2020-03-04","450","1900","855000","855000","");
INSERT INTO penjualan_telur VALUES("316","1","13","2020-03-06","100","1800","180000","180000","");
INSERT INTO penjualan_telur VALUES("317","1","1","2020-03-08","486","1800","874800","875000","Lunas");
INSERT INTO penjualan_telur VALUES("318","1","1","2020-03-08","58","1500","87000","87000","Lunas");



DROP TABLE produksi;

CREATE TABLE `produksi` (
  `id_produksi` int(11) NOT NULL AUTO_INCREMENT,
  `kandang` varchar(50) NOT NULL,
  `tgl_masuk_kandang` date NOT NULL,
  `total_produksi` int(11) DEFAULT NULL,
  `rata_produksi` int(11) DEFAULT NULL,
  `keterangan` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_produksi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO produksi VALUES("2","Kandang Kidul","2019-01-10","438","49","100 ekor, mati 5 ekor");
INSERT INTO produksi VALUES("3","Kandang Lor (Periode 2)","2020-01-16","2276","49","119 Ekor, mati 1 ekor");



DROP TABLE profit;

CREATE TABLE `profit` (
  `id_profit` int(11) NOT NULL AUTO_INCREMENT,
  `total_modalOut` int(11) DEFAULT NULL,
  `total_PenjualanTelur` int(11) DEFAULT NULL,
  `Keuntungan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profit`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO profit VALUES("1","121772500","107536600","-14235900");



DROP TABLE user;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `hak_akses` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin","0");



