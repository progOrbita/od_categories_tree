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

}
