<?php
//Crée le fichier zip^et lui donne le chemin des images à télécharger
$rootPath = realpath('../img');
$zip = new ZipArchive();
$zip->open('file.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

/** @var SplFileInfo[] $files */
//Permet de gérer les sous-dossiers dans le dossier img
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);
//Permet de remplir le zip avec le contenu du dossier img
foreach ($files as $name => $file) {
    if (!$file->isDir()) {
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);
        $zip->addFile($filePath, $relativePath);
    }
}
$zip->close();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
</head>

<body>
    <!--Bouton pour télécharger les photos-->
    <form action="file.zip" method="post">
        <input type="submit" name="submit" value="Download File" />
    </form>

</body>
