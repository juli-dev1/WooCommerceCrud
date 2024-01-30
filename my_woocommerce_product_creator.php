<?php
/*
Plugin Name: My WooCommerce Product Creator
Description: This plugin creates WooCommerce products from JSON.
Version: 1.0.0
Author: Julian Alla
*/


defined( 'ABSPATH' ) || exit;

/** JSON DATA  **/
function getJsonData()
{
	$json = '[
		{
			"mtrl": "14603",
			"erpcode": "1000000",
			"sku": "HP7940",
			"vatid": "1410",
			"vatname": "ΦΠΑ 24%",
			"ean": "4066746031186",
			"variationname": "New Μποτάκι Adidas Hoops 3.0 Mid HP7940 Άσπρο",
			"pricer": "69.9",
			"webpricer": "66.01",
			"markid": "8024",
			"markname": "Adidas",
			"availability": "Παράδoση 4 έως 10 ημέρες",
			"productstatus": "draft",
			"backorders": "no",
			"onwebmtrl": "1",
			"activemtrl": "1",
			"webpublished": "1",
			"weboffer": "1",
			"activeean": "1",
			"publishonskroutz": "1",
			"newproduct": "1",
			"popular": "0",
			"onsale": "true",
			"sales": "0",
			"weight": "0",
			"width": "0",
			"length": "0",
			"height": "0",
			"sizeid": "9016",
			"sizecode": "44",
			"sizename": "44",
			"categorypaths": "Ανδρας > Παπούτσια > Μποτάκια",
			"mainimg": "https://ipatios.gr/wp-content/uploads/2023/05/Μποτάκι-Adidas-Hoops-3.0-Mid-HP7940-Άσπρο-6.jpg",
			"media_gallery": "https://ipatios.gr/wp-content/uploads/2023/05/Μποτάκι-Adidas-Hoops-3.0-Mid-HP7940-Άσπρο-6.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Μποτάκι-Adidas-Hoops-3.0-Mid-HP7940-Άσπρο-7.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Μποτάκι-Adidas-Hoops-3.0-Mid-HP7940-Άσπρο-4.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Μποτάκι-Adidas-Hoops-3.0-Mid-HP7940-Άσπρο-2.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Μποτάκι-Adidas-Hoops-3.0-Mid-HP7940-Άσπρο-8.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Μποτάκι-Adidas-Hoops-3.0-Mid-HP7940-Άσπρο-3.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Μποτάκι-Adidas-Hoops-3.0-Mid-HP7940-Άσπρο-5.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Μποτάκι-Adidas-Hoops-3.0-Mid-HP7940-Άσπρο-1.jpg",
			"cccshortdesctext": "<ul>\n<li><strong>Σύνθεση: </strong>Οικολογικό δέρμα</li>\n<li><strong>Χρώμα: </strong>Άσπρο</li>\n<li><strong>Δέσιμο: </strong>Κορδόνια</li>\n<li><strong>Κανονική εφαρμογή</strong></li>\n<li class=\"gl-vspace-bpall-small\">Υφασμάτινη γούνινη επένδυση</li>\n</ul>\n<p>Μποτάκι της Adidas με άνω μέρος από οικολογικό δέρμα σε άσπρο χρώμα . Διαθέτει μαλακό εσωτερικό πάτο από EVA και εξωτερική σόλα από καουτσούκ. Ένα παπούτσι που θα σου χαρίσει άνεση και στυλ στις καθημερινές σας δραστηριότητες.</p>",
			"upddate": "2024-01-16 18:58:13",
			"insdate": "2023-06-06 12:41:27",
			"qtyax1": "0",
			"qtyax2": "0",
			"actualqty": "0",
			"totalqty": "1",
			"autopoststatus": "draft",
			"autoavailability": "Εξαντλημένο"
		},
		{
			"mtrl": "14606",
			"erpcode": "1000003",
			"sku": "H4L21-SAM004-20S-BLACK",
			"vatid": "1410",
			"vatname": "ΦΠΑ 24%",
			"ean": "5902818567681",
			"variationname": "Σανδάλια 4F H4L21-SAM004-20S Μαύρο",
			"pricer": "44.99",
			"webpricer": "0",
			"markid": "8093",
			"markname": "4F",
			"availability": "Παράδoση 4 έως 10 ημέρες",
			"productstatus": "publish",
			"backorders": "no",
			"onwebmtrl": "1",
			"activemtrl": "1",
			"webpublished": "1",
			"weboffer": "1",
			"activeean": "1",
			"publishonskroutz": "1",
			"newproduct": "1",
			"popular": "0",
			"onsale": "true",
			"sales": "0",
			"weight": "0",
			"width": "0",
			"length": "0",
			"height": "0",
			"sizeid": "9022",
			"sizecode": "43",
			"sizename": "43",
			"categorypaths": "Ανδρας > Παπούτσια > Σανδάλια",
			"mainimg": "https://ipatios.gr/wp-content/uploads/2023/05/Σανδάλια-4F-H4L21-SAM004-20S-Μαύρο-1.jpg",
			"media_gallery": "https://ipatios.gr/wp-content/uploads/2023/05/Σανδάλια-4F-H4L21-SAM004-20S-Μαύρο-1.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Σανδάλια-4F-H4L21-SAM004-20S-Μαύρο-2.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Σανδάλια-4F-H4L21-SAM004-20S-Μαύρο-3.jpg",
			"cccshortdesctext": "<ul>\n<li><strong>Σύνθεση: </strong>Συνθετικό υλικό</li>\n<li><strong>Χρώμα: </strong>Μαύρο</li>\n<li><strong>Ύψος σόλας: </strong>4 cm</li>\n<li>Κλείσιμο με velcro</li>\n</ul>\n<p>Ανδρικά σανδάλια 4F με άνω μέρος από συνθετικό και <span>μαλακή σόλα από αφρό EVA για καλύτερη απορρόφηση κραδασμών. </span></p>",
			"upddate": "2023-07-20 10:45:51",
			"insdate": "2023-06-06 12:41:29",
			"qtyax1": "2",
			"qtyax2": "0",
			"actualqty": "2",
			"totalqty": "2",
			"autopoststatus": "publish",
			"autoavailability": "Άμεσα διαθέσιμο"
		},
		{
			"mtrl": "15085",
			"erpcode": "1000482",
			"sku": "3025523-003",
			"vatid": "1410",
			"vatname": "ΦΠΑ 24%",
			"ean": "42756_284317",
			"variationname": "Sneaker Under Armour Charged Rogue 3 3025523-003 Μαύρο",
			"pricer": "97",
			"webpricer": "77.6",
			"markid": "8070",
			"markname": "Under Armour",
			"availability": "Παράδoση 4 έως 10 ημέρες",
			"productstatus": "publish",
			"backorders": "no",
			"onwebmtrl": "1",
			"activemtrl": "1",
			"webpublished": "1",
			"weboffer": "1",
			"activeean": "1",
			"publishonskroutz": "1",
			"newproduct": "1",
			"popular": "0",
			"onsale": "true",
			"sales": "0",
			"weight": "0",
			"width": "0",
			"length": "0",
			"height": "0",
			"sizeid": "9023",
			"sizecode": "42.5",
			"sizename": "42.5",
			"categorypaths": "Ανδρας > Παπούτσια > Τρέξιμο",
			"mainimg": "https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-1.jpg",
			"media_gallery": "https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-1.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-2.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-3.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-4.jpg",
			"cccshortdesctext": "<ul>\n<li><strong>Σύνθεση: </strong>Ύφασμα</li>\n<li><strong>Χρώμα: </strong>Μαύρο</li>\n<li><strong>Ύψος σόλας: </strong>3 cm</li>\n<li><strong>Δέσιμο: </strong>Κορδόνια</li>\n<li>Αντιμικροβιακό πάτο</li>\n<li><strong>Αδιάβροχο</strong></li>\n</ul>\n<p>Sneaker της Under Armour με άνω μέρος από ύφασμα υψηλής ποιότητας και συνθετικές επενδύσεις. Διαθέτει τεχνολογία αδιαβροχοποίησης <b>Storm </b>και ενδιάμεση σόλα <strong>Charged Cushioning®</strong> για περισσότερη άνεση και αντικραδασμική δράση. Επιπλέον η εξωτερική σόλα από καουτσούκ προσφέρει ανθεκτικότητα και ιδανική πρόσφυση. Ένα ελαφρύ και ανθεκτικό παπούτσι για τις αθλητικές δραστηριότητες.</p>\n<p>&nbsp;</p>",
			"upddate": "2024-01-18 12:35:23",
			"insdate": "2023-06-06 12:54:44",
			"qtyax1": "0",
			"qtyax2": "0",
			"actualqty": "0",
			"totalqty": "0",
			"autopoststatus": "draft",
			"autoavailability": "Εξαντλημένο"
		},
		{
			"mtrl": "15085",
			"erpcode": "1000482",
			"sku": "3025523-003",
			"vatid": "1410",
			"vatname": "ΦΠΑ 24%",
			"ean": "42756_284317",
			"variationname": "Sneaker Under Armour Charged Rogue 3 3025523-003 Μαύρο",
			"pricer": "97",
			"webpricer": "77.6",
			"markid": "8070",
			"markname": "Under Armour",
			"availability": "Παράδoση 4 έως 10 ημέρες",
			"productstatus": "publish",
			"backorders": "no",
			"onwebmtrl": "1",
			"activemtrl": "1",
			"webpublished": "1",
			"weboffer": "1",
			"activeean": "1",
			"publishonskroutz": "1",
			"newproduct": "1",
			"popular": "0",
			"onsale": "true",
			"sales": "0",
			"weight": "0",
			"width": "0",
			"length": "0",
			"height": "0",
			"sizeid": "903",
			"sizecode": "44.6",
			"sizename": "44.6",
			"categorypaths": "Ανδρας > Παπούτσια > Τρέξιμο",
			"mainimg": "https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-1.jpg",
			"media_gallery": "https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-1.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-2.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-3.jpg, https://ipatios.gr/wp-content/uploads/2023/05/Sneaker-Under-Armour-Charged-Rogue-3-3025523-003-Μαύρο-4.jpg",
			"cccshortdesctext": "<ul>\n<li><strong>Σύνθεση: </strong>Ύφασμα</li>\n<li><strong>Χρώμα: </strong>Μαύρο</li>\n<li><strong>Ύψος σόλας: </strong>3 cm</li>\n<li><strong>Δέσιμο: </strong>Κορδόνια</li>\n<li>Αντιμικροβιακό πάτο</li>\n<li><strong>Αδιάβροχο</strong></li>\n</ul>\n<p>Sneaker της Under Armour με άνω μέρος από ύφασμα υψηλής ποιότητας και συνθετικές επενδύσεις. Διαθέτει τεχνολογία αδιαβροχοποίησης <b>Storm </b>και ενδιάμεση σόλα <strong>Charged Cushioning®</strong> για περισσότερη άνεση και αντικραδασμική δράση. Επιπλέον η εξωτερική σόλα από καουτσούκ προσφέρει ανθεκτικότητα και ιδανική πρόσφυση. Ένα ελαφρύ και ανθεκτικό παπούτσι για τις αθλητικές δραστηριότητες.</p>\n<p>&nbsp;</p>",
			"upddate": "2024-01-18 12:35:23",
			"insdate": "2023-06-06 12:54:44",
			"qtyax1": "0",
			"qtyax2": "0",
			"actualqty": "0",
			"totalqty": "0",
			"autopoststatus": "draft",
			"autoavailability": "Εξαντλημένο"
		}
	]';

	$json = json_decode($json, true);
	return $json;
}


