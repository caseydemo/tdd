<?
namespace App;

/**
 * 
 */
class Article {

    public $title;

    // /[^\w]+/ # any non characters
    // '/\s+/   # any white space

    public function getSlug() {
        $raw_title = preg_replace('/\s+/', '_', $this->title);
        $slug = trim(preg_replace('/[^\w]+/', "", $raw_title), "_");
        return $slug;
    }

    // test

}