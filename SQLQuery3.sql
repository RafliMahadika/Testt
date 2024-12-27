use Ujian;
CREATE TABLE tabel_mahasiswaa (NIM char(30) DEFAULT NULL,Nama char(50) NOT NULL,
Alamat char(250) NOT NULL,
  Jurusan char(50) NOT NULL,Umur char(30) NOT NULL
)


INSERT INTO tabel_mahasiswaa (NIM, Nama, Alamat, Jurusan, Umur) VALUES
('123456', 'John', 'Jl Merdeka No 1', 'Teknik Informatika', '21'),
('234567', 'Alice', 'Jl Gatot Subroto', 'Sistem Informasi', '23'),
('345678', 'Bob', 'Jl Sudirman No 5', 'Teknik Informatika', '20'),
('456789', 'Cindy', 'Jl Pahlawan No 2', 'Manajemen', '22'),
('567890', 'David', 'Jl Dipnegoro No 3', 'Teknik Elektro', '25'),
('678901', 'Emily', 'Jl Cendrawasih No 4', 'Manajemen', '24'),
('789012', 'Frank', 'Jl Ahmad Yani No 6', 'Teknik Informatika', '19');


update tabel_mahasiswaa set Nama = 'John', Alamat = 'Jl Raya No 5' where NIM = '123456';

select *from tabel_mahasiswaa

select Nama,Jurusan,Dosen_Pengajar  from tabel_mahasiswaa,tabel_mata_kuliahh  where Jurusan = 'Teknik Informatika' 

select Nama from tabel_mahasiswaa order by Umur Desc

select tabel_mahasiswaa.NIM, tabel_mahasiswaa.Nama,tabel_mahasiswaa.Jurusan, tabel_mata_kuliahh.Dosen_Pengajar from tabel_mahasiswaa 
cross join tabel_mata_kuliahh where Jurusan = 'Teknik Informatika' and tabel_mata_kuliahh.Nim = '123456' 

select Nama, Mata_Kuliah ,Nilai from tabel_mahasiswaa cross join tabel_mata_kuliahh where Nilai > '70'

