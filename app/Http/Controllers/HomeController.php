<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\User;
use App\Models\Image;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use SimplePie;
use Sunra\PhpSimple\HtmlDomParser;

class HomeController extends Controller
{
    protected function parseDescription($description)
    {

        if ($description) {
            $imageUrl = preg_match('/<img\s+src="([^"]+)"\s*\/?>/i', $description, $matches);
        }
        if ($imageUrl && isset($matches[1])) {
            return html_entity_decode($matches[1]);
        }
        return null;
    }

    public function index()
    {

        $posts = Post::latest()
            ->approved()
            // where('approved',1)
            ->withCount('comments')->paginate(8);
        // phân trang 8 bài
        $recent_posts = Post::latest()->take(5)->get();
        $categories = Category::where('name', '!=', 'Chưa phân loại')->orderBy('created_at', 'DESC')->take(10)->get();
        // $categories = Category::where('name','!=','Chưa phân loại')->withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $tags = Tag::latest()->take(50)->get();


        /*----- Lấy ra 4 bài viết mới nhất theo các danh mục khác nhau -----*/
        $category_unclassified = Category::where('name', 'Chưa phân loại')->first();
        $posts_new[0] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->take(1)->get();
        $posts_new[1] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->take(1)->get();
        $posts_new[2] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->where('category_id', '!=', $posts_new[1][0]->category->id)
            ->take(1)->get();
        $posts_new[3] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->where('category_id', '!=', $posts_new[1][0]->category->id)
            ->where('category_id', '!=', $posts_new[2][0]->category->id)
            ->take(1)->get();

        // Lấy ra tin nổi bật -- Lấy theo views
        $outstanding_posts = Post::orderBy('views', 'DESC')->take(5)->get();

        // Lấy ra tất cả danh mục tin tức 
        $stt_home = 0;
        $category_home = Category::where('name', '!=', 'Chưa phân loại')->orderBy('created_at', 'DESC')->take(10)->get();
        foreach ($category_home as $category_item) {
            // Tạo tin tức mới nhất cho layout master
            $stt_home = $stt_home + 1;
            if ($stt_home === 1)
                $post_category_home0 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(5)->get();
            if ($stt_home === 2)
                $post_category_home1 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(6)->get();
            if ($stt_home === 3)
                $post_category_home2 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(8)->get();
            if ($stt_home === 4)
                $post_category_home3 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(5)->get();
            if ($stt_home === 5)
                $post_category_home4 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(6)->get();
            if ($stt_home === 6)
                $post_category_home5 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(5)->get();
            if ($stt_home === 7)
                $post_category_home6 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(5)->get();
            if ($stt_home === 8)
                $post_category_home7 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(5)->get();
            if ($stt_home === 9)
                $post_category_home8 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(8)->get();
            if ($stt_home === 10)
                $post_category_home9 =  Post::latest()->approved()->withCount('comments')->where('category_id', $category_item->id)->take(4)->get();
        }

        // RSS
        $feedUrl = 'https://vnexpress.net/rss/tin-moi-nhat.rss';

        $feed = new SimplePie();
        $feed->set_feed_url($feedUrl);
        $feed->enable_cache(false);
        $feed->init();
        $feed->handle_content_type();

        $items = $feed->get_items();
        $rss = [];
        foreach ($items as $item) {
            $description = $item->get_description();
            $parsedDescription = $this->parseDescription($description);
            $rss[] = [
                'title' => $item->get_title(),
                'description' => $parsedDescription,
                'link' => $item->get_permalink(),
            ];
        }

        // End Rss


        return view('home', [
            'posts' => $posts,
            'recent_posts' => $recent_posts,
            'posts_new' => $posts_new, // Bài viết mới nhất theo mục
            'post_category_home0' => $post_category_home0, // Bài viết danh mục 5
            'post_category_home1' => $post_category_home1, // Bài viết danh mục 1
            'post_category_home2' => $post_category_home2, // Bài viết danh mục 2
            'post_category_home3' => $post_category_home3, // Bài viết danh mục 3
            'post_category_home4' => $post_category_home4, // Bài viết danh mục 4
            'post_category_home5' => $post_category_home5, // Bài viết danh mục 10
            'post_category_home6' => $post_category_home6, // Bài viết danh mục 6
            'post_category_home7' => $post_category_home7, // Bài viết danh mục 7
            'post_category_home8' => $post_category_home8, // Bài viết danh mục 8
            'post_category_home9' => $post_category_home9, // Bài viết danh mục 9
            'outstanding_posts' => $outstanding_posts, // Bài viết nỗi bật
            'categories' => $categories,
            'category_home' => $category_home,
            'tags' => $tags,
            'rss' => $rss,
        ]);
    }

