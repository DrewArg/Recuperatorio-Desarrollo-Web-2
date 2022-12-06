<?php
require('../layout/_constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php require('../layout/_metaTags.php') ?>
    <?php require('../layout/_styleSheet.php') ?>
    <title>Reglamento</title>
</head>

<body class="body">

<?php require('../layout/_header.php') ?>

    <main class="main">
        <div class="reglamento">
            <h1>Reglamento</h1>
            <h2>Notas Versión Actual</h2>
            <div>
                <p>En esta versión se podrán jugar todos los tipos de cartas y se podrán activar todos los efectos.
                    Todas
                    las
                    cartas sirven para algo en especial y funcionan correctamente.</p>
            </div>

            <h2>Tablero de Juego</h2>
            <div>
                <p>El área de juego es el lugar en donde se ubicarán las cartas para desarrollar la batalla. Cada carta
                    que
                    pongas o retires del juego será puesta en un lugar específico dentro del mismo, ya que cada lugar
                    representa
                    una función específica. Ten en cuenta que salvo las cartas ubicadas en tu Mazo o en tu Mano, el
                    jugador
                    enemigo podrá ver sus especificaciones en su turno.</p>
            </div>

            <h3>Mazo</h3>
            <div>
                <p>Cada Jugador cuenta con un mazo de 30 cartas. Hasta el momento sólo hay dos tipos de mazos: Acuático
                    y
                    Terrestre. Al inicio de la partida se elegirá aleatoriamente quien empieza. El jugador que empiece
                    será
                    el
                    que tenga la opción de elegir el mazo, al otro jugador se le asignará el restante.</p>
            </div>

            <h3>Mano</h3>
            <div>
                <p>Es el área dónde se ubican las cartas que robes del mazo antes de ponerlas en juego.</p>
            </div>

            <h3>Reserva de Alimentos</h3>
            <div>
                <p>La reserva de alimentos contiene a todos los alimentos que has puesto en juego. Cuando consumes un
                    alimento
                    para bajar una carta al tablero o bien activar alguna habilidad, este alimento pasa sólo por el
                    resto de
                    este turno a la zona de Alimentos Consumidos.</p>
            </div>

            <h3>Alimentos Consumidos</h3>
            <div>
                <p>La zona de Alimentos Consumidos es el lugar donde se ubican los alimentos que has consumido para
                    bajar
                    una
                    carta o activar alguna habilidad. Mover los alimentos de la Reserva de Alimentos a la zona de
                    Alimentos
                    Consumidos es la forma de representar que estás "consumiendo" los alimentos requeridos para bajar
                    cartas
                    o
                    activar efectos. Al consumir un alimento este permanece en la zona de Alimentos Consumidos hasta tu
                    próximo
                    turno.</p>
            </div>

            <h3>Línea de Reposo</h3>
            <div>
                <p>
                    Es el lugar a donde se bajan las cartas de Animal. Si una carta está en esta zona puedes declararla
                    atacante
                    o defensora, si esto ocurre, esa carta pasará a la Linea de Batalla y no podrá ser utilizada en otra
                    batalla
                    hasta tu próximo turno.
                </p>
            </div>

            <h3>Línea de Batalla</h3>
            <div>
                <p>Es el lugar donde se ubican los Animales declarados atacantes o defensores y donde se efectúa el
                    cálculo
                    de
                    daño correspondiente para ver si algún jugador deberá mandar cartas de su mazo a su cementerio o no.
                    Recuerda que si un animal está en esta Línea, no podrá ser utilizado para otra batalla hasta tu
                    próximo
                    turno.</p>
            </div>

            <h3>Cementerio</h3>
            <div>
                <p>Es la zona donde van las cartas cuando son destruidas, ya sea por efectos de cartas, activar
                    habilidades
                    o
                    por daño de combate.</p>
            </div>

            <h3>Línea de Apoyo</h3>
            <div>
                <p>Es la zona donde pones el Habitat que juegas y de dónde activarás los efectos de cada uno de ellos en
                    caso de
                    así quererlo.</p>
            </div>

            <h3>Tipos de Carta</h3>
            <div>
                <p>Todas las cartas tienen un nombre y un ID. Este último será utilizado repetidamente para poner o
                    sacar
                    las
                    cartas del juego.</p>
            </div>

            <h3>Alimento</h3>
            <div>
                <p>Los alimentos sirven como "moneda" en el juego, se utilizan para "pagar" el coste de los demás tipos
                    de
                    cartas y de esta manera ponerlos en juego.</p>
            </div>

            <h3>Animal</h3>
            <div>
                <p>Los animales son las cartas que se utilizan en la batalla. Todos los animales poseen un coste y un
                    daño.
                    Algunos de ellos tienen un efecto.</p>
            </div>

            <h3>Habilidad</h3>
            <div>
                <p>Las habilidades son cartas que se juegan desde la mano del jugador pagando su coste en alimentos.
                    Estas
                    habilidades sirven como modificadores de los animales aliados o enemigos. Las habilidades son cartas
                    que
                    luego de utilizadas, se destruyen.</p>
            </div>

            <h3>Habitat</h3>
            <div>
                <p>Los habitats son cartas similares a las habilidades pero que se mantienen en juego indefinidamente.
                </p>
            </div>

            <h3>Turnos</h3>

            <h3>1° Turno</h3>
            <div>
                <p>Cada jugador robará de su mazo un total de 4 cartas para iniciar la partida.</p>
            </div>

            <h3>2° Turno</h3>
            <div>
                <p>En caso de tener la posibilidad, el jugador podrá ya sea bajar una carta al tablero de juego desde su
                    mano o
                    bien activar un efecto de una habilidad.</p>
            </div>

            <h3>3° Turno en Adelante</h3>
            <div>
                <p>A partir del tercer turno, el jugador podrá ver su mano, bajar una carta, atacar al enemigo, activar
                    un
                    efecto o ver el tablero de juego.</p>
            </div>

            <h3>Fin de Turno</h3>
            <div>
                <p>Al final de cada turno el jugador robará una carta de su mazo.</p>
            </div>

            <h3>Obtención de la Victoria</h3>
            <div>
                <p>El juego termina cuando un jugador logra que el mazo oponente no tenga cartas.</p>
            </div>
        </div>
    </main>
    <?php require('../layout/_footer.php') ?>

</body>

</html>