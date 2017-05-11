<?php
$SponsorDAO  = new SponsorDAO();
$LesSponsors = $SponsorDAO->get_sponsor();


include_once'View/Sponsor.php';

?>