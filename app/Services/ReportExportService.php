<?php

namespace App\Services;

use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ReportExportService
{
    /**
     * Download Excel File
     *
     * @param $model
     * @param object $request
     * @return BinaryFileResponse
     */
    public function export($model, object $request): BinaryFileResponse
    {
        $title = $model::title();
        return Excel::download(new $model($request->startDate,$request->endDate), "$title.xlsx");
    }
}
