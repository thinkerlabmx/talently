# Talently Challenge

# Preguntas de conocimiento en Laravel

1. Qué paquete o estrategia utilizarías para levantar un sistema de administración rápidamente? (Autenticación y CRUDs)

- Utilizaría el paquete Voyager (https://github.com/the-control-group/voyager); ofrece ya un esquema de autenticación, una interfaz gráfica administrativa muy amigable y una gran capacidad para crear CRUDS con un esquema de administración de modelos bastante fácil.

2. Una breve explicación de cómo laravel utiliza la injección de dependencias

- Yo solo he usado la opción del constructor pero siempre me topo con el problema de tener constructores saturados con 3,4 o más parámetros y me parece que la limpieza del código se pierde. Supongo que debe haber una mejor manera pero solo conozco esta.

3. En qué casos utilizarías un Query Scope?
- Voy a dar un ejemplo de algo que me pasó: hice un proyecto de ecommerce con laravel en el que por definición, el catálogo de productos no tendría administración de stock por lo que la disponibilidad de los productos era permanente. De pronto, el negocio cambió y ahora era necesario mostrar solo los productos con existencias; esto implicaba ir a todas las consultas para agregar la nueva claúsula. Un Query Scope global arregló el problema de golpe. 

- Otro ejemplo, pero en esta ocasión para un Query Scope local sucedió para un proyecto agro en México en donde había consultas de parcelas agrícolas y de sus propietarios en dónde siempre se tenía que buscar por la ciudad a la que pertenecían. En lugar de escribir estas claúsulas cada vez; mejor creé una método scope  en el modelo y lo reutilicé cada que lo necesité.

4. Qué convenciones utilizas en la creación e implementación de migraciones?
- De arranque creo una migración para cada tabla de la base de datos y busco crear todas las migraciones en cuanto tengo una versión estable de mi diseño de base de datos. Después, voy creando migraciones para cada cambio que realizo o para cada tabla nueva que creo.