<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\UploadService;
use App\Validators\UploadValidator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Prettus\Validator\Exceptions\ValidatorException;
use \Prettus\Validator\Contracts\ValidatorInterface;

class FilesController extends Controller
{
    /**
     * Display a listing of the user resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|ResourceCollection
     */
    protected $uploadService;

    protected $validator;

    public function __construct(UploadService $uploadService, UploadValidator $validator)
    {
        $this->uploadService = $uploadService;
        $this->validator = $validator;
    }

    public function upload(Request $request)
    {
        try {
            $attributes = $request->all();
            $this->validator->with($attributes)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $url = $this->uploadService->upload('local', $attributes['image']);
            return response()->json(
                [
                    'status' => 'success',
                    'url' => $url,
                ]
            );

        } catch (ValidatorException $e) {
            dd($e);
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag(),
                ]);
            }
        }

    }

    public function uploadSimple(Request $request)
    {
        try {
            $file = $request->file('file');
            $attributes['image'] = $file;
            $this->validator->with($attributes)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
            return response()->json([
                'status' => 'success',
                'url' => $fileName,
            ]);

        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag(),
                ], 500);
            }
        }
    }

}
