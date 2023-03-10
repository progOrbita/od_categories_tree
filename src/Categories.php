<?php

class Categories
{
    public $id_root;
    private $id_lang;
    private $categories;
    private $parentChildren;

    public function __construct(int $id_lang)
    {
        $this->lookRootCat();
        $this->id_lang = $id_lang;
        $this->getCategories();
    }

    /**
     * look for root category of our db
     */

    private function lookRootCat()
    {
        $this->id_root = (int) Db::getInstance()->getValue("SELECT id_category FROM ps_category WHERE is_root_category=1");
    }

    /**
     * get all categories of our db and save the info on two arrays
     */

    private function getCategories()
    {
        $exe = Db::getInstance()->executeS("SELECT ps_category.id_category, ps_category.id_parent, ps_category_lang.name 
        FROM ps_category 
        LEFT JOIN ps_category_lang ON ps_category.id_category=ps_category_lang.id_category 
        WHERE ps_category_lang.id_lang=" . $this->id_lang);
        foreach ($exe as $key) {
            $this->categories[$key["id_category"]] = ["name" => $key["name"], "id_parent" => $key["id_parent"]];
            $this->parentChildren[$this->categories[$key["id_category"]]['id_parent']][] = $key["id_category"];
        }
    }

}
