<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LibreEHR\Core\Emr\Repositories\DocumentRepository;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store( Request $request )
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $documentRepository = new DocumentRepository();
        $file = $documentRepository->getFile( $id );
        return response( $file, 200 )->header( 'Content-Type', 'image/jpeg' );
    }
}