/** CATEGORIES  **/
function getCategoriesFromJson()
{
	$products = getJsonData();
	$categories = array_column($products, 'categorypaths');

	foreach ($categories as $categoryItems) {
		$categoryItems = explode(' > ', $categoryItems);
		foreach ($categoryItems as $categoryValue) {
			$categoryPlainValues[] = $categoryValue;
		}
	}
	$categoryList = array_unique($categoryPlainValues);
	return $categoryList;
}

function createCategories()
{
	$categoryValues = getCategoriesFromJson();
	foreach ($categoryValues as $value) {
		if (!checkCategoryByname($value)) {
			wp_insert_term($value, 'product_cat');
		}
	}
}

function checkCategoryByName($categoryName)
{
	$categories = get_terms(['hide_empty'   => false]);
	foreach ($categories as $category) {
		if ($category->taxonomy == 'product_cat' && $category->name == $categoryName) {
			return true;
		}
	}
	return false;
}

function getCategoryIdByName($categoryPaths)
{
	$output = array();
	$categoryPaths = explode(' > ', $categoryPaths);
	$categories = get_terms(['hide_empty'   => false]);
	foreach ($categories as $category) {
		if ($category->taxonomy == 'product_cat') {
			foreach ($categoryPaths as $categoryPath) {
				if ($category->name == $categoryPath) {
					$output[] = $category->term_id;
				}
			}
		}
	}
	return $output;
}

