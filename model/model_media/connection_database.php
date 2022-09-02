<?php
require_once('libraries/database.php');

class Product
{
	public int $id_product;
	public string $name_product;
	public string $description_product;
    public string $name_category;
    public string $link_image_product;
    public float $price_product;
    public bool $is_favorite_product;

    public function __construct(int $id_product, string $name_product, string $description_product, string $name_category, string $link_image_product, float $price_product, bool $is_favorite_product) {
        $this->id_product = $id_product;
        $this->name_product = $name_product;
        $this->description_product = $description_product;
        $this->name_category = $name_category;
        $this->link_image_product = $link_image_product;
        $this->price_product = $price_product;
        $this->is_favorite_product = $is_favorite_product;
    }
}

class Article extends Product{
    public String $article_size;
	public int $article_quantity;
	public float $article_wishedSizeDim1;
    public float $article_wishedSizeDim2;
    public float $article_wishedSizeDim3;
    public float $article_priceSize;
    public float $article_dimensionsPrice;

    public function __construct(int $id_product, string $name_product, string $description_product, string $name_category, string $link_image_product, float $price_product, bool $is_favorite_product,
    String $article_size,int $article_quantity,float $article_wishedSizeDim1=0, float $article_wishedSizeDim2=0,  float $article_wishedSizeDim3=0) {
        $this->article_size = $article_size;
        $this->article_quantity = $article_quantity;
        $this->article_wishedSizeDim1 = $article_wishedSizeDim1;
        $this->article_wishedSizeDim2 = $article_wishedSizeDim2;
        $this->article_wishedSizeDim3 = $article_wishedSizeDim3;
        $this->article_priceSize = floatval($this->get_article_priceSize($article_size));
        $this->article_dimensionsPrice = floatval($this->get_dimensionsPrice($article_quantity, $price_product, $this->article_priceSize));
        parent::__construct($id_product, $name_product, $description_product, $name_category,  $link_image_product,  $price_product,  $is_favorite_product);
        
    }


    public function get_article_priceSize($article_size):float{
        $article_priceSize = 1;
        switch ($article_size) {
            case "size1":
                $article_priceSize = 0.2;
                break;
            case "size2":
                $article_priceSize = 0.5;
                break;
            case "size3":
                $article_priceSize = 1;
                break;
            default:
                $article_priceSize = floatval(($this->article_wishedSizeDim1)*0.01) * floatval(($this->article_wishedSizeDim2)*0.01);
        }
        return  $article_priceSize;
    }
    

    public function get_dimensionsPrice($article_quantity, $article_squareMeterPrice, $article_dimensions ):float{
        return $article_quantity*$article_squareMeterPrice*$article_dimensions;
      }

}

class Category
{
	public int $id_categoy;
	public string $name_category;
	
    public function __construct(int $id_categoy,string $name_category) {
        $this->id_categoy = $id_categoy;
        $this->name_category = $name_category;
    }
}

class Project
{
	public int $id_project;
	public string $link_image_project;

    public function __construct(int $id_project,string $link_image_project) {
        $this->id_project = $id_project;
        $this->link_image_project = $link_image_project;
    }
}

class User
{
	public int $id_user;
	public string $civility_user;
	public string $name_user;
    public string $firstname_user;
    public string $email_user;
    public string $socio_professional_category_user;
    public string $address_user;
    public int $postal_code_user;
    public string $city_user;
    public string $country_user;
    public string $phone_number_user;
    public String $birthday_user;
    public string $password_user;
    public string $link_image_profil_user;

    public function __construct(int $id_user,string $civility_user,string $name_user,string $firstname_user,string $email_user, string $socio_professional_category_user, string $address_user, int $postal_code_user, string $city_user, string $country_user, string $phone_number_user, String $birthday_user, string $password_user, string $link_image_profil_user) {
        $this->id_user = $id_user;
        $this->name_user = $name_user;
        $this->firstname_user = $firstname_user;
        $this->email_user = $email_user;
        $this->socio_professional_category_user = $socio_professional_category_user;
        $this->address_user = $address_user;
        $this->postal_code_user = $postal_code_user;
        $this->city_user = $city_user;
        $this->country_user = $country_user;
        $this->phone_number_user = $phone_number_user;
        $this->birthday_user = $birthday_user;
        $this->password_user = $password_user;
        $this->link_image_profil_user = $link_image_profil_user;
        
    }

}

class CatalogRepository
{
	protected static DatabaseConnection $connection;

    public function __construct() {
        self::$connection = new DatabaseConnection();
    }
}

class CatalogProducts extends CatalogRepository {

    public static array $poductsArray;

    public function __construct() {
        self::$connection = new DatabaseConnection();
        self::$poductsArray = self::get_catalog();
    }

