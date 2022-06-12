CREATE TABLE admins (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255),
    apellidos VARCHAR(255),
    email VARCHAR(255),
    hashed_password VARCHAR(255),
    PRIMARY KEY (id)
    )
ENGINE = InnoDB;