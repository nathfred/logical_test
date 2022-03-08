use nomer2;

SELECT MAX(nilai) FROM tb_mahasiswa a
JOIN tb_mahasiswa_nilai b ON a.mhs_id = b.mhs_id
JOIN tb_matakuliah c ON b.mk_id = c.mk_id
WHERE c.mk_kode='MK303';