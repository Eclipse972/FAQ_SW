<?php // contrat de phase du cylindre par révolution
ob_start();	// début du code <section>

$this->SetDossier('cylindre2');
$this->TitreVE("un cylindre par r&eacute;volution", "cylindre");
$this->PlanDesquisse();
$this->EsquisseCotée('rectangle', false);
$this->MiseEnVolume(false);

$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);
