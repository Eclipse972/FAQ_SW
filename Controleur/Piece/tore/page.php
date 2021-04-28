<?php // contrat de phase du tore
ob_start();	// début du code <section>

$this->SetDossier('tore');
$this->TitreVE("un tore", "tore");
$this->PlanDesquisse();
$this->EsquisseCotée('cercle', false);
$this->MiseEnVolume(false);

$this->scriptSection = ob_get_contents();
ob_end_clean();

