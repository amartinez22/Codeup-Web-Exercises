<?php
// require_once "env.php";
// require_once "db_connect.php";
// $connection->exec("TRUNCATE national_parks");
// // get the contents of the CSV as a string
// $contents = file_get_contents('national_parks.csv');
// // get an array of all the rows
// $parks = explode("\n", trim($contents));
// // pull off the heading
// array_shift($parks);
// // trim each 
// $parks = array_map('trim', $parks);
// foreach($parks as $park) {
//     $park = explode(",", $park);
//     $statement = "INSERT INTO parks (name, location, date_established, area_in_acres) VALUES ('{$park[0]}', '{$park[1]}', '{$park[2]}', '{$park[3]}')";
    
//     $connection->exec($statement);
// }
require_once "env.php";
// In that file use PDO to connect to your parks_db
$dbc = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
// First, add a query to delete all the records from national_parks

$dbc->exec('TRUNCATE TABLE national_parks');


$statement = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
VALUES ('Acadia', 'Maine','1919',47389.67,'Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes.'),

('American Samoa','American Samoa','1901',9000.00,'The southernmost National Park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches.'),

('Arches','Utah','1929',76518.98,'This site features more than 2,000 natural sandstone arches, with some of the most popular arches in the park being Delicate Arch, Landscape Arch and Double Arch.'),

('Badlands','South Dakota','1978',242755.94,'The Badlands are a collection of buttes, pinnacles, spires, and mixed grass prairies.'),

('Big Bend','Texas','1944',801163.21,'Named for the prominent bend in the Rio Grande along the US Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert.'),

('Biscayne','Florida','1980',172924.07,'Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs.'),

('Black Canyon of the Gunnison','Colorado','1999',32950.03,'The park protects a quarter of the Gunnison River, which slices sheer canyon walls from dark Precambrian era rock.'),

('Bryce Canyon','Utah','1928',35835.08,'Bryce Canyon is a geological amphitheater on the Paunsaugunt Plateau with hundreds of tall, multicolored sandstone hoodoos formed by erosion.'),

('Canyonlands','Utah','1964',337597.83,'This landscape was eroded into a maze of canyons, buttes, and mesas by the combined efforts of the Colorado River, Green River, and their tributaries.'),

('Capitol Reef','Utah','1971',241904.26,'The parks Waterpocket Fold is a 100 mile, 160 km monocline that exhibits the earths diverse geologic layers.'),

('Carlsbad Caverns','New Mexico','1930', 46766.45,'Carlsbad Caverns has 117 caves, the longest of which is over 120 miles, 190 km long.'),

('Channel Islands','California','1980',249561.00,'Five of the eight Channel Islands are protected, and half of the parks area is underwater.'),

('Congaree','South Carolina','2003',26545.86,'On the Congaree River, this park is the largest portion of old growth floodplain forest left in North America.'),

('Crater Lake','Oregon','1902',183224.05,'Crater Lake lies in the caldera of an ancient volcano called Mount Mazama that collapsed 7,700 years ago.'),

('Cuyahoga Valley','Ohio','2000',32860.73,'This park along the Cuyahoga River has waterfalls, hills, trails, and exhibits on early rural living.'),

('Death Valley','California Nevada','1994',3372401.96,'Death Valley is the hottest, lowest, and driest place in the United States.'),

('Denali','Alaska','1917',4740911.72,'Centered on Denali, the tallest mountain in North America, Denali is serviced by a single road leading to Wonder Lake.'),

('Dry Tortugas','Florida','1992',64701.22,'The islands of the Dry Tortugas, at the westernmost end of the Florida Keys, are the site of Fort Jefferson, a Civil War era fort that is the largest masonry structure in the Western Hemisphere.'),

('Everglades','Florida','1934',1508537.90,'The Everglades are the largest tropical wilderness in the United States.'),

('Gates of the Arctic','Alaska','1980',7523897.74,'The countrys northernmost park protects an expanse of pure wilderness in Alaskas Brooks Range and has no park facilities.'),

('Glacier','Montana','1910',1013572.41,'The U.S. half of Waterton Glacier International Peace Park, this park includes 26 glaciers and 130 named lakes surrounded by Rocky Mountain peaks.'),

('Glacier Bay','Alaska','1980',3224840.31,'Glacier Bay contains tidewater glaciers, mountains, fjords, and a temperate rainforest, and is home to large populations of grizzly bears, mountain goats, whales, seals, and eagles.'),

('Grand Canyon','Arizona','1919',1217403.32,'The Grand Canyon, carved by the mighty Colorado River, is 277 miles 446 km long.'),

('Grand Teton','Wyoming','1929',309994.66,'Grand Teton is the tallest mountain in the Teton Range.'),

('Great Basin','Nevada','1986',77180.00,'Based around Nevadas second tallest mountain.'),

('Great Sand Dunes','Colorado','2004',42983.74,'The tallest sand dunes in North America.'),

('Great Smoky Mountains','North Carolina Tennessee','1934',521490.13,'The Great Smoky Mountains, part of the Appalachian Mountains, span a wide range of elevations, making them home to over 400 vertebrate species, 100 tree species, and 5000 plant species.'),

('Guadalupe Mountains','Texas','1966',86415.97,'This park contains Guadalupe Peak, the highest point in Texas, as well as the scenic McKittrick Canyon filled with bigtooth maples, a corner of the arid Chihuahuan Desert.'),

