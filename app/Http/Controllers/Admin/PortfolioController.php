<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getPortfolioList() {
        $portfolios = Portfolio
            ::where('is_deleted', 0)
            ->paginate(10);

        $countPortfolios = Portfolio
            ::where('is_deleted', 0)
            ->get();

        $count = count($countPortfolios);

        return view('admin.portfolio.list', compact('portfolios', 'count'));
    }

    public function getPortfolioAdd() {
        return view('admin.portfolio.add');
    }

    public function getPortfolioEdit($id) {
        $portfolio = Portfolio::where('id', $id)->first();
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function portfolioInsert(Request $request) {
        $portfolio = new Portfolio();

        if ($request->hasFile('image')) {
            $fileName = Helper::imageUploader(request()->image, 'portfolio', 1800, 1201, 500, 334);
        } else {
            $fileName = 'no_image.jpg';
        }

        $portfolio->name = $request->name;
        $portfolio->image = $fileName;
        $portfolio->description = $request->description;
        $portfolio->url = $request->url;

        if ($portfolio->save()) {
            return redirect()->route('admin.portfolio.list');
        }
    }

    public function portfolioUpdate(Request $request) {
        $portfolio = Portfolio::findOrFail($request->id);
        $oldPortfolioImage = $portfolio->image;

        if ($request->hasFile('image')) {
            $fileName = Helper::imageUploader(request()->image, 'portfolio', 1800, 1201, 500, 334);
        } else {
            $fileName = $oldPortfolioImage;
        }

        $portfolio->name = $request->name;
        $portfolio->image = $fileName;
        $portfolio->description = $request->description;
        $portfolio->url = $request->url;

        if ($portfolio->save()) {
            return redirect()->route('admin.portfolio.list');
        }
    }
}
