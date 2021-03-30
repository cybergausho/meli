# API MeLi

Challenge con la comunidad


### Pre-requisitos 

_Servidor APACHE
PHP =<7.1
Navegador web
_



### Instalación 

_Descargar el proyecto en una carpeta a la que tenga acceso el servidor
```
/xampp/htdcos 
/var/www/html
etc...
```
Iniciar el servidor web y dirigirse a la direccion 

```
127.0.0.1/control-stock
```

Para utilizar el sistema de consultas de informacion, al abrir el sistema observamos los siguientes campos:
1) Site_ID
```
Site_ID: MLA
```
3) Seller_ID_
```
Seller_ID: 179571326
```

## Ejecutando pruebas 

_Una vez completado los datos que deseamos buscar damos click en_ Generar Log!

```
El Log se genera automatica en la carpeta local donde se encuentra alojada la pagina web y podremos consultar alli los resultados.
Las nuevas consultas no pisan el registro anterior, se suman indicando fecha y hora de la consulta realizada.
```

## Opciones 

_Si deseamos realizar multiples busquedas con respecto a los selles, podemos agregar nuevos campos, lo que generara que en el archivo de log
se muestren los resultos, uno debajo de otro._

### Leer datos

_Nos dirigimos a la carpeta donde se encuentra nuestra app y podemos verificar que se ha creado el archivo .log con los datos que le solicitamos, nuestro archivo se es autoincremental, todas las busquedas que realizamos se acumulan en el mismo, se separan por fecha y por ID_Seller._

```
Si estamos en un sistema operativo GNU/Linux podemos abrir la consola y dirigirnos a la carpeta donde se encuentra la app
cd /var/www/html/control-stock
y leer el archivo log 
nano ./log.txt

o podemos buscar las fechas del anio
grep -i "2021" log.txt
y continuar trabajando los datos localmente.
```

Saludos!

