create or replace database HTSTA_DB
use HTSTA_DB;

create table CountryPage(
    titleEN char(50),
    titlePT char(50),

    TextEN char(50),
    TextPT char(50)
);

create table Cities(
    titleEN varchar(50),
    titlePT varchar(50),

    descriptionEN varchar(250),
    descriptionPT varchar(250),

    locationsEN varchar(100),
    locationsPT varchar(100)
);

insert into CountryPage(titleEN, titlePT, textEN, textPT) values
(   
    "Italy", 
    "Itália",
    "",
    ""
),

(   
    "",
    "",
    "Sicily",
    "Sicília"
),

(   
    "",
    "",
    "Rome",
    "Roma"
),

(   
    "",
    "",
    "Milan",
    "Milão"
);

insert into Cities(titleEN, titlePT, descriptionEN, descriptionPT, locationsEN, locationsPT) values
(   
    "Sicily",
    "Sicília",
    "Italy's biggest peninsula, famous for its beaches, wine, and mafia history. Some recommended places to visit include:",
    "A maior península da Itália, famosa pelas suas praias, vinhos, e história da máfia. Alguns locais recomendados para visitar incluem:",

    "- Cathedral of Palermo
    - Ancient Theatre of Taormina
    - Royal Palace of Palermo",

    "- Catedral de Palermo
    - Teatro Antigo de Taormina
    - Palácio Real de Palermo"
),

(   
    "Rome",
    "Roma",
    "The capital of Italy, known for ancient history and remarkable archaeological sites. Some recommended places to visit include:",
    "A capital da Itália, famosa pela história antiga e seus sítios arqueológicos. Alguns locais recomendados para visitar incluem:",

    "- Colosseum
    - Pantheon
    - Vatican museums",

    "- Coliseu
    - Panteão
    - Museus Vaticanos"
),

(
    "Milan",
    "Milão",
    "The most luxurious and expensive place in Italy. Some recommended places to visit include:",
    "O lugar mais luxuoso e caro da Itália. Alguns locais recomendados para visitar incluem:",

    "- Cathedral of Milan
    - Tour guide of Da Vinci's 'The Last Supper'
    - Navigali boat trips",

    "- Catedral de Milano
    - Guia turístico da obra 'A Última Ceia' de Da Vinci
    - Passeio de barco Navigali"
),

(

),

(

),

(

);