/** PRODUCTS  **/
function checkProductBySku($skuCode)
{
	$productID = wc_get_product_id_by_sku($skuCode);

	if ($productID) {
		return ['exist' => true, 'idProduct' => $productID];
	}
	return ['exist' => false, 'idProduct' => null];
}


function getProductSizeCodesBySku($productSku)
{
	$products = getJsonData();
	$sizeCodes = [];

	foreach ($products as $product) {
		if ($product['sku'] === $productSku) {
			$sizeCodes[] = $product['sizecode'];
		}
	}

	return $sizeCodes;
}

function getProductmediaGalleryIdsBySku($productSku)
{
	$products = getJsonData();
	$mediaGallery = [];
	foreach ($products as $product) {
		if ($product['sku'] === $productSku) {
			$mediaGalleryIds = [];
			$images = explode(', ', $product['media_gallery']);

			foreach ($images as $image) {
				$mediaGallery[] = $image;
			}
			array_shift($mediaGallery); // Remove the firt image in the media_gallery
			foreach ($mediaGallery as $image) {
				$mediaGalleryIds[]  = uploadFileByUrl($image);
			}
			return $mediaGalleryIds;
		}
	}
}

function createProducts()
{
	$products = getJsonData();
	foreach ($products as $newProduct) {

		$productExist = checkProductBySku($newProduct['sku']);
		if (!$productExist['exist']) {
			$product = new WC_Product_Variable();

			// Product name and Sku
			$product->set_name(isset($newProduct['variationname']) ? $newProduct['variationname'] : "");
			$product->set_sku(isset($newProduct['sku']) ? $newProduct['sku'] : "");

			// Prices
			$product->set_regular_price(isset($newProduct['pricer']) ? $newProduct['pricer'] : "");
			if (isset($newProduct['webpricer']) && $newProduct['webpricer'] > 0) {
				$product->set_sale_price($newProduct['webpricer']);
			}

			// Description and Short Description
			$product->set_short_description(isset($newProduct['cccshortdesctext']) ? $newProduct['cccshortdesctext'] : "");
			$product->set_description(isset($newProduct['cccshortdesctext']) ? $newProduct['cccshortdesctext'] : "");

			// Images and Gallery
			$product->set_image_id(uploadFileByUrl($newProduct['mainimg']));
			$galleryImagesIds = getProductmediaGalleryIdsBySku(isset($newProduct['sku']) ? $newProduct['sku'] : "");
			$product->set_gallery_image_ids($galleryImagesIds);

			// Backorders and Stock
			$product->set_backorders(isset($newProduct['backorders']) ? $newProduct['backorders'] : "");
			$product->set_stock_quantity(isset($newProduct['actualqty']) ? $newProduct['actualqty'] : "");
			$product->set_stock_status(isset($newProduct['autoavailability']) ? $newProduct['autoavailability'] : "");

			// Weight and Dimensions
			$product->set_weight(isset($newProduct['weight']) ? $newProduct['weight'] : '');
			$product->set_length(isset($newProduct['length']) ? $newProduct['length'] : '');
			$product->set_width(isset($newProduct['width']) ?  $newProduct['width']  : '');
			$product->set_height(isset($newProduct['height']) ? $newProduct['height'] : '');

			// Categories
			if (isset($newProduct['categorypaths'])) {
				$categoriesIds = getCategoryIdByName($newProduct['categorypaths']);
				$product->set_category_ids($categoriesIds);
			}

			$att_var = array();

			// Size Attribute
			if (isset($newProduct['sku'])) {
				$attribute = new WC_Product_Attribute();
				$attribute->set_name('ΜΕΓΕΘΟΣ');
				$attribute->set_options(getProductSizeCodesBySku($newProduct['sku']));
				$attribute->set_position(0);
				$attribute->set_visible(true);
				$attribute->set_variation(true);

				// $product->set_attributes(array($attribute));
				$att_var[] = $attribute;
			}
			// Brand Attribute
			if (isset($newProduct['markname'])) {
				$attribute = new WC_Product_Attribute();
				$attribute->set_name('BRAND');
				$attribute->set_options([$newProduct['markname']]);
				$attribute->set_position(1);
				$attribute->set_visible(true);
				$attribute->set_variation(false);
				$att_var[] = $attribute;
			}

			// Set Attributes to the Product
			$product->set_attributes($att_var);

			// Save New Product
			$product->save();

			// Size Variation
			if (isset($newProduct['sku']) && isset($newProduct['pricer'])) {
				$variation = new WC_Product_Variation();
				$variation->set_parent_id($product->get_id());
				$variation->set_attributes(getProductSizeCodesBySku($newProduct['sku']));
				$variation->set_regular_price(isset($newProduct['pricer']) ? $newProduct['pricer'] : "");
				if (isset($newProduct['webpricer']) && $newProduct['webpricer'] > 0) {
					$variation->set_sale_price($newProduct['webpricer']);
				}
				$variation->save();
			}
		} else {
			// Update Product
			$productId = $productExist['idProduct'];
			updateProducts($productId, $newProduct);
		}
	}
}


