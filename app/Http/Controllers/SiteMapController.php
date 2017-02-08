<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\PostCategoria;
use App\Models\Galeria;
use App\Models\Pagina;
use App;

class SiteMapController extends Controller
{
	private $now;
	public function __construct()
	{
		$this->now = Carbon::now()->toDateTimeString();
	}	

    public function index()
    {

        // create new sitemap object
        $sitemap = App::make("sitemap");

        // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
        // by default cache is disabled
        $sitemap->setCache('laravel.sitemap', 60);

        // check if there is cached sitemap and build new only if is not
        if (!$sitemap->isCached()) {
            // add item to the sitemap (url, date, priority, freq)
            $sitemap->add(route('site.index'),$this->now, '1.0', 'daily');
            $sitemap->add(route('site.sobre'), $this->now, '0.9', 'monthly');
            $sitemap->add(route('site.contato'), $this->now, '0.9', 'monthly');
            $sitemap->add(route('site.modalidades'), $this->now, '0.9', 'monthly');
            $sitemap->add(route('site.planos'), $this->now, '0.9', 'monthly');
            $sitemap->add(route('site.blog.index'), $this->now, '0.9', 'monthly');

            // add item with translations (url, date, priority, freq, images, title, translations)
            // get all posts from db
            $categorias = PostCategoria::where('ativo',true)->orderBy('created_at', 'desc')->get();
            // 
            foreach ($categorias as $categoria) {
                $sitemap->add($categoria->link, $categoria->updated_at,01, 'monthly');
            }
            $posts = Post::where('ativo',true)->orderBy('created_at', 'desc')->get();
            // add every post to the sitemap
            foreach ($posts as $post) {
                $sitemap->add($post->link(), $post->updated_at,01, 'monthly');
            }
        }

        // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
        return $sitemap->render('xml');
    }
}
