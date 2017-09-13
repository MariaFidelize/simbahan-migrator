<?php

namespace App\Http\Controllers;

use App\Http\Requests\MigrateRequest;
use App\Jobs\CreateFakeChurchReviewsJob;
use App\Jobs\TruncateDatabaseJob;
use App\Jobs\UnpackGospelDataJob;
use App\Jobs\UnpackOrganizationData;
use App\Jobs\UnpackPrayerDataJob;
use App\Jobs\UnpackReadingsDataJob;
use App\Jobs\UnpackReflectionDataJob;
use App\Jobs\UnpackReligiousQuoteDataJob;
use App\Jobs\UnpackSaintDataJob;
use App\Migrator\Seeder;
use App\Simbahan\SaintPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DefaultController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function organization()
    {
        return view('organization');
    }

    public function gospel()
    {
        return view('gospel');
    }

    public function prayer()
    {
        return view('prayers');
    }

    public function reflection()
    {
        return view('reflection');
    }

    public function religiousQuote()
    {
        return view('religiousquote');
    }

    public function saint()
    {
        return view('saint');
    }

    public function migrate(MigrateRequest $request)
    {
        $seeder = new Seeder($request->file('dataSpreadSheet'));

        $seeder->handle();

        return redirect()->back();//Response::json(true);
    }

    public function migrateOrganization(MigrateRequest $request)
    {
        $request->file('dataSpreadSheet')->move(storage_path('app/public'), 'organization.xlsx');

        $this->dispatch(new UnpackOrganizationData());

        return Response::json(true);
    }

    public function migrateGospel(MigrateRequest $request)
    {
        $request->file('dataSpreadSheet')->move(storage_path('app/public'), 'gospel.xlsx');

        $this->dispatch(new UnpackGospelDataJob());

        return Response::json(true);
    }

    public function migrateReflection(MigrateRequest $request)
    {
        $request->file('dataSpreadSheet')->move(storage_path('app/public'), 'reflection.xlsx');

        $this->dispatch(new UnpackReflectionDataJob());

        return Response::json(true);
    }

    public function migrateReligiousQuote(MigrateRequest $request)
    {
        $request->file('dataSpreadSheet')->move(storage_path('app/public'), 'religious_quote.xlsx');

        $this->dispatch(new UnpackReligiousQuoteDataJob());

        return Response::json(true);
    }

    public function migrateChurchReviews()
    {
        $this->dispatch(new CreateFakeChurchReviewsJob());

        return Response::json(true);
    }

    public function migratePrayer(MigrateRequest $request)
    {
        $request->file('dataSpreadSheet')->move(storage_path('app/public'), 'prayer.xlsx');

        $this->dispatch(new UnpackPrayerDataJob());

        return Response::json(true);
    }

    public function migrateSaint(MigrateRequest $request, SaintPhoto $saintPhoto)
    {
        $request->file('dataSpreadSheet')->move(storage_path('app/public'), 'saints.xlsx');

        $this->dispatch(new UnpackSaintDataJob($saintPhoto));

        return Response::json(true);
    }

    public function resetMigration()
    {
        $this->dispatch(new TruncateDatabaseJob());

        return Response::json(true);
    }
}
