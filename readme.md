🌐 Blog de WordPress sobre Inteligencia Artificial - IAW
Este repositorio contiene el código y la configuración del blog desarrollado para la asignatura de Implantación de Aplicaciones Web (IAW). El proyecto consiste en el despliegue de un CMS (WordPress) para la creación de un blog técnico sobre tendencias en Inteligencia Artificial.

Descripción del Proyecto
El objetivo principal es demostrar la capacidad de desplegar, gestionar y versionar una aplicación web compleja. El blog está enfocado en la divulgación de conceptos modernos de IA, cumpliendo con los requisitos de contenido y versionado mediante Git y GitHub.

Contenidos del Blog:
Vibe Coding: Un análisis sobre la nueva tendencia de programación basada en la intención y el uso de herramientas de IA generativa.

Modelos de Procesamiento del Lenguaje (LLMs): Una comparativa y explicación de los distintos modelos de procesamiento de lenguaje natural actuales.

Stack Tecnológico
Para este despliegue se ha utilizado una arquitectura robusta basada en contenedores y servicios web:

Infraestructura: Proxmox VE con un contenedor (LXC) sobre Debian.

Servidor Web: Apache2 configurado con Virtual Hosts.

Base de Datos: MariaDB (MySQL).

Lenguaje: PHP 8.x.

DNS: Servidor BIND9 local para resolución de nombres de dominio.

Seguridad: Implementación de HTTPS mediante certificados SSL y gestión de acceso a través de Nginx Proxy Manager (NPM).

Aprendizajes Clave
A través de esta práctica, he consolidado conocimientos avanzados en administración de sistemas y despliegue web:

Gestión de CMS: Instalación y configuración desde cero de WordPress, incluyendo la gestión de bases de datos y permisos de sistema de archivos.

Arquitectura de Red: Configuración de DNS local con BIND9 y uso de Proxies Inversos para la exposición segura de servicios.

Versionado de Aplicaciones: Uso de Git para el control de versiones de un entorno de producción, gestionando el flujo de trabajo entre el servidor local y el repositorio remoto.

Ciberseguridad Web: Implementación de protocolos seguros (SSL/TLS) y protección de la capa de aplicación.
