CREATE DATABASE fisio;

USE fisio;

CREATE TABLE usuario(
codigo INT UNSIGNED AUTO_INCREMENT NOT NULL,
nome VARCHAR(60) NOT NULL,
email VARCHAR(100) NOT NULL,
senha VARCHAR(20) NOT NULL,
PRIMARY KEY(codigo)
);

CREATE TABLE questionario(
codigoQuestionario INT UNSIGNED AUTO_INCREMENT NOT NULL,
numPerguntas INT UNSIGNED NOT NULL,
PRIMARY KEY(codigoQuestionario)
);

CREATE TABLE pontuacao(
cod_Questionario INT UNSIGNED NOT NULL,
cod_Usuario INT UNSIGNED NOT NULL,
pontos INT UNSIGNED NOT NULL,
FOREIGN KEY(cod_Questionario) REFERENCES questionario(codigoQuestionario),
FOREIGN KEY(cod_Usuario) REFERENCES usuario(codigo)
);

CREATE TABLE pergunta(
codigoPergunta INT UNSIGNED AUTO_INCREMENT NOT NULL,
descricao VARCHAR(60) NOT NULL,
cod_Questionario INT UNSIGNED NOT NULL,
PRIMARY KEY(codigoPergunta),
FOREIGN KEY(cod_Questionario) REFERENCES questionario(codigoQuestionario)
);

CREATE TABLE respostaCerta(
codigoCerto INT UNSIGNED AUTO_INCREMENT NOT NULL,
descricao VARCHAR(60) NOT NULL,
cod_pergunta INT UNSIGNED NOT NULL,
PRIMARY KEY(codigoCerto),
FOREIGN KEY (cod_pergunta) REFERENCES pergunta(codigoPergunta)
);

CREATE TABLE respostaErrada(
codigoErrado INT UNSIGNED AUTO_INCREMENT NOT NULL,
descricao VARCHAR(60) NOT NULL,
cod_pergunta INT UNSIGNED NOT NULL,
PRIMARY KEY(codigoErrado),
FOREIGN KEY (cod_pergunta) REFERENCES pergunta(codigoPergunta)
);

CREATE TABLE telefone(
codigo INT UNSIGNED AUTO_INCREMENT NOT NULL,
numero VARCHAR(15) NOT NULL,
cod_usuario INT UNSIGNED NOT NULL,
PRIMARY KEY(codigo),
FOREIGN KEY(cod_usuario) REFERENCES usuario(codigo)
);

INSERT INTO `questionario`(`codigoQuestionario`, `numPerguntas`) VALUES ('',0);