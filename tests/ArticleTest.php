<?

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase {

    protected $article;

    protected function setUp(): void {
        $this->article = new App\Article;
    }

    public function test_title_is_empty_by_default() {
        $this->assertEmpty($this->article->title);
    }   

    public function test_slug_is_empty_with_no_title() {
        $this->assertSame($this->article->getSlug(), "");
    }

    public function test_slug_has_spaces_replaced_by_underscores() {
        
        $this->article->title = "An Example Title";

        $this->assertEquals($this->article->getSlug(), "An_Example_Title");

    }

    public function test_slug_has_spaces_replaced_by_single_underscore() {
        $this->article->title = "An      Example     \n     Title";
        $this->assertEquals($this->article->getSlug(), "An_Example_Title");
    }

    public function test_slug_does_not_start_or_end_with_underscore() {
        $this->article->title = " An Example   Title_";
        $this->assertEquals($this->article->getSlug(), 'An_Example_Title');
    }
}