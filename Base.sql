create database multi;
use multi;

create table contenu(
    id int auto_increment PRIMARY key,
    contenu VARCHAR(200),
    langue VARCHAR(200),
    culture VARCHAR(200)
);

insert into contenu VALUES (null,'Bonjour je suis une fille très gentille','fr','FR');
insert into contenu VALUES (null,'Hallo, ich bin ein sehr nettes Mädchen','de','DE');
insert into contenu VALUES (null,'Nǐ hǎo, wǒ shì yīgè fēicháng hǎo de nǚhái','zh', 'CHS');
