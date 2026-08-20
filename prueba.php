<?php

$huesped = "Tobias";
$cantidad_noches = 5;
$tipo_habitacion = "Premium";
$pago = "Efectivo";

$precio = 0;
$subtotal = 0;
$descuento = 0;
$descuento_pago = 0;
$recargo = 0;
$total_parcial = 0;
$total_final = 0;

// Precio de la habitación
if ($tipo_habitacion == "Estandar") {
    $precio = 80000;
} elseif ($tipo_habitacion == "Premium") {
    $precio = 120000;
} else {
    $precio = 180000;
}

// Subtotal
$subtotal = $precio * $cantidad_noches;

// Descuento por noches
if ($cantidad_noches >= 1 && $cantidad_noches <= 2) {

    $descuento = 0;

} elseif ($cantidad_noches >= 3 && $cantidad_noches <= 5) {

    $descuento = $subtotal * 0.10;

} else {

    $descuento = $subtotal * 0.20;

}

$total_parcial = $subtotal - $descuento;

// Forma de pago (Condicionales Anidadas)

if ($pago == "Efectivo") {

    $descuento_pago = $total_parcial * 0.05;
    $total_final = $total_parcial - $descuento_pago;

} else {

    $cuotas = 6;

    if ($cuotas <= 3) {

        $total_final = $total_parcial;

    } else {

        $recargo = $total_parcial * 0.12;
        $total_final = $total_parcial + $recargo;

    }

}

// Desayuno
if ($tipo_habitacion == "Premium" || $tipo_habitacion == "Suite") {
    $desayuno = "La reserva incluye desayuno.";
} else {
    $desayuno = "La reserva no incluye desayuno.";
}

// Operador ternario
$categoria = ($total_final > 700000) ? "Cliente VIP" : "Cliente Estándar";

// Mostrar resultados

echo "<h2>Reserva del Hotel</h2>";

echo "Huésped: $huesped <br>";
echo "Habitación: $tipo_habitacion <br>";
echo "Noches: $cantidad_noches <br>";
echo "Precio por noche: $$precio <br>";
echo "Subtotal: $$subtotal <br>";
echo "Descuento por noches: $$descuento <br>";

if ($pago == "Efectivo") {
    echo "Descuento por pago: $$descuento_pago <br>";
} else {
    echo "Recargo: $$recargo <br>";
}

echo "Total final: $$total_final <br>";
echo "$desayuno <br>";
echo "Categoría: $categoria";

?>