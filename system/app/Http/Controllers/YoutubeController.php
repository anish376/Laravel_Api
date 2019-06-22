<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\YoutubeRepository;
use App\Http\Resources\Youtube;

class YoutubeController extends Controller
{

    //
    public $youtubeRepo;

    public function __construct(YoutubeRepository $youtubeRepo)
    {
        $this->youtubeRepo = $youtubeRepo;
    }

    public function index()
    {
        // get all data
        $data = $this->youtubeRepo->getall();
        
        // return collection of youtube as a resource
        return Youtube::collection($data);

        // return all field data
       // return response()->json($data);
    }

    public function insertdata(Request $request)
    {
        $data = [
            'title'=> $request->input('title'),
            'description'=>$request->input('description')
        ];

        $this->youtubeRepo->insert($data);
   
            return "successsfully record inserted";
 
    }

    public function get($id)
    {
        $data = $this->youtubeRepo->getbyId($id);
        return response()->json($data);
    }

    public function updatedata(Request $request, $id)
    {

       $data = [
           'title'=> $request->input('title'),
           'description'=> $request->input('description')
       ];

      $result =  $this->youtubeRepo->update($data, $id);

       return response()->json($result);
       
    }


    public function delete($id)
    {
        $result = $this->youtubeRepo->deletebyId($id);
        if ($result == 1) {
            return response()->json(["msg" => "record deleted successfully"]);
        }
    }
}
