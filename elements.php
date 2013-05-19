<?php
$elementSetMetadata = array(
    'name'        => 'refNum',
    'description' => 'A standard created by Bibliothèque nationale de France designed to manage images of digitalized books, papers and pictures.',
    'record_type' => 'File',
);

$elements = array(
    array(
        'name'        => 'Identifiant du document',
        'label'       => 'Identifiant du document',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => "Référence de la notice à laquelle est attachée le fichier.",
    ),
    array(
        'name'        => 'Type de page',
        'label'       => 'Type de page',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => "Permet d'identifier le contenu des pages d'un document : normal,  titre, index, table des matières, index, logo, première page à afficher, publicités et catalogue, index et tables des matières sans renvoi, dessins ou illustrations, couverture et couvrure.",
    ),
    array(
        'name'        => 'Type de pagination',
        'label'       => 'Type de pagination',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => "Permet de catégoriser le format du numéro de page : sans pagination, en chiffres arabes, en chiffres romains, par foliotation ou autres cas.",
    ),
    array(
        'name'        => 'Numéro de page',
        'label'       => 'Numéro de page',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => "Transcription du numéro de page (original sauf pour les chiffres romains, convertis en chiffres arabes conformément à refNum)",
    ),
    array(
        'name'        => 'Nom de page',
        'label'       => 'Nom de page',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => "Correspond au numéro de page lorsqu'il existe et sinon à un numéro calculé à partir de la position de l'image dans l'ensemble du document (les chiffres romains ne sont pas convertis)",
    ),
    // Correspond au champ de fichier par défaut "order" (ordre), impossible à
    // mettre à jour par CsvImport.
    array(
        'name'        => "Numéro d'ordre",
        'label'       => "Numéro d'ordre",
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => "Numéro d'ordre de l'image en cours dans le document",
    ),
    // Correspond au champ de notice par défaut "Original format", mais ici au
    // niveau de chaque fichier.
    array(
        'name'        => "Support d'origine",
        'label'       => "Support d'origine",
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => "Type de support du document original",
    ),
    // Correspond au champ d'image par défaut "Capture date", mais moins précis.
    array(
        'name'        => 'Date de numérisation',
        'label'       => 'Date de numérisation',
        'record_type' => 'File',
        'data_type'   => 'Date',
        'description' => "Date de la numérisation",
    ),
    // Pour le projet de l'école sur Omeka, on gère un seul objet associé.
    array(
        'name'        => 'Objet associé',
        'label'       => 'Objet associé',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => "Type de l'éventuel objet associé (Alto, TDM, Text)",
    ),
    // Le commentaire d'Omeka indique une limitation à 65536 caractères pour
    // "data_type", mais le champ "text" dans la table "element_texts" est de
    // type "mediumtext", soit 16 Mo. En pratique, le fichier Alto ne dépasse
    // jamais les 150 Ko.
    array(
        'name'        => 'Alto XML',
        'label'       => 'Alto XML',
        'record_type' => 'File',
        'data_type'   => 'Text',
        'description' => "Contenu intégral du fichier XML Alto associé au fichier",
    ),
    // Statistiques.
    array(
        'name'        => 'OCR Nombre NC',
        'label'       => 'OCR Nombre NC',
        'record_type' => 'File',
        'data_type'   => 'Integer',
        'description' => "Statistiques OCR : nombre NC",
    ),
    array(
        'name'        => 'OCR Nombre NC dico',
        'label'       => 'OCR Nombre NC dico',
        'record_type' => 'File',
        'data_type'   => 'Integer',
        'description' => "Statistiques OCR : nombre NC dico",
    ),
    array(
        'name'        => 'OCR Taux NC',
        'label'       => 'OCR Taux NC',
        'record_type' => 'File',
        'data_type'   => 'Integer',
        'description' => "Statistiques OCR : taux NC",
    ),
    array(
        'name'        => 'OCR Nombre de caractères',
        'label'       => 'OCR Nombre de caractères',
        'record_type' => 'File',
        'data_type'   => 'Integer',
        'description' => "Statistiques OCR : nombre de caractères",
    ),
    array(
        'name'        => 'OCR Caractères douteux',
        'label'       => 'OCR Caractères douteux',
        'record_type' => 'File',
        'data_type'   => 'Integer',
        'description' => "Statistiques OCR : caractères douteux",
    ),
    array(
        'name'        => 'OCR Taux des caractères douteux',
        'label'       => 'OCR Taux des caractères douteux',
        'record_type' => 'File',
        'data_type'   => 'Integer',
        'description' => "Statistiques OCR : taux des caractères douteux",
    ),
    // Correspond au champ de notice par défaut "text", mais ici au niveau de
    // chaque fichier.
    array(
        'name'        => 'OCR Texte',
        'label'       => 'OCR Texte',
        'record_type' => 'File',
        'data_type'   => 'Text',
        'description' => "Transcription brute du texte",
    ),
    // Ce champ permet de traiter facilement le surlignage en javascript.
    // Le format json simplifie le format xml et contient les propriétés
    // individuelles de l'ensemble des chaînes. Exemple de contenu :
    // {"TextStyle":[{"fontsize":"8.","fontstyle":"bold","id":"TXT_1","fontfamily":"Courier New"}],"ParagraphStyle":[{"align":"Block","id":"TXT_90"}],"String":[{"id":"PAG_1_ST000001","cc":"431","content":"Vis","height":27,"hpos":306,"stylerefs":"TXT_1","vpos":307,"wc":0.993,"width":62}]}';
    // Les valeurs des attributs de TextStyle, ParagraphStyle et String sont
    // ceux de la norme Alto. Ils peuvent être répétés.
    array(
        'name'        => 'OCR JSON',
        'label'       => 'OCR JSON',
        'record_type' => 'File',
        'data_type'   => 'Text',
        'description' => "Propriétés au format json de chaque mot transcrit, notamment la position dans l'image",
    ),
    // Le prestataire est le producteur de l'image. A l'ENPC, il est défini par
    // le premier élément du nom du fichier (ENPC01_ ...).
    array(
        'name'        => 'Prestataire',
        'label'       => 'Prestataire',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => "Producteur de l'image",
    ),
);
