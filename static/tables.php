CREATE TABLE `user`
(
    idUser INTEGER PRIMARY KEY NOT NULL,
    name VARCHAR(225) NOT NULL,
    email VARCHAR(225) NOT NULL,
    password PASSWORD NOT NULL,
    status VARCHAR(225) NOT NULL
)

CREATE TABLE `produit`
(
    idProduct INTEGER PRIMARY KEY NOT NULL,
    name VARCHAR(225) NOT NULL,
    prix INT NULL,
    quantite INT NULL,
    type VARCHAR(225) NOT NULL
)

CREATE TABLE `commande`
(
    idCommande INTEGER PRIMARY KEY NOT NULL,
    date DATE NOT NULL,
    idUser INT NOT NULL,
    idProduit INT NOT NULL,
    delivrer VARCHAR(225) NOT NULL,
    FOREIGN KEY (idUser) REFERENCES user(idUser),
    FOREIGN KEY (idProduct) REFERENCES product(idProduit)
)

CREATE TABLE `shop`
(
    idShop INTEGER PRIMARY KEY NOT NULL,
    idUser INT NOT NULL,
    idProduit INT NOT NULL,
    FOREIGN KEY (idUser) REFERENCES user(idUser),
    FOREIGN KEY (idProduct) REFERENCES product(idProduit)
)