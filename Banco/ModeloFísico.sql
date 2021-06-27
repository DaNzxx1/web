DROP SCHEMA IF EXISTS themax;
CREATE SCHEMA IF NOT EXISTS themax DEFAULT CHARACTER SET utf8;
USE themax;
CREATE TABLE FUNCIONARIOS
(
    ID_FUN                   INT         NOT NULL AUTO_INCREMENT,
    NOME_FUN                 VARCHAR(50) NOT NULL,
    CPF_FUN                  VARCHAR(14) NOT NULL,
    RG_FUN                   VARCHAR(12) NOT NULL,
    EMAIL_FUN                VARCHAR(50) NOT NULL,
    DATA_NASCIMENTO_FUN      DATE        NOT NULL,
    TELEFONE_FUN             VARCHAR(15) NOT NULL,
    LOGIN_FUN                VARCHAR(45) NOT NULL,
    SENHA_FUN                VARCHAR(45) NOT NULL,
    STATUS_FUN               VARCHAR(9)  NOT NULL DEFAULT 'ativo',
    FUNCAO_FUN               VARCHAR(45) NOT NULL,
    CARTEIRA_DE_TRABALHO_FUN VARCHAR(45) NOT NULL,
    DATE_ADMISSAO_FUN        DATE        NOT NULL,
    DATA_DEMISSAO_FUN        DATE        NULL,
    UF_FUN                   VARCHAR(2)  NOT NULL,
    CEP_FUN                  VARCHAR(8)  NOT NULL,
    BAIRRO_FUN               VARCHAR(45) NOT NULL,
    ENDERECO_FUN             VARCHAR(45) NOT NULL,
    END_NUMERO_FUN           VARCHAR(4)  NOT NULL,
    DATA_ALTERACAO_FUN timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (ID_FUN)
);

CREATE TABLE VENDAS
(
    ID_VEN       INT      NOT NULL AUTO_INCREMENT,
    ID_FUN       INT      NOT NULL,
    ID_CEL       INT      NOT NULL,
    DATAHORA_VEN DATETIME NOT NULL,
    DATA_ALTERACAO_VEN timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (ID_VEN, ID_FUN, ID_CEL)
);

CREATE TABLE CELULAR
(
    ID_CEL              INT         NOT NULL AUTO_INCREMENT,
    NUMERO_SERIE_CEL    VARCHAR(11) NOT NULL,
    MARCA_CEL           VARCHAR(20) NOT NULL,
    NOME_CEL            VARCHAR(25) NOT NULL,
    PROCESSADOR_CEL     VARCHAR(75) NOT NULL,
    MEMORIA_CEL         VARCHAR(6)  NOT NULL,
    ARMAZENAMENTO_CEL   VARCHAR(10) NOT NULL,
    CAMERA_FRONTAL_CEL  VARCHAR(15) NOT NULL,
    CAMERA_TRASEIRA_CEL VARCHAR(30) NOT NULL,
    SO_CEL              VARCHAR(45) NOT NULL,
    BATERIA_CEL         VARCHAR(11) NOT NULL,
    PRECO_CEL           VARCHAR(15) NOT NULL,
    FILA_COMPRA_CEL     CHAR(1)     NOT NULL,
    FOTO_CEL            VARCHAR(15) NOT NULL,
    DATA_ALTERACAO_CEL timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (ID_CEL)
);

START TRANSACTION;
USE themax;

