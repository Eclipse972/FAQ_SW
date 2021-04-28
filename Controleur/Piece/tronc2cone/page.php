<?php // contrat de phase du tronc de cône par révolution
ob_start();	// début du code <section>

$this->SetDossier('tronc2cone');
$this->TitreVE("un tronc de cône par r&eacute;volution", "tronc de c&ocirc;ne");
$this->PlanDesquisse();
$this->EsquisseCotée('ligne', false);
$this->MiseEnVolume(false);

$this->scriptSection = ob_get_contents();
ob_end_clean();

