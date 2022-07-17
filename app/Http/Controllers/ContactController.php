<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    public function download( $filename = '' )
    {
        // Check if file exists in public/documents/
        $file_path = storage_path() . "/documents" . $filename;

        $headers = array(
            'Content-Type' => 'application/csv',
            'Content-Disposition' => 'attachment; filename=' . $filename,
          );
        if ( file_exists( $file_path ) ) {
            // Send Download
            return Response::download( $file_path, $filename, $headers );
        } else {
            // Error
            exit( 'Le fichier demandé n\'existe pas ' );
        }
    }
}