INSERT INTO FUNCIONARIOS 
(ID_FUN, NOME_FUN, CPF_FUN, RG_FUN, EMAIL_FUN, DATA_NASCIMENTO_FUN, TELEFONE_FUN, LOGIN_FUN, SENHA_FUN, STATUS_FUN, FUNCAO_FUN, CARTEIRA_DE_TRABALHO_FUN, DATE_ADMISSAO_FUN, DATA_DEMISSAO_FUN, UF_FUN, CEP_FUN, BAIRRO_FUN, ENDERECO_FUN, END_NUMERO_FUN)
VALUES 
(1,'Administrador do Sistema','','','','','','admin','2','inativo','administrador','','',NULL,'','','','',''),
(2,'Mateus Danilo Baptista','22535019647','388269558','mateusdanilobaptista-73@redex.com.br','1970-03-16','91989779916','mateusdani','123','ativo','estoquista','19476791732','2021-02-01',NULL,'PA','66833115','Tapanã (Icoaraci)','Alameda Tocantins','772'),
(3,'Francisco Luís da Costa','55824841837','429824671','franciscoluisdacosta-73@power.alstom.com','2000-09-09','8627739950','franciscol','123','inativo','estoquista','60390801422','2021-02-01',NULL,'PI','64028400','Santo Antônio','Rua Alison Rodrigues do Prado','471'),
(4,'Rafael Ryan Almeida','64253789307','391108438','rafaelryanalmeida-76@santosferreira.abv.br','1950-08-18','6826336004','rafaelryan','123','inativo','estoquista','25499585955','2021-02-01',NULL,'AC','69900066','Centro','Rua Marechal Deodoro','725'),
(5,'Cláudia Nina Isabella Moraes','99869847501','342477419','cclaudianinaisabellamoraes@victorseguros.com.br','1958-03-09','6325285848','cclaudiani','123','ativo','estoquista','95873845150','2021-02-01',NULL,'TO','77024758','Plano Diretor Sul','Quadra 1404 Sul Avenida NS 2','374'),
(6,'Edson Guilherme Almeida','05021194380','337582798','edsonguilhermealmeida-90@alcoa.com.br','1954-10-01','6927948251','edsonguilh','123','inativo','estoquista','06249113499','2021-02-01',NULL,'RO','76828684','Jardim Santana','Rua Itaberaí','995'),
(7,'Henry Calebe Duarte','48893936844','278823348','hhenrycalebeduarte@uol.com.bt','1954-12-14','8638893872','hhenrycale','123','inativo','estoquista','58784715620','2021-02-01',NULL,'PI','64200538','Mendonça Clark','Rua Vereador Afonso do Carmo','458'),
(8,'Cláudia Luana Oliveira','47568811140','359373264','claudialuanaoliveira_@mavex.com.br','1989-04-05','9535792297','claudialua','123','ativo','estoquista','81919803500','2021-02-01',NULL,'RR','69309230','Buritis','Avenida dos Imigrantes','710'),
(9,'Márcio Sérgio Bernardes','23434087699','258012547','marciosergiobernardes_@unimedara.com.br','1956-05-12','4937599591','marcioserg','123','inativo','estoquista','93138156093','2021-02-01',NULL,'SC','89802501','Jardim Itália','Rua Uruguai - D','405'),
(10,'Leandro César Tomás Santos','35178833872','445223819','leandrocesartomassantos@mirabeau.art.br','1989-11-20','6827430614','leandroces','123','ativo','estoquista','87707671901','2021-02-01',NULL,'AC','69909790','Vila Acre','Ramal Bom Futuro','351'),
(11,'Sebastião Igor Rodrigo Viana','51628268123','349325674','ssebastiaoigorrodrigoviana@dlh.de','1965-07-07','8237579084','ssebastiao','123','inativo','estoquista','08136549182','2021-02-01',NULL,'AL','57084083','Benedito Bentes','Rua Givaldo Carimbão','823'),
(12,'Nathan Nicolas Lorenzo Pinto','81913630463','180440482','nathannicolaslorenzopinto@icloud.com','1948-06-21','8727310561','nathannico','123','ativo','estoquista','97230059433','2021-02-01',NULL,'PE','56506905','São Miguel','Avenida Coronel Antônio Japiassu 701','724'),
(13,'Laís Heloise Caldeira','58847776120','446225666','laisheloisecaldeira-91@diclace.com.br','1972-02-02','2138303844','laishelois','123','ativo','estoquista','71462411612','2021-02-01',NULL,'RJ','24358165','Jurujuba','Forte Imbuí','958'),
(14,'Adriana Olivia da Mata','11467021245','222503543','adrianaoliviadamata-86@jglima.com.br','1978-05-19','6925521692','adrianaoli','123','inativo','estoquista','53434927466','2021-02-01',NULL,'RO','76913633','São Pedro','Rua Santa Clara','198'),
(15,'Cláudia Camila Gomes','84395608779','424159351','claudiacamilagomes@gringa360.com.br','2002-10-01','1136906634','claudiacam','123','inativo','estoquista','39259539290','2021-02-01',NULL,'SP','04571190','Cidade Monções','Rua José Muniz dos Santos','639'),
(16,'Guilherme Carlos André Jesus','41898782270','276426344','guilhermecarlosandrejesus_@oul.com.br','1982-11-18','8437872819','guilhermec','123','ativo','estoquista','04681598975','2021-02-01',NULL,'RN','59035262','Quintas','2ª Vila Ramos','875'),
(17,'Fabiana Louise da Rosa','75536010638','384642172','fabianalouisedarosa_@vieiradarocha.adv.br','1965-08-05','6537922515','fabianalou','123','inativo','estoquista','79972701030','2021-02-01',NULL,'MT','78149168','Novo Mundo','Rua Dinamarca','741'),
(18,'Sophia Flávia Ana Porto','45729211139','454838529','ssophiaflaviaanaporto@vianetfone.com.br','1985-07-25','8429175201','ssophiafla','123','inativo','estoquista','49171918757','2021-02-01',NULL,'RN','59078050','Capim Macio','Rua dos Manacás','953'),
(19,'Nelson Fernando Souza','19817001962','305666678','nelsonfernandosouza@tce.am.gov.br','1963-08-25','8436538985','nelsonfern','123','inativo','estoquista','75108986243','2021-02-01',NULL,'RN','59129748','Lagoa Azul','Rua São José','646'),
(20,'Andreia Maya Rebeca Gomes','11005541817','506692966','andreiamayarebecagomes@sandvik.com','1959-12-06','4525996419','andreiamay','123','inativo','estoquista','83289354539','2021-02-01',NULL,'PR','85856690','Jardim São Luiz','Rua Austrália','159'),
(21,'André Anthony Lima','06174794377','215015915','andreanthonylima@fundamentos.com.br','2002-10-15','2138234424','andreantho','123','inativo','estoquista','96264890366','2021-02-01',NULL,'RJ','20765310','Inhaúma','Rua Laudelino Nogueira','136'),
(22,'Victor José Pedro Henrique Drumond','33126520308','208086638','vvictorjosepedro@trnsprtdrtrnsdl.com.br','1998-08-08','8436574257','vvictorjos','123','inativo','estoquista','59232368120','2021-02-01',NULL,'RN','59611140','Santo Antônio','Rua José Damião','152'),
(23,'Guilherme Martin Freitas','31556775385','116195587','gguilhermemartinfreitas@vgl.com.br','1986-07-13','9535061328','gguilherme','123','inativo','estoquista','68827008081','2021-02-01',NULL,'RR','69316498','Senador Hélio Campos','Rua Maria Martins Vieira','982'),
(24,'Alexandre Thomas Augusto Viana','07929706591','238046084','alexandrethomasaugustoviana-84@power.alston.com','1969-04-01','9235956402','alexandret','123','inativo','estoquista','08692957141','2021-02-01',NULL,'AM','69087144','Tancredo Neves','Rua Pedras Mineiras','429'),
(25,'Camila Louise Beatriz Ribeiro','82866431944','466337061','camilalouisebeatrizribeiro_@inforgel.com','1970-02-05','9525348102','camilaloui','123','inativo','estoquista','83129146555','2021-02-01',NULL,'RR','69307715','Caçari','Rua Rio Juruá','402'),
(26,'Iago Filipe Paulo Dias','20547172907','454404037','iiagofilipepaulodias@regler.com.br','1954-04-23','9125156360','iiagofilip','123','ativo','estoquista','23317093761','2021-02-01',NULL,'PA','66120650','Sacramenta','Passagem Bons Irmãos','909'),
(27,'Sérgio André Silva','07665113753','207379993','sergioandresilva-70@aguabr.com.br','1981-08-08','8525963126','sergioandr','123','inativo','estoquista','76952627787','2021-02-01',NULL,'CE','60531040','Conjunto Ceará','Rua 418','641'),
(28,'Laís Isadora Amanda Sales','56318480234','139045958','laisisadoraamandasales_@ctfmgacc.org.br','1997-09-25','8628916275','laisisador','123','ativo','estoquista','49910270026','2021-02-01',NULL,'PI','64027109','Promorar','Avenida Monsenhor Chaves','950'),
(29,'Vitor Francisco Ryan Mendes','25288220492','318521398','vitorfranciscoryanmendes@fcfar.unesp.br','1966-10-09','9236563927','vitorfranc','123','inativo','estoquista','29550489833','2021-02-01',NULL,'AM','69050418','Parque 10 de Novembro','Rua Maysa','706'),
(30,'Enrico Calebe Murilo Santos','05772264958','294079245','enricocalebemurilosantos-83@stilomovelaria.com.br','2003-01-13','8426326127','enricocale','123','inativo','estoquista','94394516956','2021-02-01',NULL,'RN','59035570','Alecrim','Rua Doutor Alfredo Lira','513'),
(31,'Carlos Calebe Murilo Costa','75191886208','172662096','carloscalebemurilocosta_@technocut.com.br','1949-01-03','8827508000','carloscale','123','inativo','estoquista','75028891203','2021-02-01',NULL,'CE','63100055','Centro','Rua Desembargador Edmilson da Cruz Neves','625');

