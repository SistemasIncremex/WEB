<!DOCTYPE html>
<html lang="en">
<head>
	<title>Incremex</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .panel-lateral {
            width: 200px;
            height: 100%;
            background-color: #333;
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .titulo-panel {
            display: block;
            width: 100%;
            padding: 10px 0;
            text-align: center;
            color: white;
            text-decoration: none;
            border: none;
            background-color: #999;
            margin-bottom: 5px;
        }

        .boton-panel {
            display: block;
            width: 100%;
            padding: 10px 0;
            text-align: center;
            color: white;
            text-decoration: none;
            border: none;
            background-color: #444;
            margin-bottom: 5px;
        }

        .contenido {
            margin-left: 220px; 
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="panel-lateral">
        <h3 class="titulo-panel">Arrendamiento Puro</h3>
        <button class="boton-panel" id="btnFormulario">Formulario</button>
        <button class="boton-panel" id="btnConceptos">Conceptos Iniciales</button>
        <button class="boton-panel" id="btnBaseDeDatos">Base de Datos</button>
        <button class="boton-panel" id="btnCalculoDed">Calculo Deducibilidad</button>
        <button class="boton-panel" id="btnConsultas">Consultas (Imprimir)</button>
        <button class="boton-panel" id="btnCotizacion48">Cotización 48 Meses</button>
        <button class="boton-panel" id="btnCotizacionSeg">Cotización con Seguro</button>
        <button class="boton-panel" id="btnCalculadoraTasa">Calculadora de Tasas</button>
        <button class="boton-panel" id="btnBaseContrato">Bases para Contrato</button>
        <button class="boton-panel" id="btnClientesEsp">Clientes Especiales</button>
        <button class="boton-panel" id="btnVistaPrevCot">Vista Previa Cot</button>
        <h3 class="titulo-panel">Servicios Ejecutivos de Transporte</h3>
        <button class="boton-panel" id="btnFormPuro">Formulario</button>
        <button class="boton-panel" id="btnCotPuro">Conceptos Iniciales</button>
        <button class="boton-panel" id="btnBDPuro">Base de Datos</button>
        <button class="boton-panel" id="btnBDContratado">Calculo Deducibilidad</button>
        <button class="boton-panel" id="btnConsultas">Consultas (Imprimir)</button>
        <button class="boton-panel" id="btnCotizacion48">Cotización 48 Meses</button>
        <button class="boton-panel" id="btnCotizacionSeg">Cotización con Seguro</button>
        <button class="boton-panel" id="btnCalculadoraTasa">Calculadora de Tasas</button>
        <button class="boton-panel" id="btnBaseContrato">Bases para Contrato</button>
        <button class="boton-panel" id="btnClientesEsp">Clientes Especiales</button>
        <button class="boton-panel" id="btnVistaPrevCot">Vista Previa Cot</button>
    </div>

    <div class="contenido">
        <h1>Cotizador Incremex</h1>
        <p>Aquí se muestran los registros de la base de datos de Incremex, Clientes</p>
    </div>

    <h1>Cotizador</h1>
    
    

    <script>
        document.getElementById('btnFormulario').addEventListener('click', () => {
            document.body.style.backgroundColor = 'red';
            alert('Desarrollar modulo');
        });

        document.getElementById('btnConceptos').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });

        document.getElementById('btnBaseDeDatos').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });

        document.getElementById('btnCalculoDed').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });

        document.getElementById('btnConsultas').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });

        document.getElementById('btnCotizacion48').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });

        document.getElementById('btnCotizacionSeg').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });

        document.getElementById('btnCalculadoraTasa').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });

        document.getElementById('btnBaseContrato').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });

        document.getElementById('btnClientesEsp').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });

        document.getElementById('btnVistaPrevCot').addEventListener('click', () => {
            alert('Desarrollar modulo');
        });
//no se realizo el desarrollo de estos modulos debido a que no se explico ni mostro el funcionamiento de estos

// despues se muestran los registros de la base de datos solicitada

    </script>


    <form method="post">
    </form>
    <div class="contenido">
        <?php 
        include("mostrar.php");
        ?>
    </div>
</body>
</html>