<?
namespace App;

/**
 * 
 */
class Article {

    public $title;

    public function getSlug() {
        $slug = trim(preg_replace('/\s+/', "_", $this->title), "_");
        return $slug;
    }

    // test

}