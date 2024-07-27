/*
SQLyog Ultimate v10.42 
MySQL - 5.7.33 : Database - db_laravel_dua
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_laravel_dua` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_laravel_dua`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_11_03_141755_create_table_siswa',1),(7,'2021_11_03_142705_create_table_guru',1),(8,'2021_11_17_032925_create_table_pelajaran',1),(9,'2022_10_27_084230_create_table_pegawai',1),(10,'2022_11_21_120934_create_table_kurikulum_reski',1),(11,'2022_11_22_034541_create_table_kelas_reski',1),(12,'2022_11_22_035306_create_table_jadwal_reski',1),(13,'2022_11_22_035349_create_table_nilai_reski',1),(14,'2022_12_13_105239_create_sessions_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('Pp9emN5JyOVaVXou2DQK8m7PJGFxpFjIEEXA7p64',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoialA1NW04SkRSVkY5RHlHUkhjdWRYWVBUVDNyU1VvU25Fa2lTMVhnbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zaXN3YS9jZXRha19zaXN3YSI7fXM6NzoiaWRfdXNlciI7aTo0O3M6NDoibmFtYSI7czo4OiJIZXJpYW50byI7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czoxMToiYWtzZXNfbGV2ZWwiO3M6NToiQWRtaW4iO30=',1671706420);

/*Table structure for table `t_guru` */

DROP TABLE IF EXISTS `t_guru`;

CREATE TABLE `t_guru` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_guru` */

/*Table structure for table `t_jadwal_reski` */

DROP TABLE IF EXISTS `t_jadwal_reski`;

CREATE TABLE `t_jadwal_reski` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_jadwal_reski` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelajaran_reski` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_reski` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_jadwal_reski` */

/*Table structure for table `t_kelas_reski` */

DROP TABLE IF EXISTS `t_kelas_reski`;

CREATE TABLE `t_kelas_reski` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_kelas_reski` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelas_reski` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai_kelas_reski` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_kelas_reski` */

/*Table structure for table `t_kurikulum_reski` */

DROP TABLE IF EXISTS `t_kurikulum_reski`;

CREATE TABLE `t_kurikulum_reski` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_kurikulum` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kurikulum` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jurusan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_kurikulum_reski` */

/*Table structure for table `t_nilai_reski` */

DROP TABLE IF EXISTS `t_nilai_reski`;

CREATE TABLE `t_nilai_reski` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_nilai_reski` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uts_reski` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_tugas_reski` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_kehadiran_reski` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uas_reski` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_nilai_reski` */

/*Table structure for table `t_pegawai` */

DROP TABLE IF EXISTS `t_pegawai`;

CREATE TABLE `t_pegawai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_pegawai` */

/*Table structure for table `t_pelajaran` */

DROP TABLE IF EXISTS `t_pelajaran`;

CREATE TABLE `t_pelajaran` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pelajaran` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelajaran` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kurikulum` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_pelajaran` */

/*Table structure for table `t_siswa` */

DROP TABLE IF EXISTS `t_siswa`;

CREATE TABLE `t_siswa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_siswa` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_siswa` */

insert  into `t_siswa`(`id`,`nis`,`nama_siswa`,`alamat`,`created_at`,`updated_at`) values (2,'101','Aguswan Dachi','Pekanbaru',NULL,NULL),(3,'102','Rusdianto','Medan',NULL,NULL),(4,'103','Jusniartun','Duri',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `kode_rahasia` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`nama`,`email`,`username`,`password`,`akses_level`,`kode_rahasia`,`gambar`,`tanggal`) values (4,'Herianto','herianto.sy@gmail.com','admin','d033e22ae348aeb5660fc2140aec35850c4da997','Admin',NULL,'testimonials-1.jpg','2022-12-22 17:53:08'),(14,'Yella','yella@gmail.com','eflita','6968b2bddc05f9302dba8ecd1e699b7dc934b9fc','Admin',NULL,NULL,'2021-07-04 07:34:17');

/*Table structure for table `users_cad` */

DROP TABLE IF EXISTS `users_cad`;

CREATE TABLE `users_cad` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users_cad` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
