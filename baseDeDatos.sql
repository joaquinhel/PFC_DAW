-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema optica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `optica` DEFAULT CHARACTER SET utf8 ;

-- -----------------------------------------------------
-- Table `optica`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `nombreCategoria` VARCHAR(45) NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`proveedor` (
  `idProveedor` INT NOT NULL AUTO_INCREMENT,
  `nombreEmpresa` VARCHAR(45) NULL,
  `personaContacto` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  PRIMARY KEY (`idProveedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `nombreProducto` VARCHAR(45) NULL,
  `descripcion` VARCHAR(100) NULL,
  `marca` VARCHAR(60) NULL,
  `precio` VARCHAR(15) NULL,
  `categoria_idCategoria` INT NOT NULL,
  `proveedor_idProveedor` INT NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `fk_producto_categoria1_idx` (`categoria_idCategoria` ASC),
  INDEX `fk_producto_proveedor1_idx` (`proveedor_idProveedor` ASC),
  CONSTRAINT `fk_producto_categoria1`
    FOREIGN KEY (`categoria_idCategoria`)
    REFERENCES `optica`.`categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_proveedor1`
    FOREIGN KEY (`proveedor_idProveedor`)
    REFERENCES `optica`.`proveedor` (`idProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `nombreCategoria` VARCHAR(45) NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`empleado` (
  `idEmpleado` INT NOT NULL AUTO_INCREMENT,
  `nombreEmpleado` VARCHAR(45) NULL,
  `apellidos` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `fechaContratacion` VARCHAR(45) NULL,
  `sueldo` VARCHAR(45) NULL,
  PRIMARY KEY (`idEmpleado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nombreCliente` VARCHAR(45) NULL,
  `apellidos` VARCHAR(45) NULL,
  `direccion` VARCHAR(90) NULL,
  `telefono` VARCHAR(14) NULL,
  `nif` VARCHAR(9) NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`pedidoCliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`pedidoCliente` (
  `idPedido` INT NOT NULL AUTO_INCREMENT,
  `fechaPedido` VARCHAR(45) NULL,
  `cantidad` VARCHAR(45) NULL,
  `empleado_idEmpleado` INT NOT NULL,
  `cliente_idCliente` INT NOT NULL,
  PRIMARY KEY (`idPedido`),
  INDEX `fk_pedidoCliente_empleado1_idx` (`empleado_idEmpleado` ASC),
  INDEX `fk_pedidoCliente_cliente1_idx` (`cliente_idCliente` ASC),
  CONSTRAINT `fk_pedidoCliente_empleado1`
    FOREIGN KEY (`empleado_idEmpleado`)
    REFERENCES `optica`.`empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidoCliente_cliente1`
    FOREIGN KEY (`cliente_idCliente`)
    REFERENCES `optica`.`cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`detallePedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`detallePedido` (
  `idDetallePedido` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NULL,
  `cantidad` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NULL,
  `subtotal` VARCHAR(45) NULL,
  `total` VARCHAR(45) NULL,
  `idPedido` VARCHAR(45) NULL,
  `pedidoCliente_idPedido` INT NOT NULL,
  PRIMARY KEY (`idDetallePedido`),
  INDEX `fk_detallePedido_pedidoCliente1_idx` (`pedidoCliente_idPedido` ASC),
  CONSTRAINT `fk_detallePedido_pedidoCliente1`
    FOREIGN KEY (`pedidoCliente_idPedido`)
    REFERENCES `optica`.`pedidoCliente` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`detalleCompra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`detalleCompra` (
  `idDetalleCompra` INT NOT NULL AUTO_INCREMENT,
  `cantidad` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `precioLista` VARCHAR(45) NULL,
  `descuento` VARCHAR(45) NULL,
  `subtotal` VARCHAR(45) NULL,
  `totalNeto` VARCHAR(45) NULL,
  `numOrden` VARCHAR(45) NULL,
  `producto_idProducto` INT NOT NULL,
  INDEX `fk_detalleCompra_producto1_idx` (`producto_idProducto` ASC),
  PRIMARY KEY (`idDetalleCompra`),
  CONSTRAINT `fk_detalleCompra_producto1`
    FOREIGN KEY (`producto_idProducto`)
    REFERENCES `optica`.`producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`compra` (
  `idcompra` INT NOT NULL AUTO_INCREMENT,
  `fechaEmision` VARCHAR(45) NULL,
  `fechaVencimiento` VARCHAR(45) NULL,
  `detalleCompra_idDetalleCompra` INT NOT NULL,
  `proveedor_idProveedor` INT NOT NULL,
  PRIMARY KEY (`idcompra`),
  INDEX `fk_compra_detalleCompra1_idx` (`detalleCompra_idDetalleCompra` ASC),
  INDEX `fk_compra_proveedor1_idx` (`proveedor_idProveedor` ASC),
  CONSTRAINT `fk_compra_detalleCompra1`
    FOREIGN KEY (`detalleCompra_idDetalleCompra`)
    REFERENCES `optica`.`detalleCompra` (`idDetalleCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compra_proveedor1`
    FOREIGN KEY (`proveedor_idProveedor`)
    REFERENCES `optica`.`proveedor` (`idProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`pruebas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`pruebas` (
  `idpruebas` INT NOT NULL AUTO_INCREMENT,
  `nombrePrueba` VARCHAR(45) NULL,
  `aparatosNecesarios` VARCHAR(45) NULL,
  PRIMARY KEY (`idpruebas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`prueba-cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`pruebacliente` (
  `prueba_idprueba` INT NOT NULL,
  `cliente_idCliente` INT NOT NULL,
  `diagnostico` VARCHAR(45) NULL,
  INDEX `fk_prueba-cliente_pruebas1_idx` (`prueba_idprueba` ASC),
  INDEX `fk_prueba-cliente_cliente1_idx` (`cliente_idCliente` ASC),
  CONSTRAINT `fk_prueba-cliente_prueba1`
    FOREIGN KEY (`pruebas_idpruebas`)
    REFERENCES `optica`.`pruebas` (`idpruebas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_prueba-cliente_cliente1`
    FOREIGN KEY (`cliente_idCliente`)
    REFERENCES `optica`.`cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `optica`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `clave` VARCHAR(45) NULL,
  `contraseña` VARCHAR(45) NULL,
  `fecha` VARCHAR(45) NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


