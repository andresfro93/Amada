# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.2.1                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          amadaintima.dez                                 #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database creation script                        #
# Created on:            2014-12-04 21:53                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Tables                                                                 #
# ---------------------------------------------------------------------- #

# ---------------------------------------------------------------------- #
# Add table "productos"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `productos` (
    `cod_producto` BIGINT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(60),
    `referencia` VARCHAR(40),
    `valor` INTEGER,
    `cantidad` BIGINT NOT NULL,
    `cod_tipo` INTEGER NOT NULL,
    CONSTRAINT `PK_productos` PRIMARY KEY (`cod_producto`, `cod_tipo`)
);

# ---------------------------------------------------------------------- #
# Add table "tallas"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `tallas` (
    `cod_talla` INTEGER NOT NULL AUTO_INCREMENT,
    `talla` VARCHAR(40),
    CONSTRAINT `PK_tallas` PRIMARY KEY (`cod_talla`)
);

# ---------------------------------------------------------------------- #
# Add table "colores"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `colores` (
    `cod_color` INTEGER NOT NULL AUTO_INCREMENT,
    `color` VARCHAR(40),
    CONSTRAINT `PK_colores` PRIMARY KEY (`cod_color`)
);

# ---------------------------------------------------------------------- #
# Add table "pedidos"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `pedidos` (
    `cod_pedido` BIGINT NOT NULL AUTO_INCREMENT,
    `fecha` DATE,
    `cantida_productos` INTEGER,
    `estado` BOOL NOT NULL,
    `cod_descuentos` BIGINT NOT NULL,
    `cod_cliente` BIGINT NOT NULL,
    CONSTRAINT `PK_pedidos` PRIMARY KEY (`cod_pedido`, `cod_descuentos`, `cod_cliente`)
);

# ---------------------------------------------------------------------- #
# Add table "compras"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `compras` (
    `cod_compra` BIGINT NOT NULL AUTO_INCREMENT,
    `cod_pedido` BIGINT NOT NULL,
    `cod_producto` BIGINT NOT NULL,
    `cod_descuentos` BIGINT NOT NULL,
    CONSTRAINT `PK_compras` PRIMARY KEY (`cod_compra`, `cod_pedido`, `cod_producto`)
);

# ---------------------------------------------------------------------- #
# Add table "codigos_descuentos"                                         #
# ---------------------------------------------------------------------- #

CREATE TABLE `codigos_descuentos` (
    `cod_descuentos` BIGINT NOT NULL AUTO_INCREMENT,
    `codigo` VARCHAR(50),
    `estado` BOOL,
    CONSTRAINT `PK_codigos_descuentos` PRIMARY KEY (`cod_descuentos`)
);

# ---------------------------------------------------------------------- #
# Add table "clientes"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `clientes` (
    `cod_cliente` BIGINT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(40) NOT NULL,
    `correo` VARCHAR(40) NOT NULL,
    `direccion` VARCHAR(40),
    `telefono` VARCHAR(40),
    CONSTRAINT `PK_clientes` PRIMARY KEY (`cod_cliente`)
);

# ---------------------------------------------------------------------- #
# Add table "cuerpos"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `cuerpos` (
    `cod_cuerpo` INTEGER NOT NULL AUTO_INCREMENT,
    `cuerpo` VARCHAR(60),
    CONSTRAINT `PK_cuerpos` PRIMARY KEY (`cod_cuerpo`)
);

# ---------------------------------------------------------------------- #
# Add table "galerias_productos"                                         #
# ---------------------------------------------------------------------- #

CREATE TABLE `galerias_productos` (
    `cod_registro` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(40),
    `extension` VARCHAR(5),
    `url` TEXT,
    `destacada` BOOL,
    `cod_producto` BIGINT NOT NULL,
    CONSTRAINT `PK_galerias_productos` PRIMARY KEY (`cod_registro`, `cod_producto`)
);