('Haleakalā','Hawaii','1916',29093.67,'The Haleakalā volcano on Maui features a very large crater with numerous cinder cones, Hosmers Grove of alien trees, the Kipahulu sections scenic pools of freshwater fish, and the native Hawaiian goose.'),

('Hawaii Volcanoes','Hawaii','1916',323431.38,'This park on the Big Island protects the Kīlauea and Mauna Loa volcanoes, two of the worlds most active geological features.'),

('Hot Springs','Arkansas','1921',5549.75,'Hot Springs was established by act of Congress as a federal reserve on April 20 1832.'),

('Isle Royale','Michigan','1940',571790.11,'The largest island in Lake Superior is a place of isolation and wilderness.'),

('Joshua Tree','California','1994',789745.47,'Covering large areas of the Colorado and Mojave Deserts and the Little San Bernardino Mountains, this desert landscape is populated by vast stands of Joshua trees.'),

('Katmai','Alaska','1980',3674529.68,'This park on the Alaska Peninsula protects the Valley of Ten Thousand Smokes, an ash flow formed by the 1912 eruption of Novarupta, as well as Mount Katmai.'),

('Kenai Fjords','Alaska','1980',669982.99,'Near Seward on the Kenai Peninsula, this park protects the Harding Icefield and at least 38 glaciers and fjords stemming from it.'),

('Kings Canyon','California','1940',461901.20,'Home to several giant sequoia groves and the General Grant Tree, the worlds second largest measured tree, this park also features part of the Kings River.'),

('Kobuk Valley','Alaska','1980',1750716.50,'Kobuk Valley protects 61 miles, 98 km of the Kobuk River and three regions of sand dunes.'),

('Lake Clark','Alaska','1980',2619733.21,'The region around Lake Clark features four active volcanoes, including Mount Redoubt, as well as an abundance of rivers, glaciers, and waterfalls.'),

('Lassen Volcanic','California','1916',106372.36,'Lassen Peak, the largest plug dome volcano in the world, is joined by all three other types of volcanoes in this park shield, cinder dome, and composite.'),

('Mammoth Cave','Kentucky','1941',52830.19,'With more than 400 miles 640 km of passageways explored, Mammoth Cave is the worlds longest known cave system.'),

('Mesa Verde','Colorado','1906',52121.93,'This area constitutes over 4,000 archaeological sites of the Ancestral Puebloan people, who lived here and elsewhere in the Four Corners region for at least 700 years.'),

('Mount Rainier','Washington','1901',235625.00,'Mount Rainier, an active stratovolcano, is the most prominent peak in the Cascades, and is covered by 26 named glaciers including Carbon Glacier and Emmons Glacier, the largest in the contiguous United States.'),

('North Cascades','Washington','1968',504780.94,'This complex encompasses two units of the National Park itself as well as the Ross Lake and Lake Chelan National Recreation Areas.'),

('Olympic','Washington','1938',922650.86,'Situated on the Olympic Peninsula, this park includes a wide range of ecosystems from Pacific shoreline to temperate rainforests to the alpine slopes of Mount Olympus.'),

('Petrified Forest','Arizona','1962',93532.57,'This portion of the Chinle Formation has a large concentration of 225 million year old petrified wood.'),

('Pinnacles','California','2013',26605.73,'Named for the eroded leftovers of a portion of an extinct volcano, the parks massive black and gold monoliths of andesite and rhyolite.'),

('Redwood','California','1968',112512.05,'This park and the comanaged state parks protect almost half of all remaining coastal redwoods.'),

('Rocky Mountain','Colorado','1915',265828.41,'Bisected north to south by the Continental Divide.'),

('Saguaro','Arizona','1994',91439.71,'Split into the separate Rincon Mountain and Tucson Mountain districts.'),

('Sequoia','California','1901',404051.17,'This park protects the Giant Forest, which boasts some of the worlds largest trees.'),

('Shenandoah','Virginia','1926',199045.23,'Shenandoahs Blue Ridge Mountains are covered by hardwood forests that teem with a wide variety of wildlife.'),

('Theodore Roosevelt','North Dakota','1978',70446.89,'This region that enticed and influenced President Theodore Roosevelt consists of a park of three units in the northern badlands.'),

('Virgin Islands','United States Virgin Islands','1956',14688.87,'This island park on Saint John preserves Taíno archaeological sites and the ruins of sugar plantations from Columbus time.'),

('Voyageurs','Minnesota','1971',218200.17,'This park protecting four lakes near the Canada US border is a site for canoeing, kayaking, and fishing.'),

('Wind Cave','South Dakota','1903',28295.03,'Wind Cave is distinctive for its calcite fin formations called boxwork.'),

('Wrangell St. Elias','Alaska','1980',8323147.59,'An over 8 million acres 32,375 km2 plot of mountainous country the largest National Park.'),

('Yellowstone','Wyoming Montana Idaho','1901',2219790.71,'Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including boiling mud pots.'),

('Yosemite','California','1901',761266.19,'Yosemite features sheer granite cliffs, exceptionally tall waterfalls.'),

('Zion','Utah','1919',146597.60,'Located at the junction of the Colorado Plateau.');";

$stmt = $dbc->prepare($statement);

$stmt->execute();




