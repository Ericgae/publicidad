<?php

require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';

\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('plantilla.docx');
 


$ocupacion = $_POST['ocupacion'];
$actividadfisica = $_POST['actividadfisica'];
$deporte = $_POST['deporte'];
$atraumaticos = $_POST['atraumaticos'];
$pactual = $_POST['pactual'];
$efisica = $_POST['efisica'];
$estatura = $_POST['estatura'];
$peso = $_POST['peso'];
$talla = $_POST['talla'];
$temperatura = $_POST['temperatura'];
$diagnostico = $_POST['diagnostico'];
$patologiasa = $_POST['patologiasa'];
$objtratamiento = $_POST['objtratamiento'];
$electroestimulacion = $_POST['electroestimulacion'];
$corrientee = $_POST['corrientee'];
$modulacione = $_POST['modulacione'];
$duracione = $_POST['duracione'];
$ultrasonido = $_POST['ultrasonido'];
$frecuenciau = $_POST['frecuenciau'];
$potenciau = $_POST['potenciau'];
$duracionu = $_POST['duracionu'];
$laserinfrarojo = $_POST['laserinfrarojo'];
$modalidadl = $_POST['modalidadl'];
$duracionl = $_POST['duracionl'];
$termoterapia = $_POST['termoterapia'];
$modalidadt = $_POST['modalidadt'];
$duraciont = $_POST['duraciont'];
$ejercicio = $_POST['ejercicio'];
$notaingreso = $_POST['notaingreso'];
$notaalta = $_POST['notaalta'];
$fecha = $_POST['fecha'];


// --- Asignamos valores a la plantilla



$templateWord->setValue('ocupacion',$ocupacion);
$templateWord->setValue('actividadfisica',$actividadfisica);
$templateWord->setValue('deporte',$deporte);
$templateWord->setValue('atraumaticos',$atraumaticos);
$templateWord->setValue('pactual',$pactual);
$templateWord->setValue('efisica',$efisica);
$templateWord->setValue('estatura',$estatura);
$templateWord->setValue('peso',$peso);
$templateWord->setValue('talla',$talla);
$templateWord->setValue('temperatura',$temperatura);
$templateWord->setValue('diagnostico',$diagnostico);
$templateWord->setValue('patologiasa',$patologiasa);
$templateWord->setValue('objtratamiento',$objtratamiento);
$templateWord->setValue('electroestimulacion',$electroestimulacion);
$templateWord->setValue('corrientee',$corrientee); 
$templateWord->setValue('modulacione',$modulacione);
$templateWord->setValue('duracione',$duracione);
$templateWord->setValue('ultrasonido',$ultrasonido);
$templateWord->setValue('frecuenciau',$frecuenciau);
$templateWord->setValue('potenciau',$potenciau);
$templateWord->setValue('duracionu',$duracionu);
$templateWord->setValue('laserinfrarojo',$laserinfrarojo);
$templateWord->setValue('modalidadl',$modalidadl);
$templateWord->setValue('duracionl',$duracionl);
$templateWord->setValue('termoterapia',$termoterapia);
$templateWord->setValue('modalidadt',$modalidadt);
$templateWord->setValue('duraciont',$duraciont);
$templateWord->setValue('ejercicio',$ejercicio);
$templateWord->setValue('notaingreso',$notaalta);
$templateWord->setValue('notaalta',$notaalta);

// --- Guardamos el documento
$templateWord->saveAs('historial clinico.docx');

header("Content-Disposition: attachment; filename=historial clinico.docx; charset=iso-8859-1");
echo file_get_contents('historial clinico.docx');

        
?>