INSERT INTO VENDAS 
(ID_VEN, ID_FUN, DATAHORA_VEN, ID_CEL)
VALUES
(1,8,'2021-06-03 07:15:06',50),
(2,16,'2021-06-03 13:25:52',13),
(3,5,'2021-06-03 15:23:05',30),
(4,5,'2021-06-04 06:35:59',33),
(5,12,'2021-06-04 06:39:44',34),
(6,26,'2021-06-04 12:09:40',15),
(7,2,'2021-06-07 09:52:53',37),
(8,2,'2021-06-07 11:14:53',2),
(9,28,'2021-06-07 17:02:08',3),
(10,5,'2021-06-08 08:31:30',18),
(11,16,'2021-06-08 15:22:19',39),
(12,26,'2021-06-09 10:01:24',14),
(13,16,'2021-06-09 12:42:44',45),
(14,5,'2021-06-09 13:15:20',42),
(15,13,'2021-06-10 07:38:07',48),
(16,2,'2021-06-10 07:39:58',35),
(17,26,'2021-06-11 06:32:24',16),
(18,28,'2021-06-11 07:16:26',47),
(19,10,'2021-06-11 08:06:40',36),
(20,13,'2021-06-11 10:18:44',41),
(21,16,'2021-06-11 11:18:44',40),
(22,13,'2021-06-11 12:27:39',31),
(23,28,'2021-06-14 13:55:57',49),
(24,10,'2021-06-14 18:06:40',1),
(25,5,'2021-06-15 08:01:03',9),
(26,16,'2021-06-15 12:21:15',46),
(27,8,'2021-06-16 08:02:15',28),
(28,5,'2021-06-16 13:18:49',32),
(29,28,'2021-06-18 13:13:41',5),
(30,10,'2021-06-21 16:21:02',22);

