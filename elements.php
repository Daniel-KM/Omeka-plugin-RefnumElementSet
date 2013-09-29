<?php
$elementSetMetadata = array(
    'name'        => 'refNum',
    'description' => 'A standard created by Bibliothèque nationale de France designed to manage images of digitalized books, papers and pictures.',
    'record_type' => 'File',
);

// Attention : contrairement à DublinCore Extended, on utilise réellement les
// noms et non les labels.
$elements = array(
    array(
        // 'name'        => 'refNumId',
        'name'        => 'Identifiant du document',
        'label'       => 'Identifiant du document',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => 'Référence de la notice à laquelle est attachée le fichier.',
    ),
    array(
        // 'name'        => 'typePage',
        'name'        => 'Type de page',
        'label'       => 'Type de page',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => 'Permet d’identifier le contenu des pages d’un document : normal,  titre, index, table des matières, index, logo, première page à afficher, publicités et catalogue, index et tables des matières sans renvoi, dessins ou illustrations, couverture et couvrure.',
    ),
    array(
        // 'name'        => 'typePagination',
        'name'        => 'Type de pagination',
        'label'       => 'Type de pagination',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => 'Permet de catégoriser le format du numéro de page : sans pagination, en chiffres arabes, en chiffres romains, par foliotation ou autres cas.',
    ),
    array(
        // 'name'        => 'numPage',
        'name'        => 'Numéro de page',
        'label'       => 'Numéro de page',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => 'Transcription du numéro de page (original sauf pour les chiffres romains, convertis en chiffres arabes conformément à refNum)',
    ),
    array(
        // 'name'        => 'nomPage',
        'name'        => 'Nom de page',
        'label'       => 'Nom de page',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => 'Correspond au numéro de page lorsqu’il existe et sinon à un numéro calculé à partir de la position de l’image dans l’ensemble du document (les chiffres romains ne sont pas convertis)',
    ),
    // Correspond au champ de fichier par défaut "order" (ordre).
    array(
        // 'name'        => "numOrdre",
        'name'        => 'Numéro d’ordre',
        'label'       => 'Numéro d’ordre',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => 'Numéro d’ordre de l’image en cours dans le document',
    ),
    // Correspond au champ de notice par défaut "Original format" (pour les
    // images) ou Dublin Core Medium, mais au niveau de chaque fichier.
    array(
        // 'name'        => 'supportOriginal',
        'name'        => 'Support d’origine',
        'label'       => 'Support d’origine',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => 'Type de support du document original',
    ),
    // Correspond au champ d’image par défaut "Capture date", mais moins précis.
    array(
        // 'name'        => 'dateNumérisation',
        'name'        => 'Date de numérisation',
        'label'       => 'Date de numérisation',
        'record_type' => 'File',
        'data_type'   => 'Date',
        'description' => 'Date de la numérisation',
    ),
    // Actuellement, un seul objet associé est géré.
    array(
        // 'name'        => 'objetAssocié',
        'name'        => 'Objet associé',
        'label'       => 'Objet associé',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => 'Type de l’éventuel objet associé (Alto, TDM, Text)',
    ),
    // Le prestataire est le producteur de l’image. A l’ENPC, il est défini par
    // le premier élément du nom du fichier (ENPC01_ ...).
    array(
        // 'name'        => 'Prestataire',
        'name'        => 'Prestataire',
        'label'       => 'Prestataire',
        'record_type' => 'File',
        'data_type'   => 'Tiny Text',
        'description' => 'Producteur de l’image',
    ),
);
