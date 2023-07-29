<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;

class PassingGradeController extends Controller
{
    // NOTE GET /passing-grade
    /* -------------------------------------------------------------------------- */
    /*                             LAMAN PASSING GRADE                            */
    /* -------------------------------------------------------------------------- */
    public function index()
    {
        $data = [
            'title'     => 'Passing Grade',
            'script'    => 'components.scripts.passingGrade'
        ];

        return view('admin.passingGrade', $data);
    }
    // NOTE GET /passing-grade/{id}
    /* -------------------------------------------------------------------------- */
    /*                       AMBIL DATA ATAU FETCH DATATABLE                      */
    /* -------------------------------------------------------------------------- */
    public function show($id)
    {
        if (is_numeric($id)) {
            // SECTION AMBIL DATA BY ID
            $data = DB::table('passing_grades')->where('id', $id)->first();

            return Response::json($data);
            // !SECTION AMBIL DATA BY ID
        }
        // SECTION GET DATATABLE
        $data = DB::table('passing_grades')->orderBy('passing_grade', 'asc');

        return DataTables::of($data)
            ->addColumn(
                'action',
                function ($row) {
                    // SECTION kolom aksi
                    // SECTION data
                    $data   = [
                        'id'    => $row->id,
                    ];
                    // !SECTION data
                    // NOTE kembalian
                    return view('components.buttons.passingGrade', $data);
                    // !SECTION kolom aksi
                }
            )
            ->addIndexColumn()
            ->make(true);
        // !SECTION GET DATATABLE
    }
}
