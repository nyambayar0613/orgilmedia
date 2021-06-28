<?php


namespace App\Http\Controllers\Admin;
use App\Article;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use Illuminate\Http\Request;
use App\Helper\Helper;

class ArticleController extends Controller
{
    public function getArticleList() {
        $articles = DB::table('articles')
            ->where('is_deleted', 0)
            ->orderBy('id', 'DESC')
            ->paginate(10);

        $articleCount = DB::table('articles')
            ->where('is_deleted', 0)
            ->get();

        $count = count($articleCount);

        return view('admin.articles.articleList', compact('articles','count'));
    }

    public function getArticleAdd() {
        return view('admin.articles.articleAdd');
    }

    public function getArticleEdit($id) {
        $article = DB::table('articles')
            ->where('is_deleted', 0)
            ->where('id', $id)
            ->first();

        return view('admin.articles.articleEdit', compact('article'));
    }

    /* POST */
    public function articleInsert(Request $request) {
        $article = new Article();

        if ($request->hasFile('article_image')) {
            $fileName = Helper::imageUploader(request()->article_image, 'article', 1000, 662, 500, 331);
        } else {
            $fileName = 'no_image.jpg';
        }

        $article->article_title = $request->article_title;
        $article->article_image = $fileName;
        $article->article_description = $request->article_description;

        if ($article->save()) {
            return redirect()->route('admin.article.list');
        }
    }

    public function articleUpdate(Request $request) {
        $article = Article::find($request->id);
        $oldArticleImage = $article->article_image;

        if ($request->hasFile('article_image')) {
            $fileName = Helper::imageUploader(request()->article_image, 'article', 1000, 662, 500, 331);
        } else {
            $fileName = $oldArticleImage;
        }

        $article->article_title = $request->article_title;
        $article->article_image = $fileName;
        $article->article_description = $request->article_description;

        if ($article->save()) {
            return redirect()->route('admin.article.list');
        }
    }

}
