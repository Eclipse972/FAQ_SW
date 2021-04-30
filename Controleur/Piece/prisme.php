<?php // article contrat de phase du prisme
ob_start();	// début du code <section>

$this->SetDossier('prisme');
$this->TitreVE('prisme',"un prisme droit", "prisme");
$this->PlanDesquisse();
$this->EsquisseCotée('rectangle');
$this->MiseEnVolume('prisme');

$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);
