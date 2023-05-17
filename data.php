<?php

require_once __DIR__ . "/Models/product.php";

$products = array(
  new product("https://www.robinsonpetshop.it/24025-large_default/acana-classic-red-per-cani.jpg", "Crocchette Classic Red", "Crocchette per cani adulti indicato in tutte le razze e le fasi della vita. Acana Classic Red è ricco di manzo, maiale e agnello ed è irresistibile anche per cani dai palati più esigenti. Privo di carboidrati ad alto indice glicemico, vanta il 50% di carne.", "23,90€", new dog()),
  new product("https://www.robinsonpetshop.it/24673-large_default/eh-gia-cuccia-peluche-rettangolare-crema.jpg", "Cuccia Peluce Rettangolare", "La cuccia per cani e gatti Eh Già Cuccia Peluche Rettangolare Crema è un soffice cuscino per il riposo del tuo pelosetto.", "124,70€", new dog()),
  new product("https://www.robinsonpetshop.it/25279-large_default/brit-premium-sterilized-salmone-per-gatti.jpg", "Crocchette Brit Premium", "Brit Premium Sterilized Salmone Per Gatti sono un alimento completo per gatti adulti sterilizzati. Altamente appetibili, sono realizzate con un alto contenuto di proteine che aiuta lo sviluppo muscolare e promuove la crescita.", "3,90€", new cat()),
  new product("https://www.robinsonpetshop.it/24676-large_default/eh-gia-cuccia-morbidone-peluche-curly-pink.jpg", "Cuccia Peluche Rettangolare", "La cuccia per cani e gatti Eh Già Cuccia Morbidone Peluche Curly Pink sarà il giaciglio preferito del tuo principino o principessina di casa. Realizzata interamente in Italia, questa soffice e regale cuccia per cani e gatti è rivestita di una morbidissima pelliccia sintetica rosa con cuscino removibile.", "124,70€", new cat()),
);
