<?php

require_once __DIR__ . '/../vendor/autoload.php';
$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../views',
));

$vegetables = array(
    'skartichoke' => array(
        'name' => 'artichoke',
        'ska_name' => 'skartichoke',
        'image' => 'http://doriegreenspan.com/images/artichoke.jpg'
    ),
    'aruguska' => array(
        'name' => 'arugula',
        'ska_name' => 'aruguska',
        'image' => 'http://nashsorganicproduce.com/recipes/wp-content/uploads/2013/04/arugula-cutout.jpg'
    ),
    'askaragus' => array(
        'name' => 'asparagus',
        'ska_name' => 'askaragus',
        'image' => 'http://www.voiceonline.com/wp-content/uploads/2012/11/asparagusLARGE160112.jpg'
    ),
    'skaplant' => array(
        'name' => 'eggplant',
        'ska_name' => 'skaplant',
        'image' => 'http://cdn.shopify.com/s/files/1/0558/1897/products/italian-eggplant_large.jpg?v=1450234140'
    ),
    'skamaranth' => array(
        'name' => 'amaranth',
        'ska_name' => 'skamaranth',
        'image' => 'http://media4.s-nbcnews.com/j/streams/2013/July/130717/6C8290717-tdy-130717-greens-1.today-inline-large.jpg'
    ),
    'skalfalfa' => array(
        'name' => 'alfalfa',
        'ska_name' => 'skalfalfa',
        'image' => 'http://www.thefitindian.com/wp-content/uploads/2014/11/Alfalfa-sprouts.jpg'
    ),
    'skadzuki' => array(
        'name' => 'adzuki',
        'ska_name' => 'skadzuki',
        'image' => 'http://cdn.shopify.com/s/files/1/0129/8922/products/Adzuki_grande.jpeg?v=1448389134'
    ),
    'chickska' => array(
        'name' => 'chickpeas',
        'ska_name' => 'chickska',
        'image' => 'http://yumuniverse.com/wp-content/uploads/2012/01/chickpeas.jpg'
    ),
    'ska-beans' => array(
        'name' => 'green beans',
        'ska_name' => 'ska beans',
        'image' => 'http://pets.thenest.com/DM-Resize/photos.demandstudios.com/getty/article/142/162/87627823.jpg?w=600&h=600&keep_ratio=1'
    ),
    'kidney-ska' => array(
        'name' => 'kidney beans',
        'ska_name' => 'kidney ska',
        'image' => 'https://www.ag.ndsu.edu/plantsciences/images/dry-beans/Dark_Kidney_Red_Hawk.jpg'
    ),
    'skatils' => array(
        'name' => 'lentils',
        'ska_name' => 'skatils',
        'image' => 'http://iltagrain.com/ig_site/wp-content/uploads/2015/06/Large-Green-Lentil.jpg'
    ),
    'peaska' => array(
        'name' => 'peas',
        'ska_name' => 'peaska',
        'image' => 'http://previews.123rf.com/images/lindasj2/lindasj20910/lindasj2091000024/5711543-Large-pile-of-un-shelled-peas-in-green-pods--Stock-Photo.jpg'
    ),
    'ska-choy' => array(
        'name' => 'bok choy',
        'ska_name' => 'ska choy',
        'image' => 'http://www.smartkitchen.com/assets/images/resources/large/1281294524Bok%20Choy.jpg'
    ),
    'broccoska' => array(
        'name' => 'broccoli',
        'ska_name' => 'broccoska',
        'image' => 'https://tippinthescales.files.wordpress.com/2011/07/broccoli-large.jpg'
    ),
    'brussels-ska' => array(
        'name' => 'brussels sprouts',
        'ska_name' => 'brussels ska',
        'image' => 'https://www.hort.purdue.edu/ext/senior/vegetabl/images/large/brusselssprouts.jpg'
    ),
    'skabbage' => array(
        'name' => 'cabbage',
        'ska_name' => 'skabbage',
        'image' => 'http://kudimarket.com/wp-content/uploads/2015/01/Cabbage-Large-3-Pieces-500x372.jpg'
    ),
    'skalabrese' => array(
        'name' => 'calabrese',
        'ska_name' => 'skalabrese',
        'image' => 'http://a4.img.bidorbuy.co.za/image/upload/user_images/651/390651_090516130904_Broccoli2.jpg'
    ),
    'skannabis' => array(
        'name' => 'cannabis',
        'ska_name' => 'skannabis',
        'image' => 'http://howtogrowmarijuana.com/wp-content/uploads/2012/12/marijuana-nutrient-burn.jpeg'
    ),
    'skarrots' => array(
        'name' => 'carrots',
        'ska_name' => 'skarrots',
        'image' => 'http://www.devonfresh.com/images/carrots.jpg'
    ),
    'skaliflower' => array(
        'name' => 'cauliflower',
        'ska_name' => 'skaliflower',
        'image' => 'http://vegnews.com/web/uploads/asset/3956/file/recipeclub.cauliflower.large.jpg'
    ),
    'skalery' => array(
        'name' => 'celery',
        'ska_name' => 'skalery',
        'image' => 'http://www.charliesfruitmarket.com.au/wp-content/uploads/2012/10/celeryLARGE160112.jpg'
    ),
    'skard' => array(
        'name' => 'chard',
        'ska_name' => 'skard',
        'image' => 'http://cdn3.volusion.com/mzlnx.cwahr/v/vspfiles/photos/SWISS-CHARD-LARGE-WHITE-RIBBED-4.jpg'
    )
);

$app->get('/', function (Silex\Application $app) use ($vegetables) {
    $vegetable = array_rand($vegetables);
    return $app['twig']->render('index.twig', array(
        'vegetable' => $vegetables[$vegetable]
    ));
});

$app->run();