USE RaiosVitais;


CREATE TABLE Admin (
  idAdmin INT IDENTITY(1,1) PRIMARY KEY,
  Login VARCHAR(30) NOT NULL UNIQUE,
  Senha VARCHAR(20) NOT NULL
);


CREATE TABLE Galeria (
  idGaleria INT IDENTITY(1,1) PRIMARY KEY,
  Nome VARCHAR(50) NOT NULL
);


CREATE TABLE Artigo (
  idArtigo INT IDENTITY(1,1) PRIMARY KEY,
  idGaleria INT NOT NULL,
  Imagem VARBINARY(MAX) NOT NULL,
  Descricao VARCHAR(MAX) NOT NULL,
  FOREIGN KEY (idGaleria) REFERENCES Galeria(idGaleria)
);


CREATE TABLE Cliente (
  idCliente INT IDENTITY(1,1) PRIMARY KEY,
  Nome VARCHAR(100) NOT NULL,
  CPF VARCHAR(15) NOT NULL UNIQUE,
  RG VARCHAR(15) NOT NULL UNIQUE,
  Telefone VARCHAR(20) NOT NULL,
  DataNascimento DATE NOT NULL
);


CREATE TABLE Servico (
  idServico INT IDENTITY(1,1) PRIMARY KEY,
  Tipo VARCHAR(50) NOT NULL UNIQUE
);


CREATE TABLE HistoricoConsulta (
  idHistoricoConsulta INT IDENTITY(1,1) PRIMARY KEY,
  idCliente INT NOT NULL,
  QuantidadeConsulta INT NOT NULL DEFAULT 1,
  PrimeiraConsulta DATE NULL,
  UltimaConsulta DATE NULL,
  FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente)
);


CREATE TABLE Consulta (
  idConsulta INT IDENTITY(1,1) PRIMARY KEY,
  idCliente INT NOT NULL,
  idServico INT NOT NULL,
  idHistoricoConsulta INT NOT NULL,
  Procedimento VARCHAR(45) NOT NULL,
  Responsavel VARCHAR(45) NOT NULL,
  Data DATE NOT NULL,
  Horario TIME NOT NULL,
  FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente),
  FOREIGN KEY (idServico) REFERENCES Servico(idServico),
  FOREIGN KEY (idHistoricoConsulta) REFERENCES HistoricoConsulta(idHistoricoConsulta)
);


CREATE TABLE Endereco (
  idEndereco INT IDENTITY(1,1) PRIMARY KEY,
  idCliente INT NOT NULL,
  CEP VARCHAR(10) NOT NULL,
  Estado CHAR(2) NOT NULL,
  Cidade VARCHAR(45) NOT NULL,
  Bairro VARCHAR(45) NOT NULL,
  Rua VARCHAR(45) NOT NULL,
  FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente)
);

CREATE TABLE Estetica (
  idEstetica INT IDENTITY(1,1) PRIMARY KEY,
  idServico INT NOT NULL,
  Tipo VARCHAR(45) NOT NULL,
  Valor DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (idServico) REFERENCES Servico(idServico)
);


CREATE TABLE InformacoesAdicionais (
  idInformacoesAdicionais INT IDENTITY(1,1) PRIMARY KEY,
  idCliente INT NOT NULL,
  EstadoCivil VARCHAR(20) NULL,
  Profissao VARCHAR(45) NULL,
  Indicacao VARCHAR(45) NULL,
  Filhos INT NULL,
  Gestacao INT NULL,
  Fumo BIT NULL,
  Alcool BIT NULL,
  TratamentoRecente VARCHAR(45) NULL,
  UsaMedicamento BIT NULL,
  Medicamento VARCHAR(45) NULL,
  EsporteGinastica BIT NULL,
  TempoPraticado VARCHAR(45) NULL,
  DietaMedica BIT NULL,
  Autodieta VARCHAR(100) NULL,
  CicloMenstrual VARCHAR(45) NULL,
  Anticoncepcional VARCHAR(45) NULL,
  Varizes BIT NULL,
  CirurgiaRecente VARCHAR(45) NULL,
  FuncIntestino VARCHAR(45) NULL,
  CosmeticosUso VARCHAR(45) NULL,
  UltimaConsultaMedica DATE NULL,
  FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente)
);


CREATE TABLE Massagem (
  idMassagem INT IDENTITY(1,1) PRIMARY KEY,
  idServico INT NOT NULL,
  Tipo VARCHAR(45) NOT NULL,
  Valor DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (idServico) REFERENCES Servico(idServico)
);


CREATE TABLE ProblemasClinicos (
  idProblemasClinicos INT IDENTITY(1,1) PRIMARY KEY,
  idCliente INT NOT NULL,
  Dentarios BIT NOT NULL DEFAULT 0,
  Cardiacos BIT NOT NULL DEFAULT 0,
  Osseos BIT NOT NULL DEFAULT 0,
  Ginecologicos BIT NOT NULL DEFAULT 0,
  Renais BIT NOT NULL DEFAULT 0,
  Neurologicos BIT NOT NULL DEFAULT 0,
  Gestante BIT NOT NULL DEFAULT 0,
  Hipertensao BIT NOT NULL DEFAULT 0,
  FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente)
);


-- Inserts
INSERT INTO Cliente (Nome, CPF, RG, Telefone, DataNascimento) VALUES 
('Debora Santos', '330.023.488-30', '42.084.550-1', '11 94898-0112', '1983-02-10'),
('Fulza da Silva Sule', '373.101.998-12', '30.503.711-0', '11 28654-237', '1979-11-01'),
('Luciana dos Anjos Moura Futamata', '370.100.838-86', '42.113.889-0', '11 97693-7135', '1987-12-16'),
('Cleusa André Pulgaci', '763.862.958-20', '50.678.68', '11 99177-0423', '1949-05-29'),
('Valéria Cardoso da Silva', '246.037.828-96', '25.868.027-1', '11 2079-6508', '1976-09-07'),
('Ivanice Silva de M. Avelandre', '338.551.018-09', '46.735.419', '11 2286-1960', '1983-12-12'),
('Genilma Batista Ferreira', '256.338.306-69', '30.471.264', '11 98071-5715', '1976-01-16');


INSERT INTO Endereco (idCliente, CEP, Estado, Cidade, Bairro, Rua) VALUES
(1, '08245-460', 'SP', 'São Paulo', 'Parada XV de Novembro', 'Rua Ibiajara'),
(2, '08410-010', 'SP', 'São Paulo', 'Vila Princesa Isabel', 'Travessa Seringais'),
(3, '08246-105', 'SP', 'São Paulo', 'Parada XV de Novembro', 'Rua Juçaral'),
(4, '08215-330', 'SP', 'São Paulo', 'Itaquera', 'Rua Miguel Langone'),
(5, '08420-000', 'SP', 'São Paulo', 'Jardim Helena', 'Estrada Itaquera-Guaianazes'),
(6, '08227-090', 'SP', 'São Paulo', 'Vila Santa Teresinha', 'Rua Tenório das Chagas'),
(7, '08246-000', 'SP', 'São Paulo', 'Parada XV de Novembro', 'Rua Renzo Baldini');