    private static function get_catalog():array
    {
    $sqlQuery = 'SELECT id_product, name_product, description_product, image_product, price_product, t_categories.name_category, is_favorite_product
    FROM t_products
    INNER JOIN t_categories
    ON t_products.fk_id_category_product = t_categories.id_categoy';
    $productsStatement = self::$connection->getConnection()->prepare($sqlQuery);
    $productsStatement->execute();
    $catalog = $productsStatement->fetchAll();
    
    $products = array();
    foreach($catalog as $catalog_product){
        $product = new Product($catalog_product['id_product'],$catalog_product['name_product'], $catalog_product['description_product'], $catalog_product['name_category'], $catalog_product['image_product'], $catalog_product['price_product'], $catalog_product['is_favorite_product']);
        $products[] = $product;
    }
    return $products;
    }

    public function check_existing_product($productNameSelected):bool
    {
        $products = self::get_catalog();
        $productChecked = FALSE;
        foreach ($products as $product)
            {
                if ($product->name_product == $productNameSelected ){
                    $productChecked = TRUE;
                }
        } 
        if (empty($productChecked)){
            throw new Exception("le nom du produit n'a pas été bien renseigné ou n'existe pas");
        }
        return $productChecked;
    }

    public function select_product($productNameSelected):Product{
        $products = self::get_catalog();
        $productChecked;
        foreach ($products as $product)
            {
                if ($product->name_product == $productNameSelected ){
                    $productChecked = $product;
                }
        } 
        if (empty($productChecked)){
            throw new Exception("le nom du produit n'a pas été bien renseigné ou n'existe pas");
        }
        return $productChecked;
    }


    public function select_product_existing($productSelected):array{
        $products = self::get_catalog();
        $productChecked  =  array();
        foreach ($products as $product)
            {
                if ($product->name_product == $productSelected ){
                    $productChecked['name'] = $product->name_product;
                    $productChecked['description'] = $product->description_product;
                    $productChecked['category'] =  $product->name_category;
                    $productChecked['price'] = $product->price_product;
                    $productChecked['picture'] =  $product->link_image_product;
                }
        } 
        if (empty($productChecked)){
            throw new Exception("le nom du produit n'a pas été bien renseigné ou n'existe pas");
        }
        return $productChecked;
    }

    public function generate_article_with_product_existing($product_name, $product_size, $product_quantity):Article{
        $product_to_check_name = $product_name;
        $products = (new CatalogProducts())::$poductsArray;
        foreach ($products as $product)
            {
                if ($product->name_product == $product_to_check_name ){
                    $articleGenerated = new Article ($product->id_product, $product->name_product, $product->description_product, $product->name_category, $product->link_image_product, $product->price_product, $product->is_favorite_product,
                    $product_size,$product_quantity,$product_wishedSizeDim1=0, $product_wishedSizeDim2=0, $product_wishedSizeDim3=0);
                }
        } 
        if (!isset($articleGenerated)){
            throw new Exception("le nom du produit n'a pas été bien renseigné ou n'existe pas");
        }
        return $articleGenerated;
    }


}

class CatalogCategories extends CatalogRepository{

    public static array $categoriesArray;

    public function __construct() {
        self::$connection = new DatabaseConnection();
        self::$categoriesArray = self::get_categories();
    }

    private static function get_categories(): array
    {    
    $sqlQuery = 'SELECT id_categoy, name_category FROM t_categories';
    
    $categoriesStatement = self::$connection->getConnection()->prepare($sqlQuery);
    $categoriesStatement->execute();
    $categories_catalog = $categoriesStatement->fetchAll();
    
    $categories = array();
    foreach($categories_catalog as $category_catalog){
        $category = new Category($category_catalog['id_categoy'], $category_catalog['name_category']);
        $categories[] = $category;
    }
    
    return $categories;
    }
}

class CatalogProjects extends CatalogRepository{ 
    public static array $projectsArray;

    public function __construct() {
        self::$connection = new DatabaseConnection();
        self::$projectsArray = self::get_projects();
    }
    
    private static function get_projects(): array
    {
    
    $sqlQuery = 'SELECT id_project, image_project FROM t_projects';
    
    $projectsStatement = self::$connection->getConnection()->prepare($sqlQuery);
    $projectsStatement->execute();
    $projects_catalog= $projectsStatement->fetchAll();
    
    $projects = array();
    foreach($projects_catalog as $project_catalog){
        $project = new Project( $project_catalog['id_project'], $project_catalog['image_project']);
        $projects[] = $project;
    }
    return $projects;
    }
}

class CatalogUsers extends CatalogRepository{
    
    public static array $usersArray;

    public function __construct() {
        self::$connection = new DatabaseConnection();
        self::$usersArray = self::get_users();
    }

