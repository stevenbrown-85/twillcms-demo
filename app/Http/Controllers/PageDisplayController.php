<?php

namespace App\Http\Controllers;

 
use App\Repositories\PageRepository;
use Illuminate\Contracts\View\View;
use A17\Twill\Facades\TwillAppSettings;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;

class PageDisplayController extends Controller
{
    use SetsMetadata;

    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);

        abort_if(!$page, 404);

        $this->setMetadata($page);

        return view('site.page', ['item' => $page]);
    }

    public function home(): View
    {
        if (TwillAppSettings::get('homepage.homepage.page')->isNotEmpty()) {
            /** @var \App\Models\Page $frontPage */
            $frontPage = TwillAppSettings::get('homepage.homepage.page')->first();

            if ($frontPage->published) {
                $this->setMetadata($frontPage);

                return view('site.page', ['item' => $frontPage]);
            }
        }

        abort(404);
    }

}
