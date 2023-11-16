create view lap_barang as select tb_inventaris.*, sum(detail_pinjam.jumlah) as total
from tb_inventaris
left join detail_pinjam
on tb_inventaris.id_inv=detail_pinjam.id_inv
group by detail_pinjam.id_inv
order by total DESC


create view lap_pegawai as select tb_pegawai.*, sum(tb_peminjaman.id_pegawai) as total
from tb_pegawai
left join tb_peminjaman
on tb_pegawai.id_pegawai=tb_peminjaman.id_pegawai
group by tb_peminjaman.id_pegawai
order by total ASC