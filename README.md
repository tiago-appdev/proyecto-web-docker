# 🐳 Proyecto Web Dockerizado con Apache, PHP y MySQL

Este proyecto contiene una aplicación web simple desarrollada en PHP, que se conecta a una base de datos MySQL para mostrar registros de una tabla. Todo está contenerizado usando Docker y Docker Compose.

---

## 🚀 Tecnologías utilizadas

- Docker 🐳
- Docker Compose ⚙️
- Apache (con PHP 8.2)
- MySQL
- PHP + mysqli

---

## 📂 Estructura del proyecto

```

📁 proyecto-web
├── Dockerfile
├── docker-compose.yml
├── index.php
├── style.css
└── README.md

```

---

## ⚙️ Cómo correr el proyecto

### 1. Clonar el repositorio

```bash
git clone https://github.com/tiago-appdev/proyecto-web-docker.git
cd proyecto-web-docker
```

### 2. Levantar los contenedores

```bash
docker-compose up -d
```

Esto crea y ejecuta:

- `proyecto-web` en [http://localhost:8082](http://localhost:8082)
- `proyecto-db` en el puerto `3307` (para conexión desde MySQL Workbench)

---

## 🧪 Verificación

1. Ingresá a `http://localhost:8082` en tu navegador.
2. Deberías ver una tabla con los registros de personas almacenados en la base de datos MySQL.

---

## 🧰 Detalles técnicos

### 🐘 MySQL

- Usuario: `root`
- Contraseña: `rootpass`
- Base de datos: `miappdb`
- Puerto expuesto: `3307`

### 🌐 Apache + PHP

- Servidor corriendo en puerto `8082`
- Código PHP ubicado en `/var/www/html/`
- Extensión `mysqli` habilitada

---

## 📦 Publicación en Docker Hub

La imagen de este proyecto fue publicada en Docker Hub:

```bash
docker pull tiagod3v/app-web
```

---

## 🛠️ Problemas comunes

- Si la conexión a MySQL falla, revisar:

  - Que ambos contenedores estén en la misma red.
  - Que uses `db` como hostname (nombre del servicio MySQL en Docker Compose).

---

## 📬 Autor y contacto

**Nombre:** \[Tiago Ibarrola\]

**GitHub:** [https://github.com/tiago-appdev](https://github.com/tiago-appdev)

**Docker Hub:** [https://hub.docker.com/u/tiagod3v](https://hub.docker.com/u/tiagod3v)

---

## 📘 Licencia

Este proyecto es de uso educativo, libre para modificar y mejorar.
