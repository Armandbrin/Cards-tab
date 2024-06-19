<?php

$tableau = [
    ["url" => "https://immobilier.lefigaro.fr/article/a-bordeaux-un-permis-de-construire-inedit-pour-cet-immeuble-de-9-etages_9130c504-fbb6-11ed-8627-d1ad55235ab0/", "image" => "https://i.f1g.fr/media/eidos/1300x701_crop/2023/06/05/XVM94b16250-0148-11ee-b331-ce262bc4a6ce.jpg", "price" => 10000, ["description" => "courte description 0", "description_longue" => "description longue 0"]],
    ["url" => "https://www.gqmagazine.fr/lifestyle/article/le-plus-bel-immeuble-du-monde-est-en-france", "image" => "https://media.gqmagazine.fr/photos/5e53f1c894cd35000818081f/16:9/w_1280,c_limit/0-3.jpg", "price" => 100000, ["description" => "courte description 1", "description_longue" => "description longue 1"]],
    ["url" => "https://vivreparis.fr/paris-les-immeubles-les-plus-plats-de-la-capitale/", "image" => "https://vivreparis.fr/wp-content/uploads/2019/09/immeuble-fin-paris-1.jpg", "price" => 189474908, ["description" => "courte description 2", "description_longue" => "description longue 2"]],
    ["url" => "https://www.illico-travaux.com/renovation/renovation-dimmeuble/", "image" => "https://www.illico-travaux.com/wp-content/uploads/2018/02/Immeuble2-1280x853.jpg", "price" => 10094943, ["description" => "courte description 3", "description_longue" => "description longue 3"]],
    ["url" => "https://www.ouest-france.fr/environnement/ecologie/transition-ecologique/votre-prochain-logement-dans-un-immeuble-en-bois-83fc32d4-6e88-11ee-97d6-d90367762e60", "image" => "https://media.ouest-france.fr/v1/pictures/MjAyMzExNDQ0YmQ3YTE4YmVlNGNiMWU1NmEzMGE3MTIwY2ZiM2Y?width=1260&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=9f5ddb4c4679592443c189a7e5b88d00f9d5b35724725f23ebb6aaef9eb60440", "price" => 300000, ["description" => "courte description 4", "description_longue" => "description longue 4"]]
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>carte</title>
</head>
<body class="flex flex-wrap">
    <?php foreach( $tableau as $tab){ ?>
        <main class="flex flex-col justify-between w-[50vh] h-[40vh] border-solid border-2 rounded-[2vh] mx-10 my-10">
            <section class="flex justify-center">
                    <a href="<?php print $tab["url"]; ?>"><img class="w-[42.5vh] mt-[3.5vh] h-[22vh] rounded-[2vh]" src="<?php print $tab["image"]; ?>" alt="<?php print $tab[0]["description_longue"]; ?>"></a>
            </section>
            <section class="flex justify-between items-center mx-[2vh]">
                <div class="flex flex-row items-center gap-2">
                    <img class="w-10 h-10 rounded-full" src="<?php print $tab["image"]; ?>" alt="<?php print $tab[0]["description_longue"]; ?>">
                    <p><?php print $tab[0]["description"] ?></p>
                </div>
                <p><?php print number_format($tab["price"], 0, "", "."); ?> €</p>
            </section>
            <section class="flex justify-center mb-5">
                <p><?php print $tab[0]["description_longue"]; ?></p>
            </section>
        </main>
    <?php } ?>
</body>
</html>