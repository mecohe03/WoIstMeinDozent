<h2>Details zum Termin</h2> <br/>
<strong>Name der Veranstaltung</strong>: <?= $sem_name ?> <br/>
<strong>Dozent</strong>: <br/> <?= $dozenten ?>
<strong>Raum</strong>:<?=  $raum ?><br/>
<strong>Start</strong>:<?=  $start ?><br/>
<strong>Ende</strong>:<?=  $ende ?><br/>
<strong>Link zu Veranstaltung</strong>: <a href='/details.php?cid=<?= $sem_id?>' target='_blank' style="text-decoration-line: underline; color: #24437C" class="mainmenu"><?= $sem_name ?></a><br/>
<strong>Liste der Beteiligten Einrichtungen</strong>: <br/><?= $einrichtungen ?>