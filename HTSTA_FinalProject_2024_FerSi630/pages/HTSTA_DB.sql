create or replace database HTSTA_DB;
use HTSTA_DB;

create table Translations(
    keyValue varchar(100) primary key,
    english varchar(1000),
    portuguese varchar(1000)
);

create table Products(
    productID int auto_increment primary key,
    productEN char(50),
    productPT varchar(50),
    descriptionEN varchar(250),
    descriptionPT varchar(250),
    price varchar(20),
    imageLink varchar(50)
);

insert into Products(productEN,productPT,price,imageLink) values
("Travel to Sicily","Viaja para a Sicília","$139.99","../images/sicily.jpg"),
("Travel to Rome","Viaja para Roma","$469.99","../images/rome.jpg"),
("Travel to Milan","Viaja para Milão","$689.99","../images/milan.jpg"),
("Travel to Bangkok","Viaja para Bangkok","$879.99","../images/bangkok.jpg"),
("Travel to Khon Kaen","Viaja para Khon Kaen","$919.99","../images/khon.jpg"),
("Travel to Ko Phi Phi","Viaja para Ko Phi Phi","$1239.99","../images/phiphi.jpg");

insert into Translations(keyValue,english,portuguese) values
("HomeBtn","Home","Início"),
("ProductBtn","Products","Produtos"),
("RegisterBtn","Register","Registrar"),
("LoginBtn","Login","Iniciar sessão"),
("LogoutBtn","Logout","Sair"),
("AdminBtn","Admin","Administrador"),
("HomeText","Welcome! In this website, you can find information about two countries and some of their highly visited places. Indulge yourself in the wonders of these countries. Refer to the navigation bar to learn more.","Bem-vindo! Neste site, você encontrará informações sobre dois países e alguns de seus lugares mais visitados. Maravilhe-se com as maravilhas desses países. Consulte a barra de navegação para saber mais."),
("Italy","Italy","Itália"),
("Thailand","Thailand","Tailândia"),
("RomeDescription","The capital of Italy, known for ancient history and remarkable archaeological sites.","A capital da Itália, famosa pela história antiga e seus sítios arqueológicos."),
("RomeTitle","Travel to Rome","Viaja para Roma"),
("RomeLink","https://en.wikipedia.org/wiki/Rome","https://pt.wikipedia.org/wiki/Roma"),
("Colosseum","Colosseum","Coliseu"),
("Pantheon","Pantheon","Panteão"),
("Museums","Vatican museums","Museus Vaticanos"),
("MilanDescription","The most luxurious and expensive place in Italy.","O lugar mais luxuoso e caro da Itália."),
("MilanTitle","Travel to Milan","Viaja para Milão"),
("MilanLink","https://en.wikipedia.org/wiki/Milan","https://pt.wikipedia.org/wiki/Milão"),
("Cathedral","Cathedral of Milan","Catedral de Milão"),
("TourGuide","Tour guide of Da Vinci's 'The Last Supper'","Guia turístico da obra 'A Última Ceia' de Da Vinci"),
("Navigali","Navigali boat trip","Passeio de barco Navigali"),
("SicilyDescription","Italy's biggest peninsula, famous for its beaches, wine, and mafia history. Some recommended places to visit include:","A maior península da Itália, famosa pelas suas praias, vinhos, e história da máfia. Alguns locais recomendados para visitar incluem:"),
("SicilyTitle","Sicily","Sicília"),
("SicilyLink","https://en.wikipedia.org/wiki/Sicily","https://pt.wikipedia.org/wiki/Sicília"),
("Palermo","Cathedral of Palermo","Catedral de Palermo"),
("Taormina","Ancient Theatre of Taormina","Teatro Antigo de Taormina"),
("RoyalPalace","Royal Palace of Palermo","Palácio Real de Palermo"),
("BangkokDescription","The capital of Thailand, known for its vibrant culture, street food, and temples.","A capital da Tailândia, conhecida pela sua cultura vibrante, comida de rua e templos."),
("BangkokTitle","Bangkok","Bangkok"),
("BangkokLink","https://en.wikipedia.org/wiki/Bangkok","https://pt.wikipedia.org/wiki/Bangkok"),
("GrandPalace","Grand Palace","Grande Palácio"),
("GiantSwing","The Giant Swing","o Balanço Gigante"),
("WatArun","Wat Arun","Wat Arun"),
("KhonKaenDescription","Known for high-quality silk and local markets.","Famosa pela seda de alta qualidade e mercados locais."),
("KhonKaenTitle","Khon Kaen","Khon Kaen"),
("KhonKaenLink","https://en.wikipedia.org/wiki/Khon_Kaen","https://pt.wikipedia.org/wiki/Khon_Kaen"),
("NationalMuseum","Khon Kaen National Museum","Museu Nacional Khon Kaen"),
("PhraNakhon","Phra Mahathat Kaen Nakhon","Phra Mahathat Kaen Nakhon"),
("TonTann","Ton Tann Market","Mercado Ton Tann"),
("KoPhiPhiDescription","Beautiful islands with limestone cliffs and turquoise waters.","Ilhas bonitas com falésias de calcário e águas turquesa."),
("KoPhiPhiTitle","Ko Phi Phi","Ko Phi Phi"),
("KoPhiPhiLink","https://en.wikipedia.org/wiki/Ko_Phi_Phi","https://pt.wikipedia.org/wiki/Ko_Phi_Phi"),
("MayaBay","Maya Bay","Baía da Maia"),
("VikingCave","Viking Cave","Gruta Viking"),
("TonsaiBay","Tonsai Bay","Baía de Tonsai"),
("LoginH1","Login to your account","Faça login no sua conta"),
("LoginLabel1","Username","Nome de usuário"),
("LoginLabel2","Password","Senha"),
("LoginLabel3","Login","Entrar"),
("LoginOut1","Please fill in all fields.","Por favor, preencha todos os campos."),
("LoginOut2","Login successful!","Login realizado com sucesso!"),
("LoginOut3","Incorrect username or password.","Nome de usuário ou senha incorretos."),
("RegisterH1","Registration form","Formulário de registro"),
("RegisterUsername","Username","Nome de usuário"),
("RegisterPassword","Password","Senha"),
("RegisterPasswordAgain","Repeat Password","Repita a senha"),
("RegisterSubmit","Register","Registrar"),
("RegisterSuccess","Registration successful!","Registro realizado com sucesso!"),
("RegisterFailMatch","Passwords do not match.","As senhas não coincidem."),
("RegisterFailExists","User already exists.","Usuário já existe."),
("RegisterFailEmpty","Please fill all fields.","Por favor, preencha todos os campos."),
("LoggedInAs","Logged in as","Conectado como"),
("Recommendations","Some recommended places to visit include:","Alguns locais recomendados para visitar incluem:");




