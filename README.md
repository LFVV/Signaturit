# Signaturit


Escribo aquí las consideraciones :

-   Como no se indicaba el número de firmas he decidido que fueran 3, podría haber sido de cualquier    tamaño, mientras fueran iguales para ambos casos y permitiendo un solo valor vacío la lógica es igual.

-   He decidido que podría haber más de un rey en la firma (si fuera un juicio supraestatal), la lógica sería la misma salvo que si no pudieran incluirse varios reyes en el ejercicio sobre la firma mínima habría más casos en los que no se podría superar las firmas del oponente.

-   También he realizado los ejercicios por Command para poder acceder desde la consola:

    +   php bin/console app:winner kn kvv (por ejemplo) -> Saca el ganador considerando el primer parámetro como nuestra parte y el segundo como la contraria. Acepta mayúsculas o minúsculas y solo permite un vacío(espacio o #).

    +   php bin/console app:minimun_signature kn kvv (por ejemplo) ->Calcula la firma mínima que deberíamos añadir a nuestro contrato (primer parámetro) para vencer al del oponente (segundo parámetro). Acepta mayúsculas o minúsculas y solo permite un vacío (espacio o #), además comprueba que no vengan completas las firmas (3) para que permita calcular la firma que se podría añadir para vencer.

Observaciones:

- Como puntos de mejora me hubiera gustado poder añadir que funcionaran por AJAX los formularios, haciendolos dinámicos y pudiendo elegir el número de firmas que se aceptan por contrato, añadiendo la validación en el frontal también pero me adapté a que se prefería ver el manejo con Symfony.

- Soy consciente de que el código podría aprovechar más la potencia del framework pero hacía mucho que no trabajaba con PHP y las versiones de Symfony que toqué no funcionan como Symfony 5 pero intenté hacerlo con Symfony pese a manejarme peor que con PHP solo.
