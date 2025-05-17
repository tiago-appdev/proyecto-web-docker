use miappdb;

CREATE TABLE personas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  email VARCHAR(100)
);

INSERT INTO personas (nombre, email)
VALUES 
('Tiago Ibarrola', 'tiago@example.com'),
('Juanito Alcachofa', 'juanito@example.com');