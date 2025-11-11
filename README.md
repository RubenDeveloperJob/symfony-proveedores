# 🧾 Gestión de Proveedores — Prueba Técnica Symfony Viajes Para Ti de Ruben Ruiz

Proyecto desarrollado como prueba técnica para **Viajes Para Ti**, usando **Symfony 7**, **Twig**, **Doctrine ORM**, **MySQL**, y un toque moderno con **TypeScript** y **Pico.css** 💼

---

## ✨ Funcionalidades principales

✅ Crear, editar, listar y eliminar proveedores  
✅ Campos: nombre, correo, teléfono, tipo y activo  
✅ Interfaz limpia, responsive y minimalista  
✅ Confirmación antes de borrar y resaltado de proveedores activos  
✅ API REST disponible en `/api/suppliers`  
✅ Código modular (PHP, Twig, CSS y TS separados)

---

## 🧩 Tecnologías

| Capa | Tecnología |
|------|-------------|
| Backend | PHP 8.4 + Symfony 7.3 |
| ORM | Doctrine (MySQL) |
| Frontend | Twig + Pico.css |
| Scripts | TypeScript compilado a JavaScript |
| Validación | Symfony Validator |
| API | JSON (Symfony Controller) |

---

## ⚙️ Instalación y ejecución

1️⃣ Clonar el proyecto desde GitHub  
```bash
git clone https://github.com/RubenDeveloperJob/symfony-proveedores.git
cd symfony-proveedores
2️⃣ Instalar las dependencias PHP

composer install


3️⃣ Crear el archivo .env.local (para tu configuración personal)


cp .env .env.local


Editar .env.local y ajustar la conexión a MySQL (pasado por correo):

DATABASE_URL="mysql://➡️:⬅️@127.0.0.1:3306/proveedores?serverVersion=8.0&charset=utf8mb4"


4️⃣ Crear la base de datos (si no existe)

php bin/console doctrine:database:create


5️⃣ Ejecutar las migraciones

php bin/console doctrine:migrations:migrate


6️⃣ Iniciar el servidor local

php -S 127.0.0.1:8000 -t public


Abrir en el navegador:
👉 http://127.0.0.1:8000/suppliers

7️⃣ Verificar la API JSON
👉 http://127.0.0.1:8000/api/suppliers
## 📘 Autor
Rugar / RubenDeveloperJob
