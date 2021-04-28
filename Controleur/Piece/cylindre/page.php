<?php // contrat de phase du cylindre par extrusion
ob_start();	// début du code <section>

$this->SetDossier('cylindre');
$this->TitreVE("un cylindre par extrusion", "cylindre");
$this->PlanDesquisse();
$this->EsquisseCotée('cercle');
$this->MiseEnVolume('cylindre');

$this->scriptSection = ob_get_contents();
ob_end_clean();

