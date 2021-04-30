<?php // contrat de phase du tronc de cône par extrusion
ob_start();	// début du code <section>

$this->SetDossier('tronc2cone2');
$this->TitreVE("un tronc de cône par extrusion", "tronc de c&ocirc;ne");
$this->PlanDesquisse();
$this->EsquisseCotée('cercle');
$this->MiseEnVolume(true, true);

$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);
