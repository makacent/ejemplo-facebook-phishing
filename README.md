# Obtener acceso a cuenta de Facebook con Phishing

## Descargo de responsabilidad

No te recomiendo hacer esto en la vida real, solo te muestro cómo se puede hackear una cuenta de Facebook de manera real.

Lo que sea que hagas, es tu responsabilidad, y si no estás dispuesto a aceptarlo, deja de leer ahora mismo.
**Tutorial**: [https://parzibyte.me/blog/2019/06/19/hackear-cuenta-facebook-phishing-ejemplo/](https://parzibyte.me/blog/2019/06/19/hackear-cuenta-facebook-phishing-ejemplo/)

**Demostración**: https://www.youtube.com/watch?v=3AWUypLKARY


## Explicación del ataque

Lo que haremos será un ataque de phishing, es decir, una página web que es idéntica pero cambia en el dominio.

Copiaremos el login de Facebook, y enviaremos el enlace de nuestra página maliciosa a la víctima con un pretexto, por ejemplo:  _oye, ¿ya viste este fabuloso meme?_  o tal vez pidiendo un like para ayudar a determinada página, etcétera.

Cuando la víctima ingrese, verá el inicio de sesión de Facebook (aunque estará en nuestro dominio) y creerá que su sesión ha caducado así que ingresará los datos, mismos que serán enviados a nuestro servidor.

Después de enviar los datos, lo único que haremos será una redirección a, verdaderamente, Facebook. Así la víctima va a pensar que inició sesión, pero en realidad su sesión siempre estuvo abierta, solo que nos dio sus datos y después lo redirigimos.

Más tarde, podremos acceder a su cuenta con los datos que puso.