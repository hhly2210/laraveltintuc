<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Role;

use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $countPost = Post::all()->count();
        $countCategories = Category::all()->count();

        $role_admin = Role::where('name', '!=', 'user')->first();
        $countAdmin = User::all()->where('role_id', $role_admin->id)->count();

        $role_user = Role::where('name', 'user')->first();
        $countUser = User::all()->where('role_id', $role_user->id)->count();

        $postAll = Post::all();

        $countView = 0;
        $countComments = 0;
        foreach ($postAll as $post) {
            $countView =  $countView + $post->views;
            $countComments =  $countComments + $post->comments()->count();
        }

        /* 
            // Thống kê
        */
        $postsData = $this->getPostsData();

        return view('admin_dashboard.index', [
            'countPost' => $countPost,
            'countCategories' => $countCategories,
            'countAdmin' => $countAdmin,
            'countUser' => $countUser,
            'countView' => $countView,
            'countComments' => $countComments,
            'postsData' => $postsData,
        ]);
    }

    /* 
        Lấy dữ liệu 1 tháng
    */
    private function getPostsData()
    {
        $startDate = now()->subMonths()->startOfMonth();
        $endDate = now()->subMonths()->endOfMonth();

        $posts = Post::whereBetween('created_at', [$startDate, $endDate])->get();
        $viewData = $this->processDataForChart($posts);

        return $viewData;
    }

    /* 
        Xử lý dữ liệu 1 tháng
    */
    private function processDataForChart($posts)
    {
        $processedData = [
            'labels' => [],
            'views' => [],
            'posts' => [],
        ];

        $startDate = now()->subMonth()->startOfMonth();

        $endDate = now()->subMonth()->endOfMonth();

        $daysInMonth = Carbon::parse($startDate)->daysInMonth;

        for ($day = 1; $day <= $daysInMonth; $day++) {
            $processedData['labels'][] = $day;
            $processedData['views'][$day] = 0;
            $processedData['posts'][$day] = 0;
        }

        foreach ($posts as $post) {
            if ($post->created_at->between($startDate, $endDate)) {
                $dayOfMonth = $post->created_at->day;

                if (!isset($processedData['views'][$dayOfMonth])) {
                    $processedData['views'][$dayOfMonth] = 0;
                    $processedData['posts'][$dayOfMonth] = 0;
                }

                $processedData['views'][$dayOfMonth] += $post->views;
                $processedData['posts'][$dayOfMonth]++;
            }
        }

        $processedData['labels'] = array_values($processedData['labels']);
        $processedData['views'] = array_values($processedData['views']);
        $processedData['posts'] = array_values($processedData['posts']);

        return $processedData;
    }
}
