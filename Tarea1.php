<?php
	if(isset($_POST["importeTotalVendido"]) && isset($_POST["cantidadHijos"])) {
		$importeTotalVendido = $_POST["importeTotalVendido"];
		$cantidadHijos = $_POST["cantidadHijos"];

		$comision = $importeTotalVendido * 0.075;
		$bonificacion = $cantidadHijos * 50;
		$sueldoBasico = 600;
		$sueldoBruto = $sueldoBasico + $comision + $bonificacion;
		$descuento = $sueldoBruto * 0.11;
		$sueldoNeto = $sueldoBruto - $descuento;

		echo "<h3>Resultados:</h3>";
		echo "Comisión: S/." . $comision . "<br>";
		echo "Bonificación: S/." . $bonificacion . "<br>";
		echo "Sueldo bruto: S/." . $sueldoBruto . "<br>";
		echo "Descuento: S/." . $descuento . "<br>";
		echo "Sueldo neto: S/." . $sueldoNeto;
	}
	?>