function updateProducts($productId, $newProduct)
{
	$product = new WC_Product_Variable($productId);

	// Product name and Sku
	$product->set_name(isset($newProduct['variationname']) ? $newProduct['variationname'] : "");
	$product->set_sku(isset($newProduct['sku']) ? $newProduct['sku'] : "");

	// Prices
	$product->set_regular_price(isset($newProduct['pricer']) ? $newProduct['pricer'] : "");
	if (isset($newProduct['webpricer']) && $newProduct['webpricer'] > 0) {
		$product->set_sale_price($newProduct['webpricer']);
	}

	// Description and Short Description
	$product->set_short_description(isset($newProduct['cccshortdesctext']) ? $newProduct['cccshortdesctext'] : "");
	$product->set_description(isset($newProduct['cccshortdesctext']) ? $newProduct['cccshortdesctext'] : "");

	// Images and Gallery
	// $product->set_image_id(uploadFileByUrl($newProduct['mainimg']));
	// $galleryImagesIds = getProductmediaGalleryIdsBySku(isset($newProduct['sku']) ? $newProduct['sku'] : "");
	// $product->set_gallery_image_ids($galleryImagesIds);

	// Backorders and Stock
	$product->set_backorders(isset($newProduct['backorders']) ? $newProduct['backorders'] : "");
	$product->set_stock_quantity(isset($newProduct['actualqty']) ? $newProduct['actualqty'] : "");
	$product->set_stock_status(isset($newProduct['autoavailability']) ? $newProduct['autoavailability'] : "");

	// Weight and Dimensions
	$product->set_weight(isset($newProduct['weight']) ? $newProduct['weight'] : '');
	$product->set_length(isset($newProduct['length']) ? $newProduct['length'] : '');
	$product->set_width(isset($newProduct['width']) ?  $newProduct['width']  : '');
	$product->set_height(isset($newProduct['height']) ? $newProduct['height'] : '');

	// Categories
	if (isset($newProduct['categorypaths'])) {
		$categoriesIds = getCategoryIdByName($newProduct['categorypaths']);
		$product->set_category_ids($categoriesIds);
	}

	$att_var = array();

	// Size Attribute
	if (isset($newProduct['sku'])) {
		$attribute = new WC_Product_Attribute();
		$attribute->set_name('ΜΕΓΕΘΟΣ');
		$attribute->set_options(getProductSizeCodesBySku($newProduct['sku']));
		$attribute->set_position(0);
		$attribute->set_visible(true);
		$attribute->set_variation(true);

		// $product->set_attributes(array($attribute));
		$att_var[] = $attribute;
	}
	// Brand Attribute
	if (isset($newProduct['markname'])) {
		$attribute = new WC_Product_Attribute();
		$attribute->set_name('BRAND');
		$attribute->set_options([$newProduct['markname']]);
		$attribute->set_position(1);
		$attribute->set_visible(true);
		$attribute->set_variation(false);
		$att_var[] = $attribute;
	}

	// Set Attributes to the Product
	$product->set_attributes($att_var);

	// Save New Product
	$product->save();

	// Size Variation
	if (isset($newProduct['sku']) && isset($newProduct['pricer'])) {
		$variation = new WC_Product_Variation();
		$variation->set_parent_id($product->get_id());
		$variation->set_attributes(getProductSizeCodesBySku($newProduct['sku']));
		$variation->set_regular_price(isset($newProduct['pricer']) ? $newProduct['pricer'] : "");
		if (isset($newProduct['webpricer']) && $newProduct['webpricer'] > 0) {
			$variation->set_sale_price($newProduct['webpricer']);
		}
		$variation->save();
	}
}

