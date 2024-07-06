-- sql/create_table.sql

CREATE TABLE pessoas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT(3) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL
);

INSERT INTO pessoas (nome, idade, sexo, email) VALUES
    ('Ana Silva', 25, 'Feminino', 'ana.sliva@gmail.com'),
    ('João Oliveira', 30, 'Masculino', 'joao.oliveira@gmail.com'),
    ('Maria Santos', 28, 'Feminino', 'maria.santos@gmail.com'),
    ('Pedro Santos', 35, 'Masculino', 'pedro.santos@gmail.com'),
    ('Juliana Lima', 27, 'Feminino', 'juliana.silva@gmail.com'),
    ('Lucas Pereira', 32, 'Masculino', 'lucas.pereira@gmail.com'),
    ('Carla Souza', 29, 'Feminino', 'carla.souza@gmail.com'),
    ('Marcos Ferreira', 31, 'Masculino', 'marcos.ferreira@gmail.com'),
    ('Larissa Rodrigues', 26, 'Feminino', 'larissa.rodrigues@gmail.com'),
    ('Rafael Gomes', 33, 'Masculino', 'rafael.gomes@gmail.com');

SELECT * FROM pessoas;