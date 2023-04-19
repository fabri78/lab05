<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$precio = $_POST["precio"];
		$cantidad = $_POST["cantidad"];
		$nuevo_precio = $precio * 0.95;
		$importe = $nuevo_precio * $cantidad;
		$descuento = $importe * 0.07;
		$importe_pagar = $importe - $descuento;
		$obsequio = $cantidad * 2;

		echo "<h2>Resultados</h2>";
		echo "<p>Nuevo precio de la gaseosa: S/. " . number_format($nuevo_precio, 2) . "</p>";
		echo "<p>Importe de la compra: S/. " . number_format($importe, 2) . "</p>";
		echo "<p>Importe del descuento: S/. " . number_format($descuento, 2) . "</p>";
		echo "<p>Importe a pagar: S/. " . number_format($importe_pagar, 2) . "</p>";
		echo "<p>Obsequio: " . $obsequio . " caramelos</p>";
	}
	?>