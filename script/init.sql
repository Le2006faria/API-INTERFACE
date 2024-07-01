-- sql/create_table.sql

CREATE TABLE pessoas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT(3) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    genero VARCHAR(50) NOT NULL
);

INSERT INTO pessoas (nome, idade, sexo, genero) VALUES
    ('Ana Silva', 25, 'Feminino', 'Mulher'),
    ('João Oliveira', 30, 'Masculino', 'Homem'),
    ('Maria Santos', 28, 'Feminino', 'Mulher'),
    ('Pedro Almeida', 35, 'Masculino', 'Homem'),
    ('Juliana Lima', 27, 'Feminino', 'Mulher'),
    ('Lucas Pereira', 32, 'Masculino', 'Homem'),
    ('Carla Souza', 29, 'Feminino', 'Mulher'),
    ('Marcos Ferreira', 31, 'Masculino', 'Homem'),
    ('Larissa Rodrigues', 26, 'Feminino', 'Mulher'),
    ('Rafael Gomes', 33, 'Masculino', 'Homem');

SELECT * FROM pessoas;