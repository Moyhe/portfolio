<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ResumeController extends Controller
{
    public function __invoke()
    {
        $fileName = 'resume/' . 'Mohye_Mahmoud_Full_Stack_Laravel_React_Developer.pdf';

        throw_if(
            ! $fileName,
            NotFoundHttpException::class,
            'Resume Not Found'
        );

        return Storage::download($fileName);
    }
}
