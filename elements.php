<?php
$elementSetMetadata = array(
    'name' => 'refNum',
    'description' => 'A standard created by Bibliothèque nationale de France designed to manage images of digitalized books, papers and pictures.',
    'record_type' => 'File',
);

// Attention : contrairement à DublinCore Extended, on utilise réellement les
// noms et non les labels.
$elements = array(
    array(
        // 'name' => 'identifiant',
        'name' => 'Identifiant refNum',
        'label' => 'Identifiant refNum',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Référence de la notice à laquelle est attachée le fichier',
    ),
    // Champ indéfini dans le schéma.
    array(
        // 'name' => 'numper',
        'name' => 'Numper',
        'label' => 'Numéro périodique',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Numéro de périodique',
    ),
    array(
        // 'name' => 'identifiantAutreVersion',
        'name' => 'Identifiant autre version',
        'label' => 'Identifiant autre version',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Permet de faire référence à une autre édition du document courant (cas de document en mode texte de la revue de synthèse également numérisé)',
    ),
     // Commentaires ou signalement d'une page particulière.
    array(
        // 'name' => 'commentaire',
        'name' => 'Commentaire',
        'label' => 'Commentaire',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Pour signaler une particularité de la vue, une information de traitement ou une page intéréssante',
    ),
    array(
        // 'name' => 'typePage',
        'name' => 'Type de page',
        'label' => 'Type de page',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Permet d’identifier le contenu des pages d’un document : titre, index, première page à afficher, etc.',
    ),
    array(
        // 'name' => 'typePagination',
        'name' => 'Type de pagination',
        'label' => 'Type de pagination',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Permet de catégoriser le format du numéro de page : sans pagination, en chiffres arabes, en chiffres romains, par foliotation ou autres cas',
    ),
    array(
        // 'name' => 'numPage',
        'name' => 'Numéro de page',
        'label' => 'Numéro de page',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Numéro de page réel ou induit, au format original (sauf pour les chiffres romains, convertis en chiffres arabes conformément à refNum)',
    ),
    /* Supprimé dans v2.0, car doublon avec Dublin Core:Title.
    array(
        // 'name' => 'nomPage',
        'name' => 'Nom de page',
        'label' => 'Nom de page',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Correspond au numéro de page lorsqu’il existe et sinon à un numéro calculé à partir de la position de l’image dans l’ensemble du document (les chiffres romains ne sont pas convertis)',
    ),
     */
    // Correspond au champ de fichier par défaut "order" (ordre).
    array(
        // 'name' => "numOrdre",
        'name' => 'Numéro d’ordre',
        'label' => 'Numéro d’ordre',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Numéro d’ordre de l’image en cours dans le document',
    ),
    // Plusieurs vues pour une même page, par exemple les popups, les calques,
    // les demi-dépliants...
    array(
        // 'name' => "nombreVues",
        'name' => 'Nombre vues',
        'label' => 'Nombre vues',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Indique que plusieurs images correspondent à une même page (1 par défaut)',
    ),
    // Position réelle de l'objet dans l'espace du document : gauche, droite,
    // haut, bas, horizontal, vertical, unique, blanche, autre. Facilite
    // l'affichage du document.
    // Horizontal et vertical sont utilisées pour les vues uniques de plusieurs
    // pages (généralement doubles pour les revues).
    array(
        // 'name' => "positionPage",
        'name' => 'Position de la page',
        'label' => 'Position de la page',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Position de la page dans le document (gauche, droite, haut, bas, horizontal, vertical, unique, blanche, autre)',
    ),
    // Permet le redressement éventuel des images, utile au cas où les images
    // sont mal orientées et où l'information n'est pas dans l'image.
    array(
        // 'name' => 'orientation',
        'name' => 'Orientation',
        'label' => 'Orientation',
        'record_type' => 'File',
        'data_type' => 'Integer',
        'description' => 'Écart entre le sens de feuilletage et le sens de lecture',
    ),
    // Correspond au champ de notice par défaut "Original format" (pour les
    // images) ou Dublin Core Medium, mais au niveau de chaque fichier.
    array(
        // 'name' => 'supportOriginal',
        'name' => 'Support d’origine',
        'label' => 'Support d’origine',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Type de support du document original',
    ),
    // Correspond au champ d’image par défaut "Capture date", mais moins précis.
    array(
        // 'name' => 'dateNumérisation',
        'name' => 'Date de numérisation',
        'label' => 'Date de numérisation',
        'record_type' => 'File',
        'data_type' => 'Date',
        'description' => 'Date de la numérisation',
    ),
    // Actuellement, un seul objet associé est géré.
    array(
        // 'name' => 'objetAssocié',
        'name' => 'Objet associé',
        'label' => 'Objet associé',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Type de l’éventuel objet associé (Alto, TDM, Text)',
    ),
    // La legende est utilisée pour les lots d'images surtout.
    array(
        // 'name' => 'Légende',
        'name' => 'Légende',
        'label' => 'Légende',
        'record_type' => 'File',
        'data_type' => 'Text',
        'description' => 'Légende de l’image',
    ),
    array(
        // 'name' => 'Traitement',
        'name' => 'Traitement',
        'label' => 'Traitement',
        'record_type' => 'File',
        'data_type' => 'Text',
        'description' => 'Traitement',
    ),
    array(
        // 'name' => 'Cadrage',
        'name' => 'Cadrage',
        'label' => 'Cadrage',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Le cadrage est soit vue objet, soit détail.',
    ),
    // Le prestataire est le producteur de l’image. A l’ENPC, il est défini par
    // le premier élément du nom du fichier (ENPC01_ ...).
    array(
        // 'name' => 'Prestataire',
        'name' => 'Prestataire',
        'label' => 'Prestataire',
        'record_type' => 'File',
        'data_type' => 'Tiny Text',
        'description' => 'Producteur de l’image',
    ),
);
