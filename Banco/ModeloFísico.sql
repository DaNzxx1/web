DROP SCHEMA IF EXISTS themax;
CREATE SCHEMA IF NOT EXISTS themax DEFAULT CHARACTER SET utf8;
USE themax;
CREATE TABLE FUNCIONARIOS
(
    ID_FUN                   INT         NOT NULL AUTO_INCREMENT,
    NOME_FUN                 VARCHAR(50) NOT NULL,
    CPF_FUN                  VARCHAR(14) NOT NULL,
    RG_FUN                   VARCHAR(12) NOT NULL,
    EMAIL_FUN                VARCHAR(35) NOT NULL,
    DATA_NASCIMENTO_FUN      DATE        NOT NULL,
    TELEFONE_FUN             VARCHAR(15) NOT NULL,
    LOGIN_FUN                VARCHAR(45) NOT NULL,
    SENHA_FUN                VARCHAR(45) NOT NULL,
    FUNCAO_FUN               VARCHAR(45) NOT NULL,
    CARTEIRA_DE_TRABALHO_FUN VARCHAR(45) NOT NULL,
    DATE_ADMISSAO_FUN        DATE        NOT NULL,
    DATA_DEMISSAO_FUN        DATE        NULL,
    UF_FUN                   VARCHAR(2)  NOT NULL,
    CEP_FUN                  VARCHAR(8)  NOT NULL,
    BAIRRO_FUN               VARCHAR(45) NOT NULL,
    ENDERECO_FUN             VARCHAR(45) NOT NULL,
    END_NUMERO_FUN           VARCHAR(4)  NOT NULL,
    PRIMARY KEY (ID_FUN)
);

CREATE TABLE USUARIO
(
    ID_USUARIO      INT         NOT NULL AUTO_INCREMENT,
    TIPO            VARCHAR(45) NOT NULL,
    NOME            VARCHAR(50) NOT NULL,
    CPF             VARCHAR(14) NOT NULL,
    RG              VARCHAR(12) NOT NULL,
    EMAIL           VARCHAR(35) NOT NULL,
    DATA_NASCIMENTO DATE        NOT NULL,
    TELEFONE        VARCHAR(15) NOT NULL,
    LOGIN           VARCHAR(45) NOT NULL,
    SENHA           VARCHAR(45) NOT NULL,
    UF              VARCHAR(2)  NOT NULL,
    CEP             VARCHAR(8)  NOT NULL,
    BAIRRO          VARCHAR(45) NOT NULL,
    ENDERECO        VARCHAR(45) NOT NULL,
    END_NUMERO      VARCHAR(4)  NOT NULL,
    PRIMARY KEY (ID_USUARIO)
);

CREATE TABLE VENDAS
(
    ID_VEN       INT      NOT NULL,
    DATAHORA_VEN DATETIME NOT NULL,
    ID_USUARIO   INT      NOT NULL,
    ID_FUN       INT      NOT NULL,
    PRIMARY KEY (ID_VEN, ID_USUARIO, ID_FUN)
);

CREATE TABLE CELULAR
(
    ID_CEL              INT         NOT NULL AUTO_INCREMENT,
    NUMERO_SERIE_CEL    VARCHAR(20) NOT NULL,
    MARCA_CEL           VARCHAR(20) NOT NULL,
    NOME_CEL            VARCHAR(20) NOT NULL,
    PROCESSADOR_CEL     VARCHAR(20) NOT NULL,
    MEMORIA_CEL         VARCHAR(10) NOT NULL,
    ARMAZENAMENTO_CEL   VARCHAR(10) NOT NULL,
    CAMERA_FRONTAL_CEL  VARCHAR(10) NOT NULL,
    CAMERA_TRASEIRA_CEL VARCHAR(10) NOT NULL,
    SO_CEL              VARCHAR(20) NOT NULL,
    BATERIA_CEL         VARCHAR(10) NOT NULL,
    PRECO_CEL           VARCHAR(15) NOT NULL,
    FILA_COMPRA_CEL     CHAR(1)     NOT NULL,
    ID_VEN              INT         NOT NULL,
    PRIMARY KEY (ID_CEL, ID_VEN)
);

START TRANSACTION;
USE themax;
INSERT INTO FUNCIONARIOS 
(ID_FUN, NOME_FUN, CPF_FUN, RG_FUN, EMAIL_FUN, DATA_NASCIMENTO_FUN, TELEFONE_FUN, LOGIN_FUN, SENHA_FUN, FUNCAO_FUN, CARTEIRA_DE_TRABALHO_FUN, DATE_ADMISSAO_FUN, DATA_DEMISSAO_FUN, UF_FUN, CEP_FUN, BAIRRO_FUN, ENDERECO_FUN, END_NUMERO_FUN) 
VALUES 
('1', 'Administrador do Sistema', '', '', '', '0000-00-00', '', 'admin', '2', '', '', '0000-00-00', NULL, '', '', '', '', '') 