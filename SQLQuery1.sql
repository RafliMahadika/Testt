use Ujian;
CREATE TABLE tabel_mata_kuliahh (ID int NOT NULL, Mata_Kuliah char(50) NOT NULL, Nim int NOT NULL, Nilai int NOT NULL, 
Dosen_Pengajar char(50) NOT NULL
);
INSERT INTO tabel_mata_kuliahh (ID, Mata_Kuliah, Nim, Nilai, Dosen_Pengajar) VALUES
('1', 'Pemograman Web', '123456', '85', 'Pak Budi'),
('2', 'Basis Data', '234567', '70', 'Ibu Ani'),
('3', 'Jaringan Komputer', '345678', '75', 'Pak Dodi'),
('4', 'Sistem Operasi', '123456','90', 'Pak Budi'),
('5', 'Manajemen Proyek', '4567890', '80', 'Ibu Desi'),
('6', 'Bahasa Inggris', '567890', '85', 'Ibu Eka'),
('7', 'Statistika', '678901', '75', 'Pak Farhan'),
('8', 'Algoritma', '789012', '65' , 'Pak Galih'),
('9', 'Pemograman Java', '123456', '95', 'Pak Budi');


select *from  tabel_mata_kuliahh