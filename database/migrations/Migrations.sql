-- Creación de la base de datos
CREATE DATABASE TiendaOnline3;

-- Selección de la base de datos
USE TiendaOnline3;

-- Creación de las tablas

-- Tabla de Carrito de Compras
CREATE TABLE CarritoCompras (
  CarritoID INT PRIMARY KEY AUTO_INCREMENT,
  UsuarioID INT NOT NULL,
  FechaCreacion DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (UsuarioID) REFERENCES Usuarios(UsuarioID)
);

-- Tabla de Detalles del Carrito de Compras
CREATE TABLE DetallesCarrito (
  DetalleID INT PRIMARY KEY AUTO_INCREMENT,
  CarritoID INT NOT NULL,
  ProductoID INT NOT NULL,
  Cantidad INT NOT NULL,
  FOREIGN KEY (CarritoID) REFERENCES CarritoCompras(CarritoID),
  FOREIGN KEY (ProductoID) REFERENCES Productos(ProductoID)
);

-- Crear tabla de Facturas
CREATE TABLE Facturas (
    FacturaID INT PRIMARY KEY IDENTITY,
    ClienteID INT,
    Fecha DATETIME,
    Total DECIMAL(10, 2),
    CONSTRAINT FK_Facturas_Clientes FOREIGN KEY (ClienteID)
    REFERENCES Clientes(ClienteID)
);`examen-santiago-cossio`pruebaexamen