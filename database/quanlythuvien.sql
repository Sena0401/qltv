-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2023 lúc 01:51 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlythuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `manv` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `manv`, `password`) VALUES
('admin', 'thien413', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` varchar(10) NOT NULL,
  `tendg` varchar(30) NOT NULL,
  `diachidg` varchar(100) NOT NULL,
  `sothe` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `tendg`, `diachidg`, `sothe`) VALUES
('dg01', 'Trần Minh Thiện', '107/68/45 Hoàng Văn Thu,P.An Cư, Ninh Kiều, Cần Thơ', 1234567891),
('dg03', 'Huyền Di', 'Xã 1, Ấp 2, Huyện 3, Tỉnh 4', 1234567890);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muontra`
--

CREATE TABLE `muontra` (
  `mamt` varchar(10) NOT NULL,
  `madg` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaymuon` date NOT NULL,
  `ngaytra` date NOT NULL,
  `masach` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `trangthai` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `muontra`
--

INSERT INTO `muontra` (`mamt`, `madg`, `ngaymuon`, `ngaytra`, `masach`, `trangthai`) VALUES
('mt03', 'dg03', '2023-05-29', '2023-06-02', 'sach01', 'Đã Trả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` varchar(10) NOT NULL,
  `hotennv` varchar(30) NOT NULL,
  `ngaysinhnv` date NOT NULL,
  `sdtnv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hotennv`, `ngaysinhnv`, `sdtnv`) VALUES
('a123', 'Trần Văn A', '2003-02-01', 12345678),
('thien413', 'Trần Minh Thiện', '2003-01-04', 354437919);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `manxb` varchar(10) NOT NULL,
  `tennxb` varchar(50) NOT NULL,
  `diachinxb` varchar(100) NOT NULL,
  `emailnxb` varchar(50) NOT NULL,
  `infonxb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`manxb`, `tennxb`, `diachinxb`, `emailnxb`, `infonxb`) VALUES
('nxb01', 'Nhà xuất bản Kim Đồng', 'Số 55 Quang Trung, Nguyễn Du, Hai Bà Trưng, Hà Nội', 'cskh_online@nxbkimdong.com.vn', 'Nhà xuất bản Kim Đồng là nhà xuất bản chuyên về sách văn học thiếu nhi của Việt Nam được thành lập v'),
('nxb02', 'Dorling Kindersley Ltd', 'Luân Đôn, Vương Quốc Anh', 'ecustomerservice@randomhouse.com', 'Dorling Kindersley Limited là một công ty xuất bản đa quốc gia của Anh chuyên về sách tham khảo có m');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `masach` varchar(10) NOT NULL,
  `tensach` varchar(50) NOT NULL,
  `matheloai` varchar(10) NOT NULL,
  `tacgia` varchar(50) NOT NULL,
  `manxb` varchar(10) NOT NULL,
  `namxuatban` year(4) NOT NULL,
  `hientrang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`masach`, `tensach`, `matheloai`, `tacgia`, `manxb`, `namxuatban`, `hientrang`) VALUES
('sach01', 'How Psychology Works', 'kinhte', 'Jo Hemmings,DK', 'nxb02', '2020', 'Mới'),
('sach03', 'Harry Potter và hòn đá phù thủy', 'tthuyet', ' J.K.Rowling', 'nxb01', '2017', 'Mới'),
('sach04', 'Harry Potter và phòng chứa bí mật', 'tthuyet', ' J.K.Rowling', 'nxb01', '2017', 'Mới'),
('sach05', 'Harry Potter và tên tù ngục Azkaban', 'tthuyet', ' J.K.Rowling', 'nxb01', '2017', 'Mới'),
('sach06', 'Harry Potter và Hội Phượng Hoàng', 'tthuyet', ' J.K.Rowling', 'nxb01', '2017', 'Mới'),
('sach07', 'Harry Potter và hoàng tử lai', 'tthuyet', ' J.K.Rowling', 'nxb01', '2017', 'Mới'),
('sach08', 'Harry Potter và bảo bối tử thần', 'tthuyet', ' J.K.Rowling', 'nxb01', '2017', 'Mới'),
('sach09', 'Harry Potter và đứa trẻ bị nguyền rủa', 'tthuyet', ' J.K.Rowling', 'nxb01', '2017', 'Mới'),
('sach10', 'To Kill a Mockingbird(Giết Con Chim Nhại)', 'tthuyet', 'Nelle Harper', 'nxb02', '2019', 'Cũ'),
('sach11', 'Chiến binh cầu vồng', 'vhhd', 'Andrea Hirata', 'nxb01', '2016', 'Cũ'),
('sach12', 'The Alchemist( Nhà Giả Kim)', 'tly', 'Paulo Coelho', 'nxb01', '1988', 'Cũ'),
('sach13', 'Chúng Ta Quyết Định Như Thế Nào?', 'tamly', ' Jonah Lehrer', 'nxb02', '2016', 'Mới'),
('sach14', 'Phi Lý Một Cách Hợp Lý', 'tamly', ' Dan Ariely', 'nxb02', '2016', 'Cũ'),
('sach15', 'Nghệ Thuật Tư Duy Rành Mạch ', 'tamly', 'Rolf Dobelli', 'nxb02', '2022', 'Mới'),
('sach16', 'Thiên Tài Bên Trái, Kẻ Điên Bên Phải', 'tamly', 'Cao Minh', 'nxb01', '1999', 'Mới'),
('sach17', 'Thám Tử Lừng Danh Conan 100', 'ttranh', 'Gosho Aoyama', 'nxb01', '2022', 'Mới'),
('sach18', 'Bảy viên ngọc rồng', 'ttranh', 'Toriyama Akira', 'nxb01', '2017', 'Cũ'),
('sach19', 'Doraemon', 'ttranh', 'Fujiko Fujio', 'nxb01', '2019', 'Mới'),
('sach20', 'Dế Mèn phiêu lưu kí', 'vhtn', 'Tô Hoài', 'nxb01', '2017', 'Cũ'),
('sach21', 'Đất rừng phương Nam', 'vhtn', 'Đoàn Giỏi', 'nxb01', '2006', 'Cũ'),
('sach22', 'Kính Vạn Hoa', 'vhtn', 'Nguyễn Nhật Ánh', 'nxb01', '2017', 'Cũ'),
('sach23', 'Truyện Kiều', 'th', 'Nguyễn Du', 'nxb01', '2002', 'Cũ'),
('sach24', 'Nhật kí trong tù', 'th', 'Hồ Chí Minh', 'nxb01', '1998', 'Mới'),
('sach25', 'Từ ấy', 'th', 'Tố Hữu', 'nxb01', '1999', 'Mới'),
('sach26', 'Thơ Thơ', 'th', 'Xuân Diệu', 'nxb01', '1938', 'Cũ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `matheloai` varchar(10) NOT NULL,
  `tentheloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`matheloai`, `tentheloai`) VALUES
('kinhte', 'Kinh Tế'),
('tamly', 'Tâm Lý'),
('th', 'thơ'),
('ttham', 'Trinh Thám'),
('tthuyet', 'Tiểu Thuyết'),
('ttranh', 'Truyện Tranh'),
('vhhd', 'văn học hiện đại'),
('vhtn', 'văn học thiếu nhi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`manv`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);

--
-- Chỉ mục cho bảng `muontra`
--
ALTER TABLE `muontra`
  ADD PRIMARY KEY (`mamt`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Chỉ mục cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`manxb`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`masach`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`matheloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