function deleteProducts()
{
	$products = wc_get_products(['limit' => 9999]);
	foreach ($products as $product) {
		$product->delete();
	}
}


/** FILES UPLOAD  **/
function checkIfFileAlreadyExists($filename)
{
	global $wpdb;
	$filename = basename($filename);
	$query = "SELECT COUNT(*) FROM {$wpdb->posts} WHERE guid LIKE'%$filename%'";
	echo $wpdb->get_var($query);
	$count = intval($wpdb->get_var($query));
	if ($count) {
		return true;
	}
	return false;
}

function uploadFileByUrl($image_url)
{

	// Check if file alreadyexists 
	// if (!checkIfFileAlreadyExists($image_url)) {
	// 	return;
	// }

	// it allows us to use download_url() and wp_handle_sideload() functions
	require_once(ABSPATH . 'wp-admin/includes/file.php');

	// download to temp dir
	$temp_file = download_url($image_url);

	if (is_wp_error($temp_file)) {
		return false;
	}

	// move the temp file into the uploads directory
	$file = array(
		'name'     => basename($image_url),
		'type'     => mime_content_type($temp_file),
		'tmp_name' => $temp_file,
		'size'     => filesize($temp_file),
	);
	$sideload = wp_handle_sideload(
		$file,
		array(
			'test_form'   => false // no needs to check 'action' parameter
		)
	);

	if (!empty($sideload['error'])) {
		// you may return error message if you want
		return false;
	}

	// it is time to add our uploaded image into WordPress media library
	$attachment_id = wp_insert_attachment(
		array(
			'guid'           => $sideload['url'],
			'post_mime_type' => $sideload['type'],
			'post_title'     => basename($sideload['file']),
			'post_content'   => '',
			'post_status'    => 'inherit',
		),
		$sideload['file']
	);

	if (is_wp_error($attachment_id) || !$attachment_id) {
		return false;
	}

	// update medatata, regenerate image sizes
	require_once(ABSPATH . 'wp-admin/includes/image.php');

	wp_update_attachment_metadata(
		$attachment_id,
		wp_generate_attachment_metadata($attachment_id, $sideload['file'])
	);

	return $attachment_id;
}



function initialConfig()
{
	createCategories();
	createProducts();
}


add_action( "activate_plugin", "initialConfig");
// add_action( "deactivate_plugin", "deleteProducts");




