-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Jan 2023 pada 17.51
-- Versi server: 8.0.32-0ubuntu0.22.04.2
-- Versi PHP: 8.1.2-1ubuntu2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_resep-masakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `publish` date NOT NULL,
  `time` int NOT NULL,
  `porsi` int NOT NULL,
  `level` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `step` text NOT NULL,
  `komposisi` text NOT NULL,
  `catatan` text,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id`, `name`, `penulis`, `publish`, `time`, `porsi`, `level`, `deskripsi`, `step`, `komposisi`, `catatan`, `gambar`) VALUES
(1, 'Ayam Bakar Goreng', 'PunyaSaya', '2023-01-30', 30, 2, 'Mudah', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, harum. Minus molestias, aperiam asperiores ipsa tenetur obcaecati quasi at eligendi est. Praesentium nam, recusandae quos doloremque sequi obcaecati tenetur iusto, molestiae voluptatem similique, dolores molestias placeat totam hic? Delectus fugiat, laborum perferendis expedita ut architecto vel officia blanditiis soluta culpa ipsam nulla aut ex aperiam similique inventore commodi. Quaerat aliquam minima esse consequatur necessitatibus magni optio, vitae earum nesciunt. Explicabo hic vero molestiae velit cumque.', '<h6>Step 1</h6>\r\n                                <p>\r\n                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores rerum sed et earum sapiente. Qui vel accusantium dolores neque nihil aliquam blanditiis nisi, eius repudiandae possimus, voluptate eum quas? Dolores alias vel natus sapiente harum nobis, adipisci, voluptatibus pariatur molestias, nisi commodi quidem quibusdam aliquam porro dolore repudiandae obcaecati praesentium.\r\n                                </p>\r\n                                <h6>Step 2</h6>\r\n                                <p>\r\n                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores rerum sed et earum sapiente. Qui vel accusantium dolores neque nihil aliquam blanditiis nisi, eius repudiandae possimus, voluptate eum quas? Dolores alias vel natus sapiente harum nobis, adipisci, voluptatibus pariatur molestias, nisi commodi quidem quibusdam aliquam porro dolore repudiandae obcaecati praesentium.\r\n                                </p>', '<p>1. Garam</p><p>2. minyak</p><p>3. Gas</p><p>4. Bawang</p>', '<p>\r\n                            1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, nobis sunt modi magnam rerum architecto, consectetur adipisci excepturi id quasi atque. Molestias harum velit eius debitis suscipit similique facere tempora esse magnam doloremque sint facilis voluptatem a sit, pariatur mollitia? Dolor distinctio exercitationem magni alias, ipsam explicabo odio eveniet fugit?\r\n                        </p>\r\n                        <p>\r\n                            2. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, nobis sunt modi magnam rerum architecto, consectetur adipisci excepturi id quasi atque. Molestias harum velit eius debitis suscipit similique facere tempora esse magnam doloremque sint facilis voluptatem a sit, pariatur mollitia? Dolor distinctio exercitationem magni alias, ipsam explicabo odio eveniet fugit?\r\n                        </p>', 'ayam-bakar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `role`, `avatar`) VALUES
(1, 'admin', '$2y$10$jOIubQrBIwmEyhyOYCoVvOu.Xap4KgmQX1xOufWlPRB/QdaySv6MK', 'Administrator', 'admin', 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