INSERT INTO celular
(ID_CEL, NUMERO_SERIE_CEL, MARCA_CEL, NOME_CEL, PROCESSADOR_CEL, MEMORIA_CEL, ARMAZENAMENTO_CEL, CAMERA_FRONTAL_CEL, CAMERA_TRASEIRA_CEL, SO_CEL, BATERIA_CEL, PRECO_CEL, FILA_COMPRA_CEL, FOTO_CEL)
VALUES 
(1,'U9YMR25XJQ0','Xiaomi','Redmi 9T','4x 2.0 GHz Kryo 260 Gold + 4x 1.8 GHz Kryo 260 Silver','4 GB','128 GB','8 Mp F 2.05','48 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','6000 mAh','R$ 1100','V',''),
(2,'GMTQGPC948N','Xiaomi','Poco M3','4x 2.0 GHz Kryo 260 Gold + 4x 1.8 GHz Kryo 260 Silver','4 GB','128 GB','8 Mp F 2.05','48 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','6000 mAh','R$ 1091','V',''),
(3,'5XJP8AXQ6HP','LG','K22','1.3 GHz Quad Core','2 GB','32 GB','5 Mp','13 Mp + 2 Mp','Android 10','3000 mAh','R$ 579','V',''),
(4,'TT8MPUW7K3K','Asus','Zenfone Shot Plus','1.8 GHz 8 Core','4 GB','64 GB','8 Mp F 2','12 Mp + 5 Mp + 8 Mp','Android 9 Pie','4000 mAh','R$ 929','N',''),
(5,'5KQLMQFL5A8','Asus','ZenFone Max Plus (M2)','1.8 GHz 8 Core','3 GB','32 GB','8 Mp','12 Mp + 5 Mp','Android 8.1 Oreo','4000 mAh','R$ 836','V',''),
(6,'EP6ECMAK3U5','Samsung','Galaxy A02s','1.8 GHz 8 Core','3 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp + 2 Mp','Android 10 Samsung One UI 2.5','5000 mAh','R$ 746','N',''),
(7,'18KMTIYNSSY','Xiaomi','Redmi Note 9 4G','4x 2.0 GHz Kryo 260 Gold + 4x 1.8 GHz Kryo 260 Silver','4 GB','128 GB','8 Mp F 2','48 Mp + 8 Mp + 2 Mp','Android 10 MIUI 12','6000 mAh','R$ 1199','N',''),
(8,'94AP9MKAKPQ','Asus','ZenFone Max Shot','1.8 GHz 8 Core','3 GB','32 GB','8 Mp F 2','12 Mp + 5 Mp + 8 Mp','Android 9 Pie','4000 mAh','R$ 929','N',''),
(9,'GTTTU4NFZED','Samsung','Galaxy A7 2017','1.9 GHz 8 Core','3 GB','32 GB','16 Mp','16 Mp','Android 8.0 Samsung Experience 9.0 Oreo','3600 mAh','R$ 899','N',''),
(10,'ARYIFB2Z02S','Xiaomi','Redmi 9','2x 2.0 GHz Cortex-A75 + 6x 1.8 GHz Cortex-A55','3 GB','32 GB','8 Mp F 2','13 Mp + 8 Mp + 5 Mp + 2 Mp','Android 10 MIUI 12','5020 mAh','R$ 843','N',''),
(11,'1ISDSTN9AUS','Xiaomi','Redmi Note 8','4x 2.0 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','4 GB','64 GB','13 Mp F 2','48 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','4000 mAh','R$ 1213','N',''),
(12,'TFDOSJEYMEF','Multilaser','G Pro','4x 1.6 Ghz Cortex-A55 + 4x 1.2 GHz Cortex A-55','2 GB','32 GB','5 Mp','13 Mp + 2 Mp','Android 9 Pie','4000 mAh','R$ 619','N',''),
(13,'BNLDGA38TTG','Motorola','Moto E7 Plus','4x 1.8 GHz Kryo 240 + 4x 1.6 GHz Kryo 240','4 GB','64 GB','8 Mp F 2.2','48 Mp + 2 Mp','Android 10','5000 mAh','R$ 899','V',''),
(14,'DX0XBZYWHH2','Xiaomi','Redmi Note 8 Pro','2x 2.05 GHz Cortex A76 + 6x 2.0 GHz Cortex A55','6 GB','128 GB','20 Mp F 2','64 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10 MIUI 11','4500 mAh','R$ 1419','V',''),
(15,'LWKU0985E9J','Apple','iPhone 5S','1.3 GHz Dual Core','1 GB','64 GB','1.2 Mp','8 Mp','iOS 12','1570 mAh','R$ 752','V',''),
(16,'QCPR6NBPUED','LG','K22 Plus','1.3 GHz Quad Core','3 GB','64 GB','5 Mp','13 Mp + 2 Mp','Android 10','3000 mAh','R$ 699','V',''),
(17,'K2E9P1HXTSJ','Samsung','Galaxy A30','2x 1.8 GHz Cortex-A73 + 6x 1.6 GHz Cortex-A53','4 GB','64 GB','16 Mp F 2','16 Mp + 5 Mp','Android 10 Samsung One UI 2.0','4000 mAh','R$ 1099','N',''),
(18,'4DA4B68BFPE','Motorola','Moto G8 Power','4x 2.0 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','4 GB','64 GB','16 Mp F 2','16 Mp + 2 Mp + 8 Mp + 8 Mp','Android 10','5000 mAh','R$ 1272','V',''),
(19,'W7AA8PUDT56','LG','K61','4x 2.3 GHz Cortex-A53 + 4x 1.8 GHz Cortex-A53','4 GB','128 GB','16 Mp F 2','48 Mp + 8 Mp + 2 Mp + 5 Mp','Android 10 LG UX 9.0','4000 mAh','R$ 1118','N',''),
(20,'Z5LQC9AUJ5Z','Xiaomi','Redmi Note 9','2x Cortex A75 2GHz + 6x Cortex A55 1.8GHz','3 GB','64 GB','13 Mp F 2.25','48 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10 MIUI 11','5020 mAh','R$ 1022','N',''),
(21,'KZ1GY2MD78B','Motorola','Moto G9 Play','4x 2.0 GHz Kryo 260 Gold + 4x 1.8 GHz Kryo 260 Silver','4 GB','64 GB','8 Mp F 2.2','48 Mp + 2 Mp + 2 Mp','Android 10','5000 mAh','R$ 1019','N',''),
(22,'79AMTD7P9WK','Asus','ZenFone Max Pro (M2)','4x 2.2 GHz Kyro 260 + 4x 1.84 GHz Kyro 260','4 GB','64 GB','13 Mp F 2','12 Mp + 5 Mp','Android 8.1 Oreo','5000 mAh','R$ 1099','V',''),
(23,'LCMKC8T8Y4X','Motorola','Moto E7','4x 2.0 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','2 GB','32 GB','5 Mp','48 Mp + 2 Mp','Android 10','4000 mAh','R$ 748','N',''),
(24,'OBKHNOEMPCL','Samsung','Galaxy Xcover Pro','4x 2.3 GHz Cortex-A73 + 4x 1.7 GHz Cortex-A53','4 GB','64 GB','13 Mp','25 Mp + 8 Mp','Android 10 Samsung One UI 2.0','4020 mAh','R$ 1449','N',''),
(25,'PP6TMLT8X5B','Xiaomi','Redmi 9A','2 GHz 8 Core','2 GB','32 GB','5 Mp F 2.2','13 Mp','Android 10 MIUI 11','5000 mAh','R$ 729','N',''),
(26,'9GD80BWUZBX','Xiaomi','Redmi Note 7','4x 2.2 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','3 GB','32 GB','13 Mp F 2','48 Mp + 5 Mp','Android 10 MIUI 12','4000 mAh','R$ 1348','N',''),
(27,'AJAOON5Q0K6','Xiaomi','Redmi 5 Plus','2 GHz 8 Core','3 GB','32 GB','5 Mp','12 Mp','Android 8.1 MIUI 10 Oreo','4000 mAh','R$ 1049','N',''),
(28,'W5I8OHUJIUP','Motorola','Moto E7 Power','4x 2.0 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','2 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp','Android 10','5000 mAh','R$ 711','V',''),
(29,'MTGNG2DHODR','Motorola','Moto G6 Plus','4x 2.2 GHz Cortex-A53 + 4x 1.8 GHz Cortex A53','4 GB','64 GB','8 Mp F 2.2','12 Mp + 5 Mp','Android 9 Pie','3200 mAh','R$ 1164','N',''),
(30,'PS64NMTZJGT','Xiaomi','Mi 10T','1x 2.84 GHz Cortex A77 + 3x 2.42 GHz Cortex A77 + 4x 1.8 GHz Cortex A53','8 GB','128 GB','20 Mp F 2.2','64 Mp + 13 Mp + 5 Mp','Android 10 MIUI 12','5000 mAh','R$ 2810','V',''),
(31,'RF800H8LYK5','Motorola','Moto E6s','4x 2 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','2 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp','Android 9 Pie','3000 mAh','R$ 698','V',''),
(32,'5ZCX2JB62RO','Xiaomi','Redmi 8A','4x 1.95 GHz Cortex-A53 + 4x 1.45 GHz Cortex-A53','2 GB','32 GB','8 Mp F 2','12 Mp','Android 10 MIUI 11','5000 mAh','R$ 828','V',''),
(33,'YL2B6QLCA4H','Xiaomi','Poco X3 NFC','2x 2.3 GHz Kryo 470 Gold + 6x 1.8 GHz Kryo 470 Silver','6 GB','128 GB','20 Mp F 2.2','64 Mp + 13 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','5160 mAh','R$ 1499','V',''),
(34,'8T8GRK52G0Q','Motorola','Moto G9 Plus','2x 2.2 GHz Kryo 470 Gold + 6x 1.8 GHz Kryo 470 Silver','4 GB','128 GB','16 Mp F 2','64 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10','5000 mAh','R$ 1580','V',''),
(35,'IMJSOFK6T9I','Sony','Xperia XA Ultra','2 GHz 8 Core','3 GB','16 GB','16 Mp','21.5 Mp','Android 6.0.1 Marshmallow','2700 mAh','R$ 839','V',''),
(36,'LBE3MG3GO20','Samsung','Galaxy A02','1.5 GHz Quad Core','3 GB','32 GB','5 Mp F 2','13 Mp + 2 Mp','Android 10 Samsung One UI 2.0','5000 mAh','R$ 559','V',''),
(37,'N9HY4A4TRD7','Asus','ZenFone Max Pro (M1)','Octa-core 1.8 GHz Kryo 260 + 1.6 GHz Kryo 260','3 GB','32 GB','8 Mp F 2.2','13 Mp + 5 Mp','Android 8.0 Oreo','5000 mAh','R$ 1149','V',''),
(38,'1WM76JQ6R37','Samsung','Galaxy A10s','4x 2 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','2 GB','32 GB','8 Mp F 2','13 Mp + 2 Mp','Android 10 Samsung One UI 2.0','4000 mAh','R$ 700','N',''),
(39,'WWK3PQIIHWH','LG','K41S','4x 2 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','3 GB','32 GB','8 Mp F 2','13 Mp + 5 Mp + 2 Mp + 2 Mp','Android 10','4000 mAh','R$ 738','V',''),
(40,'PKCPFX7ITZ4','Xiaomi','Redmi 7A','4x 1.95 GHz Cortex-A53 + 4x 1.45 GHz Cortex A53','2 GB','16 GB','5 Mp','13 Mp','Android 9 MIUI 10 Pie','4000 mAh','R$ 820','V',''),
(41,'7W1GDXY6UKS','Xiaomi','Redmi Note 9T','2x 2.4 GHz Cortex-A76 + 6x 2.0 GHz Cortex-A55','4 GB','128 GB','13 Mp F 2.25','48 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','5000 mAh','R$ 1389','V',''),
(42,'5E8MMHT9O9J','Xiaomi','Redmi Note 8T','4x 2.0 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','3 GB','32 GB','13 Mp F 2','48 Mp + 8 Mp + 2 Mp + 2 Mp','Android 9 MIUI 10 Pie','4000 mAh','R$ 1449','V',''),
(43,'RPPENYZDSWZ','Motorola','Moto G8 Plus','4x 2.0 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','4 GB','64 GB','25 Mp F 2','48 Mp + 16 Mp + 5 Mp','Android 10','4000 mAh','R$ 1549','N',''),
(44,'J237PZS0IO5','Xiaomi','Redmi 9C','2.3 GHz 8 Core','2 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp + 2 Mp','Android 10 MIUI 11','5000 mAh','R$ 844','N',''),
(45,'H1HOLG4LQL1','LG','Q6','1.4 GHz 8 Core','3 GB','32 GB','5 Mp','13 Mp','Android 7.1.1 LG UX 6.0 UI Nougat','3000 mAh','R$ 999','V',''),
(46,'6PFUEID08NR','LG','Velvet','4x 2.8 GHz Kryo 385 + 4x 1.7 GHz Kryo 385','6 GB','128 GB','16 Mp F 1.9','48 Mp + 8 Mp + 5 Mp','Android 10 LG UX 9.0','4300 mAh','R$ 2448','V',''),
(47,'1K8P3ZYHT59','Motorola','One Fusion','2x 2.2 GHz Kryo 360 + 6x 1.7 GHz Kryo 360','4 GB','64 GB','8 Mp F 2','48 Mp + 8 Mp + 5 Mp + 2 Mp','Android 10','5000 mAh','R$ 1299','V',''),
(48,'1KK8EWOPNL5','Xiaomi','Redmi Note 9 Pro','2x 2.3 GHz Kryo 465 Gold + 6x 1.8 GHz Kryo 465 Silver','6 GB','128 GB','16 Mp F 2.48','64 Mp + 8 Mp + 5 Mp + 2 Mp','Android 10 MIUI 11','5020 mAh','R$ 1652','V',''),
(49,'S691AZZNHPY','Samsung','Galaxy A01','4x 1.95 GHz Cortex-A53 + 4x 1.45 GHz Cortex-A53','2 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp','Android 10 Samsung One UI 2.0','3000 mAh','R$ 593','V',''),
(50,'F6R4U0NQZF1','Lenovo','Vibe K6','4x 1.4 GHz Cortex-A53 + 4x 1.1 GHz Cortex-A53','2 GB','32 GB','8 Mp','13 Mp','Android 6.0 Marshmallow','3000 mAh','R$ 585','V','');

COMMIT;