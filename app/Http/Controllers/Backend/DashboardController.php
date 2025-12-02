<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Utilities\Company;
use App\Models\Backend\Home\HomeContent;
use App\Models\Backend\Home\SbuImage;
use App\Models\Backend\Utilities\ContactForm;
use App\Models\Backend\Home\Highlight;
use App\Models\Backend\Utilities\Review;
use App\Models\Backend\Regulation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';

        // Get statistics for all entities
        $stats = [
            'home_contents' => HomeContent::count(),
            'sbu_images' => SbuImage::count(),
            'contact_forms' => ContactForm::count(),
            'contact_forms_unread' => ContactForm::whereNull('category')->where('is_read', false)->count(),
            'complaints_unread' => ContactForm::whereNotNull('category')->where('is_read', false)->count(),
            'highlights' => Highlight::count(),
            'reviews' => Review::count(),
            'regulations' => Regulation::count(),
        ];

        // Get recent activities (last 5 items from each entity)
        $recentActivities = collect();

        // Recent Home Contents (all records)
        $recentHomeContents = HomeContent::latest()->get()->map(function($item) {
            return [
                'type' => 'Home Content',
                'action' => 'Updated',
                'title' => $item->title ?? $item->section_name ?? 'Hero Title',
                'time' => $item->updated_at->diffForHumans(),
                'icon' => 'bx-edit',
                'color' => 'primary'
            ];
        });

        // Recent Contact Forms (all records)
        $recentContactForms = ContactForm::latest()->get()->map(function($item) {
            return [
                'type' => 'Contact Form',
                'action' => 'Received',
                'title' => $item->name ?? 'New Contact',
                'time' => $item->created_at->diffForHumans(),
                'icon' => 'bx-message-alt-detail',
                'color' => 'success',
                'id' => $item->id,
                'read' => $item->is_read ?? false
            ];
        });

        // Recent Regulations (all records)
        $recentRegulations = Regulation::latest()->get()->map(function($item) {
            return [
                'type' => 'Regulation',
                'action' => 'Updated',
                'title' => $item->judul ?? 'New Regulation',
                'time' => $item->updated_at->diffForHumans(),
                'icon' => 'bx-file',
                'color' => 'warning'
            ];
        });

        // Recent Highlights (all records)
        $recentHighlights = Highlight::latest()->get()->map(function($item) {
            return [
                'type' => 'Highlight',
                'action' => 'Updated',
                'title' => $item->title ?? 'New Highlight',
                'time' => $item->updated_at->diffForHumans(),
                'icon' => 'bx-star',
                'color' => 'info'
            ];
        });

        // Recent Reviews (all records)
        $recentReviews = Review::latest()->get()->map(function($item) {
            return [
                'type' => 'Review',
                'action' => 'Received',
                'title' => $item->name ?? 'New Review',
                'time' => $item->created_at->diffForHumans(),
                'icon' => 'bx-comment',
                'color' => 'secondary'
            ];
        });

        // Prioritize unread contact forms first, then sort by time
        $recentActivities = $recentContactForms->filter(function($item) {
            return !$item['read'];
        })->concat(
            $recentContactForms->filter(function($item) {
                return $item['read'];
            })
        )->concat($recentHomeContents)
         ->concat($recentRegulations)
         ->concat($recentHighlights)
         ->concat($recentReviews)
         ->sortByDesc(function($item) {
             // Convert time to timestamp for proper sorting
             return strtotime($item['time']);
         });

        // Paginate the activities (show all activities, but paginated)
        $perPage = 20; // Show more activities per page
        $currentPage = request()->get('page', 1);
        $items = $recentActivities->forPage($currentPage, $perPage);
        $paginatedActivities = new \Illuminate\Pagination\LengthAwarePaginator(
            $items,
            $recentActivities->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'pageName' => 'page', 'fragment' => 'activities']
        );

        // Check if this is an AJAX request for pagination
        if (request()->ajax()) {
            return view('backend.dashbord.partials.timeline', compact('paginatedActivities'));
        }

        return view('backend.dashbord.index', compact('title', 'stats', 'paginatedActivities'));
    }

    public function clearActivities()
    {
        // Clear all activities by deleting all records from related tables
        HomeContent::query()->delete();
        ContactForm::query()->delete();
        Regulation::query()->delete();
        Highlight::query()->delete();
        Review::query()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Semua aktivitas telah berhasil dihapus.'
        ]);
    }
}
