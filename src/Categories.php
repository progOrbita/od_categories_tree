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

}