    private static function get_users(){
    
        $sqlQuery = 'SELECT id_user, t_civility.sex_abreviation_civility, name_user, firstname_user, email_user, t_socio_professional_category.name_socio_professional_category, address_user, postal_code_user,city_user, t_country.name_country, phone_number_user, birthday_user, password_user, image_profil_user
        FROM t_users
        INNER JOIN t_civility
        ON t_users.fk_id_civility_user = t_civility.id_civility
        INNER JOIN t_socio_professional_category
        ON t_users.fk_id_socio_professional_category_user = t_socio_professional_category.id_socio_professional_category
        INNER JOIN t_country
        ON t_users.fk_id_country_user = t_country.id_country';
        
        $usersStatement = self::$connection->getConnection()->prepare($sqlQuery);
        $usersStatement->execute();
        $users_bd = $usersStatement->fetchAll();
        
        
        $users = array();
        foreach($users_bd as $user_bd){
            $user = new User($user_bd['id_user'], $user_bd['sex_abreviation_civility'],$user_bd['name_user'],$user_bd['firstname_user'],$user_bd['email_user'],$user_bd['name_socio_professional_category'],$user_bd['address_user'], $user_bd['postal_code_user'],$user_bd['city_user'],  $user_bd['name_country'], $user_bd['phone_number_user'],$user_bd['birthday_user'],$user_bd['password_user'],  $user_bd['image_profil_user']);
            $users[] = $user;
        }
        return $users;
        }
    
    public function check_user_in_catalog(String $email, String $password){
        $users = self::get_users();
        $userChecked  =  array();
        foreach ($users as $user)
            {
                if ($user->email_user === $email &&  $user->password_user === $password){
                    $userChecked = $user;
                }
        } 
        if (empty($userChecked)){
            throw new Exception(sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',$email,$password));
        }
        return $userChecked;
    }
}


Class Cart{
    public array $cart;

    public function generate_article_with_product_existing($product_name, $product_size, $product_quantity):Article{
        $product_to_check_name = $product_name;
        $products = (new CatalogProducts())::$poductsArray;
        foreach ($products as $product)
            {
                if ($product->name_product == $product_to_check_name ){
                    $articleGenerated = new Article ($product->id_product, $product->name_product, $product->description_product, $product->name_category, $product->link_image_product, $product->price_product, $product->is_favorite_product,
                    $product_size,$product_quantity,$product_wishedSizeDim1=0, $product_wishedSizeDim2=0, $product_wishedSizeDim3=0);
                }
        } 
        if (!isset($articleGenerated)){
            throw new Exception("le nom du produit n'a pas été bien renseigné ou n'existe pas");
        }
        return $articleGenerated;
    }

    public function generate_article_client_size_with_product_existing($product_name, $product_size, $product_quantity,  $product_wishedSizeDim1, $product_wishedSizeDim2, $product_wishedSizeDim3):Article{
        $product_to_check_name = $product_name;
        $products = (new CatalogProducts())::$poductsArray;
        foreach ($products as $product)
            {
                if ($product->name_product == $product_to_check_name ){
                    $articleGenerated = new Article ($product->id_product, $product->name_product, $product->description_product, $product->name_category, $product->link_image_product, $product->price_product, $product->is_favorite_product,
                    $product_size,$product_quantity,  $product_wishedSizeDim1, $product_wishedSizeDim2, $product_wishedSizeDim3);
                }
        } 
        if (!isset($articleGenerated)){
            throw new Exception("le nom du produit n'a pas été bien renseigné ou n'existe pas");
        }
        return $articleGenerated;
    }


    public function product_add_standards_size($product_name, $product_size, $product_quantity){
        $test = (new CatalogProducts())->check_existing_product($product_name);
        if ($test === TRUE){
            $ArticleAdded = $this->generate_article_with_product_existing($product_name, $product_size, $product_quantity);
            self::$cart[] = $ArticleAdded;
        }    
      }
      
      function product_cart_add_sizeClient($product_name, $product_size, $product_quantity,  $product_wishedSizeDim1, $product_wishedSizeDim2, $product_wishedSizeDim3){
        $ArticleAdded = array();
        $test = (new CatalogProducts())->check_existing_product($product_name);
        if ($test === TRUE){
            $ArticleAdded = $this->generate_article_client_size_with_product_existing($product_name, $product_size, $product_quantity,  $product_wishedSizeDim1, $product_wishedSizeDim2, $product_wishedSizeDim3);
            $this->$cart = $ArticleAdded;
        }          
      }
    
    function product_to_delete(array $cart, String $name_product){ 
        $res = 0;
        foreach ($cart as $productCart) {
            if ($productCart->name_product===$name_product)
            {
                echo  $res;
                return $res;
            }
            $res += 1;
        }
    }
}