    public function search(Request $request)
    {

        $recent_posts = Post::latest()->take(5)->get();
        $categories  = Category::where('name', '!=', 'Chưa phân loại')->withCount('posts')->orderBy('created_at', 'DESC')->take(10)->get();

        /*----- Lấy ra 4 bài viết mới nhất theo các danh mục khác nhau -----*/
        $category_unclassified = Category::where('name', 'Chưa phân loại')->first();
        $posts_new[0] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->take(1)->get();
        $posts_new[1] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->take(1)->get();
        $posts_new[2] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->where('category_id', '!=', $posts_new[1][0]->category->id)
            ->take(1)->get();
        $posts_new[3] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->where('category_id', '!=', $posts_new[1][0]->category->id)
            ->where('category_id', '!=', $posts_new[2][0]->category->id)
            ->take(1)->get();

        // Bài viết nổi bật
        $outstanding_posts = Post::approved()->where('category_id', '!=',  $category_unclassified->id)->take(5)->get();

        $key = $request->search;
        // tìm kiếm kết quả danh mục
        // $cat = Category::where('name','like' , '%'.$key.'%')->first();
        // $pro = Category::where('name','like' , '%'.$key.'%')->first();

        $posts = Post::latest()->withCount('comments')->approved()->where('title', 'like', '%' . $key . '%')->paginate(30);

        $title = 'Kết quả tìm kiếm';
        $title_t = 'Kết quả tìm kiếm theo';
        $time = '(0,36 giây) ';

        return view('search', compact('posts', 'title', 'time', 'recent_posts', 'categories', 'key', 'posts_new', 'outstanding_posts'));
    }

    public function newPost()
    {

        // Bài viết mới nhất
        $recent_posts = Post::latest()->take(5)->get();
        $categories  = Category::where('name', '!=', 'Chưa phân loại')->withCount('posts')->orderBy('created_at', 'DESC')->take(10)->get();

        /*----- Lấy ra 4 bài viết mới nhất theo các danh mục khác nhau -----*/
        $category_unclassified = Category::where('name', 'Chưa phân loại')->first();
        $posts_new[0] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->take(1)->get();
        $posts_new[1] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->take(1)->get();
        $posts_new[2] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->where('category_id', '!=', $posts_new[1][0]->category->id)
            ->take(1)->get();
        $posts_new[3] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->where('category_id', '!=', $posts_new[1][0]->category->id)
            ->where('category_id', '!=', $posts_new[2][0]->category->id)
            ->take(1)->get();

        // Bài viết nổi bật
        $outstanding_posts = Post::approved()->where('category_id', '!=',  $category_unclassified->id)->take(5)->get();


        // Bài viết mới nhất
        $newPosts_category  = Post::latest()->approved()->where('category_id', '!=',  $category_unclassified->id)->take(20)->get();

        return view('newPost', compact(
            'recent_posts',
            'categories',
            'posts_new',
            'outstanding_posts',
            'newPosts_category'
        ));
    }

    public function viewPost()
    {

        // Bài viết mới nhất
        $recent_posts = Post::latest()->take(5)->get();
        $categories  = Category::where('name', '!=', 'Chưa phân loại')->withCount('posts')->orderBy('created_at', 'DESC')->take(10)->get();

        /*----- Lấy ra 4 bài viết mới nhất theo các danh mục khác nhau -----*/
        $category_unclassified = Category::where('name', 'Chưa phân loại')->first();
        $posts_new[0] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->take(1)->get();
        $posts_new[1] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->take(1)->get();
        $posts_new[2] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->where('category_id', '!=', $posts_new[1][0]->category->id)
            ->take(1)->get();
        $posts_new[3] = Post::latest()->approved()
            ->where('category_id', '!=', $category_unclassified->id)
            ->where('category_id', '!=', $posts_new[0][0]->category->id)
            ->where('category_id', '!=', $posts_new[1][0]->category->id)
            ->where('category_id', '!=', $posts_new[2][0]->category->id)
            ->take(1)->get();

        // Bài viết nổi bật
        $outstanding_posts = Post::approved()->where('category_id', '!=',  $category_unclassified->id)->take(5)->get();

        // Bài viết xem nhiều nhất
        $viewPosts_category  = Post::approved()->where('category_id', '!=',  $category_unclassified->id)->orderBy('views', 'DESC')->take(20)->get();

        return view('viewPost', compact(
            'recent_posts',
            'categories',
            'posts_new',
            'outstanding_posts',
            'viewPosts_category'
        ));
    }

    public function erorr404()
    {
        return view('errors.404');
    }

    public function profile()
    {
        return view('profile');
    }

    private $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'image' => 'nullable|file|mimes:jpg,png,webp,svg,jpeg|dimensions:max-width:300,max-height:300',
    ];

    public function update(Request $request)
    {
        $user = auth()->user();

        if ($request->email !== $user->email) {
            $this->rules['email'] = ['required', 'email', Rule::unique('users')->ignore($user)];
        } else {
            $this->rules['email'] = '';
        }

        $validated = $request->validate($this->rules);
        $user->update($validated);

        if ($request->has('image')) {
            $image_user = Image::where('imageable_id',  $user->id)->first();
            if ($image_user)
                $image_user->delete();

            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $file_extension = $image->getClientOriginalExtension();
            $path   = $image->store('images', 'public');

            $user->image()->create([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path,
            ]);
        }

        return redirect()->route('profile')->with('success', 'Sửa tài khoản thành công.');
    }
}