# ---------------------------------------------------------------------- #
# Add table "tipo_producto"                                              #
# ---------------------------------------------------------------------- #

CREATE TABLE `tipo_producto` (
    `cod_tipo` INTEGER NOT NULL AUTO_INCREMENT,
    `tipo` VARCHAR(70),
    CONSTRAINT `PK_tipo_producto` PRIMARY KEY (`cod_tipo`)
);

# ---------------------------------------------------------------------- #
# Add table "tipo_producto_tallas"                                       #
# ---------------------------------------------------------------------- #

CREATE TABLE `tipo_producto_tallas` (
    `cod_tipo` INTEGER NOT NULL,
    `cod_talla` INTEGER NOT NULL,
    CONSTRAINT `PK_tipo_producto_tallas` PRIMARY KEY (`cod_tipo`, `cod_talla`)
);

# ---------------------------------------------------------------------- #
# Add table "productos_cuerpos"                                          #
# ---------------------------------------------------------------------- #

CREATE TABLE `productos_cuerpos` (
    `cod_producto` BIGINT NOT NULL,
    `cod_cuerpo` INTEGER NOT NULL,
    CONSTRAINT `PK_productos_cuerpos` PRIMARY KEY (`cod_producto`, `cod_cuerpo`)
);

# ---------------------------------------------------------------------- #
# Add table "colores_productos"                                          #
# ---------------------------------------------------------------------- #

CREATE TABLE `colores_productos` (
    `cod_color` INTEGER NOT NULL,
    `cod_producto` BIGINT NOT NULL,
    CONSTRAINT `PK_colores_productos` PRIMARY KEY (`cod_color`, `cod_producto`)
);

# ---------------------------------------------------------------------- #
# Foreign key constraints                                                #
# ---------------------------------------------------------------------- #

ALTER TABLE `productos` ADD CONSTRAINT `tipo_producto_productos` 
    FOREIGN KEY (`cod_tipo`) REFERENCES `tipo_producto` (`cod_tipo`);

ALTER TABLE `pedidos` ADD CONSTRAINT `clientes_pedidos` 
    FOREIGN KEY (`cod_cliente`) REFERENCES `clientes` (`cod_cliente`);

ALTER TABLE `pedidos` ADD CONSTRAINT `codigos_descuentos_pedidos` 
    FOREIGN KEY (`cod_descuentos`) REFERENCES `codigos_descuentos` (`cod_descuentos`);

ALTER TABLE `compras` ADD CONSTRAINT `pedidos_compras` 
    FOREIGN KEY (`cod_pedido`, `cod_descuentos`) REFERENCES `pedidos` (`cod_pedido`,`cod_descuentos`);

ALTER TABLE `compras` ADD CONSTRAINT `productos_compras` 
    FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`);

ALTER TABLE `galerias_productos` ADD CONSTRAINT `productos_galerias_productos` 
    FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`);

ALTER TABLE `tipo_producto_tallas` ADD CONSTRAINT `tipo_producto_tipo_producto_tallas` 
    FOREIGN KEY (`cod_tipo`) REFERENCES `tipo_producto` (`cod_tipo`);

ALTER TABLE `tipo_producto_tallas` ADD CONSTRAINT `tallas_tipo_producto_tallas` 
    FOREIGN KEY (`cod_talla`) REFERENCES `tallas` (`cod_talla`);

ALTER TABLE `productos_cuerpos` ADD CONSTRAINT `productos_productos_cuerpos` 
    FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`);

ALTER TABLE `productos_cuerpos` ADD CONSTRAINT `cuerpos_productos_cuerpos` 
    FOREIGN KEY (`cod_cuerpo`) REFERENCES `cuerpos` (`cod_cuerpo`);

ALTER TABLE `colores_productos` ADD CONSTRAINT `colores_colores_productos` 
    FOREIGN KEY (`cod_color`) REFERENCES `colores` (`cod_color`);

ALTER TABLE `colores_productos` ADD CONSTRAINT `productos_colores_productos` 
    FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`);
