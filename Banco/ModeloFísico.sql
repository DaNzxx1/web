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
    STATUS_FUN               VARCHAR(9)  NOT NULL,
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

CREATE TABLE VENDAS
(
    ID_VEN       INT      NOT NULL,
    DATAHORA_VEN DATETIME NOT NULL,
    ID_FUN       INT      NOT NULL,
    PRIMARY KEY (ID_VEN, ID_FUN)
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
(ID_FUN, NOME_FUN, CPF_FUN, RG_FUN, EMAIL_FUN, DATA_NASCIMENTO_FUN, TELEFONE_FUN, LOGIN_FUN, SENHA_FUN, STATUS_FUN, FUNCAO_FUN, CARTEIRA_DE_TRABALHO_FUN, DATE_ADMISSAO_FUN, DATA_DEMISSAO_FUN, UF_FUN, CEP_FUN, BAIRRO_FUN, ENDERECO_FUN, END_NUMERO_FUN)
VALUES 
(1, 'Administrador do Sistema', '', '', '', '0000-00-00', '', 'admin', '2', 'ativo', 'administrador', '', '0000-00-00', NULL, '', '', '', '', ''),
(2,'Mateus Danilo Baptista','22535019647','388269558','mateusdanilobaptista-73@redex.com.br','1970-03-16','91989779916','mateusdani','123','ativo','estoquista','19476791732','2021-02-01',NULL,'PA','66833115','Tapanã (Icoaraci)','Alameda Tocantins','772'),
(3,'Francisco Luís da Costa','55824841837','429824671','franciscoluisdacosta-73@power.alstom.com','2000-09-09','8627739950','franciscol','123','nao ativo','estoquista','60390801422','2021-02-01',NULL,'PI','64028400','Santo Antônio','Rua Alison Rodrigues do Prado','471'),
(4,'Rafael Ryan Almeida','64253789307','391108438','rafaelryanalmeida-76@santosferreira.abv.br','1950-08-18','6826336004','rafaelryan','123','nao ativo','estoquista','25499585955','2021-02-01',NULL,'AC','69900066','Centro','Rua Marechal Deodoro','725'),
(5,'Cláudia Nina Isabella Moraes','99869847501','342477419','cclaudianinaisabellamoraes@victorseguros.com.br','1958-03-09','6325285848','cclaudiani','123','ativo','estoquista','95873845150','2021-02-01',NULL,'TO','77024758','Plano Diretor Sul','Quadra 1404 Sul Avenida NS 2','374'),
(6,'Edson Guilherme Almeida','05021194380','337582798','edsonguilhermealmeida-90@alcoa.com.br','1954-10-01','6927948251','edsonguilh','123','nao ativo','estoquista','06249113499','2021-02-01',NULL,'RO','76828684','Jardim Santana','Rua Itaberaí','995'),
(7,'Henry Calebe Duarte','48893936844','278823348','hhenrycalebeduarte@uol.com.bt','1954-12-14','8638893872','hhenrycale','123','nao ativo','estoquista','58784715620','2021-02-01',NULL,'PI','64200538','Mendonça Clark','Rua Vereador Afonso do Carmo','458'),
(8,'Cláudia Luana Oliveira','47568811140','359373264','claudialuanaoliveira_@mavex.com.br','1989-04-05','9535792297','claudialua','123','ativo','estoquista','81919803500','2021-02-01',NULL,'RR','69309230','Buritis','Avenida dos Imigrantes','710'),
(9,'Márcio Sérgio Bernardes','23434087699','258012547','marciosergiobernardes_@unimedara.com.br','1956-05-12','4937599591','marcioserg','123','nao ativo','estoquista','93138156093','2021-02-01',NULL,'SC','89802501','Jardim Itália','Rua Uruguai - D','405'),
(10,'Leandro César Tomás Santos','35178833872','445223819','leandrocesartomassantos..leandrocesartomassantos@mirabeau.art.br','1989-11-20','6827430614','leandroces','123','ativo','estoquista','87707671901','2021-02-01',NULL,'AC','69909790','Vila Acre','Ramal Bom Futuro','351'),
(11,'Sebastião Igor Rodrigo Viana','51628268123','349325674','ssebastiaoigorrodrigoviana@dlh.de','1965-07-07','8237579084','ssebastiao','123','nao ativo','estoquista','08136549182','2021-02-01',NULL,'AL','57084083','Benedito Bentes','Rua Givaldo Carimbão','823'),
(12,'Nathan Nicolas Lorenzo Pinto','81913630463','180440482','nathannicolaslorenzopinto..nathannicolaslorenzopinto@icloud.com','1948-06-21','8727310561','nathannico','123','ativo','estoquista','97230059433','2021-02-01',NULL,'PE','56506905','São Miguel','Avenida Coronel Antônio Japiassu 701','724'),
(13,'Laís Heloise Caldeira','58847776120','446225666','laisheloisecaldeira-91@diclace.com.br','1972-02-02','2138303844','laishelois','123','ativo','estoquista','71462411612','2021-02-01',NULL,'RJ','24358165','Jurujuba','Forte Imbuí','958'),
(14,'Adriana Olivia da Mata','11467021245','222503543','adrianaoliviadamata-86@jglima.com.br','1978-05-19','6925521692','adrianaoli','123','nao ativo','estoquista','53434927466','2021-02-01',NULL,'RO','76913633','São Pedro','Rua Santa Clara','198'),
(15,'Cláudia Camila Gomes','84395608779','424159351','claudiacamilagomes__claudiacamilagomes@gringa360.com.br','2002-10-01','1136906634','claudiacam','123','nao ativo','estoquista','39259539290','2021-02-01',NULL,'SP','04571190','Cidade Monções','Rua José Muniz dos Santos','639'),
(16,'Guilherme Carlos André Jesus','41898782270','276426344','guilhermecarlosandrejesus_@oul.com.br','1982-11-18','8437872819','guilhermec','123','ativo','estoquista','04681598975','2021-02-01',NULL,'RN','59035262','Quintas','2ª Vila Ramos','875'),
(17,'Fabiana Louise da Rosa','75536010638','384642172','fabianalouisedarosa_@vieiradarocha.adv.br','1965-08-05','6537922515','fabianalou','123','nao ativo','estoquista','79972701030','2021-02-01',NULL,'MT','78149168','Novo Mundo','Rua Dinamarca','741'),
(18,'Sophia Flávia Ana Porto','45729211139','454838529','ssophiaflaviaanaporto@vianetfone.com.br','1985-07-25','8429175201','ssophiafla','123','nao ativo','estoquista','49171918757','2021-02-01',NULL,'RN','59078050','Capim Macio','Rua dos Manacás','953'),
(19,'Nelson Fernando Souza','19817001962','305666678','nelsonfernandosouza..nelsonfernandosouza@tce.am.gov.br','1963-08-25','8436538985','nelsonfern','123','nao ativo','estoquista','75108986243','2021-02-01',NULL,'RN','59129748','Lagoa Azul','Rua São José','646'),
(20,'Andreia Maya Rebeca Gomes','11005541817','506692966','andreiamayarebecagomes..andreiamayarebecagomes@sandvik.com','1959-12-06','4525996419','andreiamay','123','nao ativo','estoquista','83289354539','2021-02-01',NULL,'PR','85856690','Jardim São Luiz','Rua Austrália','159'),
(21,'André Anthony Lima','06174794377','215015915','andreanthonylima__andreanthonylima@fundamentos.com.br','2002-10-15','2138234424','andreantho','123','nao ativo','estoquista','96264890366','2021-02-01',NULL,'RJ','20765310','Inhaúma','Rua Laudelino Nogueira','136'),
(22,'Victor José Pedro Henrique Drumond','33126520308','208086638','vvictorjosepedrohenriquedrumond@transportadoratransdel.com.br','1998-08-08','8436574257','vvictorjos','123','nao ativo','estoquista','59232368120','2021-02-01',NULL,'RN','59611140','Santo Antônio','Rua José Damião','152'),
(23,'Guilherme Martin Freitas','31556775385','116195587','gguilhermemartinfreitas@vgl.com.br','1986-07-13','9535061328','gguilherme','123','nao ativo','estoquista','68827008081','2021-02-01',NULL,'RR','69316498','Senador Hélio Campos','Rua Maria Martins Vieira','982'),
(24,'Alexandre Thomas Augusto Viana','07929706591','238046084','alexandrethomasaugustoviana-84@power.alston.com','1969-04-01','9235956402','alexandret','123','nao ativo','estoquista','08692957141','2021-02-01',NULL,'AM','69087144','Tancredo Neves','Rua Pedras Mineiras','429'),
(25,'Camila Louise Beatriz Ribeiro','82866431944','466337061','camilalouisebeatrizribeiro_@inforgel.com','1970-02-05','9525348102','camilaloui','123','nao ativo','estoquista','83129146555','2021-02-01',NULL,'RR','69307715','Caçari','Rua Rio Juruá','402'),
(26,'Iago Filipe Paulo Dias','20547172907','454404037','iiagofilipepaulodias@regler.com.br','1954-04-23','9125156360','iiagofilip','123','ativo','estoquista','23317093761','2021-02-01',NULL,'PA','66120650','Sacramenta','Passagem Bons Irmãos','909'),
(27,'Sérgio André Silva','07665113753','207379993','sergioandresilva-70@aguabr.com.br','1981-08-08','8525963126','sergioandr','123','nao ativo','estoquista','76952627787','2021-02-01',NULL,'CE','60531040','Conjunto Ceará','Rua 418','641'),
(28,'Laís Isadora Amanda Sales','56318480234','139045958','laisisadoraamandasales_@ctfmgacc.org.br','1997-09-25','8628916275','laisisador','123','ativo','estoquista','49910270026','2021-02-01',NULL,'PI','64027109','Promorar','Avenida Monsenhor Chaves','950'),
(29,'Vitor Francisco Ryan Mendes','25288220492','318521398','vitorfranciscoryanmendes__vitorfranciscoryanmendes@fcfar.unesp.br','1966-10-09','9236563927','vitorfranc','123','nao ativo','estoquista','29550489833','2021-02-01',NULL,'AM','69050418','Parque 10 de Novembro','Rua Maysa','706'),
(30,'Enrico Calebe Murilo Santos','05772264958','294079245','enricocalebemurilosantos-83@stilomovelaria.com.br','2003-01-13','8426326127','enricocale','123','nao ativo','estoquista','94394516956','2021-02-01',NULL,'RN','59035570','Alecrim','Rua Doutor Alfredo Lira','513'),
(31,'Carlos Calebe Murilo Costa','75191886208','172662096','carloscalebemurilocosta_@technocut.com.br','1949-01-03','8827508000','carloscale','123','nao ativo','estoquista','75028891203','2021-02-01',NULL,'CE','63100055','Centro','Rua Desembargador Edmilson da Cruz Neves','625');

INSERT INTO VENDAS 
(ID_VEN, DATAHORA_VEN, ID_FUN)
VALUES
(1,'2021-06-03 07:15:06',8),
(2,'2021-06-03 13:25:52',16),
(3,'2021-06-03 15:23:05',5),
(4,'2021-06-04 06:35:59',5),
(5,'2021-06-04 06:39:44',12),
(6,'2021-06-04 12:09:40',26),
(7,'2021-06-07 09:52:53',2),
(8,'2021-06-07 11:14:53',2),
(9,'2021-06-07 17:02:08',28),
(10,'2021-06-08 08:31:30',5),
(11,'2021-06-08 15:22:19',16),
(12,'2021-06-09 10:01:24',26),
(13,'2021-06-09 12:42:44',16),
(14,'2021-06-09 13:15:20',5),
(15,'2021-06-10 07:38:07',13),
(16,'2021-06-10 07:39:58',2),
(17,'2021-06-11 06:32:24',26),
(18,'2021-06-11 07:16:26',28),
(19,'2021-06-11 08:06:40',10),
(20,'2021-06-11 10:18:44',13),
(21,'2021-06-11 11:18:44',16),
(22,'2021-06-11 12:27:39',13),
(23,'2021-06-14 13:55:57',28),
(24,'2021-06-14 18:06:40',10),
(25,'2021-06-15 08:01:03',5),
(26,'2021-06-15 12:21:15',16),
(27,'2021-06-16 08:02:15',8),
(28,'2021-06-16 13:18:49',5),
(29,'2021-06-18 13:13:41',28),
(30,'2021-06-21 16:21:02',10);

COMMIT;