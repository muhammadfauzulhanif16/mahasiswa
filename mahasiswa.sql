CREATE TABLE mahasiswa (
    id INT NOT NULL,
    nama VARCHAR(255) NOT NULL,
    jenis_kelamin VARCHAR(255) NOT NULL,
    jurusan VARCHAR(255) NOT NULL,
    umur INT(2) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);