

<link rel="stylesheet" href="menustyle.css">
<!-- selve indholdet der er i et normalt html dokument skal ikke være her, da man henter de forskellige ting in "include" på de andre sider-->
<nav>
<ul>
<li class="menulinje"><a href="phpMenu.php" <?php if ($curpage=='phpmenu.php') { echo 'class="active"';}?>>Forside</a></li>
<li class="menulinje"><a href="information.php" <?php if ($curpage=='information.php') { echo 'class="active"';}?>>Information</a></li>
<li class="menulinje"><a href="portfolio.php" <?php if ($curpage=='portfolio.php') { echo 'class="active"';}?>>Portfolio</a></li>
<li class="menulinje"><a href="kontakt.php" <?php if ($curpage=='kontakt.php') { echo 'class="active"';}?>>Kontakt</a></li>

</ul>

<!--man sætter if ($curpage=='phpmenu.php') { echo 'class="active"';} for at kunne få de enkelte sider til at vise hvilken der er "aktiv" -->
</nav>

